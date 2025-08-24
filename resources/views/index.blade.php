@extends('layouts.app')
@section('content')
  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

    <img src="assets/img/main-profile.jpg" alt="" data-aos="fade-in">

    <div class="container d-flex flex-column align-items-center justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
      <h2>I am Sami Nabhan</h2>
      <p><span class="typed" data-typed-items="Developer, Freelancer, Technical Support"></span></p>
    </div>

  </section><!-- /Hero Section -->
 <!-- About Section -->
<section id="about" class="about section">

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">
    <div class="col-md-6 d-flex flex-column align-items-center text-center">

      <img src="assets/img/profile.JPG" class="img-fluid rounded-circle mb-3 profile-img" alt="Profile Picture">
      
      <div class="about-info p-5 about-profile-info">
        <p><strong>Name: </strong> <span>Sami Wael Nabhan</span></p>
        <p><strong>Profile: </strong> <span>Full Stack Developer</span></p>
        <p><strong>Email: </strong> <span>sami.nabhan20@gmail.com</span></p>
        <p><strong>Phone: </strong> <span>(+972) 599-302930</span></p>
      </div>
    </div>

    <div class="col-md-6">
      <div class="about-me">
        <h4>About me</h4>
        <p>
          I am a proficient web developer with extensive expertise in backend development, specializing in Laravel and pure PHP. 
          My ability to craft solutions using pure PHP ensures maximum flexibility and customization,
          while my experience with Laravel allows me to handle large-scale enterprise applications with a focus on performance and clean coding practices.
          I am well-versed in designing databases, managing permissions,
          and creating robust API applications tailored to diverse needs.
        </p>
        <p>
          On the frontend, I excel in crafting responsive interfaces using Bootstrap,
          ensuring seamless user experiences across devices and browsers.
          I prioritize coherence in user interaction and leverage contemporary tools to enhance performance and usability.
          My attention to detail and dedication to modern design principles guarantee intuitive and visually appealing solutions.
        </p>
        <p>
          In addition to web development, I have significant experience as a customer service specialist at Speed Click Company,
          where I provide end-to-end technical support for internet-related services.
          From troubleshooting fiber optic and ADSL connectivity issues to performing on-site fieldwork,
          I ensure reliable solutions and optimal service restoration for customers.
          My hands-on approach and commitment to excellence enable me to address and resolve technical challenges effectively.
        </p>
      </div>
    </div>
  </div>

</div>

