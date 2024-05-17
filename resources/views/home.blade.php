<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Lecturna.id">
  <link rel="shortcut icon" href="images/faviconlecturna.png">

  <meta name="description" content="Wujudkan Mimpi Menjadi Programmer, Game Developer, atau Data Scientist bersama Lecturna" />
  <meta name="keywords" content="kursus coding untuk anak-anak, remaja dan dewasa muda,  menjadi programming, menjadi game developer, menjadi data scientist" />

  <!-- <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Varela+Round&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/course_slider_owl.css">

  <title>Lecturna | Kursus Coding untuk Usia 7 tahun keatas</title>
</head>

<body>

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>


  <div class="section_scrolling" id="sectionhome"></div>
    <nav class="site-nav mb-5 " >
        <div class="pb-2 top-bar mb-3">
            <div class="container">
                <div class="row align-items-center">

                <div class="col-6 col-lg-9">
                    <a href="#" class="small me-3"><span class="icon-question-circle-o me-2"></span> <span class="d-none d-lg-inline-block">Have a questions?</span></a> 
                    <a href="https://wa.me/6285952889899?text=Hi%20Lecturna" target="_blank" class="small me-3"><span class="icon-whatsapp me-2"></span> <span class="d-none d-lg-inline-block">0859-5288-9899</span></a> 
                    <a href="#" class="small me-3"><span class="icon-envelope me-2"></span> <span class="d-none d-lg-inline-block">hello@lecturna.id</span></a> 
                </div>
                @if (Route::has('login'))
                <div class="col-6 col-lg-3 text-end">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="small me-3">
                            <span class="icon-home"></span>
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="small me-3">
                            <span class="icon-lock"></span>
                            Log In
                        </a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="small">
                            <span class="icon-person"></span>
                            Register
                        </a>
                        @endif
                    @endauth
                </div>
                @endif
                </div>
            </div>
        </div>
        <div class="sticky-nav js-sticky-header">
            <div class="container position-relative" >
                <div class="site-navigation text-center">
                    <a href="/" class="logo menu-absolute m-0">Lecturna<span class="text-warning">.</span></a>
                    <ul class="js-clone-nav d-none d-lg-inline-block site-menu" >
                        <li class="sectionhome active"><a href="#sectionhome">Home</a></li>
                        <li class="has-children sectionchooseus sectionaboutus">
                        <a href="#sectionchooseus">About Us</a>
                        <ul class="dropdown">
                            <li><a href="#sectionchooseus">Why Choose Us</a></li>
                            <li><a href="#sectionaboutus">About Us</a></li>
                            <!-- <li class="has-children">
                            <a href="#">Menu Two</a>
                            <ul class="dropdown">
                                <li><a href="#">Sub Menu One</a></li>
                                <li><a href="#">Sub Menu Two</a></li>
                                <li><a href="#">Sub Menu Three</a></li>
                            </ul>
                            </li> -->
                        </ul>
                        </li>
                        <li class="sectioncourses"><a href="#sectioncourses">Courses</a></li>
                        <li class="sectionnewspromo"><a href="#sectionnewspromo">News & Promo</a></li>
                        <li class="sectiontestimonial"><a href="#sectiontestimonial">Testimonial</a></li>
                        <li class="sectioncontact"><a href="#sectioncontact">Contact</a></li>
                    </ul>

                    <a href="https://wa.me/6285952889899?text=Hi%20Lecturna" target="_blank" class="btn-book btn btn-secondary btn-sm menu-absolute">Enroll Now</a>

                    <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>

                </div>
            </div>
        </div>
    </nav>

  <div class="untree_co-hero overlay" style="background-image: url('images/hero-img-1-min.png');">

    <div class="container">
      <div class="row align-items-center justify-content-center">

        <div class="col-12">

          <div class="row justify-content-center ">

            <div class="col-lg-9 text-center ">
              <a href="#" href="#" data-fancybox data-aos="fade-up" data-aos-delay="0" class="caption mb-4 d-inline-block">Kursus Coding Untuk Usia 7 Tahun Keatas<br> For Children, Teenagers & Young Adult (or more..why not?)</a>

              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Wujudkan Mimpi Menjadi Programmer, Game Developer, atau Data Scientist</h1>
              <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#sectionnewspromo" class="btn btn-secondary">Get Promo</a></p>

            </div>


          </div>

        </div>

      </div> <!-- /.row -->
    </div> <!-- /.container -->

  </div> <!-- /.untree_co-hero -->

