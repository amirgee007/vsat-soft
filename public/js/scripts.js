﻿/// <reference path="cities.js" />


function initializeJS() {

    //tool tips
    jQuery('.tooltips').tooltip();

    //popovers
    jQuery('.popovers').popover();

    //custom scrollbar
    //for html
    jQuery("html").niceScroll({styler:"fb",cursorcolor:"#007AFF", cursorwidth: '6', cursorborderradius: '10px', background: '#F7F7F7', cursorborder: '', zindex: '1000'});
    //for sidebar
    jQuery("#sidebar").niceScroll({styler:"fb",cursorcolor:"#007AFF", cursorwidth: '3', cursorborderradius: '10px', background: '#F7F7F7', cursorborder: ''});
    // for scroll panel
    jQuery(".scroll-panel").niceScroll({styler:"fb",cursorcolor:"#007AFF", cursorwidth: '3', cursorborderradius: '10px', background: '#F7F7F7', cursorborder: ''});
    
    //sidebar dropdown menu
    jQuery('#sidebar .sub-menu > a').click(function () {
        var last = jQuery('.sub-menu.open', jQuery('#sidebar'));        
        jQuery('.menu-arrow').removeClass('arrow_carrot-right');
        jQuery('.sub', last).slideUp(200);
        var sub = jQuery(this).next();
        if (sub.is(":visible")) {
            jQuery('.menu-arrow').addClass('arrow_carrot-right');            
            sub.slideUp(200);
        } else {
            jQuery('.menu-arrow').addClass('arrow_carrot-down');            
            sub.slideDown(200);
        }
        var o = (jQuery(this).offset());
        diff = 200 - o.top;
        if(diff>0)
            jQuery("#sidebar").scrollTo("-="+Math.abs(diff),500);
        else
            jQuery("#sidebar").scrollTo("+="+Math.abs(diff),500);
    });

    // sidebar menu toggle
    jQuery(function() {
        function responsiveView() {
            var wSize = jQuery(window).width();
            if (wSize <= 768) {
                jQuery('#container').addClass('sidebar-close');
                jQuery('#sidebar > ul').hide();
            }

            if (wSize > 768) {
                jQuery('#container').removeClass('sidebar-close');
                jQuery('#sidebar > ul').show();
            }
        }
        jQuery(window).on('load', responsiveView);
        jQuery(window).on('resize', responsiveView);
    });

    jQuery('.toggle-nav').click(function () {
        if (jQuery('#sidebar > ul').is(":visible") === true) {
            jQuery('#main-content').css({
                'margin-left': '0px'
            });
            jQuery('#sidebar').css({
                'margin-left': '-180px'
            });
            jQuery('#sidebar > ul').hide();
            jQuery("#container").addClass("sidebar-closed");
        } else {
            jQuery('#main-content').css({
                'margin-left': '180px'
            });
            jQuery('#sidebar > ul').show();
            jQuery('#sidebar').css({
                'margin-left': '0'
            });
            jQuery("#container").removeClass("sidebar-closed");
        }
    });

    //bar chart
    if (jQuery(".custom-custom-bar-chart")) {
        jQuery(".bar").each(function () {
            var i = jQuery(this).find(".value").html();
            jQuery(this).find(".value").html("");
            jQuery(this).find(".value").animate({
                height: i
            }, 2000)
        })
    }

}

jQuery(document).ready(function(){
    initializeJS();

    ////////////Delete Alert//////////////////////
    $("[name='close']").on('click', function (e) {
        e.preventDefault();
        confirm("Selected record will be deleted permanently.\nAre you sure you want to continue?");
    });

});

//add user

$('.adduser').click(function (e) { e.preventDefault() });

