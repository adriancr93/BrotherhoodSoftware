jQuery(document).ready(function () {
    "type script"

    if (typeof kc_front !== 'undefined') {
        var $ = jQuery;
        $('.opened').fadeOut();
        $('.opener a').on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            var p = $(e.target).parents('.opener');
            if(p.hasClass( "open" )) {
                p.parent().find('.opened').fadeOut();
                p.removeClass("open");
            } else {
                p.parent().find('.opened').fadeIn();
                p.addClass("open");
            }
        });


        kc_front.lazy_grid_event = function ($wrp) {
            var lazy = $wrp.find('.lazyload');
            if (lazy.length) {
                lazy.on('lazyloaded', function () {
                    $wrp.isotope();
                });
            }
        };
        kc_front.sl_carousel_images = function (wrp) {
            $('.sl-carousel-images').each(function (index) {
                if ($(this).data('loaded') === true)
                    return;
                else $(this).data({'loaded': true});
                var options = $(this).data('owl-i-options'),
                    _autoplay = ( 'yes' === options.autoplay ),
                    _delay = ( options.delay !== undefined ) ? options.delay : 8,
                    _navigation = ( 'yes' === options.navigation ),
                    _navigationText = options.navigationText,
                    _pagination = ( 'yes' === options.pagination ),
                    _speed = options.speed,
                    _items = options.items,
                    _auto_height = ( 'yes' === options.autoheight ),
                    _num_thumb = ( options.num_thumb !== undefined ) ? options.num_thumb : 5,
                    _show_thumb = ( 'yes' === options.showthumb ),
                    _progress_bar = ( 'yes' === options.progressbar ),
                    _singleItem = false,
                    _tablet = false,
                    _mobile = false,
                    _lazyLoad = ( 'yes' === options.lazyLoad ),
                    _stopOnHover = ( 'yes' === options.stopOnHover ),
                    _auto_play = false;
                if (options.tablet > 0) {
                    _tablet = [999, options.tablet];
                }
                if (options.mobile > 0) {
                    _mobile = [479, options.mobile];
                }
                var progressBar = function () {
                };
                var moved = function () {
                    $(this).trigger('ssc.owl.moved');
                };
                var pauseOnDragging = function () {
                };
                if (true === _auto_height || true === _progress_bar || true === _show_thumb)
                    _singleItem = true;
                if (_autoplay)
                    _auto_play = parseInt(_delay) * 1000;
                if (true === _progress_bar) {
                    var time = _delay; // time in seconds
                    var $progressBar,
                        $bar,
                        $elem,
                        isPause,
                        tick,
                        percentTime;
                    progressBar = function (elem) {
                        $elem = elem;
                        buildProgressBar();
                        start();
                    };
                    var buildProgressBar = function () {
                        $progressBar = $("<div>", {
                            class: "progressBar"
                        });
                        $bar = $("<div>", {
                            class: "bar"
                        });
                        $progressBar.append($bar).prependTo($elem);
                    };
                    var start = function () {
                        //reset timer
                        percentTime = 0;
                        isPause = false;
                        //run interval every 0.01 second
                        tick = setInterval(interval, 10);
                    };
                    var interval = function () {
                        if (isPause === false) {
                            percentTime += 1 / time;

                            $bar.css({
                                width: percentTime + "%"
                            });
                            if (percentTime >= 100) {
                                //slide to next item
                                $elem.trigger('owl.next');
                            }
                        }
                    };
                    pauseOnDragging = function () {
                        isPause = true;
                    };
                    moved = function () {
                        //clear interval
                        clearTimeout(tick);
                        //start again
                        start();
                        this.trigger('ssc.owl.moved');
                    };
                }
                if (true !== _show_thumb) {
                    $(this).owlCarousel({
                        autoPlay: _auto_play,
                        navigation: _navigation,
                        pagination: _pagination,
                        slideSpeed: _speed,
                        paginationSpeed: _speed,
                        singleItem: _singleItem,
                        autoHeight: _auto_height,
                        items: _items,
                        itemsDesktop: false,
                        itemsDesktopSmall: false,
                        itemsTablet: _tablet,
                        itemsTabletSmall: _tablet,
                        itemsMobile: _mobile,
                        navigationText: false,
                        lazyLoad: _lazyLoad,
                        stopOnHover: _stopOnHover,
                        afterInit: progressBar,
                        afterMove: moved,
                        startDragging: pauseOnDragging
                    });
                }
                else {
                    var sync1 = $(this);
                    var sync2 = sync1.next('.kc-sync2');
                    var syncPosition = function (el) {
                        var current = this.currentItem;
                        $(sync2)
                            .find(".owl-item")
                            .removeClass("synced")
                            .eq(current)
                            .addClass("synced");
                        if ($(sync2).data("owlCarousel") !== undefined) {
                            center(current);
                        }
                    };
                    sync2.on("click", ".owl-item", function (e) {
                        e.preventDefault();

                        var number = $(this).data("owlItem");
                        sync1.trigger("owl.goTo", number);
                    });
                    var center = function (number) {
                        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
                        var num = number;
                        var found = false;
                        for (var i in sync2visible) {
                            if (num === sync2visible[i]) {
                                found = true;
                            }
                        }
                        if (found === false) {
                            if (num > sync2visible[sync2visible.length - 1]) {
                                sync2.trigger("owl.goTo", num - sync2visible.length + 2);
                            } else {
                                if (num - 1 === -1) {
                                    num = 0;
                                }
                                sync2.trigger("owl.goTo", num);
                            }
                        }
                        else if (num === sync2visible[sync2visible.length - 1]) {
                            sync2.trigger("owl.goTo", sync2visible[1]);
                        }
                        else if (num === sync2visible[0]) {
                            sync2.trigger("owl.goTo", num - 1);
                        }
                    };
                    sync1.owlCarousel({
                        autoPlay: _auto_play,
                        singleItem: _singleItem,
                        slideSpeed: _speed,
                        paginationSpeed: _speed,
                        navigation: _navigation,
                        pagination: _pagination,
                        afterAction: syncPosition,
                        responsiveRefreshRate: 200,
                        autoHeight: _auto_height,
                        navigationText: false,
                        lazyLoad: _lazyLoad,
                        stopOnHover: _stopOnHover,
                        afterInit: progressBar,
                        afterMove: moved,
                        startDragging: pauseOnDragging
                    });

                    sync2.owlCarousel({
                        items: _num_thumb,
                        itemsDesktop: [1199, 15],
                        itemsDesktopSmall: [979, 12],
                        itemsTablet: [768, 6],
                        itemsMobile: [479, 5],
                        pagination: _pagination,
                        responsiveRefreshRate: 100,
                        afterInit: function (el) {
                            el.find(".owl-item").eq(0).addClass("synced");
                        }
                    });
                }

            });

            kc_front.pretty_photo();

        };

        kc_front.sl_carousel_images();

        kc_front.owl_slider = function () {

            if (typeof $().owlCarousel !== 'function')
                return;

            $('[data-ssc-owl-options], [data-owl-options]').each(function (index) {
                console.log($(this));
                var sync1 = $(this),
                    cont = sync1.closest('.ssc_carousel'),
                    thumb = cont.find('.kc-tabs-slider-nav'),
                    afterAction = false;

                var options = $(this).data('ssc-owl-options') || $(this).data('owl-options');

                if (typeof options !== 'object')
                    return;

                if ($(this).data('loaded') === true)
                    return;
                else $(this).data({'loaded': true});

                $(this).attr({'data-ssc-owl-options': null});
                $(this).attr({'data-owl-options': null});

                if (sync1.closest('.ssc_carousel').hasClass('template-5') || sync1.closest('.ssc_carousel').hasClass('template-6')) {
                    var sync2 = sync1.parents('.ssc_carousel').find('.kc-tabs-slider-nav'),
                        slidesToShow = 3,
                        lis = sync2.find('li');
                    if (lis.length > 5) {
                        slidesToShow = 5;
                    }
                    sync2.slick({
                        centerMode: true,
                        arrows: false,
                        variableWidth: true,
                        slidesToShow: slidesToShow,
                        responsive: [
                            {
                                breakpoint: 768,
                                settings: {
                                    arrows: false,
                                    centerMode: true,
                                    slidesToShow: 3
                                }
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    arrows: false,
                                    centerMode: true,
                                    slidesToShow: 3
                                }
                            }
                        ]
                    });

                    var syncPosition = function (el) {
                        var current = this.currentItem;

                        $(this).parent().find('.kc-title-active').removeClass('kc-title-active');
                        sync2.slick('slickGoTo', current);

                    };
                    sync2.on('afterChange', function (event, slick, currentSlide) {
                        sync1.trigger('owl.goTo', currentSlide);
                    });
                    afterAction = syncPosition;
                }

                var _items = ( options.items !== undefined ) ? options.items : 1,
                    _tablet = ( options.tablet !== undefined ) ? options.tablet : 1,
                    _mobile = ( options.mobile !== undefined ) ? options.mobile : 1,
                    _autoplay = ( 'yes' === options.autoPlay ),
                    _autoheight = ( 'yes' === options.autoHeight ),
                    _speed = ( options.speed !== undefined ) ? options.speed : 450,
                    _singleItem = false;

                var moved = function () {
                    sync1.trigger('ssc.owl.moved');
                };
                if (_autoheight === true) {
                    _singleItem = true;
                    _items = 1;
                }
                sync1.owlCarousel({
                    // Most important owl features
                    items: _items,
                    itemsDesktop: [1199, _items],
                    itemsDesktopSmall: [980, _tablet],
                    itemsTablet: [640, _mobile],
                    itemsTabletSmall: false,
                    itemsMobile: [480, _mobile],
                    singleItem: _singleItem,
                    slideSpeed: _speed,
                    paginationSpeed: _speed,
                    autoPlay: _autoplay,
                    stopOnHover: ( 'yes' === options.stopOnHover ),
                    navigation: ( 'yes' === options.navigation ),
                    navigationText: ( options.navigationText !== undefined ) ? options.navigationText : undefined,
                    pagination: ( 'yes' === options.pagination ),
                    lazyLoad: ( 'yes' === options.lazyLoad ),
                    autoHeight: _autoheight,
                    transitionStyle: false,
                    addClassActive: false,
                    beforeInit: false,
                    afterInit: false,
                    beforeMove: false,
                    afterMove: moved,
                    afterAction: afterAction,
                    startDragging: false
                });
            });
            kc_front.pretty_photo();
        };
        kc_front.ssc_svg_refresh = function (wrp) {
            var svg_wrps = wrp.find('[data-ssc-svg]'),
                svg,
                img_s,
                anim;
            if (svg_wrps.length) {
                svg_wrps.each(function (index, div) {
                    div = $(div);
                    svg = div.data('ssc-svg');
                    img_s = div.data('ssc-img-s') !== undefined ? div.data('ssc-img-s') : '';
                    anim = div.data('ssc-img-anim') !== undefined ? div.data('ssc-img-anim') : '';
                    if (svg) {
                        $.get(top.kc_ajax_url, {action: "ssc_get_svg", id: svg, img_s: img_s, anim: anim})
                            .success(function (data) {
                                if (data) {
                                    div.html(data);
                                }
                            });
                    }
                });
            }
        };
        kc_front.ssc_slick_get_options = function (options) {
            var _slidesToShow = ( options.slidesToShow !== undefined ) ? parseInt(options.slidesToShow) : 4,
                _slidesToScroll = ( options.slidesToScroll !== undefined ) ? parseInt(options.slidesToScroll) : 4,
                _dots = ( true === options.dots ),
                _prevArrow = ( options.prevArrow !== '' ) ? options.prevArrow : "",
                _nextArrow = ( options.nextArrow !== '' ) ? options.nextArrow : "",
                _tabletBreakpoint = ( options.tabletBreakpoint !== undefined ) ? parseInt(options.tabletBreakpoint) : 769,
                _tabletSlidesToShow = ( options.tabletSlidesToShow !== undefined ) ? parseInt(options.tabletSlidesToShow) : 4,
                _mobileBreakpoint = ( options.mobileBreakpoint !== undefined ) ? parseInt(options.mobileBreakpoint) : 480,
                _mobileSlidesToShow = ( options.mobileSlidesToShow !== undefined ) ? parseInt(options.mobileSlidesToShow) : 2;
            return {
                slidesToShow: _slidesToShow,
                slidesToScroll: _slidesToScroll,
                dots: _dots,
                prevArrow: _prevArrow,
                nextArrow: _nextArrow,
                responsive: [
                    {
                        breakpoint: _tabletBreakpoint,
                        settings: {
                            slidesToShow: _tabletSlidesToShow,
                            slidesToScroll: _slidesToScroll
                        }
                    },
                    {
                        breakpoint: _mobileBreakpoint,
                        settings: {
                            slidesToShow: _mobileSlidesToShow,
                            slidesToScroll: _slidesToScroll
                        }
                    }
                ]
            };
        };

        kc_front.ssc_slick = function (wrp) {
            $('.ssc-slick').each(function (index) {
                var options = $(this).data('ssc-slick-settings');
                if (typeof options !== 'object')
                    return;
                if ($(this).data('loaded') === true)
                    return;
                else $(this).data({'loaded': true});
                var filter = $(this).parent().find('.filter'),
                    fgroup = $(this).parent().find('.fgroup');
                $(this).attr({'data-ssc-slick-settings': null});
                $(this).slick(kc_front.ssc_slick_get_options(options));
                if (filter !== undefined) {
                    filter.on("click", "button", function () {
                        var slider = filter.next('[data-ssc-grid-type]');
                        if (slider.length === 0)
                            return;
                        slider.slick("slickUnfilter");
                        var filterValue = $(this).attr("data-filter");
                        slider.slick("slickFilter", filterValue);
                    });
                }
                if (fgroup !== undefined) {
                    fgroup.on("click", "button", function () {
                        fgroup.find(".current").removeClass("current");
                        $(this).addClass("current");
                    });
                }
            });
            // $(".filter").on("click", "button", function(){
            //    var slider = $( this ).closest('.filter').next('[data-ssc-grid-type]');
            //    if(slider.length === 0)
            //        return;
            //    slider.slick("slickUnfilter");
            //    var filterValue = $( this ).attr("data-filter");
            //    slider.slick("slickFilter", filterValue);
            // });
            // $(".filter").each( function( i, buttonGroup ) {
            //    var $buttonGroup = $( buttonGroup );
            //    $buttonGroup.on( "click", "button", function() {
            //        var slider = $buttonGroup.next('[data-ssc-grid-type]');
            //        if(slider.length === 0)
            //            return;
            //        slider.slick("slickUnfilter");
            //        var filterValue = $( this ).attr("data-filter");
            //        slider.slick("slickFilter", filterValue);
            //    });
            // });
            // $(".fgroup").each( function( i, buttonGroup ) {
            // var $buttonGroup = $( buttonGroup );
            // $buttonGroup.on( "click", "button", function() {
            // 	$buttonGroup.find(".current").removeClass("current");
            // 	$( this ).addClass("current");
            // });
            // });
        };

        kc_front.ssc_slick();

        kc_front.ssc_isotope = function () {
            $(".grid").each(function (i) {
                if ($(this).data('loaded') === true)
                    return;
                else $(this).data({'loaded': true});
                var $grid = $(this),
                    options = $grid.data('ssc-grid-settings');

                if (typeof options !== 'object')
                    return;

                var filter = $grid.parent().find('.filter'),
                    fgroup = $grid.parent().find('.fgroup'),
                    layoutMode = (options.layoutMode !== undefined) ? options.layoutMode : 'fitRows';

                $grid.attr({'data-ssc-grid-settings': null});

                $grid.isotope({
                    itemSelector: '.grid-item',
                    layoutMode: layoutMode
                });
                $grid.imagesLoaded().progress( function() {
                    $grid.isotope("layout");
                });
                if (filter !== undefined) {
                    filter.on("click", "button", function () {
                        var filterValue = $(this).attr("data-filter");
                        $grid.isotope({filter: filterValue});
                    });
                }
                if (fgroup !== undefined) {
                    fgroup.on("click", "button", function () {
                        fgroup.find(".current").removeClass("current");
                        $(this).addClass("current");
                    });
                }
                kc_front.lazy_grid_event($grid);
                $(this).data({'loaded': false});
            });
        };
        kc_front.ssc_isotope();

        kc_front.ssc_masonry = function () {
            $(".masonry").each(function (i) {
                if ($(this).data('loaded') === true)
                    return;
                else $(this).data({'loaded': true});

                var $containerm = $(this),
                    options = $containerm.data('ssc-masonry-settings');

                if (typeof options !== 'object')
                    return;

                var filter = $containerm.parent().find('.filter'),
                    fgroup = $containerm.parent().find('.fgroup'),
                    layoutMode = (options.layoutMode !== undefined) ? options.layoutMode : "masonry";

                $containerm.attr({'data-ssc-masonry-settings': null});

                $containerm.isotope({
                    itemSelector: ".grid-item",
                    layoutMode: layoutMode,
                    masonry: {
                        columnWidth: ".grid-item",
                        horizontalOrder: true
                    }
                });
                $containerm.imagesLoaded().progress( function() {
                    $containerm.isotope("layout");
                });
                if (filter !== undefined) {
                    filter.on("click", "button", function () {
                        var filterValue = $(this).attr("data-filter");
                        $containerm.isotope({filter: filterValue});
                    });
                }
                if (fgroup !== undefined) {
                    fgroup.on("click", "button", function () {
                        fgroup.find(".current").removeClass("current");
                        $(this).addClass("current");
                    });
                }
                kc_front.lazy_grid_event($containerm);
                $(this).data({'loaded': false});
            });
        };
        kc_front.ssc_masonry();

        kc_front.ssc_carousel_controls = {

            activeClass: 'active',
            init: function () {
                var wrap = $('.ssc-carousel-controls'),
                    i = this;

                wrap.each(function (index) {

                    var w = $(this),
                        sect = w.closest('section'),
                        sets = {
                            wrap: w,
                            dots: w.find('.control-dots'),
                            dotsList: w.find('ul')
                        };

                    if (!sect.length)
                        return;

                    var owl = sect.find('.owl-carousel'),
                        slick = sect.find('.slick-slider:first');
                    if (owl.length) {
                        sets.owl = owl;
                        i.owlControls.init(sets);
                    } else if (slick.length) {
                        sets.slick = slick;
                        i.slickControls.init(sets);
                    }
                });

            },

            addDot: function (ul, atts) {
                ul.append('<li ' + atts.join(' ') + ' ><span></span></li>');
            },

            owlControls: {
                init: function (sets) {
                    this.parent = kc_front.ssc_carousel_controls;
                    this.owl = sets.owl;
                    this.dots = sets.dots;
                    this.dotsList = sets.dotsList;
                    this.wrap = sets.wrap;
                    // dotsCount = this.owl.children('.kc_tab').length;
                    this.addDots();
                    this.addEvents();
                },

                addDots: function () {
                    var atts = [];
                    for (var i = 0; i < this.getDotCount(); i++) {
                        atts = [];
                        // if(!i)
                        //     atts.push('class="'+this.activeClass+'"');
                        atts.push('data-slide-number="' + i + '"');
                        this.parent.addDot(this.dotsList, atts);
                    }
                    this.dotsList.find("li").first().addClass(this.parent.activeClass);
                },

                addEvents: function () {
                    var i = this,
                        dotsList = i.dotsList,
                        owl = this.owl;
                    this.wrap.on('click', 'button', function (e) {
                        if ($(this).hasClass('control-prev')) {
                            owl.trigger('owl.prev');
                        }
                        if ($(this).hasClass('control-next')) {
                            owl.trigger('owl.next');
                        }
                    });
                    this.dots.on('click', 'li', function (e) {
                        if ($(this).hasClass(i.parent.activeClass))
                            return;
                        dotsList.find('li').removeClass(i.parent.activeClass);
                        $(this).addClass(i.parent.activeClass);
                        owl.trigger('owl.jumpTo', Number($(this).data('slide-number')));
                    });
                    owl.on('ssc.owl.moved', function (e) {
                        dotsList.find('li').removeClass('active');
                        dotsList.find('li[data-slide-number="' + $(this).data('owlCarousel').currentItem + '"]').addClass('active');
                    });
                },

                getDotCount: function () {
                    return this.owl.children('.kc_tab').length;
                }

            },

            slickControls: {
                init: function (sets) {
                    var options = sets.slick.data('sscSlickSettings') || {};
                    if (options === {}) {
                        return;
                    }

                    this.parent = kc_front.ssc_carousel_controls;
                    this.slick = sets.slick;
                    this.dots = sets.dots;
                    this.dotsList = sets.dotsList;
                    this.wrap = sets.wrap;
                    this.options = kc_front.ssc_slick_get_options(options);
                    this.options.infinite = !0;
                    this.slideCount = this.slick.find('.slick-slide:not(.slick-cloned)').length;

                    if (0 === this.options.slidesToShow || 0 === this.slideCount)
                        return;
                    this.addDots();
                    this.addEvents();

                },

                addDots: function (slickSettings) {
                    var atts = [];
                    for (i = 0; i <= this.getDotCount(); i += 1) {
                        atts = [];
                        atts.push('data-slide-number="' + Number(i * this.options.slidesToScroll) + '"');
                        this.parent.addDot(this.dotsList, atts);
                    }
                    this.dotsList.find("li").first().addClass(this.parent.activeClass);
                },

                addEvents: function () {
                    var i = this,
                        dotsList = i.dotsList,
                        activeClass = i.parent.activeClass,
                        slick = i.slick;
                    this.wrap.on('click', 'button', function (e) {
                        if ($(this).hasClass('control-prev')) {
                            slick.slick('slickPrev');
                        }
                        if ($(this).hasClass('control-next')) {
                            slick.slick('slickNext');
                        }
                    });
                    this.dots.on('click', 'li', function (e) {
                        if ($(this).hasClass(activeClass))
                            return;
                        dotsList.find('li').removeClass(activeClass);
                        $(this).addClass(activeClass);
                        slick.slick('slickGoTo', Number($(this).data('slide-number')));
                    });
                    slick.on('beforeChange', function (e, s, c, n) {
                        dotsList.find('li').removeClass(activeClass);
                        dotsList.find("li").eq(Math.floor(n / s.options.slidesToScroll)).addClass(activeClass);
                    });
                    slick.on('reInit', function (e, s) {
                        i.dotsList = dotsList;
                        i.slick = s;
                        i.options = s.options;
                        i.slideCount = s.slideCount;

                        i.updateDots();
                    });
                },

                updateDots: function () {
                    this.clearDots();
                    this.addDots();
                },

                clearDots: function () {
                    this.dotsList.html('');
                },

                getDotCount: function (slick) {
                    var i = this
                        , e = 0
                        , t = 0
                        , o = 0;
                    if (!0 === i.options.infinite)
                        if (i.slideCount <= i.options.slidesToShow)
                            ++o;
                        else
                            for (; e < i.slideCount;)
                                ++o,
                                    e = t + i.options.slidesToScroll,
                                    t += i.options.slidesToScroll <= i.options.slidesToShow ? i.options.slidesToScroll : i.options.slidesToShow;
                    else if (!0 === i.options.centerMode)
                        o = i.slideCount;
                    else if (i.options.asNavFor)
                        for (; e < i.slideCount;)
                            ++o,
                                e = t + i.options.slidesToScroll,
                                t += i.options.slidesToScroll <= i.options.slidesToShow ? i.options.slidesToScroll : i.options.slidesToShow;
                    else
                        o = 1 + Math.ceil((i.slideCount - i.options.slidesToShow) / i.options.slidesToScroll);
                    return o - 1
                }
            }
        };
        kc_front.ssc_carousel_controls.init();

        kc_front.ssc_particles = function () {
            $('.ssc-particles').each(function (i) {

                if ($(this).data('loaded') === true)
                    return;
                else $(this).data({'loaded': true});
                var particle = $(this),
                    id = particle.attr('id'),
                    options = particle.data('ssc-particles');

                if (typeof options !== 'object')
                    return;
                particle.attr({'data-ssc-particles': null});
                particlesJS(id, options, function () {
                });
                var lazy = particle.closest('section').find('.lazyload');
                if (lazy.length) {
                    lazy.on('lazyloaded', function () {
                        particlesJS(id, options, function () {
                        });
                    });
                }
            })
        };
        kc_front.ssc_particles();

        kc_front.ssc_hotspot = function () {
            $('.ssc-hotspot').each(function (i, hotspot) {
                // this.hotspot = $(hotspot);
                let buttons = $(this).find('.button');
                if( ! buttons.length ){
                    return;
                }
                let action = $(this).data('ssc-hotspot-action') !== undefined ? $(this).data('ssc-hotspot-action') : 'click';
                if ( 'click' === action ) {
                    $(this).on('click', '.button', function (e) {
                        let button = $(this),
                            hotspot = button.parents('.ssc-hotspot'),
                            popup = hotspot.find('.popup-' + button.data('ssc-hotspot-popup')),
                            popupStyles = $(popup).data('ssc-hotspot-popup-style');
                        if ( ! popup.length ) {
                            return;
                        }
                        if (popup.hasClass('opened')) {
                            // hotspot.find('.popup.opened').removeClass('opened');
                            popup.removeClass('opened');
                            return;
                        }
                        hotspot.find('.popup.opened').removeClass('opened');
                        if ( typeof popupStyles !== 'object' || jQuery(window).width() < 768 ) {
                            popupStyles = {"top":"5%","right":"0%","left":"0%","width":"100%"};
                        }
                        $(popup).addClass('opened').css(popupStyles);
                        popup.on('click', '.popup-close', function(){
                            $(this).parents('.popup.opened').removeClass('opened');
                        })
                    });
                } else if ( 'hover' === action ) {
                    $(this).on('hover', '.button', function (e) {
                        let button = $(this),
                            hotspot = button.parents('.ssc-hotspot'),
                            popup = hotspot.find('.popup-' + button.data('ssc-hotspot-popup')),
                            popupStyles = $(popup).data('ssc-hotspot-popup-style');
                        if ( ! popup.length ) {
                            return;
                        }
                        if (popup.hasClass('opened')) {
                            popup.removeClass('opened');
                            return;
                        }
                        hotspot.find('.popup.opened').removeClass('opened');
                        if ( typeof popupStyles !== 'object' || jQuery(window).width() < 768 ) {
                            popupStyles = {"top":"5%","right":"0%","left":"0%","width":"100%"};
                        }
                        $(popup).addClass('opened').css(popupStyles);
                    });
                }
            })
        };
        kc_front.ssc_hotspot();

        kc_front.switches = function(){

            $('.kc_tabs > .kc_wrapper.switcher-tabs').each( function( index ){

                if( $(this).data('loaded') === true )
                    return;
                else $(this).data({ 'loaded' : true });

                let $_this = $(this),
                    tab_group = $_this.parent('.kc_tabs.group'),
                    tab_event = ('yes' === tab_group.data('open-on-mouseover')) ? 'mouseover' : 'click',
                    effect_option = ('yes' === tab_group.data('effect-option')),
                    active_section = parseInt( tab_group.data('tab-active') )-1,
                    switchBtn = tab_group.find('.ssc-switch-btn');

                $( this ).find('>.ui-tabs-nav>div.ssc-switch-tab')
                    .off('click')
                    .on( 'click', function(e){
                        e.preventDefault();
                    } )
                    .off( tab_event )
                    .on( tab_event, function(e){

                        if( $(this).hasClass('ui-tabs-active') ){
                            e.preventDefault();
                            return;
                        }

                        let labels = $(this).closest('.kc_tabs_nav,.ui-tabs-nav').find('>div.ssc-switch-tab'),
                            index = labels.index( this ),
                            tab_list = $(this).closest('.kc_wrapper').find('>.kc_tab'),
                            new_panel = tab_list.eq( index );

                        labels.removeClass('ui-tabs-active');
                        $(this).addClass('ui-tabs-active');

                        tab_list.removeClass('ui-tabs-body-active').removeClass('kc-section-active');
                        new_panel.addClass('ui-tabs-body-active').addClass('kc-section-active');

                        if( effect_option === true)
                            new_panel.css({'opacity':0}).animate({opacity:1});

                        e.preventDefault();

                        if(index > active_section){
                            switchBtn.addClass('switch-next');
                        } else {
                            switchBtn.removeClass('switch-next');
                        }

                        $(this).closest('.kc_tabs').data({'tab-active':(index+1)});
                    }).eq( active_section ).trigger( tab_event );
                    switchBtn.click(function () {
                        $(this).toggleClass('switch-next');
                        if ($(this).hasClass('switch-next')) {
                            $(this).trigger('right.switch');
                        } else {
                            $(this).trigger('lift.switch');
                        }
                    });
                    switchBtn.on('right.switch', function (e) {
                        let current = $(e.currentTarget);
                        current.next('.ssc-switch-tab').trigger('click');
                    });
                    switchBtn.on('lift.switch', function (e) {
                        let current = $(e.currentTarget);
                        current.prev('.ssc-switch-tab').trigger('click');
                    });

            });

        };
        kc_front.switches();
    }

    $(function () {
    });
});

