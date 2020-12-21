@extends('layouts.app')

@section('content')
<div id="main">
    <div class="inner">
        <h1>{{$get_transaction->parish->title}} | Online Offering</h1>
        <p>{{$get_transaction->parish->description}}</p>
        <div class="col-md-12">
            <div class="donate-form ng-scope" ng-controller="formCtrl">
            <form id="paymentForm">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email-address" value="{{$get_transaction->user->email}}" required />
                </div>
                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="tel" id="amount" value="{{$get_transaction->amount}}" required />
                </div>
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" value="{{$get_transaction->user->first_name}}" />
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" value="{{$get_transaction->user->last_name}}" />
                </div>
                <div class="form-submit">
                    <button type="submit" onclick="payWithPaystack()"> Pay </button>
                </div>
                </form>
                <script src="https://js.paystack.co/v1/inline.js"></script> 
            </div>
        </div>
    </div>
</div>

<script>
    var paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener('submit', payWithPaystack, false);
    function payWithPaystack() {
    var handler = PaystackPop.setup({
        key: 'YOUR_PUBLIC_KEY', // Replace with your public key
        email: document.getElementById('email-address').value,
        amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
        currency: '{{$get_transaction->currency_item->title}}', // Use GHS for Ghana Cedis or USD for US Dollars
        ref: '{{$get_transaction->reference}}', // Replace with a reference you generated
        callback: function(response) {
        //this happens after the payment is completed successfully
        var reference = response.reference;
        alert('Payment complete! Reference: ' + reference);
            // Make an AJAX call to your server with the reference to verify the transaction
        },
        onClose: function() {
            alert('Transaction was not completed, window closed.');
        },
    });
    handler.openIframe();
    }
</script>

@endsection
