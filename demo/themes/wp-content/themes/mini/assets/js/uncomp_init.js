function backtop() {
    $(window).width() > 700 && ($(window).scroll(function() {
        jQuery(this).scrollTop() > 100 ? $(".back-top").fadeIn() : $(".back-top").fadeOut()
    }), $(".back-top").click(function() {
        return $("html, body").animate({
            scrollTop: 0
        }, 600), !1
    }))
}

function mobileNav() {
    $("header #mobile-nav, #mobile-menu a.close_side_menu").click(function() {
        return $("#theme-wrapper, #mobile-menu, header#main").toggleClass("side-menu"), $(".mobile #mobile-nav ul.hamburger").toggleClass("checked"), $("html").toggleClass("overflow"), $("html, body").scrollTop("0"), $("header").removeClass("affix").addClass("affix-top"), !1
    }), $("#mobile-menu .inner div").contents().unwrap(), $("#mobile-menu span.arrow, #mobile-menu span.sub-arrow").remove(), $("#mobile-menu ul#menu-header li").each(function() {
        $(this).find("> ul").length > 0 && ($(this).addClass("sub-menu"), $(this).find("> a").append('<span class="mobile-arrow"><i class="fa fa-angle-down"></i></span>'))
    }), $('#mobile-menu ul li:has(">ul") > a .mobile-arrow').click(function() {
        return $(this).parent().next("ul").slideToggle(), !1
    }), $("#mobile-menu ul ul.premiumwd_mega_div li").each(function() {
        $(this);
        $(this).parent("ul").removeClass("premiumwd_mega_div"), $(this).parent("ul").children("li").each(function() {
            $(this).children("> a").remove();
            var e = $(this).children("ul").html();
            $(this).parent().prepend(e), $(this).remove()
        })
    })
}

function parallax() {
    $.stellar({
        horizontalScrolling: !1,
        verticalOffset: 100
    })
}

function portfolio() {
    function e() {
        setTimeout(function() {}, 3e3)
    }
    var o = $("#portfolio"),
        t = function() {
            var e = o.width(),
                t = 1,
                i = 50;
            return e > 1200 ? t = 5 : e > 900 ? t = 3 : e > 600 ? t = 2 : e > 300 && (t = 1), i = Math.floor(e / t), o.find(".element").each(function() {
                var e = $(this),
                    o = e.attr("class").match(/item-w(\d)/),
                    t = e.attr("class").match(/item-h(\d)/),
                    a = o ? i * o[1] - 0 : i - 5,
                    r = t ? i * t[1] * 1 - 5 : .5 * i - 5;
                e.css({
                    width: a,
                    height: r
                })
            }), i
        };
    $("#portfolio-filters-inline ul a").on("click", function() {
        var t = $(this).attr("data-filter");
        return o.isotope({
            filter: t
        }, e()), $("#portfolio-filters-inline ul a").removeClass("active"), $(this).addClass("active"), !1
    }), o.imagesLoaded(function() {
        o.isotope()
    }), isotope = function() {
        o.isotope({
            resizable: !0,
            itemSelector: ".element",
            layoutMode: "masonry",
            gutter: 0,
            masonry: {
                columnWidth: t(),
                gutterWidth: 0
            }
        })
    }, isotope(), $(window).smartresize(isotope)
}

function setAjaxPagination() {
    var e = $.ias({
        container: "#portfolio",
        item: ".element",
        pagination: "#pagination",
        next: "#pagination span a"
    });
    e.on("rendered", function(e) {
        var o = $(e);
        return o.imagesLoaded(function() {
            $("#portfolio").isotope("reLayout"), $("#portfolio").isotope("reloadItems").isotope(), $("#portfolio").append(o).isotope("addItems", o), portfolio()
        }), !1
    }), e.extension(new IASTriggerExtension({
        text: "Show more",
        html: '<div id="pagination" class="readmore text-center" style=""><div class="load_more_button_holder"><span class="button small"><a>{text}</a></span></div></div>'
    }))
}

function lazyload() {
    1 == $("body").attr("data-lazy") && $("img").lazyload({
        threshold: 200
    })
}

function responsiveinit() {
    1 == $("body").attr("data-responsive") && $("html").addClass("responsive")
}

