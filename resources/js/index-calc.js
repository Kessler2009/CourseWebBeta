var valueBubble;

function updateValueBubble(pos, value, context) {
    pos = pos || context.position;
    value = value || context.value;
    var $valueBubble = $('.rangeslider__value-bubble', context.$range);
    var tempPosition = pos + context.grabPos;
    var position = (tempPosition <= context.handleDimension) ? context.handleDimension : (tempPosition >= context.maxHandlePos) ? context.maxHandlePos : tempPosition;

    if ($valueBubble.length) {
        $valueBubble[0].style.left = Math.ceil(position) + 'px';
        $valueBubble[0].innerHTML = value;
    }
}

$('input[type="range"]').rangeslider({
    polyfill: false,
    onInit: function() {
        this.$range.append($(valueBubble));
        updateValueBubble(null, null, this);
    },
    onSlide: function(pos, value) {
        updateValueBubble(pos, value, this);
    }
});

var date = {
    '1':'1 січня 2017 – 31 грудня 2019',
    '2':'1 січня 2020 – 31 грудня 2024',
    '3':'1 січня 2025 – 31 грудня 2030'
};

var currentrate = {
    '1':0.18,
    '2':0.16,
    '3':0.14
};

var regions = {
    'vinnytsya':'Вінницька обл.',
    'volyn':'Волинська обл.',
    'dnipropetrovsk':'Дніпропетровська обл.',
    'donetsk':'Донецька обл.',
    'zhytomyr':'Житомирська обл.',
    'zakarpatska':'Закарпатська обл.',
    'zaporizhia':'Запорізька обл.',
    'ivano-frankivsk':'Івано-Франківська обл.',
    'kyiv':'Київська обл.',
    'kirovohrad':'Кіровоградська обл.',
    'luhansk':'Луганська обл.',
    'lviv':'Львівська обл.',
    'mykolaiv':'Миколаївська обл.',
    'odesa':'Одеська обл.',
    'poltava':'Полтавська обл.',
    'rivne':'Рівненська обл.',
    'sumy':'Сумська обл.',
    'ternopil':'Тернопільска обл.',
    'kharkiv':'Харківська обл.',
    'kherson':'Херсонська обл.',
    'khmelnytsky':'Хмельницька обл.',
    'сherkasy':'Черкаська обл.',
    'chernihiv':'Чернігівська обл.',
    'chernivetska':'Чернівецька обл.',
    'crimea':'АР Крим'
};

