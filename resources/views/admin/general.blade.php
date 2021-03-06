@extends('include.admindashboard')

@section('body')
  <div class="page-header"><div class="container"><div class="row justify-content-center"><div class="col-lg-8 col-xl-7 text-center"><h2 class="page-title">System Settings</h2></div></div></div><!-- .container --></div><div class="page-content"><div class="container"><div class="row">

<div class="col-lg-12"><div class="content-area card"><div class="card-innr card-innr-fix"><div class="card-head"><h6 class="card-title">System Settings</h6></div><div class="gaps-1x"></div><!-- .gaps --><form role="form" method="POST" enctype="multipart/form-data" action="">
                        {{ csrf_field() }}<div class="row"><div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Site Name</label><input class="input-bordered" type="text" value="{{$general->sitename}}"
                                           name="sitename"><span class="input-note">Please enter system name</span></div></div><div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">System Currency</label><input  value="{{$general->currency}}" name="currency" class="input-bordered" type="text"><span class="input-note">The currency in your base country</span></div></div></div>


<div class="row"><div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Currency Symbol</label><div class="relative"> </span><input  value="{{$general->currency_sym}}"
                                           name="currency_sym" class="input-bordered" type="text"></div><span class="input-note">Input your currency symbol. </span></div></div><div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Currency Decimal</label><input value="{{$general->decimal}}"
                                           name="decimal" class="input-bordered" type="text"><span class="input-note">Currency decimal place. </span></div></div></div>



<div class="row"><div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Contact Phone</label><div class="relative"><span class="input-icon input-icon-right"><em class="ti ti-mobile"></em></span> <input type="text" class="input-bordered"  value="{{$general->phone}}"

                                           name="phone"></div><span class="input-note">Admin Contact Phone. </span></div></div>


<div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Contact Email</label><input value="{{$general->email}}"
                                           name="email" class="input-bordered" type="text"><span class="input-note">System Email Address. </span></div></div>



 <div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Facebook Page</label><div class="relative"><span class="input-icon input-icon-right"><em class="ti ti-facebook"></em></span> <input type="text" class="input-bordered"  value="{{$general->facebook}}"

                                           name="facebook"></div><span class="input-note">System Facebook Page. </span></div></div>


<div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Google Plus</label> <div class="relative"><span class="input-icon input-icon-right"><em class="ti ti-google"></em></span><input value="{{$general->google}}"
                                           name="google" class="input-bordered" type="text"></div><span class="input-note">System Google Plus Address. </span></div></div>


 <div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Instagram Page</label><div class="relative"><span class="input-icon input-icon-right"><em class="ti ti-instagram"></em></span> <input type="text" class="input-bordered"  value="{{$general->instagram}}"

                                           name="instagram"></div><span class="input-note">System Instagram Page. </span></div></div>


<div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Twitter</label><div class="relative"><span class="input-icon input-icon-right"><em class="ti ti-twitter"></em></span><input value="{{$general->twitter}}"
                                           name="twitter" class="input-bordered" type="text"></div><span class="input-note">System Twitter Handle. </span></div></div>

<div class="col-md-12"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Contact Address</label><textarea value="{{$general->address}}"
                                           name="address" class="input-bordered" type="text">{{$general->address}}</textarea> </div></div>

                                           <div class="col-md-12"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Site Url</label><input value="{{$general->siteurl}}"
                                           name="siteurl" class="input-bordered" type="text"><span class="input-note">Ensure you set this correctly to facilitate Developer API Access. </span></div></div>
                                           </div>








<div class="row"><div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Referral Bonus</label><div class="relative"><span class="input-icon input-icon-right"><em class="ti ti-mobile"></em></span> <input type="text" class="input-bordered"  value="{{$general->ref}}"
                                           onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                                           name="ref"></div><span class="input-note">Input system referral bonus in %. </span></div></div>

<div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Minimum Withdrawal</label><div class="relative"><span class="input-icon input-icon-right"><em class="ti ti-mobile"></em></span> <input type="text" class="input-bordered"  value="{{$general->minwith}}" name="minwith"></div><span class="input-note">Input the minimum amount a user can withdraw. </span></div></div>

