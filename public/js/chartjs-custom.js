



$(function () {

    ///////////////////Global variable////////////////
    reports = "";
    regions = "";
    countries = "";
    cities = "";


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


                    $('#option5 li a').on('click', function (e) {
                        e.preventDefault();
                        var option5 = $('<li class="option5list">' + $(this).attr('title') + '</li>');
                        $(this).closest('.panel').find('.option5list').remove();
                        $(this).closest('.panel').find('.breadcrumb').append(option5);
                    });
                    $(this).closest('.panel').find('.option5list').remove();
                });
                $(this).closest('.panel').find('.option5list').remove();
                $(this).closest('.panel').find('.option4list').remove();
            });
            $(this).closest('.panel').find('.option5list').remove();
            $(this).closest('.panel').find('.option4list').remove();
            $(this).closest('.panel').find('.option3list').remove();
        });
        $(this).closest('.panel').find('.option5list').remove();
        $(this).closest('.panel').find('.option4list').remove();
        $(this).closest('.panel').find('.option3list').remove();
        $(this).closest('.panel').find('.option2list').remove();
    });

    ////////////////////List Elements///////////////
    $('#option2 li a').on('click', function (e) {
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
        var option2 = $(this).attr('title');

        switch (option2) {
            case 'World':
                $('#option3 li').remove();
                $('#option3').append(country);
                $('#option4 li').remove();
                $('#option4').append(middleEastCity);
                $('#option5 li').remove();
                $('#option5').append(sites);
                break;
            case 'MiddleEast':
                $('#option3 li').remove();
                $('#option3').append(country);
                $('#option4 li').remove();
                $('#option4').append(middleEastCity);
                $('#option5 li').remove();
                $('#option5').append(sites);
                break;
            case 'Europe':
                $('#option3 li').remove();
                $('#option4 li').remove();
                $('#option5 li').remove();
                break;
            case 'Australia':
                $('#option3 li').remove();
                $('#option4 li').remove();
                $('#option5 li').remove();
                break;
            case 'NorthAmerica':
                $('#option3 li').remove();
                $('#option4 li').remove();
                $('#option5 li').remove();
                break;
            case 'SouthAmerica':
                $('#option3 li').remove();
                $('#option4 li').remove();
                $('#option5 li').remove();
                break;
            case 'NorthAfrica':
                $('#option3 li').remove();
                $('#option4 li').remove();
                $('#option5 li').remove();
                break;
            default:
        }


        $('#option3 li a').on('click', function (e) {
            e.preventDefault();
            var option3 = $(this).attr('title');
            switch (option3) {
                case 'UAE':
                    $('#option4 li').remove();
                    $('#option5 li').remove();
                    $('#option4').append(UAE);
                    $('#option5').append(UAESites);
                    break;
                case 'Jordan':
                    $('#option4 li').remove();
                    $('#option5 li').remove();
                    $('#option4').append(jordan);
                    $('#option5').append(jordanSites);
                    break;
                case 'Iraq':
                    $('#option4 li').remove();
                    $('#option5 li').remove();
                    $('#option4').append(iraq);
                    $('#option5').append(iraqSites);
                    break;
                case 'Kuwait':
                    $('#option4 li').remove();
                    $('#option5 li').remove();
                    break;
                case 'Qatar':
                    $('#option4 li').remove();
                    $('#option5 li').remove();
                    break;
                case 'Bahrain':
                    $('#option4 li').remove();
                    $('#option5 li').remove();
                    break;
                default:
            }

            $('#option4 li a').on('click', function (e) {
                e.preventDefault();
                var option4 = $(this).attr('title');
                switch (option4) {
                    case 'Dubai':
                        $('#option5 li').remove();
                        $('#option5').append(dubaiSites);
                        break;
                    case 'AbuDhabi':
                        $('#option5 li').remove();
                        $('#option5').append(abuDhabiSites);
                        break;
                    case 'Amman':
                        $('#option5 li').remove();
                        $('#option5').append(ammanSites);
                        break;
                    case 'Faloojah':
                        $('#option5 li').remove();
                        $('#option5').append(faloojahSites);
                        break;
                    case 'Zawia':
                        $('#option5 li').remove();
                        $('#option5').append(zawiaSites);
                        break;
                    case 'Kuwait':
                        $('#option5 li').remove();
                        break;
                    case 'Doha':
                        $('#option5 li').remove();
                        break;
                    case 'Manama':
                        $('#option5 li').remove();
                        break;
                    case 'AlQayyarah':
                        $('#option5 li').remove();
                        break;

                    default:
                }
            });
        });
    });

    //Line and Area charts initialization
    //areaChartData(value1, lable1, value2, lable2, value3, lable3, value4, lable4, value5, lable5, value6, lable6)
    function areaChartData(v1, l1, v2, l2, v3, l3, v4, l4, v5, l5, v6, l6, v7, l7, v8, l8, v9, l9, v10, l10, v11, l11, v12, l12, v13, l13, v14, l14, v15, l15, v16, l16, v17, l17, v18, l18, v19, l19, v20, l20, v21, l21, v22, l22, v23, l23, v24, l24, v25, l25, v26, l26, v27, l27, v28, l28, v29, l29, v30, l30, v31, l31, v32, l32, v33, l33, v34, l34, v35, l35, v36, l36, v37, l37, v38, l38, v39, l39, v40, l40) {
        var areaChartDataC = {
            labels: [l1, l2, l3, l4, l5, l6, l7, l8, l9, l10, l11, l12, l13, l14, l15, l16, l17, l18, l19, l20, l21, l22, l23, l24, l25, l26, l27, l28, l29, l30, l31, l32, l33, l34, l35, l36, l37, l38, l39, l40],
            datasets: [
                {
                    label: "",
                    fillColor: "rgba(151,187,205,0.5)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: [v1, v2, v3, v4, v5, v6, v7, v8, v9, v10, v11, v12, v13, v14, v15, v16, v17, v18, v19, v20, v21, v22, v23, v24, v25, v26, v27, v28, v29, v30, v31, v32, v33, v34, v35, v36, v37, v38, v39, v40]
                }
            ]
        };
        var areaChartData = {
            labels: [],
            datasets: [
                {
                    label: "",
                    fillColor: "rgba(151,187,205,0.5)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: []
                }
            ]
        };
        for (var i = 0; i < areaChartDataC.labels.length; i++) {
            if (areaChartDataC.labels[i] !== undefined) {

                areaChartData.labels.push(areaChartDataC.labels[i]);
                areaChartData.datasets[0].data[i] = areaChartDataC.datasets[0].data[i];
            }
        }

        return areaChartData;
    }


    function areaChartOptions() {
        var areaChartOptions = {
            scaleSteps: 10,
            // Number - The value jump in the hard coded scale
            scaleStepWidth: 50,
            // Number - The scale starting value
            scaleStartValue: 20,
            // Interpolated JS string - can access value
            scaleLabel: function (d) {
                if (d.value < 0)
                    return '';
                else
                    return d.value + '         ';
            },
            //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            scaleBeginAtZero: true,
            //Boolean - If we should show the scale at all
            showScale: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: true,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - Whether the line is curved between points
            bezierCurve: false,
            //Number - Tension of the bezier curve between points
            bezierCurveTension: 0.3,
            //Boolean - Whether to show a dot for each point
            pointDot: true,
            //Number - Radius of each point dot in pixels
            pointDotRadius: 6,
            //Number - Pixel width of point dot stroke
            pointDotStrokeWidth: 1,
            //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            pointHitDetectionRadius: 20,
            //Boolean - Whether to show a stroke for datasets
            datasetStroke: true,
            //Number - Pixel width of dataset stroke
            datasetStrokeWidth: 8,
            //Boolean - Whether to fill the dataset with a color
            datasetFill: true,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: false,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: false
        };
        return areaChartOptions;
    }


    //Bar charts initialization
    //barChartData(value1, lable1, value2, lable2, value3, lable3, value4, lable4, value5, lable5, value6, lable6)
    function barChartData(v1, l1, v2, l2, v3, l3, v4, l4, v5, l5, v6, l6, v7, l7, v8, l8, v9, l9, v10, l10, v11, l11, v12, l12, v13, l13, v14, l14, v15, l15, v16, l16, v17, l17, v18, l18, v19, l19, v20, l20, v21, l21, v22, l22, v23, l23, v24, l24, v25, l25, v26, l26, v27, l27, v28, l28, v29, l29, v30, l30, v31, l31, v32, l32, v33, l33, v34, l34, v35, l35, v36, l36, v37, l37, v38, l38, v39, l39, v40, l40) {
        var barChartDataC = {
            labels: [l1, l2, l3, l4, l5, l6, l7, l8, l9, l10, l11, l12, l13, l14, l15, l16, l17, l18, l19, l20, l21, l22, l23, l24, l25, l26, l27, l28, l29, l30, l31, l32, l33, l34, l35, l36, l37, l38, l39, l40],
            datasets: [
                            {
                                fillColor: "rgba(151,187,205,0.5)",
                                strokeColor: "rgba(151,187,205,1)",
                                data: [v1, v2, v3, v4, v5, v6, v7, v8, v9, v10, v11, v12, v13, v14, v15, v16, v17, v18, v19, v20, v21, v22, v23, v24, v25, v26, v27, v28, v29, v30, v31, v32, v33, v34, v35, v36, v37, v38, v39, v40]
                            },
            ]
        };
        var barChartData = { labels: [], datasets: [{ fillColor: "rgba(151,187,205,0.5)", strokeColor: "rgba(151,187,205,1)", data: [] }, ] };
        for (var i = 0; i < barChartDataC.labels.length; i++) {
            if (barChartDataC.labels[i] !== undefined) {

                barChartData.labels.push(barChartDataC.labels[i]);
                barChartData.datasets[0].data[i] = barChartDataC.datasets[0].data[i];
            }
        }

        return barChartData;
    }


    function barChartOptions() {
        var barChartOptions = {
            //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            scaleBeginAtZero: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: true,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - If there is a stroke on each bar
            barShowStroke: true,
            //Number - Pixel width of the bar stroke
            barStrokeWidth: 2,
            //Number - Spacing between each of the X value sets
            barValueSpacing: 20,
            //Number - Spacing between data sets within X values
            barDatasetSpacing: 1,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            //Boolean - whether to make the chart responsive
            responsive: false,
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    display: false
                }],
                yAxes: [{
                    display: false
                }],
            }
        };
        return barChartOptions;
    }


    //Pie and Doughnut initialization
    // PieData(value1,value2,value3,value4,value5,value6,lable1,lable2,lable3,lable4,lable5,lable6)
    function PieData(v1, l1, v2, l2, v3, l3, v4, l4, v5, l5, v6, l6, v7, l7, v8, l8, v9, l9, v10, l10, v11, l11, v12, l12, v13, l13, v14, l14, v15, l15, v16, l16, v17, l17, v18, l18, v19, l19, v20, l20, v21, l21, v22, l22, v23, l23, v24, l24, v25, l25, v26, l26, v27, l27, v28, l28, v29, l29, v30, l30, v31, l31, v32, l32, v33, l33, v34, l34, v35, l35, v36, l36, v37, l37, v38, l38, v39, l39, v40, l40) {

        O1 = {
            value: v1,
            color: "#f56954",
            highlight: "#f56954",
            label: l1,
        };
        O2 = {
            value: v2,
            color: "#00a65a",
            highlight: "#00a65a",
            label: l2
        };
        O3 = {
            value: v3,
            color: "#f39c12",
            highlight: "#f39c12",
            label: l3
        };

        O4 = {
            value: v4,
            color: "#3c8dbc",
            highlight: "#3c8dbc",
            label: l4
        };

        O5 = {
            value: v5,
            color: "#d95043",
            highlight: "#d95045",
            label: l5
        };
        O6 = {
            value: v6,
            color: "#d2d6de",
            highlight: "#d2d6de",
            label: l6
        };
        O7 = { value: v7, color: "#d3d6de", highlight: "#d3d6de", label: l7 };
        O8 = { value: v8, color: "#d5d6de", highlight: "#d5d6de", label: l8 };
        O9 = { value: v9, color: "#d246de", highlight: "#d246de", label: l9 };
        O10 = { value: v10, color: "#d216de", highlight: "#d216de", label: l10 };
        O11 = { value: v11, color: "#d286de", highlight: "#d286de", label: l11 };
        O12 = { value: v12, color: "#d2d64e", highlight: "#d2d64e", label: l12 };
        O13 = { value: v13, color: "#d2d61e", highlight: "#d2d61e", label: l13 };
        O14 = { value: v14, color: "#d2d67e", highlight: "#d2d67e", label: l14 };
        O15 = { value: v15, color: "#12d6de", highlight: "#12d6de", label: l15 };
        O16 = { value: v16, color: "#82d6de", highlight: "#82d6de", label: l16 };
        O17 = { value: v17, color: "#72d6de", highlight: "#72d6de", label: l17 };
        O18 = { value: v18, color: "#62d5de", highlight: "#62d5de", label: l18 };
        O19 = { value: v19, color: "#82d4de", highlight: "#82d64e", label: l19 };
        O20 = { value: v20, color: "#52d69e", highlight: "#52d69e", label: l20 };
        O21 = { value: v21, color: "#d2d6de", highlight: "#d2d6de", label: l21 };
        O22 = { value: v22, color: "#22d6de", highlight: "#22d6de", label: l22 };
        O23 = { value: v23, color: "#62d6de", highlight: "#62d6de", label: l23 };
        O24 = { value: v24, color: "#63d61e", highlight: "#63d61e", label: l24 };
        O25 = { value: v25, color: "#72d6de", highlight: "#72d6de", label: l25 };
        O26 = { value: v26, color: "#d2d6d1", highlight: "#d2d6d1", label: l26 };
        O27 = { value: v27, color: "#d2d65e", highlight: "#d2d65e", label: l27 };
        O28 = { value: v28, color: "#12d6de", highlight: "#12d6de", label: l28 };
        O29 = { value: v29, color: "#22d6de", highlight: "#22d6de", label: l29 };
        O30 = { value: v30, color: "#32d6de", highlight: "#32d6de", label: l30 };
        O31 = { value: v31, color: "#11d6de", highlight: "#11d6de", label: l31 };
        O32 = { value: v32, color: "#62d6de", highlight: "#62d6de", label: l32 };
        O33 = { value: v33, color: "#d2d6de", highlight: "#d2d6de", label: l33 };
        O34 = { value: v34, color: "#d2d66e", highlight: "#d2d66e", label: l34 };
        O35 = { value: v35, color: "#d2d62e", highlight: "#d2d62e", label: l35 };
        O36 = { value: v36, color: "#d2d67e", highlight: "#d2d67e", label: l36 };
        O37 = { value: v37, color: "#d2d63e", highlight: "#d2d63e", label: l37 };
        O38 = { value: v38, color: "#d2d61e", highlight: "#d2d61e", label: l38 };
        O39 = { value: v39, color: "#d2d2de", highlight: "#d2d62e", label: l39 };
        O40 = { value: v40, color: "#d2d5de", highlight: "#d2565e", label: l40 };


        var PieDataC = [O1, O2, O3, O4, O5, O6, O7, O8, O9, O10, O11, O12, O13, O14, O15, O16, O17, O18, O19, O20, O21, O22, O23, O24, O25, O26, O27, O28, O29, O30, O31, O32, O33, O34, O35, O36, O37, O38, O39, O40];
        var PieData = [];
        for (var i = 0; i < PieDataC.length; i++) {
            if (PieDataC[i].value !== undefined)
                PieData.push(PieDataC[i]);
        }

        return PieData;
    }


    function pieOptions() {
        var pieOptions = {
            //Boolean - Whether we should show a stroke on each segment
            segmentShowStroke: true,
            //String - The colour of each segment stroke
            segmentStrokeColor: "#fff",
            //Number - The width of each segment stroke
            segmentStrokeWidth: 2,
            //Number - The percentage of the chart that we cut out of the middle
            percentageInnerCutout: 0, // This is 0 for Pie charts
            //Number - Amount of animation steps
            animationSteps: 100,
            //String - Animation easing effect
            animationEasing: "easeOutBounce",
            //Boolean - Whether we animate the rotation of the Doughnut
            animateRotate: true,
            //Boolean - Whether we animate scaling the Doughnut from the centre
            animateScale: false,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: false,
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: false,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
            tooltipEvents: [],
            showTooltips: true,
            onAnimationComplete: function () {
                this.showTooltip(this.segments, true);
            },
            tooltipTemplate: "<%= label %> - <%= value %>",
            tooltips: {
                callbacks: {
                    label: function (tooltipItem, data) {
                        var dataset = data.datasets[tooltipItem.datasetIndex];
                        var total = dataset.data.reduce(function (previousValue, currentValue, currentIndex, array) {
                            return previousValue + currentValue;
                        });
                        var currentValue = dataset.data[tooltipItem.index];
                        var precentage = Math.floor(((currentValue / total) * 100) + 0.5);
                        return precentage + "%";
                    }
                }
            }
        };
        return pieOptions;
    }


    //radar initialization
    var radarChartData = {
        labels: ["", "", "", "", "", "", ""],
        datasets: [
            {
                fillColor: "rgba(220,220,220,0.5)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                data: [65, 59, 90, 81, 56, 55, 40]
            },
            {
                fillColor: "rgba(151,187,205,0.5)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                data: [28, 48, 40, 19, 96, 27, 100]
            }
        ]

    };


    //Filters

    //////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////Option 1 Reports//////////////////////////////////////

    $('#option1 li a').on('click', function (e) {
        e.preventDefault();
        $('#chartjs').empty();
        var chart1 = $('<div class="col-lg-6 chart"><section class="panel"><header class="panel-heading"></header><div class="panel-body text-center"><canvas id="RChart1" height="300" width="450"></canvas></div></section></div>');
        var chart2 = $('<div class="col-lg-6 chart"><section class="panel"><header class="panel-heading"></header><div class="panel-body text-center"><canvas id="RChart2" height="300" width="450"></canvas></div></section></div>');
        var chart3 = $('<div class="col-lg-6 chart"><section class="panel"><header class="panel-heading"></header><div class="panel-body text-center"><canvas id="RChart3" height="300" width="450"></canvas></div></section></div>');
        var chart4 = $('<div class="col-lg-6 chart"><section class="panel"><header class="panel-heading"></header><div class="panel-body text-center"><canvas id="RChart4" height="300" width="450"></canvas></div></section></div>');

        reports = $(this).attr('title');

        switch (reports) {

            case 'AssetsValue':
                $('#chartjs').append(chart1);
                $('#chartjs').append(chart2);
                $('#RChart1').closest('.chart').find('header').replaceWith('<header class="panel-heading">Region - Assets Value</header>');
                $('#RChart2').closest('.chart').find('header').replaceWith('<header class="panel-heading">Region - Assets Value</header>');

                //Chart 1
                pieOptionsRV = pieOptions();
                pieOptionsRV.percentageInnerCutout = 50;

                PieDataRV = PieData(107500, "ME", 72000, "N.AFR.", 212000, "EU", 187000, "NA", 161000, "SA", 72000, "AU");

                //Chart 2
                barChartOptionsRV = barChartOptions();
                barChartOptionsRV.barValueSpacing = 20;

                barChartDataRV = barChartData(107500, "MiddleEast", 72000, "NorthAfrica", 212000, "Europe", 187000, "NorthAmerica", 161000, "SouthAmerica", 72000, "Australia");


                new Chart(document.getElementById("RChart1").getContext("2d")).Pie(PieDataRV, pieOptionsRV);
                new Chart(document.getElementById("RChart2").getContext("2d")).Bar(barChartDataRV, barChartOptionsRV);

                break;


            case 'TAT':
                $('#chartjs').append(chart1);
                $('#chartjs').append(chart2);
                $('#RChart1').closest('.chart').find('header').replaceWith('<header class="panel-heading">Region - Avg TAT</header>');
                $('#RChart2').closest('.chart').find('header').replaceWith('<header class="panel-heading">Region - Avg TAT</header>');

                //Chart 1
                pieOptionsRT = pieOptions();
                pieOptionsRT.percentageInnerCutout = 70;

                PieDataRT = PieData(2.3, "ME", 3, "N.AFR.", 1, "EU", 1, "NA", 2, "SA", 4, "AU");

                //Chart 2
                areaChartOptionsRT = areaChartOptions();
                areaChartOptionsRT.datasetStrokeWidth = 8;

                areaChartDataRT = areaChartData(2.3, "MiddleEast", 3, "NorthAfrica", 1, "Europe", 1, "NorthAmerica", 2, "SouthAmerica", 4, "Australia");

                new Chart(document.getElementById("RChart1").getContext("2d")).Pie(PieDataRT, pieOptionsRT);
                new Chart(document.getElementById("RChart2").getContext("2d")).Line(areaChartDataRT, areaChartOptionsRT);

                break;
            case 'FailureRate':
                break;
            case 'FailureCost':
                break;
            case 'RepairVs.Replace':
                break;
            case 'FailureVs.Others':
                break;

            default:

        }



        //////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////Option 2 Regions//////////////////////////////////////

        $('#option2 li a').on('click', function (e) {
            e.preventDefault();
            $('#chartjs').empty();

            var chart1 = $('<div class="col-lg-6 chart"><section class="panel"><header class="panel-heading"></header><div class="panel-body text-center"><canvas id="RGChart1" height="300" width="450"></canvas></div></section></div>');
            var chart2 = $('<div class="col-lg-6 chart"><section class="panel"><header class="panel-heading"></header><div class="panel-body text-center"><canvas id="RGChart2" height="300" width="450"></canvas></div></section></div>');
            var chart3 = $('<div class="col-lg-6 chart"><section class="panel"><header class="panel-heading"></header><div class="panel-body text-center"><canvas id="RGChart3" height="300" width="450"></canvas></div></section></div>');
            var chart4 = $('<div class="col-lg-6 chart"><section class="panel"><header class="panel-heading"></header><div class="panel-body text-center"><canvas id="RGChart4" height="300" width="450"></canvas></div></section></div>');


            regions = $(this).attr('title');
            var reportRegion = reports + regions;

            switch (reportRegion) {


                ///////////////////////////AssetsValue and Region Start/////////////////////////

                case 'AssetsValueWorld':
                    $('#chartjs').append(chart1);
                    $('#chartjs').append(chart2);
                    $('#RGChart1').closest('.chart').find('header').replaceWith('<header class="panel-heading">Region - Assets Value</header>');
                    $('#RGChart2').closest('.chart').find('header').replaceWith('<header class="panel-heading">Region - Assets Value</header>');
                    new Chart(document.getElementById("RGChart1").getContext("2d")).Pie(PieDataRV, pieOptionsRV);
                    new Chart(document.getElementById("RGChart2").getContext("2d")).Bar(barChartDataRV, barChartOptionsRV);

                    //////////////////////////////////////////////////////////////////////////////////////////////////
                    ////////////////////////////////////////////Option 3 Countries//////////////////////////////////////
                    $('#option3 li a').on('click', function (e) {
                        e.preventDefault();
                        $('#chartjs').empty();
                        var chart1 = $('<div class="col-lg-6 chart"><section class="panel"><header class="panel-heading"></header><div class="panel-body text-center"><canvas id="CChart1" height="300" width="450"></canvas></div></section></div>');
                        var chart2 = $('<div class="col-lg-6 chart"><section class="panel"><header class="panel-heading"></header><div class="panel-body text-center"><canvas id="CChart2" height="300" width="450"></canvas></div></section></div>');
                        var chart3 = $('<div class="col-lg-6 chart"><section class="panel"><header class="panel-heading"></header><div class="panel-body text-center"><canvas id="CChart3" height="300" width="450"></canvas></div></section></div>');
                        var chart4 = $('<div class="col-lg-6 chart"><section class="panel"><header class="panel-heading"></header><div class="panel-body text-center"><canvas id="CChart4" height="300" width="450"></canvas></div></section></div>');

                        countries = $(this).attr('title');
                        var reportRegionCountry = reports + regions + countries;

                        switch (countries) {

                            case 'UAE':
                                {

                                    $('#chartjs').append(chart1);
                                    $('#chartjs').append(chart2);
                                    $('#CChart1').closest('.chart').find('header').replaceWith('<header class="panel-heading">UAE - Assets Value</header>');
                                    $('#CChart2').closest('.chart').find('header').replaceWith('<header class="panel-heading">UAE - Assets Value</header>');

                                    barChartDataUH = {
                                        labels: ["   Dubai", "AUH"],

                                        datasets: [
                                            {
                                                fillColor: "rgba(151,187,205,0.5)",
                                                strokeColor: "rgba(151,187,205,1)",
                                                data: [42500, 10000]
                                            },
                                        ]
                                    };

                                    barChartDataU = {
                                        labels: ["Dubai -1", "Dubai -2", "Dubai -3", "Dubai -4", "AUH - 1"],

                                        datasets: [
                                            {
                                                fillColor: "rgba(151,187,205,0.5)",
                                                strokeColor: "rgba(151,187,205,1)",
                                                data: [15000, 10000, 2500, 15000, 10000]
                                            },
                                        ]
                                    };

                                    new Chart(document.getElementById("CChart1").getContext("2d")).HorizontalBar(barChartDataUH, barChartOptions);
                                    new Chart(document.getElementById("CChart2").getContext("2d")).Bar(barChartDataU);

                                }
                                break;

                            case 'Jordan':
                                $('#chartjs').append(chart1);
                                $('#chartjs').append(chart2);
                                $('#CChart1').closest('.chart').find('header').replaceWith('<header class="panel-heading">Jordan - Assets Value</header>');
                                $('#CChart2').closest('.chart').find('header').replaceWith('<header class="panel-heading">Jordan - Assets Value</header>');
                                barChartData1 = {
                                    labels: ["     Amman"],

                                    datasets: [
                                        {
                                            fillColor: "rgba(151,187,205,0.5)",
                                            strokeColor: "rgba(151,187,205,1)",
                                            data: [27500]
                                        },
                                    ]
                                };

                                barChartData2 = {
                                    labels: ["Amman -1", "Amman -2", "Amman -3"],

                                    datasets: [
                                        {
                                            fillColor: "rgba(151,187,205,0.5)",
                                            strokeColor: "rgba(151,187,205,1)",
                                            data: [2500, 15000, 10000]
                                        },
                                    ]
                                };

                                new Chart(document.getElementById("CChart1").getContext("2d")).Bar(barChartData1, barChartOptions);
                                new Chart(document.getElementById("CChart2").getContext("2d")).Bar(barChartData2, barChartOptions);
                                break;

                            case 'Iraq':
                                break;

                            case 'Amman':
                                break;

                            case 'Kuwait':
                                break;

                            case 'Qatar':
                                break;
                            case 'Bahrain':
                                break;
                            default:

                        }

                    });
                    break;

                case 'AssetsValueMiddleEast':
                    $('#chartjs').append(chart1);
                    $('#chartjs').append(chart2);
                    $('#chartjs').append(chart3);
                    $('#chartjs').append(chart4);
                    $('#RGChart1').closest('.chart').find('header').replaceWith('<header class="panel-heading">Country - Assets Value</header>');
                    $('#RGChart2').closest('.chart').find('header').replaceWith('<header class="panel-heading">Country - Assets Value</header>');
                    $('#RGChart3').closest('.chart').find('header').replaceWith('<header class="panel-heading">City - Assets Value</header>');
                    $('#RGChart4').closest('.chart').find('header').replaceWith('<header class="panel-heading">Site - Assets Value</header>');

                    //Chart 1
                    pieOptionsMV = pieOptions();
                    pieOptionsMV.percentageInnerCutout = 0;
                    pieOptionsMV.segmentStrokeWidth = 10;

                    PieDataMV = PieData(52500, "UAE", 27500, "Jordan", 27500, "Iraq");

                    //Chart 2
                    barChartDataMVH1 = barChartData(52500, "UAE", 27500, "    Jordan", 27500, "Iraq");

                    //Chart 3
                    barChartDataMVH2 = barChartData(42500, "Dubai", 10000, "AUH", 27500, "Amman", 2500, "   Faloojah", 15000, "Zawia", 10000, "Mewsel");


                    //Chart 4
                    barChartDataMV = barChartData(15000, "Dubai -1", 10000, "Dubai -2", 2500, "Dubai -3", 15000, "Dubai -4", 10000, "AUH - 1", 2500, "Amman -1", 15000, "Amman -2", 10000, "Amman -3", 2500, "Faloojah -1", 15000, "Zawia -1", 10000, "Mewsel -1");


                    new Chart(document.getElementById("RGChart1").getContext("2d")).Pie(PieDataMV, pieOptionsMV);
                    new Chart(document.getElementById("RGChart2").getContext("2d")).HorizontalBar(barChartDataMVH1, barChartOptions);
                    new Chart(document.getElementById("RGChart3").getContext("2d")).HorizontalBar(barChartDataMVH2, barChartOptions);
                    new Chart(document.getElementById("RGChart4").getContext("2d")).Bar(barChartDataMV, barChartOptions);


                    //////////////////////////////////////////////////////////////////////////////////////////////////
                    ////////////////////////////////////////////Option 3 Countries//////////////////////////////////////
                    $('#option3 li a').on('click', function (e) {
                        e.preventDefault();
                        $('#chartjs').empty();
                        var chart1 = $('<div class="col-lg-6 chart"><section class="panel"><header class="panel-heading"></header><div class="panel-body text-center"><canvas id="CChart1" height="300" width="450"></canvas></div></section></div>');
                        var chart2 = $('<div class="col-lg-6 chart"><section class="panel"><header class="panel-heading"></header><div class="panel-body text-center"><canvas id="CChart2" height="300" width="450"></canvas></div></section></div>');
                        var chart3 = $('<div class="col-lg-6 chart"><section class="panel"><header class="panel-heading"></header><div class="panel-body text-center"><canvas id="CChart3" height="300" width="450"></canvas></div></section></div>');
                        var chart4 = $('<div class="col-lg-6 chart"><section class="panel"><header class="panel-heading"></header><div class="panel-body text-center"><canvas id="CChart4" height="300" width="450"></canvas></div></section></div>');
                        switch (countries) {

                            case 'UAE':
                                {

                                    $('#chartjs').append(chart1);
                                    $('#chartjs').append(chart2);
                                    $('#CChart1').closest('.chart').find('header').replaceWith('<header class="panel-heading">UAE - Assets Value</header>');
                                    $('#CChart2').closest('.chart').find('header').replaceWith('<header class="panel-heading">UAE - Assets Value</header>');

                                    barChartDataUH = {
                                        labels: ["   Dubai", "AUH"],

                                        datasets: [
                                            {
                                                fillColor: "rgba(151,187,205,0.5)",
                                                strokeColor: "rgba(151,187,205,1)",
                                                data: [42500, 10000]
                                            },
                                        ]
                                    };

                                    barChartDataU = {
                                        labels: ["Dubai -1", "Dubai -2", "Dubai -3", "Dubai -4", "AUH - 1"],

                                        datasets: [
                                            {
                                                fillColor: "rgba(151,187,205,0.5)",
                                                strokeColor: "rgba(151,187,205,1)",
                                                data: [15000, 10000, 2500, 15000, 10000]
                                            },
                                        ]
                                    };

                                    new Chart(document.getElementById("CChart1").getContext("2d")).HorizontalBar(barChartDataUH, barChartOptions);
                                    new Chart(document.getElementById("CChart2").getContext("2d")).Bar(barChartDataU);

                                }
                                break;

                            case 'Jordan':
                                $('#cityStock2').closest('.chart').toggleClass('hide');
                                $('#siteStock2').closest('.chart').toggleClass('hide');
                                barChartData1 = {
                                    labels: ["     Amman"],

                                    datasets: [
                                        {
                                            fillColor: "rgba(151,187,205,0.5)",
                                            strokeColor: "rgba(151,187,205,1)",
                                            data: [27500]
                                        },
                                    ]
                                };

                                barChartData2 = {
                                    labels: ["Amman -1", "Amman -2", "Amman -3"],

                                    datasets: [
                                        {
                                            fillColor: "rgba(151,187,205,0.5)",
                                            strokeColor: "rgba(151,187,205,1)",
                                            data: [2500, 15000, 10000]
                                        },
                                    ]
                                };

                                new Chart(document.getElementById("cityStock2").getContext("2d")).Bar(barChartData1, barChartOptions);
                                new Chart(document.getElementById("siteStock2").getContext("2d")).Bar(barChartData2, barChartOptions);
                                break;

                            case 'Iraq':
                                break;

                            case 'Amman':
                                break;

                            case 'Kuwait':
                                break;

                            case 'Qatar':
                                break;
                            case 'Bahrain':
                                break;
                            default:

                        }

                    });
                    break;


                case 'AssetsValueAustralia':
                    break;

                case 'AssetsValueEurope':
                    break;
                case 'AssetsValueNorthAmerica':
                    break;
                case 'AssetsValueSouthAmerica':
                    break;
                case 'AssetsValueNorthAfrica':
                    break;
                    ///////////////////////////AssetsValue and Region End/////////////////////////


                    ///////////////////////////TAT and Region Start/////////////////////////

                case 'TATWorld':
                    $('#chartjs').append(chart1);
                    $('#chartjs').append(chart2);
                    $('#RGChart1').closest('.chart').find('header').replaceWith('<header class="panel-heading">Region - Avg TAT</header>');
                    $('#RGChart2').closest('.chart').find('header').replaceWith('<header class="panel-heading">Region - Avg TAT</header>');
                    new Chart(document.getElementById("RGChart1").getContext("2d")).Pie(PieDataRT, pieOptionsRT);
                    new Chart(document.getElementById("RGChart2").getContext("2d")).Line(areaChartDataRT, areaChartOptionsRT);
                    break;

                case 'TATMiddleEast':
                    $('#chartjs').append(chart1);
                    $('#chartjs').append(chart2);
                    $('#chartjs').append(chart3);
                    $('#chartjs').append(chart4);
                    $('#RGChart1').closest('.chart').find('header').replaceWith('<header class="panel-heading">Country - Avg TAT</header>');
                    $('#RGChart2').closest('.chart').find('header').replaceWith('<header class="panel-heading">Country - Avg TAT</header>');
                    $('#RGChart3').closest('.chart').find('header').replaceWith('<header class="panel-heading">City - Avg TAT</header>');
                    $('#RGChart4').closest('.chart').find('header').replaceWith('<header class="panel-heading">Site - TAT</header>');

                    //Chart 1
                    pieOptionsMT = pieOptions();
                    pieOptionsMT.percentageInnerCutout = 0;
                    pieOptionsMT.segmentStrokeWidth = 10;

                    PieDataMT = PieData(2, "UAE", 3, "Jordan", 3, "Iraq")
                   
                    //Chart 2
                    barChartOptionsMT = barChartOptions();
                    barChartOptionsMT.barValueSpacing = 10;

                    barChartDataMT = barChartData(2, "UAE", 3, "    Jordan", 3, "Iraq");
                    
                    //Chart 3
                    barChartDataMTH1 = barChartData(1, "Dubai", 1, "AUH", 2.7, "Amman", 6, "   Faloojah", 1, "Zawia", 2, "Mewsel");
                    
                    //Chart 4
                    areaChartOptionsMT = areaChartOptions();
                    areaChartOptionsMT.datasetStrokeWidth = 3;
                    areaChartOptionsMT.datasetFill = false;
                    areaChartDataMT = areaChartData(1, "Dubai -1", 2, "Dubai -2", 1, "Dubai -3", 3, "Dubai -4", 1, "AUH - 1", 5, "Amman -1", 2, "Amman -2", 1, "Amman -3", 6, "Faloojah -1", 1, "Zawia -1", 2, "Mewsel -1");
                    
                    new Chart(document.getElementById("RGChart1").getContext("2d")).Pie(PieDataMT, pieOptionsMT);
                    new Chart(document.getElementById("RGChart2").getContext("2d")).Bar(barChartDataMT, barChartOptionsMT);
                    new Chart(document.getElementById("RGChart3").getContext("2d")).HorizontalBar(barChartDataMTH1, barChartOptions);
                    new Chart(document.getElementById("RGChart4").getContext("2d")).Line(areaChartDataMT, areaChartOptionsMT);
                    break;

                case 'TATEurope':
                    break;

                case 'TATAustralia':
                    break;

                case 'TATNorthAmerica':
                    break;

                case 'TATSouthAmerica':
                    break;

                case 'TATNorthAfrica':
                    break;

                    ///////////////////////////TAT and Region End/////////////////////////
                default:

            }


        });

    });







    //new Chart(document.getElementById("Area").getContext("2d")).Line(areaChartData, areaChartOptions);
    //new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
    //new Chart(document.getElementById("radar").getContext("2d")).Radar(radarChartData);
    //new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);
    //new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
    //new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);



});

