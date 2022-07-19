@extends('dashboards.user.dashboard-layout')
@section('page-content')
<div class="col-md-7" style="margin-top: 10%;">
    <div class="friend-list">
  
  
 
        <h3 style="text-align: center;">Total Savings <br><b style="font-size: 60px;padding-top:30px">  {{$savings}} € </b></h3>
       
        <Br><Br><Br>
       
         <section class="col-sm-12 ">
           <h1>Vouchers History </h1>
           <div class="row">
             @foreach($vouchers as $voucher) 
             <article class="card fl-left">
               <section class="date">
                 <time datetime="23th feb"><span>{{$voucher->discount}}</span><span>€</span></time>
               </section>
               <section class="card-cont">
                  
                 <h2> {{$voucher->title}} </h2>
                 <p>
                   <i class="fa fa-calendar"></i>  {{$voucher->created_at}} 
                 </p>
                  <div class="clearfix"></div>
                 <div class="even-info">
                   <p>
                    {{-- <a href="{{route('user_voucher.show',$voucher->shop_id)}}"><i class="fa fa-shopping-cart"></i> &nbsp;  {{$voucher->shop->shopname}} </a>  --}}
                 </p>
                  <div class="clearfix"></div>
                 </div>
                 <a href="#" class="card-cont1">{{$voucher->code}}</a>
               </section>
             </article>
             <div class="clearfix"></div>
           @endforeach 
           </div>
         </section>
       
       
        
        </div>
</div>
@endsection