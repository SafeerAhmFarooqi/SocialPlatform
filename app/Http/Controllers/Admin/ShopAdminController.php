<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\ShopCategories;
use App\Models\ShopSubCategories;


class ShopAdminController extends BaseAdminController
{
 public function allShopsList()
 {
    // return "safeer";
    $shops = User::role('Shop')->get();
    return view('dashboards.shop-admin.admin.all-shops-page',['shops'=>$shops,'srNo'=>0]);
 }    

 public function allShopsListShowActive()
 {
    // return "safeer";
    $shops = User::role('Shop')->where('shop_status',true)->get();
    return view('dashboards.shop-admin.admin.all-shops-active-page',['shops'=>$shops,'srNo'=>0]);
 }   

 public function allShopsListShowDeactive()
 {
    // return "safeer";
    $shops = User::role('Shop')->where('shop_status',false)->get();
    return view('dashboards.shop-admin.admin.all-shops-deactive-page',['shops'=>$shops,'srNo'=>0]);
 }   

 public function allShopsListDelete(Request $request)
 {
    User::find($request->shop_id)->delete();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'Shop Deleted Successfully');
 }    

 public function allShopsListActive(Request $request)
 {
    $shop=User::find($request->shop_id);
    $shop->shop_status=true;
    $shop->save();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'Shop Activated Successfully');
 } 

 public function allShopsListDeactive(Request $request)
 {
    $shop=User::find($request->shop_id);
    $shop->shop_status=false;
    $shop->save();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'Shop Deactivated Successfully');
 } 

 public function allShopsCategories()
 {
    // return "safeer";
    $categories = ShopCategories::all();
    return view('dashboards.shop-admin.admin.all-shops-categories-page',['categories'=>$categories,'srNo'=>0]);
 }  

 public function allShopsCategoriesDelete(Request $request)
 {
   if ($request->status=='active') {
      ShopCategories::find($request->category_id)->update([
         'status' => true,
      ]);   
   }
   if ($request->status=='deactive') {
      ShopCategories::find($request->category_id)->update([
         'status' => false,
      ]);   
   }
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'Category Deleted Successfully');
 }   

 public function allShopsCategoriesCreate(Request $request)
 {
    $request->validate([
        'category' => ['required', 'string', 'max:255'],
    ]);



    $category = ShopCategories::create([
        'name' => $request->category,
    ]);

    if($category)
    {
        return back()->with('success', 'Category Created Successfully' );
    }
    else
    {
        return back()->with('success', 'Unable to create New Category' );
    }
 }    

 public function allShopsCategoriesEditShow($id=null)
 {
    // return "safeer";
    //return $id;
    $category = ShopCategories::findOrFail($id);
    return view('dashboards.shop-admin.admin.all-shops-categories-edit-page',[
      'category'=>$category,
      'srNo'=>0,
   ]);
 }  

 public function allShopsSubCategoriesEditShow($id=null)
 {
    // return "safeer";
    //return $id;
    $subCategory = ShopSubCategories::findOrFail($id);
    return view('dashboards.shop-admin.admin.all-shops-sub-categories-edit-page',[
      'subCategory'=>$subCategory,
      'srNo'=>0,
   ]);
 }  

 public function allShopsCategoriesEdit(Request $request)
 {
    // return "safeer";
    $request->validate([
      'category' => ['required', 'string', 'max:255'],
  ]);
    $category = ShopCategories::find($request->category_id);
    $category->name=$request->category;
    $category->save();
    if($category)
    {
        return back()->with('success', 'Category Updated Successfully' );
    }
    else
    {
        return back()->with('success', 'Unable to update Category' );
    }
 }  

 public function allShopsSubCategoriesEdit(Request $request)
 {
    // return "safeer";
    $request->validate([
      'sub_category' => ['required', 'string', 'max:255'],
  ]);
    $subCategory = ShopSubCategories::find($request->sub_category_id);
    $subCategory->name=$request->sub_category;
    $subCategory->save();
    if($subCategory)
    {
        return back()->with('success', 'Sub Category Updated Successfully' );
    }
    else
    {
        return back()->with('success', 'Unable to update Sub Category' );
    }
 }  

 public function allShopsSubCategoriesCreate(Request $request)
 {
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
    ]);



    $subCategory = ShopSubCategories::create([
        'name' => $request->name,
        'category_id' => $request->category_id,
    ]);

    if($subCategory)
    {
        return back()->with('success', 'Sub Category Created Successfully' );
    }
    else
    {
        return back()->with('success', 'Unable to create New Sub Category' );
    }
 }    

 public function allShopsSubCategoriesDelete(Request $request)
 {
  // return $request->sub_category_id;
  if ($request->status=='deactive') {
   ShopSubCategories::findOrFail($request->sub_category_id)->update([
      'status' => false,
   ]);
   return back()->with('success', 'Sub Category Deactivate Successfully');
  }
  if ($request->status=='active') {
   ShopSubCategories::findOrFail($request->sub_category_id)->update([
      'status' => true,
   ]);
   return back()->with('success', 'Sub Category Activated Successfully');
  }
   //ShopSubCategories::findOrFail($request->sub_category_id)->delete();
    // Led::with('images')->where('user_id',$request->user_id)->delete();
    // Storage::deleteDirectory('public/led-images/'.$request->user_id);
   // return back()->with('success', 'Sub Category Deactivate Successfully');
 }   
   
}









