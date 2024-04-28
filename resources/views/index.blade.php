<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#EDC607" />
    <meta name="author" content="Ultra Progress" />
    <meta name="MobileOptimized" content="320" />
    <meta property="og:title" content="Seyanty" />
    <meta property="og:type" content="website" />
    <title>صيانتي</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
  </head>

  <body>
    <!-- Header Section -->
    <header class="d-flex justify-content-between">
      <nav class="navbar navbar-expand-lg">
        <div
          class="container d-flex align-items-center justify-content-between gap-5"
        >
          <a class="navbar-brand" href="#">
            <img src="{{asset('images/logoWhite.png')}}" width="90" alt="Logo" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fa-solid fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >الرئيسية</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#About"
                  >خدماتنا</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#Videos"
                  >آراء العملاء</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#Contact"
                  >تواصل معنا</a
                >
              </li>
            </ul>
            <div class="register">
              <button class="headerBtn">تحميل التطبيق</button>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <!-- Hero Section -->
      <section id="Hero" class="position-relative pt-5 pt-md-0">
        <div
          class="container hero position-relative d-flex flex-column flex-md-row justify-content-center justify-content-md-between align-items-center text-center text-md-end gap-5 gap-md-0"
        >
          <div class="heroContent col-12 col-md-6">
            <h1>تطبيق صيـــانــتــي</h1>
            <h3>
              هو المكان الأمثل لتقديم حلولاً شاملة لصيانة جميع أنواع المعدات
              والأجهزة، بأعلى معايير الجودة وأسعار تنافسية.
            </h3>
            <button class="heroBtn">حمل التطبيق الآن</button>
          </div>
          <div class="heroImg">
            <img src="{{asset('images/hero.png')}}" class="" alt="" />
          </div>
        </div>
      </section>

      <!-- About Section -->
      <!-- <section class="d-flex justify-content-center align-items-center pt-5" id="About">
        <div
          class="container d-flex flex-column flex-md-row justify-content-center justify-content-lg-between align-items-center gap-4">
          <div class="logo col-12 col-md-6 p-3">
            <img src="./images/tools.png" class="" alt="Logo" />
          </div>
          <div class="aboutContent col-12 col-md-6 p-3">
            <h3 class="fw-bold mb-3">منصة التفوق</h3c>
              <h4 class="mb-3">هي منصة لتعليم اللغة الإنجليزية</h4>
              <h4 class="mb-3">تحت إشراف الأستاذ أحمد حلمي</h4>
              <ul class="mb-3">
                <li>الحاصل على ليسانس آداب اللغة الإنجليزية عام 1988</li>
                <li> خبرة أكثر من 20 عام في تدريس اللغة الإنجليزية لطلبة الثانوية العامة المصرية</li>
                <li>حاصل على دبلومة التدريس التفاعلي في اللغة الإنجليزية</li>
              </ul>
              <button>تواصل معنا</button>
          </div>
        </div>
      </section> -->

      <!-- Services Section -->
      <section
        id="Services"
        class="d-flex flex-column align-items-center justify-content-center gap-3"
      >
        <h2>خدماتنـــا</h2>
        <div
          class="container services d-flex justify-content-between align-items-center flex-wrap"
        >
          <ul class="cards">
            <li>
              <div class="card">
                <img src="{{asset('images/service1.jpg')}}" class="card__image" alt="" />
                <div class="card__overlay">
                  <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                      <path />
                    </svg>
                    <div class="card__header-text">
                      <h3 class="card__title">سباكة</h3>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="card">
                <img src="{{asset('images/service4.jpg')}}" class="card__image" alt="" />
                <div class="card__overlay">
                  <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                      <path />
                    </svg>
                    <div class="card__header-text">
                      <h3 class="card__title">كهرباء</h3>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="card">
                <img src="{{asset('images/service3.jpg')}}" class="card__image" alt="" />
                <div class="card__overlay">
                  <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                      <path />
                    </svg>
                    <div class="card__header-text">
                      <h3 class="card__title">تكييفات</h3>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="card">
                <img src="{{asset('images/service5.jpg')}}" class="card__image" alt="" />
                <div class="card__overlay">
                  <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                      <path />
                    </svg>
                    <div class="card__header-text text-center">
                      <h3 class="card__title">فلاتر</h3>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="card">
                <img src="{{asset('images/service2.jpg')}}" class="card__image" alt="" />
                <div class="card__overlay">
                  <div class="card__header">
                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                      <path />
                    </svg>
                    <div class="card__header-text text-center">
                      <h3 class="card__title">أجهزة منزلية</h3>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>

			<!-- Advertisment Section -->
			<section id="Advertisment" class="">
        <div
          class="container d-flex justify-content-between align-items-center"
        >
          <div class="col-12 col-md-6 py-5 text-center text-md-end">
            <p class="ad-title">حمل تطبيق صيانتي الآن</p>
            <p class="ad-subtitle">و هنوفرلك الصنايعي و الخدمة اللي محتاجها بأعلى جودة و أسرع وقت</p>
            <button class="ad-cta" onclick="window.location.href='auth.html'">
              حمل التطبيق الآن
            </button>
          </div>
          <div
            class="col-12 col-md-6 px-2 ad-img d-none d-md-flex justify-content-end align-items-center"
          >
            <img src="{{asset('images/logo.png')}}" alt="" />
          </div>
        </div>
      </section>

      <!-- Reviews section -->
      <section id="Reviews" class="d-flex flex-column align-items-center justify-content-center py-5">
					<div class="row d-flex justify-content-center testimonial-pos">
							<div class="col-md-12 pt-4 d-flex justify-content-center">
									<h3>آراء عملاؤنا </h3>
							</div>
							<div class="col-md-12 d-flex justify-content-center my-2">
									<h2>آرائكم و ثقتكم هي أكبر حافذ لنا</h2>
							</div>
					</div>
					<section class="home-testimonial-bottom">
							<div class="container testimonial-inner">
									<div class="row d-flex justify-content-center gap-0">
											<div class="col-md-4 p-2">
													<div class="tour-item ">
															<div class="tour-desc bg-white">
																	<div class="tour-text color-grey-3 text-center">&ldquo;العامل كان في غاية الاحترام و في مستوى عالي من الاحترافية المهنية&rdquo;</div>
																	<div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="{{asset('images/avatar.png')}}" alt=""></div>
																	<div class="link-name d-flex justify-content-center">عبدالرحمن النحاس</div>
															</div>
													</div>
											</div>
											<div class="col-md-4 p-2">
													<div class="tour-item ">
															<div class="tour-desc bg-white">
																	<div class="tour-text color-grey-3 text-center">&ldquo;العامل كان في غاية الاحترام و في مستوى عالي من الاحترافية المهنية&rdquo;</div>
																	<div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="{{asset('images/avatar.png')}}" alt=""></div>
																	<div class="link-name d-flex justify-content-center">عبدالرحمن النحاس</div>
															</div>
													</div>
											</div>
											<div class="col-md-4 p-2">
													<div class="tour-item ">
															<div class="tour-desc bg-white">
																	<div class="tour-text color-grey-3 text-center">&ldquo;العامل كان في غاية الاحترام و في مستوى عالي من الاحترافية المهنية&rdquo;</div>
																	<div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="{{asset('images/avatar.png')}}" alt=""></div>
																	<div class="link-name d-flex justify-content-center">عبدالرحمن النحاس</div>
															</div>
													</div>
											</div>
									</div>
					</section>
      </section>

      <!-- Contact Section -->
      <section id="Contact" class="d-flex align-items-center py-5">
        <div
          class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-5"
        >
          <div class="contactForm col-12 col-md-7 p-lg-5">
            <div class="card text-center text-md-end">
              <h2>تـــواصــل معــنا</h2>
              <form
                action=""
                class="row justify-content-center align-items-center flex-column g-3"
              >
                <input class="col-12" type="text" placeholder="اسم المستخدم" />
                <input
                  class="col-12"
                  type="number"
                  placeholder="رقم التليفون"
                />
                <textarea
                  class="col-12"
                  type="textarea"
                  cols="60"
                  rows="6"
                  placeholder="اترك رسالتك هنا ..."
                ></textarea>
                <button class="contact-btn btn" type="submit">ارسال</button>
              </form>
            </div>
          </div>
          <div class="contactIllustration col-12 col-md-5">
            <img src="{{asset('images/contact.svg')}}" class="contactImg" alt="" />
          </div>
        </div>
      </section>
    </main>

    <!-- Footer Section -->
    <footer id="Footer">
      <div class="container mb-5">
        <div class="text-center text-lg-start text-white pt-5">
          <div class="text-center text-md-end mt-5">
            <div class="row mt-3">
              <div class="links col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="fw-bold">الأقســام</h6>
                <p>
                  <a href="#">الرئيسية</a>
                </p>
                <p>
                  <a href="#">خدماتنا</a>
                </p>
                <p>
                  <a href="#">آراء العملاء</a>
                </p>
                <p>
                  <a href="#">تواصل معنا</a>
                </p>
              </div>

              <div class="links col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="fw-bold">أهم الروابط</h6>
                <p>
                  <a href="#">حمل التطبيق الآن</a>
                </p>
                <!-- <p>
                  <a href="#"></a>
                </p> -->
              </div>

              <!-- <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold">تواصـــل معــنــــا</h6>
                <p><i class="fa-solid fa-location-crosshairs"></i> كفرالشيخ</p>
                <p>
                  <a href="mailto:" class="footer-links"
                    ><i class="fa-regular fa-envelope"></i>
                    info@ahmedhelmy.net</a
                  >
                </p>
                <p dir="ltr">
                  <a class="footer-links" href="https://wa.me/01127698622"
                    >01127698622
                    <i class="fa-solid fa-mobile-screen-button ms-1"></i
                  ></a>
                </p>
              </div> -->

              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 pt-4">
                <img
                  src="{{asset('images/logoWhite.png')}}"
                  class="img-fluid"
                  alt="Altafawouk Logo"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footerBottom text-center p-3" dir="ltr">
        Seyanty © 2024. Developed by
        <a href="https://www.facebook.com/ultraprogress1">Ultra Progress</a>.
        All Rights Reserved.
      </div>
    </footer>

    <!-- Bootstrap Script File -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- FontAwesome Script File -->
    <script src="{{asset('js/all.min.js')}}"></script>
  </body>
</html>
