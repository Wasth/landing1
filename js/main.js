var curSlide = 0;
$(document).ready(function () {
    $("#shippedSlider #slides div.slide").each(function (i) {
        if(i < curSlide) $(this).addClass("left-side");
        if(i > curSlide) $(this).addClass("right-side");
    });
    $("#shippedSlider #slides .slide:eq("+curSlide+")").addClass('center-side');
    $("#shippedSlider #slides .slide .slide-img").each(function (e) {
        $(this).css({
            'background':'url(img/slider-img/shipped'+(e+1)+'.jpg)',
            'background-size': 'cover',
            'background-repeat':"no-repeat",
            'background-position': 'center center'
        });
    });
    $(".left-arrow").on('click',function () {
        if(curSlide < ($("#shippedSlider #slides div.slide").length-1)) {
            setLeftSide(curSlide);
            curSlide++;
            setCenterSide(curSlide);
        }
    });
    $(".right-arrow").on('click',function () {
        if(curSlide > 0) {
            setRightSide(curSlide);
            curSlide--;
            setCenterSide(curSlide);
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



function clearClasses(slide){
    $("#shippedSlider #slides .slide:eq("+slide+")").removeClass('center-side');
    $("#shippedSlider #slides .slide:eq("+slide+")").removeClass('left-side');
    $("#shippedSlider #slides .slide:eq("+slide+")").removeClass('right-side');
}
function setLeftSide(slide) {
    clearClasses(slide);
    $("#shippedSlider #slides .slide:eq("+slide+")").addClass('left-side');
}
function setRightSide(slide) {
    clearClasses(slide);
    $("#shippedSlider #slides .slide:eq("+slide+")").addClass('right-side');
}
function setCenterSide(slide) {
    clearClasses(slide);
    $("#shippedSlider #slides .slide:eq("+slide+")").addClass('center-side');
}