$('.adduser').on('click', function () {
    var user = $('<label class="col-lg-2 col-xs-3 control-label" style="clear:both;">Add User</label><div class="col-lg-8 col-xs-7"><select class="form-control m-bot15"><option>Mahmood</option><option>Mohammad</option></select></div><span class="col-sm-2 col-xs-2"><a class="btn btn-danger removeuser" href="#"><i class="fa fa-minus-square"></i></a></span>');
    $(this).closest('section').find('.panel-body').append(user);

    $('.removeuser').click(function (e) { e.preventDefault() });
    $('.removeuser').on('click', function () {
        $(this).closest('.panel-body').find('.col-lg-8').last().remove();
        $(this).closest('.panel-body').find('.col-lg-2').last().remove();
        $(this).closest('.panel-body').find('.col-sm-2').last().remove();
    });

});

//add Staff
$('.addstaff').click(function (e) { e.preventDefault() });

$('.addstaff').on('click', function () {
    var user = $('<label class="col-lg-2 col-xs-3 control-label" style="clear:both;">Add Support Staff</label><div class="col-lg-8 col-xs-7"><select class="form-control m-bot15"><option>Mahmood</option><option>Mohammad</option></select></div><span class="col-sm-2 col-xs-2"><a class="btn btn-danger removestaff" href="#"><i class="fa fa-minus-square"></i></a></span>');
    $(this).closest('section').find('.panel-body').append(user);

    $('.removestaff').click(function (e) { e.preventDefault() });
    $('.removestaff').on('click', function () {
        $(this).closest('.panel-body').find('.col-lg-8').last().remove();
        $(this).closest('.panel-body').find('.col-lg-2').last().remove();
        $(this).closest('.panel-body').find('.col-sm-2').last().remove();
    });

});

//add Assets & Branches



    $('.addasset').click(function (e) { e.preventDefault() });
    $('.addbranch').click(function (e) { e.preventDefault() });


    $('.addasset').on('click', function () {
        var asset = $('<label class="col-lg-2 control-label labelrem" style="clear:both;">Add a Part</label><div class="col-sm-4 divselect"><select class="form-control m-bot15"><option>Antennas</option><option>BUC</option><option>LNB</option><option>Modem</option><option>Antenna Mounts</option><option>Router</option><option>Router</option><option>Switch</option><option>Servers</option><option>Hotspot</option><option>Wireless Controller</option><option>WAPs</option><option>VoIP Phones</option><option>Thin Clients</option><option>Webcam</option><option>UPS</option><option>Rack</option><option>Headset</option><option>Cisco</option></select></div><div class="col-sm-4 divbutton"><label class="col-sm-2 control-label">QTY</label><span class="col-sm-8"><input type="number" class="form-control"></span><a class="btn btn-danger removeasset" href="#"><i class="fa fa-minus-square"></i></a></div>');
        $(this).closest('section').find('.panel-body').append(asset);

        $('.removeasset').click(function (e) { e.preventDefault() });

        $('.removeasset').on('click', function () {

            $(this).closest('.panel-body').find('.labelrem').last().remove();
            $(this).closest('.panel-body').find('.divselect').last().remove();
            $(this).closest('.panel-body').find('.divbutton').last().remove();


        });
    });

    $('.addbranch').on('click', function () {
        var branch = $('<label class="col-lg-2 control-label" style="clear:both;">Add Branch</label><div class="col-lg-8"><select class="form-control m-bot15"><option>ICS UAE</option><option>ICS Jordan</option></select></div><span class="col-sm-2"><a class="btn btn-danger removebranch" href="#"><i class="fa fa-minus-square"></i></a></span>');
        $(this).closest('section').find('.panel-body').append(branch);

        $('.removebranch').click(function (e) { e.preventDefault() });
        $('.removebranch').on('click', function () {
            $(this).closest('.panel-body').find('.col-lg-8').last().remove();
            $(this).closest('.panel-body').find('.col-lg-2').last().remove();
            $(this).closest('.panel-body').find('.col-sm-2').last().remove();
        });
    });





// languages , nationalities , Countries , and Cities

