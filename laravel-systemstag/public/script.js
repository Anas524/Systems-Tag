$(document).ready(function () {
    // Set the default language from localStorage or default to 'ar'
    let currentLang = localStorage.getItem('language') || 'ar';

    // Initialize the page with the correct language and direction
    changeLanguage(currentLang);

    // Toggle button click event
    $('#toggleLang, #toggleLangOne').on('click', function () {
        if (currentLang === 'ar') {
            changeLanguage('en');
            $(this).text('عربي'); // Switch to Arabic
        } else {
            changeLanguage('ar');
            $(this).text('English'); // Switch to English
        }
    });

    function changeLanguage(lang) {
        currentLang = lang;
        localStorage.setItem('language', lang); // Store language in localStorage

        // Change direction based on language
        if (lang === 'ar') {
            $('body').attr('dir', 'rtl');
            $('#toggleLang, #toggleLangOne').text('English');
            $('#toggleLang, #toggleLangOne').addClass('font-english')
        } else {
            $('body').attr('dir', 'ltr');
            $('#toggleLang, #toggleLangOne').text('عربي');
            $('#toggleLang, #toggleLangOne').removeClass('font-english');
        }

        // Update language-specific text and fonts
        $('[data-lang-ar]').each(function () {
            const text = $(this).data(`lang-${lang}`);

            // Update placeholder for inputs or text for other elements
            if ($(this).is('input')) {
                $(this).attr('placeholder', text);
            } else {
                $(this).text(text);
            }

            // Switch font class based on language
            if (lang === 'ar') {
                $(this).removeClass('font-english').addClass('font-arabic');
            } else {
                $(this).removeClass('font-arabic').addClass('font-english');
            }
        });

        const coverImage = lang === 'ar'
            ? 'img/ST web image Arabic.png'
            : 'img/ST web image.png';
        $('.cover-image').attr('src', coverImage);

        // Apply specific font-family for carousel
        const arabicFont = 'Khebrat Musamim';
        const englishFont = '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji';

        const carouselFont = lang === 'ar' ? arabicFont : englishFont;
        $('.title, .topic, .des, .specifications').css('font-family', carouselFont);

        const legalArLetterS = '0';
        const legalEnLetterS = '0.2rem';

        const legalLetterSpacing = lang === 'ar' ? legalArLetterS : legalEnLetterS;
        $('.inner p, .inner h2, .main-nav li a, article h2, .field label, .actions li input, .magnetic-btn').css('letter-spacing', legalLetterSpacing);

        const asarabicDir = 'rtl';
        const asenglishDir = 'ltr';

        const aboutScreenDir = lang === 'ar' ? asarabicDir : asenglishDir;
        $('.lDir').css('direction', aboutScreenDir);

        $('input[data-lang-en][data-lang-ar]').each(function () {
            // Update the value attribute based on the selected language
            const newValue = lang === 'ar' ? $(this).data('lang-ar') : $(this).data('lang-en');
            $(this).val(newValue);
        });
    }

    setTimeout(function() {
        $('#splashScreen').fadeOut('slow')
    }, 1000);

    function aboutImgBackground() {
        if (window.matchMedia("(max-width: 736px)").matches) {
            $('.useFilter').addClass('filtered');
        } else {
            $('.useFilter').removeClass('filtered');
        }
    }

    aboutImgBackground();

    $(window).on('resize', aboutImgBackground);


    //common reveal options to create reveal animations
    const sr = ScrollReveal({
        reset: true,
        distance: '60px',
        duration: 2500,
        delay: 400,
    });

    //target elements, and specify options to create reveal animations
    sr.reveal('.imgSR, .first-imgSR', { delay: 400, origin: 'bottom' });
    sr.reveal('.textSR', { delay: 200, origin: 'left' });
    sr.reveal('.responsive-heading', { delay: 1200, origin: 'top',  distance: '0px' });
    function applyScrollReveal() {
        if ($(window).width() <= 992) {
            // Disable ScrollReveal for mobile devices
            ScrollReveal().clean('header'); // Remove existing ScrollReveal animations
        } else {
            // Enable ScrollReveal for larger screens
            ScrollReveal().reveal('header', {
                delay: 1400,
                origin: 'top',
                reset: false,
                mobile: false
            });
        }
    }

    applyScrollReveal();

    // Reapply ScrollReveal on window resize
    $(window).on('resize', function () {
        applyScrollReveal();
    });


    $('.magnetic-btn').each(function() {
        $(this).on('mousemove', function(e) {
            let x = e.offsetX;
            let y = e.offsetY;
            let btnWidth = $(this).width();
            let btnHeight = $(this).height();
            let transX = (x - btnWidth / 2) /100;
            let transY = (y - btnHeight / 2) /100;
            $(this).css('transform', `translate(${transX}px, ${transY}px)`);

            let mx = e.pageX - $(this).offset().left;
            let my = e.pageY - $(this).offset().top;
            $(this).css('--x', mx + 'px');
            $(this).css('--y', my + 'px');
        });

        $(this).on('mouseout', function() {
            $(this).css('transform', '');
        });
    });

    $('#home, #homeOne').on('click', function(e) {
        if($(window).scrollTop() === 0) {
            location.reload(); // Reloads the page
        } else {
            e.preventDefault(); // Prevents default behavior if not at the top
            $('html, body').animate({ scrollTop: 0 }, 'slow'); // Smooth scroll to top
        }
    })

    $(window).on('beforeunload', function () {
        $(window).scrollTop(0);
    })
});

$(document).ready(function () {
    let $carousel = $('.carousel');
    let $listHTML = $('.carousel .list');
    let unAcceptClick;

    // Next button click event
    $('#next').on('click', function () {
        showSlider('next');
    });

    // Previous button click event
    $('#prev').on('click', function () {
        showSlider('prev');
    });

    // Function to handle slider navigation
    const showSlider = (type) => {
        $('#next, #prev').css('pointer-events', 'none'); // Disable pointer events

        $carousel.removeClass('next prev'); // Remove existing classes
        let $items = $('.carousel .list .item'); // Get all items

        if (type === 'next') {
            $listHTML.append($items.first()); // Move the first item to the end
            $carousel.addClass('next');
        } else {
            $listHTML.prepend($items.last()); // Move the last item to the beginning
            $carousel.addClass('prev');
        }

        // Re-enable pointer events after a delay
        clearTimeout(unAcceptClick);
        unAcceptClick = setTimeout(() => {
            $('#next, #prev').css('pointer-events', 'auto');
        }, 2000);
    };

    // See more button click events
    $('.seeMore').on('click', function () {
        $carousel.removeClass('next prev').addClass('showDetail');
    });

    // Back button click event
    $('#back').on('click', function () {
        $carousel.removeClass('showDetail');
    });
});

$(document).ready(function () {
    const $toggleBtn = $('.toggle_btn');
    const $dropDownMenu = $('.dropdown_menu');

    $toggleBtn.on('click', function() {
      $dropDownMenu.toggleClass('open');
      const isOpen = $dropDownMenu.hasClass('open');

      $toggleBtn.toggleClass('open');
    });

    $dropDownMenu.find('a').on('click', function() {
        $dropDownMenu.removeClass('open');
        $toggleBtn.removeClass('open');
    });
});