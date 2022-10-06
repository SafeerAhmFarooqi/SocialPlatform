@extends('layouts.ressoli-theme')
@section('body-content')
<style>
  .bg-danger
  {
    background: #f85d7a !important;
    color: #fff;
    padding: 10px;
    font-size: 10px;
  }
</style>
<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
  
  <!-- Container START -->
  <div class="container">
    <div class="row justify-content-center align-items-center vh-100 py-5">
      <!-- Main content START -->
      <div class="col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5">
        <!-- Sign up START -->
        <div class="card card-body rounded-3 p-4 p-sm-5">
          <div class="text-center">
            <!-- Title -->
            <h1 class="mb-2">Sign up</h1>
            <span class="d-block">Already have an account? <a href="{{ route('login') }}">Sign in here</a></span>
          </div>
          <!-- Form START -->
         
              <form  id='registration_form' class="mt-4 form-inline" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
 @csrf
                  <input type="hidden" name="role" value="user">
            <!-- Name -->
            <div class="mb-3 input-group-lg">
              <input type="text" class="form-control" placeholder="First Name" name="firstname" value="{{old('firstname')}}">
               @error('firstname')
                                    <div class="bg-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
             </div>
            <div class="mb-3 input-group-lg">
              <input type="text" class="form-control" placeholder="Last Name" name="lastname" value="{{old('lastname')}}">
              @error('lastname')
                                    <div class="bg-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
             </div>
            <!-- Email -->
            <div class="mb-3 input-group-lg">
              <input type="email" class="form-control" placeholder="Enter Email" name="email"  value="{{old('email')}}"/>
                      @error('email')
                                    <div class="bg-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
              <small>We'll never share your email with anyone else.</small>
            </div>
            <!-- New password -->
            <div class="mb-3 position-relative">
              <!-- Input group -->
              <div class="input-group input-group-lg">
                <input class="form-control fakepassword" type="password" id="psw-input" name="password" placeholder="Enter new password">
                
                 @error('password')
                                    <div class="bg-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror

              </div>
              
            <!-- Confirm password -->
            <div class="mb-3 input-group-lg">
              <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm password">
               @error('password_confirmation')
                                    <div class="bg-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror

            </div>


             
            <div class="mb-3 input-group-lg">
             <div class="row">
                     <div class="form-group col-sm-3 col-xs-6">
                      <label for="month" class="sr-only"></label>  
                      <select class="form-control" id="day" name="day" value="{{old('day')}}">
                        <option value="day" disabled selected>Day</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                        <option>26</option>
                        <option>27</option>
                        <option>28</option>
                        <option>29</option>
                        <option>30</option>
                        <option>31</option>
                      </select>
                      @error('day')
                      <div class="bg-danger" role="alert">
                          {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group col-sm-3 col-xs-6">
                      <label for="month" class="sr-only"></label>
                      <select class="form-control" id="month" name="month" value="{{old('month')}}">
                        <option value="month" disabled selected>Month</option>
                        <option>Jan</option>
                        <option>Feb</option>
                        <option>Mar</option>
                        <option>Apr</option>
                        <option>May</option>
                        <option>Jun</option>
                        <option>Jul</option>
                        <option>Aug</option>
                        <option>Sep</option>
                        <option>Oct</option>
                        <option>Nov</option>
                        <option>Dec</option>
                      </select>
                      @error('month')
                      <div class="bg-danger" role="alert">
                          {{$message}}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group col-sm-6 col-xs-12">
                      <label for="year" class="sr-only"></label>
                      <select class="form-control" id="year" name="year" value="{{old('year')}}">
                        <option value="year" disabled selected>Year</option>
                        <option>1888</option>
                        <option>1889</option>
                        <option>1990</option>
                        <option>1991</option>
                        <option>1992</option>
                        <option>1993</option>
                        <option>1994</option>
                        <option>1995</option>
                        <option>1996</option>
                        <option>1997</option>
                        <option>1998</option>
                        <option>1999</option>
                        <option>2000</option>
                        <option>2001</option>
                        <option>2002</option>
                        <option>2004</option>
                        <option>2005</option>
                        <option>2006</option>
                        <option>2007</option>
                        <option>2008</option>
                        <option>2009</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                      </select>
                      @error('year')
                      <div class="bg-danger" role="alert">
                          {{$message}}
                      </div>
                      @enderror
                    </div>
                  </div>
            </div>

   
            <div class="mb-3 input-group-lg">
             <div class="form-group col-xs-6">
                      <label for="country" class="sr-only"></label>
                      <select class="form-control" id="country" name="country" value="{{old('country')}}">
                        <option value="country" disabled selected>Country</option>
                        <option value="AFG">Afghanistan</option>
                        <option value="ALA">�land Islands</option>
                        <option value="ALB">Albania</option>
                        <option value="DZA">Algeria</option>
                        <option value="ASM">American Samoa</option>
                        <option value="AND">Andorra</option>
                        <option value="AGO">Angola</option>
                        <option value="AIA">Anguilla</option>
                        <option value="ATA">Antarctica</option>
                        <option value="ATG">Antigua and Barbuda</option>
                        <option value="ARG">Argentina</option>
                        <option value="ARM">Armenia</option>
                        <option value="ABW">Aruba</option>
                        <option value="AUS">Australia</option>
                        <option value="AUT">Austria</option>
                        <option value="AZE">Azerbaijan</option>
                        <option value="BHS">Bahamas</option>
                        <option value="BHR">Bahrain</option>
                        <option value="BGD">Bangladesh</option>
                        <option value="BRB">Barbados</option>
                        <option value="BLR">Belarus</option>
                        <option value="BEL">Belgium</option>
                        <option value="BLZ">Belize</option>
                        <option value="BEN">Benin</option>
                        <option value="BMU">Bermuda</option>
                        <option value="BTN">Bhutan</option>
                        <option value="BOL">Bolivia, Plurinational State of</option>
                        <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                        <option value="BIH">Bosnia and Herzegovina</option>
                        <option value="BWA">Botswana</option>
                        <option value="BVT">Bouvet Island</option>
                        <option value="BRA">Brazil</option>
                        <option value="IOT">British Indian Ocean Territory</option>
                        <option value="BRN">Brunei Darussalam</option>
                        <option value="BGR">Bulgaria</option>
                        <option value="BFA">Burkina Faso</option>
                        <option value="BDI">Burundi</option>
                        <option value="KHM">Cambodia</option>
                        <option value="CMR">Cameroon</option>
                        <option value="CAN">Canada</option>
                        <option value="CPV">Cape Verde</option>
                        <option value="CYM">Cayman Islands</option>
                        <option value="CAF">Central African Republic</option>
                        <option value="TCD">Chad</option>
                        <option value="CHL">Chile</option>
                        <option value="CHN">China</option>
                        <option value="CXR">Christmas Island</option>
                        <option value="CCK">Cocos (Keeling) Islands</option>
                        <option value="COL">Colombia</option>
                        <option value="COM">Comoros</option>
                        <option value="COG">Congo</option>
                        <option value="COD">Congo, the Democratic Republic of the</option>
                        <option value="COK">Cook Islands</option>
                        <option value="CRI">Costa Rica</option>
                        <option value="CIV">C�te d'Ivoire</option>
                        <option value="HRV">Croatia</option>
                        <option value="CUB">Cuba</option>
                        <option value="CUW">Cura�ao</option>
                        <option value="CYP">Cyprus</option>
                        <option value="CZE">Czech Republic</option>
                        <option value="DNK">Denmark</option>
                        <option value="DJI">Djibouti</option>
                        <option value="DMA">Dominica</option>
                        <option value="DOM">Dominican Republic</option>
                        <option value="ECU">Ecuador</option>
                        <option value="EGY">Egypt</option>
                        <option value="SLV">El Salvador</option>
                        <option value="GNQ">Equatorial Guinea</option>
                        <option value="ERI">Eritrea</option>
                        <option value="EST">Estonia</option>
                        <option value="ETH">Ethiopia</option>
                        <option value="FLK">Falkland Islands (Malvinas)</option>
                        <option value="FRO">Faroe Islands</option>
                        <option value="FJI">Fiji</option>
                        <option value="FIN">Finland</option>
                        <option value="FRA">France</option>
                        <option value="GUF">French Guiana</option>
                        <option value="PYF">French Polynesia</option>
                        <option value="ATF">French Southern Territories</option>
                        <option value="GAB">Gabon</option>
                        <option value="GMB">Gambia</option>
                        <option value="GEO">Georgia</option>
                        <option value="DEU">Germany</option>
                        <option value="GHA">Ghana</option>
                        <option value="GIB">Gibraltar</option>
                        <option value="GRC">Greece</option>
                        <option value="GRL">Greenland</option>
                        <option value="GRD">Grenada</option>
                        <option value="GLP">Guadeloupe</option>
                        <option value="GUM">Guam</option>
                        <option value="GTM">Guatemala</option>
                        <option value="GGY">Guernsey</option>
                        <option value="GIN">Guinea</option>
                        <option value="GNB">Guinea-Bissau</option>
                        <option value="GUY">Guyana</option>
                        <option value="HTI">Haiti</option>
                        <option value="HMD">Heard Island and McDonald Islands</option>
                        <option value="VAT">Holy See (Vatican City State)</option>
                        <option value="HND">Honduras</option>
                        <option value="HKG">Hong Kong</option>
                        <option value="HUN">Hungary</option>
                        <option value="ISL">Iceland</option>
                        <option value="IND">India</option>
                        <option value="IDN">Indonesia</option>
                        <option value="IRN">Iran, Islamic Republic of</option>
                        <option value="IRQ">Iraq</option>
                        <option value="IRL">Ireland</option>
                        <option value="IMN">Isle of Man</option>
                        <option value="ISR">Israel</option>
                        <option value="ITA">Italy</option>
                        <option value="JAM">Jamaica</option>
                        <option value="JPN">Japan</option>
                        <option value="JEY">Jersey</option>
                        <option value="JOR">Jordan</option>
                        <option value="KAZ">Kazakhstan</option>
                        <option value="KEN">Kenya</option>
                        <option value="KIR">Kiribati</option>
                        <option value="PRK">Korea, Democratic People's Republic of</option>
                        <option value="KOR">Korea, Republic of</option>
                        <option value="KWT">Kuwait</option>
                        <option value="KGZ">Kyrgyzstan</option>
                        <option value="LAO">Lao People's Democratic Republic</option>
                        <option value="LVA">Latvia</option>
                        <option value="LBN">Lebanon</option>
                        <option value="LSO">Lesotho</option>
                        <option value="LBR">Liberia</option>
                        <option value="LBY">Libya</option>
                        <option value="LIE">Liechtenstein</option>
                        <option value="LTU">Lithuania</option>
                        <option value="LUX">Luxembourg</option>
                        <option value="MAC">Macao</option>
                        <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                        <option value="MDG">Madagascar</option>
                        <option value="MWI">Malawi</option>
                        <option value="MYS">Malaysia</option>
                        <option value="MDV">Maldives</option>
                        <option value="MLI">Mali</option>
                        <option value="MLT">Malta</option>
                        <option value="MHL">Marshall Islands</option>
                        <option value="MTQ">Martinique</option>
                        <option value="MRT">Mauritania</option>
                        <option value="MUS">Mauritius</option>
                        <option value="MYT">Mayotte</option>
                        <option value="MEX">Mexico</option>
                        <option value="FSM">Micronesia, Federated States of</option>
                        <option value="MDA">Moldova, Republic of</option>
                        <option value="MCO">Monaco</option>
                        <option value="MNG">Mongolia</option>
                        <option value="MNE">Montenegro</option>
                        <option value="MSR">Montserrat</option>
                        <option value="MAR">Morocco</option>
                        <option value="MOZ">Mozambique</option>
                        <option value="MMR">Myanmar</option>
                        <option value="NAM">Namibia</option>
                        <option value="NRU">Nauru</option>
                        <option value="NPL">Nepal</option>
                        <option value="NLD">Netherlands</option>
                        <option value="NCL">New Caledonia</option>
                        <option value="NZL">New Zealand</option>
                        <option value="NIC">Nicaragua</option>
                        <option value="NER">Niger</option>
                        <option value="NGA">Nigeria</option>
                        <option value="NIU">Niue</option>
                        <option value="NFK">Norfolk Island</option>
                        <option value="MNP">Northern Mariana Islands</option>
                        <option value="NOR">Norway</option>
                        <option value="OMN">Oman</option>
                        <option value="PAK">Pakistan</option>
                        <option value="PLW">Palau</option>
                        <option value="PSE">Palestinian Territory, Occupied</option>
                        <option value="PAN">Panama</option>
                        <option value="PNG">Papua New Guinea</option>
                        <option value="PRY">Paraguay</option>
                        <option value="PER">Peru</option>
                        <option value="PHL">Philippines</option>
                        <option value="PCN">Pitcairn</option>
                        <option value="POL">Poland</option>
                        <option value="PRT">Portugal</option>
                        <option value="PRI">Puerto Rico</option>
                        <option value="QAT">Qatar</option>
                        <option value="REU">R�union</option>
                        <option value="ROU">Romania</option>
                        <option value="RUS">Russian Federation</option>
                        <option value="RWA">Rwanda</option>
                        <option value="BLM">Saint Barth�lemy</option>
                        <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                        <option value="KNA">Saint Kitts and Nevis</option>
                        <option value="LCA">Saint Lucia</option>
                        <option value="MAF">Saint Martin (French part)</option>
                        <option value="SPM">Saint Pierre and Miquelon</option>
                        <option value="VCT">Saint Vincent and the Grenadines</option>
                        <option value="WSM">Samoa</option>
                        <option value="SMR">San Marino</option>
                        <option value="STP">Sao Tome and Principe</option>
                        <option value="SAU">Saudi Arabia</option>
                        <option value="SEN">Senegal</option>
                        <option value="SRB">Serbia</option>
                        <option value="SYC">Seychelles</option>
                        <option value="SLE">Sierra Leone</option>
                        <option value="SGP">Singapore</option>
                        <option value="SXM">Sint Maarten (Dutch part)</option>
                        <option value="SVK">Slovakia</option>
                        <option value="SVN">Slovenia</option>
                        <option value="SLB">Solomon Islands</option>
                        <option value="SOM">Somalia</option>
                        <option value="ZAF">South Africa</option>
                        <option value="SGS">South Georgia and the South Sandwich Islands</option>
                        <option value="SSD">South Sudan</option>
                        <option value="ESP">Spain</option>
                        <option value="LKA">Sri Lanka</option>
                        <option value="SDN">Sudan</option>
                        <option value="SUR">Suriname</option>
                        <option value="SJM">Svalbard and Jan Mayen</option>
                        <option value="SWZ">Swaziland</option>
                        <option value="SWE">Sweden</option>
                        <option value="CHE">Switzerland</option>
                        <option value="SYR">Syrian Arab Republic</option>
                        <option value="TWN">Taiwan, Province of China</option>
                        <option value="TJK">Tajikistan</option>
                        <option value="TZA">Tanzania, United Republic of</option>
                        <option value="THA">Thailand</option>
                        <option value="TLS">Timor-Leste</option>
                        <option value="TGO">Togo</option>
                        <option value="TKL">Tokelau</option>
                        <option value="TON">Tonga</option>
                        <option value="TTO">Trinidad and Tobago</option>
                        <option value="TUN">Tunisia</option>
                        <option value="TUR">Turkey</option>
                        <option value="TKM">Turkmenistan</option>
                        <option value="TCA">Turks and Caicos Islands</option>
                        <option value="TUV">Tuvalu</option>
                        <option value="UGA">Uganda</option>
                        <option value="UKR">Ukraine</option>
                        <option value="ARE">United Arab Emirates</option>
                        <option value="GBR">United Kingdom</option>
                        <option value="USA">United States</option>
                        <option value="UMI">United States Minor Outlying Islands</option>
                        <option value="URY">Uruguay</option>
                        <option value="UZB">Uzbekistan</option>
                        <option value="VUT">Vanuatu</option>
                        <option value="VEN">Venezuela, Bolivarian Republic of</option>
                        <option value="VNM">Viet Nam</option>
                        <option value="VGB">Virgin Islands, British</option>
                        <option value="VIR">Virgin Islands, U.S.</option>
                        <option value="WLF">Wallis and Futuna</option>
                        <option value="ESH">Western Sahara</option>
                        <option value="YEM">Yemen</option>
                        <option value="ZMB">Zambia</option>
                        <option value="ZWE">Zimbabwe</option>
                      </select>
                      @error('country')
                      <div class="bg-danger" role="alert">
                          {{$message}}
                      </div>
                      @enderror
                    </div>



            </div>

              <!-- Confirm password -->
            <div class="mb-3 input-group-lg">
              <div class="form-group col-xs-6">
                      <label for="city" class="sr-only">City</label>
                      <input id="city" class="form-control input-group-lg reg_name" type="text" name="city" title="Enter city" placeholder="Your city" value="{{old('city')}}"/>
                      @error('city')
                      <div class="bg-danger" role="alert">
                          {{$message}}
                      </div>
                      @enderror
                    </div>
            </div>

              <!-- Confirm password -->
            <div class="mb-3 input-group-lg">
              <div class="form-group col-xs-12">
                      <label for="email" class="sr-only">Address</label>
                      <input  class="form-control input-group-lg" type="text" name="address" title="Enter Address" placeholder="Your Address" value="{{old('address')}}"/>
                      @error('address')
                                    <div class="bg-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                    </div>
            </div>



            <!-- Confirm password -->
            <div class="mb-3 input-group-lg">
               <div class="form-group col-xs-12">
                      <label  class="sr-only">Document For Verification</label>
                      <input  class="form-control input-group-lg reg_name" type="file" name="document"/>
                                      <p><span href="#" style="color:#D10000">* Document Must Upload For Verification</span></p>

                      <span>@error('document')
                        <div class="bg-danger" role="alert">
                          {{$message}}
                      </div>
                      @enderror</span>
                    </div>
            </div>





            <!-- Keep me signed in -->
            <div class="mb-3 text-start">
              <input type="checkbox" class="form-check-input" name="category[]"  value="army">
              <label class="form-check-label" for="keepsingnedCheck"> Armed Forces</label>
            </div>
            <div class="mb-3 text-start">
              <input type="checkbox" class="form-check-input" name="category[]"  value="police">
              <label class="form-check-label" for="keepsingnedCheck"> Police </label>
            </div>
            <div class="mb-3 text-start">
              <input type="checkbox" class="form-check-input" name="category[]"  value="fire">
              <label class="form-check-label" for="keepsingnedCheck"> Fire </label>
            </div>
            <div class="mb-3 text-start">
              <input type="checkbox" class="form-check-input" name="category[]"  value="Paramedic">
              <label class="form-check-label" for="keepsingnedCheck"> Paramadic </label>
            </div>
            <div class="mb-3 text-start">
              <input type="checkbox" class="form-check-input" name="category[]"  value="thw">
              <label class="form-check-label" for="keepsingnedCheck"> THW </label>
            </div>

             <div class="row">
                    <span>@error('category')
                      <div class="bg-danger" role="alert">
                        {{$message}}
                    </div>
                    @enderror</span>
                </div>


            <!-- Button -->
            <div class="d-grid"><button type="submit" class="btn btn-lg btn-primary">Sign me up</button></div>
            <!-- Copyright -->
           </form>
          <!-- Form END -->
        </div>
        <!-- Sign up END -->
      </div>
    </div> <!-- Row END -->
  </div>
  <!-- Container END -->

</main>

<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/pswmeter/pswmeter.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>
 
</html>

@endsection

@section('pageScripts')
    
@endsection