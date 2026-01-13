<x-layouts.app title="About">
    <!-- About Hero Section -->
<section class="about-hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 fade-up">
        <span class="section-badge">About Us</span>
        <h1 class="hero-title mb-4">Welcome to <span class="text-warning">Net Bundle</span></h1>
        <p class="hero-text mb-4">Your trusted partner for affordable data bundles across all major networks in Ghana. We're committed to keeping you connected with the best rates and reliable service.</p>
        <div class="hero-stats">
          <div class="stat-item">
            <h3 class="stat-number">10K+</h3>
            <p class="stat-label">Happy Customers</p>
          </div>
          <div class="stat-item">
            <h3 class="stat-number">4</h3>
            <p class="stat-label">Networks Covered</p>
          </div>
          <div class="stat-item">
            <h3 class="stat-number">24/7</h3>
            <p class="stat-label">Support Available</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 fade-up" style="animation-delay: 0.2s;">
        <div class="about-hero-image">
          {{-- <img src="assets/imgs/about-hero.jpg" alt="About Net Bundle" class="img-fluid rounded-4"> --}}
          <div class="floating-card">
            <i class="bi bi-shield-check text-warning fs-1"></i>
            <h5 class="mb-0">Trusted & Secure</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Story Section -->
<section class="our-story-section py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <x-section-header
            badge="Our Story"
            title="How We Started"
        />

        <div class="story-content fade-up" style="animation-delay: 0.2s;">
          <p class="lead text-center mb-4">
            Net Bundle was born from a simple observation: data bundles in Ghana were expensive and difficult to access. We set out to change that.
          </p>
          <p class="text-muted">
            Founded in 2023, Net Bundle began as a small initiative to help communities access affordable internet data. We noticed that many Ghanaians were struggling with high data costs and complicated purchasing processes across different networks. Our founders, passionate about technology and financial inclusion, decided to create a platform that would simplify this process.
          </p>
          <p class="text-muted">
            Today, we've grown into Ghana's leading data bundle platform, serving thousands of customers daily across MTN, AirtelTigo, and Telecel networks. Our mission remains the same: to make internet access affordable and accessible to everyone.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Mission & Vision -->
<section class="mission-vision-section py-5 bg-light">
  <div class="container">
    <div class="row g-4">
        <x-mission-vision-box
            card-name-class="mission"
            iconName="bullseye"
            title="Our Mission"
            content=" To provide affordable, instant, and reliable data bundle services to all Ghanaians, bridging the digital divide and empowering communities through accessible internet connectivity. We strive to make data purchasing simple, transparent, and cost-effective for everyone."
        />

        <x-mission-vision-box
            cardNameClass="vision"
            iconName="eye"
            title="Our Vision"
            content="To become West Africa's leading digital services platform, where every individual has affordable access to internet connectivity. We envision a future where staying connected is a right, not a luxury, and where technology serves as a catalyst for economic growth and social development."
        />
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-section py-5">
  <div class="container">

    <x-section-header
        badge="Why Choose Us"
        title="What Makes Us Different"
        subTitle="We're not just another data vendor—we're your digital partner"
    />

    <div class="row g-4">
      <!-- Feature 1 -->
        <x-about-features-box
            iconName="lightning-charge-fill"
            title="Instant Delivery"
            content="Get your data bundles delivered to your phone within seconds, 24/7. No delays, no hassles."
            delayValue="0.1"
        />


        <!-- Feature 2 -->
        <x-about-features-box
            iconName="cash-coin"
            title="Best Prices"
            content="Enjoy up to 30% savings on data bundles compared to direct network purchases."
            delayValue="0.2"
        />


      <!-- Feature 3 -->
        <x-about-features-box
            iconName="shield-check"
            title="100% Secure"
            content="Your transactions are protected with bank-level security. Your data is safe with us."
            delayValue="0.3"
        />

      <!-- Feature 4 -->
        <x-about-features-box
            iconName="headset"
            title="24/7 Support"
            content="Our dedicated support team is always available to assist you whenever you need help."
            delayValue="0.4"
        />

      <!-- Feature 5 -->
        <x-about-features-box
            iconName="phone"
            title="All Networks"
            content="Support for MTN, AirtelTigo, and Telecel—all from one convenient platform."
            delayValue="0.5"
        />

      <!-- Feature 6 -->
      <x-about-features-box
            iconName="people"
            title="Agent Network"
            content="Join our growing network of agents and earn commissions on every sale you make."
            delayValue="0.6"
        />

    </div>
  </div>
</section>

<!-- Our Values Section -->
<section class="values-section py-5 bg-light">
  <div class="container">

    <x-section-header
        badge="Our Core Values"
        title="What We Stand For"
    />

    <div class="row g-4 justify-content-center">
        <x-about-value-box
            number="1"
            title="Integrity"
            content="We operate with transparency and honesty in all our dealings."
            delayValue="0.1"
        />

        <x-about-value-box
            number="2"
            title="Customer First"
            content="Your satisfaction and success are our top priorities."
            delayValue="0.2"
        />

        <x-about-value-box
            number="3"
            title="Innovation"
            content="We continuously improve to provide better services."
            delayValue="0.3"
        />

        <x-about-value-box
            number="4"
            title="Excellence"
            content="We strive for the highest quality in everything we do."
            delayValue="0.4"
        />
    </div>
  </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section py-5">
  <div class="container">
    <div class="cta-box text-center fade-up">
      <h2 class="fw-bold text-white mb-3">Ready to Get Started?</h2>
      <p class="text-white mb-4 fs-5">Join thousands of satisfied customers enjoying affordable data bundles today!</p>
      <div class="cta-buttons">
        <a href="/" class="btn btn-warning btn-lg me-3 mb-2">Buy Bundles Now</a>
        <a href="/apply-agent" class="btn btn-outline-light btn-lg mb-2">Become an Agent</a>
      </div>
    </div>
  </div>
</section>

</x-layouts.app>