<div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Minimum Matrix Withdrawal</label><div class="relative"><span class="input-icon input-icon-right"><em class="ti ti-mobile"></em></span> <input type="text" class="input-bordered"  value="{{$general->mlmmin}}"
                                           name="mlmmin"></div><span class="input-note">Minimum Amount User Can Cashout From Matrix Program</span></div></div>



<div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Matrix Withdrawal Interval (days)</label><div class="relative"><span class="input-icon input-icon-right"><em class="ti ti-mobile"></em></span> <input type="text" class="input-bordered"  value="{{$general->mlmtime}}"
                                           name="mlmtime"></div><span class="input-note">Numbers of days between each successive matrix withdrawal</span></div></div>

                                           <div class="col-md-12"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Developer API Fee</label><div class="relative"><span class="input-icon input-icon-right"><em class="ti ti-mobile"></em></span> <input type="text" class="input-bordered"  value="{{$general->apicharge}}"
                                           name="apicharge"></div><span class="input-note">What you charge each user to get Developer API Access</span></div></div>



<div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Transaction Timeout</label><input value="{{$general->trxcancel}}"
                                           name="trxcancel" class="input-bordered" type="text"><span class="input-note">Enter number in Minutes. </span></div></div>

<div class="col-md-6">
<div class="input-item input-with-label"><label class="input-item-label text-exlight">Transaction Charge</label><input value="{{$general->transcharge}}"
                                           name="transcharge" class="input-bordered" type="text"><span class="input-note">Buy & Sell Transaction Charge. </span></div></div>


<div class="col-md-6">
<div class="input-item input-with-label"><label class="input-item-label text-exlight">Minimum Bonus Conversion</label><input value="{{$general->minbonus}}"
                                           name="minbonus" class="input-bordered" type="text"><span class="input-note">Minimum Bonus Amount User Can Convert To Wallet.</span></div></div><div class="col-md-6">
<div class="input-item input-with-label"><label class="input-item-label text-exlight">Time Zone</label><?php

// Create a timezone identifiers
$timezone_identifiers =
    DateTimeZone::listIdentifiers(DateTimeZone::ALL);

echo "<select class='select select-bordered' name='timezone'>";

echo "<option disabled selected>
         Please Select Timezone
      </option>";

$n = 425;
for($i = 0; $i < $n; $i++) {

    // Print the timezone identifiers
    echo "<option value='" . $timezone_identifiers[$i] .
        "'>" . $timezone_identifiers[$i] . "</option>";
}

echo "</select>";

?> <span class="input-note">Current: {{$general->timezone}}</span></div></div>


</div>





<div class="row"><div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Exchange Rate</label><div class="relative"><span class="input-icon input-icon-right"><em class="ti ti-mobile"></em></span> <input type="text" class="input-bordered"  value="{{$general->rate}}"
                                           onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                                           name="rate"></div><span class="input-note">{{$basic->currency}} exchange rate to USD </span></div></div>


<div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">KYC Earning</label><input value="{{$general->kyc}}"
                                           name="kyc" class="input-bordered" type="text"><span class="input-note">What User gets upon verification. </span></div></div></div>


