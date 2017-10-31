



$(function () {

    ////////////////////List Elements///////////////
    $('#option1 li a').on('click', function (e) {
        e.preventDefault();
        var country = $('<li><a href="#" title="UAE">United Arab Emirates</a></li><li><a href="#" title="Jordan">Jordan</a></li><li><a href="#" title="Iraq">Iraq</a></li><li><a href="#" title="Kuwait">Kuwait</a></li><li><a href="#" title="Qatar">Qatar</a></li><li><a href="#" title="Bahrain">Bahrain</a></li');
        var middleEastCity = $('<li><a href="#" title="Dubai">Dubai</a></li><li><a href="#" title="AbuDhabi">Abu Dhabi</a></li><li><a href="#" title="Amman">Amman</a></li><li><a href="#" title="Fallujah">Fallujah</a></li><li><a href="#" title="Zawia">Zawita</a></li><li><a href="#" title="Mewsel">Mewsel</a></li><li><a href="#" title="Kuwait">Kuwait</a></li><li><a href="#" title="Doha">Doha</a></li><li><a href="#" title="Manama">Manama</a></li><li><a href="#" title="AlQayyarah">Al Qayyarah</a></li>');
        var sites = $('<li><a href="#" title="Dubai-1">Dubai -1</a></li><li><a href="#" title="Dubai-2">Dubai -2</a></li><li><a href="#" title="Dubai-3">Dubai -3</a></li><li><a href="#" title="Dubai-4">Dubai -4</a></li><li><a href="#" title="AbuDhabi-1">Abu Dhabi -1</a></li><li><a href="#" title="Amman-1">Amman -1</a></li><li><a href="#" title="Amman-2">Amman -2</a></li><li><a href="#" title="Amman-3">Amman -3</a></li><li><a href="#" title="Faloojah-1">Faloojah -1</a></li><li><a href="#" title="Zawia-1">Zawia -1</a></li><li><a href="#" title="Mewsel-1">Mewsel -1</a></li>');
        var UAE = $('<li><a href="#" title="Dubai">Dubai</a></li><li><a href="#" title="AbuDhabi">Abu Dhabi</a></li>');
        var jordan = $('<li><a href="#" title="Amman">Amman</a></li>');
        var iraq = $('<li><a href="#" title="Fallujah">Fallujah</a></li><li><a href="#" title="Zawia">Zawita</a></li><li><a href="#" title="Mewsel">Mewsel</a></li><li><a href="#" title="AlQayyarah">Al Qayyarah</a></li>');
        var UAESites = $('<li><a href="#" title="Dubai-1">Dubai -1</a></li><li><a href="#" title="Dubai-2">Dubai -2</a></li><li><a href="#" title="Dubai-3">Dubai -3</a></li><li><a href="#" title="Dubai-4">Dubai -4</a></li><li><a href="#" title="AbuDhabi-1">Abu Dhabi -1</a></li>');
        var jordanSites = $('<li><a href="#" title="Amman-1">Amman -1</a></li><li><a href="#" title="Amman-2">Amman -2</a></li><li><a href="#" title="Amman-3">Amman -3</a></li>');
        var iraqSites = $('<li><a href="#" title="Faloojah-1">Faloojah -1</a></li><li><a href="#" title="Zawia-1">Zawia -1</a></li><li><a href="#" title="Mewsel-1">Mewsel -1</a></li>');
        var dubaiSites = $('<li><a href="#" title="Dubai-1">Dubai -1</a></li><li><a href="#" title="Dubai-2">Dubai -2</a></li><li><a href="#" title="Dubai-3">Dubai -3</a></li><li><a href="#" title="Dubai-4">Dubai -4</a></li>');
        var abuDhabiSites = $('<li><a href="#" title="AbuDhabi-1">Abu Dhabi -1</a></li>');
        var ammanSites = $('<li><a href="#" title="Amman-1">Amman -1</a></li><li><a href="#" title="Amman-2">Amman -2</a></li><li><a href="#" title="Amman-3">Amman -3</a></li>');
        var faloojahSites = $('<li><a href="#" title="Faloojah-1">Faloojah -1</a></li>');
        var zawiaSites = $('<li><a href="#" title="Zawia-1">Zawia -1</a></li>');
        var mewselSites = $('<li><a href="#" title="Mewsel-1">Mewsel -1</a></li>');
        var option1 = $(this).attr('title');
        switch (option1) {
            case 'World':
                $('#option2 li').remove();
                $('#option2').append(country);
                $('#option3 li').remove();
                $('#option3').append(middleEastCity);
                $('#option4 li').remove();
                $('#option4').append(sites);
                break;
            case 'MiddleEast':
                $('#option2 li').remove();
                $('#option2').append(country);
                $('#option3 li').remove();
                $('#option3').append(middleEastCity);
                $('#option4 li').remove();
                $('#option4').append(sites);
                break;
            case 'Europe':
                $('#option2 li').remove();
                $('#option3 li').remove();
                $('#option4 li').remove();
                break;
            case 'Australia':
                $('#option2 li').remove();
                $('#option3 li').remove();
                $('#option4 li').remove();
                break;
            case 'NorthAmerica':
                $('#option2 li').remove();
                $('#option3 li').remove();
                $('#option4 li').remove();
                break;
            case 'SouthAmerica':
                $('#option2 li').remove();
                $('#option3 li').remove();
                $('#option4 li').remove();
                break;
            case 'NorthAfrica':
                $('#option2 li').remove();
                $('#option3 li').remove();
                $('#option4 li').remove();
                break;
            default:
        }


        $('#option2 li a').on('click', function (e) {
            e.preventDefault();
            var option2 = $(this).attr('title');
            switch (option2) {
                case 'UAE':
                    $('#option3 li').remove();
                    $('#option4 li').remove();
                    $('#option3').append(UAE);
                    $('#option4').append(UAESites);
                    break;
                case 'Jordan':
                    $('#option3 li').remove();
                    $('#option4 li').remove();
                    $('#option3').append(jordan);
                    $('#option4').append(jordanSites);
                    break;
                case 'Iraq':
                    $('#option3 li').remove();
                    $('#option4 li').remove();
                    $('#option3').append(iraq);
                    $('#option4').append(iraqSites);
                    break;
                case 'Kuwait':
                    $('#option3 li').remove();
                    $('#option4 li').remove();
                    break;
                case 'Qatar':
                    $('#option3 li').remove();
                    $('#option4 li').remove();
                    break;
                case 'Bahrain':
                    $('#option3 li').remove();
                    $('#option4 li').remove();
                    break;
                default:
            }

            $('#option3 li a').on('click', function (e) {
                e.preventDefault();
                var option3 = $(this).attr('title');
                switch (option3) {
                    case 'Dubai':
                        $('#option4 li').remove();
                        $('#option4').append(dubaiSites);
                        break;
                    case 'AbuDhabi':
                        $('#option4 li').remove();
                        $('#option4').append(abuDhabiSites);
                        break;
                    case 'Amman':
                        $('#option4 li').remove();
                        $('#option4').append(ammanSites);
                        break;
                    case 'Faloojah':
                        $('#option4 li').remove();
                        $('#option4').append(faloojahSites);
                        break;
                    case 'Zawia':
                        $('#option4 li').remove();
                        $('#option4').append(zawiaSites);
                        break;
                    case 'Kuwait':
                        $('#option4 li').remove();
                        break;
                    case 'Doha':
                        $('#option4 li').remove();
                        break;
                    case 'Manama':
                        $('#option4 li').remove();
                        break;
                    case 'AlQayyarah':
                        $('#option4 li').remove();
                        break;

                    default:
                }
            });
        });
    });


    ////////////////////BreadCrumb///////////////
    $('#option1 li a').on('click', function (e) {
        e.preventDefault();
        var option1 = $('<li class="option1list">' + $(this).attr('title') + '</li>');
        $(this).closest('.panel').find('.option1list').remove();
        $(this).closest('.panel').find('.breadcrumb').append(option1);


        $('#option2 li a').on('click', function (e) {
            e.preventDefault();
            var option2 = $('<li class="option2list">' + $(this).attr('title') + '</li>');
            $(this).closest('.panel').find('.option2list').remove();
            $(this).closest('.panel').find('.breadcrumb').append(option2);


            $('#option3 li a').on('click', function (e) {
                e.preventDefault();
                var option3 = $('<li class="option3list">' + $(this).attr('title') + '</li>');
                $(this).closest('.panel').find('.option3list').remove();
                $(this).closest('.panel').find('.breadcrumb').append(option3);


                $('#option4 li a').on('click', function (e) {
                    e.preventDefault();
                    var option4 = $('<li class="option4list">' + $(this).attr('title') + '</li>');
                    $(this).closest('.panel').find('.option4list').remove();
                    $(this).closest('.panel').find('.breadcrumb').append(option4);
                   
                });
                
                $(this).closest('.panel').find('.option4list').remove();
            });
            
            $(this).closest('.panel').find('.option4list').remove();
            $(this).closest('.panel').find('.option3list').remove();
        });
        
        $(this).closest('.panel').find('.option4list').remove();
        $(this).closest('.panel').find('.option3list').remove();
        $(this).closest('.panel').find('.option2list').remove();
    });

    
 
});

////////////////////Enable Disable the New Button///////////////
$('#option4').on('click', function (e) {
    e.preventDefault();
    var breadcrumbLastItem = $('.breadcrumb li').last().attr('class');
    if (breadcrumbLastItem === "option4list") {
        $('#newbtn').removeClass('unactive');
    }
    $('#option3 li a').on('click', function (e) {
        e.preventDefault();
        $('#newbtn').addClass('unactive');
    });
    $('#option2 li a').on('click', function (e) {
        e.preventDefault();
        $('#newbtn').addClass('unactive');
    });
    $('#option1 li a').on('click', function (e) {
        e.preventDefault();
        $('#newbtn').addClass('unactive');
    });
});


