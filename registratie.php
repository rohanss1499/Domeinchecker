<?php
/**
 * Created by PhpStorm.
 * User: Rohan
 * Date: 12-4-2018
 * Time: 09:38
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Compleet IT</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
		<!--Favicon-->
		<link href="https://compleet.it/favicon.ico" rel="icon" type="image/x-icon"/>
		<!--CSS-->
		<link rel="stylesheet" href="css/stylesheet.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!--JS-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	</head>
	<body>
		<div id="headerBackground">
			<div onclick="parent.location.href='http://www.compleet.it/'" id="logo1"></div><div onclick="parent.location.href='http://www.compleet.it/'" id="logo2"></div><div onclick="parent.location.href='http://www.compleet.it/'" id="logo3"></div>
			<div onclick="parent.location.href='http://www.compleet.it/'" id="titel">Compleet IT</div>
		</div>
		<div id="support">
            <div class="new-cart-container__cart-row">
                <div class="form-alert-container text-extra-small"></div>
                <div class="text-with-divider">Factuurgegevens</div>
                <input type="hidden" name="hash" value="6e0525b4ae97c5643335cecb46c7fc8011eb6857">
                <div class="row row--xs">
                    <div class="col-sm-12 col--xs">
                        <div class="form-group form-group-md js-input-loader">
                            <label class="text-tiny" for="inputCompany">Bedrijfsnaam <small> ( optioneel )</small></label>
                            <input type="text" name="mainContactName" class="form-control input-md input-md--tip js-company-name delayed-module js-business-autocomplete" id="inputCompany" placeholder="bijv. De Vries B.V." autocomplete="off" data-remember-me="yes" value="" role="combobox" aria-autocomplete="list">
                            <div class="js-autocomplete-container autocomplete-container"></div>
                        </div>
                    </div>
                </div>
                <div class="row row--xs">
                    <div class="col-sm-6 col--xs">
                        <div class="form-group form-group-md">
                            <label class="text-tiny" for="inputFirstName">Voornaam</label>
                            <input type="text" name="mainContactInitials" class="form-control input-md input-md--tip js-first-name" id="inputFirstName" value="" placeholder="bijv. Jan" data-remember-me="yes">
                        </div>
                    </div>
                    <div class="col-sm-6 col--xs">
                        <div class="form-group form-group-md">
                            <label class="text-tiny" for="inputLastName">Achternaam</label>
                            <input type="text" name="mainContactLastName" class="form-control input-md input-md--tip js-last-name" id="inputLastName" value="" placeholder="bijv. de Vries" data-remember-me="yes">
                        </div>
                    </div>
                </div>
                <div class="row row--xs">
                    <div class="col-sm-6 col--xs">
                        <div class="form-group form-group-md">
                            <label class="text-tiny" for="inputPostalCode">Postcode</label>
                            <input type="text" name="mainContactAddressPostcode" data-supportedlang="[&quot;nl&quot;,&quot;gb&quot;]" class="form-control input-md input-md--tip postcode" id="inputPostalCode" value="" placeholder="bijv. 1234 AB" data-remember-me="yes">
                        </div>
                    </div>
                    <div class="col-sm-6 col--xs">
                        <div class="form-group form-group-md">
                            <label class="text-tiny" for="inputHouseNumber">Huisnr. + toev.</label>
                            <input type="text" name="mainContactAddressNumber" class="form-control input-md input-md--tip address-number" id="inputHouseNumber" value="" placeholder="bijv. 42B" data-remember-me="yes">
                        </div>
                    </div>
                </div>
                <div class="row row--xs postal-code-message-row hidden">
                    <div class="col-xs-12 col--xs">
                        <div class="form-group form-group-md">
                            <div class="text-extra-small postal-code-message" data-default-message="Deze postcode is ongeldig, controleer of alle gegevens kloppen."></div>
                        </div>
                    </div>
                </div>
                <div class="row row--xs street-row place-row hidden">
                    <div class="col-sm-6 col--xs">
                        <div class="form-group form-group-md">
                            <label class="text-tiny" for="inputAddressStreet">Straat</label>
                            <input type="text" class="form-control input-md input-md--tip street" name="mainContactAddressStreet" id="inputAddressStreet" value="" data-remember-me="yes" placeholder="bijv. Molenstraat">
                        </div>
                    </div>
                    <div class="col-sm-6 col--xs">
                        <div class="form-group form-group-md">
                            <label class="text-tiny" for="inputAddressCity">Plaatsnaam</label>
                            <input type="text" class="form-control input-md input-md--tip city" name="mainContactAddressCity" id="inputAddressCity" value="" data-remember-me="yes" placeholder="bijv. Amsterdam">
                        </div>
                    </div>
                </div>
                <div class="row row--xs">
                    <div class="col-sm-6 col--xs">
                        <div class="form-group form-group-md">
                            <label class="text-tiny" for="inputCountry">Land</label>
                            <select class="form-control input-md input-md--tip country" name="mainContactCountryCode" id="inputCountry" data-remember-me="yes">
                                <option value="af">Afghanistan</option>
                                <option value="al">Albanië</option>
                                <option value="dz">Algerije</option>
                                <option value="as">Amerikaans Samoa</option>
                                <option value="vi">Amerikaanse Maagdeneilanden</option>
                                <option value="ad">Andorra</option>
                                <option value="ao">Angola</option>
                                <option value="ai">Anguilla</option>
                                <option value="aq">Antarctica</option>
                                <option value="ag">Antigua en Barbuda</option>
                                <option value="ar">Argentinië</option>
                                <option value="am">Armenië</option>
                                <option value="aw">Aruba</option>
                                <option value="ac">Ascension</option>
                                <option value="au">Australië</option>
                                <option value="az">Azerbeidzjan</option>
                                <option value="bs">Bahama’s</option>
                                <option value="bh">Bahrein</option>
                                <option value="bd">Bangladesh</option>
                                <option value="bb">Barbados</option>
                                <option value="be">België</option>
                                <option value="bz">Belize</option>
                                <option value="bj">Benin</option>
                                <option value="bm">Bermuda</option>
                                <option value="bt">Bhutan</option>
                                <option value="bo">Bolivia</option>
                                <option value="ba">Bosnië en Herzegovina</option>
                                <option value="bw">Botswana</option>
                                <option value="bv">Bouveteiland</option>
                                <option value="br">Brazilië</option>
                                <option value="io">Britse Gebieden in de Indische Oceaan</option>
                                <option value="vg">Britse Maagdeneilanden</option>
                                <option value="bn">Brunei</option>
                                <option value="bg">Bulgarije</option>
                                <option value="bf">Burkina Faso</option>
                                <option value="bi">Burundi</option>
                                <option value="kh">Cambodja</option>
                                <option value="ca">Canada</option>
                                <option value="ic">Canarische Eilanden</option>
                                <option value="bq">Caribisch Nederland</option>
                                <option value="ky">Caymaneilanden</option>
                                <option value="cf">Centraal-Afrikaanse Republiek</option>
                                <option value="ea">Ceuta en Melilla</option>
                                <option value="cl">Chili</option>
                                <option value="cn">China</option>
                                <option value="cx">Christmaseiland</option>
                                <option value="cp">Clipperton</option>
                                <option value="cc">Cocoseilanden</option>
                                <option value="co">Colombia</option>
                                <option value="km">Comoren</option>
                                <option value="cg">Congo-Brazzaville</option>
                                <option value="cd">Congo-Kinshasa</option>
                                <option value="ck">Cookeilanden</option>
                                <option value="cr">Costa Rica</option>
                                <option value="cu">Cuba</option>
                                <option value="cw">Curaçao</option>
                                <option value="cy">Cyprus</option>
                                <option value="dk">Denemarken</option>
                                <option value="dg">Diego Garcia</option>
                                <option value="dj">Djibouti</option>
                                <option value="dm">Dominica</option>
                                <option value="do">Dominicaanse Republiek</option>
                                <option value="de">Duitsland</option>
                                <option value="ec">Ecuador</option>
                                <option value="eg">Egypte</option>
                                <option value="sv">El Salvador</option>
                                <option value="gq">Equatoriaal-Guinea</option>
                                <option value="er">Eritrea</option>
                                <option value="ee">Estland</option>
                                <option value="et">Ethiopië</option>
                                <option value="fo">Faeröer</option>
                                <option value="fk">Falklandeilanden</option>
                                <option value="fj">Fiji</option>
                                <option value="ph">Filipijnen</option>
                                <option value="fi">Finland</option>
                                <option value="fr">Frankrijk</option>
                                <option value="gf">Frans-Guyana</option>
                                <option value="pf">Frans-Polynesië</option>
                                <option value="tf">Franse Gebieden in de zuidelijke Indische Oceaan</option>
                                <option value="ga">Gabon</option>
                                <option value="gm">Gambia</option>
                                <option value="ge">Georgië</option>
                                <option value="gh">Ghana</option>
                                <option value="gi">Gibraltar</option>
                                <option value="gd">Grenada</option>
                                <option value="gr">Griekenland</option>
                                <option value="gl">Groenland</option>
                                <option value="gp">Guadeloupe</option>
                                <option value="gu">Guam</option>
                                <option value="gt">Guatemala</option>
                                <option value="gg">Guernsey</option>
                                <option value="gn">Guinee</option>
                                <option value="gw">Guinee-Bissau</option>
                                <option value="gy">Guyana</option>
                                <option value="ht">Haïti</option>
                                <option value="hm">Heard- en McDonaldeilanden</option>
                                <option value="hn">Honduras</option>
                                <option value="hu">Hongarije</option>
                                <option value="hk">Hongkong SAR van China</option>
                                <option value="is">IJsland</option>
                                <option value="ie">Ierland</option>
                                <option value="in">India</option>
                                <option value="id">Indonesië</option>
                                <option value="iq">Irak</option>
                                <option value="ir">Iran</option>
                                <option value="im">Isle of Man</option>
                                <option value="il">Israël</option>
                                <option value="it">Italië</option>
                                <option value="ci">Ivoorkust</option>
                                <option value="jm">Jamaica</option>
                                <option value="jp">Japan</option>
                                <option value="ye">Jemen</option>
                                <option value="je">Jersey</option>
                                <option value="jo">Jordanië</option>
                                <option value="cv">Kaapverdië</option>
                                <option value="cm">Kameroen</option>
                                <option value="kz">Kazachstan</option>
                                <option value="ke">Kenia</option>
                                <option value="kg">Kirgizië</option>
                                <option value="ki">Kiribati</option>
                                <option value="um">Kleine afgelegen eilanden van de Verenigde Staten</option>
                                <option value="kw">Koeweit</option>
                                <option value="xk">Kosovo</option>
                                <option value="hr">Kroatië</option>
                                <option value="la">Laos</option>
                                <option value="ls">Lesotho</option>
                                <option value="lv">Letland</option>
                                <option value="lb">Libanon</option>
                                <option value="lr">Liberia</option>
                                <option value="ly">Libië</option>
                                <option value="li">Liechtenstein</option>
                                <option value="lt">Litouwen</option>
                                <option value="lu">Luxemburg</option>
                                <option value="mo">Macao SAR van China</option>
                                <option value="mk">Macedonië</option>
                                <option value="mg">Madagaskar</option>
                                <option value="mw">Malawi</option>
                                <option value="mv">Maldiven</option>
                                <option value="my">Maleisië</option>
                                <option value="ml">Mali</option>
                                <option value="mt">Malta</option>
                                <option value="ma">Marokko</option>
                                <option value="mh">Marshalleilanden</option>
                                <option value="mq">Martinique</option>
                                <option value="mr">Mauritanië</option>
                                <option value="mu">Mauritius</option>
                                <option value="yt">Mayotte</option>
                                <option value="mx">Mexico</option>
                                <option value="fm">Micronesië</option>
                                <option value="md">Moldavië</option>
                                <option value="mc">Monaco</option>
                                <option value="mn">Mongolië</option>
                                <option value="me">Montenegro</option>
                                <option value="ms">Montserrat</option>
                                <option value="mz">Mozambique</option>
                                <option value="mm">Myanmar (Birma)</option>
                                <option value="na">Namibië</option>
                                <option value="nr">Nauru</option>
                                <option value="nl" selected="selected">Nederland</option>
                                <option value="np">Nepal</option>
                                <option value="ni">Nicaragua</option>
                                <option value="nc">Nieuw-Caledonië</option>
                                <option value="nz">Nieuw-Zeeland</option>
                                <option value="ne">Niger</option>
                                <option value="ng">Nigeria</option>
                                <option value="nu">Niue</option>
                                <option value="kp">Noord-Korea</option>
                                <option value="mp">Noordelijke Marianeneilanden</option>
                                <option value="no">Noorwegen</option>
                                <option value="nf">Norfolkeiland</option>
                                <option value="ug">Oeganda</option>
                                <option value="ua">Oekraïne</option>
                                <option value="uz">Oezbekistan</option>
                                <option value="om">Oman</option>
                                <option value="tl">Oost-Timor</option>
                                <option value="at">Oostenrijk</option>
                                <option value="pk">Pakistan</option>
                                <option value="pw">Palau</option>
                                <option value="ps">Palestijnse gebieden</option>
                                <option value="pa">Panama</option>
                                <option value="pg">Papoea-Nieuw-Guinea</option>
                                <option value="py">Paraguay</option>
                                <option value="pe">Peru</option>
                                <option value="pn">Pitcairneilanden</option>
                                <option value="pl">Polen</option>
                                <option value="pt">Portugal</option>
                                <option value="pr">Puerto Rico</option>
                                <option value="qa">Qatar</option>
                                <option value="ro">Roemenië</option>
                                <option value="ru">Rusland</option>
                                <option value="rw">Rwanda</option>
                                <option value="re">Réunion</option>
                                <option value="bl">Saint Barthélemy</option>
                                <option value="kn">Saint Kitts en Nevis</option>
                                <option value="lc">Saint Lucia</option>
                                <option value="vc">Saint Vincent en de Grenadines</option>
                                <option value="mf">Saint-Martin</option>
                                <option value="pm">Saint-Pierre en Miquelon</option>
                                <option value="sb">Salomonseilanden</option>
                                <option value="ws">Samoa</option>
                                <option value="sm">San Marino</option>
                                <option value="st">Sao Tomé en Principe</option>
                                <option value="sa">Saoedi-Arabië</option>
                                <option value="sn">Senegal</option>
                                <option value="rs">Servië</option>
                                <option value="sc">Seychellen</option>
                                <option value="sl">Sierra Leone</option>
                                <option value="sg">Singapore</option>
                                <option value="sh">Sint-Helena</option>
                                <option value="sx">Sint-Maarten</option>
                                <option value="si">Slovenië</option>
                                <option value="sk">Slowakije</option>
                                <option value="sd">Soedan</option>
                                <option value="so">Somalië</option>
                                <option value="es">Spanje</option>
                                <option value="sj">Spitsbergen en Jan Mayen</option>
                                <option value="lk">Sri Lanka</option>
                                <option value="sr">Suriname</option>
                                <option value="sz">Swaziland</option>
                                <option value="sy">Syrië</option>
                                <option value="tj">Tadzjikistan</option>
                                <option value="tw">Taiwan</option>
                                <option value="tz">Tanzania</option>
                                <option value="th">Thailand</option>
                                <option value="tg">Togo</option>
                                <option value="tk">Tokelau</option>
                                <option value="to">Tonga</option>
                                <option value="tt">Trinidad en Tobago</option>
                                <option value="ta">Tristan da Cunha</option>
                                <option value="td">Tsjaad</option>
                                <option value="cz">Tsjechië</option>
                                <option value="tn">Tunesië</option>
                                <option value="tr">Turkije</option>
                                <option value="tm">Turkmenistan</option>
                                <option value="tc">Turks- en Caicoseilanden</option>
                                <option value="tv">Tuvalu</option>
                                <option value="uy">Uruguay</option>
                                <option value="vu">Vanuatu</option>
                                <option value="va">Vaticaanstad</option>
                                <option value="ve">Venezuela</option>
                                <option value="gb">Verenigd Koninkrijk</option>
                                <option value="ae">Verenigde Arabische Emiraten</option>
                                <option value="us">Verenigde Staten</option>
                                <option value="vn">Vietnam</option>
                                <option value="wf">Wallis en Futuna</option>
                                <option value="eh">Westelijke Sahara</option>
                                <option value="by">Wit-Rusland</option>
                                <option value="zm">Zambia</option>
                                <option value="zw">Zimbabwe</option>
                                <option value="za">Zuid-Afrika</option>
                                <option value="gs">Zuid-Georgia en Zuidelijke Sandwicheilanden</option>
                                <option value="kr">Zuid-Korea</option>
                                <option value="ss">Zuid-Soedan</option>
                                <option value="se">Zweden</option>
                                <option value="ch">Zwitserland</option>
                                <option value="ax">Åland</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col--xs">
                        <div class="form-group form-group-md">
                            <label class="text-tiny" for="inputPhoneNumber">Telefoonnummer</label>
                            <input type="text" name="mainContactPhone" class="form-control input-md input-md--tip" id="inputPhoneNumber" value="" placeholder="bijv. 0612345678" data-remember-me="yes">
                        </div>
                    </div>
                </div>
                <div class="js-payment-method-list">
                    <div class="container">
                    <div class="text-with-divider">Betaalgegevens</div>
                    <hr class="betaaldivider">
                    <div class="js-payment-method-choose-container hidden">
                        <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group form-group-md"><label class="text-tiny" for="inputBankAccount">Bankrekeningnummer</label><input class="form-control input-md input-md--tip js-account-number" type="text" name="incasso_bankaccount" id="inputBankAccount" value="" placeholder="bijv. NL12BUNQ0300065264"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group form-group-md"><label class="text-tiny" for="inputAccountHolder">Rekeninghouder</label><input type="text" name="incasso_bankholder" class="form-control input-md input-md--tip js-account-holder" id="inputAccountHolder" placeholder="bijv. De Vries B.V." value=""></div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="info">
            <div id="container">
                <a id="adres" href="http://www.compleetit.nl" target="_parent">Voorstraat 55A ,  Voorschoten</a>
                <a id="phone" href="tel:0717107402">071 -&shy; 710 74 02</a>
                <a id="email" href="http://www.compleetit.nl" target="_parent">info@compleetit.nl</a>
            </div>
        </div>
    </body>
</html>