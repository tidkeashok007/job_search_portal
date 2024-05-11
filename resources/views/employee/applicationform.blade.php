
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Job Search</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('indexassets/img/logo.png')}}" rel="icon">
  <link href="{{url('indexassets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('indexassets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('indexassets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('indexassets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('indexassets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{url('indexassets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('indexassets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('indexassets/css/style.css')}}" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="indexassets.html" class="logo d-flex align-items-center">
        <img src="{{url('indexassets/img/logo.png')}}" alt="">
        <span>Job Search</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('index')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('about')}}">About</a></li>
          <li><a class="nav-link scrollto" href="{{route('contact')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="{{route('index')}}" class="logo d-flex align-items-center w-auto">
                  <img src="{{url('indexassets/img/logo.png')}}" alt="">
                  <span class="d-none d-lg-block">Job Search</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Application Form</h5>
                    <p class="text-center small">Enter your correct information</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="fname" class="form-label">Full Name:</label>
                      <input type="text" name="fname" class="form-control" id="fname" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="email" class="form-label">Your Email:</label>
                      <input type="email" name="email" class="form-control" id="email" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="mobile" class="form-label">Your Mobile:</label>
                      <input type="tel" name="mobile" class="form-control" id="mobile" pattern="[0-9]{10}" required>
                      <div class="invalid-feedback">Please, enter your mobile number!</div>
                    </div>

                    <div class="col-12">
                      <label for="resume" class="form-label">Resume:</label>
                      <input type="file" class="form-control" id="resume" name="resume" required>
                      <div class="invalid-feedback">Please upload your resume!</div>
                    </div>

                    <div class="col-12">
                      <label for="coverLetter" class="form-label">Cover Letter:</label>
                      <textarea class="form-control" id="coverLetter" name="coverLetter" rows="5" required></textarea>
                    </div>
                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Submit</button>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                Designed by <a href="#">Job Search</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">


<div class="footer-top">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-info">
        <a href="indexassets.html" class="logo d-flex align-items-center">
          <img src="{{url('indexassets/img/logo.png')}}" alt="">
          <span>Job Search</span>
        </a>
        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact Us</h4>
        <p>
          A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> info@example.com<br>
        </p>

      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
    &copy; Copyright <strong><span>Job Search</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    Designed by <a href="#">Job Search</a>
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{url('indexassets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{url('indexassets/vendor/aos/aos.js')}}"></script>
<script src="{{url('indexassets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('indexassets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{url('indexassets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{url('indexassets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{url('indexassets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{url('indexassets/js/main.js')}}"></script>

</body>

</html>