</section>

  <!-- Resume Section -->
  <section id="resume" class="resume section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Resume</h2>
      <p>Many experiences in more than one field and more than one specialization</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3 class="resume-title">Sumary</h3>

          <div class="resume-item pb-0">
            <h4>Sami W. Nabhan</h4>
            <p><em>Web developer having extensive experience in providing high-quality solutions for sites and applications in several areas.</em></p>
            <ul>
              <li>Gaza Anssar St. ,Palestine</li>
              <li>(+972) 599-302930</li>
              <li>sami.nabhan20@gmail.com</li>
            </ul>
          </div><!-- Edn Resume Item -->

          <h3 class="resume-title">Education</h3>
          <div class="resume-item">
            <h4>Networking Course</h4>
            <h5>2022 - 2024</h5>
            <p><em>Speedclick ISP, Gaza, Palestine</em></p>
            <p>I gained experience in the field of networks, data connection via Wi-Fi, and dealing with MikroTik devices through this course.</p>
          </div><!-- Edn Resume Item -->

          <div class="resume-item">
            <h4>Bachelor of Software Development</h4>
            <h5>2021 - 2025</h5>
            <p><em>Islamic University , Gaza, Palestine</em></p>
            <p>4 years of learning, effort and study to obtain the largest amount of information and to gain the largest amount of experience</p>
          </div><!-- Edn Resume Item -->

        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <h3 class="resume-title">Professional Experience</h3>
          <div class="resume-item">
            <h4>Technical Support & Call Center</h4>
            <h5>2020 - Present</h5>
            <p><em>Speedclick ISP, Gaza, Palestine</em></p>
            <ul>
              <li>Solving customer problems by phone or through field visits</li>
              <li>Standard links via microwave for Wi-Fi service</li>
              <li>Supervising a large team of university students who have field training.</li>
              <li>Learn Fiber Welding with Installation and Extension Teams</li>
            </ul>
          </div><!-- Edn Resume Item -->

          <div class="resume-item">
            <h4>Laravel Course</h4>
            <h5>2024 - 2025</h5>
            <p><em>Laravel Company</em></p>
            <ul>
              <li>Developed numerous websites (ecommerce, dashboard,security login, presentations, and advertisements).</li>
              <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
              <li>Recommended and consulted with clients on the most appropriate graphic design</li>
              <li>Developing websites professionally and with 100% clean code.</li>
            </ul>
          </div><!-- Edn Resume Item -->

        </div>

      </div>

    </div>

  </section><!-- /Resume Section -->

  <!-- Services Section -->
  <section id="skills" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>My Skills</h2>
      <p>I strive to deliver professional services with the highest quality, using modern and distinctive methods.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-filetype-html icon"></i>
            </div>
              <h3>HTML</h3>
            <p>Proficient in crafting dynamic and interactive web pages using HTML, ensuring semantic structure and compatibility across all platforms.</p>
          </div>
        </div><!-- End Service Item -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-filetype-css icon"></i>
            </div>
              <h3>CSS</h3>
            <p>Expert in styling and designing visually appealing, responsive, and user-friendly websites using CSS, with a strong focus on cross-browser compatibility and performance optimization.</p>
          </div>
        </div><!-- End Service Item -->

         <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-filetype-js"></i>
            </div>
              <h3>Javascript</h3>
            <p>Adept at creating interactive and dynamic user interfaces with JavaScript.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <img src="https://www.php.net/images/logos/php-logo.svg" alt="PHP Logo" style="width: 30px; height: 30px; filter: brightness(0) invert(1);">
            </div>
              <h3>PHP</h3>
            <p>Experienced in crafting efficient and scalable web solutions using core PHP.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-layers"></i>
            </div>
              <h3>Laravel Framework</h3>
            <p>Proficient in building modern web applications with Laravel's powerful features.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-database"></i>
            </div>
              <h3>SQL Database</h3>
            <p>Skilled in designing, querying, and managing SQL databases for seamless data operations.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-bootstrap"></i>
            </div>
              <h3>Bootstrap Framework</h3>
            <p>Expert in developing responsive and visually appealing web designs using Bootstrap.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
            <i class="bi bi-tools"></i>
            </div>
              <h3>Technical Support</h3>
            <p>Extensively experienced in internet services, maintenance, and effectively addressing subscriber issues to provide prompt and reliable solutions.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-globe2"></i>
            </div>
              <h3>Computer Networks</h3>
            <p>Knowledgeable in networking concepts and infrastructure for reliable communication systems.</p>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section -->

  <!-- Stats Section -->
  <section id="stats" class="stats section accent-background">

    <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="0" class="purecounter">12</span>
            <p>Open Source Contributions</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="7500" data-purecounter-duration="0" class="purecounter">7500</span>
            <p>Lines of Code Written</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="0" class="purecounter">7</span>
            <p>Certifications Earned</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="0" class="purecounter">15</span>
            <p>Network Project Management</p>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>

  </section><!-- /Stats Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Portfolio</h2>
  <p>Show a portfolio of projects that demonstrate my expertise and creativity</p>
</div><!-- End Section Title -->