var month_insolation = {
    'dnipropetrovsk' : [30.00,46.00,96.00,112.00,159.00,180.00,170.00,151.00,104.00,69.00,28.00,28.00,1173.00],
    'chernihiv':[21.00,38.00,74.00,111.00,156.00,161.00,167.00,140.00,89.00,51.00,22.00,16.00,1046.00],
    'sumy':[21.00,38.00,74.00,111.00,156.00,161.00,167.00,140.00,89.00,51.00,22.00,16.00,1046.00],
    'donetsk':[28.60,45.90,92.40,134.40,183.80,192.00,199.30,176.70,116.40,67.30,32.40,22.70,1291.90],
    'luhansk':[28.60,45.90,92.40,134.40,183.80,192.00,199.30,176.70,116.40,67.30,32.40,22.70,1291.90],
    'kharkiv':[23.00,35.00,79.00,105.00,150.00,163.00,162.00,141.00,88.00,57.00,19.00,20.00,1042.00],
    'kyiv':[28.00,48.00,88.00,122.00,185.00,178.00,176.00,156.00,101.00,67.00,29.00,21.00,1199.00],
    'lviv':[24.50,38.60,84.90,127.80,162.80,165.90,163.10,145.40,95.10, 59.20,27.50,20.90,1115.70],
    'ternopil':[24.50,38.60,84.90,127.80,162.80,165.90,163.10,145.40,95.10,59.20,27.50,20.90,1115.70],
    'khmelnytsky':[24.50,38.60,84.90,127.80,162.80,165.90,163.10,145.40,95.10,59.20,27.50,20.90,1115.70],
    'mykolaiv':[32.00,52.00,97.00,125.00,171.00,190.00,187.00,162.00,115.00,74.00,35.00,27.00,1267.00],
    'kherson':[32.00,52.00,97.00,125.00,171.00,190.00,187.00,162.00,115.00,74.00,35.00,27.00,1267.00],
    'odesa':[33.20,54.00,101.40,149.10,201.20,203.40,208.30,183.20,122.40,81.50,37.80,36.00,1411.50],
    'poltava':[24.00,36.00,79.00,110.00,152.00,163.00,163.00,144.00,89.00,61.00,21.00,25.00,1067.00],
    'сherkasy':[24.00,36.00,79.00,110.00,152.00,163.00,163.00,144.00,89.00,61.00,21.00,25.00,1067.00],
    'kirovohrad':[24.00,36.00,79.00,110.00,152.00,163.00,163.00,144.00,89.00, 61.00,21.00,25.00,1067.00],
    'crimea':[40.00,56.00,92.00,136.00,180.00,195.00,196.00,177.00,125.00,83.00,45.00,36.00,1361.00],
    'zakarpatska':[23.00,39.00,86.00,132.00,165.00,178.00,177.00,142.00,107.00,67.00,28.00,17.00,1161.00],
    'ivano-frankivsk':[23.00,39.00,86.00,132.00,165.00,178.00,177.00,142.00,107.00,67.00,28.00,17.00,1161.00],
    'chernivetska':[23.00,39.00,86.00,132.00,165.00,178.00,177.00,142.00,107.00,67.00,28.00,17.00,1161.00],
    'vinnytsya':[23.00,35.00,82.00,124.00,168.00,178.00,183.00,148.00,103.00,63.00,25.00,16.00,1148.00],
    'zaporizhia':[33.00,52.00,101.00,112.00,158.00,192.00,170.00,150.00,109.00,72.00,32.00,28.00,1209.00],
    'zhytomyr':[21.00,34.00,81.00,125.00,159.00,174.00,177.00,143.00,97.00,59.00,24.00,15.00,1109.00],
    'volyn':[21.00,34.00,81.00,125.00,159.00,174.00,177.00,143.00,97.00,59.00,24.00,15.00,1109.00],
    'rivne':[21.00,34.00,81.00,125.00,159.00,174.00,177.00,143.00,97.00,59.00,24.00,15.00,1109.00],
};

//init
var power = 10;
var consumption = 250;
var insolation;
var production;
var yearconsumption;
//var date;
var rate;
var profit;
var normalrate = 0.052;
var payback;
var percent;

showResults();
//$('#selected-power').html($('#power').val() + " кВт");
//$('#selected-consumption').html($('#consumption').val() + " кВт*год");


$('#regions').on("change", function() {
    //isolatiion
    //alert("isolation " + month_insolation[$(this).val()][12]);
    insolation = month_insolation[$(this).val()][12];
    //$('#selected-region').html(regions[$(this).val()]);
    //test
    //alert($(this).val() + " " + regions[$(this).val()]);
    showResults();
});

$('#date').on("change", function() {
    //isolatiion
    //alert("isolation " + month_insolation[$(this).val()][12]);
    rate = currentrate[$(this).val()];

    //$('#selected-date').html(date[$(this).val()]);
    showResults();
});

function drawRegions(){
    $.each( regions, function( key, value ) {
        var def = false ;
        if (key == 'kyiv') def = true;
        var newOption = new Option(value, key, def, def);
        $('#regions').append(newOption);
        if (def == true) {
            //$('#selected-region').html(value);
            insolation = month_insolation[key][12];
        }
    });
    showResults();
}
drawRegions();

function drawDate(){
    $.each( date, function( key, value ) {
        var def = false ;
        if (key == '1') def = true;
        var newOption = new Option(value, key, def, def);
        $('#date').append(newOption);
        if (def == true) {
            //$('#selected-date').html(value);
            rate = currentrate[key];
        }
    });
    showResults();
}
drawDate();


$('#power').on("change mousemove", function() {
    //$('#selected-power').html($(this).val() + " кВт");
    power = $(this).val();
    showResults();
});

$('#consumption').on("change mousemove", function() {
    consumption = $(this).val();
    showResults();
    //$('#selected-consumption').html($(this).val() + " кВт*год");
});

