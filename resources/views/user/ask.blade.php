@extends('user.layouts.app')
@section('content')
    @section('title') {{ __('Create Card') }} @endsection
@section('chatGtp', 'active')
@push('custom_css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slim.min.css') }}" />
@endpush

@php
    $icon_group = Config::get('app.icon_group');
    $tabindex = 1;
    $email = DB::table('social_icon')
        ->where('icon_name', 'email')
        ->first();
@endphp

@push('custom_css')
    <style>
        .card {
            box-shadow: rgb(35 46 60 / 4%) 0 2px 4px 0;
            border: 1px solid rgba(101, 109, 119, .16);
            border-radius: 1px;
            background: #fff !important;
        }

        .profile_info h3 {
            font-size: 17px;
            font-weight: 600;
            font-family: 'Inter';
            margin: 0;
            color: #070707;
        }

        .profile_info span {
            color: #888888;
            font-size: 14px;
            font-family: 'Inter';
            font-weight: 400;
        }

        .divider {
            border-bottom: 1px dashed #DDD;
            position: relative;
            margin: 23px 0px;
        }

        .divider i {
            position: absolute;
            top: -12px;
            right: 0;
            left: 0;
            text-align: center;
            margin: 0 auto;
            font-size: 28px;
            background: #fff;
            width: 53px;
            color: orange;
        }

        .custom_table {
            background: rgb(255, 255, 255);
            padding: 30px;
            border-radius: 16px;
        }

        .custom_image {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 85px;
            height: 80px;
        }

        .chat-container {
            padding: 20px;
            height: 500px;
            border: 1px solid rgba(32, 33, 35, .5);
            background-color: rgba(32, 33, 35, .5);
            overflow-y: scroll;
        }


        .chat-box .chat-message {
            background-color: rgba(32, 33, 35, .5);
            border-radius: 10px;
            padding: 10px;
            font-size: 14px;
            max-width: 100%;
        }

        .chat-sent {
            background-color: rgba(32, 33, 35, .5);
            margin-left: 0;
            margin-right: 0;
            margin: 15px;
            color: #DDD;
            border-radius: 3px;
            display: flex;
            align-items: center;
        }



        .sender {
            width: 50px;
            height: 50px;
            border-radius: 50%;

            background-size: cover !important;


            background: url('{{ isset(auth()->user()->profile_image) ? asset(auth()->user()->profile_image) : asset('assets/img/default-profile.png') }}');


        }

        .chat-received {
            background-color: rgba(32, 33, 35, .5);
            margin-left: 0;
            margin-right: 0;
            margin: 15px;
            color: #DDD;
            border-radius: 3px;
            display: flex;
            align-items: center;
        }



        .receiver {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #ffffff;
            background-size: cover !important;
            background: url({{ asset('assets/img/icon/ChatGPT_logo.svg') }});

        }

        #submitBtn {
            border-radius: 0px 10px 10px 0px !important;

        }
    </style>
@endpush


@section('card', 'active')
<!-- main content -->
<div class="content-wrapper" style="min-height: 507px;">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ask</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-body custom_table">
                        <div class="px-2 py-2">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <h1 class="text-center my-5">Chat with CHATGPT</h1>
                                    <div class="chat-container">
                                        <div class="row p-3 chat-received">
                                            <div class="receiver"></div>
                                            <p class="m-0 ml-2">Wellcome {{ auth()->user()->name }}.</p>
                                        </div>
                                    </div>
                                    <form action="javascript:void(0)" id="askform">
                                        <div class="input-group">


                                            <textarea type="text" class="form-control" id="message" placeholder="Type your message"
                                                aria-label="Type your message"></textarea>
                                            <button class="btn btn btn-primary" type="submit" id="submitBtn">
                                                <i class="fa-sharp fa-solid fa-paper-plane"></i></button>




                                            {{-- <textarea class="form-control" required  rows="3" placeholder="Type your message"></textarea>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary">Send</button>
                                            </div> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('custom_js')
<script>
    $('#askform').submit(function(e) {
        e.preventDefault();

        let message = $('#message').val();


        html = "";
        html +=
            `<div class="row p-3 chat-sent"><div class="sender"></div><p class="m-0 ml-2">${message}</p</div>`;


        $('.chat-container').append(html);
        $('#askform')[0].reset();
        let url = "{{ url('/ask') }}" + "/" + message;

        console.log(url);

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            beforeSend: function() {
                $('#submitBtn').html(
                    `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="visually-hidden">Loading...</span>`
                ).prop('disabled', true);
            },
            success: function(data) {
                console.log(data);
                html2 = "";

                html2 +=
                    `<div class="row p-3 chat-received"><div class="receiver"></div><p class="m-0 ml-2">${data}</p></div>`;
                $('.chat-container').append(html2);

            },
            error: function(error) {
                console.log(error);
            },
            complete: function() {
                $('#submitBtn').html(
                    `Send`
                ).prop('disabled', false);
            }

        });

    })
</script>
@endpush