<div class="container">
  <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
      <li data-filter="*" class="filter-active">All</li>
      <li data-filter=".ecommerce">ecommerce</li>
      <li data-filter=".dashboards">dashboards</li>
    </ul><!-- End Portfolio Filters -->

    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-6 col-md-6 portfolio-item isotope-item ecommerce">
        <img src="assets/img/portfolio/ecommerce(1).png" class="img-fluid" alt="Ecommerce 1">
        <div class="portfolio-info">
          <h4>Technology & Electronics Store</h4>
          <p>A project showcasing an ecommerce platform</p>
          <a href="assets/img/portfolio/ecommerce(1).png" title="Technology & Electronics Store" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <!-- project link -->
          <!-- <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-6 col-md-6 portfolio-item isotope-item ecommerce">
        <img src="assets/img/portfolio/ecommerce(3).png" class="img-fluid" alt="Ecommerce 1">
        <div class="portfolio-info">
          <h4>Clothing Shopping Store</h4>
          <p>A project showcasing an ecommerce platform</p>
          <a href="assets/img/portfolio/ecommerce(3).png" title="Clothing Shopping Store" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <!-- project link -->
          <!-- <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-6 col-md-6 portfolio-item isotope-item dashboards">
        <img src="assets/img/portfolio/dashboard(1).png" class="img-fluid" alt="Dashboard 1">
        <div class="portfolio-info">
          <h4>Dashboard(1) For Ecommerce Project</h4>
          <p>A project showcasing a dashboard interface</p>
          <a href="assets/img/portfolio/dashboard(1).png" title="Dashboard(1) For Ecommerce Project" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <!-- project link -->
          <!-- <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-6 col-md-6 portfolio-item isotope-item dashboards">
        <img src="assets/img/portfolio/dashboard(2).png" class="img-fluid" alt="Dashboard 1">
        <div class="portfolio-info">
          <h4>Dashboard(2) For Ecommerce Project</h4>
          <p>A project showcasing a dashboard interface</p>
          <a href="assets/img/portfolio/dashboard(2).png" title="Dashboard(2) For Ecommerce Project" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <!-- project link -->
          <!-- <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
        </div>
      </div><!-- End Portfolio Item -->

    </div><!-- End Portfolio Container -->

  </div>

</div>

</section><!-- /Portfolio Section -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Let's connect! Feel free to reach out for development inquiries, project collaborations, or any technical assistance</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-5">

          <div class="col-lg-4">
            <div class="info-item d-flex align-items-center">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Ansar St., Gaza, Palestine</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-4">
            <div class="info-item d-flex align-items-center">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Me</h3>
                <p>+972 599-30-29-30</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-4">
            <div class="info-item d-flex align-items-center">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Me</h3>
                <p>sami.nabhan20@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>
      </div>

      <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="email-form-style" data-aos="fade-up" data-aos-delay="300">
    @csrf <!-- CSRF Token for security -->
    <div class="row gy-4">

        <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>

        <div class="col-md-6">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>

        <div class="col-md-12">
            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
        </div>

        <div class="col-md-12">
            <textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
        </div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">
                <span class="btn-text">Send Message</span>
                <span class="btn-loader" style="display: none;">
                    <i class="spinner-border spinner-border-sm"></i>
                </span>
            </button>
        </div>

    </div>
</form>



    </div>

  </section><!-- /Contact Section -->
  <script>
document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contactForm');
    const submitButton = contactForm.querySelector('button[type="submit"]');
    const btnText = submitButton.querySelector('.btn-text');
    const btnLoader = submitButton.querySelector('.btn-loader');

    contactForm.addEventListener('submit', async (event) => {
        event.preventDefault(); // Prevent default form submission

        // Disable the button and show the loader
        submitButton.disabled = true;
        btnText.style.display = 'none';
        btnLoader.style.display = 'inline-block';

        // Collect form data
        const formData = new FormData(contactForm);

        try {
            const response = await fetch(contactForm.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                },
                body: formData,
            });

            if (response.ok) {
                // Replace loader with success icon and update button text
                btnLoader.style.display = 'none'; // Hide the loader
                btnText.innerHTML = `
                    <i class="bi bi-check-circle"></i>
                    Your Mail Has Been Sent!
                `;
                btnText.style.display = 'inline-block'; // Ensure the text is visible
            } else {
                console.error('Error sending form:', response.statusText);
            }
        } catch (error) {
            console.error('Error:', error);
        } finally {
            // Keep the button disabled after successful submission
            submitButton.disabled = true;
        }
    });
});
</script>


@endsection