function megamenu() {
    $(".megaWrapper ul#menu-header > li.menu-item-has-children").find("> a").append('<span class="arrow"><i class="fa fa-angle-down"></i></span>'), $(".megaWrapper ul.sub-menu > li.menu-item-has-children").find("> a").append('<span class="arrow"><i class="fa fa-angle-right"></i></span>'), $("header .menu-header ul.premiumwd_mega_div > li > a").attr("href", "#").remove(), $("ul.premiumwd_mega_div").each(function() {
        var e = $(this).children("li.columns").size(),
            o = $("header .menu-header ul li ul.sub-menu a").outerWidth(!0),
            t = $(".premiumwd_mega_div > li").outerWidth(!0);
        $(this).css("width", t * e + o * e + 2 * t)
    }), $(".premiumwd_mega_div").visible() || $(".premiumwd_mega_div").css("right", "25px")
}

function affix() {
    $("header.sticky").affix({
        offset: {
            top: 100,
            bottom: function() {
                return this.bottom = $(".copyrights").outerHeight(!0)
            }
        }
    })
}

function search() {
    $(".menu-header li#header-search div i").on("click", function() {
        $(".menu-header li#header-search form").animate({
            width: "toggle"
        }, 350), $(".menu-header li#header-search form input").focus()
    })
}

function addOrRemoveSF() {
    window.innerWidth < 769 && 1 == $("body").attr("data-responsive") ? ($("body").addClass("mobile"), $(" #header-container").hide()) : ($("body").removeClass("mobile"), $("#sidebar").show()), window.innerWidth > 769 && $("#theme-wrapper").hasClass("side-menu") ? ($("#theme-wrapper").removeClass(), $("header").removeClass("side-menu"), $("html").removeClass("overflow")) : $("#theme-wrapper").hasClass("side-menu") || $("#mobile-menu").removeClass("side-menu")
}

function portfolioCenter() {
    $(".isotope-item figure, .owl-item figure").each(function() {
        var e = $(this).find("img").height(),
            o = $(this).find("figcaption a").height();
        $(this).find("figcaption a").css("top", (e - o) / 2)
    })
}

function blank() {
    $(".page-template-blank header, .page-template-blank footer").addClass("hidden"), $(".page-template-blank #theme-wrapper").removeClass("stickyfooter")
}

function other() {
    $(".full-height").height($(window).height()), $(".white-section.jquery .three.columns").height() < $("#theme-wrapper .nine.columns").height() && setTimeout(function() {
        $(".white-section.jquery .three.columns #sidebar").css("height", $("#theme-wrapper .blog.nine.columns").outerHeight(!0))
    }, 1e3), $(window).scroll(function() {
        $(".transparent.grey-section .container .topheader .wrapper").css("opacity", 1 - $(window).scrollTop() / $(".transparent.grey-section .container .topheader .wrapper").height()), $(".full-height .container .topheader .wrapper").css("opacity", 1 - $(window).scrollTop() / ($(window).height() - 200))
    }), $(window).width() < 450 && ($("#theme-wrapper").removeClass("stickyfooter"), $("footer").addClass("regular").removeAttr("id")), $(window).width() > 769 && $(".black.overlay.mobile-shop").hide(), $(window).width() < 769 && $(".black.overlay.mobile-shop").is(":hidden") && $(".responsive #theme-wrapper #sidebar").hide()
}

