@extends('layouts.app')
@section('shop', 'active')
<?php
$rows = $data ?? [];
?>
@section('title') {{ __('Terms & Conditions') }} @endsection
@push('custom_css')
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <style>
        .carousel-image {
            min-width: 150px;
            height: 200px;
        }
    </style>
@endpush

@section('meta_tag')
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:description" content="">
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="WEBSITE" />
    <meta property="og:title" content=": Your Digital Business Card" />
    <meta name="twitter:title" content=": Your Digital Business Card">
    <meta name="twitter:card" value="summary_large_image">
    <meta property="og:image" content="" />
    <meta name="twitter:image" content="">
    <meta name="twitter:site" content="{{ Request::url() }}" />
    <meta name="twitter:url" content="{{ Request::url() }}" />
    <link rel="canonical" href="{{ Request::url() }}">
    <meta property="og:site_name" content="" />
    <meta property="og:type" content="website" />
@endsection
@section('content')
    <!-- ======================= Shop Details  =========================== -->
    <div class="shop_details_sec mt-5 mb-5">

        <!-- container -->
        <div class="container">
            <div class="page_wrapper">

                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="singel_pro_gallery">
                            <div class="gallery_single carousel carousel-main">

                                <div class="carousel-cell">
                                    <img src="{{ asset(getPhoto($product->thumbnail)) }}" class="img-fluid" alt="image">
                                </div>

                                @foreach ($product->hasImages as $images)
                                    <div class="carousel-cell">
                                        <img src="{{ asset(getPhoto($images->image_name)) }}" class="img-fluid"
                                            alt="image">
                                    </div>
                                @endforeach

                            </div>

                            <div class="carousel carousel-nav mt-3">
                                <div class="carousel-cell">
                                    <img src="{{ asset(getPhoto($product->thumbnail)) }}" class="img-fluid" alt="image">
                                </div>

                                @foreach ($product->hasImages as $images)
                                    <div class="carousel-cell">
                                        <img src="{{ asset(getPhoto($images->image_name)) }}" class="img-fluid"
                                            alt="image">
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single_pro_content">
                            <h2>{{ $product->product_name }}</h2>
                            <span>{{ getprice($product->unit_price_regular) }}</span>
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span>50 Reviews</span>
                            </p>
                            <form action="{{ route('addtocart') }}" method="post" id="quanityForm">
                                @csrf
                                <div class="qtyfield mb-4">
                                    <span>Qty</span>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-bg-minus qty_number" data-type="minus"
                                                data-field="qty">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </span>
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <input type="text" name="qty" id="qty"
                                            class="text-center custome_control"
                                            value="{{ session('cart')[$product->id]['quantity'] ?? 0 }}" min="0"
                                            max="10" readonly>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-danger qty_number" data-type="plus"
                                                data-field="qty">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>

                                <div class="add_to_cart">
                                    <a href="javascript:void(0)" onclick="addTocart()">Add to Cart</a>
                                </div>
                            </form>

                            <div class="short_info mt-4">
                                <p>{!! Str::limit($product->details, 220, '...') !!}</p>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- details info --}}
                <div class="details_tabs mt-5 mb-4">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">Description</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Compatibility</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                aria-selected="false">Shipping &
                                Returns</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="single_pro_details">
                                {!! $product->details !!}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="single_pro_details">
                                <p></p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vitae veritatis
                                    dolorem, rem saepe quibusdam tempora, neque quo voluptatum officia omnis amet, vel
                                    quisquam excepturi. Quod, rem. Nam, repudiandae laudantium!</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vitae veritatis
                                    dolorem, rem saepe quibusdam tempora, neque quo voluptatum officia omnis amet, vel
                                    quisquam excepturi. Quod, rem. Nam, repudiandae laudantium!</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="single_pro_details">
                                <ul>
                                    <li><strong>Please expect your order to arrive within 1-2 weeks.</strong></li>
                                    <li>Your order will be processed within 1-3 business days before it is shipped.</li>
                                    <li>Standard US shipping time is 3-7 business days.</li>
                                    <li>Expedited shipping options are available during checkout.</li>
                                    <li>International shipping options are also available.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- review --}}
                <div class="user_reviews">
                    <div class="header mb-4">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h3>Reviews</h3>
                            </div>
                            <div class="col-6">
                                <a href="#review_form" class="float-end">Write a Review</a>
                            </div>
                        </div>
                    </div>

                    <div class="review_wrap">
                        <div class="total_review mb-3">
                            <h5>40 Reviews</h5>
                        </div>
                        {{-- review item --}}
                        <div class="review_item">
                            <div class="d-flex position-relative">
                                <div class="user_img">
                                    <img src="{{ asset('assets/img/user.jpg') }}" class="flex-shrink-0 me-3"
                                        alt="">
                                </div>
                                <div class="review_article">
                                    <h3>Augustin H.
                                        <span>Verified Buyer</span>
                                        <span class="float-end">12/22/23</span>
                                    </h3>
                                    <div class="star mb-3">
                                        <i class="star_icon fa fa-star"></i>
                                        <i class="star_icon fa fa-star"></i>
                                        <i class="star_icon fa fa-star"></i>
                                        <i class="star_icon fa fa-star"></i>
                                        <i class="star_icon fa fa-star"></i>
                                    </div>
                                    <h4>Works great!</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, beatae dolorem
                                        debitis similique, minima cumque qui ex nobis asperiores consectetur, modi
                                        perspiciatis possimus! Nobis maxime eaque velit nisi voluptatum repudiandae?</p>
                                </div>
                            </div>
                        </div>
                        {{-- review item --}}
                        <div class="review_item">
                            <div class="d-flex position-relative">
                                <div class="user_img">
                                    <img src="{{ asset('assets/img/user.jpg') }}" class="flex-shrink-0 me-3"
                                        alt="">
                                </div>
                                <div class="review_article">
                                    <h3>Augustin H.
                                        <span>Verified Buyer</span>
                                        <span class="float-end">12/22/23</span>
                                    </h3>
                                    <div class="star mb-3">
                                        <i class="star_icon fa fa-star"></i>
                                        <i class="star_icon fa fa-star"></i>
                                        <i class="star_icon fa fa-star"></i>
                                        <i class="star_icon fa fa-star"></i>
                                        <i class="star_icon fa fa-star"></i>
                                    </div>
                                    <h4>Works great!</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, beatae dolorem
                                        debitis similique, minima cumque qui ex nobis asperiores consectetur, modi
                                        perspiciatis possimus! Nobis maxime eaque velit nisi voluptatum repudiandae?</p>
                                </div>
                            </div>
                        </div>
                        {{-- review item --}}
                        <div class="review_item">
                            <div class="d-flex position-relative">
                                <div class="user_img">
                                    <img src="{{ asset('assets/img/user.jpg') }}" class="flex-shrink-0 me-3"
                                        alt="">
                                </div>
                                <div class="review_article">
                                    <h3>Augustin H.
                                        <span>Verified Buyer</span>
                                        <span class="float-end">12/22/23</span>
                                    </h3>
                                    <div class="star mb-3">
                                        <i class="star_icon fa fa-star"></i>
                                        <i class="star_icon fa fa-star"></i>
                                        <i class="star_icon fa fa-star"></i>
                                        <i class="star_icon fa fa-star"></i>
                                        <i class="star_icon fa fa-star-0"></i>
                                    </div>
                                    <h4>Works great!</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, beatae dolorem
                                        debitis similique, minima cumque qui ex nobis asperiores consectetur, modi
                                        perspiciatis possimus! Nobis maxime eaque velit nisi voluptatum repudiandae?</p>
                                </div>
                            </div>
                        </div>
                        {{-- review item --}}
                        <div class="review_item">
                            <div class="d-flex position-relative">
                                <div class="user_img">
                                    <img src="{{ asset('assets/img/user.jpg') }}" class="flex-shrink-0 me-3"
                                        alt="">
                                </div>
                                <div class="review_article">
                                    <h3>Augustin H.
                                        <span>Verified Buyer</span>
                                        <span class="float-end">12/22/23</span>
                                    </h3>
                                    <div class="star mb-3">
                                        <i class="star_icon fa fa-star"></i>
                                        <i class="star_icon fa fa-star"></i>
                                        <i class="star_icon fa fa-star"></i>
                                        <i class="star_icon fa fa-star"></i>
                                        <i class="star_icon fa fa-star"></i>
                                    </div>
                                    <h4>Works great!</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, beatae dolorem
                                        debitis similique, minima cumque qui ex nobis asperiores consectetur, modi
                                        perspiciatis possimus! Nobis maxime eaque velit nisi voluptatum repudiandae?</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- write a review --}}
                    <div class="review_form mt-5 mb-5" id="review_form">
                        <form action="#" method="post">
                            <div class="title mb-3">
                                <h3>Write a Review</h3>
                            </div>
                            <div class="mb-3">
                                <label for="score" class="form-label">Score</label>
                                <div id="rateYo"></div>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="review" class="form-label">Review</label>
                                <textarea name="review" id="review" cols="30" rows="5" class="form-control"
                                    style="height: 120px !important;" required></textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>
                        </form>
                    </div>
                    {{-- write a review --}}
                </div>

                {{-- related products --}}
                <div class="related_products mb-5">
                    <div class="title text-center mb-4">
                        <h3>You may also like</h3>
                    </div>
                    <div class="product_carousel_item">
                        <div class="related_carousel">
                            <div class="owl-carousel">
                                {{-- carousel item --}}
                                <div class="item">
                                    <div class="product_item">
                                        <div class="product_img text-center">
                                            <a href="#">
                                                <img src="{{ asset('assets/img/products/1.jpg') }}" class="img-fluid"
                                                    alt="image">
                                            </a>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_title text-center mb-4">
                                                <h3><a href="#">Mtgpro Card</a></h3>
                                            </div>
                                            <div class="product_article">
                                                <p>
                                                    <a href="#">
                                                        Add to Cart
                                                    </a>
                                                    <span class="float-end">$2333</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- carousel item --}}
                                <div class="item">
                                    <div class="product_item">
                                        <div class="product_img text-center">
                                            <a href="#">
                                                <img src="{{ asset('assets/img/products/2.jpg') }}" class="img-fluid"
                                                    alt="image">
                                            </a>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_title text-center mb-4">
                                                <h3><a href="#">Mtgpro Card</a></h3>
                                            </div>
                                            <div class="product_article">
                                                <p>
                                                    <a href="#">
                                                        Add to Cart
                                                    </a>
                                                    <span class="float-end">$2333</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- carousel item --}}
                                <div class="item">
                                    <div class="product_item">
                                        <div class="product_img text-center">
                                            <a href="#">
                                                <img src="{{ asset('assets/img/products/3.jpg') }}" class="img-fluid"
                                                    alt="image">
                                            </a>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_title text-center mb-4">
                                                <h3><a href="#">Mtgpro Card</a></h3>
                                            </div>
                                            <div class="product_article">
                                                <p>
                                                    <a href="#">
                                                        Add to Cart
                                                    </a>
                                                    <span class="float-end">$2333</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- carousel item --}}
                                <div class="item">
                                    <div class="product_item">
                                        <div class="product_img text-center">
                                            <a href="#">
                                                <img src="{{ asset('assets/img/products/4.jpg') }}" class="img-fluid"
                                                    alt="image">
                                            </a>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_title text-center mb-4">
                                                <h3><a href="#">Mtgpro Card</a></h3>
                                            </div>
                                            <div class="product_article">
                                                <p>
                                                    <a href="#">
                                                        Add to Cart
                                                    </a>
                                                    <span class="float-end">$2333</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- carousel item --}}
                                <div class="item">
                                    <div class="product_item">
                                        <div class="product_img text-center">
                                            <a href="#">
                                                <img src="{{ asset('assets/img/products/5.jpg') }}" class="img-fluid"
                                                    alt="image">
                                            </a>
                                        </div>
                                        <div class="product_content">
                                            <div class="product_title text-center mb-4">
                                                <h3><a href="#">Mtgpro Card</a></h3>
                                            </div>
                                            <div class="product_article">
                                                <p>
                                                    <a href="#">
                                                        Add to Cart
                                                    </a>
                                                    <span class="float-end">$2333</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- container -->
    </div>
@endsection

@push('custom_js')
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

    <script>
        // quantity field
        $('.qty_number').click(function(e) {
            e.preventDefault();
            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());

            if (!isNaN(currentVal)) {
                if (type == 'minus') {
                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }
                } else if (type == 'plus') {
                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }
                }
            } else {
                input.val(0);
            }
        });


        // product gallery
        $('.carousel-main').flickity({
            wrapAround: true,
            contain: true,
        });
        // navigation
        $('.carousel-nav').flickity({
            asNavFor: '.carousel-main',
            contain: true,
            pageDots: false,
        });

        //rateYo star icon
        $(function() {
            $("#rateYo").rateYo({
                starWidth: '30px',
                fullStar: true,
                mormalFill: 'yellow',
                ratedFill: 'orange',
                rating: 2,
                onSet: function(rating, rateYoInstance) {
                    // $('#rating').val(rating);
                }
            });
        });

        // related carousel
        $('.related_carousel .owl-carousel').owlCarousel({
            loop: true,
            dots: false,
            nav: false,
            items: 4,
            smartSpeed: 500,
            autoHeight: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                },
                575: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                992: {
                    items: 4,
                }
            }
        });

        function addTocart() {
            $('#quanityForm').submit();

        }
    </script>
@endpush
