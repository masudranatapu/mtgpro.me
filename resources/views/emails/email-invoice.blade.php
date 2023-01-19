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


<?php
$row = $data['transaction'] ?? [];
$settings = getSetting();
$invoice_details = json_decode($row->invoice_details);
?>


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
                                                        <td style="text-align: left;">INVOICE NO : {{ $row->invoice_prefix }}-{{ $row->invoice_number }}</td>
                                                        <td style="text-align: right;">INVOICE DATE : {{date('d-m-Y H:i A', strtotime( $row->transaction_date))}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table style="width: 100%;margin-bottom: 1rem;color: #212529;vertical-align: top;border-collapse: collapse;">
                                                <thead style="vertical-align: bottom;border-color: inherit;border-style: solid;border-width: 0;">
                                                    <tr>
                                                        <th colspan="4" style="text-align: left;border-bottom: 1px solid #ccc;    padding: 0.5rem 0.5rem;">Description</th>
                                                        <th style="width: 10%;border-bottom: 1px solid #ccc;    padding: 0.5rem 0.5rem;text-align: right;">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="vertical-align: inherit;border-color: inherit;border-style: solid;border-width: 0;">
                                                    <tr style="border-color: inherit;border-style: solid;border-width: 0;">
                                                        <td colspan="4" style="border-bottom: 1px solid #ccc;padding: 1rem 0.7rem;">
                                                           {{ $row->desciption }}
                                                        </td>
                                                        <td style="border-bottom: 1px solid #ccc;padding: 1rem 0.7rem;text-align: right;">$ {{ CurrencyFormat($invoice_details->subtotal,2) }}</td>
                                                    </tr>
                                                    <tr style="border-color: inherit;border-style: solid;border-width: 0;">
                                                        <td colspan="4" style="border-bottom: 1px solid #ccc;padding: 0.5rem 0.5rem;">Subtotal</td>
                                                        <td style="border-bottom: 1px solid #ccc;padding: 0.5rem 0.5rem;text-align: right;" class="text-end">$ {{ CurrencyFormat($invoice_details->subtotal,2) }}</td>
                                                    </tr>
                                                    <tr style="border-color: inherit;border-style: solid;border-width: 0;">
                                                        <td colspan="4" style="border-bottom: 1px solid #ccc;padding: 0.5rem 0.5rem;">Tax Amount</td>
                                                        <td style="width: 23%;border-bottom: 1px solid #ccc;padding: 0.5rem 0.5rem;text-align: right;">$ {{ CurrencyFormat($invoice_details->tax_amount,2) }}</td>
                                                    </tr>
                                                    <tr style="border-color: inherit;border-style: solid;border-width: 0;">
                                                        <td colspan="4" style="border-bottom: 1px solid #ccc;padding: 0.5rem 0.5rem;">Total</td>
                                                        <td style="border-bottom: 1px solid #ccc;padding: 0.5rem 0.5rem;text-align: right;">
                                                            <strong>$ {{ CurrencyFormat($invoice_details->invoice_amount,2) }}</strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>


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
