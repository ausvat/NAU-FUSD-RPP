$(function () {
    $('.pricebuttonone').on('click', function () {
        var text = $('.messageinput');
        text.val(text.val() + 'Hello! I am interested in your Basic Package. ');    
    });
});

$(function () {
    $('.pricebutton').on('click', function () {
        var text = $('.messageinput');
        text.val(text.val() + 'Hello! I am interested in your Pro Package. ');    
    });
});

$(function () {
    $('.pricebuttontwo').on('click', function () {
        var text = $('.messageinput');
        text.val(text.val() + 'Hello! I am interested in your Advanced Package. ');    
    });
});