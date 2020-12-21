@extends('layouts.app')

@section('content')
<div id="main">
    <div class="inner">
        <h1>{{$parish->title}} | Online Offering</h1>
        <span class="image main"><img src="images/pic13.jpg" alt="" /></span>
        <p>{{$parish->description}}</p>
        <div class="col-md-10 col-md-offset-1">
                <div class="make-diffirent-for">
                    <!-- <h2 class="green">Online Offering</h2> -->
                </div>
                <div class="donate-form ng-scope" ng-controller="formCtrl">
                    <form action="#" method="POST" name="validateForm" novalidate="" class="form-validate">
                        <div class="billing-information">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="single-input-box" ng-class="{ 'has-error' : validateForm.full_name.$invalid &amp;&amp; !validateForm.full_name.$pristine }">
                                        <label>Full Name*</label>
                                        <input placeholder="Full Name" name="full_name" id="full_name" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" type="text" ng-model="full_name" required="">
                                        <p ng-show="validateForm.full_name.$invalid &amp;&amp; !validateForm.full_name.$pristine" class="label label-danger ng-hide">Full Name is required.</p>
                                    </div>
                                    <div class="single-input-box" ng-class="{ 'has-error' : validateForm.email.$invalid &amp;&amp; !validateForm.email.$pristine }">
                                        <label>Email*</label>
                                        <input placeholder="Email" name="email" id="email" class="form-control ng-pristine ng-untouched ng-empty ng-valid-email ng-invalid ng-invalid-required" type="email" validate-email="" ng-model="email" required="">
                                        <p ng-show="validateForm.email.$invalid &amp;&amp; !validateForm.email.$pristine" class="label label-danger ng-hide">Valid Email is required.</p>
                                    </div>
                                    <div class="single-input-box" ng-class="{ 'has-error' : validateForm.mobile.$invalid &amp;&amp; !validateForm.mobile.$pristine }">
                                        <label>Phone No*</label>
                                        <input placeholder="Phone No*" name="mobile" id="mobile" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" type="text" only-digits="" ng-model="mobile" required="">
                                        <p ng-show="validateForm.mobile.$invalid &amp;&amp; !validateForm.mobile.$pristine" class="label label-danger ng-hide">Phone No is required.</p>
                                    </div>
                                     <div class="single-input-box" ng-class="{ 'has-error' : validateForm.currency.$invalid &amp;&amp; !validateForm.currency.$pristine }">
                                        <label>Currency*</label>
                                        <select name="currency" id="currency" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" ng-model="currency" required="">
                                            <option value="">Select Currency</option>
                                            @foreach($currencies as $currency)
                                                <option value="{{$currency->code}}">{{$currency->title}} ({{$currency->sign}})</option>
                                            @endforeach
                                            <!-- <option value="NGN">Naira</option>
                                            <option value="USD">Dollar</option> -->
                                        </select>
                                        <p ng-show="validateForm.currency.$invalid &amp;&amp; !validateForm.currency.$pristine" class="label label-danger ng-hide">Currency is required.</p>
                                    </div>
                                    <div class="single-input-box">
                                        <label>Comments/Additional Feedback</label>
                                        <textarea placeholder="Remark" rows="2" name="remark" id="remark" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    @if($parish->use_global_offerings)
                                        @foreach($global_offerings as $offering)
                                        <div class="single-input-box" ng-class="{ 'has-error' : validateForm.{{$offering->slug}}.$invalid &amp;&amp; !validateForm.tithe.$pristine }">
                                            <label>{{$offering->title}}</label>
                                            <input placeholder="{{$offering->title}}: 0.00" name="{{$offering->slug}}" id="{{$offering->slug}}" class="form-control ng-pristine ng-valid ng-empty ng-touched" type="number">
                                            <p ng-show="validateForm.sacrifice.$invalid &amp;&amp; !validateForm.sacrifice.$pristine" class="label label-danger ng-hide">Enter a valid amount.</p>
                                        </div>
                                        @endforeach
                                    @endif
                                    
                                    <!-- <input type="button" ng-disabled="validateForm.$invalid" value="MAKE YOUR DONATION" id="make_donation" name="make_donation" class="green-button button-hover-one" disabled="disabled"> -->
                                    <button name="make_donation" class="btn btn-danger">PAY YOUR OFFERING</button>
                                </div>                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