function calculation(){
    //$("#test").html(power);
    area = Math.round(power*6.4*100)/100;
    cost = Math.round(((power*4)*100+2500)*1.1);
    if (power >= 10) cost = cost + 2500;
    if (power >= 20) cost = cost + 2500;
    production = Math.round(power*insolation);
    yearconsumption = Math.round(consumption*12);
    greenproduction = Math.round(production - yearconsumption);
    if (greenproduction < 0) greenproduction = 0;
    greenproductionprofit = greenproduction-yearconsumption;
    if (greenproductionprofit < 0) greenproductionprofit = 0;
    profit = Math.round((greenproductionprofit)*rate*0.82 + yearconsumption*normalrate);
    payback = Math.round(cost/profit*10)/10;
    percent = Math.round((100-(yearconsumption/(production/100)))*10)/10;
    if (percent < 0) percent = 0;
}



function showResults(){
    //$("#test").html(power);

    calculation();

    $('#selected-power').html(power + "&nbsp;кВт");
    $('#selected-consumption').html(consumption + "&nbsp;кВт&middot;год");
    $('#selected-area').html(area + "&nbsp;м<sup>2</sup>");
    $('#selected-cost').html(cost + "&nbsp;євро");
    $('#selected-insolation').html(insolation + "&nbsp;кВт/м<sup>2</sup>");
    $('#selected-production').html(production + "&nbsp;кВт&middot;год");
    $('#selected-year-consumption').html(yearconsumption + "&nbsp;кВт&middot;год");
    $('#selected-green-production').html(greenproduction + "&nbsp;кВт&middot;год");
    $('#selected-rate').html(rate + "&nbsp;євро");
    $('#selected-profit').html(profit + "&nbsp;євро");
    $('#selected-payback').html(payback + "&nbsp;років");
    $('#selected-percent').html(percent + "&nbsp;%");

    $(".rate-circle").data('value', percent);
    $('.rate-circle').rateCircle({valueSufix: '%'});
}


/*---*/

jQuery(document).ready(function($) {
    $('.rate-circle').rateCircle({
        size: 130, // Sets the size of the circle
        lineWidth: 28, // Sets the width of circle line
        fontSize: 18, // Font size of rate value
        referenceValue: 100, // Used to calculate color and percentage
        valuePrefix: '', // Sets a text before the rate value
        valueSufix: '%' // Sets a text after the rate value
    });
});

$( function()
{
    var targets = $( '[rel~=tooltip]' ),
        target  = false,
        tooltip = false,
        title   = false;

    targets.bind( 'mouseenter', function()
    {
        target  = $( this );
        tip     = target.attr( 'title' );
        tooltip = $( '<div id="tooltip"></div>' );

        if( !tip || tip == '' )
            return false;

        target.removeAttr( 'title' );
        tooltip.css( 'opacity', 0 )
            .html( tip )
            .appendTo( 'body' );

        var init_tooltip = function()
        {
            if( $( window ).width() < tooltip.outerWidth() * 1.5 )
                tooltip.css( 'max-width', $( window ).width() / 2 );
            else
                tooltip.css( 'max-width', 340 );

            var pos_left = target.offset().left + ( target.outerWidth() / 2 ) - ( tooltip.outerWidth() / 2 ),
                pos_top  = target.offset().top - tooltip.outerHeight() - 20;

            if( pos_left < 0 )
            {
                pos_left = target.offset().left + target.outerWidth() / 2 - 20;
                tooltip.addClass( 'left' );
            }
            else
                tooltip.removeClass( 'left' );

            if( pos_left + tooltip.outerWidth() > $( window ).width() )
            {
                pos_left = target.offset().left - tooltip.outerWidth() + target.outerWidth() / 2 + 20;
                tooltip.addClass( 'right' );
            }
            else
                tooltip.removeClass( 'right' );

            if( pos_top < 0 )
            {
                var pos_top  = target.offset().top + target.outerHeight();
                tooltip.addClass( 'top' );
            }
            else
                tooltip.removeClass( 'top' );

            tooltip.css( { left: pos_left, top: pos_top } )
                .animate( { top: '+=10', opacity: 1 }, 50 );
        };

        init_tooltip();
        $( window ).resize( init_tooltip );

        var remove_tooltip = function()
        {
            tooltip.animate( { top: '-=10', opacity: 0 }, 50, function()
            {
                $( this ).remove();
            });

            target.attr( 'title', tip );
        };

        target.bind( 'mouseleave', remove_tooltip );
        tooltip.bind( 'click', remove_tooltip );
    });
});