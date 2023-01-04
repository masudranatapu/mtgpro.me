<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>Invoice</title>
      <style>
      </style>
    </head>
    <?php
    $row = $data['transaction'] ?? [];
    $settings = getSetting();
    // dd($data['transaction']);
    $invoice_details = json_decode($row->invoice_details);
    ?>
<body>
<div class="setting_sec section mt-3 mb-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card card-lg">
					<div class="p-4" id="invoice">
						<div class="card-body">
                            <table class="table table-light" style="width: 100%;margin-bottom: 1rem;color: #212529;vertical-align: top;border-color: #dee2e6;border-collapse: collapse;">
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ $settings->site_name }}
                                                <br>
                                            {{ $invoice_details->from_billing_name }}
                                            <br>
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

                                        </td>
                                        <td style="text-align: right">
                                            {{ $invoice_details->to_billing_name }}
                                            <br>
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
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;">INVOICE NO : {{ $row->invoice_prefix }}-{{ $row->gobiz_transaction_id }}</td>
                                        <td style="text-align: right;">INVOICE DATE : {{date('d-m-Y H:i A', strtotime( $row->transaction_date))}}</td>
                                    </tr>
                                </tbody>
                            </table>

							<table style="width: 100%;margin-bottom: 1rem;color: #212529;vertical-align: top;border-collapse: collapse;">
								<thead style="vertical-align: bottom;border-color: inherit;border-style: solid;border-width: 0;">
									<tr>
										<th colspan="4" style="text-align: left;border-bottom: 1px solid #ccc;padding: 8px;">Description</th>
										<th style="width: 10%;border-bottom: 1px solid #ccc;padding: 8px;text-align: right;">Amount</th>
									</tr>
								</thead>
								<tbody style="vertical-align: inherit;border-color: inherit;border-style: solid;border-width: 0;">
                                <tr style="border-color: inherit;border-style: solid;border-width: 0;">
									<td colspan="4" style="border-bottom: 1px solid #ccc;padding: 8px;">
										<p class="strong mb-1">{{ $row->desciption }}</p>
									</td>
									<td style="border-bottom: 1px solid #ccc;padding: 8px;text-align: right;" style="width: 23%">$ {{ CurrencyFormat($invoice_details->subtotal,2) }}</td>
								</tr>
                                <tr style="margin-right: 0px;padding-right: 0px;">
									<td style="width: 50%;"></td>
									<td style="width: 49%;">
                                        <table style="width: 100%;color: #212529;vertical-align: top;border-collapse: collapse;margin-right: 0px;">
                                            <tbody>
                                                <tr style="border-color: inherit;border-style: solid;border-width: 0;">
                                                    <td style="border-bottom: 1px solid #ccc;padding: 8px;" colspan="4">Subtotal</td>
                                                    <td style="border-bottom: 1px solid #ccc;padding: 8px;text-align: right;" class="text-end" style="width: 23%">$ {{ CurrencyFormat($invoice_details->subtotal,2) }}</td>
                                                </tr>
                                                <tr style="border-color: inherit;border-style: solid;border-width: 0;">
                                                    <td colspan="4"  style="border-bottom: 1px solid #ccc;padding: 8px;">Tax Amount</td>
                                                    <td style="width: 23%;border-bottom: 1px solid #ccc;padding: 8px;text-align: right;">$ {{ CurrencyFormat($invoice_details->tax_amount,2) }}</td>
                                                </tr>

                                                <tr style="border-color: inherit;border-style: solid;border-width: 0;">
                                                    <td colspan="4" style="border-bottom: 1px solid #ccc;padding: 8px;">Total</td>
                                                    <td style="border-bottom: 1px solid #ccc;padding: 8px;text-align: right;">
                                                        <strong>$ {{ CurrencyFormat($invoice_details->invoice_amount,2) }}</strong>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </td>
								</tr>



							</tbody>
                        </table>
							<p style="font-weight: 300;text-align: center">
								Thank you very much for doing business with us. We look forward to working with you again!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>