function background() {
    var e = ".slider-container";
    if ($(".rev_slider_wrapper").length > 0 && $(e).length > 0) {
        $("body").attr("data-revslider", 1);
        var o, t = ($(e), "revapi" + $("body").data("revslider"));
        void 0 != typeof t && ($(t).bind("revolution.slide.onloaded", function() {
            BackgroundCheck.init({
                targets: "header.transparent.affix-top .logo h1, header.transparent.affix-top .menu-header > ul li, header.transparent.affix-top .header-meta li, header.transparent.affix-top ul.hamburger li",
                images: ".tp-bgimg",
                minComplexity: 80,
                maxDuration: 1500,
                minOverlap: 0
            })
        }), $(t).bind("revolution.slide.onchange", function(e, t) {
            o = ".rev_slider ul li:nth-child(" + t.slideIndex + ") .tp-bgimg"
        }), $(t).bind("revolution.slide.onafterswap, revolution.slide.onafterswap", function() {
            BackgroundCheck.set("images", o)
        }))
    }
    $("header").hasClass("transparent") && ($(".fullscreen").length > 0 && 0 == $(document).scrollTop() && BackgroundCheck.init({
        targets: "header.transparent.affix-top .logo h1, header.transparent.affix-top .menu-header > ul li, header.transparent.affix-top .header-meta li, header.transparent.affix-top ul.hamburger",
        images: ".fullscreen[style*='background-image']",
        minComplexity: 80,
        maxDuration: 1500,
        minOverlap: 0
    }), $("section.header-title").length > 0 && 0 == $(document).scrollTop() && BackgroundCheck.init({
        targets: "header.transparent.affix-top .logo h1, header.transparent.affix-top .menu-header > ul li, header.transparent.affix-top .header-meta li, header.transparent.affix-top ul.hamburger",
        images: "section.header-title[style*='background-image']",
        minComplexity: 80,
        maxDuration: 1500,
        minOverlap: 0
    })), ($(".fullscreen.grey-section.parallax").length && $(".counter_holder").length || $("#count-down").length) && (BackgroundCheck.init({
        targets: ".counter_holder span, #count-down span, #count-down b, .stat-wrap small",
        images: ".fullscreen[style*='background-image']",
        minComplexity: 80,
        maxDuration: 1500,
        minOverlap: 0
    }), BackgroundCheck.refresh()), $(".slider-container").length > 0 && 0 == $(document).scrollTop() && $(".full-height .video-section .blackoverlay") && $("header.affix-top .logo h1, header.affix-top .menu-header > ul li").addClass("background--dark")
}

