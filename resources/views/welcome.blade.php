@extends('layouts.app')

@section('content')

<section id="about">
  <div class="container">

    <header class="section-header">
      <h3>About Us</h3>
      <p>Join us as we embark on a mission to maximize your online potential and help your business reach the stars.</p>
    </header>

    <div class="row about-container">

      <div class="col-lg-6 content order-lg-1 order-2">
        <p>
          At Orbit Media Solutions, we’re your trusted partner in navigating the ever-changing digital landscape. Our seasoned team of experts orbits your brand, crafting innovative strategies and delivering tailored solutions to propel your online presence to new heights. Whether it’s web design, SEO, content marketing, or social media management, we’re here to fuel your digital journey with stellar results..
        </p>

        <div class="icon-box wow fadeInUp">
          <div class="icon"><i class="fa fa-shopping-bag"></i></div>
          <h4 class="title"><a href="">Why Choose Us</a></h4>
          <p class="description">Our team of digital marketing specialists boasts a wealth of experience and a proven track record of success. We know the digital landscape inside and out, ensuring you’re in the hands of experts who understand your unique needs.</p>
        </div>

        <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
          <div class="icon"><i class="fa fa-photo"></i></div>
          <h4 class="title"><a href="">Our
              Misions</a></h4>
          <p class="description">Our mission is not just about providing services. Now it’s about forging lasting partnerships, delivering measurable results, and empowering businesses to thrive in the ever-evolving digital landscape.</p>
        </div>

        <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
          <div class="icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="title"><a href="">Our
              Aim</a></h4>
          <p class="description">our aim is to propel businesses into the digital forefront by providing innovative solutions that redefine success. Our commitment need to deliver smarter insights to elevate brands and foster sustainable growth.</p>
        </div>

      </div>

      <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
        <img src="img/about-img.svg" class="img-fluid" alt="">
      </div>
    </div>

    <div class="row about-extra">
      <div class="col-lg-6 wow fadeInUp">
        <img src="img/about-extra-1.svg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
        <h4>Why Orbit</h4>
        <p>
          Orbit Media Solutions has a history of delivering outstanding results for our clients. With a proven track record of success, we’ve earned a reputation as a reliable and trusted digital marketing agency.
        </p>
        <p>
          The process starts with a comprehensive evaluation of your current digital presence, covering aspects such as website performance, online visibility, social media engagement, and beyond.
        </p>
      </div>
    </div>

    <div class="row about-extra">
      <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
        <img src="img/about-extra-2.svg" class="img-fluid" alt="">
      </div>

      <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
        <h4>Most Exclusive Service</h4>
        <p>
          The special service goes beyond the conventional offerings, as it integrates an array of services into a cohesive strategy that addresses every aspect of your digital presence.
        </p>
        <p>
          It begins with a thorough assessment of your current digital footprint, including website performance, online visibility, social media presence, and more.
        </p>
        <p>
          Orbit Media Solutions has built a strong reputation for consistently delivering exceptional results for our clients. With a history of success, we are recognized as a trusted and dependable digital marketing agency.
        </p>
      </div>

    </div>

  </div>
</section><!-- #about -->

<!--==========================
      Services Section
    ============================-->
<section id="services" class="section-bg">
  <div class="container">

    <header class="section-header">
      <h3>Services</h3>
      <p>Our team comprises seasoned professionals with expertise in various fields, ensuring that you receive services backed by knowledge and experience.</p>
    </header>

    <div class="row">

      <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp  " data-wow-duration="1.4s">
        <div class="box">
          <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
          <h4 class="title"><a href="{{ route('services.show', 'web-design-development') }}">Web Design and Development</a></h4>
          <p class="description">We don’t believe in one-size-fits-all. Our web development services are fully customized to align with your brand, goals, and target audience.

          </p>
        </div>
      </div>
      <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
        <div class="box">
          <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
          <h4 class="title"><a href="{{ route('services.show', 'graphics-design') }}">Graphics Design</a></h4>
          <p class="description">Our skilled graphic designers bring creativity and innovation to every project, ensuring that your visuals are both eye-catching and aligned with your brand identity.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
        <div class="box">
          <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
          <h4 class="title"><a href="{{ route('services.show', 'seo') }}">SEO (Search Engine Optimization)</a></h4>
          <p class="description">Our SEO strategies are designed to increase visibility, improve rankings, and drive organic traffic, ensuring your business gets noticed by the right audience.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
        <div class="box">
          <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
          <h4 class="title"><a href="{{ route('services.show', 'digital-marketing') }}">Social and Digital Marketing</a></h4>
          <p class="description">We craft impactful digital marketing campaigns tailored to connect with your target audience and achieve your business goals.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
        <div class="box">
          <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
          <h4 class="title"><a href="{{ route('services.show', 'video-editing') }}">Video Editing</a></h4>
          <p class="description">Elevate your brand's storytelling with engaging and professional video editing services, tailored to showcase your unique vision.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
        <div class="box">
          <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
          <h4 class="title"><a href="{{ route('services.show', 'networking-solutions') }}">Networking Solutions</a></h4>
          <p class="description">We deliver efficient and secure networking services to ensure seamless connectivity and performance for your business.</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- #services -->



