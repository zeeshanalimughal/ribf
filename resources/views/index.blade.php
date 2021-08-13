<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <title>RIBF</title>
    <meta name="description" content="RIBF">
    <meta name="keywords" content="bootstrap,responsive,template,developer">
    <meta name="author" content="Perpetual">

    <!-- Favicon -->
    <link type="image/x-icon"
        href="https://craziecoders.com/ribf/public/uploads/favicon/xEbLUPnNmHk6zx9B8yrSbmfn3xDktaxJ0Q806RcN.png"
        rel="shortcut icon">

    <!-- Fonts -->
    <link href="/css" rel="stylesheet" media="all">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="all">





    <!-- Icons -->
    <!--
<link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" media="all">
<link rel="stylesheet" href="/css/line-awesome.min.css" type="text/css" media="all">
<link type="text/css" href="/css/bootstrap-tagsinput.css" rel="stylesheet" media="all">
<link type="text/css" href="/css/jodit.min.css" rel="stylesheet" media="all" >
<link type="text/css" href="/css/sweetalert2.min.css" rel="stylesheet" media="all">
<link type="text/css" href="/css/slick.css" rel="stylesheet" media="all">
<link type="text/css" href="/css/xzoom.css" rel="stylesheet" media="all">
<link type="text/css" href="/css/jssocials.css" rel="stylesheet" media="all">
<link type="text/css" href="/css/jssocials-theme-flat.css" rel="stylesheet" media="all">
<link type="text/css" href="/css/intlTelInput.min.css" rel="stylesheet" media="all">
<link type="text/css" href="/css/spectrum.css" rel="stylesheet" media="all">
-->

    <!-- Global style (main) -->
    <link type="text/css" href="/css/active-shop.css" rel="stylesheet" media="all">


    <link type="text/css" href="/css/main.css" rel="stylesheet" media="all">


    <!-- color theme -->
    <link href="/css/7.css" rel="stylesheet" media="all">

    <!-- Custom style -->
    <link type="text/css" href="/css/custom-style.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="/jquery-ui/jquery-ui.theme.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap');

        body {
            font-family: 'Open Sans', sans-serif;
            font-weight: normal;
            font-style: normal;
        }

        .terms {
            font-size: 14px;
        }

    </style>

    <!-- jQuery -->
    <script src="/js/jquery.min.js"></script>
    <script src="/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
    </script>

</head>

