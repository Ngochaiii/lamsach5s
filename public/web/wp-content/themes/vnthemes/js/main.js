// 'use strict';
(function($) {
    $.fn.treemenu = function(options) {
        options = options || {};
        options.delay = options.delay || 0;
        options.openActive = options.openActive || false;
        options.closeOther = options.closeOther || false;
        options.activeSelector = options.activeSelector || "active";

        this.addClass("treemenu");

        if (!options.nonroot) {
            this.addClass("treemenu-root");
        }

        options.nonroot = true;

        this.find("> li").each(function() {
            var e = $(this);
            var subtree = e.find('> ul, > section');
            var button = e.find('.toggler').eq(0);

            if (button.length == 0) {
                var button = $('<span>');
                button.addClass('toggler');
                e.prepend(button);
            }

            if (subtree.length > 0) {
                subtree.hide();
                e.addClass('tree-closed');

                e.find(button).click(function() {
                    var li = $(this).parent('li');

                    if (options.closeOther && li.hasClass('tree-closed')) {
                        var siblings = li.parent('ul').find("li:not(.tree-empty)");
                        siblings.removeClass("tree-opened");
                        siblings.addClass("tree-closed");
                        siblings.removeClass(options.activeSelector);
                        siblings.find('> ul, > section').slideUp(options.delay);
                    }

                    li.find('> ul, > section').slideToggle(options.delay);
                    li.toggleClass('tree-opened');
                    li.toggleClass('tree-closed');
                    li.toggleClass(options.activeSelector);
                });

                $(this).find('> ul, > section').treemenu(options);
            } else {
                $(this).addClass('tree-empty');
            }
        });

        if (options.openActive) {
            var cls = this.attr("class");

            this.find('.' + options.activeSelector).each(function() {
                var el = $(this).parent();

                while (el.attr("class") !== cls) {
                    el.find('> ul, > section').show();
                    if (el.prop("tagName") === 'UL') {
                        el.show();
                    } else if (el.prop("tagName") === 'LI') {
                        el.removeClass('tree-closed');
                        el.addClass("tree-opened");
                        el.show();
                    }

                    el = el.parent();
                }
            });
        }

        return this;
    }
})(jQuery);

! function(a) {
    a.fn.slickAnimation = function() {
        function n(a, n, t, i, o) { o = "undefined" != typeof o ? o : !1, 1 == n.opacity ? (a.addClass(t), a.addClass(i)) : (a.removeClass(t), a.removeClass(i)), o && a.css(n) }

        function t(a, n) { return a ? 1e3 * a + 1e3 : n ? 1e3 * n : a || n ? 1e3 * a + 1e3 * n : 1e3 }

        function i(a, n, t) {
            var i = ["animation-" + n, "-webkit-animation-" + n, "-moz-animation-" + n, "-o-animation-" + n, "-ms-animation-" + n],
                o = {}
            i.forEach(function(a) { o[a] = t + "s" }), a.css(o)
        }
        var o = a(this),
            e = o.find(".slick-list .slick-track > div"),
            s = o.find('[data-slick-index="0"]'),
            r = "animated",
            c = { opacity: "1" },
            d = { opacity: "0" }
        return e.each(function() {
            var e = a(this)
            e.find("[data-animation-in]").each(function() {
                var u = a(this)
                u.css(d)
                var l = u.attr("data-animation-in"),
                    f = u.attr("data-animation-out"),
                    h = u.attr("data-delay-in"),
                    m = u.attr("data-duration-in"),
                    y = u.attr("data-delay-out"),
                    C = u.attr("data-duration-out")
                f ? (s.length > 0 && e.hasClass("slick-current") && (n(u, c, l, r, !0), h && i(u, "delay", h), m && i(u, "duration", m), setTimeout(function() { n(u, d, l, r), n(u, c, f, r), y && i(u, "delay", y), C && i(u, "duration", C) }, t(h, m))), o.on("afterChange", function(a, o, s) { e.hasClass("slick-current") && (n(u, c, l, r, !0), h && i(u, "delay", h), m && i(u, "duration", m), setTimeout(function() { n(u, d, l, r), n(u, c, f, r), y && i(u, "delay", y), C && i(u, "duration", C) }, t(h, m))) }), o.on("beforeChange", function(a, t, i) { n(u, d, f, r, !0) })) : (s.length > 0 && e.hasClass("slick-current") && (n(u, c, l, r, !0), h && i(u, "delay", h), m && i(u, "duration", m)), o.on("afterChange", function(a, t, o) { e.hasClass("slick-current") && (n(u, c, l, r, !0), h && i(u, "delay", h), m && i(u, "duration", m)) }), o.on("beforeChange", function(a, t, i) { n(u, d, l, r, !0) }))
            })
        }), this
    }
}(jQuery);