var lang = $('<option>Abkhaz</option>	<option>Afar</option>	<option>Afrikaans</option>	<option>Akan</option>	<option>Albanian</option>	<option>Amharic</option>	<option>Arabic</option>	<option>Aragonese</option>	<option>Armenian</option>	<option>Assamese</option>	<option>Avaric</option>	<option>Avestan</option>	<option>Aymara</option>	<option>Azerbaijani</option>	<option>Bambara</option>	<option>Bashkir</option>	<option>Basque</option>	<option>Belarusian</option>	<option>Bengali</option>	<option>Bihari</option>	<option>Bislama</option>	<option>Bosnian</option>	<option>Breton</option>	<option>Bulgarian</option>	<option>Burmese</option>	<option>Catalan</option>	<option>Chamorro</option>	<option>Chechen</option>	<option>Chichewa</option>	<option>Chinese</option>	<option>Chuvash</option>	<option>Cornish</option>	<option>Corsican</option>	<option>Cree</option>	<option>Croatian</option>	<option>Czech</option>	<option>Danish</option>	<option>Divehi</option>	<option>Dutch</option>	<option>Dzongkha</option>	<option>English</option>	<option>Esperanto</option>	<option>Estonian</option>	<option>Ewe</option>	<option>Faroese</option>	<option>Fijian</option>	<option>Finnish</option>	<option>French</option>	<option>Fula</option>	<option>Galician</option>	<option>Ganda</option>	<option>Georgian</option>	<option>German</option>	<option>Greek</option>	<option>Guaraní</option>	<option>Gujarati</option>	<option>Haitian</option>	<option>Hausa</option>	<option>Hebrew</option>	<option>Herero</option>	<option>Hindi</option>	<option>Hiri Motu</option>	<option>Hungarian</option>	<option>Icelandic</option>	<option>Ido</option>	<option>Igbo</option>	<option>Indonesian</option>	<option>Interlingua</option>	<option>Interlingue</option>	<option>Inuktitut</option>	<option>Inupiaq</option>	<option>Irish</option>	<option>Italian</option>	<option>Japanese</option>	<option>Javanese</option>	<option>Kalaallisut</option>	<option>Kannada</option>	<option>Kanuri</option>	<option>Kashmiri</option>	<option>Kazakh</option>	<option>Khmer</option>	<option>Kikuyu</option>	<option>Kinyarwanda</option>	<option>Kirundi</option>	<option>Komi</option>	<option>Kongo</option>	<option>Korean</option>	<option>Kurdish</option>	<option>Kwanyama</option>	<option>Kyrgyz</option>	<option>Lao</option>	<option>Latin</option>	<option>Latvian</option>	<option>Limburgish</option>	<option>Lingala</option>	<option>Lithuanian</option>	<option>Luba-Katanga</option>	<option>Luxembourgish</option>	<option>Macedonian</option>	<option>Malagasy</option>	<option>Malay</option>	<option>Malayalam</option>	<option>Maltese</option>	<option>Manx</option>	<option>Māori</option>	<option>Marathi</option>	<option>Marshallese</option>	<option>Mongolian</option>	<option>Nauru</option>	<option>Navajo</option>	<option>Ndonga</option>	<option>Nepali</option>	<option>North Ndebele</option>	<option>Northern Sami</option>	<option>Norwegian</option>	<option>Norwegian Bokmål</option>	<option>Norwegian Nynorsk</option>	<option>Nuosu</option>	<option>Occitan</option>	<option>Ojibwe</option>	<option>Old Church Slavonic</option>	<option>Oriya</option>	<option>Oromo</option>	<option>Ossetian</option>	<option>Pāli</option>	<option>Panjabi</option>	<option>Pashto</option>	<option>Persian</option>	<option>Polish</option>	<option>Portuguese</option>	<option>Quechua</option>	<option>Romanian</option>	<option>Romansh</option>	<option>Russian</option>	<option>Samoan</option>	<option>Sango</option>	<option>Sanskrit</option>	<option>Sardinian</option>	<option>Scottish Gaelic</option>	<option>Serbian</option>	<option>Shona</option>	<option>Sindhi</option>	<option>Sinhala</option>	<option>Slovak</option>	<option>Slovene</option>	<option>Somali</option>	<option>South Azerbaijani</option>	<option>South Ndebele</option>	<option>Southern Sotho</option>	<option>Spanish</option>	<option>Sundanese</option>	<option>Swahili</option>	<option>Swati</option>	<option>Swedish</option>	<option>Tagalog</option>	<option>Tahitian</option>	<option>Tajik</option>	<option>Tamil</option>	<option>Tatar</option>	<option>Telugu</option>	<option>Thai</option>	<option>Tibetan Standard</option>	<option>Tigrinya</option>	<option>Tonga</option>	<option>Tsonga</option>	<option>Tswana</option>	<option>Turkish</option>	<option>Turkmen</option>	<option>Twi</option>	<option>Ukrainian</option>	<option>Urdu</option>	<option>Uyghur</option>	<option>Uzbek</option>	<option>Venda</option>	<option>Vietnamese</option>	<option>Volapük</option>	<option>Walloon</option>	<option>Welsh</option>	<option>Western Frisian</option>	<option>Wolof</option>	<option>Xhosa</option>	<option>Yiddish</option>	<option>Yoruba</option>	<option>Zhuang</option>	<option>Zulu</option>');
$('.lang').append(lang);
    