<!-- ====================================================================================================================== -->
  

  <div class="untree_co-section section_scrolling" id="sectionchooseus">


    <div class="container">
      <div class="row">
        <div class="col-lg-5 me-auto mb-5 mb-lg-0"  data-aos="fade-up" data-aos-delay="0">
          <img src="images/choose-us-image.jpg" alt="image" class="img-fluid">
        </div>
        <div class="col-lg-7 ms-auto" data-aos="fade-up" data-aos-delay="100">
          <h3 class="line-bottom mb-4">Why Choose Us</h3>
          <p>Di era digital ini, <b>keterampilan coding</b> telah menjadi <b>kemampuan yang sangat penting</b> untuk dimiliki. Coding membuka pintu menuju berbagai <b>peluang karir yang menarik</b> di berbagai bidang, seperti:</p>
          <p>
            <ul>
              <li>Pengembangan web dan aplikasi</li>
              <li>Data Science dan Analisis</li>
              <li>Kecerdasan Buatan dan Pembelajaran Mesin</li>
              <li>Desain Game dan Animasi</li>
              <li>dll</li>
            </ul>
          </p>
          <p>
            Kursus coding di tempat kami dirancang untuk membantu mereka yang ingin belajar dapat menguasai berbagai bahasa pemrograman yang paling diminati dan populer saat ini, seperti Python, JavaScript, Java, C/C++ dll. Kami memiliki instruktur yang berpengalaman dan bersemangat yang akan membimbing setiap langkahnya.
          </p>
          <!-- accordion baru -->
          <div class="custom-accordion" id="accordion_satu" data-aos="fade-up" data-aos-delay="200">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Unlocking Future Potential:
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion_satu">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-4 me-auto mb-4">
                          <img src="images/choose-us-image-01.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="col-lg-8 ms-auto">
                          <ul>
                            <li>
                              <p><b>Membekali dengan keterampilan coding yang dicari di abad ke-21</b></p>
                              <p>Keahlian ini akan membuka peluang di berbagai bidang, seperti pengembangan aplikasi, game, data science, dan masih banyak lagi.</p>
                            </li>
                            <li>
                              <p><b>Mempersiapkan untuk menjadi pemimpin di era digital</b></p>
                              <p>Di masa depan, kemampuan coding akan menjadi semakin penting untuk meraih kesuksesan.</p>
                            </li>
                            <li>
                              <p><b>Meningkatkan kemampuan kompetitif</b></p>
                              <p>Dengan mengikuti kursus coding di Lecturna, akan memiliki bekal yang lebih baik untuk bersaing di dunia yang semakin kompetitif.</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Learn in a Fun and Effective Way
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion_satu">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-4 me-auto mb-4">
                          <img src="images/choose-us-image-02.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="col-lg-8 ms-auto">
                          <ul>
                            <li>
                              <p><b>Metode pembelajaran yang inovatif dan menarik</b></p>
                              <p>Kami menggunakan berbagai metode pembelajaran, seperti permainan, proyek, dan simulasi, untuk membuat proses belajar coding menjadi menyenangkan dan mudah dipahami.</p>
                            </li>
                            <li>
                              <p><b>Tim pengajar yang berpengalaman dan bersemangat</b></p>
                              <p>Pengajar kami adalah para ahli di bidang coding yang memiliki passion untuk mengajar mulai dari anak-anak sampai dewasa. Mereka akan membimbing dengan sabar dan penuh perhatian.</p>
                            </li>
                            <li>
                              <p><b>Kurikulum yang terstruktur dan komprehensif</b></p>
                              <p>Kurikulum kami dirancang dengan cermat untuk memastikan bahwa setiap mereka yang belajar coding di Lecturna akan mendapatkan semua pengetahuan dan keterampilan yang mereka butuhkan untuk menjadi programmer yang handal.</p>
                            </li>
                            <li>
                              <p><b>Lingkungan belajar yang positif dan mendukung</b></p>
                              <p>Kami menciptakan lingkungan belajar yang aman dan nyaman untuk belajar dan berkembang.</p>
                            </li>
                            <li>
                              <p><b>Pembentukan Karakter</b></p>
                              <p>Tidak hanya fokus pada pembelajaran coding, tetapi juga membina karakter seperti disiplin, kerja sama, dan problem solving.</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  More than Just a Coding Course
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion_satu">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-4 me-auto mb-4">
                          <img src="images/choose-us-image-03.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="col-lg-8 ms-auto">
                          <ul>
                            <li>
                              <p><b>Komunitas yang suportif</b></p>
                              <p>Kami memiliki komunitas yang berpengalaman dalam bidang pemrograman dan data analyst yang dapat saling mendukung dan berbagi pengalaman.</p>
                            </li>
                            <li>
                              <p><b>Akses ke sumber daya yang berkualitas</b></p>
                              <p>Kami menyediakan berbagai sumber daya, seperti video tutorial, ebook, dan forum diskusi, untuk membantu proses belajar coding baik di dalam atau di luar kelas.</p>
                            </li>
                            <li>
                              <p><b>Kesempatan untuk berkolaborasi dan berkreasi</b></p>
                              <p>Setiap mereka yang belajar coding di Lecturna akan mendapatkan kesempatan untuk berkolaborasi dengan teman-teman mereka dan menciptakan proyek coding mereka sendiri.</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end accordion baru -->

        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  <div class="untree_co-section bg-light section_scrolling" id="sectionaboutus">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 mb-5">
          <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">About Us</h2>
          <p data-aos="fade-up" data-aos-delay="100">Kami adalah penyedia <b>kursus coding</b> terdepan yang berfokus pada <b>pengembangan aplikasi, game, dan data science untuk anak-anak, remaja, dan dewasa muda</b>. Kami menawarkan program yang dirancang dengan cermat untuk berbagai tingkat keahlian, mulai dari pemula hingga tingkat lanjut.</p>
          <!-- Accordion -->
          <div class="custom-accordion" id="accordionDua" data-aos="fade-up" data-aos-delay="200">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneA" aria-expanded="true" aria-controls="collapseOne">
                  Visi:
                </button>
              </h2>
              <div id="collapseOneA" class="accordion-collapse collapse show" data-bs-parent="#accordionDua">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div>
                      <p>Menjadi pelopor dalam <b>pengembangan talenta digital</b> melalui <b>pembelajaran coding yang kreatif, inovatif, dan inklusif</b> bagi anak-anak, remaja, dan dewasa muda, guna <b>membangun masa depan digital yang cerdas dan mampu bersaing secara global.</b></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoA" aria-expanded="false" aria-controls="collapseTwo">
                  Misi:
                </button>
              </h2>
              <div id="collapseTwoA" class="accordion-collapse collapse" data-bs-parent="#accordionDua">
                <div class="accordion-body">
                  <div class="d-flex">
                    <div>
                      <ol>
                        <li><b>Membangun fondasi coding yang kuat:</b> Memberikan landasan yang kokoh dalam konsep pemrograman dasar, algoritma, dan struktur data kepada peserta didik dari berbagai usia dan latar belakang.</li>
                        <li><b>Mendorong kreativitas dan inovasi:</b> Memberikan ruang bagi peserta didik untuk mengeksplorasi ide-ide kreatif mereka melalui berbagai proyek coding yang menarik dan menantang, seperti pengembangan aplikasi, game, dan data science.</li>
                        <li><b>Menumbuhkan pemikiran kritis dan pemecahan masalah:</b> Mendorong peserta didik untuk berpikir kritis dan menggunakan logika untuk memecahkan masalah kompleks dalam dunia digital.</li>
                        <li><b>Meningkatkan kolaborasi dan komunikasi:</b> Mendorong peserta didik untuk bekerja sama dalam tim dan berkomunikasi secara efektif untuk mencapai tujuan bersama dalam proyek coding.</li>
                        <li><b>Menyiapkan peserta didik untuk masa depan:</b> Membekali peserta didik dengan keterampilan coding yang dibutuhkan untuk bersaing di era digital dan membuka peluang karir yang menjanjikan di bidang teknologi.</li>
                        <li><b>Membangun komunitas coding yang inklusif:</b> Menciptakan komunitas coding yang ramah dan inklusif bagi semua orang, tanpa memandang usia, latar belakang, atau tingkat kemampuan.</li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Accordion -->
          <!-- <ul class="list-unstyled ul-check mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>Separated they live</li>
            <li>Bookmarksgrove right at the coast</li>
            <li>large language ocean</li>
          </ul> -->
          <br>
          <div class="row count-numbers mb-5">
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
              <span class="counter d-block"><span data-number="10">0</span><span>+</span></span>
              <span class="caption-2">No. Programming Languages Taught</span>
            </div>
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <span class="counter d-block"><span data-number="15">0</span><span>+</span></span>
              <span class="caption-2">No. Experienced Teachers</span>
            </div>
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <span class="counter d-block"><span data-number="10">0</span><span>+</span></span>
              <span class="caption-2">No. Courses</span>
            </div>
          </div>

          <p data-aos="fade-up" data-aos-delay="200">
            <a href="https://wa.me/6285952889899?text=Hi%20Lecturna" target="_blank" class="btn btn-primary mr-1">Admission</a>
            <!-- <a href="#" class="btn btn-outline-primary">Learn More</a> -->
          </p>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <!-- <div class="bg-1"></div> -->
          <a href="https://www.youtube.com/watch?v=aqHXbg3Cexk" data-fancybox class="video-wrap">
            <span class="play-wrap"><span class="icon-play"></span></span>
            <img src="images/aboutusbackground.jpg" alt="Image" class="img-fluid rounded">
          </a>
        </div>
      </div>
    </div>
  </div> 
  <!-- /.untree_co-section -->

  <!-- <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">Browse Top Category</h2>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-atom"></i>
            </div>
            <div>
              <h3>Science</h3>
              <span>1,391 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-briefcase"></i>
            </div>
            <div>
              <h3>Business</h3>
              <span>3,234 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-calculator"></i>
            </div>
            <div>
              <h3>Finance Accounting</h3>
              <span>931 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-pen"></i>
            </div>
            <div>
              <h3>Design</h3>
              <span>7,291 courses</span>
            </div>
          </a>
        </div>


        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-music"></i>
            </div>
            <div>
              <h3>Music</h3>
              <span>9,114 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-chart-pie"></i>
            </div>
            <div>
              <h3>Marketing</h3>
              <span>2,391 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-camera"></i>
            </div>
            <div>
              <h3>Photography</h3>
              <span>7,991 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-circle-layer"></i>
            </div>
            <div>
              <h3>Animation</h3>
              <span>6,491 courses</span>
            </div>
          </a>
        </div>
        

      </div>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="400">
        <div class="col-lg-8 text-center">
          <p>We have more category here. <a href="#">Browse all</a></p>
        </div>
      </div>
    </div>
  </div> -->

  <!-- <div class="services-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 mb-5 mb-lg-0">

          <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
            <h2 class="line-bottom mb-4">Become an Instructor</h2>
          </div>

          <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

          <ul class="ul-check list-unstyled mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>Behind the word Mountains.</li>
            <li>Far far away Mountains.</li>
            <li>Large language Ocean.</li>
          </ul>

          <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Get Started</a></p>

        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
          <figure class="img-wrap-2">
            <img src="images/teacher-min.jpg" alt="Image" class="img-fluid">
            <div class="dotted"></div>
          </figure>

        </div>
      </div>
    </div>
  </div> -->



  <div class="untree_co-section">
    <div class="container"> 
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="200">
          <h2 class="line-bottom text-center mb-4">We Have Best Education</h2>
          <p>Metode pembelajaran coding di Lecturna merupakan cara penyampaian materi dan interaksi antara pengajar dan peserta didik dalam mempelajari bahasa pemrograman dan konsep-konsep coding.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-globe"></span>
            <h3>Learning from Anywhere</h3>
            <p>Lecturna menawarkan Learning from Anywhere, belajar coding dimanapun, di tempat nyaman dan mudah dijangkau. Pembelajaran tatap muka dengan instruktur berpengalaman. Tersedia kelas kecil (max 5 Students) dan private 1 on 1. Belajar coding fleksibel dan personal di Lecturna!</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-home"></span>
            <h3>Learning from Home</h3>
            <p>Lecturna hadirkan Learning from Home, belajar coding online via video conference. Nyaman dan fleksibel dari rumahmu. Pembelajaran bersama instruktur berpengalaman. Tersedia kelas kecil (max 5 Students) dan private 1 on 1. Belajar coding efektif dan personal di Lecturna!</p>
          </div>
        </div>
        <!-- <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="feature">
            <span class="uil uil-users-alt"></span>
            <h3>Regular Class</h3>
            <p>Reguler Class adalah program kursus coding yang dirancang untuk memberikan pembelajaran coding secara tatap muka yang efektif dan personal. Kelas dengan maksimal 5 orang ini ideal bagi peserta didik yang ingin belajar coding dengan cara yang interaktif dan mendalam, dengan bimbingan langsung dari instruktur yang berpengalaman.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-monitor"></span>
            <h3>Online Class</h3>
            <p>Kursus coding Online Class menghadirkan pembelajaran coding yang fleksibel dan mudah diakses. Instruktur profesional akan mengajarkan materi secara online melalui platform video konferensi, memungkinkan peserta didik belajar dari mana saja dan kapan saja. Mereka dapat mengikuti kelas dari laptop, tablet, atau smartphonenya, tanpa perlu bepergian ke tempat kursus.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature">
            <span class="uil uil-book-reader"></span>
            <h3>Private Class</h3>
            <p>Kursus coding Private Class memberikan pembelajaran coding secara personal dan intensif, dengan 1 instruktur profesional untuk 1 orang. Metode ini memungkinkan fokus penuh pada kebutuhan dan gaya belajar peserta didik, sehingga proses belajar coding menjadi lebih efektif dan menyenangkan. Kursus ini ideal untuk mereka yang ingin mendapatkan perhatian penuh dan melompat lebih cepat dalam kemampuan coding mereka.</p>
          </div>
        </div> -->


        <!-- <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay=100">
          <div class="feature">
            <span class="uil uil-book-alt"></span>
            <h3>Private Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-history"></span>
            <h3>History Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature">
            <span class="uil uil-headphones"></span>
            <h3>Music</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div> -->
      </div>
    </div> <!-- /.container -->
  </div>   
  <!-- /.untree_co-section -->


  <div class="untree_co-section bg-light section_scrolling popular_courses" id="sectioncourses">
    <div class="container"> 
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">The Right Course For You</h2>
          <p>Di kursus coding ini, dari usia 7 tahun akan diajak menyelami dunia digital yang penuh dengan peluang dan kreasi. Melalui program yang menyenangkan, interaktif, dan mudah dipahami, para peserta akan mempelajari berbagai bahasa pemrograman yang relevan dengan kebutuhan masa kini.</p>
        </div>
      </div>
      <!-- div content -->
      <div class="row">
        <div class="col-lg-12">
          <div id="courses-carousel" data-aos="fade-up" data-aos-delay="0">
            <div class="owl-carousel owl-theme owl-img-responsive course-owl">
              <div class="item">
                <div class="single_course">
                  <div class="course_head">
                      <img class="img-fluid" src="images/scratch2-1.jpg" alt=""/>
                  </div>
                  <div class="course_content">
                      <span class="price">7-10th</span>
                      <span class="tag mb-4 d-inline-block">Visual Programming</span>
                      <h4 class="mb-3">
                          <a href="javascript:void()"> Scratch 3.0</a>
                      </h4>
                      <p>
                        Program Visual Programming - Scratch adalah platform belajar coding yang menyenangkan dan mudah digunakan, cocok untuk pemula, terutama anak-anak. Membangun game, animasi, dan cerita interaktif tanpa menulis kode rumit. Belajar logika, problem solving, dan kreativitas dengan cara yang menyenangkan.
                      </p>
                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                          <div class="authr_meta">
                            Available Class:</br>
                              <img class="border border-primary beginner" src="images/beginnerNew.jpg" alt="Beginner"/>
                              <img class="border border-warning intermediate" src="images/intermediateNew.jpg" alt="Intermediate"/>
                              <img class="border border-danger advanced" src="images/advancedNew.jpg" alt="Advanced"/>
                              <!-- <span class="d-inline-block ml-2">Cameron</span> -->
                          </div>
                          <div class="mt-lg-0 mt-3">
                              <span class="meta_info me-4">
                                  <a href="javascript:void()"> <i class="uil uil-book-open me-2"></i>12 </a>
                              </span>
                              <span class="meta_info review">
                                  <a href="javascript:void()"> <i class="uil uil-star me-2"></i>4.9 </a>
                              </span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single_course">
                  <div class="course_head">
                      <img class="img-fluid" src="images/roblox.jpg" alt=""/>
                  </div>
                  <div class="course_content">
                      <span class="price">10-17th</span>
                      <span class="tag mb-4 d-inline-block">Game Programming</span>
                      <h4 class="mb-3">
                          <a href="javascript:void()"> Roblox</a>
                      </h4>
                      <p>
                        Program Game Programming - Roblox mengajarkan anak-anak membuat game interaktif dengan menggunakan alat pengembangan yang intuitif. Mereka belajar coding, desain game, dan kolaborasi, meningkatkan kreativitas dan keterampilan sosial.
                      </p>
                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                          <div class="authr_meta">
                            Available Class:</br>
                              <img class="border border-primary beginner" src="images/beginnerNew.jpg" alt="Beginner"/>
                              <img class="border border-warning intermediate" src="images/intermediateNew.jpg" alt="Intermediate"/>
                              <img class="border border-danger advanced" src="images/advancedNew.jpg" alt="Advanced"/>
                              <!-- <span class="d-inline-block ml-2">Cameron</span> -->
                          </div>
                          <div class="mt-lg-0 mt-3">
                            <span class="meta_info me-4">
                                <a href="javascript:void()"> <i class="uil uil-book-open me-2"></i>12 </a>
                            </span>
                            <span class="meta_info review">
                                <a href="javascript:void()"> <i class="uil uil-star me-2"></i>4.9 </a>
                            </span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single_course">
                  <div class="course_head">
                      <img class="img-fluid" src="images/mit_inventor_app.png" alt=""/>
                  </div>
                  <div class="course_content">
                      <span class="price">10-14th</span>
                      <span class="tag mb-4 d-inline-block">Mobile Programming</span>
                      <h4 class="mb-3">
                          <a href="javascript:void()"> MiT Inventor App</a>
                      </h4>
                      <p>
                        Program Mobile Programming - MiT Inventor App mempelajari konsep dasar pemrograman melalui pengembangan aplikasi mobile interaktif. Anak-anak belajar membuat game, aplikasi pendidikan, dan keterampilan kreatif lainnya, memperkaya kreativitas dan pemahaman teknologi.
                      </p>
                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                          <div class="authr_meta">
                            Available Class:</br>
                              <img class="border border-primary beginner" src="images/beginnerNew.jpg" alt="Beginner"/>
                              <!-- <img class="border border-warning intermediate" src="images/intermediateNew.jpg" alt="Intermediate"/>
                              <img class="border border-danger advanced" src="images/advancedNew.jpg" alt="Advanced"/> -->
                              <!-- <span class="d-inline-block ml-2">Cameron</span> -->
                          </div>
                          <div class="mt-lg-0 mt-3">
                            <span class="meta_info me-4">
                                <a href="javascript:void()"> <i class="uil uil-book-open me-2"></i>12 </a>
                            </span>
                            <span class="meta_info review">
                                <a href="javascript:void()"> <i class="uil uil-star me-2"></i>4.9 </a>
                            </span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single_course">
                  <div class="course_head">
                      <img class="img-fluid" src="images/kotlin_banner.png" alt=""/>
                  </div>
                  <div class="course_content">
                      <span class="price">> 15th</span>
                      <span class="tag mb-4 d-inline-block">Mobile Programming</span>
                      <h4 class="mb-3">
                          <a href="javascript:void()"> Android Kotlin</a>
                      </h4>
                      <p>
                        Program Mobile Programming - Android Kotlin mengajarkan peserta membuat aplikasi mobile menggunakan bahasa pemrograman Kotlin. Mereka belajar UI/UX design, coding, dan pemecahan masalah, memperluas keterampilan teknologi dan kreativitas.
                      </p>
                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                          <div class="authr_meta">
                            Available Class:</br>
                              <img class="border border-primary beginner" src="images/beginnerNew.jpg" alt="Beginner"/>
                              <!-- <img class="border border-warning intermediate" src="images/intermediateNew.jpg" alt="Intermediate"/>
                              <img class="border border-danger advanced" src="images/advancedNew.jpg" alt="Advanced"/> -->
                              <!-- <span class="d-inline-block ml-2">Cameron</span> -->
                          </div>
                          <div class="mt-lg-0 mt-3">
                            <span class="meta_info me-4">
                                <a href="javascript:void()"> <i class="uil uil-book-open me-2"></i>12 </a>
                            </span>
                            <span class="meta_info review">
                                <a href="javascript:void()"> <i class="uil uil-star me-2"></i>4.9 </a>
                            </span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single_course">
                  <div class="course_head">
                      <img class="img-fluid" src="images/htmlcssjs_banner.png" alt=""/>
                  </div>
                  <div class="course_content">
                      <span class="price">> 15th</span>
                      <span class="tag mb-4 d-inline-block">Web Programming</span>
                      <h4 class="mb-3">
                          <a href="javascript:void()"> HTML, CSS & Javascript</a>
                      </h4>
                      <p>
                        Program Web Programming - HTML, CSS, Javascript mengajarkan peserta membuat situs web interaktif. Mereka belajar desain web, styling, interaksi, meningkatkan keterampilan teknologi, kreativitas, dan pemecahan masalah.
                      </p>
                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                          <div class="authr_meta">
                            Available Class:</br>
                              <img class="border border-primary beginner" src="images/beginnerNew.jpg" alt="Beginner"/>
                              <!-- <img class="border border-warning intermediate" src="images/intermediateNew.jpg" alt="Intermediate"/>
                              <img class="border border-danger advanced" src="images/advancedNew.jpg" alt="Advanced"/> -->
                              <!-- <span class="d-inline-block ml-2">Cameron</span> -->
                          </div>
                          <div class="mt-lg-0 mt-3">
                            <span class="meta_info me-4">
                                <a href="javascript:void()"> <i class="uil uil-book-open me-2"></i>12 </a>
                            </span>
                            <span class="meta_info review">
                                <a href="javascript:void()"> <i class="uil uil-star me-2"></i>4.9 </a>
                            </span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single_course">
                  <div class="course_head">
                      <img class="img-fluid" src="images/react_banner.png" alt=""/>
                  </div>
                  <div class="course_content">
                      <span class="price">> 15th</span>
                      <span class="tag mb-4 d-inline-block">Web Programming</span>
                      <h4 class="mb-3">
                          <a href="javascript:void()"> React JS</a>
                      </h4>
                      <p>
                        Program Web Programming - React JS mengajarkan peserta cara membuat aplikasi web dinamis dan responsif dengan menggunakan React JS. Mereka belajar komponen, state management, dan interaksi UI, meningkatkan keterampilan teknologi dan kreativitas.
                      </p>
                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                          <div class="authr_meta">
                            Available Class:</br>
                              <img class="border border-primary beginner" src="images/beginnerNew.jpg" alt="Beginner"/>
                              <!-- <img class="border border-warning intermediate" src="images/intermediateNew.jpg" alt="Intermediate"/>
                              <img class="border border-danger advanced" src="images/advancedNew.jpg" alt="Advanced"/> -->
                              <!-- <span class="d-inline-block ml-2">Cameron</span> -->
                          </div>
                          <div class="mt-lg-0 mt-3">
                            <span class="meta_info me-4">
                                <a href="javascript:void()"> <i class="uil uil-book-open me-2"></i>12 </a>
                            </span>
                            <span class="meta_info review">
                                <a href="javascript:void()"> <i class="uil uil-star me-2"></i>4.9 </a>
                            </span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single_course">
                  <div class="course_head">
                      <img class="img-fluid" src="images/Laravel_banner.png" alt=""/>
                  </div>
                  <div class="course_content">
                      <span class="price">> 15th</span>
                      <span class="tag mb-4 d-inline-block">Web Programming</span>
                      <h4 class="mb-3">
                          <a href="javascript:void()"> Laravel</a>
                      </h4>
                      <p>
                        Program Web Programming - Laravel mengajarkan peserta pembuatan aplikasi web dinamis dengan framework PHP Laravel. Mereka belajar routing, ORM, authentication, dan pengembangan backend modern.
                      </p>
                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                          <div class="authr_meta">
                            Available Class:</br>
                              <img class="border border-primary beginner" src="images/beginnerNew.jpg" alt="Beginner"/>
                              <!-- <img class="border border-warning intermediate" src="images/intermediateNew.jpg" alt="Intermediate"/>
                              <img class="border border-danger advanced" src="images/advancedNew.jpg" alt="Advanced"/> -->
                              <!-- <span class="d-inline-block ml-2">Cameron</span> -->
                          </div>
                          <div class="mt-lg-0 mt-3">
                            <span class="meta_info me-4">
                                <a href="javascript:void()"> <i class="uil uil-book-open me-2"></i>12 </a>
                            </span>
                            <span class="meta_info review">
                                <a href="javascript:void()"> <i class="uil uil-star me-2"></i>4.9 </a>
                            </span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single_course">
                  <div class="course_head">
                      <img class="img-fluid" src="images/Python_banner.png" alt=""/>
                  </div>
                  <div class="course_content">
                      <span class="price">> 12th</span>
                      <span class="tag mb-4 d-inline-block">Interpreted Programming</span>
                      <h4 class="mb-3">
                          <a href="javascript:void()"> Python Programming</a>
                      </h4>
                      <p>
                        Program Python Programming mempelajari sintaks dasar, struktur data, manipulasi file, dan analisis data. Dari pemula hingga mahir, menguasai Python mempersiapkan pemahaman mendalam untuk menjadi data scientist handal.
                      </p>
                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                          <div class="authr_meta">
                            Available Class:</br>
                              <img class="border border-primary beginner" src="images/beginnerNew.jpg" alt="Beginner"/>
                              <img class="border border-warning intermediate" src="images/intermediateNew.jpg" alt="Intermediate"/>
                              <img class="border border-danger advanced" src="images/advancedNew.jpg" alt="Advanced"/>
                              <!-- <span class="d-inline-block ml-2">Cameron</span> -->
                          </div>
                          <div class="mt-lg-0 mt-3">
                            <span class="meta_info me-4">
                                <a href="javascript:void()"> <i class="uil uil-book-open me-2"></i>12 </a>
                            </span>
                            <span class="meta_info review">
                                <a href="javascript:void()"> <i class="uil uil-star me-2"></i>4.9 </a>
                            </span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single_course">
                  <div class="course_head">
                      <img class="img-fluid" src="images/c_cpp_banner.jpg" alt=""/>
                  </div>
                  <div class="course_content">
                      <span class="price">> 12th</span>
                      <span class="tag mb-4 d-inline-block">Text Programming</span>
                      <h4 class="mb-3">
                          <a href="javascript:void()"> C / C++ Programming</a>
                      </h4>
                      <p>
                        Program C/C++ Programming, peserta mempelajari dasar-dasar sintaks, algoritma, dan struktur data. Dari tingkat pemula hingga menengah, mereka memperoleh keterampilan yang kuat untuk pengembangan perangkat lunak.
                      </p>
                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                          <div class="authr_meta">
                            Available Class:</br>
                              <img class="border border-primary beginner" src="images/beginnerNew.jpg" alt="Beginner"/>
                              <img class="border border-warning intermediate" src="images/intermediateNew.jpg" alt="Intermediate"/>
                              <!-- <img class="border border-danger advanced" src="images/advancedNew.jpg" alt="Advanced"/> -->
                              <!-- <span class="d-inline-block ml-2">Cameron</span> -->
                          </div>
                          <div class="mt-lg-0 mt-3">
                            <span class="meta_info me-4">
                                <a href="javascript:void()"> <i class="uil uil-book-open me-2"></i>12 </a>
                            </span>
                            <span class="meta_info review">
                                <a href="javascript:void()"> <i class="uil uil-star me-2"></i>4.9 </a>
                            </span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="single_course">
                  <div class="course_head">
                      <img class="img-fluid" src="images/unity_banner.png" alt=""/>
                  </div>
                  <div class="course_content">
                      <span class="price">> 15th</span>
                      <span class="tag mb-4 d-inline-block">Game Programming</span>
                      <h4 class="mb-3">
                          <a href="javascript:void()"> 2D / 3D Game with Unity</a>
                      </h4>
                      <p>
                        Program Game Programming - 2D & 3D with Unity mengajarkan dasar-dasar pembuatan game, animasi, scripting, dan desain level. Dari pemula hingga menengah, peserta memperoleh keterampilan untuk mengembangkan game yang menarik.
                      </p>
                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                          <div class="authr_meta">
                            Available Class:</br>
                              <img class="border border-primary beginner" src="images/beginnerNew.jpg" alt="Beginner"/>
                              <img class="border border-warning intermediate" src="images/intermediateNew.jpg" alt="Intermediate"/>
                              <!-- <img class="border border-danger advanced" src="images/advancedNew.jpg" alt="Advanced"/> -->
                              <!-- <span class="d-inline-block ml-2">Cameron</span> -->
                          </div>
                          <div class="mt-lg-0 mt-3">
                            <span class="meta_info me-4">
                                <a href="javascript:void()"> <i class="uil uil-book-open me-2"></i>12 </a>
                            </span>
                            <span class="meta_info review">
                                <a href="javascript:void()"> <i class="uil uil-star me-2"></i>4.9 </a>
                            </span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <!-- <div class="item">
                <div class="single_course">
                  <div class="course_head">
                      <img class="img-fluid" src="images/scratch2-1.jpg" alt=""/>
                  </div>
                  <div class="course_content">
                      <span class="price">7-10th</span>
                      <span class="tag mb-4 d-inline-block">Visual Programming</span>
                      <h4 class="mb-3">
                          <a href="#"> Scratch 3.0</a>
                      </h4>
                      <p>
                        Scratch adalah platform belajar coding yang menyenangkan dan mudah digunakan, cocok untuk pemula, terutama anak-anak. Membangun game, animasi, dan cerita interaktif tanpa menulis kode rumit. Belajar logika, problem solving, dan kreativitas dengan cara yang menyenangkan.
                      </p>
                      <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                          <div class="authr_meta">
                            Available Class:</br>
                              <img class="border border-primary beginner" src="images/beginnerNew.jpg" alt="Beginner"/>
                              <img class="border border-warning intermediate" src="images/intermediateNew.jpg" alt="Intermediate"/>
                              <img class="border border-danger advanced" src="images/advancedNew.jpg" alt="Advanced"/>
                              <span class="d-inline-block ms-2">Cameron</span>
                          </div>
                          <div class="mt-lg-0 mt-3">
                            <span class="meta_info me-4">
                                <a href="javascript:void()"> <i class="uil uil-book-open me-2"></i>12 </a>
                            </span>
                            <span class="meta_info review">
                                <a href="javascript:void()"> <i class="uil uil-star me-2"></i>4.9 </a>
                            </span>
                          </div>
                      </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
      <!-- end div content -->
    </div>
  </div>

  <div class="untree_co-section pt-0 bg-img overlay" style="background-image: url('images/team-programmers.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0">Everybody should learn to program a computer, because it teaches you how to think.</h2>
          <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">Steve Jobs</p>
          <p><a href="javascript:void()" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="200">Enroll Now</a></p>
        </div>
      </div>
    </div>  
  </div> 
  <!-- /.untree_co-section -->

  

  <div class="untree_co-section bg-light section_scrolling news_promo" id="sectionnewspromo">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">News & Promo</h2>
          <p>Temukan berbagai berita menarik dan promo terbaru seputar kursus coding kami!
          </p>
        </div>
      </div>
      <!-- <div class="row align-items-stretch">
        <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="100">
          <div class="media-h d-flex h-100">
            <figure>
              <img src="images/img-school-1-min.jpg" alt="Image">
            </figure>
            <div class="media-h-body">
              <h2 class="mb-3"><a href="#">Education for Tomorrow's Leaders</a></h2>
              <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 22, 2020</span>  <span class="icon-person mr-2"></span>Admin</div>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="200">
          <div class="media-h d-flex h-100">
            <figure>
              <img src="images/img-school-2-min.jpg" alt="Image">
            </figure>
            <div class="media-h-body">
              <h2 class="mb-3"><a href="#">Enroll Your Kids This Summer to get 30% off</a></h2>
              <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 22, 2020</span>  <span class="icon-person mr-2"></span>Admin</div>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
      </div> -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="20000">
            <img src="images/newspromo/promo1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>BUY 1 GET 1 FREE</h5>
              <p>Bayar 1 kursus dan dapatkan 1 kursus gratis</p> -->
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="20000">
            <img src="images/newspromo/news1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h5>Kuasai Skill Coding bersama Lecturna</h5>
              <p>Kursus Coding lengkap untuk semua usia</p> -->
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->


  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">Most Popular Courses</h2>
          <p>Temukan pilihan program kursus coding kami yang paling populer dan diminati</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="00">
          <div class="pricing">
            <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-1.png" alt="Image" class="img-fluid"></div> -->
            <div class="pricing-body">

              <h3 class="pricing-plan-title">Scratch</h3>
              <div class="price"><span class="fig">7-10th</span></div>
              <p class="mb-4">Kursus ini dirancang untuk anak-anak usia 7-10 tahun yang ingin belajar dasar-dasar pemrograman dengan cara yang menyenangkan dan interaktif.</p>
              
              <p><a href="https://wa.me/6285952889899?text=Hi%20Lecturna" target="_blank" class="btn btn-outline-primary">Enroll</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing">
            <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-2.png" alt="Image" class="img-fluid"></div> -->
            <div class="pricing-body">

              <h3 class="pricing-plan-title">Python</h3>
              <div class="price"><span class="fig">> 12th</span></div>
              <p class="mb-4">Kursus ini dirancang untuk remaja sampai dewasa yang ingin belajar bahasa pemrograman Python yang banyak digunakan di industri teknologi.</p>
              
              <p><a href="https://wa.me/6285952889899?text=Hi%20Lecturna" target="_blank" class="btn btn-primary">Enroll</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="pricing">
            <!-- <div class="pricing-img mb-4"><img src="images/1x/asset-3.png" alt="Image" class="img-fluid"></div> -->
            <div class="pricing-body">

              <h3 class="pricing-plan-title">Laravel</h3>
              <div class="price"><span class="fig">> 15th</span></div>
              <p class="mb-4">Kursus ini dirancang untuk dewasa muda yang ingin belajar bahasa pemrograman Laravel untuk membangun website dan aplikasi web.</p>
              
              <p><a href="https://wa.me/6285952889899?text=Hi%20Lecturna" target="_blank" class="btn btn-outline-primary">Enroll</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->


  <div class="untree_co-section bg-light section_scrolling" id="sectiontestimonial">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">

          <h3 class="line-bottom mb-4">Testimonials</h3>
          <div class="owl-carousel wide-slider-testimonial">
            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                &ldquo;Hampir 2 bulan struggling sama mata kuliah machine learning. Ga tau mau mulai dari mana benar" buta sama coding python. Trus coba" cari kursus coding untuk machine learning supaya setidaknya bisa survive dan bisa berjalan sendiri. Akhirnya ambil kursus di Lecturna. dari yang ga paham apa" akhirnya skg mulai memahami dan basic" dari machine learning menggunakan python.....
                Satisfied sama pengajarannya yang mudah di pahami dan materi yang di kuasai oleh trainernya mudah untuk di pahami sama orang awam.&rdquo;</p>
                <div class="author">
                  <img src="images/testi_herry.PNG" alt="Free template by TemplateUX">
                  <h3>Herry Supriyanto (28 years)</h3>
                  <p class="position">Technical Dell Indonesia</p>
                </div>
              </blockquote>
            </div>

            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                &ldquo;Senang banget belajar coding di Lecturna! Aku jadi bisa membuat game sendiri pakai Scratch. Gurunya seru dan sabar ngajarinnya. Aku jadi makin semangat belajar coding!&rdquo;</p>
                <div class="author">
                  <img src="images/testi_lesya.jpg" alt="Free template by TemplateUX">
                  <h3>Lesya (12 years)</h3>
                  <p class="position">Siswa Sekolah Dasar</p>
                </div>
              </blockquote>
            </div>

            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                &ldquo;Saya senang sekali melihat perkembangan anak saya setelah mengikuti kursus coding di Lecturna. Lesya jadi lebih kreatif dan inovatif. Dia juga lebih sering bertanya tentang teknologi dan ingin belajar lebih banyak tentang coding. Terima kasih Lecturna!&rdquo;</p>
                <div class="author">
                  <img src="images/testi_mia.jpg" alt="Free template by TemplateUX">
                  <h3>Ibu Mia</h3>
                  <p class="position">Orang tua Lesya</p>
                </div>
              </blockquote>
            </div>

            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                &ldquo;Kursus coding di Lecturna bener-bener ngebantu aku buat belajar Laravel. Aku jadi bisa ngerti cara membuat website dan aplikasi. Pengajarnya profesional dan materinya mudah dipahami. Makasih Lecturna!&rdquo;</p>
                <div class="author">
                  <img src="images/testi_darelia.jpg" alt="Free template by TemplateUX">
                  <h3>Darelia S (17 years)</h3>
                  <p class="position">Siswa Sekolah Menengah Atas</p>
                </div>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  
