<!DOCTYPE html>
<html>
<?php
    $settings = getSetting();
    $details = $details ?? [];
    $invoice_details = json_decode($details->invoice_details);

?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light dark" />
    <meta name="supported-color-schemes" content="light dark" />
    <title></title>
    <style>
    /* Base ------------------------------ */

    @import url("https://fonts.googleapis.com/css?family=Nunito+Sans:400,700&display=swap");
    body {
        width: 100% !important;
        height: 100%;
        margin: 0;
        -webkit-text-size-adjust: none;
    }

    a {
        color: #3869d4;
    }

    a img {
        border: none;
    }

    td {
        word-break: break-word;
    }

    .preheader {
        display: none !important;
        visibility: hidden;
        mso-hide: all;
        font-size: 1px;
        line-height: 1px;
        max-height: 0;
        max-width: 0;
        opacity: 0;
        overflow: hidden;
    }
    /* Type ------------------------------ */

    body,
    td,
    th {
        font-family: "Nunito Sans", Helvetica, Arial, sans-serif;
    }

    h1 {
        margin-top: 0;
        color: #333333;
        font-size: 22px;
        font-weight: bold;
        text-align: left;
    }

    h2 {
        margin-top: 0;
        color: #333333;
        font-size: 16px;
        font-weight: bold;
        text-align: left;
    }

    h3 {
        margin-top: 0;
        color: #333333;
        font-size: 14px;
        font-weight: bold;
        text-align: left;
    }

    td,
    th {
        font-size: 16px;
    }

    p,
    ul,
    ol,
    blockquote {
        margin: 0.4em 0 1.1875em;
        font-size: 16px;
        line-height: 1.625;
    }

    p.sub {
        font-size: 13px;
    }
    /* Utilities ------------------------------ */

    .align-right {
        text-align: right;
    }

    .align-left {
        text-align: left;
    }

    .align-center {
        text-align: center;
    }
    /* Buttons ------------------------------ */

    .button {
        background-color: #3869d4;
        border-top: 10px solid #3869d4;
        border-right: 18px solid #3869d4;
        border-bottom: 10px solid #3869d4;
        border-left: 18px solid #3869d4;
        display: inline-block;
        color: #fff;
        text-decoration: none;
        border-radius: 3px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16);
        -webkit-text-size-adjust: none;
        box-sizing: border-box;
    }

    .button--green {
        background-color: #22bc66;
        border-top: 10px solid #22bc66;
        border-right: 18px solid #22bc66;
        border-bottom: 10px solid #22bc66;
        border-left: 18px solid #22bc66;
    }

    .button--red {
        background-color: #ff6136;
        border-top: 10px solid #ff6136;
        border-right: 18px solid #ff6136;
        border-bottom: 10px solid #ff6136;
        border-left: 18px solid #ff6136;
    }

    @media only screen and (max-width: 500px) {
        .button {
            width: 100% !important;
            text-align: center !important;
        }
    }
    /* Attribute list ------------------------------ */

    .attributes {
        margin: 0 0 21px;
    }

    .attributes_content {
        background-color: #f4f4f7;
        padding: 16px;
    }

    .attributes_item {
        padding: 0;
    }
    /* Related Items ------------------------------ */

    .related {
        width: 100%;
        margin: 0;
        padding: 25px 0 0 0;
        -premailer-width: 100%;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
    }

    .related_item {
        padding: 10px 0;
        color: #cbcccf;
        font-size: 15px;
        line-height: 18px;
    }

    .related_item-title {
        display: block;
        margin: 0.5em 0 0;
    }

    .related_item-thumb {
        display: block;
        padding-bottom: 10px;
    }

    .related_heading {
        border-top: 1px solid #cbcccf;
        text-align: center;
        padding: 25px 0 10px;
    }
    /* Discount Code ------------------------------ */

    .discount {
        width: 100%;
        margin: 0;
        padding: 24px;
        -premailer-width: 100%;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        background-color: #f4f4f7;
        border: 2px dashed #cbcccf;
    }

    .discount_heading {
        text-align: center;
    }

    .discount_body {
        text-align: center;
        font-size: 15px;
    }
    /* Social Icons ------------------------------ */

    .social {
        width: auto;
    }

    .social td {
        padding: 0;
        width: auto;
    }

    .social_icon {
        height: 20px;
        margin: 0 8px 10px 8px;
        padding: 0;
    }
    /* Data table ------------------------------ */

    .purchase {
        width: 100%;
        margin: 0;
        padding: 35px 0;
        -premailer-width: 100%;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
    }

    .purchase_content {
        width: 100%;
        margin: 0;
        padding: 25px 0 0 0;
        -premailer-width: 100%;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
    }

    .purchase_item {
        padding: 10px 0;
        color: #51545e;
        font-size: 15px;
        line-height: 18px;
    }

    .purchase_heading {
        padding-bottom: 8px;
        border-bottom: 1px solid #eaeaec;
    }

    .purchase_heading p {
        margin: 0;
        color: #85878e;
        font-size: 12px;
    }

    .purchase_footer {
        padding-top: 15px;
        border-top: 1px solid #eaeaec;
    }

    .purchase_total {
        margin: 0;
        text-align: right;
        font-weight: bold;
        color: #333333;
    }

    .purchase_total--label {
        padding: 0 15px 0 0;
    }

    body {
        background-color: #f4f4f7;
        color: #51545e;
    }

    p {
        color: #51545e;
    }

    p.sub {
        color: #6b6e76;
    }

    .email-wrapper {
        width: 100%;
        margin: 0;
        padding: 0;
        -premailer-width: 100%;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        background-color: #f4f4f7;
    }

    .email-content {
        width: 100%;
        margin: 0;
        padding: 0;
        -premailer-width: 100%;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
    }
    /* Masthead ----------------------- */

    .email-masthead {
        padding: 25px 0;
        text-align: center;
    }

    .email-masthead_logo {
        width: 94px;
    }

    .email-masthead_name {
        font-size: 16px;
        font-weight: bold;
        color: #a8aaaf;
        text-decoration: none;
        text-shadow: 0 1px 0 white;
    }
    /* Body ------------------------------ */

    .email-body {
        width: 100%;
        margin: 0;
        padding: 0;
        -premailer-width: 100%;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        background-color: #ffffff;
    }

    .email-body_inner {
        width: 570px;
        margin: 0 auto;
        padding: 0;
        -premailer-width: 570px;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        background-color: #ffffff;
    }

    .email-footer {
        width: 570px;
        margin: 0 auto;
        padding: 0;
        -premailer-width: 570px;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        text-align: center;
    }

    .email-footer p {
        color: #6b6e76;
    }

    .body-action {
        width: 100%;
        margin: 30px auto;
        padding: 0;
        -premailer-width: 100%;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        text-align: center;
    }

    .body-sub {
        margin-top: 25px;
        padding-top: 25px;
        border-top: 1px solid #eaeaec;
    }

    .content-cell {
        padding: 35px;
    }
    /*Media Queries ------------------------------ */

    @media only screen and (max-width: 600px) {
        .email-body_inner,
        .email-footer {
            width: 100% !important;
        }
    }

    @media (prefers-color-scheme: dark) {
        body,
        .email-body,
        .email-body_inner,
        .email-content,
        .email-wrapper,
        .email-masthead,
        .email-footer {
            background-color: #333333 !important;
            color: #fff !important;
        }
        p,
        ul,
        ol,
        blockquote,
        h1,
        h2,
        h3,
        span,
        .purchase_item {
            color: #fff !important;
        }
        .attributes_content,
        .discount {
            background-color: #222 !important;
        }
        .email-masthead_name {
            text-shadow: none !important;
        }
    }

    :root {
        color-scheme: light dark;
        supported-color-schemes: light dark;
    }
    .table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 1rem;
}