(function($, window){
    var arrowWidth = 25;
    $.fn.resizeselect = function(settings) {  
      return this.each(function() { 
        $(this).change(function(){
          var $this = $(this);
          var text = $this.find("option:selected").text();
          var $test = $("<span>").html(text).css({
              "font-size": $this.css("font-size"), // ensures same size text
              "visibility": "hidden"               // prevents FOUC
          });
          $test.appendTo($this.parent());
          var width = $test.width();
          $test.remove();
          $this.width(width + arrowWidth);
        }).change();
  
      });
    };
    $("select.resizeselect").resizeselect();                       
  
  })(jQuery, window);

jQuery(document).ready(function($) {

    'use strict';
    var readmore = 'readmore',
        defaults = {
            speed: 100,
            collapsedHeight: 100,
            collapsedMoreHeight: 150, // add an Even More informations Height
            heightMargin: 16,
            moreLink: '<a href="#">More informations</a>',
            evenMoreLink: '<a href="#">Even more informations</a>', // add new label
            lessLink: '<a href="#">Close</a>',
            embedCSS: true,
            blockCSS: 'display: block; width: 100%;',
            startOpen: false,
            blockProcessed: function() {},
            beforeToggle: function() {},
            afterToggle: function() {}
        },
        cssEmbedded = {},
        uniqueIdCounter = 0;
    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this,
                args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) {
                    func.apply(context, args);
                }
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) {
                func.apply(context, args);
            }
        };
    }
    function uniqueId(prefix) {
        var id = ++uniqueIdCounter;
        return String(prefix == null ? 'rmjs-' : prefix) + id;
    }
    function setBoxHeights(element) {
        var el = element.clone().css({
                height: 'auto',
                width: element.width(),
                maxHeight: 'none',
                overflow: 'hidden'
            }).insertAfter(element),
            expandedHeight = el.outerHeight(),
            cssMaxHeight = parseInt(el.css({
                maxHeight: ''
            }).css('max-height').replace(/[^-\d\.]/g, ''), 10),
            defaultHeight = element.data('defaultHeight');
        el.remove();
        var collapsedHeight = cssMaxHeight || element.data('collapsedHeight') || defaultHeight;
        element.data({
                expandedHeight: expandedHeight,
                maxHeight: cssMaxHeight,
                collapsedHeight: collapsedHeight
            })
            .css({
                maxHeight: 'none'
            });
    }
    var resizeBoxes = debounce(function() {
        $('[data-readmore]').each(function() {
            var current = $(this),
                isExpanded = (current.attr('aria-expanded') === 'true');
            setBoxHeights(current);
            if (isExpanded) {
                current.css({
                    height: current.data('expandedHeight')
                });
            }
        });
    }, 100);
    function embedCSS(options) {
        if (!cssEmbedded[options.selector]) {
            var styles = ' ';
            if (options.embedCSS && options.blockCSS !== '') {
                styles += options.selector + ' + [data-readmore-toggle], ' +
                    options.selector + '[data-readmore]{' +
                    options.blockCSS +
                    '}';
            }
            // Include the transition CSS even if embedCSS is false
            styles += options.selector + '[data-readmore]{' +
                'transition: height ' + options.speed + 'ms;' +
                'overflow: hidden;' +
                '}';
            (function(d, u) {
                var css = d.createElement('style');
                css.type = 'text/css';
                if (css.styleSheet) {
                    css.styleSheet.cssText = u;
                } else {
                    css.appendChild(d.createTextNode(u));
                }
                d.getElementsByTagName('head')[0].appendChild(css);
            }(document, styles));
            cssEmbedded[options.selector] = true;
        }
    }
    function Readmore(element, options) {
        this.element = element;
        this.options = $.extend({}, defaults, options);
        embedCSS(this.options);
        this._defaults = defaults;
        this._name = readmore;
        this.init();
        if (window.addEventListener) {
            window.addEventListener('load', resizeBoxes);
            window.addEventListener('resize', resizeBoxes);
        } else {
            window.attachEvent('load', resizeBoxes);
            window.attachEvent('resize', resizeBoxes);
        }
    }
    Readmore.prototype = {
        init: function() {
            var current = $(this.element);
            current.data({
                defaultHeight: this.options.collapsedHeight,
                heightMargin: this.options.heightMargin
            });
            setBoxHeights(current);
            var collapsedHeight = current.data('collapsedHeight'),
                heightMargin = current.data('heightMargin');
            if (current.outerHeight(true) <= collapsedHeight + heightMargin) {
                if (this.options.blockProcessed && typeof this.options.blockProcessed === 'function') {
                    this.options.blockProcessed(current, false);
                }
                return true;
            } else {
                var id = current.attr('id') || uniqueId(),
                    useLink = this.options.startOpen ? this.options.lessLink : this.options.moreLink;
                current.attr({
                    'data-readmore': '',
                    'aria-expanded': this.options.startOpen,
                    'id': id
                });
                current.after($(useLink)
                    .on('click', (function(_this) {
                        return function(event) {
                            _this.toggle(this, current[0], event);
                        };
                    })(this))
                    .attr({
                        'data-readmore-toggle': id,
                        'aria-controls': id
                    }));
                if (!this.options.startOpen) {
                    current.css({
                        height: collapsedHeight
                    });
                }
                if (this.options.blockProcessed && typeof this.options.blockProcessed === 'function') {
                    this.options.blockProcessed(current, true);
                }
            }
        },
        toggle: function(trigger, element, event) {
            if (event) {
                event.preventDefault();
            }
            if (!trigger) {
                trigger = $('[aria-controls="' + this.element.id + '"]')[0];
            }
            if (!element) {
                element = this.element;
            }
            var $element = $(element),
                newHeight = '',
                newLink = '',
                expanded = false,
                collapsedHeight = $element.data('collapsedHeight'),
                collapsedMoreHeight = this.options.collapsedMoreHeight;
            if ($element.data('expandedHeight') <= collapsedMoreHeight) {
                if ($element.height() <= collapsedHeight) {
                    newHeight = $element.data('expandedHeight') + 'px';
                    newLink = 'lessLink';
                    expanded = true;
                } else {
                    newHeight = collapsedHeight;
                    newLink = 'moreLink';
                }
            } else {
                if ($element.height() <= collapsedHeight) {
                    newHeight = collapsedMoreHeight;
                    newLink = 'evenMoreLink';
                    expanded = false;
                } else if ($element.height() > collapsedHeight && $element.height() <= collapsedMoreHeight) {
                    newHeight = $element.data('expandedHeight') + 'px';
                    newLink = 'lessLink';
                    expanded = true;
                } else {
                    newHeight = collapsedHeight;
                    newLink = 'moreLink';
                }
            }
            if (this.options.beforeToggle && typeof this.options.beforeToggle === 'function') {
                this.options.beforeToggle(trigger, $element, !expanded);
            }
            $element.css({
                'height': newHeight
            });
            $element.on('transitionend', (function(_this) {
                return function() {
                    if (_this.options.afterToggle && typeof _this.options.afterToggle === 'function') {
                        _this.options.afterToggle(trigger, $element, expanded);
                    }
                    $(this).attr({
                        'aria-expanded': expanded
                    }).off('transitionend');
                }
            })(this));
            $(trigger).replaceWith($(this.options[newLink])
                .on('click', (function(_this) {
                    return function(event) {
                        _this.toggle(this, element, event);
                    };
                })(this))
                .attr({
                    'data-readmore-toggle': $element.attr('id'),
                    'aria-controls': $element.attr('id')
                }));
        },
        destroy: function() {
            $(this.element).each(function() {
                var current = $(this);
                current.attr({
                        'data-readmore': null,
                        'aria-expanded': null
                    })
                    .css({
                        maxHeight: '',
                        height: ''
                    })
                    .next('[data-readmore-toggle]')
                    .remove();
                current.removeData();
            });
        }
    };
    $.fn.readmore = function(options) {
        var args = arguments,
            selector = this.selector;
        options = options || {};
        if (typeof options === 'object') {
            return this.each(function() {
                if ($.data(this, 'plugin_' + readmore)) {
                    var instance = $.data(this, 'plugin_' + readmore);
                    instance.destroy.apply(instance);
                }
                options.selector = selector;
                $.data(this, 'plugin_' + readmore, new Readmore(this, options));
            });
        } else if (typeof options === 'string' && options[0] !== '_' && options !== 'init') {
            return this.each(function() {
                var instance = $.data(this, 'plugin_' + readmore);
                if (instance instanceof Readmore && typeof instance[options] === 'function') {
                    instance[options].apply(instance, Array.prototype.slice.call(args, 1));
                }
            });
        }
    };
});

