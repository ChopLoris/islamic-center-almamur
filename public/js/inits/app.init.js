(function($) {
    "use strict"

    $('.navbar').onePageNav();

    $('.button-nav').each(function (_, navToggler) {
        var target = $(navToggler).data("target");
        $(navToggler).on('click', function() {
            $(target).animate({
                height: "toggle"
            }, {
                step: function (now) {
                if(now > 0) {
                    $(navToggler).addClass('fixed');
                    $(navToggler).addClass('right-0');
                    $(navToggler).addClass('mr-5');
                    $(navToggler).removeClass('text-white');
                    $(navToggler).addClass('text-black');
                    $(target).each(function () {
                        $('ul li').click(function () {
                            $(navToggler).removeClass('fixed');
                            $(navToggler).removeClass('right-0');
                            $(navToggler).removeClass('mr-5');
                            $(navToggler).removeClass('text-black');
                            $(navToggler).addClass('text-white');
                            $(target).animate({
                                height: "hide"
                            })
                        })
                    })
                } else {
                    $(navToggler).removeClass('fixed');
                    $(navToggler).removeClass('right-0');
                    $(navToggler).removeClass('mr-5');
                    $(navToggler).removeClass('text-black');
                    $(navToggler).addClass('text-white');
                }
            }})
        })
    })

})(jQuery);
