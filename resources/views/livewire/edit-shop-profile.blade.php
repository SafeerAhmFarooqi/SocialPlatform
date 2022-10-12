<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="collapse show" id="kt_account_settings_profile_details">
        <!--begin::Form-->
        <form class="form fv-plugins-bootstrap5 fv-plugins-framework" id="kt_account_profile_details_form"  novalidate="novalidate" method="POST" action="{{route('shop.profile.store')}}" enctype="multipart/form-data">
           @csrf
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Logo</label> <!--end::Label-->
                     <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Image input-->
                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{asset('assets/Metronic-Theme/media/svg/avatars/blank.svg')}}')">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-300px h-125px" style="background-image: url('{{(Auth::user()->logo->path??false)?asset('storage/'.(Auth::user()->logo->path??false)) : asset('assets/Metronic-Theme/media/svg/avatars/blank.svg')}}')"></div><!--end::Preview existing avatar-->
                            <!--begin::Label-->
                             <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-bs-toggle="tooltip" data-kt-image-input-action="change" data-kt-initialized="1"><i class="bi bi-pencil-fill fs-7"></i> <!--begin::Inputs-->
                                <input type="file" wire:model="selectedLogo" accept=".png, .jpg, .jpeg, .bmp, .gif, .svg" />
                                <input type="hidden" wire:model="selectedLogoRemove" /> <!--end::Inputs-->
                                @error('selectedLogo')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                            
                            </label> <!--end::Label-->
                             <!--begin::Cancel-->
                             <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-bs-toggle="tooltip" data-kt-image-input-action="cancel" data-kt-initialized="1"><i class="bi bi-x fs-2"></i></span> <!--end::Cancel-->
                             <!--begin::Remove-->
                             <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-bs-toggle="tooltip" data-kt-image-input-action="remove" data-kt-initialized="1"><i class="bi bi-x fs-2"></i></span> <!--end::Remove-->
                        </div><!--end::Image input-->
                        <!--begin::Hint-->
                        <div class="form-text">
                            Allowed file types: png, jpg, jpeg.
                        </div><!--end::Hint-->
                    </div><!--end::Col-->
                </div><!--end::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Banner</label> <!--end::Label-->
                     <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Image input-->
                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{asset('assets/Metronic-Theme/media/svg/avatars/blank.svg')}}')">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-300px h-125px" style="background-image: url('{{(Auth::user()->banner->path??false)?asset('storage/'.(Auth::user()->banner->path??false)) : asset('assets/Metronic-Theme/media/svg/avatars/blank.svg')}}')"></div><!--end::Preview existing avatar-->
                            <!--begin::Label-->
                             <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-bs-toggle="tooltip" data-kt-image-input-action="change" data-kt-initialized="1"><i class="bi bi-pencil-fill fs-7"></i> <!--begin::Inputs-->
                                <input type="file" wire:model="selectedBanner" accept=".png, .jpg, .jpeg, .bmp, .gif, .svg" />
                                <input type="hidden" wire:model="selectedBannerRemove" /> <!--end::Inputs-->
                                @error('selectedBanner')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                            
                            </label> <!--end::Label-->
                             <!--begin::Cancel-->
                             <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-bs-toggle="tooltip" data-kt-image-input-action="cancel" data-kt-initialized="1"><i class="bi bi-x fs-2"></i></span> <!--end::Cancel-->
                             <!--begin::Remove-->
                             <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-bs-toggle="tooltip" data-kt-image-input-action="remove" data-kt-initialized="1"><i class="bi bi-x fs-2"></i></span> <!--end::Remove-->
                        </div><!--end::Image input-->
                        <!--begin::Hint-->
                        <div class="form-text">
                            Allowed file types: png, jpg, jpeg.
                        </div><!--end::Hint-->
                    </div><!--end::Col-->
                </div><!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">First and Last Name</label> <!--end::Label-->
                     <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" wire:model="selectedFirstName" placeholder="First name" type="text">
                                @error('selectedFirstName')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div><!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                <input class="form-control form-control-lg form-control-solid" wire:model="selectedLastName" placeholder="Last name" type="text">
                                @error('selectedLastName')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                                @enderror
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div><!--end::Col-->
                        </div><!--end::Row-->
                    </div><!--end::Col-->
                </div><!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label> <!--end::Label-->
                     <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <span class="text-dark text-hover-primary fw-bolder fs-3">{{Auth::user()->email??''}}</span>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div><!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Shop Name</label> <!--end::Label-->
                     <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <span class="text-dark text-hover-primary fw-bolder fs-3">{{Auth::user()->shopname??''}}</span>
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div><!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                     <label class="col-lg-4 col-form-label fw-semibold fs-6"><span class="required">Country-{{$selectedCountry}}</span> <i aria-label="Country of origination" class="fas fa-exclamation-circle ms-1 fs-7"></i></label> <!--end::Label-->
                     <!--begin::Col-->
                    <div class="col-lg-4 fv-row fv-plugins-icon-container">
                        <select aria-hidden="true" aria-label="Select a Country" class="form-select form-select-solid form-select-lg fw-semibold" wire:model="selectedCountry">
                            <option  value="">
                                Select a Country...
                            </option>
                          @foreach ($countries as $country)
                          <option  value="{{$country->id}}" {{Auth::user()->country_id==$country->id? 'selected' : ''}}>
                            {{$country->country}}
                        </option>
                          @endforeach
                        </select> 
                        @error('selectedCountry')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div><!--end::Col-->
                </div><!--end::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                     <label class="col-lg-4 col-form-label fw-semibold fs-6"><span class="required">City</span> <i aria-label="Country of origination" class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" data-kt-initialized="1"></i></label> <!--end::Label-->
                     <!--begin::Col-->
                    <div class="col-lg-4 fv-row fv-plugins-icon-container">
                        <select aria-hidden="true" aria-label="Select a City" class="form-select form-select-solid form-select-lg fw-semibold" wire:model="selectedCity" data-kt-initialized="1" data-placeholder="Select a City..." data-select2-id="select2-data-10-ewc6" name="city" tabindex="-1">
                            <option  value="">
                                Select a City...
                            </option>
                          @foreach ($cities as $city)
                          <option  value="{{$city->id}}" {{Auth::user()->city_id==$city->id? 'selected' : ''}}>
                            {{$city->name}}
                        </option>
                          @endforeach
                        </select> 
                        @error('selectedCity')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div><!--end::Col-->
                </div><!--end::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                     <label class="col-lg-4 col-form-label fw-semibold fs-6"><span class="required">Category</span> <i aria-label="Country of origination" class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" data-kt-initialized="1"></i></label> <!--end::Label-->
                     <!--begin::Col-->
                    <div class="col-lg-4 fv-row fv-plugins-icon-container">
                        <select aria-hidden="true" aria-label="Select a Category" class="form-select form-select-solid form-select-lg fw-semibold" wire:model="selectedCategory" data-kt-initialized="1" data-placeholder="Select a Category..." data-select2-id="select2-data-10-ewc6" name="city" tabindex="-1">
                            <option  value="">
                                Select a Category...
                            </option>
                          @foreach ($categories as $category)
                          <option  value="{{$category->id}}" {{Auth::user()->category_id==$category->id? 'selected' : ''}}>
                            {{$category->name}}
                        </option>
                          @endforeach
                        </select> 
                        @error('selectedCategory')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div><!--end::Col-->
                </div><!--end::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                     <label class="col-lg-4 col-form-label fw-semibold fs-6"><span class="required">Sub Category</span> <i aria-label="Country of origination" class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" data-kt-initialized="1"></i></label> <!--end::Label-->
                     <!--begin::Col-->
                    <div class="col-lg-4 fv-row fv-plugins-icon-container">
                        <select aria-hidden="true" aria-label="Select a Country" class="form-select form-select-solid form-select-lg fw-semibold" wire:model="selectedSubCategory" data-kt-initialized="1" data-placeholder="Select a Sub Category..." data-select2-id="select2-data-10-ewc6" name="city" tabindex="-1">
                            <option value="">
                                Select a Sub Category...
                            </option>
                          @foreach ($subCategories as $subCategory)
                          <option  value="{{$subCategory->id}}" {{Auth::user()->subcategory_id==$subCategory->id? 'selected' : ''}}>
                            {{$subCategory->name}}
                        </option>
                          @endforeach
                        </select> 
                        @error('selectedSubCategory')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div><!--end::Col-->
                </div><!--end::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                     <label class="col-lg-4 col-form-label fw-semibold fs-6"><span class="required">Address</span> <i aria-label="Phone number must be active" class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" data-kt-initialized="1"></i></label> <!--end::Label-->
                     <!--begin::Col-->
                    <div class="col-lg-4 fv-row fv-plugins-icon-container">
                        <input class="form-control form-control-lg form-control-solid" wire:model="selectedAddress" id="address" placeholder="Shop Address" type="text" value="{{old('address')??Auth::user()->address}}">
                        @error('selectedAddress')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div><!--end::Col-->
                </div><!--end::Input group-->
            
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                     <label class="col-lg-4 col-form-label fw-semibold fs-6"><span class="required">Contact Phone 1</span> <i aria-label="Phone number must be active" class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" data-kt-initialized="1"></i></label> <!--end::Label-->
                     <!--begin::Col-->
                    <div class="col-lg-4 fv-row fv-plugins-icon-container">
                        <input class="form-control form-control-lg form-control-solid" wire:model="selectedPhone1" placeholder="Contact Number" type="tel" value="{{old('phone')??Auth::user()->phone}}">
                        @error('selectedPhone1')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div><!--end::Col-->
                </div><!--end::Input group-->

                <div class="row mb-6">
                    <!--begin::Label-->
                     <label class="col-lg-4 col-form-label fw-semibold fs-6"><span class="required">Contact Phone 2</span> <i aria-label="Phone number must be active" class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" data-kt-initialized="1"></i></label> <!--end::Label-->
                     <!--begin::Col-->
                    <div class="col-lg-4 fv-row fv-plugins-icon-container">
                        <input class="form-control form-control-lg form-control-solid" wire:model="selectedPhone2" placeholder="Contact Number" type="tel" value="{{old('phone')??Auth::user()->phone}}">
                        @error('selectedPhone2')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                        @enderror
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div><!--end::Col-->
                </div><!--end::Input group-->


             

              
              

         

            


                <!--begin::Input group-->
             
         


                  

                 

              



             
            </div><!--end::Card body-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button class="btn btn-light btn-active-light-primary me-2" type="reset" onclick="history.back()">Back</button> <button class="btn btn-primary" id="kt_account_profile_details_submit" type="submit">Save Changes</button>
            </div><!--end::Actions-->
            <input type="hidden">
            <div></div>
        </form><!--end::Form-->
    </div><!--end::Content-->
</div>