var nat = $('<option>Afghan</option> <option>Åland Island</option> <option>Albanian</option> <option>Algerian</option> <option>American Samoan</option> <option>Andorran</option> <option>Angolan</option> <option>Anguillan</option> <option>Antarctic</option> <option>Antiguan</option> <option>Argentine</option> <option>Armenian</option> <option>Aruban</option> <option>Australian</option> <option>Austrian</option> <option>Azerbaijani</option> <option>Bahamian</option> <option>Bahraini</option> <option>Bangladeshi</option> <option>Barbadian</option> <option>Belarusian</option> <option>Belgian</option> <option>Belizean</option> <option>Beninese</option> <option>Bermudian</option> <option>Bhutanese</option> <option>Bolivian</option> <option>Bonaire</option> <option>Bosnian</option> <option>Motswana</option> <option>Bouvet Island</option> <option>Brazilian</option> <option>BIOT</option> <option>Bruneian</option> <option>Bulgarian</option> <option>Burkinabé</option> <option>Burundian</option> <option>Cabo Verdean</option> <option>Cambodian</option> <option>Cameroonian</option> <option>Canadian</option> <option>Caymanian</option> <option>Central African</option> <option>Chadian</option> <option>Chilean</option> <option>Chinese</option> <option>Christmas Island</option> <option>Cocos Island</option> <option>Colombian</option> <option>Comoran</option> <option>Congolese</option> <option>Cook Island</option> <option>Costa Rican</option> <option>Ivorian</option> <option>Croatian</option> <option>Cuban</option> <option>Curaçaoan</option> <option>Cypriot</option> <option>Czech</option> <option>Danish</option> <option>Djiboutian</option> <option>Dominican</option> <option>Ecuadorian</option> <option>Egyptian</option> <option>Salvadoran</option> <option>Equatorial Guinean</option> <option>Eritrean</option> <option>Estonian</option> <option>Ethiopian</option> <option>Falkland Island</option> <option>Faroese</option> <option>Fijian</option> <option>Finnish</option> <option>French</option> <option>French Guianese</option> <option>French Polynesian</option> <option>French Southern Territories</option> <option>Gabonese</option> <option>Gambian</option> <option>Georgian</option> <option>German</option> <option>Ghanaian</option> <option>Gibraltar</option> <option>Greek</option> <option>Greenlandic</option> <option>Grenadian</option> <option>Guadeloupe</option> <option>Guamanian</option> <option>Guatemalan</option> <option>Channel Island</option> <option>Guinean</option> <option>Bissau-Guinean</option> <option>Guyanese</option> <option>Haitian</option> <option>Heard Island</option> <option>Vatican</option> <option>Honduran</option> <option>Hong Kong</option> <option>Hungarian</option> <option>Icelandic</option> <option>Indian</option> <option>Indonesian</option> <option>Iranian</option> <option>Iraqi</option> <option>Irish</option> <option>Manx</option> <option>Israeli</option> <option>Italian</option> <option>Jamaican</option> <option>Japanese</option> <option>Jordanian</option> <option>Kazakhstani</option> <option>Kenyan</option> <option>I-Kiribati</option> <option>North Korean</option> <option>South Korean</option> <option>Kuwaiti</option> <option>Kyrgyzstani</option> <option>Lao</option> <option>Latvian</option> <option>Lebanese</option> <option>Basotho</option> <option>Liberian</option> <option>Libyan</option> <option>Liechtenstein</option> <option>Lithuanian</option> <option>Luxembourg</option> <option>Macanese</option> <option>Macedonian</option> <option>Malagasy</option> <option>Malawian</option> <option>Malaysian</option> <option>Maldivian</option> <option>Malian</option> <option>Maltese</option> <option>Marshallese</option> <option>Martiniquais</option> <option>Mauritanian</option> <option>Mauritian</option> <option>Mahoran</option> <option>Mexican</option> <option>Micronesian</option> <option>Moldovan</option> <option>Monégasque</option> <option>Mongolian</option> <option>Montenegrin</option> <option>Montserratian</option> <option>Moroccan</option> <option>Mozambican</option> <option>Burmese</option> <option>Namibian</option> <option>Nauruan</option> <option>Nepali</option> <option>Dutch</option> <option>New Caledonian</option> <option>New Zealand</option> <option>Nicaraguan</option> <option>Nigerien</option> <option>Nigerian</option> <option>Niuean</option> <option>Norfolk Island</option> <option>Northern Marianan</option> <option>Norwegian</option> <option>Omani</option> <option>Pakistani</option> <option>Palauan</option> <option>Palestinian</option> <option>Panamanian</option> <option>Papua New Guinean</option> <option>Paraguayan</option> <option>Peruvian</option> <option>Philippine</option> <option>Pitcairn Island</option> <option>Polish</option> <option>Portuguese</option> <option>Puerto Rican</option> <option>Qatari</option> <option>Réunionese</option> <option>Romanian</option> <option>Russian</option> <option>Rwandan</option> <option>Barthélemois</option> <option>Saint Helenian</option> <option>Kittitian</option> <option>Saint Lucian</option> <option>Saint-Martinoise</option> <option>Saint-Pierrais</option> <option>Saint Vincentian</option> <option>Samoan</option> <option>Sammarinese</option> <option>São Toméan</option> <option>Saudi</option> <option>Senegalese</option> <option>Serbian</option> <option>Seychellois</option> <option>Sierra Leonean</option> <option>Singaporean</option> <option>Sint Maarten</option> <option>Slovak</option> <option>Slovenian</option> <option>Solomon Island</option> <option>Somali</option> <option>South African</option> <option>South Georgia</option> <option>South Sudanese</option> <option>Spanish</option> <option>Sri Lankan</option> <option>Sudanese</option> <option>Surinamese</option> <option>Svalbard</option> <option>Swazi</option> <option>Swedish</option> <option>Swiss</option> <option>Syrian</option> <option>Tajikistani</option> <option>Tanzanian</option> <option>Thai</option> <option>Timorese</option> <option>Togolese</option> <option>Tokelauan</option> <option>Tongan</option> <option>Trinidadian</option> <option>Tunisian</option> <option>Turkish</option> <option>Turkmen</option> <option>Turks and Caicos Island</option> <option>Tuvaluan</option> <option>Ugandan</option> <option>Ukrainian</option> <option>Emirati</option> <option>British</option> <option>American</option> <option>Uruguayan</option> <option>Uzbekistani</option> <option>Ni-Vanuatu</option> <option>Venezuelan</option> <option>Vietnamese</option> <option>British Virgin Island</option> <option>U.S. Virgin Island</option> <option>Wallis and Futuna</option> <option>Sahrawi</option> <option>Yemeni</option> <option>Zambian</option> <option>Zimbabwean</option>');
$('.nat').append(nat);