<body>


    <!-- MAIN WRAPPER -->
    <div class="body-wrap shop-default shop-cards shop-tech gry-bg">

        <!-- Header -->


        <section class="auth-profile">
            <div class="profile-inner">
                <div class="row">
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 mx-auto">
                        <div class="form-wrapper">
                            <div class="main-top">


                                <!-- <a href="#" class="btn-action">Signup</a> -->

                                <a href="#"> <img src="/images/logo.svg" style="width:300px;" class="text-right"></a>
                            </div>
                            <div class="text-center mb-4">
                                <h3 class="heading heading-4 strong-500">Exhibitor Registration</h3>

                            </div>

                            <div class="mb-4">
                                <form class="form-default" role="form" action="#" method="POST"
                                    accept="{{ url('/') }}">
                                    @csrf
                                    {{-- <input type="hidden" name="_token" value="ziZ87jaEgJCCC6dhE31C14pskHzFfmCdglmsiOW9">

                                        <div class="form-group">

                                                    <input type="hidden" name="type" value="customer">

                                        </div> --}}

                                    <div class="form-group performer">
                                        <div class="input-group input-group--style-1">
                                            <input type="text" value="{{ old('bookTitle') }}" class="form-control"
                                                value="" placeholder="Book Title" name="bookTitle" id="bookTitle">

                                        </div>
                                        <span class="text-danger small">
                                            @error('bookTitle')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group performer" id="last_name_div">
                                        <div class="input-group input-group--style-1">
                                            <input type="text" value="{{ old('authorName') }}" class="form-control"
                                                value="" placeholder="Author Name" name="authorName" id="authorName">
                                        </div>
                                        <span class="text-danger small">
                                            @error('authorName')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group ">
                                        {{-- <input list="brow">
                                            <datalist class="form-select form-control" id="brow"  name="authorNationality">
                                              <option value="">Author Nationality</option>
                                              <option value="1">Option 1</option>
                                              <option value="2">Option 2</option>
                                              <option value="3">Option 3</option>
                                            </datalist> --}}
                                        <input list="brow" name="authorNationality" class="form-select form-control" placeholder="Author Nationality">
                                        <datalist id="brow" name="authorNationality">
                                            <option value="Afganistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaco">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="India">India</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Phillipines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </datalist>
                                        <span class="text-danger small">
                                            @error('authorNationality')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group ">
                                        <select class="form-select form-control" name="bookLanguage">
                                            <option value="">Book Language</option>
                                            <option value="English">English</option>
                                            <option value="Arabic">Arabic</option>
                                        </select>
                                        <span class="text-danger small">
                                            @error('bookLanguage')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group input-group--style-1">
                                            <input type="text" value="{{ old('bookDimension') }}" class="form-control"
                                                value="" placeholder="Book Dimension (eg. 100*150)" name="bookDimension"
                                                id="bookDimension">
                                        </div>
                                        <span class="text-danger small">
                                            @error('bookDimension')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group input-group--style-1">
                                            <input type="text" value="{{ old('price') }}" class="form-control" value=""
                                                placeholder="Price by Saudi Riyal" name="price" id="price">
                                        </div>
                                        <span class="text-danger small">
                                            @error('price')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group input-group--style-1">
                                            <input type="text" value="{{ old('sellingPrice') }}" class="form-control"
                                                value=""
                                                placeholder="The selling price in the exhibition in Saudi Riyals"
                                                name="sellingPrice" id="sellingPrice">
                                        </div>
                                        <span class="text-danger small">
                                            @error('sellingPrice')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group input-group--style-1">
                                            <input type="text" value="{{ old('numberCopies') }}" class="form-control"
                                                value="" placeholder="Number of copies participating in the exhibition"
                                                name="numberCopies" id="numberCopies">
                                        </div>
                                        <span class="text-danger small">
                                            @error('numberCopies')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group" id="issue_date">
                                        <div class="input-group input-group--style-1">
                                            <input type="text" value="{{ old('issueDate') }}" class="form-control"
                                                value="" placeholder="Issue Date" name="issueDate" id="datepicker">
                                        </div>
                                        <span class="text-danger small">
                                            @error('issueDate')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" name="coverPhoto" class="custom-file-input"
                                                id="customFile">
                                            <label class="custom-file-label" for="customFile">Cover Photo</label>
                                        </div>
                                        <span class="text-danger small">
                                            @error('coverPhoto')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="copyOfBook"
                                                id="customFile">
                                            <label class="custom-file-label" for="customFile">Copy of the Book</label>
                                        </div>
                                        <span class="text-danger small">
                                            @error('copyOfBook')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group input-group--style-1">
                                            <input type="text" value="{{ old('publisherName') }}" class="form-control"
                                                value="" placeholder="Publisher Name" name="publisherName"
                                                id="publisherName">
                                        </div>
                                        <span class="text-danger small">
                                            @error('publisherName')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group ">
                                        <select class="form-select form-control" name="typeOfBook">
                                            <option value="">Type of Book</option>
                                            <option vlaue="Islam">Islam</option>
                                            <option vlaue="Religions">Religions</option>
                                            <option vlaue="Literature">Literature</option>
                                            <option vlaue="Administration and Finance">Administration and Finance
                                            </option>
                                            <option vlaue="Sciences">Sciences</option>
                                            <option vlaue="Medicine">Medicine</option>
                                            <option vlaue="Engineering">Engineering</option>
                                            <option vlaue="History">History</option>
                                            <option vlaue="Politics">Politics</option>
                                            <option vlaue="Law">Law</option>
                                            <option vlaue="Social Science">Social Science</option>
                                            <option vlaue="Arts">Arts</option>
                                            <option vlaue="General Knowledge">General Knowledge</option>
                                            <option vlaue="Children and Teenagers">Children and Teenagers</option>
                                            <option vlaue="Tourism and Travel">Tourism and Travel</option>
                                            <option vlaue="Education">Education</option>
                                            <option vlaue="Sports and Stars">Sports and Stars</option>
                                            <option vlaue="Entertainment">Entertainment</option>
                                        </select>
                                        <span class="text-danger small">
                                            @error('typeOfBook')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group ">
                                        <button class="btn btn-styled btn-base-1 w-100 btn-md">Add Book</button>
                                    </div>

                                    <div class="mb-3 terms">
                                        I agree to the <a href="#">Terms & Conditions</a>
                                    </div>


                                    <div class="row">

                                        <div class="col-6">
                                            <button type="submit" name="cancel"
                                                class="btn btn-styled btn-base-1 w-100 btn-md">Submit</button>
                                        </div>
                                        <div class="col-6">
                                            <button type="reset"
                                                class="btn btn-styled btn-base-1 w-100 btn-md">Cancel</button>
                                        </div>

                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer id="footer" class="footer" style="display:none !important;">


            <div class="footer-bottom py-3 sct-color-3">
                <div class="container">
                    <div class="row row-cols-xs-spaced flex flex-items-xs-middle">
                        <div class="col-md-4">
                            <div class="copyright text-center text-md-left">

                            </div>

                        </div>
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">

                        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                    </div>

                    <div class="modal-body">
                        <p>Are you sure? (Note: All information relevant to this will be deleted too.)</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <a id="delete_link" class="btn btn-danger btn-ok">Delete</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="addToCart">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size"
                role="document">
                <div class="modal-content position-relative">
                    <div class="c-preloader">
                        <i class="fa fa-spin fa-spinner"></i>
                    </div>
                    <button type="button" class="close absolute-close-btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div id="addToCart-modal-body">

                    </div>
                </div>
            </div>
        </div>

    </div><!-- END: body-wrap -->

    <!-- SCRIPTS -->
    <!-- <a href="#" class="back-to-top btn-back-to-top"></a> -->

    <!-- Core -->
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/jquery-ui/jquery-ui.min.js"></script>

    <!-- Plugins: Sorted A-Z -->
    <script src="/js/jquery.countdown.min.js"></script>
    <script src="/js/select2.min.js"></script>
    <script src="/js/nouislider.min.js"></script>
    <script src="/js/sweetalert2.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/jssocials.min.js"></script>
    <script src="/js/bootstrap-tagsinput.min.js"></script>
    <script src="/js/jodit.min.js"></script>
    <script src="/js/xzoom.min.js"></script>
    <script src="/js/fb-script.js"></script>
    <script src="/js/lazysizes.min.js"></script>
    <script src="/js/intlTelInput.min.js"></script>

    <!-- App JS -->
    <script src="/js/active-shop.js"></script>
    <script src="/js/main.js"></script>

    <script>
        $(function() {
            $("#datepicker").datepicker();
        });
    </script>
</body>

</html>
