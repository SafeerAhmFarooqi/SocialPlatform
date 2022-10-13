<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Group;
use App\Models\Voucher;
use App\Models\UseVoucher;
use Illuminate\Support\Carbon;

class VoucherShopController extends BaseShopController
{
 public function myVouchersShow()
 {
    // return "safeer";
    $vouchers = Voucher::where('shop_id',Auth::user()->id)->get();
    return view('dashboards.shop-admin.shop.my-vouchers-page',['vouchers'=>$vouchers,'srNo'=>0]);
 }    

 public function shopVoucherStore(Request $request)
 {
    $request->validate([
        'title' => ['required', 'string', 'max:255'],
        'discount' => ['required', 'string', 'max:255'],
        'image' => ['required','max:2048','image','mimes:jpeg,png,jpg,gif,svg,bmp'],
    ]);

   

    while(true)
    {
     $code=Carbon::now()->format('ym').mt_rand('10000','99999');
     if (Voucher::where('code',$code)->first()) {
        continue;
     } else {
        break;
     }    
    }

    $voucher = Voucher::create([
        'title' => $request->title,
        'code' => $code,
        'discount' => $request->discount,
    ]);

    if ($voucher) {
        $request->image->store('voucher-images/'.Auth::user()->id.'/'.$voucher->id,'public');
        $imagePath = 'voucher-images/'.Auth::user()->id.'/'.$voucher->id .'/'. $request->image->hashName();
        $voucher->image_path=$imagePath;
        $voucher->save();
    }
    if($voucher)
    {
        return back()->with('success', 'Voucher Created Successfully' );
    }
    else
    {
        return back()->with('error', 'Unable to create New Voucher' );
    }
 }
 
 public function shopVoucherDelete(Request $request)
 {
    Voucher::find($request->voucher_id)->delete();
    return back()->with('success', 'Voucher Deleted Successfully');
 }

 public function useVoucherShow()
 {
    // return "safeer";
    return view('dashboards.shop-admin.shop.use-vouchers-page');
 }

 public function useVoucherSubmit(Request $request)
 {
    //return "safeer";

    $request->validate([
        'email' => ['required', 'email'],
        'code' => ['required', 'string', 'max:255'],
    ]);

    $user=User::where('email',$request->email)->first();
    $voucher=Voucher::where('code',$request->code)->first();

    if ($voucher&&$user) {
        $useVoucher=UseVoucher::where('user_id',$user->id)->where('voucher_id',$voucher->id)->first();
        if ($useVoucher) {
            return back()->with('error', 'Voucher is already Used' );    
        } else {
            $useVoucher=UseVoucher::create([
                'user_id' => $user->id,
                'voucher_id' => $voucher->id,
                'shop_id' => $voucher->shop->id,
            ]);
            return back()->with('success', 'Voucher is added to use vouchers Successfully' );
        }
        
    } else {
        return back()->with('error', 'Unknown Voucher Code or User Email' );
    }
    
 }

 public function useVoucherListShow()
 {
    // return "safeer";
    $vouchers = UseVoucher::where('shop_id',Auth::user()->id)->get();
    return view('dashboards.shop-admin.shop.use-vouchers-list-page',[
        'vouchers'=>$vouchers,
        'srNo'=>0,
    ]);
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