var country = $('<option>Andorra</option> <option>United Arab Emirates</option> <option>Afghanistan</option> <option>Antigua and Barbuda</option> <option>Anguilla</option> <option>Albania</option> <option>Armenia</option> <option>Angola</option> <option>Antarctica</option> <option>Argentina</option> <option>American Samoa</option> <option>Austria</option> <option>Australia</option> <option>Aruba</option> <option>Åland Islands</option> <option>Azerbaijan</option> <option>Bosnia and Herzegovina</option> <option>Barbados</option> <option>Bangladesh</option> <option>Belgium</option> <option>Burkina Faso</option> <option>Bulgaria</option> <option>Bahrain</option> <option>Burundi</option> <option>Benin</option> <option>Saint Barthélemy</option> <option>Bermuda</option> <option>Brunei Darussalam</option> <option>Bolivia (Plurinational State of)</option> <option>Bonaire, Sint Eustatius and Saba</option> <option>Brazil</option> <option>Bahamas</option> <option>Bhutan</option> <option>Botswana</option> <option>Belarus</option> <option>Belize</option> <option>Canada</option> <option>Cocos (Keeling) Islands</option> <option>Congo (Democratic Republic of the)</option> <option>Central African Republic</option> <option>Congo (Republic of the)</option> <option>Switzerland</option> <option>Côte dIvoire</option> <option>Cook Islands</option> <option>Chile</option> <option>Cameroon</option> <option>China</option> <option>Colombia</option> <option>Costa Rica</option> <option>Cuba</option> <option>Cabo Verde</option> <option>Curaçao</option> <option>Christmas Island</option> <option>Cyprus</option> <option>Czech Republic</option> <option>Germany</option> <option>Djibouti</option> <option>Denmark</option> <option>Dominica</option> <option>Dominican Republic</option> <option>Algeria</option> <option>Ecuador</option> <option>Estonia</option> <option>Egypt</option> <option>Western Sahara</option> <option>Eritrea</option> <option>Spain</option> <option>Ethiopia</option> <option>Finland</option> <option>Fiji</option> <option>Falkland Islands (Malvinas)</option> <option>Micronesia (Federated States of)</option> <option>Faroe Islands</option> <option>France</option> <option>Gabon</option> <option>United Kingdom of Great Britain and Northern Ireland</option> <option>Grenada</option> <option>Georgia</option> <option>French Guiana</option> <option>Guernsey</option> <option>Ghana</option> <option>Gibraltar</option> <option>Greenland</option> <option>Gambia</option> <option>Guinea</option> <option>Guadeloupe</option> <option>Equatorial Guinea</option> <option>Greece</option> <option>South Georgia and the South Sandwich Islands</option> <option>Guatemala</option> <option>Guam</option> <option>Guinea-Bissau</option> <option>Guyana</option> <option>Hong Kong</option> <option>Honduras</option> <option>Croatia</option> <option>Haiti</option> <option>Hungary</option> <option>Indonesia</option> <option>Ireland</option> <option>Israel</option> <option>Isle of Man</option> <option>India</option> <option>Iraq</option> <option>Iran</option> <option>Iceland</option> <option>Italy</option> <option>Jersey</option> <option>Jamaica</option> <option>Jordan</option> <option>Japan</option> <option>Kenya</option> <option>Kyrgyzstan</option> <option>Cambodia</option> <option>Kiribati</option> <option>Comoros</option> <option>Saint Kitts and Nevis</option> <option>Korea (Democratic Peoples Republic of)</option> <option>Korea (Republic of)</option> <option>Kuwait</option> <option>Cayman Islands</option> <option>Kazakhstan</option> <option>Lao Peoples Democratic Republic</option> <option>Lebanon</option> <option>Saint Lucia</option> <option>Liechtenstein</option> <option>Sri Lanka</option> <option>Liberia</option> <option>Lesotho</option> <option>Lithuania</option> <option>Luxembourg</option> <option>Latvia</option> <option>Libya</option> <option>Morocco</option> <option>Monaco</option> <option>Moldova (Republic of)</option> <option>Montenegro</option> <option>Saint Martin (French part)</option> <option>Madagascar</option> <option>Marshall Islands</option> <option>Macedonia (the former Yugoslav Republic of)</option> <option>Mali</option> <option>Myanmar</option> <option>Mongolia</option> <option>Northern Mariana Islands</option> <option>Martinique</option> <option>Mauritania</option> <option>Montserrat</option> <option>Malta</option> <option>Mauritius</option> <option>Maldives</option> <option>Malawi</option> <option>Mexico</option> <option>Malaysia</option> <option>Mozambique</option> <option>Namibia</option> <option>New Caledonia</option> <option>Niger</option> <option>Nigeria</option> <option>Nicaragua</option> <option>Netherlands</option> <option>Norway</option> <option>Nepal</option> <option>Nauru</option> <option>Niue</option> <option>New Zealand</option> <option>Oman</option> <option>Panama</option> <option>Peru</option> <option>French Polynesia</option> <option>Papua New Guinea</option> <option>Philippines</option> <option>Pakistan</option> <option>Poland</option> <option>Saint Pierre and Miquelon</option> <option>Pitcairn</option> <option>Puerto Rico</option> <option>Palestine, State of</option> <option>Portugal</option> <option>Palau</option> <option>Paraguay</option> <option>Qatar</option> <option>Réunion</option> <option>Romania</option> <option>Serbia</option> <option>Russian Federation</option> <option>Rwanda</option> <option>Saudi Arabia</option> <option>Solomon Islands</option> <option>Seychelles</option> <option>Sudan</option> <option>Sweden</option> <option>Singapore</option> <option>Saint Helena, Ascension and Tristan da Cunha</option> <option>Slovenia</option> <option>Svalbard and Jan Mayen</option> <option>Slovakia</option> <option>Sierra Leone</option> <option>San Marino</option> <option>Senegal</option> <option>Somalia</option> <option>Suriname</option> <option>South Sudan</option> <option>Sao Tome and Principe</option> <option>El Salvador</option> <option>Sint Maarten (Dutch part)</option> <option>Syrian Arab Republic</option> <option>Swaziland</option> <option>Turks and Caicos Islands</option> <option>Chad</option> <option>French Southern Territories</option> <option>Togo</option> <option>Thailand</option> <option>Tajikistan</option> <option>Tokelau</option> <option>Timor-Leste</option> <option>Turkmenistan</option> <option>Tunisia</option> <option>Tonga</option> <option>Turkey</option> <option>Trinidad and Tobago</option> <option>Tuvalu</option> <option>Taiwan, Province of China</option> <option>Tanzania, United Republic of</option> <option>Ukraine</option> <option>Uganda</option> <option>United States of America</option> <option>Uruguay</option> <option>Uzbekistan</option> <option>Vatican City State</option> <option>Saint Vincent and the Grenadines</option> <option>Venezuela (Bolivarian Republic of)</option> <option>Virgin Islands (British)</option> <option>Virgin Islands (U.S.)</option> <option>Vietnam</option> <option>Vanuatu</option> <option>Wallis and Futuna</option> <option>Samoa</option> <option>Yemen</option> <option>Mayotte</option> <option>South Africa</option> <option>Zambia</option> <option>Zimbabwe</option>');
$('.country').append(country);


