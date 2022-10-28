<div style="display: contents;">
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="col-sm-5" style="margin-top: 25px;margin-right: 15px;">

      <!-- Card START -->
        <div class="card">
          <!-- Card header START -->
          <div class="card-header border-0 pb-0">
            <h1 class="h4 card-title">Vouchers</h1>
         


          <ul class="nav nav-tabs nav-bottom-line justify-content-center justify-content-md-start" >  
              <li class="nav-item"> <a class="nav-link active " data-bs-toggle="tab" href="#tab-1"> Unused Vouchers </a> </li>
              <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-2"> Used </a> </li> 
          </ul>
</div>


            <div class="tab-content mb-0 pb-0">                
               <!-- Friends groups tab START -->
              <div class="tab-pane fade show active" id="tab-1">
                  
<!--end start -->      
                  @foreach ($unusedVouchers as $unusedVoucher)
                @if ( $unusedVoucher->isUsed())
                    @continue
                @endif
                  <div class="card-body">
                    <div class="d-flex mb-3">
                      <div class="avatar avatar-lg status-online me-2">
                        <a href="#!"><img class="avatar-img rounded-circle" src="{{$unusedVoucher->image_path?'storage/'.$unusedVoucher->image_path : asset('assets/ressoli-theme/assets/images/icon/person-outline-filled.svg')}}" alt=""></a>
                      </div>

                      <div class="ms-2 w-100">
                        <div class="d-sm-flex justify-content-between">
                          <h6><a href="#!">{{$unusedVoucher->title??''}} </a></h6>
                           <!-- Dropdown START -->
                          <div class="dropdown ms-auto">
                            <a href="#" class="text-secondary" id="bdayActionEdit" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fa fa-gift"></i>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bdayActionEdit">
                              <li><a class="dropdown-item" href="#"> <i class="fa fa-gift fa-fw pe-1"></i>{{$unusedVoucher->code??''}}</a></li>
                              <li><span class="dropdown-item">
                                {!! QrCode::size(250)->generate(route('user.dashboard.voucher.use.page',[urlencode(Illuminate\Support\Facades\Crypt::encryptString(Auth::user()->email)),urlencode(Illuminate\Support\Facades\Crypt::encryptString($unusedVoucher->code))])); !!} 
                              </span></li>
                               
                            </ul>
                          </div>

                      </div>
                      <div class="position-relative w-100">
                       <span class="badge bg-danger bg-opacity-10 text-success" style="color:#333 !important">{{$unusedVoucher->discount??''}}</span>
                       
                      </div>
                    </div>
                  </div>
                  <hr class="my-4">
            </div>
                  @endforeach              
                   


<!--end voucher -->
          
           </div> <!-- tab 2 end -->



               <div class="tab-pane fade show" id="tab-2">
                  
<!--end start -->   
                    @foreach ($usedVouchers as $usedVoucher)
                    <div class="card-body">
                      <div class="d-flex mb-3">
                        <div class="avatar avatar-lg status-online me-2">
                          <a href="#!"><img class="avatar-img rounded-circle" src="{{$usedVoucher->voucher->image_path?'storage/'.$usedVoucher->voucher->image_path : asset('assets/ressoli-theme/assets/images/icon/person-outline-filled.svg')}}" alt=""></a>
                        </div>
  
                        <div class="ms-2 w-100">
                          <div class="d-sm-flex justify-content-between">
                            <h6><a href="#!">{{$usedVoucher->voucher->title??''}} </a></h6>
                             <!-- Dropdown START -->
                            <div class="dropdown ms-auto">
                              <a href="#" class="text-secondary" id="bdayActionEdit" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-gift"></i>
                              </a>
  
                              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bdayActionEdit">
                                <li><a class="dropdown-item" href="#"> <i class="fa fa-gift fa-fw pe-1"></i>{{$usedVoucher->voucher->code??''}}</a></li>
                                 
                              </ul>
                            </div>
  
                        </div>
                        <div class="position-relative w-100">
                         <span class="badge bg-danger bg-opacity-10 text-success" style="color:#333 !important">{{$usedVoucher->voucher->discount??''}}</span>
                         
                        </div>
                      </div>
                    </div>
                    <hr class="my-4">
              </div>
                    @endforeach                 
                    


<!--end voucher -->
          
           </div> <!-- tab 2 end -->
          
           </div>
           <!-- Card body END -->
        </div>
        <!-- Card END -->

        <!-- Card START -->
         
        <!-- Card END -->
    </div>
    <div class="col-sm-3" style="margin-top: 25px;">
      <div class="card">
        <!-- Card header START -->
        <div class="card-header pb-0 border-0">
          <h5 class="card-title mb-0">Filters</h5>
        </div>
        <!-- Card header END -->
        <!-- Card body START -->
        <div class="card-body">
          <div class="form-group col-sm-12" style="padding-bottom:20px">
            <label for="sel1">  Country </label>
            <select class="form-control" id="sel1" name="location" wire:model="selectedCountry">
              <option value="">Select Country</option>
              @foreach ($countries as $country)
              <option value="{{$country->id}}">{{$country->country}}</option>
              @endforeach
             </select>
          </div>
          <div class="form-group col-sm-12" style="padding-bottom:20px">
       <label for="sel1">  City </label>
       <select class="form-control" id="sel1" name="location" wire:model="selectedCity">
         <option value="">select City</option>
         @foreach ($cities as $city)
         <option value="{{$city->id}}">{{$city->name}}</option>
         @endforeach
        </select>
     </div>


          <div class="form-group col-sm-12" style="padding-bottom:20px">
       <label for="sel1">   Category  </label>
       <select class="form-control" id="sel1" name="location" wire:model="selectedCategory">
         <option value="">Select Category</option>
         @foreach ($categories as $category)
         <option value="{{$category->id}}">{{$category->name}}</option>
         @endforeach
        </select>
     </div>



          <div class="form-group col-sm-12" style="padding-bottom:20px">
       <label for="sel1">   Sub Category  </label>
       <select class="form-control" id="sel1" name="location" wire:model="selectedSubCategory">
        <option value="">Select Sub Category</option>
        @foreach ($subCategories as $subCategory)
        <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
        @endforeach
        </select>
     </div>

       
        </div>
        <!-- Card body END -->
      </div>
    </div>
</div>