<!-- ======================================================================================================================= -->
  <div class="site-footer section_scrolling" id="sectioncontact">


    <div class="container">

      <div class="row">
        <div class="col-lg-3 me-auto">
          <div class="widget">
            <h3>About Us<span class="text-primary">.</span> </h3>
            <p>Lecturna adalah kursus coding terdepan yang berfokus pada pengembangan aplikasi, game, dan data science untuk anak-anak, remaja, dan dewasa muda</p>
          </div> <!-- /.widget -->
          <div class="widget">
            <h3>Connect</h3>
            <ul class="list-unstyled social">
              <li><a href="https://www.instagram.com/lecturna.id/" target="_blank"><span class="icon-instagram"></span></a></li>
              <li><a href="javascript:void()"><span class="icon-twitter" target="_blank"></span></a></li>
              <li><a href="https://web.facebook.com/profile.php?id=61554126396118" target="_blank"><span class="icon-facebook"></span></a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-2 ms-auto">
          <div class="widget">
            <h3>Course</h3>
            <ul class="list-unstyled float-start links">
              <li><a href="#sectioncourses">Scratch</a></li>
              <li><a href="#sectioncourses">MiT Inventor App</a></li>
              <li><a href="#sectioncourses">Roblox</a></li>
              <li><a href="#sectioncourses">React JS</a></li>
              <li><a href="#sectioncourses">HTML, CSS, JS</a></li>
              <li><a href="#sectioncourses">Python</a></li>
              <li><a href="#sectioncourses">Laravel</a></li>
              <li><a href="#sectioncourses">2D/3D Game Unity</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <div class="col-lg-3">
          <div class="widget">
            <h3>Gallery</h3>
            <ul class="instafeed instagram-gallery list-unstyled">
              <li><a class="instagram-item" href="images/gallery/gal_kids_crop3.jpg" data-fancybox="gal"><img src="images/gallery/gal_kids_crop3.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gallery/gal_kids_crop2.jpg" data-fancybox="gal"><img src="images/gallery/gal_kids_crop2.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gallery/gal_kids_crop.jpg" data-fancybox="gal"><img src="images/gallery/gal_kids_crop.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gallery/gal_man_crop2.jpg" data-fancybox="gal"><img src="images/gallery/gal_man_crop2.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gallery/gal_man_crop.jpg" data-fancybox="gal"><img src="images/gallery/gal_man_crop.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gallery/gal_ladies_crop.jpg" data-fancybox="gal"><img src="images/gallery/gal_ladies_crop.jpg" alt="" width="72" height="72"></a>
              </li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->


        <div class="col-lg-3">
          <div class="widget">
            <h3>Contact</h3>
            <address>Mall Taman Anggrek, Letjen S. Parman St No.Kav 21, RT.12/RW.1, South Tanjung Duren, Grogol petamburan, West Jakarta City, Jakarta 11470</address>
            <address>Jl. Adara, Kota Harapan Indah, Bekasi, Jawa Barat 17215</address>
            <ul class="list-unstyled links mb-4">
              <li><a href="https://wa.me/6285952889899?text=Hi%20Lecturna" target="_blank">+62-859-5288-9899</a></li>
              <li><a href="mailto:info@mydomain.com">hello@lecturna.id</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

      </div> <!-- /.row -->

      <div class="row mt-5">
        <div class="col-12 text-center">
          <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved by Lecturna | Coding Course
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only"></span>
      </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/owlcourse.js"></script>

  </body>

  </html>
