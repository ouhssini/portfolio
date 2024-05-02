<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <!-- ========================================= FAVICON ================================================ -->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
  <!-- ========================================= linking font Awesome ================================================ -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
  <!-- ========================================= linking oleo script font ================================================ -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps:wght@400;700&display=swap" rel="stylesheet" />
  <!-- ========================================= linking Animate On Scroll================================================ -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- ========================================= linking devIcon ================================================ -->
  <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
  <!-- ========================================= linking bootstrap ================================================ -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- ========================================= linking custom css file ================================================ -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <!-- ===================== linking sweetalert2 ============================== -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet"> -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Ahmed Ouhssini Portfolio</title>
</head>

<body>

  <!-- ===================== sweetalert when email sent ============================== -->
  <?php
  if (isset($_GET['send'])) {
    if ($_GET['send'] == 'true') {
      echo "<script>Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Email has been sent successfully',
      })</script>";
    } else {
      echo "<script>Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong! please try again later!',
      })</script>";
    }
  }
  ?>
  <!-- ===================== sweetalert when email sent ============================== -->
  <!-- ===================== Cursor effect ============================== -->
  <div id="circle"></div>
  <!-- ===================== Cursor effect ============================== -->


  <!-- ===================== NAVBAR START ============================== -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand logo text-warning" href="#">Ouhssini</a>
      <button class="navbar-toggler" data-bs-target="#mainNav" data-bs-toggle="collapse" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-3">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="#skills">Skills</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="#projects">Projects</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
        <a class="btn btn-info rounded-pill" href>Download CV</a>
      </div>
    </div>
  </nav>
  <!-- ===================== NAVBAR END ============================== -->

  <!-- ===================== HERO SECTION START  ============================== -->

  <section class="hero-section bg-dark text-white">
    <div class="container h-100">
      <div class="row align-items-center justify-content-between" style="min-height: calc(100vh - 74px)">
        <div class="col-md-6 text-md-start text-center pt-md-1 pt-4">
          <h1>
            HI, I'M
            <span class="text-info fw-bolder">AHMED OUHSSINI</span>
          </h1>
          <h1 class=" fw-bolder">
            A
            <span class="text-warning text-lowercase fw-bold" id="role">
              Web Developper
            </span>
          </h1>
          <p class="lead lh-lg fw-normal">
            I'm a Full Stack Web Developer, managing everything from frontend
            to backend, including UI/UX design. My mission? Delivering
            exceptional user experiences every step of the way.
          </p>
          <a class="btn btn-warning px-4 rounded-pill" href="#contact">
            Get in Touch
          </a>
          <a class="btn btn-warning px-4 ms-2 rounded-pill" href="https://call.whatsapp.com/voice/Nxc2HD6Ge9uOWtzMJNkraO" target="_blank">
           Call me
          </a>
          <div class="follow mt-4">
            <span class="fw-medium fs-5 me-3">Follow me on :</span>
            <a class="text-white fs-4 px-2 rounded-pill text-decoration-none follow-icon" href="https://www.facebook.com/ahmed.ouhssini.1" target="_blank">
              <i class="fab fa-facebook"></i>
            </a>
            <a class="text-white fs-4 px-2 rounded-pill text-decoration-none follow-icon" href="https://twitter.com/A_ouhssini" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
            <a class="text-white fs-4 px-2 rounded-pill text-decoration-none follow-icon" href="https://www.linkedin.com/in/ouhssini" target="_blank">
              <i class="fab fa-linkedin"></i>
            </a>
            <a class="text-white fs-4 px-2 rounded-pill text-decoration-none follow-icon" href="https://github.com/ouhssini" target="_blank">
              <i class="fab fa-github"></i>
            </a>
          </div>
        </div>
        <div class="col-md-6 text-lg-end text-center">
          <div class="image-holder w-75 mt-4 mx-md-0 ms-md-auto mx-auto">
            <img alt="Developer at work" class="img-fluid hero-img swing" src="assets/img/hero.png" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================== HERO SECTION END  ============================== -->

  <!-- ===================== SECTIONS DIVIDER START  ============================== -->
  <div style="overflow: hidden">
    <svg preserveAspectRatio="none" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" style="fill: #212529; width: 100%; height: 65px">
      <path d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z" opacity=".25" />
      <path d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z" opacity=".5" />
      <path d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
    </svg>
  </div>

  <!-- ===================== SECTIONS DIVIDER END  ============================== -->

  <!-- ===================== ABOUT SECTION  START ============================== -->
  <section class=" container" id="about" data-aos="zoom-in-up">
    <h1 class="text-info fw-bolder mt-2  border-4 border-bottom border-warning section-title ">About Me</h1>
    <div class="row d-flex align-items-center mt-5">
      <div class="col-md-6">
        <p class="lead lh-lg fw-normal text-light text-center text-md-start border-start  border-5 ps-5  border-warning   ">
          Hi, I'm Ahmed Ouhssini, your go-to web developer for seamless online experiences. With expertise in both
          front-end and back-end tasks, along with a knack for UI/UX design, I ensure websites are user-friendly and
          responsive. Passionate and driven, I craft digital solutions that captivate and engage audiences across
          devices.
        </p>
      </div>
      <div class="col-md-6 text-md-end text-center mt-3 mt-md-0">
        <img src="./assets/img/me.jpg" class="img-fluid rounded-pill w-75 ms-auto border-5 border-warning border bounce">
      </div>
    </div>
  </section>
  <!-- ===================== ABOUT SECTION END  ============================== -->
  <!-- ===================== SECTIONS DIVIDER START  ============================== -->
  <div style="overflow: hidden;">
    <svg preserveAspectRatio="none" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" style="fill: #212529; width: 100%; height: 80px; transform: rotate(180deg) scaleX(-1);">
      <path d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z" opacity=".25" />
      <path d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z" opacity=".5" />
      <path d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
    </svg>
  </div>
  <!-- ===================== SECTIONS DIVIDER END  ============================== -->
  <!-- ===================== SERVICES SECTION  START ============================== -->
  <section class="bg-dark" id="services">
    <div class="container">
      <h1 class="text-info fw-bolder border-4 border-bottom border-warning section-title ">What I'm Offering</h1>
      <div class="row mt-5 align-items-stretch" data-aos="flip-left"  data-aos-duration="1000">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 text-white shadow border-0 rounded-3" role="button">
            <div class="card-body text-center">
              <i class="fas fa-laptop fs-2 text-info"></i>
              <h5 class="card-title mt-2 text-info fs-3 fw-bold">Web Development Services</h5>
              <p class="card-text lh-lg">I offer full-stack web development services, covering both frontend and backend
                tasks. From creating responsive and visually appealing websites to developing robust server-side
                applications, I bring your digital ideas to life.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 text-white shadow border-0 rounded-3" role="button">
            <div class="card-body text-center">
              <i class="fas fa-palette fs-2 text-info"></i>
              <h5 class="card-title mt-2 text-info fs-3 fw-bold">UI/UX Design</h5>
              <p class="card-text lh-lg">With a keen eye for design and user experience, I specialize in crafting
                intuitive and visually stunning interfaces. From wireframing to prototyping, I ensure your website not
                only looks great but also provides a seamless and enjoyable user experience.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 text-white shadow border-0 rounded-3" role="button">
            <div class="card-body text-center">
              <i class="fas  fa-code fs-2 text-info"></i>
              <h5 class="card-title mt-2 text-info fs-3 fw-bold">Frontend Development</h5>
              <p class="card-text lh-lg">Using modern technologies such as HTML, CSS, and JavaScript frameworks like
                React and Vue.js, I build dynamic and interactive frontend interfaces. Whether it's a single-page
                application or a complex web application, I ensure a smooth user experience across all devices.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 text-white shadow border-0 rounded-3" role="button">
            <div class="card-body text-center">
              <i class="fas  fa-database fs-2 text-info"></i>
              <h5 class="card-title mt-2 text-info fs-3 fw-bold">Backend Development</h5>
              <p class="card-text lh-lg">I have expertise in server-side programming languages such as Node.js and
                Python, as well as experience with databases like MongoDB and SQL. From building APIs to managing
                databases, I handle all backend tasks to ensure your application runs smoothly and securely.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 text-white shadow border-0 rounded-3" role="button">
            <div class="card-body text-center">
              <i class="fas  fa-wrench fs-2 text-info"></i>
              <h5 class="card-title mt-2 text-info fs-3 fw-bold">Maintenance and Support</h5>
              <p class="card-text lh-lg">Beyond initial development, I provide ongoing maintenance and support services
                to keep your website or application up-to-date and running smoothly. Whether it's fixing bugs, adding
                new features, or optimizing performance, I'm here to support your digital needs.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="card h-100 text-white shadow border-0 rounded-3" role="button">
            <div class="card-body text-center">
              <i class="fa-brands  fa-wordpress fs-2 text-info"></i>
              <h5 class="card-title mt-2 text-info fs-3 fw-bold">WordPress Development</h5>
              <p class="card-text lh-lg">Specializing in WordPress development, I create custom themes and plugins to
                tailor your website to your unique needs. From simple blogs to complex e-commerce solutions, I leverage
                the power of WordPress to deliver scalable and flexible solutions.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================== SERVICES SECTION END  ============================== -->
  <!-- ===================== SECTIONS DIVIDER START  ============================== -->
  <div style="overflow: hidden">
    <svg preserveAspectRatio="none" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" style="fill: #212529; width: 100%; height: 65px">
      <path d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z" opacity=".25" />
      <path d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z" opacity=".5" />
      <path d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
    </svg>
  </div>

  <!-- ===================== SECTIONS DIVIDER END  ============================== -->
  <!-- ===================== SKILLS SECTION start  ============================== -->
  <section class="  container" id="skills">
    <h1 class="text-info fw-bolder border-4 border-bottom border-warning section-title ">Skills & Certificates</h1>
    <div class="row my-4 d-flex align-items-center text-center row-gap-3">
      <div class="col-md-6 col-lg-3"  data-aos-duration="1500" data-aos="fade-up"><img src="./assets/img/computer.jpg" style="max-width: 100%; margin-left: auto; margin-right: auto;" alt=""></div>
      <div class="col-md-6 col-lg-3"  data-aos-duration="1500" data-aos="fade-down"><img src="./assets/img/python1.jpg" style="max-width: 100%; margin-left: auto; margin-right: auto;" alt=""></div>
      <div class="col-md-6 col-lg-3"  data-aos-duration="1500" data-aos="fade-up"><img src="./assets/img/python2.jpg" style="max-width: 100%; margin-left: auto; margin-right: auto;" alt=""></div>
      <div class="col-md-6 col-lg-3"  data-aos-duration="1500" data-aos="fade-down"><img src="./assets/img/javascript1.jpg" style="max-width: 100%; margin-left: auto; margin-right: auto;" alt=""></div>
    </div>
    <h1 class="text-info fw-bolder border-4 border-bottom border-warning section-title mb-5">Front-end</h1>
    <div class="row .container  d-flex  align-items-center justify-content-center row-gap-4 my-5 " data-aos="fade-right">
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-html5-plain colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase">HTML5</h5>
        </div>
      </div>
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-css3-plain colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase">css 3</h5>
        </div>
      </div>
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-javascript-plain colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase">javascript </h5>
        </div>
      </div>
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-bootstrap-plain colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase">bootstrap</h5>
        </div>
      </div>
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-sass-original colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase">Sass</h5>
        </div>
      </div>
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-jquery-plain colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase">jquery</h5>
        </div>
      </div>
    </div>
    <!-- backend  -->
    <h1 class="text-info fw-bolder border-4 border-bottom border-warning section-title mb-5">Back-end</h1>
    <div class="row .container  d-flex justify-content-center  align-items-center row-gap-4 my-5 " data-aos="fade-left">
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-mysql-plain colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase">mysql</h5>
        </div>
      </div>
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-php-plain colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase"> php</h5>
        </div>
      </div>
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-python-plain colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase">python </h5>
        </div>
      </div>
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-flask-plain colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase">flask</h5>
        </div>
      </div>
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-wordpress-plain colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase">wordpress</h5>
        </div>
      </div>
    </div>

    <!-- tools  -->
    <h1 class="text-info fw-bolder border-4 border-bottom border-warning section-title mb-5">Tools</h1>
    <div class="row .container  d-flex justify-content-center  align-items-center row-gap-4 my-5 " data-aos="fade-right">
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-git-plain colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase">git</h5>
        </div>
      </div>
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-github-plain colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase"> github</h5>
        </div>
      </div>
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-vscode-plain colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase">vs code </h5>
        </div>
      </div>
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-pycharm-plain colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase">pycharm</h5>
        </div>
      </div>
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-figma-plain colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase">figma</h5>
        </div>
      </div>
      <div class="col-md-3 col-lg-2">
        <div class="text-center py-4 px-0  card container">
          <i class="devicon-illustrator-plain colored fs-1 fw-bold"></i>
          <h5 class="text-info fw-bold mt-4 text-uppercase">illustrator</h5>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================== SKILLS SECTION END  ============================== -->

  <!-- ===================== SECTIONS DIVIDER START  ============================== -->
  <div style="overflow: hidden;">
    <svg preserveAspectRatio="none" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" style="fill: #212529; width: 100%; height: 80px; transform: rotate(180deg) scaleX(-1);">
      <path d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z" opacity=".25" />
      <path d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z" opacity=".5" />
      <path d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
    </svg>
  </div>
  <!-- ===================== SECTIONS DIVIDER END  ============================== -->

  <!-- ===================== PROJECTS SECTION END  ============================== -->
  <section class="bg-dark" id="projects">
    <div class="container">
      <h1 class="text-info fw-bolder border-4 border-bottom border-warning section-title  ">Projects</h1>
    </div>
    <div class="container py-5">
      <div class="main-timeline-2">
        <div class="timeline-2 left-2" data-aos-duration="1000" data-aos="fade-right">
          <div class="card">
            <img src="./assets/img/bondi.png" class="card-img-top" alt="Responsive image">
            <div class="card-body p-3">
              <h4 class="fw-bold mb-2 text-white ">Bondi Theme </h4>
              <p class="text-warning mb-2"><i class="far fa-clock" aria-hidden="true"></i> 2022</p>
              <p class="mb-0 text-white ">Development digital agency template built using HTML, CSS, and JavaScript. </p>
              <div class="text-md-end text-center">
                <a href="https://ouhssini.github.io/Bondi" target="_blank" class="btn btn-warning px-4  mt-3 ">Visit</a>
              </div>
            </div>
          </div>
        </div>
        <div class="timeline-2 right-2" data-aos-duration="1000" data-aos="fade-left">
          <div class="card">
            <img src="assets/img/moderno.png" class="card-img-top" alt="Responsive image">
            <div class="card-body p-3">
              <h4 class="fw-bold mb-2 text-white ">Moderno Agency</h4>
              <p class="text-warning mb-2"><i class="far fa-clock" aria-hidden="true"></i> 2022</p>
              <p class="mb-0 text-white ">Real estate company website theme built using HTML, CSS, and JavaScript.</p>
              <div class="text-md-start text-center">
                <a href="https://ouhssini.github.io/moderno/" target="_blank" class="btn btn-warning px-4  mt-3 ">Visit</a>
              </div>
            </div>
          </div>
        </div>
        <div class="timeline-2 left-2" data-aos-duration="1000" data-aos="fade-right">
          <div class="card">
            <img src="./assets/img/bmi.png" class="card-img-top" alt="Responsive image">
            <div class="card-body p-3">
              <h4 class="fw-bold mb-2 text-white ">Body Mass Index Calculator </h4>
              <p class="text-warning mb-2"><i class="far fa-clock" aria-hidden="true"></i> 2022</p>
              <p class="mb-0 text-white "> a small website created using HTML, CSS, and JavaScript to calculate the Body Mass Index (BMI). The BMI is a measure of body fat based on an individual's height and weight.</p>
              <div class="text-md-end text-center">
                <a href="https://ouhssini.github.io/BMI/" target="_blank" class="btn btn-warning px-4  mt-3 ">Visit</a>
              </div>
            </div>
          </div>
        </div>
        <div class="timeline-2 right-2" data-aos-duration="1000" data-aos="fade-left">
          <div class="card">
            <img src="assets/img/masterCard.png" class="card-img-top" alt="Responsive image">
            <div class="card-body p-3">
              <h4 class="fw-bold mb-2 text-white ">master-card Template</h4>
              <p class="text-warning mb-2"><i class="far fa-clock" aria-hidden="true"></i> 2023</p>
              <p class="mb-0 text-white ">animated master card design built using html and Css</p>
              <div class="text-md-start text-center">
                <a href="https://ouhssini.github.io/master-card/" target="_blank" class="btn btn-warning px-4  mt-3 ">Visit</a>
              </div>
            </div>
          </div>
        </div>

        <div class="timeline-2 left-2" data-aos-duration="1000" data-aos="fade-right">
          <div class="card">
            <img src="./assets/img/travel.png" class="card-img-top" alt="Responsive image">
            <div class="card-body p-3">
              <h4 class="fw-bold mb-2 text-white ">Travel agency website theme </h4>
              <p class="text-warning mb-2"><i class="far fa-clock" aria-hidden="true"></i> 2023</p>
              <p class="mb-0 text-white "> Travel agency website theme crafted with HTML, CSS, and Bootstrap, offering stunning design and seamless user experience.</p>
              <div class="text-md-end text-center">
                <a href="https://ouhssini.github.io/travel/" target="_blank" class="btn btn-warning px-4  mt-3 ">Visit</a>
              </div>
            </div>
          </div>
        </div>
        <div class="timeline-2 right-2" data-aos-duration="1000" data-aos="fade-left">
          <div class="card">
            <img src="assets/img/boot.png" class="card-img-top" alt="Responsive image">
            <div class="card-body p-3">
              <h4 class="fw-bold mb-2 text-white ">Creative Bot <i class="fab fa-themeco"></i></h4>
              <p class="text-warning mb-2"><i class="far fa-clock" aria-hidden="true"></i> 2023</p>
              <p class="mb-0 text-white ">A Python-based bot automates the download process from a website and leverages ChatGPT to rewrite descriptions. These updated descriptions, along with the downloaded files, are seamlessly posted to another WooCommerce website, enhancing content management for e-commerce.</p>
            </div>
          </div>
        </div>
        <div class="timeline-2 left-2" data-aos-duration="1000" data-aos="fade-right">
          <div class="card">
            <img src="assets/img/ofppt.png" class="card-img-top" alt="Responsive image">
            <div class="card-body p-3">
              <h4 class="fw-bold mb-2 text-white ">Ofppt Archive</h4>
              <p class="text-warning mb-2"><i class="far fa-clock" aria-hidden="true"></i> 2023</p>
              <p class="mb-0 text-white ">The 'OFPPT Archive' is a comprehensive concept designed to encompass all that a student in the development digital sector needs to learn. Created through collaboration with three other interns, this project was built using HTML, CSS, and JavaScript to provide a rich learning experience for students.</p>
              <div class="text-md-end text-center">
                <a href="https://ouhssini.github.io/Ofppt/" target="_blank" class="btn btn-warning px-4  mt-3 ">Visit</a>
              </div>
            </div>
          </div>
        </div>
        <div class="timeline-2 right-2" data-aos-duration="1000" data-aos="fade-left">
          <div class="card">
            <img src="./assets/img/calc.png" class="card-img-top" alt="Responsive image">
            <div class="card-body p-3">
              <h4 class="fw-bold mb-2 text-white ">Javascript Calculator </h4>
              <p class="text-warning mb-2"><i class="far fa-clock" aria-hidden="true"></i> 2024</p>
              <p class="mb-0 text-white ">a simple calculator web application built using HTML, CSS, and JavaScript. It provides basic arithmetic operations such as addition, subtraction, multiplication, and division.</p>
              <div class="text-md-start text-center">
                <a href="https://ouhssini.github.io/Calculator/" target="_blank" class="btn btn-warning px-4  mt-3 ">Visit</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>




  <!-- ===================== PROJECTS SECTION END  ============================== -->
  <!-- ===================== SECTIONS DIVIDER START  ============================== -->
  <div style="overflow: hidden">
    <svg preserveAspectRatio="none" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg" style="fill: #212529; width: 100%; height: 65px">
      <path d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z" opacity=".25" />
      <path d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z" opacity=".5" />
      <path d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
    </svg>
  </div>

  <!-- ===================== SECTIONS DIVIDER END  ============================== -->
  <!-- ===================== SECTIONS CONTACT START  ============================== -->
  <section class=" container" id="contact">
    <h1 class="text-info fw-bolder border-4 border-bottom border-warning section-title ">Contact Me</h1>
    <div class="row my-5 row-gap-4">
      <div class="col-md-6">
        <div class="contact-info">
          <h3 class="text-info">Contact Information</h3>
          <p class="text-light">Feel free to reach out to me for any inquiries or collaboration opportunities. I'm always open to new projects and challenges.</p>
          <div class="contact-item mt-4">
            <i class="fas fa-envelope text-info fs-4 me-3"></i>
            <span class="text-warning fs-5">Ahmedouhssini@gmail.com</span>
          </div>
          <div class="contact-item mt-4">
            <i class="fas fa-phone text-info fs-4 me-3"></i>
            <span class="text-warning fs-5">+212633639757</span>
          </div>
          <div class="contact-item mt-4">
            <i class="fas fa-map-marker-alt text-info fs-4 me-3"></i>
            <span class="text-warning fs-5">Ouarzazate Morocco</span>
          </div>
        </div>

      </div>
      <div class="col-md-6">
        <form action="contact.php" method="post" class="form">
          <div class="mb-3">
            <label for="name" class="form-label text-info">Name</label>
            <input type="text" class="form-control bg-dark text-light border-warning" id="name" placeholder="Enter your name" required name="name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label text-info">Email</label>
            <input type="email" class="form-control bg-dark text-light border-warning" id="email" placeholder="Enter your email" required name="email">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label text-info">Message</label>
            <textarea class="form-control bg-dark text-light border-warning" id="message" rows="5" placeholder="Enter your message" name="message" required></textarea>
          </div>
          <button type="submit" class="ms-auto d-block btn btn-warning rounded-pill">Send Message</button>
        </form>
      </div>
    </div>
  </section>
  <!-- ===================== SECTIONS CONTACT END  ============================== -->
  <!-- ===================== LINKING JAVASCRIPT FILES   ============================== -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>