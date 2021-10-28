$('.toggle').click(function(){
    $('.formulario').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: 'toggle'
    }, "slow");
});

$('.pago').click(function(){
    $('.intern').animate({
        height: "intern",
        'padding-top': 'intern',
        'padding-bottom': 'intern',
        opacity: 'intern'
    }, "slow");
});

