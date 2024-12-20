<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Systems Tag</title>
    <link rel="icon" href="images/St logo for Stellar.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/carousel.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Belleza&family=Lalezar&family=Lilita+One&family=Marhey:wght@300..700&family=Original+Surfer&family=Pacifico&family=Paytone+One&family=Readex+Pro:wght@160..700&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <div id="splashScreen">
        <img id="stLogo" src="img/Final logo copy 4.png" alt="logo">
    </div>

    <header>
        <div class="navbar">
          <div class="logo">
            <img src="images/St logo for Stellar.png" alt="Header Logo">
            <a href="">Systems <span>Tag</span></a>
          </div>
          <ul class="links m-0">
            <li><a href="#" id="home" data-lang-ar="الرئيسية" data-lang-en="Home">الرئيسية</a></li>
            <li><a href="{{ route('about') }}" class="reveal-item" data-lang-ar="معلومات عنا" data-lang-en="About">معلومات عنا</a></li>
            <li><a href="#footer" class="reveal-item" data-lang-ar="اتصل بنا" data-lang-en="Contact">اتصل بنا</a></li>
            <li><a class="font-arabic reveal-item" id="toggleLang" style="cursor: pointer;">English</a></li>
          </ul>
          <div class="toggle_btn">
            <i class="line line1"></i>
            <i class="line line2"></i>
            <i class="line line3"></i>
          </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="#" id="homeOne" data-lang-ar="الرئيسية" data-lang-en="Home">الرئيسية</a></li>
            <li><a href="{{ route('about') }}" class="reveal-item" data-lang-ar="معلومات عنا" data-lang-en="About">معلومات عنا</a></li>
            <li><a href="#footer" class="reveal-item" data-lang-ar="اتصل بنا" data-lang-en="Contact">اتصل بنا</a></li>
            <li><a class="font-arabic reveal-item" id="toggleLangOne" style="cursor: pointer;">English</a></li>
        </div>
    </header>

    <div class="container">
        <div class="row justify-content-center align-item-center mt-5 mb-5">
            <div class="col-12 col-md-10 text-center">
                <h1 class="mt-5 responsive-heading font-arabic" data-lang-ar="الدردشة . اللقاء . الاتصال . التعاون" data-lang-en="chat . meet . call . collaborate .">الدردشة . اللقاء . الاتصال . التعاون</h1>
            </div>
        </div>
    </div>

    <div class="cover-container">
        <img src="img/ST web image Arabic.png" alt="Cover Image" class="cover-image img-fluid first-imgSR">
    </div>

    <div class="position-relative text-overlay-container">
        <img src="images/Mobile chat 3D view copy.png" alt="Cover Image" class="img-fluid w-100 h100 imgSR">
        <div class="position-absolute text-overlay d-flex flex-column justify-content-center align-items-left textSR">
            <h1 class="display-5 fw-bold text-black" data-lang-ar="فريقك على بعد نقرة واحدة فقط" data-lang-en="Your team is just a click away">فريقك على بعد نقرة واحدة فقط</h1>
            <p class="fs-5 text-black" data-lang-ar="نحن نؤمن بأن العمل الجماعي يزدهر في بيئة تواصل سلسة" data-lang-en="we believe teamwork thrives in a seamless communication environment">نحن نؤمن بأن العمل الجماعي يزدهر في بيئة تواصل سلسة</p>
        </div>
    </div>

    <div class="carousel">
        <div class="list">
            <div class="item">
                <img src="img/I phone 1.png" alt="">
                <div class="introduce">
                    <div class="title" data-lang-ar="مظهر تطبيقنا على الأجهزة" data-lang-en="Our app's look on devices">
                        مظهر تطبيقنا على الأجهزة
                    </div>
                    <div class="topic" data-lang-ar="سهل الاستخدام" data-lang-en="User Friendly">
                        سهل الاستخدام
                    </div>
                    <div class="des" data-lang-ar="يعرض شريط القائمة المواصفات الإضافية" data-lang-en="The menu bar displays additional specifications">
                        يعرض شريط القائمة المواصفات الإضافية
                    </div>
                    <!-- <button class="seeMore" data-lang-ar="انظر المزيد &#8599" data-lang-en="See More &#8599">
                        انظر المزيد &#8599
                    </button> -->
                    <a class="seeMore magnetic-btn" style="--clr:#e7e7e7; text-decoration: none; background: transparent;">
                        <span style="font-weight: 400;" data-lang-ar="انظر المزيد &#8599" data-lang-en="See More &#8599">انظر المزيد &#8599</span>
                    </a>
                </div>
                <div class="detail">
                    <div class="title" data-lang-ar="سهل الاستخدام" data-lang-en="User Friendly">
                        سهل الاستخدام
                    </div>
                    <div class="des" data-lang-ar="يعرض شريط القائمة مواصفات إضافية، والتي تتضمن البريد الوارد والشخصي والفرق والقنوات والتسميات والمستخدمين" data-lang-en="The menu bar displays additional specifications, which include Inbox, Personal, Teams, Channels, Labels, and Users">
                        يعرض شريط القائمة مواصفات إضافية، والتي تتضمن البريد الوارد والشخصي والفرق والقنوات والتسميات والمستخدمين
                    </div>
                    <div class="specifications">
                        <div>
                            <p data-lang-ar="التوفر" data-lang-en="Availability">التوفر</p>
                            <p data-lang-ar="الدردشة بسلاسة لساعات" data-lang-en="Chat seamlessly for hours">الدردشة بسلاسة لساعات</p>
                        </div>
                        <div>
                            <p data-lang-ar="توافق الجهاز" data-lang-en="Device Compatibility">توافق الجهاز</p>
                            <p data-lang-ar="مُحسّن لنظامي التشغيل Android وiOS" data-lang-en="Optimized for Android and iOS">مُحسّن لنظامي التشغيل Android وiOS</p>
                        </div>
                        <div>
                            <p data-lang-ar="جودة الاتصال" data-lang-en="Connection Quality">جودة الاتصال</p>
                            <p data-lang-ar="رسائل سلسة ودون انقطاع" data-lang-en="Smooth, uninterrupted messaging">رسائل سلسة ودون انقطاع</p>
                        </div>
                        <div>
                            <p data-lang-ar="الميزات الذكية" data-lang-en="Smart Features">الميزات الذكية</p>
                            <p data-lang-ar="إجراءات سريعة وسهلة اللمس" data-lang-en="Quick, touch-friendly actions">إجراءات سريعة وسهلة اللمس</p>
                        </div>
                        <div>
                            <p data-lang-ar="خيارات اللغة" data-lang-en="Language Options">خيارات اللغة</p>
                            <p data-lang-ar="متوفر باللغتين العربية والإنجليزية" data-lang-en="Available in both Arabic and English">متوفر باللغتين العربية والإنجليزية</p>
                        </div>
                    </div>
                    <!-- <div class="checkout">
                        <button>ADD TO CART</button>
                        <button>CHECKOUT</button>
                    </div> -->
                </div>
            </div>
            <div class="item">
                <img src="img/I phone 2.png" alt="">
                <div class="introduce">
                    <div class="title" data-lang-ar="مظهر تطبيقنا على الأجهزة" data-lang-en="Our app's look on devices">
                        مظهر تطبيقنا على الأجهزة
                    </div>
                    <div class="topic" data-lang-ar="آمنة ومضمونة" data-lang-en="Safe and Secure">
                        آمنة ومضمونة
                    </div>
                    <div class="des" data-lang-ar="يجب إرسال الملفات الشخصية والمعلومات الإضافية عبر رسائل آمنة ومأمونة وخاصة" data-lang-en="Profiles and additional information must be communicated through safe, secure, and private messaging">
                        يجب إرسال الملفات الشخصية والمعلومات الإضافية عبر رسائل آمنة ومأمونة وخاصة
                    </div>
                    <a class="seeMore magnetic-btn" style="--clr:#e7e7e7; text-decoration: none; background: transparent;">
                        <span style="font-weight: 400;" data-lang-ar="انظر المزيد &#8599" data-lang-en="See More &#8599">انظر المزيد &#8599</span>
                    </a>
                </div>
                <div class="detail">
                    <div class="title" data-lang-ar="آمنة ومضمونة" data-lang-en="Safe and Secure">
                        آمنة ومضمونة
                    </div>
                    <div class="des" data-lang-ar="يجب إرسال الملفات الشخصية والمعلومات الإضافية عبر رسائل آمنة ومأمونة وخاصة" data-lang-en="Profiles and additional information must be communicated through safe, secure, and private messaging">
                        يجب إرسال الملفات الشخصية والمعلومات الإضافية عبر رسائل آمنة ومأمونة وخاصة
                    </div>
                    <div class="specifications">
                        <div>
                            <p data-lang-ar="التوفر" data-lang-en="Availability">التوفر</p>
                            <p data-lang-ar="الدردشة بسلاسة لساعات" data-lang-en="Chat seamlessly for hours">الدردشة بسلاسة لساعات</p>
                        </div>
                        <div>
                            <p data-lang-ar="توافق الجهاز" data-lang-en="Device Compatibility">توافق الجهاز</p>
                            <p data-lang-ar="مُحسّن لنظامي التشغيل Android وiOS" data-lang-en="Optimized for Android and iOS">مُحسّن لنظامي التشغيل Android وiOS</p>
                        </div>
                        <div>
                            <p data-lang-ar="جودة الاتصال" data-lang-en="Connection Quality">جودة الاتصال</p>
                            <p data-lang-ar="رسائل سلسة ودون انقطاع" data-lang-en="Smooth, uninterrupted messaging">رسائل سلسة ودون انقطاع</p>
                        </div>
                        <div>
                            <p data-lang-ar="الميزات الذكية" data-lang-en="Smart Features">الميزات الذكية</p>
                            <p data-lang-ar="إجراءات سريعة وسهلة اللمس" data-lang-en="Quick, touch-friendly actions">إجراءات سريعة وسهلة اللمس</p>
                        </div>
                        <div>
                            <p data-lang-ar="خيارات اللغة" data-lang-en="Language Options">خيارات اللغة</p>
                            <p data-lang-ar="متوفر باللغتين العربية والإنجليزية" data-lang-en="Available in both Arabic and English">متوفر باللغتين العربية والإنجليزية</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/I phone 3.png" alt="">
                <div class="introduce">
                    <div class="title" data-lang-ar="مظهر تطبيقنا على الأجهزة" data-lang-en="Our app's look on devices">
                        مظهر تطبيقنا على الأجهزة
                    </div>
                    <div class="topic" data-lang-ar="تحدث بحرية" data-lang-en="Speak Freely">
                        تحدث بحرية
                    </div>
                    <div class="des" data-lang-ar="يمكنك عرض جميع الرسائل في علامة التبويب الرسائل التي لم يتم الرد عليها، وهو ما سيكون أكثر فائدة" data-lang-en="You can view all messages in the Unanswered Messages tab, which will be more helpful">
                        يمكنك عرض جميع الرسائل في علامة التبويب الرسائل التي لم يتم الرد عليها، وهو ما سيكون أكثر فائدة
                    </div>
                    <a class="seeMore magnetic-btn" style="--clr:#e7e7e7; text-decoration: none; background: transparent;">
                        <span style="font-weight: 400;" data-lang-ar="انظر المزيد &#8599" data-lang-en="See More &#8599">انظر المزيد &#8599</span>
                    </a>
                </div>
                <div class="detail">
                    <div class="title" data-lang-ar="تحدث بحرية" data-lang-en="Speak Freely">
                        تحدث بحرية
                    </div>
                    <div class="des" data-lang-ar="يمكنك عرض جميع الرسائل في علامة التبويب الرسائل التي لم يتم الرد عليها، وهو ما سيكون أكثر فائدة" data-lang-en="You can view all messages in the Unanswered Messages tab, which will be more helpful">
                        يمكنك عرض جميع الرسائل في علامة التبويب الرسائل التي لم يتم الرد عليها، وهو ما سيكون أكثر فائدة
                    </div>
                    <div class="specifications">
                        <div>
                            <p data-lang-ar="التوفر" data-lang-en="Availability">التوفر</p>
                            <p data-lang-ar="الدردشة بسلاسة لساعات" data-lang-en="Chat seamlessly for hours">الدردشة بسلاسة لساعات</p>
                        </div>
                        <div>
                            <p data-lang-ar="توافق الجهاز" data-lang-en="Device Compatibility">توافق الجهاز</p>
                            <p data-lang-ar="مُحسّن لنظامي التشغيل Android وiOS" data-lang-en="Optimized for Android and iOS">مُحسّن لنظامي التشغيل Android وiOS</p>
                        </div>
                        <div>
                            <p data-lang-ar="جودة الاتصال" data-lang-en="Connection Quality">جودة الاتصال</p>
                            <p data-lang-ar="رسائل سلسة ودون انقطاع" data-lang-en="Smooth, uninterrupted messaging">رسائل سلسة ودون انقطاع</p>
                        </div>
                        <div>
                            <p data-lang-ar="الميزات الذكية" data-lang-en="Smart Features">الميزات الذكية</p>
                            <p data-lang-ar="إجراءات سريعة وسهلة اللمس" data-lang-en="Quick, touch-friendly actions">إجراءات سريعة وسهلة اللمس</p>
                        </div>
                        <div>
                            <p data-lang-ar="خيارات اللغة" data-lang-en="Language Options">خيارات اللغة</p>
                            <p data-lang-ar="متوفر باللغتين العربية والإنجليزية" data-lang-en="Available in both Arabic and English">متوفر باللغتين العربية والإنجليزية</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/I pad 4.png" alt="">
                <div class="introduce">
                    <div class="title" data-lang-ar="مظهر تطبيقنا على الأجهزة" data-lang-en="Our app's look on devices">
                        مظهر تطبيقنا على الأجهزة
                    </div>
                    <div class="topic" data-lang-ar="واجهة قابلة للتكيف" data-lang-en="Adaptive Interface">
                        واجهة قابلة للتكيف
                    </div>
                    <div class="des" data-lang-ar="ضمان تجربة محسّنة وسهلة الاستخدام بغض النظر عما إذا كنت تستخدم هاتفًا أو جهازًا لوحيًا أو كمبيوتر سطح مكتب" data-lang-en="Ensuring an optimized and user-friendly experience regardless of whether you're using a phone, tablet, or desktop">
                        ضمان تجربة محسّنة وسهلة الاستخدام بغض النظر عما إذا كنت تستخدم هاتفًا أو جهازًا لوحيًا أو كمبيوتر سطح مكتب
                    </div>
                    <a class="seeMore magnetic-btn" style="--clr:#e7e7e7; text-decoration: none; background: transparent;">
                        <span style="font-weight: 400;" data-lang-ar="انظر المزيد &#8599" data-lang-en="See More &#8599">انظر المزيد &#8599</span>
                    </a>
                </div>
                <div class="detail">
                    <div class="title" data-lang-ar="واجهة قابلة للتكيف" data-lang-en="Adaptive Interface">
                        واجهة قابلة للتكيف
                    </div>
                    <div class="des" data-lang-ar="ضمان تجربة محسّنة وسهلة الاستخدام بغض النظر عما إذا كنت تستخدم هاتفًا أو جهازًا لوحيًا أو كمبيوتر سطح مكتب" data-lang-en="Ensuring an optimized and user-friendly experience regardless of whether you're using a phone, tablet, or desktop">
                        ضمان تجربة محسّنة وسهلة الاستخدام بغض النظر عما إذا كنت تستخدم هاتفًا أو جهازًا لوحيًا أو كمبيوتر سطح مكتب
                    </div>
                    <div class="specifications">
                        <div>
                            <p data-lang-ar="التوفر" data-lang-en="Availability">التوفر</p>
                            <p data-lang-ar="الدردشة بسلاسة لساعات" data-lang-en="Chat seamlessly for hours">الدردشة بسلاسة لساعات</p>
                        </div>
                        <div>
                            <p data-lang-ar="توافق الجهاز" data-lang-en="Device Compatibility">توافق الجهاز</p>
                            <p data-lang-ar="مُحسّن لنظامي التشغيل Android وiOS" data-lang-en="Optimized for Android and iOS">مُحسّن لنظامي التشغيل Android وiOS</p>
                        </div>
                        <div>
                            <p data-lang-ar="جودة الاتصال" data-lang-en="Connection Quality">جودة الاتصال</p>
                            <p data-lang-ar="رسائل سلسة ودون انقطاع" data-lang-en="Smooth, uninterrupted messaging">رسائل سلسة ودون انقطاع</p>
                        </div>
                        <div>
                            <p data-lang-ar="الميزات الذكية" data-lang-en="Smart Features">الميزات الذكية</p>
                            <p data-lang-ar="إجراءات سريعة وسهلة اللمس" data-lang-en="Quick, touch-friendly actions">إجراءات سريعة وسهلة اللمس</p>
                        </div>
                        <div>
                            <p data-lang-ar="خيارات اللغة" data-lang-en="Language Options">خيارات اللغة</p>
                            <p data-lang-ar="متوفر باللغتين العربية والإنجليزية" data-lang-en="Available in both Arabic and English">متوفر باللغتين العربية والإنجليزية</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/Google 7.png" alt="">
                <div class="introduce">
                    <div class="title" data-lang-ar="مظهر تطبيقنا على الأجهزة" data-lang-en="Our app's look on devices">
                        مظهر تطبيقنا على الأجهزة
                    </div>
                    <div class="topic" data-lang-ar="مشاركة الوسائط" data-lang-en="Media Sharing">
                        مشاركة الوسائط
                    </div>
                    <div class="des" data-lang-ar="يمكنك إرسال ملف بخيارات متعددة إلى أي شخص، في أي مكان، وفي أي وقت" data-lang-en="You can send a file with multiple options to anyone, anywhere, at any time">
                        يمكنك إرسال ملف بخيارات متعددة إلى أي شخص، في أي مكان، وفي أي وقت
                    </div>
                    <a class="seeMore magnetic-btn" style="--clr:#e7e7e7; text-decoration: none; background: transparent;">
                        <span style="font-weight: 400;" data-lang-ar="انظر المزيد &#8599" data-lang-en="See More &#8599">انظر المزيد &#8599</span>
                    </a>
                </div>
                <div class="detail">
                    <div class="title" data-lang-ar="مشاركة الوسائط" data-lang-en="Media Sharing">
                        مشاركة الوسائط
                    </div>
                    <div class="des" data-lang-ar="يمكنك إرسال ملف بخيارات متعددة إلى أي شخص، في أي مكان، وفي أي وقت" data-lang-en="You can send a file with multiple options to anyone, anywhere, at any time">
                        يمكنك إرسال ملف بخيارات متعددة إلى أي شخص، في أي مكان، وفي أي وقت
                    </div>
                    <div class="specifications">
                        <div>
                            <p data-lang-ar="التوفر" data-lang-en="Availability">التوفر</p>
                            <p data-lang-ar="الدردشة بسلاسة لساعات" data-lang-en="Chat seamlessly for hours">الدردشة بسلاسة لساعات</p>
                        </div>
                        <div>
                            <p data-lang-ar="توافق الجهاز" data-lang-en="Device Compatibility">توافق الجهاز</p>
                            <p data-lang-ar="مُحسّن لنظامي التشغيل Android وiOS" data-lang-en="Optimized for Android and iOS">مُحسّن لنظامي التشغيل Android وiOS</p>
                        </div>
                        <div>
                            <p data-lang-ar="جودة الاتصال" data-lang-en="Connection Quality">جودة الاتصال</p>
                            <p data-lang-ar="رسائل سلسة ودون انقطاع" data-lang-en="Smooth, uninterrupted messaging">رسائل سلسة ودون انقطاع</p>
                        </div>
                        <div>
                            <p data-lang-ar="الميزات الذكية" data-lang-en="Smart Features">الميزات الذكية</p>
                            <p data-lang-ar="إجراءات سريعة وسهلة اللمس" data-lang-en="Quick, touch-friendly actions">إجراءات سريعة وسهلة اللمس</p>
                        </div>
                        <div>
                            <p data-lang-ar="خيارات اللغة" data-lang-en="Language Options">خيارات اللغة</p>
                            <p data-lang-ar="متوفر باللغتين العربية والإنجليزية" data-lang-en="Available in both Arabic and English">متوفر باللغتين العربية والإنجليزية</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/Google 6.png" alt="">
                <div class="introduce">
                    <div class="title" data-lang-ar="مظهر تطبيقنا على الأجهزة" data-lang-en="Our app's look on devices">
                        مظهر تطبيقنا على الأجهزة
                    </div>
                    <div class="topic" data-lang-ar="متعدد المنصات" data-lang-en="Cross-Platform">
                        متعدد المنصات
                    </div>
                    <div class="des" data-lang-ar="ابدأ محادثة جديدة مع أحد ممثلي الدعم الفني" data-lang-en="Start a new conversation with a technical support representative">
                        ابدأ محادثة جديدة مع أحد ممثلي الدعم الفني
                    </div>
                    <a class="seeMore magnetic-btn" style="--clr:#e7e7e7; text-decoration: none; background: transparent;">
                        <span style="font-weight: 400;" data-lang-ar="انظر المزيد &#8599" data-lang-en="See More &#8599">انظر المزيد &#8599</span>
                    </a>
                </div>
                <div class="detail">
                    <div class="title" data-lang-ar="متعدد المنصات" data-lang-en="Cross-Platform">
                        متعدد المنصات
                    </div>
                    <div class="des" data-lang-ar="ابدأ محادثة جديدة مع أحد ممثلي الدعم الفني" data-lang-en="Start a new conversation with a technical support representative">
                        ابدأ محادثة جديدة مع أحد ممثلي الدعم الفني
                    </div>
                    <div class="specifications">
                        <div>
                            <p data-lang-ar="التوفر" data-lang-en="Availability">التوفر</p>
                            <p data-lang-ar="الدردشة بسلاسة لساعات" data-lang-en="Chat seamlessly for hours">الدردشة بسلاسة لساعات</p>
                        </div>
                        <div>
                            <p data-lang-ar="توافق الجهاز" data-lang-en="Device Compatibility">توافق الجهاز</p>
                            <p data-lang-ar="مُحسّن لنظامي التشغيل Android وiOS" data-lang-en="Optimized for Android and iOS">مُحسّن لنظامي التشغيل Android وiOS</p>
                        </div>
                        <div>
                            <p data-lang-ar="جودة الاتصال" data-lang-en="Connection Quality">جودة الاتصال</p>
                            <p data-lang-ar="رسائل سلسة ودون انقطاع" data-lang-en="Smooth, uninterrupted messaging">رسائل سلسة ودون انقطاع</p>
                        </div>
                        <div>
                            <p data-lang-ar="الميزات الذكية" data-lang-en="Smart Features">الميزات الذكية</p>
                            <p data-lang-ar="إجراءات سريعة وسهلة اللمس" data-lang-en="Quick, touch-friendly actions">إجراءات سريعة وسهلة اللمس</p>
                        </div>
                        <div>
                            <p data-lang-ar="خيارات اللغة" data-lang-en="Language Options">خيارات اللغة</p>
                            <p data-lang-ar="متوفر باللغتين العربية والإنجليزية" data-lang-en="Available in both Arabic and English">متوفر باللغتين العربية والإنجليزية</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrows">
            <button id="prev"><</button>
            <!-- <button id="back" data-lang-ar="تحرك للخلف &#8599" data-lang-en="Go Back &#8599">تحرك للخلف &#8599</button> -->
            <a id="back" class="magnetic-btn" style="--clr:#e7e7e7; text-decoration: none; background: transparent;">
                <span style="font-weight: 400;" data-lang-ar="تحرك للخلف &#8599" data-lang-en="Go Back &#8599">تحرك للخلف &#8599</span>
            </a>
            <button id="next">></button>
        </div>
    </div>

    <!-- <p class="text-center" style="font-weight: 500;" data-lang-ar="موثوق به من قبل أكثر من 1000 شركة حول العالم" data-lang-en="Trusted by 1000+ companies across the world">موثوق به من قبل أكثر من 1000 شركة حول العالم</p> -->
    <div class="slider" style="--width: 100px; --height: 100px; --quantity: {{ count($datasliders) }}; direction: ltr;">
        <div class="sliderList">
            @foreach($datasliders as $index => $slider)
            <div class="sliderItem" style="--position: {{ $loop->index + 1 }}">
                <img src="{{ asset('img/' . $slider->logo_url) }}" alt="{{ $slider->company_name }}">
            </div>
            @endforeach
        </div>
    </div>

    <footer class="footer" id="footer">
        <div class="art">
            <ul class="footer-right text-center">
                <li>
                    <h2 data-lang-ar="أبرز الأحداث" data-lang-en="Highlights">أبرز الأحداث</h2>
                    <ul class="box">
                        <li><a href="#" data-lang-ar="الرئيسية" data-lang-en="Home">الرئيسية</a></li>
                        <li><a href="{{ route('about') }}" data-lang-ar="معلومات عنا" data-lang-en="About">معلومات عنا</a></li>
                        <li><a href="#footer" data-lang-ar="اتصل بنا" data-lang-en="Contact">اتصل بنا</a></li>
                    </ul>
                </li>
                <li>
                    <h2 data-lang-ar="قانوني" data-lang-en="Legal">قانوني</h2>
                    <ul class="box">
                        <li><a href="{{ route('legal') }}" data-lang-ar="خصوصية" data-lang-en="Privacy">خصوصية</a></li>
                        <li><a href="{{ route('legal') }}" data-lang-ar="شروط الخدمة" data-lang-en="Terms of services">شروط الخدمة</a></li>
                        <li><a href="{{ route('legal') }}" data-lang-ar="حماية" data-lang-en="Security">حماية</a></li>
                    </ul>
                </li>
                <li>
                    <h2 class="mb-3" data-lang-ar="ابقى على اتصال" data-lang-en="Stay Connected">ابقى على اتصال</h2>
                    <ul class="box">
                        <p class="text-center"><span data-lang-ar="المملكة العربية السعودية، القصيم، بريدة" data-lang-en="Kingdom of Saudi Arabia, Qassim, Buraidah">المملكة العربية السعودية، القصيم، بريدة</span><br>AVL Tracking Maps<br>support@trackingmaps.sa<br>+966920031711</p>
                    </ul>
                </li>
            </ul>
            <div class="footer-left text-center">

                <h2 class="mb-3" data-lang-ar="احصل على تطبيقنا" data-lang-en="Get our App">احصل على تطبيقنا</h2>
                <img class="footer-logo" src="img/Footer logo 2.png" alt="Systems Tag Logo">
                <div>
                    <a href="https://play.google.com/store/apps/details?id=com.system_tag.app&hl=en" target="_blank"><img src="img/logo 4 for stweb.png" alt="Download on Play Store"></a>
                    <a href="https://apps.apple.com/us/app/systems-tag/id6738041260?l=ar" target="_blank"><img src="img/logo 3 for stweb.png" alt="Download on App Store"></a>
                </div>
                <div class="social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="notice text-center">
                Copyright Protected &copy;
                <a href="http://avl.sa/" target="_blank"><strong>Tracking <span>Maps</span></strong></a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>