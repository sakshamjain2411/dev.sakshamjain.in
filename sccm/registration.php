<?php $page_title='register'; include_once "header.php"; include_once "send_mail.php";?> 
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $data['phone'] = $_POST['phone'];
        $data['delegates'] = $_POST['delegates'];
        $data['occupation'] = $_POST['occupation'];
        $data['country'] = $_POST['country'];
        $data['addres'] = $_POST['addres'];
        SendMail($data, "New Registration Form");
    }
?>
<section class="page-title">
    <div class="container-fluid">
        <h2 class="c-white">Registration Form</h2>
        <hr class="c-white">
    </div>
</section>
<section class="form">
    <div class="container-fluid d-flex justify-content-center">
        <form action="" name="form" id="form" method="post">
            <div class="form-group form-group-full">
                <h2>Registration Here</h2>
            </div>
            <div class="form-group">
                <input type="text" name="name"class="form-control" placeholder="Full Name"
                    required="">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control"
                    placeholder="Enter Email" required="">
            </div>
            <div class="form-group">
                <input type="number" name="phone" class="form-control"
                    placeholder="Contact Number" required="">
            </div>
            <div class="form-group">
                <select class="form-control" name="delegates" required="">
                    <option value="" selected="selected" disabled="">No.of Delegates</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="25+">25+</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" name="occupation" class="form-control"
                    placeholder="Occupation" required="">
            </div>
            <div class="form-group">
                <select class="form-control" name="country" required="">
                    <option value="" selected="selected" disabled="">Select Country</option>
                    <optgroup label="North America">
                        <option value="US">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="CA">Canada</option>
                        <option value="MX">Mexico</option>
                        <option value="AI">Anguilla</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AW">Aruba</option>
                        <option value="BS">Bahamas</option>
                        <option value="BB">Barbados</option>
                        <option value="BZ">Belize</option>
                        <option value="BM">Bermuda</option>
                        <option value="VG">British Virgin Islands</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CU">Cuba</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="SV">El Salvador</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GT">Guatemala</option>
                        <option value="HT">Haiti</option>
                        <option value="HN">Honduras</option>
                        <option value="JM">Jamaica</option>
                        <option value="MQ">Martinique</option>
                        <option value="MS">Montserrat</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NI">Nicaragua</option>
                        <option value="PA">Panama</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="VI">US Virgin Islands</option>
                    </optgroup>
                    <optgroup label="South America">
                        <option value="AR">Argentina</option>
                        <option value="BO">Bolivia</option>
                        <option value="BR">Brazil</option>
                        <option value="CL">Chile</option>
                        <option value="CO">Colombia</option>
                        <option value="EC">Ecuador</option>
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="GF">French Guiana</option>
                        <option value="GY">Guyana</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="SR">Suriname</option>
                        <option value="UY">Uruguay</option>
                        <option value="VE">Venezuela</option>
                    </optgroup>
                    <optgroup label="Europe">
                        <option value="GB">United Kingdom</option>
                        <option value="AL">Albania</option>
                        <option value="AD">Andorra</option>
                        <option value="AT">Austria</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BG">Bulgaria</option>
                        <option value="HR">Croatia (Hrvatska)</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="FR">France</option>
                        <option value="GI">Gibraltar</option>
                        <option value="DE">Germany</option>
                        <option value="GR">Greece</option>
                        <option value="VA">Holy See (Vatican City State)</option>
                        <option value="HU">Hungary</option>
                        <option value="IT">Italy</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MK">Macedonia</option>
                        <option value="MT">Malta</option>
                        <option value="MD">Moldova</option>
                        <option value="MC">Monaco</option>
                        <option value="ME">Montenegro</option>
                        <option value="NL">Netherlands</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="RO">Romania</option>
                        <option value="SM">San Marino</option>
                        <option value="RS">Serbia</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="ES">Spain</option>
                        <option value="UA">Ukraine</option>
                        <option value="DK">Denmark</option>
                        <option value="EE">Estonia</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FI">Finland</option>
                        <option value="GL">Greenland</option>
                        <option value="IS">Iceland</option>
                        <option value="IE">Ireland</option>
                        <option value="LV">Latvia</option>
                        <option value="LT">Lithuania</option>
                        <option value="NO">Norway</option>
                        <option value="SJ">Svalbard and Jan Mayen Islands</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="TR">Turkey</option>
                    </optgroup>
                    <optgroup label="Asia">
                        <option value="AF">Afghanistan</option>
                        <option value="AM">Armenia</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BT">Bhutan</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="KH">Cambodia</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="GE">Georgia</option>
                        <option value="HK">Hong Kong</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran</option>
                        <option value="IQ">Iraq</option>
                        <option value="IL">Israel</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KP">Korea, Democratic People's Republic of</option>
                        <option value="KR">Korea, Republic of</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Lao</option>
                        <option value="LB">Lebanon</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="MN">Mongolia</option>
                        <option value="MM">Myanmar (Burma)</option>
                        <option value="NP">Nepal</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PH">Philippines</option>
                        <option value="QA">Qatar</option>
                        <option value="RU">Russian Federation</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SG">Singapore</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SY">Syria</option>
                        <option value="TW">Taiwan</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TH">Thailand</option>
                        <option value="TP">East Timor</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VN">Vietnam</option>
                        <option value="YE">Yemen</option>
                    </optgroup>
                    <optgroup label="Australia / Oceania">
                        <option value="AS">American Samoa</option>
                        <option value="AU">Australia</option>
                        <option value="CK">Cook Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="PF">French Polynesia (Tahiti)</option>
                        <option value="GU">Guam</option>
                        <option value="KB">Kiribati</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="FM">Micronesia, Federated States of</option>
                        <option value="NR">Nauru</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NU">Niue</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="PW">Palau</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PN">Pitcairn</option>
                        <option value="WS">Samoa</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TV">Tuvalu</option>
                        <option value="VU">Vanuatu</option>
                        <option valud="WF">Wallis and Futuna Islands</option>
                    </optgroup>
                    <optgroup label="Africa">
                        <option value="DZ">Algeria</option>
                        <option value="AO">Angola</option>
                        <option value="BJ">Benin</option>
                        <option value="BW">Botswana</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="CM">Cameroon</option>
                        <option value="CV">Cape Verde</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, the Democratic Republic of the</option>
                        <option value="DJ">Dijibouti</option>
                        <option value="EG">Egypt</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="ET">Ethiopia</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GH">Ghana</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="CI">Cote d'Ivoire (Ivory Coast)</option>
                        <option value="KE">Kenya</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="ML">Mali</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="NA">Namibia</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="RE">Reunion</option>
                        <option value="RW">Rwanda</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SH">Saint Helena</option>
                        <option value="SN">Senegal</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="SS">South Sudan</option>
                        <option value="SD">Sudan</option>
                        <option value="SZ">Swaziland</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TG">Togo</option>
                        <option value="TN">Tunisia</option>
                        <option value="UG">Uganda</option>
                        <option value="EH">Western Sahara</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </optgroup>
                    <option value="AQ">Antarctica</option>
                </select>
            </div>
            <div class="form-group form-group-full">
                <textarea class="form-control" name="addres" rows="4" placeholder="Address" required=""></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="booking" id="booking" value="Submit">
            </div>
        </form>
    </div>
</section>
<?php include_once "footer.php";?>