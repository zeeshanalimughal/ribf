@extends('user.layout.user-layout')

@section('content')

<!-- MAIN WRAPPER -->
<div class="body-wrap gry-bg">
    <!-- Header -->
        <section class="auth-profile">
            <div class="profile-inner">
                <div class="row">
                    <div class="col-xxl-6 col-xl-8 col-lg-10 col-md-10 mx-auto">

                        <div class="top-header">

                            <div class="row">

                            <div class="col-md-2 lang"> <a href="#">العربية</a> </div>

                            <div class="col-md-2 lang login"><a href="{{url('/logoutUser')}}">Logout</a></div>

                            </div>

                        </div>

                        <div class="form-wrapper">
                            <div class="main-top">
                                <div class="banner">
                                  <a href="#" class="logo"> <img src="{{asset('images/logo.svg')}}" class="text-right"></a>
                                </div>
                            </div>

                            <div class="mb-4">
                                    <form class="form-default" accept="{{ url('/') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            @if (session()->has('message'))
                                            <div class="alert alert-success text-center" role="alert">
                                                <strong>{{ session()->get("message")
                                                }}{{session()->forget('message')}}</strong>
                                            </div>
                                            @endif
                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div class="input-group input-group--style-1">
                                                        <input value="{{old('bookTitle')}}" value="{{old('bookTitle')}}" type="text" class="form-control" value="" placeholder="Book Title" name="bookTitle" id="bookTitle" >
                                                    </div>
                                                    <span class="text-danger small">
                                                        @error('bookTitle')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>

                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group input-group--style-1">
                                                        <input value="{{old('authorName')}}" type="text" class="form-control" value="" placeholder="Author Name" name="authorName" id="authorName" value="{{ old('authorName') }}" >
                                                    </div>
                                                    <span class="text-danger small">
                                                        @error('authorName')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>

                                                <div class="form-group">
                                                    <select class="form-select form-control" name="authorNationality">
                                                      <option value="">Author Nationality</option>
                                                      <option value="--">Not Specified</option>
                                                      <option value="AF">Afghanistan</option>
                                                      <option value="AL">Albania</option>
                                                      <option value="DZ">Algeria</option>
                                                      <option value="AS">American Samoa</option>
                                                      <option value="AD">Andorra</option>
                                                      <option value="AO">Angola</option>
                                                      <option value="AI">Anguilla</option>
                                                      <option value="AQ">Antarctica</option>
                                                      <option value="AG">Antigua and Barbuda</option>
                                                      <option value="AR">Argentina</option>
                                                      <option value="AM">Armenia</option>
                                                      <option value="AW">Aruba</option>
                                                      <option value="AU">Australia</option>
                                                      <option value="AT">Austria</option>
                                                      <option value="AZ">Azerbaijan</option>
                                                      <option value="BS">Bahamas</option>
                                                      <option value="BH">Bahrain</option>
                                                      <option value="BD">Bangladesh</option>
                                                      <option value="BB">Barbados</option>
                                                      <option value="BY">Belarus</option>
                                                      <option value="BE">Belgium</option>
                                                      <option value="BZ">Belize</option>
                                                      <option value="BJ">Benin</option>
                                                      <option value="BM">Bermuda</option>
                                                      <option value="BT">Bhutan</option>
                                                      <option value="BO">Bolivia</option>
                                                      <option value="BA">Bosnia and Herzegowina</option>
                                                      <option value="BW">Botswana</option>
                                                      <option value="BV">Bouvet Island</option>
                                                      <option value="BR">Brazil</option>
                                                      <option value="IO">British Indian Ocean Territory</option>
                                                      <option value="BN">Brunei Darussalam</option>
                                                      <option value="BG">Bulgaria</option>
                                                      <option value="BF">Burkina Faso</option>
                                                      <option value="BI">Burundi</option>
                                                      <option value="KH">Cambodia</option>
                                                      <option value="CM">Cameroon</option>
                                                      <option value="CA">Canada</option>
                                                      <option value="CV">Cape Verde</option>
                                                      <option value="KY">Cayman Islands</option>
                                                      <option value="CF">Central African Republic</option>
                                                      <option value="TD">Chad</option>
                                                      <option value="CL">Chile</option>
                                                      <option value="CN">China</option>
                                                      <option value="CX">Christmas Island</option>
                                                      <option value="CC">Cocos (Keeling) Islands</option>
                                                      <option value="CO">Colombia</option>
                                                      <option value="KM">Comoros</option>
                                                      <option value="CG">Congo</option>
                                                      <option value="CD">Congo, the Democratic Republic of the</option>
                                                      <option value="CK">Cook Islands</option>
                                                      <option value="CR">Costa Rica</option>
                                                      <option value="CI">Cote d'Ivoire</option>
                                                      <option value="HR">Croatia (Hrvatska)</option>
                                                      <option value="CU">Cuba</option>
                                                      <option value="CY">Cyprus</option>
                                                      <option value="CZ">Czech Republic</option>
                                                      <option value="DK">Denmark</option>
                                                      <option value="DJ">Djibouti</option>
                                                      <option value="DM">Dominica</option>
                                                      <option value="DO">Dominican Republic</option>
                                                      <option value="TP">East Timor</option>
                                                      <option value="EC">Ecuador</option>
                                                      <option value="EG">Egypt</option>
                                                      <option value="SV">El Salvador</option>
                                                      <option value="GQ">Equatorial Guinea</option>
                                                      <option value="ER">Eritrea</option>
                                                      <option value="EE">Estonia</option>
                                                      <option value="ET">Ethiopia</option>
                                                      <option value="FK">Falkland Islands (Malvinas)</option>
                                                      <option value="FO">Faroe Islands</option>
                                                      <option value="FJ">Fiji</option>
                                                      <option value="FI">Finland</option>
                                                      <option value="FR">France</option>
                                                      <option value="FX">France, Metropolitan</option>
                                                      <option value="GF">French Guiana</option>
                                                      <option value="PF">French Polynesia</option>
                                                      <option value="TF">French Southern Territories</option>
                                                      <option value="GA">Gabon</option>
                                                      <option value="GM">Gambia</option>
                                                      <option value="GE">Georgia</option>
                                                      <option value="DE">Germany</option>
                                                      <option value="GH">Ghana</option>
                                                      <option value="GI">Gibraltar</option>
                                                      <option value="GR">Greece</option>
                                                      <option value="GL">Greenland</option>
                                                      <option value="GD">Grenada</option>
                                                      <option value="GP">Guadeloupe</option>
                                                      <option value="GU">Guam</option>
                                                      <option value="GT">Guatemala</option>
                                                      <option value="GN">Guinea</option>
                                                      <option value="GW">Guinea-Bissau</option>
                                                      <option value="GY">Guyana</option>
                                                      <option value="HT">Haiti</option>
                                                      <option value="HM">Heard and Mc Donald Islands</option>
                                                      <option value="VA">Holy See (Vatican City State)</option>
                                                      <option value="HN">Honduras</option>
                                                      <option value="HK">Hong Kong</option>
                                                      <option value="HU">Hungary</option>
                                                      <option value="IS">Iceland</option>
                                                      <option value="IN">India</option>
                                                      <option value="ID">Indonesia</option>
                                                      <option value="IR">Iran (Islamic Republic of)</option>
                                                      <option value="IQ">Iraq</option>
                                                      <option value="IE">Ireland</option>
                                                      <option value="IL">Israel</option>
                                                      <option value="IT">Italy</option>
                                                      <option value="JM">Jamaica</option>
                                                      <option value="JP">Japan</option>
                                                      <option value="JO">Jordan</option>
                                                      <option value="KZ">Kazakhstan</option>
                                                      <option value="KE">Kenya</option>
                                                      <option value="KI">Kiribati</option>
                                                      <option value="KP">Korea, Democratic People's Republic of</option>
                                                      <option value="KR">Korea, Republic of</option>
                                                      <option value="KW">Kuwait</option>
                                                      <option value="KG">Kyrgyzstan</option>
                                                      <option value="LA">Lao People's Democratic Republic</option>
                                                      <option value="LV">Latvia</option>
                                                      <option value="LB">Lebanon</option>
                                                      <option value="LS">Lesotho</option>
                                                      <option value="LR">Liberia</option>
                                                      <option value="LY">Libyan Arab Jamahiriya</option>
                                                      <option value="LI">Liechtenstein</option>
                                                      <option value="LT">Lithuania</option>
                                                      <option value="LU">Luxembourg</option>
                                                      <option value="MO">Macau</option>
                                                      <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                      <option value="MG">Madagascar</option>
                                                      <option value="MW">Malawi</option>
                                                      <option value="MY">Malaysia</option>
                                                      <option value="MV">Maldives</option>
                                                      <option value="ML">Mali</option>
                                                      <option value="MT">Malta</option>
                                                      <option value="MH">Marshall Islands</option>
                                                      <option value="MQ">Martinique</option>
                                                      <option value="MR">Mauritania</option>
                                                      <option value="MU">Mauritius</option>
                                                      <option value="YT">Mayotte</option>
                                                      <option value="MX">Mexico</option>
                                                      <option value="FM">Micronesia, Federated States of</option>
                                                      <option value="MD">Moldova, Republic of</option>
                                                      <option value="MC">Monaco</option>
                                                      <option value="MN">Mongolia</option>
                                                      <option value="MS">Montserrat</option>
                                                      <option value="MA">Morocco</option>
                                                      <option value="MZ">Mozambique</option>
                                                      <option value="MM">Myanmar</option>
                                                      <option value="NA">Namibia</option>
                                                      <option value="NR">Nauru</option>
                                                      <option value="NP">Nepal</option>
                                                      <option value="NL">Netherlands</option>
                                                      <option value="AN">Netherlands Antilles</option>
                                                      <option value="NC">New Caledonia</option>
                                                      <option value="NZ">New Zealand</option>
                                                      <option value="NI">Nicaragua</option>
                                                      <option value="NE">Niger</option>
                                                      <option value="NG">Nigeria</option>
                                                      <option value="NU">Niue</option>
                                                      <option value="NF">Norfolk Island</option>
                                                      <option value="MP">Northern Mariana Islands</option>
                                                      <option value="NO">Norway</option>
                                                      <option value="OM">Oman</option>
                                                      <option value="PK">Pakistan</option>
                                                      <option value="PW">Palau</option>
                                                      <option value="PA">Panama</option>
                                                      <option value="PG">Papua New Guinea</option>
                                                      <option value="PY">Paraguay</option>
                                                      <option value="PE">Peru</option>
                                                      <option value="PH">Philippines</option>
                                                      <option value="PN">Pitcairn</option>
                                                      <option value="PL">Poland</option>
                                                      <option value="PT">Portugal</option>
                                                      <option value="PR">Puerto Rico</option>
                                                      <option value="QA">Qatar</option>
                                                      <option value="RE">Reunion</option>
                                                      <option value="RO">Romania</option>
                                                      <option value="RU">Russian Federation</option>
                                                      <option value="RW">Rwanda</option>
                                                      <option value="KN">Saint Kitts and Nevis</option>
                                                      <option value="LC">Saint LUCIA</option>
                                                      <option value="VC">Saint Vincent and the Grenadines</option>
                                                      <option value="WS">Samoa</option>
                                                      <option value="SM">San Marino</option>
                                                      <option value="ST">Sao Tome and Principe</option>
                                                      <option value="SA">Saudi Arabia</option>
                                                      <option value="SN">Senegal</option>
                                                      <option value="SC">Seychelles</option>
                                                      <option value="SL">Sierra Leone</option>
                                                      <option value="SG">Singapore</option>
                                                      <option value="SK">Slovakia (Slovak Republic)</option>
                                                      <option value="SI">Slovenia</option>
                                                      <option value="SB">Solomon Islands</option>
                                                      <option value="SO">Somalia</option>
                                                      <option value="ZA">South Africa</option>
                                                      <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                      <option value="ES">Spain</option>
                                                      <option value="LK">Sri Lanka</option>
                                                      <option value="SH">St. Helena</option>
                                                      <option value="PM">St. Pierre and Miquelon</option>
                                                      <option value="SD">Sudan</option>
                                                      <option value="SR">Suriname</option>
                                                      <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                      <option value="SZ">Swaziland</option>
                                                      <option value="SE">Sweden</option>
                                                      <option value="CH">Switzerland</option>
                                                      <option value="SY">Syrian Arab Republic</option>
                                                      <option value="TW">Taiwan, Province of China</option>
                                                      <option value="TJ">Tajikistan</option>
                                                      <option value="TZ">Tanzania, United Republic of</option>
                                                      <option value="TH">Thailand</option>
                                                      <option value="TG">Togo</option>
                                                      <option value="TK">Tokelau</option>
                                                      <option value="TO">Tonga</option>
                                                      <option value="TT">Trinidad and Tobago</option>
                                                      <option value="TN">Tunisia</option>
                                                      <option value="TR">Turkey</option>
                                                      <option value="TM">Turkmenistan</option>
                                                      <option value="TC">Turks and Caicos Islands</option>
                                                      <option value="TV">Tuvalu</option>
                                                      <option value="UG">Uganda</option>
                                                      <option value="UA">Ukraine</option>
                                                      <option value="AE">United Arab Emirates</option>
                                                      <option value="GB">United Kingdom</option>
                                                      <option value="US">United States</option>
                                                      <option value="UM">United States Minor Outlying Islands</option>
                                                      <option value="UY">Uruguay</option>
                                                      <option value="UZ">Uzbekistan</option>
                                                      <option value="VU">Vanuatu</option>
                                                      <option value="VE">Venezuela</option>
                                                      <option value="VN">Viet Nam</option>
                                                      <option value="VG">Virgin Islands (British)</option>
                                                      <option value="VI">Virgin Islands (U.S.)</option>
                                                      <option value="WF">Wallis and Futuna Islands</option>
                                                      <option value="EH">Western Sahara</option>
                                                      <option value="YE">Yemen</option>
                                                      <option value="YU">Yugoslavia</option>
                                                      <option value="ZM">Zambia</option>
                                                      <option value="ZW">Zimbabwe</option>
                                                    </select>
                                                    <span class="text-danger small">
                                                        @error('authorNationality')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>

                                                <div class="form-group">
                                                    <select class="form-select form-control" name="bookLanguage">
                                                      <option value="">Book Language</option>
                                                      <option value="1">Arabic</option>
                                                      <option value="2">English</option>
                                                      <option value="3">Other</option>
                                                    </select>
                                                    <span class="text-danger small">
                                                        @error('bookLanguage')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>

                                                <div class="form-group">
                                                    <div class="label">Book Dimensions</div>
                                                    <div class="input-group input-group--style-1">
                                                        <input value="{{old('bookDimension')}}" type="text" class="form-control" value="" placeholder="Length x Width" name="bookDimension" id="bookDimension" >
                                                    </div>
                                                    <span class="text-danger small">
                                                        @error('bookDimension')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group input-group--style-1">
                                                        <input value="{{old('numberPages')}}" type="text" class="form-control" value="" placeholder="Number of Pages" name="numberPages" id="numberPages" >
                                                    </div>
                                                    <span class="text-danger small">
                                                        @error('numberPages')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>

                                                <div class="form-group" id="issue_date">
                                                    <div class="input-group input-group--style-1">
                                                        <input value="{{old('issueDate')}}" type="text" class="form-control" value="" placeholder="Issue Date" name="issueDate" id="datepicker">
                                                    </div>
                                                    <span class="text-danger small">
                                                        @error('issueDate')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group input-group--style-1">
                                                        <input value="{{old('price')}}" type="text" class="form-control" value="" placeholder="Price by Saudi Riyal" name="price" id="price" >
                                                    </div>
                                                    <span class="text-danger small">
                                                        @error('price')
                                                            {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>

                                            </div>



                                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                              <div class="form-group">
                                                  <div class="input-group input-group--style-1">
                                                      <input value="{{old('sellingPrice')}}" type="text" class="form-control" value="" placeholder="The selling price in the exhibition in Saudi Riyals" name="sellingPrice" id="sellingPrice" >
                                                  </div>
                                                  <span class="text-danger small">
                                                    @error('sellingPrice')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                              </div>

                                              <div class="form-group">
                                                  <div class="input-group input-group--style-1">
                                                      <input value="{{old('numberCopies')}}" type="text" class="form-control" value="" placeholder="Number of copies participating in the exhibition" name="numberCopies" id="numberCopies" >
                                                  </div>
                                                  <span class="text-danger small">
                                                    @error('numberCopies')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                              </div>

                                              <div class="form-group coverPhoto">
                                                <div class="label">Cover Photo</div>
                                                <div class="custom-file">
                                                  <input value="{{old('bookTitle')}}" type="file" class="custom-file-input" id="customFile" name="file">
                                                  <label class="custom-file-label" for="customFile">attachment</label>
                                                </div>
                                                <span class="text-danger small">
                                                    @error('file')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                              </div>

                                              <div class="form-group copyBook">
                                                <div class="label">Copy of the Book</div>
                                                <div class="custom-file">
                                                  <input value="{{old('bookTitle')}}" type="file" class="custom-file-input" id="customFile" name="copyOfBook">
                                                  <label class="custom-file-label" for="customFile">attachment</label>
                                                </div>
                                                <span class="text-danger small">
                                                    @error('copyOfBook')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                              </div>

                                              <div class="form-group">
                                                  <div class="input-group input-group--style-1">
                                                      <input value="{{old('publisherName')}}" type="text" class="form-control" value="" placeholder="Publisher Name" name="publisherName" id="publisherName" >
                                                  </div>
                                                  <span class="text-danger small">
                                                    @error('publisherName')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                              </div>

                                              <div class="form-group ">
                                                  <select class="form-select form-control" name="typeOfBook" >
                                                    <option value="">Type of Book</option>
                                                    <option value="1">Islam</option>
                                                    <option value="2">Religions</option>
                                                    <option value="3">Literature</option>
                                                    <option value="3">Administration and Finance o Sciences</option>
                                                    <option value="3">Medicine</option>
                                                    <option value="3">Engineering o History</option>
                                                    <option value="3">Politics</option>
                                                    <option value="3">Law</option>
                                                    <option value="3">Social Science</option>
                                                    <option value="3">Arts</option>
                                                    <option value="3">General Knowledge</option>
                                                    <option value="3">Children and Teenagers o Tourism and Travel</option>
                                                    <option value="3">Education</option>
                                                    <option value="3">Sports and Stars</option>
                                                    <option value="3">Entertainment</option>
                                                  </select>
                                                  <span class="text-danger small">
                                                    @error('typeOfBook')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                              </div>

                                              {{-- <div class="form-group ">
                                                  <button class="btn btn-styled btn-base-1 w-100 btn-md">Add Book</button>
                                              </div> --}}

                                            </div>
                                        </div>


                                        <div class="mb-3 terms">
                                          <div class="row">
                                            <div class="col-8">
                                              I agree to the Terms & Conditions
                                            </div>
                                            <div class="col-4 readmore">
                                              <a href="#">Read More</a>
                                            </div>
                                          </div>
                                        </div>


                                        <div class="row">

                                            <div class="col-6">
                                                 <button class="btn btn-styled btn-base-1 w-100 btn-md">Submit</button>
                                            </div>
                                            <div class="col-6">
                                                 <button type="submit" class="btn btn-styled btn-base-1 w-100 btn-md">Cancel</button>
                                            </div>

                                        </div>

                                    </form>
                            </div>

                        </div>

                        <div class="first-footer">
                            <div class="row">
                               <div class="col-md-3 col-xs-12 foo-text">
                                <p>King Faisal Road,<br>Al Bujairi, Diriyah 13711.</p>
                               </div>
                               <div class="col-md-3 col-xs-12 foo-text">
                                <p class="">info@moc.gov.sa<br>8001189999</p>
                               </div>
                               <div class="col-md-3 col-xs-12 foo-text">
                                <p class="social-title">Social Networks</p>
                                  <i class="fab fa-facebook-f social fa-2xi"></i>
                                  <i class="fab fa-linkedin-in social fa-2xi"></i>
                                  <i class="fab fa-snapchat-ghost social fa-2xi"></i>
                                  <i class="fab fa-youtube social fa-2xi"></i>
                                  <i class="fab fa-instagram social fa-2xi"></i>
                               </div>
                               <div class="col-md-3 col-xs-12 foo-text footer-logo">
                                <div class="footer-logos">
                                  <img class="foot-logo1" src="{{asset('images/logo-01.png')}}">
                                  <img class="foot-logo2" src="{{asset('images/logo-02.png')}}">
                                </div>
                               </div>
                              </div>
                        </div>
                        <div class="second-footer">
                          <p class="copy-text">Copyright 2021 Riyadh International Book Fair. <br/>All rights reserved</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>

    <!-- FOOTER -->


</div><!-- END: body-wrap -->

@endsection
