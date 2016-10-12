// Global Scope

/**
* Document Ready Event
*/
jQuery(document).ready(function( $ ) {
	var MainPageScript = {

    // creates 3 dropdown menus
    createDropdowns : function() {
        $('.menu .dropbtn').click(function(e) {
            if($('#dropdown-btn').is(':visible')) {
                $('#dropdown-btn').toggle();
                $('.flexslider.main').css('z-index', 0);
            }
            else {
                $('#dropdown-btn').toggle();
                $('.flexslider.main').css('z-index', -1);
            }
        });

        $('.dropdown-m .drop-menu-btn').click(function(e) {
            if($('#dropdown-menu-btn').is(':visible')) {
                $('#dropdown-menu-btn').toggle();
                $('.flexslider.main').css('z-index', 0);
            }
            else {
                $('#dropdown-menu-btn').toggle();
                $('.flexslider.main').css('z-index', -1);
            }
        });

        $('.dropdown-m #dropdown-menu-btn .dropdown2').mouseover(function(e) {
            if($('#dropdown-btn2').is(':visible')) {
                $('#dropdown-btn2').toggle();
                $('.flexslider.main').css('z-index', 0);
            }
            else {
                $('#dropdown-btn2').toggle();
                $('.flexslider.main').css('z-index', -1);
            }
        });

        $('.dropdown-m #dropdown-menu-btn .dropdown2').mouseout(function(e) {
            $('#dropdown-btn2').toggle();
            $('.flexslider.main').css('z-index', -1);
        });
    },

    // displays search input on search icon click and hides it when focus is shifted
    displaySearchInput : function() {
        $('.search-icon').click(function(e) {
            e.preventDefault();
            $('.search-input').show().focus();
            $('.search-icon').hide();
        });
        $('.search-input').focusout(function() {
            $('.search-input').hide();
            $('.search-icon').show();
        });
    },

    // initializes slider
    initFlexSlider : function() {
        $('.flexslider').flexslider({
            animation: "slide"
        });
    },

    // initializes carousel for display new arrivals
    initCarousel : function() {
        var owl = $("#owl-demo");

        owl.owlCarousel({
            items : 5,
            navigation : true,
            pagination : false,
            navigationText : ['', '']
            //beforeMove: move
        });

        var categorySelected = false;

        var currentActiveCategory = $('.new-arrivals .categories li:first-child');

        var filterValue = '';

        $('.new-arrivals .categories li').click(function(e) {
            e.preventDefault();
            categorySelected = true;
            currentActiveCategory.removeClass('selected');
            $(this).addClass('selected');
            currentActiveCategory = $(this);
            filterValue = $( this).find('a').attr('data-filter');
            $('.new-arrivals .select-new-arrivals').val(filterValue);
            $('.new-arrivals #owl-demo').find('.item:not(' + filterValue + ')').parent().hide();
            $('.new-arrivals #owl-demo').find('.item' + filterValue).parent().show();
        });

        $('.new-arrivals .select-new-arrivals').change(function() {
            var filterValue = $('.new-arrivals .select-new-arrivals').val();
            currentActiveCategory.removeClass('selected');
            currentActiveCategory = $('.new-arrivals .categories li.' + filterValue.substring(1, filterValue.length));
            //console.log($('.new-arrivals .categories li.' + filterValue.substring(1, filterValue.length)));
            currentActiveCategory.addClass('selected');
            $('.new-arrivals #owl-demo').find('.item:not(' + filterValue + ')').parent().hide();
            $('.new-arrivals #owl-demo').find('.item' + filterValue).parent().show();
        });


        $('#owl-demo .item').mouseover(function() {
            $(this).addClass('selected');
            $($(this).find('.wishlist')).click(function(e) {
                e.preventDefault();


            });
            $($(this).find('.quick-look')).click(function(e) {
                e.preventDefault();


            });
            $($(this).find('.cart')).click(function(e) {
                e.preventDefault();
            });
        });
        $('#owl-demo .item').mouseout(function() {
            $(this).removeClass('selected');
        });
    },

    // initializes timer for special offers
    initTimer : function() {
        function startTimer(duration, day, hour, min, sec) {
            var timer = duration, days, hours, minutes, seconds;
            setInterval(function () {
                days = parseInt(timer / 86400, 10);
                var remaining = parseInt(timer % 86400, 10);
                hours = parseInt(remaining/3600, 10);
                remaining = parseInt(remaining % 3600, 10);
                minutes = parseInt(remaining / 60, 10);
                seconds = parseInt(timer % 60, 10);

                days = days < 10 ? "0" + days : days;
                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                day.text(days);
                hour.text(hours);
                min.text(minutes);
                sec.text(seconds);

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }
        var slides = $('.special-offers .slides').children();
        $.each(slides, function(indx, slide) {
            var day = $(slide).find('.days p:first-child'), hour = $(slide).find('.hours  p:first-child'), min = $(slide).find('.minutes  p:first-child'),
                sec = $(slide).find('.seconds  p:first-child'),
                time = parseInt(day.text(), 10)*86400 + parseInt(hour.text(), 10)*3600 + parseInt(min.text(), 10)*60 + parseInt(sec.text(), 10);
            startTimer(time, day, hour, min, sec);
        });
    },

    // displays users and their reviews on mouseover
    setupUserReviews : function() {
        $('.reviews .users div').mouseover(function() {
            $(this).find('.transparent').hide();
            var filterValue = $( this).attr('data-filter');
            $('.reviews .review-content' + filterValue).show();
            $('.reviews .review-content:not(' + filterValue + ')').hide();
            $('.reviews .user-name' + filterValue).show();
            $('.reviews .user-name:not(' + filterValue + ')').hide();
            $('.reviews .user-info' + filterValue).show();
            $('.reviews .user-info:not(' + filterValue + ')').hide();
        });

        $('.reviews .users div').mouseout(function() {
            $(this).find('.transparent').show();
        });
    },

    // initializes isotope to display featured products
    initIsotope : function() {
        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
			masonry: {
				isFitWidth: true
			  }
        });

        $('.featured-products .categories li').click(function(e) {
            e.preventDefault();
            $('.featured-products .categories li').removeClass('selected');
            var filterValue = $(this).find('a').attr('data-filter');
            $('.featured-products .select-categories').val(filterValue);
            $grid.isotope({ filter: filterValue });
        });

        $('.featured-products .select-categories').change(function() {
            var selected = $('.featured-products .select-categories').val();
            $('.featured-products .categories li').removeClass('selected');
            $('.featured-products .categories li.' + selected.substring(1, selected.length)).addClass('selected');
            $grid.isotope({ filter: selected });
        });

        var currentActiveFeatureCategory = $('.featured-products .categories li:first-child');

        $('.featured-products .categories li').click(function(e) {
            e.preventDefault();
            currentActiveFeatureCategory.removeClass('selected');
            $(this).addClass('selected');
            currentActiveFeatureCategory = $(this);
        });
    },

    // fetches and displays 8 photos from instagram
    setupInstagramFeed : function () {
        var feed = new Instafeed({
            get: 'tagged',
            tagName: 'furniture',
            limit: 8,
            resolution: 'low_resolution',
            accessToken: '289533736.3a81a9f.80edef3b8e844148ab372c08ee28f9e3',
            clientId: '289533736',
            template: '<div class="bg" style="background-image:url({{image}}); background-size: cover; background-repeat: no-repeat"></div>'
        });
        feed.run();
    },

    init: function() {

        MainPageScript.createDropdowns();
        MainPageScript.displaySearchInput();
        MainPageScript.initFlexSlider();
        MainPageScript.initCarousel();
        MainPageScript.initTimer();
        MainPageScript.setupUserReviews();
        MainPageScript.initIsotope();
        MainPageScript.setupInstagramFeed();
    }
}
	MainPageScript.init();
});

/**
* Window Load Event
*/
jQuery(window).load(function() {

});

/**
* Window Resize Event
*/
(function() {
	jQuery(window).on('resize', function(e) {

	});
})();