.table th,
.table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #eceeef;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #eceeef;
}

.table tbody + tbody {
  border-top: 2px solid #eceeef;
}

.table .table {
  background-color: #fff;
}

.table-sm th,
.table-sm td {
  padding: 0.3rem;
}

.table-bordered {
  border: 1px solid #eceeef;
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #eceeef;
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-success,
.table-success > th,
.table-success > td {
  background-color: #dff0d8;
}

.table-hover .table-success:hover {
  background-color: #d0e9c6;
}

.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
  background-color: #d0e9c6;
}

.table-info,
.table-info > th,
.table-info > td {
  background-color: #d9edf7;
}

.table-hover .table-info:hover {
  background-color: #c4e3f3;
}

.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
  background-color: #c4e3f3;
}

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #fcf8e3;
}

.table-hover .table-warning:hover {
  background-color: #faf2cc;
}

.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
  background-color: #faf2cc;
}

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f2dede;
}

.table-hover .table-danger:hover {
  background-color: #ebcccc;
}

.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
  background-color: #ebcccc;
}

.thead-inverse th {
  color: #fff;
  background-color: #292b2c;
}

.thead-default th {
  color: #464a4c;
  background-color: #eceeef;
}

.table-inverse {
  color: #fff;
  background-color: #292b2c;
}

.table-inverse th,
.table-inverse td,
.table-inverse thead th {
  border-color: #fff;
}

