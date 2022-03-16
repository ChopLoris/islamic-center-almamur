(function($) {
    "use strict"

    function activeMenu (items) {
        $(items).addClass('fixed');
        $(items).addClass('right-0');
        $(items).addClass('mr-5');
        $(items).removeClass('text-white');
        $(items).addClass('text-black');
    }

    function inActiveMenu(items) {
        $(items).removeClass('fixed');
        $(items).removeClass('right-0');
        $(items).removeClass('mr-5');
        $(items).removeClass('text-black');
        $(items).addClass('text-white');
    }

    $(document).ready(function () {
        setInterval(() => {
            var clientTime = new Date();
            var time = new Date(clientTime.getTime());
            var sh = time.getHours();
            var ampm = sh >= 12 ? 'PM' : 'AM';
            sh = sh % 12;
            sh = sh ? sh : 12;
            sh = sh.toString();
            var sm = time.getMinutes().toString();
            var ss = time.getSeconds().toString();
            document.getElementById('timeNow').innerHTML = (sh.length == 1 ? "" + sh:sh)+" : "+(sm.length == 1 ? "0" + sm:sm)+" : "+(ss.length == 1 ? "0" + ss:ss)+" "+ampm;
        }, 1000);


        $('.navbar').onePageNav();

        $('.button-nav').each(function (_, navToggler) {
            var target = $(navToggler).data("target");
            $(navToggler).on('click', function() {
                $(target).animate({
                    height: "toggle"
                }, {
                    step: function (now) {
                    if(now > 0) {
                        activeMenu(navToggler);
                    } else {
                        inActiveMenu(navToggler);
                    }
                }})
            })

            $(target).each(function () {
                $('ul li').click(function () {
                    inActiveMenu(navToggler);
                    $(target).animate({
                        height: "hide"
                    })
                })
            })
        })
    })

})(jQuery);
