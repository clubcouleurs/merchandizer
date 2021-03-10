!(function () {
    "use strict";
    var Appilo_Core = {
        init: function () {
            this.Basic.init();
        },
        Basic: {
            init: function () {
                this.ImageAnimation();
                this.ImageDataAnimation();
                this.ImageHoverAnimation();
            },
            ImageAnimation: function () {
                    $(".man-updown .elementor-image").css("animation", "man-updown 2s infinite alternate");
                    $(".IT_animation_1 .elementor-image").css("animation", "IT_animation_1 12s infinite linear alternate");
                    $(".IT_animation_2 .elementor-image").css("animation", "IT_animation_2 12s infinite linear alternate");
                    $(".IT_animation_3 .elementor-image").css("animation", "IT_animation_3 12s infinite linear alternate");
                    $(".IT_animation_4 .elementor-image").css("animation", "IT_animation_4 12s infinite linear alternate");
                    $(".IT_animation_5 .elementor-image").css("animation", "IT_animation_5 12s infinite linear alternate");
                    $(".rotate-anim .elementor-image").css("animation", "rotate-anim 3s infinite linear");
                    $(".icon-bounce .elementor-image").css("animation", "icon-bounce 0.8s ease-out infinite");
            },
            ImageHoverAnimation: function () {
                $('.flip-animation').hover(
                    function(){ $(this).addClass('flip-animations') },
                    function(){ $(this).removeClass('flip-animations') }
                )
            },
            ImageDataAnimation: function () {
                var x1 = $('.it-data-animation-1 .elementor-image');
                var x2 = $('.it-data-animation-2 .elementor-image');
                var x3 = $('.it-data-animation-3 .elementor-image');
                var x4 = $('.it-data-animation-4 .elementor-image');

                x1.attr('data-parallax', '{"x" : -70}');
                x2.attr('data-parallax', '{"y" : -70}');
                x3.attr('data-parallax', '{"y" : 70}');
                x4.attr('data-parallax', '{"y" : -50}');
            },
        },
    };
    jQuery(document).ready(function () {
        Appilo_Core.init();
    });
})();