window.ssc_init_map = function () {
    let maps = document.getElementsByClassName('ssc-google-map');
    if (maps.length === 0) {
        return;
    }
    for (let i = 0; i < maps.length; i++) {
        try {
            let mapBlock = maps[i],
                mapParameters = JSON.parse(mapBlock.dataset.sscGoogleMapParameters);
            if ('object' !== typeof mapParameters) {
                console.error('Wrong map parameters');
                return;
            }
            let styles = JSON.parse(mapParameters.map.styles);
            if ('object' === typeof styles) {
                mapParameters.map.styles = styles;
            }
            let map = new google.maps.Map(mapBlock, mapParameters.map);
            for (let m in mapParameters.markers) {
                let marker = mapParameters.markers[m];
                marker.map = map;
                if (undefined !== marker.icon) {
                    // Shapes define the clickable region of the icon. The type defines an HTML
                    // <area> element 'poly' which traces out a polygon as a series of X,Y points.
                    // The final coordinate closes the poly by connecting to the first coordinate.
                    // let shape = {
                    //     coords: [1, 1, 1, 20, 18, 20, 18, 1],
                    //     type: 'poly'
                    // };
                    marker.icon.size = new google.maps.Size(marker.icon.size[0], marker.icon.size[1]);
                    marker.icon.origin = new google.maps.Point(marker.icon.origin[0], marker.icon.origin[1]);
                    marker.icon.anchor = new google.maps.Point(marker.icon.anchor[0], marker.icon.anchor[1]);
                    // console.log(marker.icon);
                    // console.log(marker);
                    // marker = new google.maps.Marker(marker);
                    if (undefined !== marker.icon.svg) {
                        let template = marker.icon.svg,
                            _url = marker.icon.url;
                        if(undefined !== marker.svg_fill && '' !== marker.svg_fill){
                            marker.icon.svg = template.replace('{{ color }}', marker.svg_fill);
                        }
                        marker.icon.scaledSize = new google.maps.Size(marker.icon.size.width, marker.icon.size.height);
                        marker.icon.url = _url + encodeURIComponent(marker.icon.svg);
                        // marker.icon.url = 'data:image/svg+xml;charset=UTF-8,' + btoa(marker.icon.svg);
                        // let _marker = new google.maps.Marker(marker);
                        // console.log('|', marker);
                        // Switch icon on marker mouseover and mouseout
                        // _marker.addListener('mouseover', function() {
                        //     console.log(1111);
                        // });
                        // _marker.addListener('mouseout', function() {
                        //     console.log(22222);
                        // });
                        // _marker.addListener('click', function() {
                        //     map.setZoom(12);
                        //     console.log(33333);
                        // });

                        // map.addListener('mouseover', function() {
                        //     if(undefined !== marker.svg_hfill && '' !== marker.svg_hfill){
                        //         console.log(marker.svg_hfill);
                        //         marker.icon.svg = template.replace('{{ color }}', marker.svg_hfill);
                        //         marker.icon.url = _url + encodeURIComponent(marker.icon.svg);
                        //         _marker.setIcon(marker.icon);
                        //     }
                        // });
                        //
                        // map.addListener('mouseout', function() {
                        //     if(undefined !== marker.svg_fill){
                        //         marker.icon.svg = template.replace('{{ color }}', marker.svg_fill);
                        //         marker.icon.url = _url + encodeURIComponent(marker.icon.svg);
                        //         _marker.setIcon(marker.icon);
                        //     }
                        // });
                        // _markers.push(_marker);
                    } else {
                        // marker = new google.maps.Marker(marker);
                    }

                    // console.log(_markers);
                    // _markers.forEach((element) => {
                    //     element.addListener('mouseout', function() {
                    //         console.log(element);
                    //     });
                    // });
                }
                let _marker = new google.maps.Marker(marker);
            }
            mapBlock.removeAttribute('data-ssc-google-map-parameters');
        } catch (e) {
            if (e instanceof SyntaxError) {
                console.error(e.message);
            }
        }
    }
};