//$('#bar').closest('.col-lg-6').toggleClass('hide');
//$('#Area').closest('.col-lg-6').toggleClass('hide');

//barChartData = {
//    labels: ["Dubai-1", "Dubai-2", "Dubai-3", "Dubai-4", "AUH-1", "Amman-1", "Amman-2", "Amman-3", "   Faloojah-1", "Zawia-1", "Mewsel-1"],

//    datasets: [
//        {
//            fillColor: "rgba(151,187,205,0.5)",
//            strokeColor: "rgba(151,187,205,1)",
//            data: [15000, 10000, 2500, 15000, 10000, 2500, 15000, 10000, 2500, 15000, 10000]
//        },

//    ]

//};
//areaChartData = {
//    labels: ["January", "February", "March", "April", "May", "June", "July"],
//    datasets: [
//        {
//            label: "Electronics",
//            fillColor: "rgba(220,220,220,0.5)",
//            strokeColor: "rgba(220,220,220,1)",
//            pointColor: "rgba(220,220,220,1)",
//            pointStrokeColor: "#fff",
//            pointHighlightFill: "#fff",
//            pointHighlightStroke: "rgba(220,220,220,1)",
//            data: [65, 59, 90, 81, 56, 55, 40]
//        },
//        {
//            label: "Digital Goods",
//            fillColor: "rgba(151,187,205,0.5)",
//            strokeColor: "rgba(151,187,205,1)",
//            pointColor: "rgba(151,187,205,1)",
//            pointStrokeColor: "#fff",
//            pointHighlightFill: "#fff",
//            pointHighlightStroke: "rgba(60,141,188,1)",
//            data: [28, 48, 40, 19, 96, 27, 100]
//        }
//    ]
//};

//new Chart(document.getElementById("bar").getContext("2d")).HorizontalBar(barChartData, barChartOptions);
//new Chart(document.getElementById("Area").getContext("2d")).Line(areaChartData, areaChartOptions);

//case 'Dubai':
//break;

//                        case 'AbuDhabi':
//break;

//                        case 'Amman':
//break;

//                        case 'Fallujah':
//break;

//                        case 'Zawita':
//break;
//                        case 'Mewsel':
//break;
//                        case 'Kuwait':
//break;
//                        case 'Doha':
//break;
//                        case 'Manama':
//break;
//                        case 'AlQayyarah':
//break;
//                        default: