<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\GeneralSettings;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use File;
use Image;


class GeneralSettingController extends Controller
{

	public function __construct(){
		$Gset = GeneralSettings::first();
		$this->sitename = $Gset->sitename;
	}
	public function GenSetting(){
		$data['page_title'] = 'System Settings';
			$data['general'] = GeneralSettings::first();
		return view('admin.general', $data);
	}

	public function UpdateGenSetting(Request $request)
    {
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $request->validate([

            'currency' => 'required',
            'currency_sym' => 'required',
            'sitename' => 'required',
            'ref' => 'required',
            'kyc' => 'required',
            'decimal' => 'required|integer|min:1',
        ],[
            'currency_sym.required' => 'Currency symbol must not be empty',
            ]);


        $gs = GeneralSettings::first();
        $in = Input::except('_token','logo','favicon');
        $in['registration'] = $request->registration == 'on' ? '1' : '0';
        $in['login'] = $request->login == 'on' ? '1' : '0';
        $in['maintain'] = $request->maintain == 'on' ? '1' : '0';
        $in['email_verification'] = $request->email_verification == 'on' ? '1' : '0';
        $in['sms_verification'] = $request->sms_verification == 'on' ? '1' : '0';
        $in['email_notification'] = $request->email_notification == 'on' ? '1' : '0';
        $in['sms_notification'] = $request->sms_notification == 'on' ? '1' : '0';
        $res = $gs->fill($in)->save();

            if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $filename = 'logo.png';
            $location = 'assets/images/logo/' . $filename;
            Image::make($image)->save($location);
        }
        if ($request->hasFile('favicon')) {
            $image = $request->file('favicon');
            $filename = 'favicon.png';
            $location = 'assets/images/logo/' . $filename;
            Image::make($image)->save($location);
        }

			if ($res) {
				return back()->with('success', 'System Settings Has Been Updated Successfully!');
			}else{
				return back()->with('alert', 'Problem With Updating');
			}
	}


	public function merchantSetting(){
		$data['page_title'] = 'Merchant Settings';
			$data['general'] = GeneralSettings::first();
		return view('admin.merchant', $data);
	}

		public function updatemerchantSetting(Request $request)
    {
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $request->validate([

            'merchantkey' => 'required',
            'merchantid' => 'required',
            'powerdiscount' => 'required',
            'airtimediscount' => 'required',
            'datadiscount' => 'required',
            'decoderdiscount' => 'required',
        ],[
            'merchantkey.required' => 'API key must not be empty',
            ]);


        $gs = GeneralSettings::first();
        $in = Input::except('_token','logo','favicon');
         $in['internet'] = $request->internet == 'on' ? '1' : '0';
        $in['television'] = $request->television == 'on' ? '1' : '0';
        $in['electric'] = $request->electric == 'on' ? '1' : '0';
        $in['phonecall'] = $request->phonecall== 'on' ? '1' : '0';
         $in['merchant'] = $request->merchant== 'on' ? '1' : '0';
         $in['airtimeswap'] = $request->airtimeswap== 'on' ? '1' : '0';
        $res = $gs->fill($in)->save();


			if ($res) {
				return back()->with('success', 'Merchant Settings Has Been Updated Successfully!');
			}else{
				return back()->with('alert', 'Problem With Updating');
			}
	}





	public function blockchainSetting(){
		$data['page_title'] = 'Blockchain Settings';
			$data['general'] = GeneralSettings::first();
		return view('admin.blockchain', $data);
	}


		public function UpdateblockchainSetting(Request $request)
    {
        $basic = GeneralSettings::first();
        if ($basic->demo == 1) {
				return back()->with('alert', 'You are not allowed to make changes to the demo script. Please make a purchase!'); }


        $request->validate([

            'btcapi' => 'required',
            'ltcapi' => 'required',
            'dogapi' => 'required',
            'apikey' => 'required',
        ],[
            'apikey.required' => 'API key must not be empty',
            ]);


        $gs = GeneralSettings::first();
        $in = Input::except('_token','logo','favicon');
         $in['blockcreate'] = $request->blockcreate == 'on' ? '1' : '0';
        $in['blockallow'] = $request->blockallow == 'on' ? '1' : '0';
        $in['blocksend'] = $request->blocksend == 'on' ? '1' : '0';
        $res = $gs->fill($in)->save();


			if ($res) {
				return back()->with('success', 'Blockchain Settings Has Been Updated Successfully!');
			}else{
				return back()->with('alert', 'Problem With Updating');
			}
	}





    public function getContact()
    {
        $data['basic'] = GeneralSettings::first();
        $data['page_title'] = "Contact Settings";
        return view('admin.webControl.contact-setting',$data);
    }

    public function putContactSetting(Request $request)
    {
        $basic = GeneralSettings::first();
        $request->validate([
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        $in = Input::except('_method','_token');
        $in['location'] = $request->location == 'on' ? '1' : '0';
        $basic->fill($in)->save();

        $notification =  array('message' => 'Contact  Updated Successfully', 'alert-type' => 'success');
        return back()->with($notification);
    }



}
