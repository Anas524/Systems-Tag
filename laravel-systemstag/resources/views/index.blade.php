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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Belleza&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <div id="splashScreen">
        <img id="stLogo" src="images/St logo for Stellar.png" alt="logo">
    </div>

    <header>
        <div class="navbar">
          <div class="logo">
            <img src="images/St logo for Stellar.png" alt="Header Logo">
            <a href="">Systems <span>Tag</span></a>
          </div>
          <ul class="links m-0">
            <li><a href="#" id="home" data-lang-ar="الرئيسية" data-lang-en="Home">الرئيسية</a></li>
            <li><a href="{{ route('about') }}" data-lang-ar="معلومات عنا" data-lang-en="About">معلومات عنا</a></li>
            <li><a href="#footer" data-lang-ar="اتصل بنا" data-lang-en="Contact">اتصل بنا</a></li>
            <li><a class="font-arabic" id="toggleLang" style="cursor: pointer;">English</a></li>
          </ul>
          <div class="toggle_btn">
            <i class="line line1"></i>
            <i class="line line2"></i>
            <i class="line line3"></i>
          </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="#" id="homeOne" data-lang-ar="الرئيسية" data-lang-en="Home">الرئيسية</a></li>
            <li><a href="{{ route('about') }}" data-lang-ar="معلومات عنا" data-lang-en="About">معلومات عنا</a></li>
            <li><a href="#footer" data-lang-ar="اتصل بنا" data-lang-en="Contact">اتصل بنا</a></li>
            <li><a class="font-arabic" id="toggleLangOne" style="cursor: pointer;">English</a></li>
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
        <div class="position-absolute text-overlay d-flex flex-column justify-content-center align-items-left textSR" style="direction: ltr;">
            <h1 class="display-5 text-black" data-lang-ar="فريقك على بعد نقرة واحدة فقط" data-lang-en="Your team is just a click away">فريقك على بعد نقرة واحدة فقط</h1>
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
                <span class="mbtn-txt" style="font-weight: 400;" data-lang-ar="تحرك للخلف &#8599" data-lang-en="Go Back &#8599">تحرك للخلف &#8599</span>
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

    <div class="people-comment-screen">
        <h1 class="screen-heading" data-lang-ar="الناس يحبون التطبيق!" data-lang-en="People Love the App!">الناس يحبون التطبيق!</h1>
        <div class="app-container">
          <!-- Left Comments -->
          <div class="comments">
            <div class="comment-grid">
              <div class="comment-tab">
                <div class="comment-header">
                  <img src="img/profile 1.jpg" alt="Profile Image">
                  <h4>John D.</h4>
                </div>
                <p data-lang-ar="لقد غيّر هذا التطبيق حياتي!" data-lang-en="This app has changed my life!">"لقد غيّر هذا التطبيق حياتي!"</p>
              </div>
            </div>
            <div class="comment-grid">
              <div class="comment-tab cm-t2">
                <div class="comment-header">
                  <img src="img/profile 2.jpg" alt="Profile Image">
                  <h4>Jane S.</h4>
                </div>
                <p data-lang-ar="لا أستطيع تخيل يومي بدونه!" data-lang-en="Can't imagine my day without it!">"لا أستطيع تخيل يومي بدونه!"</p>
              </div>
            </div>
            <div class="comment-grid">
              <div class="comment-tab">
                <div class="comment-header">
                  <img src="img/profile 3.jpg" alt="Profile Image">
                  <h4>Mike R.</h4>
                </div>
                <p data-lang-ar="ميزات مذهلة وسهلة الاستخدام." data-lang-en="Amazing features and easy to use.">"ميزات مذهلة وسهلة الاستخدام."</p>
              </div>
            </div>
          </div>

          <!-- Center Mobile Image -->
          <div class="mobile-image">
            <img src="img/people-comment-screen img.png" alt="Mobile Image">
          </div>

          <!-- Right Comments -->
          <div class="comments">
            <div class="comment-grid">
              <div class="comment-tab cm-t4">
                <div class="comment-header">
                  <img src="img/profile 4.jpg" alt="Profile Image">
                  <h4>Sarah L.</h4>
                </div>
                <p data-lang-ar="أوصي به بشدة للجميع!" data-lang-en="Highly recommend to everyone!">"أوصي به بشدة للجميع!"</p>
              </div>
            </div>
            <div class="comment-grid">
              <div class="comment-tab">
                <div class="comment-header">
                  <img src="img/profile 5.jpg" alt="Profile Image">
                  <h4>Chris P.</h4>
                </div>
                <p data-lang-ar="سهلة الاستخدام وفعالة للغاية." data-lang-en="Very user-friendly and efficient.">"سهلة الاستخدام وفعالة للغاية."</p>
              </div>
            </div>
            <div class="comment-grid">
              <div class="comment-tab cm-t6">
                <div class="comment-header">
                  <img src="img/profile 6.jpg" alt="Profile Image">
                  <h4>Emily D.</h4>
                </div>
                <p data-lang-ar="أفضل تطبيق استخدمته على الإطلاق." data-lang-en="Best app I have ever used.">"أفضل تطبيق استخدمته على الإطلاق."</p>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="main-content" id="footer">
        <div class="left-section">
        <img src="img/Footer logo 3.png" alt="App Icon" class="mb-3">
        <h1 class="footer-heading" data-lang-ar="قم بالتحميل الآن لخلق مستقبل أفضل!" data-lang-en="Download now to create a better future!">قم بالتحميل الآن لخلق مستقبل أفضل!</h1>
        <div class="dropdown mt-3">
            <button class="btn btn-primary foo-button" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" data-lang-ar="متوفر لنظامي التشغيل iOS وAndroid" data-lang-en="Available for iOS & Android">
            متوفر لنظامي التشغيل iOS وAndroid
            </button>
            <ul class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="https://apps.apple.com/us/app/systems-tag/id6738041260?l=ar" target="_blank" data-lang-ar="تنزيل لنظام iOS" data-lang-en="Download for iOS"><i class="fa-brands fa-apple pr-1"></i> تنزيل لنظام iOS</a></li>
            <li><div class="divider"></div></li>
            <li><a class="dropdown-item" href="https://play.google.com/store/apps/details?id=com.system_tag.app&hl=en" target="_blank" data-lang-ar="تنزيل للاندرويد" data-lang-en="Download for Android"><i class="fa-brands fa-google-play"></i> تنزيل للاندرويد</a></li>
            </ul>
        </div>
        </div>
        <div class="right-section">
        <img src="img/ST web footer image copy 4.png" alt="Mobile Image" class="foo-image">
        </div>
    </div>

    <footer class="footer-tab">
        <div class="left-section">
        <img src="images/St logo for Stellar.png" alt="App Icon">
        <p class="m-0">Systems Tag</p>
        <small data-lang-ar="تطبيق للتواصل السلس" data-lang-en="App for Seamless Communication">تطبيق للتواصل السلس</small>
        </div>
        <div class="right-section">
            <ul>
            <li class="foo-title" data-lang-ar="الصفحات" data-lang-en="Pages">Pages</li>
            <li><a href="#" data-lang-ar="الرئيسية" data-lang-en="Home">الرئيسية</a></li>
            <li><a href="{{ route('about') }}" data-lang-ar="معلومات عنا" data-lang-en="About">معلومات عنا</a></li>
            </ul>
            <ul>
            <li class="foo-title" data-lang-ar="التثبيت" data-lang-en="Install">التثبيت</li>
            <li><a href="https://play.google.com/store/apps/details?id=com.system_tag.app&hl=en" target="_blank" data-lang-ar="أندرويد" data-lang-en="Android">أندرويد</a></li>
            <li><a href="https://apps.apple.com/us/app/systems-tag/id6738041260?l=ar" target="_blank" data-lang-ar="iOS" data-lang-en="iOS">iOS</a></li>
            </ul>
            <ul>
            <li class="foo-title" data-lang-ar="قانوني" data-lang-en="Legal">قانوني</li>
            <li><a href="{{ route('legal') }}" data-lang-ar="سياسة الخصوصية" data-lang-en="Privacy Policy">سياسة الخصوصية</a></li>
            <li><a href="{{ route('legal') }}" data-lang-ar="شروط الخدمة" data-lang-en="Terms of Service">شروط الخدمة</a></li>
            </ul>
            <ul>
            <li class="foo-title" data-lang-ar="الدعم" data-lang-en="Support">الدعم</li>
            <li><a href="mailto:support@trackingmaps.sa">support@trackingmaps.sa</a></li>
            <li><a href="tel:+966920031711">+966920031711</a></li>
            </ul>
            <ul>
            <li class="copyright" style="color: rgb(105, 105, 105);">&copy; 2024 <a href="http://avl.sa/" target="_blank" style="color: black;">Tracking Maps</a></li>
            <li style="color: rgb(105, 105, 105);">All rights reserved</li>
            </ul>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>