<div class="row"><div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">System Logo</label><div class="relative">  <div class="relative"><em class="input-file-icon fas fa-upload"></em><input name="logo" accept="image/*"  type="file" class="input-file" id="file-01"><label for="file-01">Choose a file</label></div></div><span class="input-note">PNG,JPEG,JPG,BMP </span></div></div>


<div class="col-md-6"><div class="input-item input-with-label"><label class="input-item-label text-exlight">System Favicon</label><div class="relative">  <div class="relative"><em class="input-file-icon fas fa-upload"></em><input name="favicon" accept="image/*"  type="file" class="input-file" id="file-011"><label for="file-011">Choose a file</label></div></div><span class="input-note">PNG,JPEG,JPG,BMP </span></div></div>



<div class="col-md-12"><div class="input-item input-with-label"><label class="input-item-label text-exlight">SMS Charge</label>
<input class="input-bordered" name="smscharge" value="{{$basic->smscharge}}">


<span class="input-note">What you charge when user sends out SMS. </span></div></div>


<div class="col-md-12"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Signup Bonus (%)</label>
<input class="input-bordered" name="regbonus" value="{{$basic->regbonus}}">


<span class="input-note">What user gets from his signup package fee. </span></div></div>


<div class="col-md-12"><div class="input-item input-with-label"><label class="input-item-label text-exlight">User Dashboard Theme</label>
<select class="select-bordered select-block" name="theme2">
<option value="default.css">Default</option>
<option value="red.css">Red</option>
<option value="orange.css">Orange</option>
<option value="cyan.css">Cyan</option>
</select>

<span class="input-note">Customer's UI. </span></div></div>




<div class="col-md-12"><div class="input-item input-with-label"><label class="input-item-label text-exlight">Admin Theme Color</label>
<select class="select-bordered select-block" name="theme">
<option value="default.css">Default</option>
<option value="black.css">Black</option>
<option value="blue.css">Blue</option>
<option value="watermelon.css">Green</option>
<option value="green.css">Lemon Green</option>
<option value="orange.css">Orange</option>
<option value="purple.css">Purple</option>
<option value="coral.css">Red</option>
<option value="gold.css">Yellow</option>
</select>

<span class="input-note">Administrator's UI. </span></div></div>
</div>





<div class="row"><div class="col-md-6"><label class="input-item-label ucap text-exlight">System Session</label><ul class="d-flex flex-wrap checkbox-list"><li><div class="input-item text-left"><input class="input-checkbox input-checkbox-sm"
                                       type="checkbox" id="cma-email"
                                       name="registration" {{$general->registration == "1" ? 'checked' : '' }}><label for="cma-email">Registration</label></div></li><li><div class="input-item text-left">


<li><div class="input-item text-left"><input name="login" class="input-checkbox input-checkbox-sm" id="cm-log" {{$general->login == "1" ? 'checked' : '' }}  type="checkbox"><label for="cm-log">Login</label></div></li>

<li><div class="input-item text-left"><input   class="input-checkbox input-checkbox-sm"
                                         type="checkbox" id="cma-main"
                                       name="maintain" {{$general->maintain == "1" ? 'checked' : '' }}><label for="cma-main">Maintenance</label></div></li></ul></div><div class="col-md-6"><label class="input-item-label ucap text-exlight">Notifications Options</label><ul class="d-flex flex-wrap checkbox-list"><li><div class="input-item text-left"><input  class="input-checkbox input-checkbox-sm" type="checkbox"
                               id="cma-enot1"        name="email_verification" {{ $general->email_verification == "1" ? 'checked' : '' }}><label for="cma-enot1">Email Verification</label></div></li><li><div class="input-item text-left"><input
                       id="cma-enot"     class="input-checkbox input-checkbox-sm"             type="checkbox"
                                       name="sms_verification" {{$general->sms_verification == "1" ? 'checked' : ''}}><label for="cma-enot">Phone Verification</label></div></li><li><div class="input-item text-left"><input   class="input-checkbox input-checkbox-sm"     id="pma-cash"          data-width="100%" type="checkbox"
                                       name="sms_notification" {{ $general->sms_notification == "1" ? 'checked' : '' }}><label for="pma-cash">SMS Alerts</label></div></li>


<li><div class="input-item text-left"><input
       id="pma-cash1"                   class="input-checkbox input-checkbox-sm"                 type="checkbox"
                                       name="email_notification" {{ $general->email_notification == "1" ? 'checked' : '' }}><label for="pma-cash1">Email Alerts</label></div></li>

</ul></div>







</div><div class="gaps-1x"></div><button class="btn btn-primary" type="submit">Submit</button></form></div><!-- .card-innr --></div><!-- .card --></div> <!-- .card --></div></div></div><!-- .container --></div><!-- .page-content -->
@endsection

@section('script')

@stop
