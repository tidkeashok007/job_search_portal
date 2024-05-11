@extends('admin.admin_layout.main')

@push('title')
<title>Admin - Contact</title>
@endpush

@push('dash_con_about_css')
<link href="{{url('indexassets/css/dash_con_about_css.css')}}" rel="stylesheet">
@endpush

@push('pannelname')
<h3>Contact</h3>
@endpush

@push('footer')
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Job Search.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Job Search
                </div>
            </div>
        </div>    
    </div>
</div>
@endpush

@push('ul')
    <ul class="navbar-nav" id="navbar-nav">

        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
        <li class="nav-item">
            <a href="{{url('admindashboard')}}" class="nav-link menu-link collapsed" role="button" aria-controls="sidebarDashboards">
                <i class="bi bi-diagram-3"></i> <span data-key="t-dashboards">Users Dashboards</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_application')}}" class="nav-link menu-link"> <i class="bi bi-briefcase"></i> <span data-key="t-chat">Manage Job Card's</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_employee_dtl')}}" class="nav-link menu-link"> <i class="bi bi-person-vcard"></i> <span data-key="t-email">Employee Detail's</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_employer_dtl')}}" class="nav-link menu-link"> <i class="bi bi-person-vcard"></i> <span data-key="t-email">Employer Detail's</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_employer_req')}}" class="nav-link menu-link"> <i class="bi bi-person-video3"></i> <span data-key="t-email">Employer Request's</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_jobPost_req')}}" class="nav-link menu-link"> <i class="bi bi-person-video3"></i> <span data-key="t-email">Job Post Request's</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_contact')}}" class="nav-link menu-link active"> <i class="bi bi-envelope-plus"></i> <span data-key="t-email">Contact</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_about')}}" class="nav-link menu-link"> <i class="bi bi-globe2"></i> <span data-key="t-email">About</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_profile')}}" class="nav-link menu-link"> <i class="bi bi-person-circle"></i> <span data-key="t-email">Profile</span> </a>
        </li>

        <li class="nav-item">
            <!-- Example logout link -->
            <a href="{{route('logout')}}" class="nav-link menu-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-in-left"></i> <span data-key="t-logout">Logout</span></a>

            <!-- Logout form -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        </li>
    </ul>
@endpush
@section('admin.admin_layout.main.container')
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mt-3">

<div class="container" data-aos="fade-up">

<header class="section-header">
   <h2>Contact</h2>
   <p>Contact Us</p>
</header>

<div class="row gy-4">

  <div class="col-lg-6">

    <div class="row gy-4">
      <div class="col-md-6">
        <div class="info-box">
          <i class="bi bi-geo-alt"></i>
          <h3>Address</h3>
          <p>A108 Adam Street,<br>New York, NY 535022</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-box">
          <i class="bi bi-telephone"></i>
          <h3>Call Us</h3>
          <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-box">
          <i class="bi bi-envelope"></i>
          <h3>Email Us</h3>
          <p>info@example.com<br>contact@example.com</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-box">
          <i class="bi bi-clock"></i>
          <h3>Open Hours</h3>
          <p>Monday - Friday<br>9:00AM - 05:00PM</p>
        </div>
      </div>
    </div>

  </div>

  <div class="col-lg-6">
    <form action="forms/contact.php" method="post" class="php-email-form">
      <div class="row gy-4">

        <div class="col-md-6">
          <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>

        <div class="col-md-6 ">
          <input type="email" class="form-control" name="email" placeholder="Your Email" required>
        </div>

        <div class="col-md-12">
          <input type="text" class="form-control" name="subject" placeholder="Subject" required>
        </div>

        <div class="col-md-12">
          <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
        </div>

        <div class="col-md-12 text-center">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
          <button type="submit">Send Message</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
</section><!-- End Contact Section -->
</div>
</div>
</div><!-- End #main -->
@stack('footer')
@endsection