<!--=================
 added services 
 ==================-->

<section id="products" class="section-bg" style="padding: 20px">
  <div class="container">
    <header class="section-header">
      <h3>Our Upcomming Services</h3>
      <p>Explore our latest products and services designed to meet your needs.</p>
    </header>

    <div class="row ">
      @if($products->isNotEmpty())
      @foreach($products as $product)
      <div class="col-12 wow bounceInUp" data-wow-duration="1.4s">
        <div class="box" style="
            background-color: #dbe8ff; 
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); 
            border-radius: 10px; 
            padding: 20px; 
            margin: 15px 0;
            text-align: center;
          ">
          <div class="icon">
            @if($product->image != "")
            <img src="{{ asset('uploads/products/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid" style="max-height: 100px;">
            @else
            <i class="ion-ios-cart-outline" style="color: #41cf2e;"></i>
            @endif
          </div>
          <h4 class="title">{{ $product->name }}</h4>
          <p class="description">{{ $product->description ?? 'No description available.' }}</p>
          <!-- <p class="text-muted">Added on {{ \Carbon\Carbon::parse($product->created_at)->format('d M, Y') }}</p> -->
        </div>
      </div>
      @endforeach
      @else
      <p>No products available.</p>
      @endif
    </div>
  </div>
</section>


<!--==========================
      Why Us Section
    ============================-->
<section id="why-us" class="wow fadeIn">
  <div class="container">
    <header class="section-header">
      <h3>Why choose us?</h3>
      <p> We understand the digital landscape inside and out, ensuring you’re in the hands of experts who truly grasp your unique needs.</p>
    </header>

    <div class="row row-eq-height justify-content-center">

      <div class="col-lg-4 mb-4">
        <div class="card wow bounceInUp">
          <i class="fa fa-diamond"></i>
          <div class="card-body">
            <h5 class="card-title">Proven Expertise</h5>
            <p class="card-text">Our team of digital marketing specialists boasts a wealth of experience and a proven track record of success.</p>
            <!-- Link updated to point to a detail page -->
            <a href="{{ url('/proven-expertise') }}" class="readmore">Read more </a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="card wow bounceInUp">
          <i class="fa fa-language"></i>
          <div class="card-body">
            <h5 class="card-title">Client-Centric Approach</h5>
            <p class="card-text">At Orbit Media Solutions, we prioritize forging lasting partnerships with our clients.</p>
            <!-- Link updated to point to a detail page -->
            <a href="{{ url('/client-centric-approach') }}" class="readmore">Read more </a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="card wow bounceInUp">
          <i class="fa fa-object-group"></i>
          <div class="card-body">
            <h5 class="card-title">Innovative Solutions</h5>
            <p class="card-text">Our commitment lies in delivering smarter insights and innovative strategies that elevate brands and foster sustainable growth.</p>
            <!-- Link updated to point to a detail page -->
            <a href="{{ url('/innovative-solutions') }}" class="readmore">Read more </a>
          </div>
        </div>
      </div>

    </div>

    <div class="row counters">
      <div class="col-lg-3 col-6 text-center">
        <span data-toggle="counter-up">274</span>
        <p>Clients</p>
      </div>
      <div class="col-lg-3 col-6 text-center">
        <span data-toggle="counter-up">421</span>
        <p>Projects</p>
      </div>
      <div class="col-lg-3 col-6 text-center">
        <span data-toggle="counter-up">1,364</span>
        <p>Hours Of Support</p>
      </div>
      <div class="col-lg-3 col-6 text-center">
        <span data-toggle="counter-up">18</span>
        <p>Hard Workers</p>
      </div>
    </div>

  </div>
</section>


<!--==========================
      Portfolio Section
    ============================-->