/* Slick Slider */
!function(i){"use strict";"function"==typeof define&&define.amd?define(["jquery"],i):"undefined"!=typeof exports?module.exports=i(require("jquery")):i(jQuery)}(function(i){"use strict";var e=window.Slick||{};(e=function(){var e=0;return function(t,o){var s,n=this;n.defaults={accessibility:!0,adaptiveHeight:!1,appendArrows:i(t),appendDots:i(t),arrows:!0,asNavFor:null,prevArrow:'<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',nextArrow:'<button class="slick-next" aria-label="Next" type="button">Next</button>',autoplay:!1,autoplaySpeed:3e3,centerMode:!1,centerPadding:"50px",cssEase:"ease",customPaging:function(e,t){return i('<button type="button" />').text(t+1)},dots:!1,dotsClass:"slick-dots",draggable:!0,easing:"linear",edgeFriction:.35,fade:!1,focusOnSelect:!1,focusOnChange:!1,infinite:!0,initialSlide:0,lazyLoad:"ondemand",mobileFirst:!1,pauseOnHover:!0,pauseOnFocus:!0,pauseOnDotsHover:!1,respondTo:"window",responsive:null,rows:1,rtl:!1,slide:"",slidesPerRow:1,slidesToShow:1,slidesToScroll:1,speed:500,swipe:!0,swipeToSlide:!1,touchMove:!0,touchThreshold:5,useCSS:!0,useTransform:!0,variableWidth:!1,vertical:!1,verticalSwiping:!1,waitForAnimate:!0,zIndex:1e3},n.initials={animating:!1,dragging:!1,autoPlayTimer:null,currentDirection:0,currentLeft:null,currentSlide:0,direction:1,$dots:null,listWidth:null,listHeight:null,loadIndex:0,$nextArrow:null,$prevArrow:null,scrolling:!1,slideCount:null,slideWidth:null,$slideTrack:null,$slides:null,sliding:!1,slideOffset:0,swipeLeft:null,swiping:!1,$list:null,touchObject:{},transformsEnabled:!1,unslicked:!1},i.extend(n,n.initials),n.activeBreakpoint=null,n.animType=null,n.animProp=null,n.breakpoints=[],n.breakpointSettings=[],n.cssTransitions=!1,n.focussed=!1,n.interrupted=!1,n.hidden="hidden",n.paused=!0,n.positionProp=null,n.respondTo=null,n.rowCount=1,n.shouldClick=!0,n.$slider=i(t),n.$slidesCache=null,n.transformType=null,n.transitionType=null,n.visibilityChange="visibilitychange",n.windowWidth=0,n.windowTimer=null,s=i(t).data("slick")||{},n.options=i.extend({},n.defaults,o,s),n.currentSlide=n.options.initialSlide,n.originalSettings=n.options,void 0!==document.mozHidden?(n.hidden="mozHidden",n.visibilityChange="mozvisibilitychange"):void 0!==document.webkitHidden&&(n.hidden="webkitHidden",n.visibilityChange="webkitvisibilitychange"),n.autoPlay=i.proxy(n.autoPlay,n),n.autoPlayClear=i.proxy(n.autoPlayClear,n),n.autoPlayIterator=i.proxy(n.autoPlayIterator,n),n.changeSlide=i.proxy(n.changeSlide,n),n.clickHandler=i.proxy(n.clickHandler,n),n.selectHandler=i.proxy(n.selectHandler,n),n.setPosition=i.proxy(n.setPosition,n),n.swipeHandler=i.proxy(n.swipeHandler,n),n.dragHandler=i.proxy(n.dragHandler,n),n.keyHandler=i.proxy(n.keyHandler,n),n.instanceUid=e++,n.htmlExpr=/^(?:\s*(<[\w\W]+>)[^>]*)$/,n.registerBreakpoints(),n.init(!0)}}()).prototype.activateADA=function(){this.$slideTrack.find(".slick-active").attr({"aria-hidden":"false"}).find("a, input, button, select").attr({tabindex:"0"})},e.prototype.addSlide=e.prototype.slickAdd=function(e,t,o){var s=this;if("boolean"==typeof t)o=t,t=null;else if(t<0||t>=s.slideCount)return!1;s.unload(),"number"==typeof t?0===t&&0===s.$slides.length?i(e).appendTo(s.$slideTrack):o?i(e).insertBefore(s.$slides.eq(t)):i(e).insertAfter(s.$slides.eq(t)):!0===o?i(e).prependTo(s.$slideTrack):i(e).appendTo(s.$slideTrack),s.$slides=s.$slideTrack.children(this.options.slide),s.$slideTrack.children(this.options.slide).detach(),s.$slideTrack.append(s.$slides),s.$slides.each(function(e,t){i(t).attr("data-slick-index",e)}),s.$slidesCache=s.$slides,s.reinit()},e.prototype.animateHeight=function(){var i=this;if(1===i.options.slidesToShow&&!0===i.options.adaptiveHeight&&!1===i.options.vertical){var e=i.$slides.eq(i.currentSlide).outerHeight(!0);i.$list.animate({height:e},i.options.speed)}},e.prototype.animateSlide=function(e,t){var o={},s=this;s.animateHeight(),!0===s.options.rtl&&!1===s.options.vertical&&(e=-e),!1===s.transformsEnabled?!1===s.options.vertical?s.$slideTrack.animate({left:e},s.options.speed,s.options.easing,t):s.$slideTrack.animate({top:e},s.options.speed,s.options.easing,t):!1===s.cssTransitions?(!0===s.options.rtl&&(s.currentLeft=-s.currentLeft),i({animStart:s.currentLeft}).animate({animStart:e},{duration:s.options.speed,easing:s.options.easing,step:function(i){i=Math.ceil(i),!1===s.options.vertical?(o[s.animType]="translate("+i+"px, 0px)",s.$slideTrack.css(o)):(o[s.animType]="translate(0px,"+i+"px)",s.$slideTrack.css(o))},complete:function(){t&&t.call()}})):(s.applyTransition(),e=Math.ceil(e),!1===s.options.vertical?o[s.animType]="translate3d("+e+"px, 0px, 0px)":o[s.animType]="translate3d(0px,"+e+"px, 0px)",s.$slideTrack.css(o),t&&setTimeout(function(){s.disableTransition(),t.call()},s.options.speed))},e.prototype.getNavTarget=function(){var e=this,t=e.options.asNavFor;return t&&null!==t&&(t=i(t).not(e.$slider)),t},e.prototype.asNavFor=function(e){var t=this.getNavTarget();null!==t&&"object"==typeof t&&t.each(function(){var t=i(this).slick("getSlick");t.unslicked||t.slideHandler(e,!0)})},e.prototype.applyTransition=function(i){var e=this,t={};!1===e.options.fade?t[e.transitionType]=e.transformType+" "+e.options.speed+"ms "+e.options.cssEase:t[e.transitionType]="opacity "+e.options.speed+"ms "+e.options.cssEase,!1===e.options.fade?e.$slideTrack.css(t):e.$slides.eq(i).css(t)},e.prototype.autoPlay=function(){var i=this;i.autoPlayClear(),i.slideCount>i.options.slidesToShow&&(i.autoPlayTimer=setInterval(i.autoPlayIterator,i.options.autoplaySpeed))},e.prototype.autoPlayClear=function(){var i=this;i.autoPlayTimer&&clearInterval(i.autoPlayTimer)},e.prototype.autoPlayIterator=function(){var i=this,e=i.currentSlide+i.options.slidesToScroll;i.paused||i.interrupted||i.focussed||(!1===i.options.infinite&&(1===i.direction&&i.currentSlide+1===i.slideCount-1?i.direction=0:0===i.direction&&(e=i.currentSlide-i.options.slidesToScroll,i.currentSlide-1==0&&(i.direction=1))),i.slideHandler(e))},e.prototype.buildArrows=function(){var e=this;!0===e.options.arrows&&(e.$prevArrow=i(e.options.prevArrow).addClass("slick-arrow"),e.$nextArrow=i(e.options.nextArrow).addClass("slick-arrow"),e.slideCount>e.options.slidesToShow?(e.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),e.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),e.htmlExpr.test(e.options.prevArrow)&&e.$prevArrow.prependTo(e.options.appendArrows),e.htmlExpr.test(e.options.nextArrow)&&e.$nextArrow.appendTo(e.options.appendArrows),!0!==e.options.infinite&&e.$prevArrow.addClass("slick-disabled").attr("aria-disabled","true")):e.$prevArrow.add(e.$nextArrow).addClass("slick-hidden").attr({"aria-disabled":"true",tabindex:"-1"}))},e.prototype.buildDots=function(){var e,t,o=this;if(!0===o.options.dots){for(o.$slider.addClass("slick-dotted"),t=i("<ul />").addClass(o.options.dotsClass),e=0;e<=o.getDotCount();e+=1)t.append(i("<li />").append(o.options.customPaging.call(this,o,e)));o.$dots=t.appendTo(o.options.appendDots),o.$dots.find("li").first().addClass("slick-active")}},e.prototype.buildOut=function(){var e=this;e.$slides=e.$slider.children(e.options.slide+":not(.slick-cloned)").addClass("slick-slide"),e.slideCount=e.$slides.length,e.$slides.each(function(e,t){i(t).attr("data-slick-index",e).data("originalStyling",i(t).attr("style")||"")}),e.$slider.addClass("slick-slider"),e.$slideTrack=0===e.slideCount?i('<div class="slick-track"/>').appendTo(e.$slider):e.$slides.wrapAll('<div class="slick-track"/>').parent(),e.$list=e.$slideTrack.wrap('<div class="slick-list"/>').parent(),e.$slideTrack.css("opacity",0),!0!==e.options.centerMode&&!0!==e.options.swipeToSlide||(e.options.slidesToScroll=1),i("img[data-lazy]",e.$slider).not("[src]").addClass("slick-loading"),e.setupInfinite(),e.buildArrows(),e.buildDots(),e.updateDots(),e.setSlideClasses("number"==typeof e.currentSlide?e.currentSlide:0),!0===e.options.draggable&&e.$list.addClass("draggable")},e.prototype.buildRows=function(){var i,e,t,o,s,n,r,l=this;if(o=document.createDocumentFragment(),n=l.$slider.children(),l.options.rows>1){for(r=l.options.slidesPerRow*l.options.rows,s=Math.ceil(n.length/r),i=0;i<s;i++){var d=document.createElement("div");for(e=0;e<l.options.rows;e++){var a=document.createElement("div");for(t=0;t<l.options.slidesPerRow;t++){var c=i*r+(e*l.options.slidesPerRow+t);n.get(c)&&a.appendChild(n.get(c))}d.appendChild(a)}o.appendChild(d)}l.$slider.empty().append(o),l.$slider.children().children().children().css({width:100/l.options.slidesPerRow+"%",display:"inline-block"})}},e.prototype.checkResponsive=function(e,t){var o,s,n,r=this,l=!1,d=r.$slider.width(),a=window.innerWidth||i(window).width();if("window"===r.respondTo?n=a:"slider"===r.respondTo?n=d:"min"===r.respondTo&&(n=Math.min(a,d)),r.options.responsive&&r.options.responsive.length&&null!==r.options.responsive){s=null;for(o in r.breakpoints)r.breakpoints.hasOwnProperty(o)&&(!1===r.originalSettings.mobileFirst?n<r.breakpoints[o]&&(s=r.breakpoints[o]):n>r.breakpoints[o]&&(s=r.breakpoints[o]));null!==s?null!==r.activeBreakpoint?(s!==r.activeBreakpoint||t)&&(r.activeBreakpoint=s,"unslick"===r.breakpointSettings[s]?r.unslick(s):(r.options=i.extend({},r.originalSettings,r.breakpointSettings[s]),!0===e&&(r.currentSlide=r.options.initialSlide),r.refresh(e)),l=s):(r.activeBreakpoint=s,"unslick"===r.breakpointSettings[s]?r.unslick(s):(r.options=i.extend({},r.originalSettings,r.breakpointSettings[s]),!0===e&&(r.currentSlide=r.options.initialSlide),r.refresh(e)),l=s):null!==r.activeBreakpoint&&(r.activeBreakpoint=null,r.options=r.originalSettings,!0===e&&(r.currentSlide=r.options.initialSlide),r.refresh(e),l=s),e||!1===l||r.$slider.trigger("breakpoint",[r,l])}},e.prototype.changeSlide=function(e,t){var o,s,n,r=this,l=i(e.currentTarget);switch(l.is("a")&&e.preventDefault(),l.is("li")||(l=l.closest("li")),n=r.slideCount%r.options.slidesToScroll!=0,o=n?0:(r.slideCount-r.currentSlide)%r.options.slidesToScroll,e.data.message){case"previous":s=0===o?r.options.slidesToScroll:r.options.slidesToShow-o,r.slideCount>r.options.slidesToShow&&r.slideHandler(r.currentSlide-s,!1,t);break;case"next":s=0===o?r.options.slidesToScroll:o,r.slideCount>r.options.slidesToShow&&r.slideHandler(r.currentSlide+s,!1,t);break;case"index":var d=0===e.data.index?0:e.data.index||l.index()*r.options.slidesToScroll;r.slideHandler(r.checkNavigable(d),!1,t),l.children().trigger("focus");break;default:return}},e.prototype.checkNavigable=function(i){var e,t;if(e=this.getNavigableIndexes(),t=0,i>e[e.length-1])i=e[e.length-1];else for(var o in e){if(i<e[o]){i=t;break}t=e[o]}return i},e.prototype.cleanUpEvents=function(){var e=this;e.options.dots&&null!==e.$dots&&(i("li",e.$dots).off("click.slick",e.changeSlide).off("mouseenter.slick",i.proxy(e.interrupt,e,!0)).off("mouseleave.slick",i.proxy(e.interrupt,e,!1)),!0===e.options.accessibility&&e.$dots.off("keydown.slick",e.keyHandler)),e.$slider.off("focus.slick blur.slick"),!0===e.options.arrows&&e.slideCount>e.options.slidesToShow&&(e.$prevArrow&&e.$prevArrow.off("click.slick",e.changeSlide),e.$nextArrow&&e.$nextArrow.off("click.slick",e.changeSlide),!0===e.options.accessibility&&(e.$prevArrow&&e.$prevArrow.off("keydown.slick",e.keyHandler),e.$nextArrow&&e.$nextArrow.off("keydown.slick",e.keyHandler))),e.$list.off("touchstart.slick mousedown.slick",e.swipeHandler),e.$list.off("touchmove.slick mousemove.slick",e.swipeHandler),e.$list.off("touchend.slick mouseup.slick",e.swipeHandler),e.$list.off("touchcancel.slick mouseleave.slick",e.swipeHandler),e.$list.off("click.slick",e.clickHandler),i(document).off(e.visibilityChange,e.visibility),e.cleanUpSlideEvents(),!0===e.options.accessibility&&e.$list.off("keydown.slick",e.keyHandler),!0===e.options.focusOnSelect&&i(e.$slideTrack).children().off("click.slick",e.selectHandler),i(window).off("orientationchange.slick.slick-"+e.instanceUid,e.orientationChange),i(window).off("resize.slick.slick-"+e.instanceUid,e.resize),i("[draggable!=true]",e.$slideTrack).off("dragstart",e.preventDefault),i(window).off("load.slick.slick-"+e.instanceUid,e.setPosition)},e.prototype.cleanUpSlideEvents=function(){var e=this;e.$list.off("mouseenter.slick",i.proxy(e.interrupt,e,!0)),e.$list.off("mouseleave.slick",i.proxy(e.interrupt,e,!1))},e.prototype.cleanUpRows=function(){var i,e=this;e.options.rows>1&&((i=e.$slides.children().children()).removeAttr("style"),e.$slider.empty().append(i))},e.prototype.clickHandler=function(i){!1===this.shouldClick&&(i.stopImmediatePropagation(),i.stopPropagation(),i.preventDefault())},e.prototype.destroy=function(e){var t=this;t.autoPlayClear(),t.touchObject={},t.cleanUpEvents(),i(".slick-cloned",t.$slider).detach(),t.$dots&&t.$dots.remove(),t.$prevArrow&&t.$prevArrow.length&&(t.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display",""),t.htmlExpr.test(t.options.prevArrow)&&t.$prevArrow.remove()),t.$nextArrow&&t.$nextArrow.length&&(t.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display",""),t.htmlExpr.test(t.options.nextArrow)&&t.$nextArrow.remove()),t.$slides&&(t.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each(function(){i(this).attr("style",i(this).data("originalStyling"))}),t.$slideTrack.children(this.options.slide).detach(),t.$slideTrack.detach(),t.$list.detach(),t.$slider.append(t.$slides)),t.cleanUpRows(),t.$slider.removeClass("slick-slider"),t.$slider.removeClass("slick-initialized"),t.$slider.removeClass("slick-dotted"),t.unslicked=!0,e||t.$slider.trigger("destroy",[t])},e.prototype.disableTransition=function(i){var e=this,t={};t[e.transitionType]="",!1===e.options.fade?e.$slideTrack.css(t):e.$slides.eq(i).css(t)},e.prototype.fadeSlide=function(i,e){var t=this;!1===t.cssTransitions?(t.$slides.eq(i).css({zIndex:t.options.zIndex}),t.$slides.eq(i).animate({opacity:1},t.options.speed,t.options.easing,e)):(t.applyTransition(i),t.$slides.eq(i).css({opacity:1,zIndex:t.options.zIndex}),e&&setTimeout(function(){t.disableTransition(i),e.call()},t.options.speed))},e.prototype.fadeSlideOut=function(i){var e=this;!1===e.cssTransitions?e.$slides.eq(i).animate({opacity:0,zIndex:e.options.zIndex-2},e.options.speed,e.options.easing):(e.applyTransition(i),e.$slides.eq(i).css({opacity:0,zIndex:e.options.zIndex-2}))},e.prototype.filterSlides=e.prototype.slickFilter=function(i){var e=this;null!==i&&(e.$slidesCache=e.$slides,e.unload(),e.$slideTrack.children(this.options.slide).detach(),e.$slidesCache.filter(i).appendTo(e.$slideTrack),e.reinit())},e.prototype.focusHandler=function(){var e=this;e.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick","*",function(t){t.stopImmediatePropagation();var o=i(this);setTimeout(function(){e.options.pauseOnFocus&&(e.focussed=o.is(":focus"),e.autoPlay())},0)})},e.prototype.getCurrent=e.prototype.slickCurrentSlide=function(){return this.currentSlide},e.prototype.getDotCount=function(){var i=this,e=0,t=0,o=0;if(!0===i.options.infinite)if(i.slideCount<=i.options.slidesToShow)++o;else for(;e<i.slideCount;)++o,e=t+i.options.slidesToScroll,t+=i.options.slidesToScroll<=i.options.slidesToShow?i.options.slidesToScroll:i.options.slidesToShow;else if(!0===i.options.centerMode)o=i.slideCount;else if(i.options.asNavFor)for(;e<i.slideCount;)++o,e=t+i.options.slidesToScroll,t+=i.options.slidesToScroll<=i.options.slidesToShow?i.options.slidesToScroll:i.options.slidesToShow;else o=1+Math.ceil((i.slideCount-i.options.slidesToShow)/i.options.slidesToScroll);return o-1},e.prototype.getLeft=function(i){var e,t,o,s,n=this,r=0;return n.slideOffset=0,t=n.$slides.first().outerHeight(!0),!0===n.options.infinite?(n.slideCount>n.options.slidesToShow&&(n.slideOffset=n.slideWidth*n.options.slidesToShow*-1,s=-1,!0===n.options.vertical&&!0===n.options.centerMode&&(2===n.options.slidesToShow?s=-1.5:1===n.options.slidesToShow&&(s=-2)),r=t*n.options.slidesToShow*s),n.slideCount%n.options.slidesToScroll!=0&&i+n.options.slidesToScroll>n.slideCount&&n.slideCount>n.options.slidesToShow&&(i>n.slideCount?(n.slideOffset=(n.options.slidesToShow-(i-n.slideCount))*n.slideWidth*-1,r=(n.options.slidesToShow-(i-n.slideCount))*t*-1):(n.slideOffset=n.slideCount%n.options.slidesToScroll*n.slideWidth*-1,r=n.slideCount%n.options.slidesToScroll*t*-1))):i+n.options.slidesToShow>n.slideCount&&(n.slideOffset=(i+n.options.slidesToShow-n.slideCount)*n.slideWidth,r=(i+n.options.slidesToShow-n.slideCount)*t),n.slideCount<=n.options.slidesToShow&&(n.slideOffset=0,r=0),!0===n.options.centerMode&&n.slideCount<=n.options.slidesToShow?n.slideOffset=n.slideWidth*Math.floor(n.options.slidesToShow)/2-n.slideWidth*n.slideCount/2:!0===n.options.centerMode&&!0===n.options.infinite?n.slideOffset+=n.slideWidth*Math.floor(n.options.slidesToShow/2)-n.slideWidth:!0===n.options.centerMode&&(n.slideOffset=0,n.slideOffset+=n.slideWidth*Math.floor(n.options.slidesToShow/2)),e=!1===n.options.vertical?i*n.slideWidth*-1+n.slideOffset:i*t*-1+r,!0===n.options.variableWidth&&(o=n.slideCount<=n.options.slidesToShow||!1===n.options.infinite?n.$slideTrack.children(".slick-slide").eq(i):n.$slideTrack.children(".slick-slide").eq(i+n.options.slidesToShow),e=!0===n.options.rtl?o[0]?-1*(n.$slideTrack.width()-o[0].offsetLeft-o.width()):0:o[0]?-1*o[0].offsetLeft:0,!0===n.options.centerMode&&(o=n.slideCount<=n.options.slidesToShow||!1===n.options.infinite?n.$slideTrack.children(".slick-slide").eq(i):n.$slideTrack.children(".slick-slide").eq(i+n.options.slidesToShow+1),e=!0===n.options.rtl?o[0]?-1*(n.$slideTrack.width()-o[0].offsetLeft-o.width()):0:o[0]?-1*o[0].offsetLeft:0,e+=(n.$list.width()-o.outerWidth())/2)),e},e.prototype.getOption=e.prototype.slickGetOption=function(i){return this.options[i]},e.prototype.getNavigableIndexes=function(){var i,e=this,t=0,o=0,s=[];for(!1===e.options.infinite?i=e.slideCount:(t=-1*e.options.slidesToScroll,o=-1*e.options.slidesToScroll,i=2*e.slideCount);t<i;)s.push(t),t=o+e.options.slidesToScroll,o+=e.options.slidesToScroll<=e.options.slidesToShow?e.options.slidesToScroll:e.options.slidesToShow;return s},e.prototype.getSlick=function(){return this},e.prototype.getSlideCount=function(){var e,t,o=this;return t=!0===o.options.centerMode?o.slideWidth*Math.floor(o.options.slidesToShow/2):0,!0===o.options.swipeToSlide?(o.$slideTrack.find(".slick-slide").each(function(s,n){if(n.offsetLeft-t+i(n).outerWidth()/2>-1*o.swipeLeft)return e=n,!1}),Math.abs(i(e).attr("data-slick-index")-o.currentSlide)||1):o.options.slidesToScroll},e.prototype.goTo=e.prototype.slickGoTo=function(i,e){this.changeSlide({data:{message:"index",index:parseInt(i)}},e)},e.prototype.init=function(e){var t=this;i(t.$slider).hasClass("slick-initialized")||(i(t.$slider).addClass("slick-initialized"),t.buildRows(),t.buildOut(),t.setProps(),t.startLoad(),t.loadSlider(),t.initializeEvents(),t.updateArrows(),t.updateDots(),t.checkResponsive(!0),t.focusHandler()),e&&t.$slider.trigger("init",[t]),!0===t.options.accessibility&&t.initADA(),t.options.autoplay&&(t.paused=!1,t.autoPlay())},e.prototype.initADA=function(){var e=this,t=Math.ceil(e.slideCount/e.options.slidesToShow),o=e.getNavigableIndexes().filter(function(i){return i>=0&&i<e.slideCount});e.$slides.add(e.$slideTrack.find(".slick-cloned")).attr({"aria-hidden":"true",tabindex:"-1"}).find("a, input, button, select").attr({tabindex:"-1"}),null!==e.$dots&&(e.$slides.not(e.$slideTrack.find(".slick-cloned")).each(function(t){var s=o.indexOf(t);i(this).attr({role:"tabpanel",id:"slick-slide"+e.instanceUid+t,tabindex:-1}),-1!==s&&i(this).attr({"aria-describedby":"slick-slide-control"+e.instanceUid+s})}),e.$dots.attr("role","tablist").find("li").each(function(s){var n=o[s];i(this).attr({role:"presentation"}),i(this).find("button").first().attr({role:"tab",id:"slick-slide-control"+e.instanceUid+s,"aria-controls":"slick-slide"+e.instanceUid+n,"aria-label":s+1+" of "+t,"aria-selected":null,tabindex:"-1"})}).eq(e.currentSlide).find("button").attr({"aria-selected":"true",tabindex:"0"}).end());for(var s=e.currentSlide,n=s+e.options.slidesToShow;s<n;s++)e.$slides.eq(s).attr("tabindex",0);e.activateADA()},e.prototype.initArrowEvents=function(){var i=this;!0===i.options.arrows&&i.slideCount>i.options.slidesToShow&&(i.$prevArrow.off("click.slick").on("click.slick",{message:"previous"},i.changeSlide),i.$nextArrow.off("click.slick").on("click.slick",{message:"next"},i.changeSlide),!0===i.options.accessibility&&(i.$prevArrow.on("keydown.slick",i.keyHandler),i.$nextArrow.on("keydown.slick",i.keyHandler)))},e.prototype.initDotEvents=function(){var e=this;!0===e.options.dots&&(i("li",e.$dots).on("click.slick",{message:"index"},e.changeSlide),!0===e.options.accessibility&&e.$dots.on("keydown.slick",e.keyHandler)),!0===e.options.dots&&!0===e.options.pauseOnDotsHover&&i("li",e.$dots).on("mouseenter.slick",i.proxy(e.interrupt,e,!0)).on("mouseleave.slick",i.proxy(e.interrupt,e,!1))},e.prototype.initSlideEvents=function(){var e=this;e.options.pauseOnHover&&(e.$list.on("mouseenter.slick",i.proxy(e.interrupt,e,!0)),e.$list.on("mouseleave.slick",i.proxy(e.interrupt,e,!1)))},e.prototype.initializeEvents=function(){var e=this;e.initArrowEvents(),e.initDotEvents(),e.initSlideEvents(),e.$list.on("touchstart.slick mousedown.slick",{action:"start"},e.swipeHandler),e.$list.on("touchmove.slick mousemove.slick",{action:"move"},e.swipeHandler),e.$list.on("touchend.slick mouseup.slick",{action:"end"},e.swipeHandler),e.$list.on("touchcancel.slick mouseleave.slick",{action:"end"},e.swipeHandler),e.$list.on("click.slick",e.clickHandler),i(document).on(e.visibilityChange,i.proxy(e.visibility,e)),!0===e.options.accessibility&&e.$list.on("keydown.slick",e.keyHandler),!0===e.options.focusOnSelect&&i(e.$slideTrack).children().on("click.slick",e.selectHandler),i(window).on("orientationchange.slick.slick-"+e.instanceUid,i.proxy(e.orientationChange,e)),i(window).on("resize.slick.slick-"+e.instanceUid,i.proxy(e.resize,e)),i("[draggable!=true]",e.$slideTrack).on("dragstart",e.preventDefault),i(window).on("load.slick.slick-"+e.instanceUid,e.setPosition),i(e.setPosition)},e.prototype.initUI=function(){var i=this;!0===i.options.arrows&&i.slideCount>i.options.slidesToShow&&(i.$prevArrow.show(),i.$nextArrow.show()),!0===i.options.dots&&i.slideCount>i.options.slidesToShow&&i.$dots.show()},e.prototype.keyHandler=function(i){var e=this;i.target.tagName.match("TEXTAREA|INPUT|SELECT")||(37===i.keyCode&&!0===e.options.accessibility?e.changeSlide({data:{message:!0===e.options.rtl?"next":"previous"}}):39===i.keyCode&&!0===e.options.accessibility&&e.changeSlide({data:{message:!0===e.options.rtl?"previous":"next"}}))},e.prototype.lazyLoad=function(){function e(e){i("img[data-lazy]",e).each(function(){var e=i(this),t=i(this).attr("data-lazy"),o=i(this).attr("data-srcset"),s=i(this).attr("data-sizes")||n.$slider.attr("data-sizes"),r=document.createElement("img");r.onload=function(){e.animate({opacity:0},100,function(){o&&(e.attr("srcset",o),s&&e.attr("sizes",s)),e.attr("src",t).animate({opacity:1},200,function(){e.removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading")}),n.$slider.trigger("lazyLoaded",[n,e,t])})},r.onerror=function(){e.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"),n.$slider.trigger("lazyLoadError",[n,e,t])},r.src=t})}var t,o,s,n=this;if(!0===n.options.centerMode?!0===n.options.infinite?s=(o=n.currentSlide+(n.options.slidesToShow/2+1))+n.options.slidesToShow+2:(o=Math.max(0,n.currentSlide-(n.options.slidesToShow/2+1)),s=n.options.slidesToShow/2+1+2+n.currentSlide):(o=n.options.infinite?n.options.slidesToShow+n.currentSlide:n.currentSlide,s=Math.ceil(o+n.options.slidesToShow),!0===n.options.fade&&(o>0&&o--,s<=n.slideCount&&s++)),t=n.$slider.find(".slick-slide").slice(o,s),"anticipated"===n.options.lazyLoad)for(var r=o-1,l=s,d=n.$slider.find(".slick-slide"),a=0;a<n.options.slidesToScroll;a++)r<0&&(r=n.slideCount-1),t=(t=t.add(d.eq(r))).add(d.eq(l)),r--,l++;e(t),n.slideCount<=n.options.slidesToShow?e(n.$slider.find(".slick-slide")):n.currentSlide>=n.slideCount-n.options.slidesToShow?e(n.$slider.find(".slick-cloned").slice(0,n.options.slidesToShow)):0===n.currentSlide&&e(n.$slider.find(".slick-cloned").slice(-1*n.options.slidesToShow))},e.prototype.loadSlider=function(){var i=this;i.setPosition(),i.$slideTrack.css({opacity:1}),i.$slider.removeClass("slick-loading"),i.initUI(),"progressive"===i.options.lazyLoad&&i.progressiveLazyLoad()},e.prototype.next=e.prototype.slickNext=function(){this.changeSlide({data:{message:"next"}})},e.prototype.orientationChange=function(){var i=this;i.checkResponsive(),i.setPosition()},e.prototype.pause=e.prototype.slickPause=function(){var i=this;i.autoPlayClear(),i.paused=!0},e.prototype.play=e.prototype.slickPlay=function(){var i=this;i.autoPlay(),i.options.autoplay=!0,i.paused=!1,i.focussed=!1,i.interrupted=!1},e.prototype.postSlide=function(e){var t=this;t.unslicked||(t.$slider.trigger("afterChange",[t,e]),t.animating=!1,t.slideCount>t.options.slidesToShow&&t.setPosition(),t.swipeLeft=null,t.options.autoplay&&t.autoPlay(),!0===t.options.accessibility&&(t.initADA(),t.options.focusOnChange&&i(t.$slides.get(t.currentSlide)).attr("tabindex",0).focus()))},e.prototype.prev=e.prototype.slickPrev=function(){this.changeSlide({data:{message:"previous"}})},e.prototype.preventDefault=function(i){i.preventDefault()},e.prototype.progressiveLazyLoad=function(e){e=e||1;var t,o,s,n,r,l=this,d=i("img[data-lazy]",l.$slider);d.length?(t=d.first(),o=t.attr("data-lazy"),s=t.attr("data-srcset"),n=t.attr("data-sizes")||l.$slider.attr("data-sizes"),(r=document.createElement("img")).onload=function(){s&&(t.attr("srcset",s),n&&t.attr("sizes",n)),t.attr("src",o).removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading"),!0===l.options.adaptiveHeight&&l.setPosition(),l.$slider.trigger("lazyLoaded",[l,t,o]),l.progressiveLazyLoad()},r.onerror=function(){e<3?setTimeout(function(){l.progressiveLazyLoad(e+1)},500):(t.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"),l.$slider.trigger("lazyLoadError",[l,t,o]),l.progressiveLazyLoad())},r.src=o):l.$slider.trigger("allImagesLoaded",[l])},e.prototype.refresh=function(e){var t,o,s=this;o=s.slideCount-s.options.slidesToShow,!s.options.infinite&&s.currentSlide>o&&(s.currentSlide=o),s.slideCount<=s.options.slidesToShow&&(s.currentSlide=0),t=s.currentSlide,s.destroy(!0),i.extend(s,s.initials,{currentSlide:t}),s.init(),e||s.changeSlide({data:{message:"index",index:t}},!1)},e.prototype.registerBreakpoints=function(){var e,t,o,s=this,n=s.options.responsive||null;if("array"===i.type(n)&&n.length){s.respondTo=s.options.respondTo||"window";for(e in n)if(o=s.breakpoints.length-1,n.hasOwnProperty(e)){for(t=n[e].breakpoint;o>=0;)s.breakpoints[o]&&s.breakpoints[o]===t&&s.breakpoints.splice(o,1),o--;s.breakpoints.push(t),s.breakpointSettings[t]=n[e].settings}s.breakpoints.sort(function(i,e){return s.options.mobileFirst?i-e:e-i})}},e.prototype.reinit=function(){var e=this;e.$slides=e.$slideTrack.children(e.options.slide).addClass("slick-slide"),e.slideCount=e.$slides.length,e.currentSlide>=e.slideCount&&0!==e.currentSlide&&(e.currentSlide=e.currentSlide-e.options.slidesToScroll),e.slideCount<=e.options.slidesToShow&&(e.currentSlide=0),e.registerBreakpoints(),e.setProps(),e.setupInfinite(),e.buildArrows(),e.updateArrows(),e.initArrowEvents(),e.buildDots(),e.updateDots(),e.initDotEvents(),e.cleanUpSlideEvents(),e.initSlideEvents(),e.checkResponsive(!1,!0),!0===e.options.focusOnSelect&&i(e.$slideTrack).children().on("click.slick",e.selectHandler),e.setSlideClasses("number"==typeof e.currentSlide?e.currentSlide:0),e.setPosition(),e.focusHandler(),e.paused=!e.options.autoplay,e.autoPlay(),e.$slider.trigger("reInit",[e])},e.prototype.resize=function(){var e=this;i(window).width()!==e.windowWidth&&(clearTimeout(e.windowDelay),e.windowDelay=window.setTimeout(function(){e.windowWidth=i(window).width(),e.checkResponsive(),e.unslicked||e.setPosition()},50))},e.prototype.removeSlide=e.prototype.slickRemove=function(i,e,t){var o=this;if(i="boolean"==typeof i?!0===(e=i)?0:o.slideCount-1:!0===e?--i:i,o.slideCount<1||i<0||i>o.slideCount-1)return!1;o.unload(),!0===t?o.$slideTrack.children().remove():o.$slideTrack.children(this.options.slide).eq(i).remove(),o.$slides=o.$slideTrack.children(this.options.slide),o.$slideTrack.children(this.options.slide).detach(),o.$slideTrack.append(o.$slides),o.$slidesCache=o.$slides,o.reinit()},e.prototype.setCSS=function(i){var e,t,o=this,s={};!0===o.options.rtl&&(i=-i),e="left"==o.positionProp?Math.ceil(i)+"px":"0px",t="top"==o.positionProp?Math.ceil(i)+"px":"0px",s[o.positionProp]=i,!1===o.transformsEnabled?o.$slideTrack.css(s):(s={},!1===o.cssTransitions?(s[o.animType]="translate("+e+", "+t+")",o.$slideTrack.css(s)):(s[o.animType]="translate3d("+e+", "+t+", 0px)",o.$slideTrack.css(s)))},e.prototype.setDimensions=function(){var i=this;!1===i.options.vertical?!0===i.options.centerMode&&i.$list.css({padding:"0px "+i.options.centerPadding}):(i.$list.height(i.$slides.first().outerHeight(!0)*i.options.slidesToShow),!0===i.options.centerMode&&i.$list.css({padding:i.options.centerPadding+" 0px"})),i.listWidth=i.$list.width(),i.listHeight=i.$list.height(),!1===i.options.vertical&&!1===i.options.variableWidth?(i.slideWidth=Math.ceil(i.listWidth/i.options.slidesToShow),i.$slideTrack.width(Math.ceil(i.slideWidth*i.$slideTrack.children(".slick-slide").length))):!0===i.options.variableWidth?i.$slideTrack.width(5e3*i.slideCount):(i.slideWidth=Math.ceil(i.listWidth),i.$slideTrack.height(Math.ceil(i.$slides.first().outerHeight(!0)*i.$slideTrack.children(".slick-slide").length)));var e=i.$slides.first().outerWidth(!0)-i.$slides.first().width();!1===i.options.variableWidth&&i.$slideTrack.children(".slick-slide").width(i.slideWidth-e)},e.prototype.setFade=function(){var e,t=this;t.$slides.each(function(o,s){e=t.slideWidth*o*-1,!0===t.options.rtl?i(s).css({position:"relative",right:e,top:0,zIndex:t.options.zIndex-2,opacity:0}):i(s).css({position:"relative",left:e,top:0,zIndex:t.options.zIndex-2,opacity:0})}),t.$slides.eq(t.currentSlide).css({zIndex:t.options.zIndex-1,opacity:1})},e.prototype.setHeight=function(){var i=this;if(1===i.options.slidesToShow&&!0===i.options.adaptiveHeight&&!1===i.options.vertical){var e=i.$slides.eq(i.currentSlide).outerHeight(!0);i.$list.css("height",e)}},e.prototype.setOption=e.prototype.slickSetOption=function(){var e,t,o,s,n,r=this,l=!1;if("object"===i.type(arguments[0])?(o=arguments[0],l=arguments[1],n="multiple"):"string"===i.type(arguments[0])&&(o=arguments[0],s=arguments[1],l=arguments[2],"responsive"===arguments[0]&&"array"===i.type(arguments[1])?n="responsive":void 0!==arguments[1]&&(n="single")),"single"===n)r.options[o]=s;else if("multiple"===n)i.each(o,function(i,e){r.options[i]=e});else if("responsive"===n)for(t in s)if("array"!==i.type(r.options.responsive))r.options.responsive=[s[t]];else{for(e=r.options.responsive.length-1;e>=0;)r.options.responsive[e].breakpoint===s[t].breakpoint&&r.options.responsive.splice(e,1),e--;r.options.responsive.push(s[t])}l&&(r.unload(),r.reinit())},e.prototype.setPosition=function(){var i=this;i.setDimensions(),i.setHeight(),!1===i.options.fade?i.setCSS(i.getLeft(i.currentSlide)):i.setFade(),i.$slider.trigger("setPosition",[i])},e.prototype.setProps=function(){var i=this,e=document.body.style;i.positionProp=!0===i.options.vertical?"top":"left","top"===i.positionProp?i.$slider.addClass("slick-vertical"):i.$slider.removeClass("slick-vertical"),void 0===e.WebkitTransition&&void 0===e.MozTransition&&void 0===e.msTransition||!0===i.options.useCSS&&(i.cssTransitions=!0),i.options.fade&&("number"==typeof i.options.zIndex?i.options.zIndex<3&&(i.options.zIndex=3):i.options.zIndex=i.defaults.zIndex),void 0!==e.OTransform&&(i.animType="OTransform",i.transformType="-o-transform",i.transitionType="OTransition",void 0===e.perspectiveProperty&&void 0===e.webkitPerspective&&(i.animType=!1)),void 0!==e.MozTransform&&(i.animType="MozTransform",i.transformType="-moz-transform",i.transitionType="MozTransition",void 0===e.perspectiveProperty&&void 0===e.MozPerspective&&(i.animType=!1)),void 0!==e.webkitTransform&&(i.animType="webkitTransform",i.transformType="-webkit-transform",i.transitionType="webkitTransition",void 0===e.perspectiveProperty&&void 0===e.webkitPerspective&&(i.animType=!1)),void 0!==e.msTransform&&(i.animType="msTransform",i.transformType="-ms-transform",i.transitionType="msTransition",void 0===e.msTransform&&(i.animType=!1)),void 0!==e.transform&&!1!==i.animType&&(i.animType="transform",i.transformType="transform",i.transitionType="transition"),i.transformsEnabled=i.options.useTransform&&null!==i.animType&&!1!==i.animType},e.prototype.setSlideClasses=function(i){var e,t,o,s,n=this;if(t=n.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden","true"),n.$slides.eq(i).addClass("slick-current"),!0===n.options.centerMode){var r=n.options.slidesToShow%2==0?1:0;e=Math.floor(n.options.slidesToShow/2),!0===n.options.infinite&&(i>=e&&i<=n.slideCount-1-e?n.$slides.slice(i-e+r,i+e+1).addClass("slick-active").attr("aria-hidden","false"):(o=n.options.slidesToShow+i,t.slice(o-e+1+r,o+e+2).addClass("slick-active").attr("aria-hidden","false")),0===i?t.eq(t.length-1-n.options.slidesToShow).addClass("slick-center"):i===n.slideCount-1&&t.eq(n.options.slidesToShow).addClass("slick-center")),n.$slides.eq(i).addClass("slick-center")}else i>=0&&i<=n.slideCount-n.options.slidesToShow?n.$slides.slice(i,i+n.options.slidesToShow).addClass("slick-active").attr("aria-hidden","false"):t.length<=n.options.slidesToShow?t.addClass("slick-active").attr("aria-hidden","false"):(s=n.slideCount%n.options.slidesToShow,o=!0===n.options.infinite?n.options.slidesToShow+i:i,n.options.slidesToShow==n.options.slidesToScroll&&n.slideCount-i<n.options.slidesToShow?t.slice(o-(n.options.slidesToShow-s),o+s).addClass("slick-active").attr("aria-hidden","false"):t.slice(o,o+n.options.slidesToShow).addClass("slick-active").attr("aria-hidden","false"));"ondemand"!==n.options.lazyLoad&&"anticipated"!==n.options.lazyLoad||n.lazyLoad()},e.prototype.setupInfinite=function(){var e,t,o,s=this;if(!0===s.options.fade&&(s.options.centerMode=!1),!0===s.options.infinite&&!1===s.options.fade&&(t=null,s.slideCount>s.options.slidesToShow)){for(o=!0===s.options.centerMode?s.options.slidesToShow+1:s.options.slidesToShow,e=s.slideCount;e>s.slideCount-o;e-=1)t=e-1,i(s.$slides[t]).clone(!0).attr("id","").attr("data-slick-index",t-s.slideCount).prependTo(s.$slideTrack).addClass("slick-cloned");for(e=0;e<o+s.slideCount;e+=1)t=e,i(s.$slides[t]).clone(!0).attr("id","").attr("data-slick-index",t+s.slideCount).appendTo(s.$slideTrack).addClass("slick-cloned");s.$slideTrack.find(".slick-cloned").find("[id]").each(function(){i(this).attr("id","")})}},e.prototype.interrupt=function(i){var e=this;i||e.autoPlay(),e.interrupted=i},e.prototype.selectHandler=function(e){var t=this,o=i(e.target).is(".slick-slide")?i(e.target):i(e.target).parents(".slick-slide"),s=parseInt(o.attr("data-slick-index"));s||(s=0),t.slideCount<=t.options.slidesToShow?t.slideHandler(s,!1,!0):t.slideHandler(s)},e.prototype.slideHandler=function(i,e,t){var o,s,n,r,l,d=null,a=this;if(e=e||!1,!(!0===a.animating&&!0===a.options.waitForAnimate||!0===a.options.fade&&a.currentSlide===i))if(!1===e&&a.asNavFor(i),o=i,d=a.getLeft(o),r=a.getLeft(a.currentSlide),a.currentLeft=null===a.swipeLeft?r:a.swipeLeft,!1===a.options.infinite&&!1===a.options.centerMode&&(i<0||i>a.getDotCount()*a.options.slidesToScroll))!1===a.options.fade&&(o=a.currentSlide,!0!==t?a.animateSlide(r,function(){a.postSlide(o)}):a.postSlide(o));else if(!1===a.options.infinite&&!0===a.options.centerMode&&(i<0||i>a.slideCount-a.options.slidesToScroll))!1===a.options.fade&&(o=a.currentSlide,!0!==t?a.animateSlide(r,function(){a.postSlide(o)}):a.postSlide(o));else{if(a.options.autoplay&&clearInterval(a.autoPlayTimer),s=o<0?a.slideCount%a.options.slidesToScroll!=0?a.slideCount-a.slideCount%a.options.slidesToScroll:a.slideCount+o:o>=a.slideCount?a.slideCount%a.options.slidesToScroll!=0?0:o-a.slideCount:o,a.animating=!0,a.$slider.trigger("beforeChange",[a,a.currentSlide,s]),n=a.currentSlide,a.currentSlide=s,a.setSlideClasses(a.currentSlide),a.options.asNavFor&&(l=(l=a.getNavTarget()).slick("getSlick")).slideCount<=l.options.slidesToShow&&l.setSlideClasses(a.currentSlide),a.updateDots(),a.updateArrows(),!0===a.options.fade)return!0!==t?(a.fadeSlideOut(n),a.fadeSlide(s,function(){a.postSlide(s)})):a.postSlide(s),void a.animateHeight();!0!==t?a.animateSlide(d,function(){a.postSlide(s)}):a.postSlide(s)}},e.prototype.startLoad=function(){var i=this;!0===i.options.arrows&&i.slideCount>i.options.slidesToShow&&(i.$prevArrow.hide(),i.$nextArrow.hide()),!0===i.options.dots&&i.slideCount>i.options.slidesToShow&&i.$dots.hide(),i.$slider.addClass("slick-loading")},e.prototype.swipeDirection=function(){var i,e,t,o,s=this;return i=s.touchObject.startX-s.touchObject.curX,e=s.touchObject.startY-s.touchObject.curY,t=Math.atan2(e,i),(o=Math.round(180*t/Math.PI))<0&&(o=360-Math.abs(o)),o<=45&&o>=0?!1===s.options.rtl?"left":"right":o<=360&&o>=315?!1===s.options.rtl?"left":"right":o>=135&&o<=225?!1===s.options.rtl?"right":"left":!0===s.options.verticalSwiping?o>=35&&o<=135?"down":"up":"vertical"},e.prototype.swipeEnd=function(i){var e,t,o=this;if(o.dragging=!1,o.swiping=!1,o.scrolling)return o.scrolling=!1,!1;if(o.interrupted=!1,o.shouldClick=!(o.touchObject.swipeLength>10),void 0===o.touchObject.curX)return!1;if(!0===o.touchObject.edgeHit&&o.$slider.trigger("edge",[o,o.swipeDirection()]),o.touchObject.swipeLength>=o.touchObject.minSwipe){switch(t=o.swipeDirection()){case"left":case"down":e=o.options.swipeToSlide?o.checkNavigable(o.currentSlide+o.getSlideCount()):o.currentSlide+o.getSlideCount(),o.currentDirection=0;break;case"right":case"up":e=o.options.swipeToSlide?o.checkNavigable(o.currentSlide-o.getSlideCount()):o.currentSlide-o.getSlideCount(),o.currentDirection=1}"vertical"!=t&&(o.slideHandler(e),o.touchObject={},o.$slider.trigger("swipe",[o,t]))}else o.touchObject.startX!==o.touchObject.curX&&(o.slideHandler(o.currentSlide),o.touchObject={})},e.prototype.swipeHandler=function(i){var e=this;if(!(!1===e.options.swipe||"ontouchend"in document&&!1===e.options.swipe||!1===e.options.draggable&&-1!==i.type.indexOf("mouse")))switch(e.touchObject.fingerCount=i.originalEvent&&void 0!==i.originalEvent.touches?i.originalEvent.touches.length:1,e.touchObject.minSwipe=e.listWidth/e.options.touchThreshold,!0===e.options.verticalSwiping&&(e.touchObject.minSwipe=e.listHeight/e.options.touchThreshold),i.data.action){case"start":e.swipeStart(i);break;case"move":e.swipeMove(i);break;case"end":e.swipeEnd(i)}},e.prototype.swipeMove=function(i){var e,t,o,s,n,r,l=this;return n=void 0!==i.originalEvent?i.originalEvent.touches:null,!(!l.dragging||l.scrolling||n&&1!==n.length)&&(e=l.getLeft(l.currentSlide),l.touchObject.curX=void 0!==n?n[0].pageX:i.clientX,l.touchObject.curY=void 0!==n?n[0].pageY:i.clientY,l.touchObject.swipeLength=Math.round(Math.sqrt(Math.pow(l.touchObject.curX-l.touchObject.startX,2))),r=Math.round(Math.sqrt(Math.pow(l.touchObject.curY-l.touchObject.startY,2))),!l.options.verticalSwiping&&!l.swiping&&r>4?(l.scrolling=!0,!1):(!0===l.options.verticalSwiping&&(l.touchObject.swipeLength=r),t=l.swipeDirection(),void 0!==i.originalEvent&&l.touchObject.swipeLength>4&&(l.swiping=!0,i.preventDefault()),s=(!1===l.options.rtl?1:-1)*(l.touchObject.curX>l.touchObject.startX?1:-1),!0===l.options.verticalSwiping&&(s=l.touchObject.curY>l.touchObject.startY?1:-1),o=l.touchObject.swipeLength,l.touchObject.edgeHit=!1,!1===l.options.infinite&&(0===l.currentSlide&&"right"===t||l.currentSlide>=l.getDotCount()&&"left"===t)&&(o=l.touchObject.swipeLength*l.options.edgeFriction,l.touchObject.edgeHit=!0),!1===l.options.vertical?l.swipeLeft=e+o*s:l.swipeLeft=e+o*(l.$list.height()/l.listWidth)*s,!0===l.options.verticalSwiping&&(l.swipeLeft=e+o*s),!0!==l.options.fade&&!1!==l.options.touchMove&&(!0===l.animating?(l.swipeLeft=null,!1):void l.setCSS(l.swipeLeft))))},e.prototype.swipeStart=function(i){var e,t=this;if(t.interrupted=!0,1!==t.touchObject.fingerCount||t.slideCount<=t.options.slidesToShow)return t.touchObject={},!1;void 0!==i.originalEvent&&void 0!==i.originalEvent.touches&&(e=i.originalEvent.touches[0]),t.touchObject.startX=t.touchObject.curX=void 0!==e?e.pageX:i.clientX,t.touchObject.startY=t.touchObject.curY=void 0!==e?e.pageY:i.clientY,t.dragging=!0},e.prototype.unfilterSlides=e.prototype.slickUnfilter=function(){var i=this;null!==i.$slidesCache&&(i.unload(),i.$slideTrack.children(this.options.slide).detach(),i.$slidesCache.appendTo(i.$slideTrack),i.reinit())},e.prototype.unload=function(){var e=this;i(".slick-cloned",e.$slider).remove(),e.$dots&&e.$dots.remove(),e.$prevArrow&&e.htmlExpr.test(e.options.prevArrow)&&e.$prevArrow.remove(),e.$nextArrow&&e.htmlExpr.test(e.options.nextArrow)&&e.$nextArrow.remove(),e.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden","true").css("width","")},e.prototype.unslick=function(i){var e=this;e.$slider.trigger("unslick",[e,i]),e.destroy()},e.prototype.updateArrows=function(){var i=this;Math.floor(i.options.slidesToShow/2),!0===i.options.arrows&&i.slideCount>i.options.slidesToShow&&!i.options.infinite&&(i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false"),i.$nextArrow.removeClass("slick-disabled").attr("aria-disabled","false"),0===i.currentSlide?(i.$prevArrow.addClass("slick-disabled").attr("aria-disabled","true"),i.$nextArrow.removeClass("slick-disabled").attr("aria-disabled","false")):i.currentSlide>=i.slideCount-i.options.slidesToShow&&!1===i.options.centerMode?(i.$nextArrow.addClass("slick-disabled").attr("aria-disabled","true"),i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false")):i.currentSlide>=i.slideCount-1&&!0===i.options.centerMode&&(i.$nextArrow.addClass("slick-disabled").attr("aria-disabled","true"),i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false")))},e.prototype.updateDots=function(){var i=this;null!==i.$dots&&(i.$dots.find("li").removeClass("slick-active").end(),i.$dots.find("li").eq(Math.floor(i.currentSlide/i.options.slidesToScroll)).addClass("slick-active"))},e.prototype.visibility=function(){var i=this;i.options.autoplay&&(document[i.hidden]?i.interrupted=!0:i.interrupted=!1)},i.fn.slick=function(){var i,t,o=this,s=arguments[0],n=Array.prototype.slice.call(arguments,1),r=o.length;for(i=0;i<r;i++)if("object"==typeof s||void 0===s?o[i].slick=new e(o[i],s):t=o[i].slick[s].apply(o[i].slick,n),void 0!==t)return t;return o}});