jQuery(document).ready(function($) {

    var $allVideos = $("iframe[src^='//www.youtube.com']"),
        $fluidEl = $(".vnt_the_content");
        
    $allVideos.each(function() {
        $(this).data('aspectRatio', this.height / this.width).removeAttr('height').removeAttr('width');
    });
    $(window).resize(function() {
        var newWidth = $fluidEl.width();
        $allVideos.each(function() {
            var $el = $(this);
            $el.width(newWidth).height(newWidth * $el.data('aspectRatio'));
        });
    }).resize();

    $(".read-more").on("click", function() {
        var text_more;
        var content_collapse = $(this).data("target");
        var text_close = $("[data-collapse=" + content_collapse + "]").data("text-close");
        if (!$(this).hasClass('collapse-open')) {
            $(this).data("text-more", $(this).html());
            text_more = $(this).data("text-more");
            $(this).addClass('collapse-open');
            $(this).html(text_close);
            $("[data-collapse=" + content_collapse + "]").slideDown(10);
        } else {
            text_more = $(this).data("text-more");
            $(this).html(text_more);
            $(this).removeClass('collapse-open');
            $("[data-collapse=" + content_collapse + "]").slideUp(10);
        }
    });

    if ($(".vnt_the_content")[0]) {
        $('.woocommerce.vnt_the_content').readmore({
            speed: 500,
            collapsedHeight: 600,
            collapsedMoreHeight: 9999,
            moreLink: '<a class="xem_them" href="#"><span>Xem thêm <i title="fa-angle-down" class="fa-angle-down" style=""></i></span></a>',
            evenMoreLink: '<a class="xem_them" href="#"><span>Xem thêm <i title="fa-angle-down" class="fa-angle-down" style=""></i></span></a>',
            lessLink: '<a href="#" class="thu_gon"><span>Thu gọn <i title="fa-angle-up" class="fa-angle-up" style=""></i></span></a>'
        });
    }

    var TabBlock = {
        s: {
            animLen: 200
        },
        init: function() {
            TabBlock.bindUIActions();
            TabBlock.hideInactive();
        },
        bindUIActions: function() {
            $('.vntabs_nav').on('click', '.vntabs_nav_item', function(){
                TabBlock.switchTab($(this));
            });
        },
        hideInactive: function() {
            var $tabBlocks = $('.vntabs');
            $tabBlocks.each(function(i) {
                var 
                    $tabBlock = $($tabBlocks[i]),
                    $panes = $tabBlock.find('.vntabs_cont'),
                    $activeTab = $tabBlock.find('.vntabs_nav_item.is-active');
                    // $panes.hide();
                    $($panes[$activeTab.index()]).addClass('active');
                    $($panes[0]).addClass('active');
            });
            var $tabNavs = $('.vntabs');
            $tabNavs.each(function(i) {
                var 
                $tabNav = $($tabNavs[i]),
                $nav = $tabNav.find('.vntabs_nav_item');
                $($nav[0]).addClass('is-active');
            });
        },
        switchTab: function($tab) {
            var $context = $tab.closest('.vntabs');
            if (!$tab.hasClass('is-active')) {
                $tab.siblings().removeClass('is-active');
                $tab.addClass('is-active');
    
                TabBlock.showPane($tab.index(), $context);
            }
         },
        showPane: function(i, $context) {
            var $panes = $context.find('.vntabs_cont');
            $panes.removeClass('active');
            $($panes[i]).addClass('active');
        }
    };
    $(function() {
        TabBlock.init();
    });

    if ($(".vnt_slick")[0]) {
        $('.vnt_slick').slick({
            nextArrow: '<button type="button" class="slick-next"><i class="sl-arrow-right"></i></button>',
            prevArrow: '<button type="button" class="slick-prev"><i class="sl-arrow-left"></i></button>',
            customPaging: function(slider, i) {
                return '<button type="button" role="tab" class="dots"></button>';
            }
        }).slickAnimation();
		$('.vnt_slick').fancybox({
			selector: '.slick-slide:not(.slick-cloned) a',
		});
    }

    // $('.vnt_gallery').fancybox({
    //     selector: '.slick-slide:not(.slick-cloned) a',
    // });

    
    var vnt_width = $(window).width();

    var HeaderHeight = document.getElementById('main_header').clientHeight;
    $("#main_header").css('height', HeaderHeight + "px");

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > HeaderHeight/2) {
            $(".header_cont").addClass("active").slideDown();
            
        } else {
            $(".header_cont").removeClass("active");
        }
    });
	
	$(' a[href^="#"]').click(function() {
		if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') || location.hostname === this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top,
				}, 1000);
				return false;
			}
		}
	});


    if ($("#footer_link")[0]) {
        var acc = document.getElementsByClassName("accordion");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    }
    
	var backtop = $('#back_top');
	$(window).scroll(function() {
		if ($(window).scrollTop() > 300) {
			backtop.addClass('show');
		} else {
			backtop.removeClass('show');
		}
	});
	backtop.on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({scrollTop:0}, '300');
	});

    if(vnt_width > 1024) {

        if ($(".single_gallery")[0]){
            var zoomSingle = {
                constrainType:"height",
                constrainSize: 200,
                zoomType: "lens",
                lensShape : "round",
                containLensZoom: true,
                cursor: 'zoom-in',
                scrollZoom: true
            };
            $(".single_gallery").elevateZoom(zoomSingle);
        }

        
        if ($(".slick_zoom")[0]){
            var zoomOptions = {
                constrainType:"height",
                constrainSize: 200,
                zoomType: "lens",
                lensShape : "round",
                containLensZoom: true,
                cursor: 'zoom-in',
                scrollZoom: true
            };
            $(".slick_img .slick-current img").elevateZoom(zoomOptions);
            $(".slick_img").on("beforeChange", function (event, slick, currentSlide, nextSlide) {
                $.removeData(currentSlide, "elevateZoom");
                $(".zoomContainer").remove();
            });
            $(".slick_img").on("afterChange", function () {
                $(".slick_img .slick-current img").elevateZoom(zoomOptions);
            });
        }
        
    }
    if(vnt_width < 1025) {
// 		var HeaderHeight = document.getElementById('main_header').clientHeight;
// 		$("body.kc-css-system").css('padding-top', HeaderHeight + "px");
        $('#nav_header').treemenu({
            delay: 200,
            openActive: false,
            activeSelector: 'must-be-opened'
        });
    }

    if(vnt_width < 990) { 

    }
    
});