.table-inverse.table-bordered {
  border: 0;
}

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}

.table-responsive.table-bordered {
  border: 0;
}
    </style>
</head>

<body>
    <table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table class="email-content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                        <td class="email-masthead">
                            <a href="{{ url('/') }}" class="f-fallback email-masthead_name">
                                {{ $details['from_billing_name'] }}
                            </a>
                        </td>
                    </tr>
                    <!-- Email Body -->
                    <tr>
                        <td class="email-body" width="100%" cellpadding="0" cellspacing="0">
                            <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0"
                                role="presentation">
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell">
                                        <div class="f-fallback">
                                            <h1>Hi {{ $invoice_details->to_billing_name }},</h1>
                                            <p>{{ $details['email_heading'] }}</p>
                                            <!-- Action -->
                                            <table>
                                                <tr>
                                                    <td>
                                                        <table class="table" width="100%" border="0" cellspacing="0" cellpadding="0"
                                                            role="presentation">
                                                            <tr>
                                                                <td >
                                                                    <p>{{ $settings->site_name }}</p>
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
                                                                </td>
                                                                <td>
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
                                                                    <h4>INVOICE DATE : {{date('d-m-Y H:i A', strtotime( $details->transaction_date))}}</h4>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                            <table class="table"  class="purchase_content" width="100%" cellpadding="0"
                                            cellspacing="0">
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
                                                        <p class="strong mb-1">Extended : {{ $details->desciption }}</p>
                                                        <div class="text-muted">Via :
                                                        {{ $details->payment_gateway_name }}</div>
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
                                           <!-- <table class="purchase" width="100%" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td>
                                                        <h3>{{ __('Invoice Number :') }} {{ $details['transaction_id'] }}</h3>
                                                    </td>
                                                    <td>
                                                        <h3 class="align-right">{{ __('Invoice Date :') }} {{ $details['transaction_date'] }}</h3>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <table class="purchase_content" width="100%" cellpadding="0"
                                                            cellspacing="0">
                                                            <tr>
                                                                <th class="purchase_heading" align="left">
                                                                    <p class="f-fallback">{{ __('Description') }}</p>
                                                                </th>
                                                                <th class="purchase_heading" align="right">
                                                                    <p class="f-fallback">{{ __('Amount') }}</p>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td width="80%" class="purchase_item"><span
                                                                        class="f-fallback">{{ $details['description'] }}</span>
                                                                </td>
                                                                <td class="align-right" width="20%"
                                                                    class="purchase_item"><span
                                                                        class="f-fallback">{{ $details['invoice_currency'] }} {{ $details['subtotal'] }}</span>
                                                                </td>
                                                            </tr>
							                                <tr>
                                                                <td width="80%" class="purchase_footer" valign="middle">
                                                                    <p
                                                                        class="f-fallback purchase_total purchase_total--label">
                                                                        {{ __('Tax') }}</p>
                                                                </td>
                                                                <td width="20%" class="purchase_footer" valign="middle">
                                                                    <p class="f-fallback purchase_total">
                                                                        {{ $details['invoice_currency'] }} {{ $details['tax_amount'] }}</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="80%" class="purchase_footer" valign="middle">
                                                                    <p
                                                                        class="f-fallback purchase_total purchase_total--label">
                                                                        {{ __('Total') }}</p>
                                                                </td>
                                                                <td width="20%" class="purchase_footer" valign="middle">
                                                                    <p class="f-fallback purchase_total">
                                                                        {{ $details['invoice_currency'] }} {{ $details['invoice_amount'] }}</p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>-->
                                            <p>{{ __('If you have any questions about this invoice, simply reply to this email
                                                or reach out to our') }} <a
                                                    href="mailto:{{ $invoice_details->from_billing_email }}">{{ __('support team') }}</a> {{ __('for help.') }}
                                            </p>
                                            <p>Cheers,
                                                <br>The {{ $invoice_details->from_billing_name }} Team</p>

                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="email-footer" align="center" width="570" cellpadding="0" cellspacing="0"
                                role="presentation">
                                <tr>
                                    <td class="content-cell" align="center">
                                        <p class="f-fallback sub align-center">&copy; {{ date('Y') }}
                                            {{ $invoice_details->from_billing_name }}. {{ __('All rights reserved') }}.</p>
                                        <p class="f-fallback sub align-center">
                                            {{ $invoice_details->from_billing_name }}
                                            <br>{{ $invoice_details->from_billing_address }},
                                            {{ $invoice_details->from_billing_city }}, {{ $invoice_details->from_billing_state }},
                                            <br>{{ $invoice_details->from_billing_country }}
                                            {{ $invoice_details->from_billing_zipcode }}
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
