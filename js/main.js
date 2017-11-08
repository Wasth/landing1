var curSlideShipped = 0;
var curSlideAdvantages = 0;
$(document).ready(function () {

    // Расставляем блоки у каждого слайдера
    $("#shippedSlider .slides div.slide").each(function (i) {
        if(i < curSlideShipped) $(this).addClass("left-side");
        if(i > curSlideShipped) $(this).addClass("right-side");
    });
    $("#advantagesSlider .slides div.slide").each(function (i) {
        if(i < curSlideAdvantages) $(this).addClass("left-side");
        if(i > curSlideAdvantages) $(this).addClass("right-side");
    });

    // Ставим центральные слайды по середине
    $("#shippedSlider .slides .slide:eq("+curSlideShipped+"), #advantagesSlider .slides .slide:eq("+curSlideAdvantages+")").addClass('center-side');

    // ставим картинки для первого слайдера
    $("#shippedSlider .slides .slide .slide-img").each(function (e) {
        $(this).css({
            'background':'url(img/slider-img/shipped'+(e+1)+'.JPG)',
            'background-size': 'cover',
            'background-repeat':"no-repeat",
            'background-position': 'center center'
        });
    });

    // Обработка событий для стрелочек слайдера
    $("#shippedSlider .left-arrow").on('click',function () {
        // alert("sh la");
        if(curSlideShipped < ($("#shippedSlider .slides div.slide").length-1)) {
            setLeftSide(curSlideShipped,'shippedSlider');
            curSlideShipped++;
            setCenterSide(curSlideShipped,'shippedSlider');
        }else if (curSlideShipped == ($("#shippedSlider .slides div.slide").length-1)) {
            curSlideShipped = 0;
            $("#shippedSlider .slides div.slide").removeClass("left-side right-side center-side");
            $("#shippedSlider .slides div.slide").each(function (i) {
                if(i < curSlideShipped) $(this).addClass("left-side");
                if(i > curSlideShipped) $(this).addClass("right-side");
            });
            $("#shippedSlider .slides .slide:eq("+curSlideShipped+")").addClass('center-side');
        }
    });
    $("#shippedSlider .right-arrow").on('click',function () {
        // alert("sh ra");
        if(curSlideShipped > 0) {
            setRightSide(curSlideShipped,'shippedSlider');
            curSlideShipped--;
            setCenterSide(curSlideShipped,'shippedSlider');
        }
        else if (curSlideShipped == 0) {
            curSlideShipped = $("#shippedSlider .slides div.slide").length-1;
            $("#shippedSlider .slides div.slide").removeClass("left-side right-side center-side");
            $("#shippedSlider .slides div.slide").each(function (i) {
                if(i < curSlideShipped) $(this).addClass("left-side");
                if(i > curSlideShipped) $(this).addClass("right-side");
            });
            $("#shippedSlider .slides .slide:eq("+curSlideShipped+")").addClass('center-side');
        }
    });

    $("#advantagesSlider .left-arrow").on('click',function () {
        // alert("ad la");
        if(curSlideAdvantages < ($("#advantagesSlider .slides div.slide").length-1)) {
            setLeftSide(curSlideAdvantages,'advantagesSlider');
            curSlideAdvantages++;
            setCenterSide(curSlideAdvantages,'advantagesSlider');
        }else if (curSlideAdvantages == ($("#advantagesSlider .slides div.slide").length-1)) {
            curSlideAdvantages = 0;
            $("#advantagesSlider .slides div.slide").removeClass("left-side right-side center-side");
            $("#advantagesSlider .slides div.slide").each(function (i) {
                if(i < curSlideAdvantages) $(this).addClass("left-side");
                if(i > curSlideAdvantages) $(this).addClass("right-side");
            });
            $("#advantagesSlider .slides .slide:eq("+curSlideAdvantages+")").addClass('center-side');
        }
    });
    $("#advantagesSlider .right-arrow").on('click',function () {
        // alert("ad ra");
        if(curSlideAdvantages > 0) {
            setRightSide(curSlideAdvantages,'advantagesSlider');
            curSlideAdvantages--;
            setCenterSide(curSlideAdvantages,'advantagesSlider');
        }
        else if (curSlideAdvantages == 0) {
            curSlideAdvantages = $("#advantagesSlider .slides div.slide").length-1;
            $("#advantagesSlider .slides div.slide").removeClass("left-side right-side center-side");
            $("#advantagesSlider .slides div.slide").each(function (i) {
                if(i < curSlideAdvantages) $(this).addClass("left-side");
                if(i > curSlideAdvantages) $(this).addClass("right-side");
            });
            $("#advantagesSlider .slides .slide:eq("+curSlideAdvantages+")").addClass('center-side');
        }
    });


    // popup actions
    $("#productionGalleryGrid div img," +
        "#ourCertificates div img," +
        "#reviewsGrid div img").click(function () {
        var src = $(this).attr("src");
        var fullPath = src.split('/')[0] + '/fulls/' + src.split('/')[1];
        $("body").prepend('<div id="popupWrapper">' +
            '<div id="popup">' +
            '<img class="full-img" src="'+fullPath+'">' +
            '</div>' +
            '</div>');
        $("#popupWrapper").click(function () {
            $(this).remove();
        });
        
    });

});



function clearClasses(slide,container){
    $("#"+container+" .slides .slide:eq("+slide+")").removeClass('center-side left-side right-side');
}
function setLeftSide(slide, container) {
    clearClasses(slide,container);
    $("#"+container+" .slides .slide:eq("+slide+")").addClass('left-side');
}
function setRightSide(slide, container) {
    clearClasses(slide,container);
    $("#"+container+" .slides .slide:eq("+slide+")").addClass('right-side');
}
function setCenterSide(slide, container) {
    clearClasses(slide,container);
    $("#"+container+" .slides .slide:eq("+slide+")").addClass('center-side');
}