function woocommerce() {
    window.innerWidth < 450 && $(".woocommerce-message a.button, .woocommerce-message i").remove();
    var e = $(".account-items li").length;
    "6" == e && window.innerWidth > 769 && $(".account-items li").css("width", "16.67%"), "4" == e && window.innerWidth > 769 && $(".account-items li").css("width", "25%"), $(".widget_layered_nav").each(function() {
        $('.widget_layered_nav h5:contains("Color")').parent().addClass("color"), $(".widget_layered_nav.color ul li").each(function() {
            var e = $(this).children("a").text();
            $(this).children("a").addClass(e).empty()
        })
    }), $(".page-nav").appendTo(".product .bread-nav span"), $(".woocommerce-message").prependTo(".content.pad"), $(".woocommerce-result-count, .woocommerce-ordering").wrapAll('<div class="catalog_top"><div class="container"><div class="twelve columns"></div></div></div>'), $(".catalog_top").prependTo(".white-section"), $('<span class="filter"><i class="fa fa-filter"></i> Filter</span>').appendTo(".woocommerce-page .catalog_top .container .twelve.columns"), $(".top-product-section .yith-wcwl-add-to-wishlist a.add_to_wishlist, .content-product.summary .yith-wcwl-add-to-wishlist a").html('<i class="fa fa-heart-o"></i>'), $(".top-product-section .yith-wcwl-wishlistaddedbrowse, .top-product-section .yith-wcwl-wishlistexistsbrowse, .content-product.summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse, .content-product.summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse").html('<i class="fa fa-heart"></i>'), $(".top-product-section .yith-wcwl-add-to-wishlist img, .content-product.summary .yith-wcwl-add-to-wishlist img ").remove(), $(".woocommerce-page .products li a.button.add_to_cart_button").on("click", function() {
        $(this).fadeOut(400)
    }), $(".responsive .woocommerce-page .white-section > .container .three.columns").addClass("side-bar"), $('<div class="black overlay mobile-shop" style="display:none;"></div>').prependTo(".responsive .woocommerce-page #theme-wrapper"), $('<span class="close" style="display:none;">Close</span>').prependTo(".responsive .woocommerce-page #theme-wrapper .black.overlay"), $(".responsive .woocommerce-page .catalog_top .filter").on("click", function() {
        $(".responsive .mobile.woocommerce-page #sidebar, .responsive .woocommerce-page #theme-wrapper .black.overlay, .responsive .woocommerce-page #theme-wrapper .close").fadeIn(400)
    }), $(".responsive .woocommerce-page #theme-wrapper .close").on("click", function() {
        $(".responsive .mobile.woocommerce-page #sidebar, .responsive .woocommerce-page #theme-wrapper .black.overlay, .responsive .woocommerce-page #theme-wrapper .close").fadeOut(400)
    }), window.innerWidth < 769 && $(".owl-wrapper .owl-item a").removeClass("fresco zoom").removeAttr("href"), $("#tab-description").insertAfter(".woocommerce-tabs"), $(".woocommerce-tabs ul").remove(), $(".woocommerce-tabs, #tab-description, .related.products").wrapAll('<div class="second"></div>'), $(".woocommerce div.second").appendTo(".single-product #theme-wrapper > .white-section"), $("#tab-description, .woocommerce-tabs").wrapInner('<div class="container"></div>'), $('.content-product.summary div[itemprop="description"]').appendTo(".woocommerce-tabs .container"), $("<h2>Why we love this</h2>").prependTo('.second .woocommerce-tabs > .container > div[itemprop="description"]'), $(".related.products h2").html("You May Also Like"), $('<a class="button" href="#">Add a Review</a>').appendTo("#reviews #comments"), $('<span class="close">Close</span>').prependTo("#tab-reviews"), $("#tab-reviews").appendTo("body"), $(".woocommerce-product-rating a").on("click", function() {
        return $("#tab-reviews").show(), !1
    }), $("#tab-reviews #comments a.button").on("click", function() {
        $("#tab-reviews #review_form_wrapper").show(), $("#tab-reviews #comments").hide()
    }), $("#tab-reviews span.close").click(function() {
        $("#tab-reviews #review_form_wrapper, #tab-reviews").hide(), $("#tab-reviews #comments").show()
    }), $("span.posted_in").remove(), $(".content-product.summary .yith-wcwl-add-to-wishlist").appendTo(".content-product .product_title"), $(".posted_in").insertAfter(".woocommerce .content-product h1"), $("#shareme").appendTo(".content-product.summary"), $(".page-nav").appendTo(".main-title .container"), $(".images-slider .slider a:first-child").addClass("active"), $(".images-slider .thumbnails a:first-child").addClass("active"), $(".images-slider .thumbnails a").each(function(e) {
        $(this).attr("id", e), e++, $(this).hover(function(e) {
            $(".images-slider .thumbnails a").removeClass("active"), $(this).addClass("active"), $(".images-slider .slider a").removeClass("active");
            var o = $(this).attr("id");
            $(".images-slider .slider a#" + o).addClass("active")
        })
    }), $(".images-slider .slider a").each(function(e) {
        $(this).attr("id", e), e++
    }), $("#customer_login").length && $("#customer_login").tabs(), $(".shop_table .coupon label, .shop_table .product-quantity p, #shipping_method br, .shipping-calculator-form br, .cart.shop_table tbody br, .checkout.woocommerce-checkout br, .woocommerce-checkout #order_review_heading, .shop_table.cart.wishlist_table p:empty, .shop_table.cart.wishlist_table br, #customer_login .remember br, #customer_login .lost_password br, .lost_reset_password br, .woocommerce-product-shortcode li .yith-wcwl-add-to-wishlist, .woocommerce-product-shortcode li a.button, .products-slider-wrapper li a.button, .products-slider-wrapper li .yith-wcwl-add-to-wishlist").remove(), $(".shop_table .actions").find("p").contents().unwrap(), $(".wc-proceed-to-checkout a.button").text("Checkout");
    var e = $(".account-items li").length;
    "5" == e && window.innerWidth > 769 && $(".account-items li").css("width", "20%")
}
setAjaxPagination(), setInterval(portfolioCenter, 1e3);
var $ = jQuery.noConflict(),
    $window = jQuery(window),
    windowSize = $window.width(),
    checkClick = 0;
jQuery(document).ready(function() {
    "use strict";
    backtop(), responsiveinit(), mobileNav(), addOrRemoveSF(), lazyload(), affix(), search(), other(), megamenu(), portfolioCenter(), parallax(), blank(), portfolio(), background(), woocommerce()
}), jQuery(window).resize(function() {
    "use strict";
    addOrRemoveSF(), other()
}), jQuery(window).load(function() {
    "use strict";
    $(".loader").fadeOut("slow")
}), jQuery(window).scroll(function() {
    "use strict";
    background()
}), jQuery(document).ready(function() {
    $('<div style="text-align:center;"><span style="margin-right:20px;">Username: demo</span> <span>Password: demo</span></div>').appendTo("#customer_login")
});
