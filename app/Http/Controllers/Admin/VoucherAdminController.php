<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Group;
use App\Models\Voucher;

class VoucherAdminController extends BaseAdminController
{
 public function allVouchersList()
 {
    // return "safeer";
    $vouchers = Voucher::all();
    return view('dashboards.shop-admin.admin.all-vouchers-page',['vouchers'=>$vouchers,'srNo'=>0]);
 }    

 public function allVouchersListShowActive()
 {
    // return "safeer";
    $vouchers = Voucher::where('voucher_status',true)->get();
    return view('dashboards.shop-admin.admin.all-vouchers-active-page',['vouchers'=>$vouchers,'srNo'=>0]);
 }   

 public function allVouchersListShowDeactive()
 {
    // return "safeer";
    $vouchers = Voucher::where('voucher_status',false)->get();
    return view('dashboards.shop-admin.admin.all-vouchers-deactive-page',['vouchers'=>$vouchers,'srNo'=>0]);
 }   

 public function allVouchersListDelete(Request $request)
 {
    Voucher::find($request->voucher_id)->delete();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'Voucher Deleted Successfully');
 }    

 public function allVouchersListActive(Request $request)
 {
    $voucher=Voucher::find($request->voucher_id);
    $voucher->voucher_status=true;
    $voucher->save();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'Voucher Activated Successfully');
 } 

 public function allVouchersListDeactive(Request $request)
 {
    $voucher=Voucher::find($request->voucher_id);
    $voucher->voucher_status=false;
    $voucher->save();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'Voucher Deactivated Successfully');
 } 
   
}









