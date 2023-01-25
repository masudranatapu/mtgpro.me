<div class="modal modal-blur fade" id="paymentStripe" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('product.orderCheckOut') }}" method="post" id="payment-form">
                @csrf

                <input type="hidden" name="billing_name" value="" id="stp_billing_name">
                <input type="hidden" name="billing_email" value="" id="stp_billing_email">
                <input type="hidden" name="billing_phone" value="" id="stp_billing_phone">
                <input type="hidden" name="billing_address" value="" id="stp_billing_address">
                <input type="hidden" name="billing_city" value="" id="stp_billing_city">
                <input type="hidden" name="billing_state" value="" id="stp_billing_state">
                <input type="hidden" name="billing_zipcode" value="" id="stp_billing_zipcode">
                <input type="hidden" name="billing_country" value="" id="stp_billing_country">
                <input type="hidden" name="vat_number" value="" id="stp_vat_number">
                <div class="modal-header">
                    <h6 class="modal-title" id="paymentStripeLabel"> {{ __('Card Information') }}</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <div class="pb-3">
                        <div class="">
                            <div class="form-row">
                                <label for="card-element">
                                    {{ __('Credit or debit card') }}
                                </label>
                                <div id="card-element" style="width: 100%;">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>
                                <!-- Used to display Element errors. -->
                                <div id="card-errors" role="alert"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary bg-danger"
                            data-dismiss="modal">{{ __('Close') }}</button>
                        <button class="btn btn-primary" type="submit">{{ __('Pay now') }}</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
