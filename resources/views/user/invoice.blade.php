@extends('layouts.app')
@push('custom_css')
<style>
	@media print {
	  .hidden-print {
	    display: none !important;
	  }
	}
	.card {
		border:none !important;
		background: #fff !important;
	}
	.card-header {
		background: #fff !important;
		border-color: #EEE;
	}
 	.card-body p {
    	font-size: 18px;
    	font-weight: 600;
    	color: #000000;
	}

	.card-body h4, .card-body p{
	    font-size: 15px;
	    font-family: 'Poppins', sans-serif;
	}

address {
    margin-bottom: 1rem;
    font-style: normal;
    line-height: 27px;
    font-size: 15px;
    color: #555;
}
.card-body h1 {
    font-size: 22px;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
}
.card-body td.title {
    font-size: 14px;
    font-weight: 500;
    font-family: 'Poppins';
    color: #000;
    vertical-align: middle;
}


</style>
@endpush
<?php
$row = $transaction ?? [];
$settings = getSetting();
$invoice_details = json_decode($row->invoice_details);
?>
@section('title') {{ __('Invoice')}} @endsection
@section('card','active')
@section('content')
<div class="container">
	<nav class="breadcrumb_sec">
		<div class="row align-items-center">
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none py-3">
                    <a href="{{ route('user.invoice.download',$row->id) }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path>
                            <polyline points="7 11 12 16 17 11"></polyline>
                            <line x1="12" y1="4" x2="12" y2="16"></line>
                        </svg>
                        {{ __('Download')}}
                    </a>
                </div>
            </div>
	</nav>
</div>
<!-- Contact -->
<div class="setting_sec section mt-3 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card card-lg">
					<div class="p-4" id="invoice">
						<div class="card-body">
							<div class="row">
								<div class="col-6">
									<p class="h3">{{ $settings->site_name }}</p>
									<address>
										{{ $invoice_details->from_billing_name }}<br>
                                        {{ $invoice_details->from_billing_address }}
                                        <br>
                                       {{ $invoice_details->from_billing_city }},
                                       {{ $invoice_details->from_billing_state }}
                                       <br>
                                       {{ $invoice_details->from_billing_country }},
                                       {{ $invoice_details->from_billing_zipcode }}
										<br>
                                        {{ $invoice_details->from_billing_email }}

										<br>
                                        {{ $invoice_details->from_billing_phone }}
                                        <br>
										<br>
										<p>Tax Number: {{ $invoice_details->from_vat_number }}</p>
									</address>
								</div>
								<div class="col-6 text-end">
									<p class="h3"> {{ $invoice_details->to_billing_name }}</p>
									<address>
                                       {{ $invoice_details->to_billing_address }}
                                       <br>
                                       {{ $invoice_details->to_billing_city }}
                                       {{ $invoice_details->to_billing_state }}
                                       <br>

                                       {{ $invoice_details->to_billing_country }}
                                       {{ $invoice_details->to_billing_zipcode }}

										<br>
                                        {{ $invoice_details->to_billing_email }}
										<br>
                                        {{ $invoice_details->to_billing_phone }}
										<br>
									</address>
									<h4>INVOICE DATE : {{date('d-m-Y H:i A', strtotime( $row->transaction_date))}}</h4>
								</div>
								<div class="row">
									<div class="col-10 my-5">
										<h1>
                                        INVOICE NO : {{ $row->invoice_prefix }}-{{ $row->transaction_id }}</h1>
									</div>
								</div>
							</div>
							<table class="table table-transparent">
								<thead>
									<tr>
										<th class="text-center" style="width: 5%"></th>
										<th>Description</th>
										<th class="text-center" style="width: 8%"></th>
										<th class="text-end" ></th>
										<th class="text-end" style="width: 10%">Amount</th>
									</tr>
								</thead>
								<tbody><tr>
									<td class="text-center">1</td>
									<td>
										<p class="strong mb-1">Extended : {{ $row->desciption }}</p>
										<div class="text-muted">Via :
										{{ $row->payment_gateway_name }}</div>
									</td>
									<td class="text-center"></td>
									<td class="text-end"></td>
									<td class="text-end" style="width: 23%">$ {{ CurrencyFormat($invoice_details->subtotal,2) }}</td>
								</tr>

								<tr>
									<td colspan="4" class="title strong text-end">Subtotal</td>
									<td class="text-end" style="width: 23%">$ {{ CurrencyFormat($invoice_details->subtotal,2) }}</td>
								</tr>
								<tr>
									<td colspan="4" class="title strong text-end">Tax Amount</td>
									<td class="text-end" style="width: 23%">$ {{ CurrencyFormat($invoice_details->tax_amount,2) }}</td>
								</tr>

								<tr>
									<td colspan="4" class="title font-weight-bold text-uppercase text-end">Total</td>
									<td class="font-weight-bold text-end">
										<strong>$ {{ CurrencyFormat($invoice_details->invoice_amount,2) }}</strong>
									</td>
								</tr>
							</tbody>
                        </table>
							<p class="text-muted text-center mt-5" style="font-weight: 300;">
								Thank you very much for doing business with us. We look forward to working with you again!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('custom_js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function generatePDF() {
        var opt = {
            filename:     "{{ $row->transaction_id }}",
            html2canvas:  { scale: 4 },
        };
        const element = document.getElementById('invoice');
        html2pdf()
        .set(opt)
		.from(element)
		.save();
    }
</script>

@endpush
