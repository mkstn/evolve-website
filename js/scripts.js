(function($) {
    "use strict";
      
    /*--------
    Preloader
    ---------*/ 
    setTimeout(function() { 
        $(".preloader").delay(500).fadeOut(1000);
    }, 1000 );   
    /*----------
    !Modernizr
    -----------*/
    if(!Modernizr.touch){ 
        /*----------
        Parallax
        -----------*/
        $.stellar();
        /*----------------------------
        Youtube Fullscreen Background
        -----------------------------*/
        $(".player").mb_YTPlayer();
    } 
    /*---------------
    Home Text Slider
    ----------------*/ 
    $('#slider-home').liquidSlider({
        autoSlide: true,
        autoSlideInterval: 4500,
        autoSlideControls: true,
        forceAutoSlide: true,
        dynamicArrows: false,
        slideEaseFunction:'animate.css',
        slideEaseDuration:900,
        heightEaseDuration:900,
        animateIn:"bounceIn",
        animateOut:"bounceOut" 
    }); 
    /*---------------
    Quotes Slider
    ----------------*/
    $('#quotes-slider').liquidSlider({
        autoSlide: true,
        autoSlideDirection: 'right',
        autoSlideInterval: 4500,
        autoSlideControls: true,
        forceAutoSlide: true,
        autoHeight: false,
        dynamicArrows: true,
        slideEaseFunction:'animate.css',
        slideEaseDuration:500,
        heightEaseDuration:500,
        animateIn:"fadeIn",
        animateOut:"fadeOut"
    });
    /*----------------
    Testimonial Slider
    -----------------*/
    $('#testimonials-slider').liquidSlider({
        autoSlide: true,
        autoSlideDirection: 'right',
        autoSlideInterval:  5000,
        autoSlideControls:  true,
        forceAutoSlide: true,
        autoHeight: false,
        dynamicArrows: true,
        slideEaseFunction:'animate.css',
        slideEaseDuration:500,
        heightEaseDuration:500,
        animateIn:"flipInX",
        animateOut:"fadeOut"
    });
    /*----------------
    Sticky Navbar
    -----------------*/ 
    $(".navbar-sticky").sticky({topSpacing:0});
    /*----------------
    Auto Close Navbar
    -----------------*/ 
    function close_toggle() {
        if ($(window).width() <= 992) {
          $('.navbar-collapse a').on('click', function(){
              $('.navbar-collapse').collapse('hide');
          });
        }
        else { $('.navbar .navbar-default a').off('click'); }
    }
    close_toggle();
    $(window).resize(close_toggle); 
    $(".navbar-collapse").css({ maxHeight: $(window).height() - $(".navbar-header").height() + "px" });
    $(function () {
        $('.navbar-toggle').bind('click', function (event) {
            var $anchor = $('.navbar-header');
            $('html, body').stop().animate({
                scrollTop: $($anchor).offset().top - 0
            }, 800, 'swing');
            event.preventDefault();
        });
    });
    /*----------------
    WOW Animation.css
    -----------------*/ 
    var wow = new WOW({
        boxClass:     'wow',      // animated element css class (default is wow) 
        offset:       150,          // distance to the element when triggering the animation (default is 0)
        mobile:       false        // trigger animations on mobile devices (true is default)
    });
    wow.init();
    /*-----------------------------
    Bootstrap Tooltip, Alerts, Tabs
    ------------------------------*/
    $(function () { $("[data-toggle='tooltip']").tooltip();  
        $(".alert").alert()
    });
    $(function () {
        var active = true;
        $('#collapse-init').click(function () {
            if (active) {
                active = false;
                $('.panel-collapse').collapse('show');
                $('.panel-title').attr('data-toggle', '');
                $(this).text('Close All');
            } else {
                active = true;
                $('.panel-collapse').collapse('hide');
                $('.panel-title').attr('data-toggle', 'collapse');
                $(this).text('Open All');
            }
        });
        $('#accordion').on('show.bs.collapse', function () {
            if (active) $('#accordion .in').collapse('hide');
        });
    });
    $('#myTab a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })
    /*----------
    Skill Bars
    -----------*/
    $('.skills-col').waypoint(function() {
       $('.skillbar').each(function(){
            $(this).find('.skillbar-bar').animate({
                width:$(this).attr('data-percent')
            },2500);
        });
        }, { offset: '100%' 
    }); 
    /*----------
    Counter Up
    -----------*/   
    $('.counter').counterUp({
        delay: 30,
        time: 1800
    });  
    /*----------
    FlexSlider
    -----------*/  
    $('.flexslider').flexslider({
        animation: "slide",
    });   
    /*-----------
    Contact Form
    ------------*/ 
    $('#contactform').submit(function(){
        var action = $(this).attr('action');
        $("#message").slideUp(750,function() {
        $('#message').hide();
        $('#submit')
            .after('<img src="img/assets/contact-form-loader.gif" class="loader" />')
            .attr('disabled','disabled');
            $.post(action, {
                name: $('#name').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                comments: $('#comments').val(),
            },
            function(data){
                document.getElementById('message').innerHTML = data;
                $('#message').slideDown('slow');
                $('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
                $('#submit').removeAttr('disabled');
                if(data.match('success') != null) $('#contactform').slideUp('slow');

            });
        });
        return false;
    }); 
    /*-----------
    Google Maps
    ------------*/ 
    $("#map").gmap3({
        marker:{     
        address:"93 Worth St, New York, NY", 
        options:{ icon: "img/assets/marker.png"}},
        map:{
        options:{
        styles: [ {
        stylers: [ { "saturation":-100 }, { "lightness": 0 }, { "gamma": 0.5 }]},
        ],
        zoom: 13,
        scrollwheel:false,
        draggable: true }
        }
    });	
    /*-----------
    Back to Top
    ------------*/ 
    $(window).scroll(function(){
        if($(window).scrollTop() > 300){
            $("#back-to-top").fadeIn(600);
        } else {
            $("#back-to-top").fadeOut(600);
        }
        if ($(this).scrollTop() > 200){
            $('.navbar-right').addClass("rez") 
        } 
        else{ 
            $('.navbar-right').removeClass("rez") 
        }  
    });
    $('#back-to-top, .back-to-top').click(function() {
        $('html, body').animate({ scrollTop:0 }, '1000');
        return false;
    });
    /*-----------
    Backstretch
    ------------*/
    $(".home-fullscreen-slider").backstretch([
        "img/slide-1.jpg",
        "img/slide-2.jpg",
        "img/slide-3.jpg"
    ], {
        fade: 750,
        duration: 4000
    }); 
    /*---------------------
    Smooth Scroll To Anchor
    ----------------------*/
    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $(function() {
        $('#main-nav a,.footer-menu a,.btn-home a,.move a').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 68
            }, 1000);
            event.preventDefault();
        });
    });  
    /*------------------------------
    Active Menu Item on Page Scroll
    -------------------------------*/
    var sections = $('section')
      , nav = $('nav')
      , nav_height = nav.outerHeight();

    $(window).on('scroll', function () {
      var cur_pos = $(this).scrollTop();

      sections.each(function() {
        var top = $(this).offset().top - nav_height,
            bottom = top + $(this).outerHeight();

        if (cur_pos >= top && cur_pos <= bottom) {
          nav.find('a').removeClass('current');
          sections.removeClass('current');

          $(this).addClass('current');
          nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('current');
        }
      });
    });  
    
})(jQuery); 


