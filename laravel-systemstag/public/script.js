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

            if ($(this).is('input')) {
                // Update placeholder for input elements
                $(this).attr('placeholder', text);
            } else if ($(this).is('button')) {
                // Replace the entire content for button elements
                $(this).html(text);
            } else {
                // For other elements, replace the text while preserving nested HTML
                $(this).contents().filter(function () {
                    return this.nodeType === 3; // Only text nodes
                }).first().replaceWith(text);
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

        const footerImage = lang === 'ar'
            ? 'img/ST web footer image copy.png'
            : 'img/ST web footer image copy 4.png';
        $('.foo-image').attr('src', footerImage);

        // Apply specific font-family for carousel
        const arabicFont = 'kigelia-arabic-bold';
        const englishFont = '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji';

        const carouselFont = lang === 'ar' ? arabicFont : englishFont;
        $('.title, .topic, .des, .specifications, .mbtn-txt, .seeMore span').css('font-family', carouselFont);

        const btnarabicFont = 'kigelia-arabic-bold';
        const btnenglishFont = '"Belleza", sans-serif';

        const footerTxtFont = lang === 'ar' ? btnarabicFont : btnenglishFont;
        $('.foo-button, .as-button, .comment-tab h4').css('font-family', footerTxtFont);

        const legalArLetterS = '0';
        const legalEnLetterS = '0.2rem';

        const legalLetterSpacing = lang === 'ar' ? legalArLetterS : legalEnLetterS;
        $('.inner p, .inner h2, .main-nav li a, article h2, .field label, .actions li input, .mbtn-txt, .seeMore span').css('letter-spacing', legalLetterSpacing);

        // about screen and people-comment-screen text direction
        const asarabicDir = 'rtl';
        const asenglishDir = 'ltr';

        const aboutScreenDir = lang === 'ar' ? asarabicDir : asenglishDir;
        $('.lDir, .comment-tab p').css('direction', aboutScreenDir);

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
    sr.reveal('.responsive-heading', { delay: 1200, origin: 'top',  distance: '0px' });
    sr.reveal('.imgSR, .first-imgSR', { delay: 400, origin: 'bottom' });
    sr.reveal('.textSR', { delay: 200, origin: 'left' });
    function applyScrollReveal() {
        if ($(window).width() <= 992) {
            // Disable ScrollReveal for mobile devices
            ScrollReveal().clean('header, .legalHeader'); // Remove existing ScrollReveal animations
        } else {
            // Enable ScrollReveal for larger screens
            ScrollReveal().reveal('header, .legalHeader', {
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

    ScrollReveal().reveal('.main-content .right-section', {
        beforeReveal: (el) => {
          el.style.opacity = '0'; // Start invisible
          el.style.transform = 'translate(50px, 87px)'; // Offset for 60 degrees
        },
        afterReveal: (el) => {
          el.style.transition = 'transform 1s ease-out, opacity 1s ease-out';
          el.style.transform = 'translate(0, 0)'; // Animate to original position
          el.style.opacity = '1'; // Fade in
        },
        reset: true, // Reset animation when scrolling back
        delay: 100
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

    $(window).on('scroll', function () {
        const scrollTop = $(window).scrollTop(); // Current scroll position
        const windowHeight = $(window).height(); // Visible part of the window
        const documentHeight = $(document).height(); // Total height of the page

        if (scrollTop + windowHeight >= documentHeight - 50) {
            // Add a class to make the footer visible
            $('.footer-tab').addClass('visible');
        } else {
            // Remove the class to hide the footer
            $('.footer-tab').removeClass('visible');
        }
    });

    // Function to check if element is in viewport
    function checkInView() {
        // Loop through each .mobile-image and .comment-tab to check if it's in view
        $('.mobile-image, .comment-tab').each(function() {
          var windowHeight = $(window).height();
          var elementTop = $(this).offset().top;
          var elementBottom = elementTop + $(this).outerHeight();
          var viewportTop = $(window).scrollTop();
          var viewportBottom = viewportTop + windowHeight;

          // If element is in the viewport, add the 'show' class
          if (elementBottom > viewportTop && elementTop < viewportBottom) {
            $(this).addClass('show');
          } else {
            // If element is out of viewport, remove the 'show' class to reset animation
            $(this).removeClass('show');
          }
        });
    }

    // Trigger the check on scroll and load
    $(window).on('scroll load', function() {
    checkInView();
    });

    // Initial check on page load
    checkInView();

    // Dynamically add the required HTML and scripts
    (function () {
        const div = document.createElement("div");
        div.id = "systems_tag_live_chat";
        div.setAttribute(
          "channel_key",
          "656695f324ad5896151eec0cf4202c1066f68119"
        );
        div.setAttribute("base_url", "http://chat.unitedgroupone.com/");
        document.body.appendChild(div);

        const link = document.createElement("link");
        link.rel = "stylesheet";
        link.href = "http://chat.unitedgroupone.com/css/app.css";
        document.head.appendChild(link);

        const vendorsScript = document.createElement("script");
        vendorsScript.src =
          "http://chat.unitedgroupone.com/js/chunk-vendors.js";
        vendorsScript.defer = true;
        document.body.appendChild(vendorsScript);

        const appScript = document.createElement("script");
        appScript.src = "http://chat.unitedgroupone.com/js/app.js";
        appScript.defer = true;
        document.body.appendChild(appScript);
    })();
});