<section id="portfolio" class="clearfix">
  <div class="container">

    <header class="section-header">
      <h3 class="section-title">Our Portfolio</h3>
    </header>

    <div class="row">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">App 1</a></h4>
            <p>App</p>
            <div>
              <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
        <div class="portfolio-wrap">
          <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">Web 3</a></h4>
            <p>Web</p>
            <div>
              <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
        <div class="portfolio-wrap">
          <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">App 2</a></h4>
            <p>App</p>
            <div>
              <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">Card 2</a></h4>
            <p>Card</p>
            <div>
              <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
        <div class="portfolio-wrap">
          <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">Web 2</a></h4>
            <p>Web</p>
            <div>
              <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
        <div class="portfolio-wrap">
          <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">App 3</a></h4>
            <p>App</p>
            <div>
              <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">Card 1</a></h4>
            <p>Card</p>
            <div>
              <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
        <div class="portfolio-wrap">
          <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">Card 3</a></h4>
            <p>Card</p>
            <div>
              <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
        <div class="portfolio-wrap">
          <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><a href="#">Web 1</a></h4>
            <p>Web</p>
            <div>
              <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- #portfolio -->

<!--==========================
      Clients Section
    ============================-->
<section id="testimonials" class="section-bg">
  <div class="container">

    <header class="section-header">
      <h3>Testimonials</h3>
    </header>

    <div class="row justify-content-center">
      <div class="col-lg-8">

        <div class="owl-carousel testimonials-carousel wow fadeInUp">

          <div class="testimonial-item">
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              "We saw a significant improvement in our online traffic and customer engagement after working with Orbit Media Solutions. Their professionalism and results are second to none."
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              "Orbit Media Solutions helped us refine our digital strategy and achieve measurable growth. They provide innovative ideas and exceptional service every time."
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              "The team at Orbit Media Solutions delivered outstanding results for our business. Their creativity and strategic thinking helped us increase our sales by 40% in just 3 months."
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              "Working with Orbit Media Solutions has been a game-changer for us. They truly understand our brand and have helped us connect with our target audience more effectively."
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              "Orbit Media Solutions has been instrumental in helping us grow our online presence. Their expertise in digital marketing is unmatched. Highly recommended!"
            </p>
          </div>

        </div>

      </div>
    </div>


  </div>
</section><!-- #testimonials -->

<!--==========================
      Team Section
    ============================-->
<section id="team">
  <div class="container">
    <div class="section-header">
      <h3>Team</h3>
      <p>To forge lasting partnerships, deliver measurable results, and empower businesses to thrive in the ever-evolving digital landscape.</p>
    </div>

    <div class="row">

      <div class="col-lg-3 col-md-6 wow fadeInUp">
        <div class="member">
          <img src="img/team-1.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="member">
          <img src="img/team-2.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
        <div class="member">
          <img src="img/team-3.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="member">
          <img src="img/team-4.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- #team -->

<!--==========================
      Clients Section
    ============================-->
<section id="clients" class="section-bg">

  <div class="container">

    <div class="section-header">
      <h3>Our CLients</h3>
      <p>To propel businesses into the digital forefront by providing innovative solutions that redefine success and drive sustainable growth.</p>
    </div>

    <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo">
          <img src="img/clients/client-1.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo">
          <img src="img/clients/client-2.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo">
          <img src="img/clients/client-3.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo">
          <img src="img/clients/client-4.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo">
          <img src="img/clients/client-5.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo">
          <img src="img/clients/client-6.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo">
          <img src="img/clients/client-7.png" class="img-fluid" alt="">
        </div>
      </div>

      <div class="col-lg-3 col-md-4 col-xs-6">
        <div class="client-logo">
          <img src="img/clients/client-8.png" class="img-fluid" alt="">
        </div>
      </div>

    </div>

  </div>

</section>

<!--==========================
      Contact Section
    ============================-->
<section id="contact">
  <div class="container-fluid">

    <div class="section-header">
      <h3>Contact Us</h3>
    </div>

    <div class="row wow fadeInUp">

      <div class="col-lg-6">
        <div class="map mb-4 mb-lg-0">
          <iframe src="https://www.google.com/maps?q=Kirkdale+House,+Kirkdale+Road,+E11+1HP,+London,+UK&output=embed" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="row">
          <div class="col-md-5 info">
            <i class="ion-ios-location-outline"></i>
            <p>Kirkdale House,
              Kirkdale Road
              E11 1HP
              London
              UK</p>
          </div>
          <div class="col-md-4 info">
            <i class="ion-ios-email-outline"></i>
            <p>info@theorbit.one</p>
          </div>
          <div class="col-md-3 info">
            <i class="ion-ios-telephone-outline"></i>
            <p>07935390848</p>
          </div>
        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-lg-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
          </form>
        </div>
      </div>

    </div>

  </div>
</section><!-- #contact -->

</main>


@endsection