/* --------
Portfolio
 ---------*/
(function($, window, document, undefined) {
    "use strict";
    
    var gridContainer = $('#grid-container-fullwidth'),
        filtersContainer = $('#filters-container-fullwidth'),
        wrap, filtersCallback;

    gridContainer.cubeportfolio({
        defaultFilter: '*',
        animationType: 'slideDelay',
        gapHorizontal: 15,
        gapVertical: 15,
        gridAdjustment: 'responsive',
        caption: 'zoom',
        displayType: 'lazyLoading',
        displayTypeSpeed: 100,
        // lightbox
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',
        // singlePage popup
        singlePageDelegate: '.cbp-singlePage',
        singlePageDeeplinking: true,
        singlePageStickyNavigation: true,
        singlePageCounter: '<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>',
        singlePageCallback: function(url, element) {
            // to update singlePage content use the following method: this.updateSinglePage(yourContent)
            var t = this;
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'html',
                timeout: 5000
            })
                .done(function(result) {
                    t.updateSinglePage(result);
                })
                .fail(function() {
                    t.updateSinglePage("Error! Please refresh the page!");
                });
        },
        // single page inline
        singlePageInlineDelegate: '.cbp-singlePageInline',
        singlePageInlinePosition: 'above',
        singlePageInlineInFocus: true,
        singlePageInlineCallback: function(url, element) {
            // to update singlePage Inline content use the following method: this.updateSinglePageInline(yourContent)
        }
    });
    /* add listener for filters */
    if (filtersContainer.hasClass('cbp-l-filters-dropdown')) {
        wrap = filtersContainer.find('.cbp-l-filters-dropdownWrap');
        wrap.on({
            'mouseover.cbp': function() {
                wrap.addClass('cbp-l-filters-dropdownWrap-open');
            },
            'mouseleave.cbp': function() {
                wrap.removeClass('cbp-l-filters-dropdownWrap-open');
            }
        });
        filtersCallback = function(me) {
            wrap.find('.cbp-filter-item').removeClass('cbp-filter-item-active');
            wrap.find('.cbp-l-filters-dropdownHeader').text(me.text());
            me.addClass('cbp-filter-item-active');
            wrap.trigger('mouseleave.cbp');
        };
    } else {
        filtersCallback = function(me) {
            me.addClass('cbp-filter-item-active').siblings().removeClass('cbp-filter-item-active');
        };
    }
    filtersContainer.on('click.cbp', '.cbp-filter-item', function() {
        var me = $(this);
        if (me.hasClass('cbp-filter-item-active')) {
            return;
        }
        // get cubeportfolio data and check if is still animating (reposition) the items.
        if (!$.data(gridContainer[0], 'cubeportfolio').isAnimating) {
            filtersCallback.call(null, me);
        }
        // filter the items
        gridContainer.cubeportfolio('filter', me.data('filter'), function() {});
    });
    /* activate counter for filters */
    gridContainer.cubeportfolio('showCounter', filtersContainer.find('.cbp-filter-item'), function() {
        // read from url and change filter active
        var match = /#cbpf=(.*?)([#|?&]|$)/gi.exec(location.href),
            item;
        if (match !== null) {
            item = filtersContainer.find('.cbp-filter-item').filter('[data-filter="' + match[1] + '"]');
            if (item.length) {
                filtersCallback.call(null, item);
            }
        }
    });
    /* add listener for load more */
    $('.cbp-l-loadMore-button-link').on('click.cbp', function(e) {
        e.preventDefault();
        var clicks, me = $(this),
            oMsg;
        if (me.hasClass('cbp-l-loadMore-button-stop')) {
            return;
        }
        // get the number of times the loadMore link has been clicked
        clicks = $.data(this, 'numberOfClicks');
        clicks = (clicks) ? ++clicks : 1;
        $.data(this, 'numberOfClicks', clicks);
        // set loading status
        oMsg = me.text();
        me.text('LOADING...');
        // perform ajax request
        $.ajax({
            url: me.attr('href'),
            type: 'GET',
            dataType: 'HTML'
        }).done(function(result) {
            var items, itemsNext;
            // find current container
            items = $(result).filter(function() {
                return $(this).is('div' + '.cbp-loadMore-block' + clicks);
            });
            gridContainer.cubeportfolio('appendItems', items.html(),
                function() {
                    // put the original message back
                    me.text(oMsg);
                    // check if we have more works
                    itemsNext = $(result).filter(function() {
                        return $(this).is('div' + '.cbp-loadMore-block' + (clicks + 1));
                    });

                    if (itemsNext.length === 0) {
                        me.text('NO MORE WORKS');
                        me.addClass('cbp-l-loadMore-button-stop');
                    }
                });
        }).fail(function() {
            // error
        });
    });
})(jQuery, window, document);




 