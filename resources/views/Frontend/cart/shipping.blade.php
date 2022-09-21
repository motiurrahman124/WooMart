@extends('Frontend.master')
@section('main_content')
<div class="checkout-page pb-60">
    <div class="container">
        <div class="multisteps-form">
            <div class="row">
              <div class="col-lg-12">
                <div class="multisteps-form__progress">
                  <button class="multisteps-form__progress-btn js-active" type="Account" title="Billing">Account</button>
                  <button class="multisteps-form__progress-btn js-active" type="button" title="Billing">Billing</button>
                  <button class="multisteps-form__progress-btn js-active" type="button" title="Shipping">Shipping</button>
                  <button class="multisteps-form__progress-btn" type="button" title="Payment">Payment        </button>
                  <button class="multisteps-form__progress-btn" type="button" title="Confirm">Confirm        </button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <form action="{{ route('shipping.store') }}" method="POST" class="multisteps-form__form">
                    @csrf
                    <!--single form panel-->

                    <!--single form panel-->
                    <div class="multisteps-form__panel js-active" data-animation="scaleIn">
                        <div class="multisteps-form__content">
                            <div class="check-out-form">
                                <h3 class="checkout-title">Shipping Details</h3>
                                <div class="form-group">
                                    <label for="fullname">Full Name</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname" value="{{ $billing->name }}" required placeholder="Full Name" />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email </label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $billing->email }}" required placeholder="Email " />
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="number" class="form-control" id="phone" name="phone" value="{{ $billing->phone }}" required placeholder="Phone" />
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" id="country" name="country" value="{{ $billing->country }}" required placeholder="Country" />
                                </div>
                                <div class="form-group">
                                    <label for="street-address">Street Address</label>
                                    <input type="text" class="form-control" id="street-address" name="street_address" value="{{ $billing->street_address }}"required placeholder="Street Address" />
                                </div>
                                <div class="form-group">
                                    <label for="city">City/Town</label>
                                    <input type="text" class="form-control" id="city" name="city" value="{{ $billing->city }}" required placeholder="City/Town" />
                                </div>
                                <div class="form-group">
                                    <label for="state">State/District</label>
                                    <input type="text" class="form-control" id="state" name="district" value="{{ $billing->district }}" required placeholder="State/District" />
                                </div>
                                <div class="form-group">
                                    <label for="zipcode">Zipcode / Postal Code</label>
                                    <input type="number" class="form-control" id="zipcode" name="zipcode" value="{{ $billing->zip_code }}" required placeholder="Zipcode / Postal Code" />
                                </div>
                            </div>
                            <div class="button-row d-flex justify-content-end">
                                <button type="submit" class="btn next" type="button" title="Next">Next <i class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
