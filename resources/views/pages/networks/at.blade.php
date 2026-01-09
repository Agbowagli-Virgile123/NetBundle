<x-layouts.app title="Mtn">
<!-- Network Hero Section -->

<!-- Network Hero Section -->
<section class="network-hero-section airtel-hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 fade-up">
        <div class="network-logo-badge mb-4">
          <img src="assets/networks/ATG.jpg" alt="AirtelTigo" class="network-logo-large">
        </div>
        <h1 class="network-hero-title mb-3">AirtelTigo Data Bundles</h1>
        <p class="network-hero-text mb-4">Get the best deals on AirtelTigo data bundles. Fast delivery, affordable prices, and reliable service. Experience quality connectivity at unbeatable rates.</p>
        <div class="hero-features">
          <div class="hero-feature-item">
            <i class="bi bi-lightning-charge-fill text-warning"></i>
            <span>Instant Delivery</span>
          </div>
          <div class="hero-feature-item">
            <i class="bi bi-shield-check text-warning"></i>
            <span>100% Secure</span>
          </div>
          <div class="hero-feature-item">
            <i class="bi bi-cash-coin text-warning"></i>
            <span>Best Prices</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6 fade-up" style="animation-delay: 0.2s;">
        <div class="network-hero-card">
          <div class="card-glow"></div>
          <h3 class="text-white mb-3">Quick Purchase</h3>
          <form class="quick-purchase-form">
            <div class="mb-3">
              <label class="form-label text-white">Phone Number</label>
              <input type="tel" class="form-control form-control-lg" placeholder="026XXXXXXX or 056XXXXXXX">
            </div>
            <div class="mb-3">
              <label class="form-label text-white">Select Bundle</label>
              <select class="form-select form-select-lg">
                <option>Choose your bundle</option>
                <option>1GB - GH₵ 4.50</option>
                <option>2GB - GH₵ 8.50</option>
                <option>5GB - GH₵ 18.00</option>
              </select>
            </div>
            <button type="submit" class="btn btn-warning btn-lg w-100 fw-bold">
              <i class="bi bi-cart-plus me-2"></i>Buy Now
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Data Bundles Section -->
<section class="bundles-section py-5">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <span class="section-badge">Available Bundles</span>
      <h2 class="section-title fw-bold mb-3">AirtelTigo Data Plans</h2>
      <p class="section-subtitle text-muted">Choose from our wide range of affordable data bundles</p>
    </div>

    <!-- Bundle Tabs -->
    <div class="bundle-tabs mb-4 fade-up" style="animation-delay: 0.1s;">
      <ul class="nav nav-pills justify-content-center" id="bundleTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="daily-tab" data-bs-toggle="pill" data-bs-target="#daily" type="button">Daily Bundles</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="weekly-tab" data-bs-toggle="pill" data-bs-target="#weekly" type="button">Weekly Bundles</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="monthly-tab" data-bs-toggle="pill" data-bs-target="#monthly" type="button">Monthly Bundles</button>
        </li>
      </ul>
    </div>

    <!-- Bundle Content -->
    <div class="tab-content" id="bundleTabsContent">
      <!-- Daily Bundles -->
      <div class="tab-pane fade show active" id="daily" role="tabpanel">
        <div class="row g-4">
          <!-- Bundle Card 1 -->
          <div class="col-md-6 col-lg-4 fade-up" style="animation-delay: 0.1s;">
            <div class="bundle-card">
              <div class="bundle-badge">Popular</div>
              <div class="bundle-data">
                <h3 class="bundle-size">1GB</h3>
                <p class="bundle-validity">Valid for 24 hours</p>
              </div>
              <div class="bundle-price">
                <span class="price-amount">GH₵ 4.50</span>
                <span class="price-original">GH₵ 6.50</span>
              </div>
              <ul class="bundle-features">
                <li><i class="bi bi-check-circle-fill text-success"></i> All Networks</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> Instant Activation</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> 24/7 Support</li>
              </ul>
              <button class="btn btn-primary w-100 btn-lg fw-bold">
                <i class="bi bi-cart-plus me-2"></i>Buy Now
              </button>
            </div>
          </div>

          <!-- Bundle Card 2 -->
          <div class="col-md-6 col-lg-4 fade-up" style="animation-delay: 0.2s;">
            <div class="bundle-card">
              <div class="bundle-data">
                <h3 class="bundle-size">2GB</h3>
                <p class="bundle-validity">Valid for 24 hours</p>
              </div>
              <div class="bundle-price">
                <span class="price-amount">GH₵ 8.50</span>
                <span class="price-original">GH₵ 11.00</span>
              </div>
              <ul class="bundle-features">
                <li><i class="bi bi-check-circle-fill text-success"></i> All Networks</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> Instant Activation</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> 24/7 Support</li>
              </ul>
              <button class="btn btn-primary w-100 btn-lg fw-bold">
                <i class="bi bi-cart-plus me-2"></i>Buy Now
              </button>
            </div>
          </div>

          <!-- Bundle Card 3 -->
          <div class="col-md-6 col-lg-4 fade-up" style="animation-delay: 0.3s;">
            <div class="bundle-card">
              <div class="bundle-badge">Best Value</div>
              <div class="bundle-data">
                <h3 class="bundle-size">5GB</h3>
                <p class="bundle-validity">Valid for 24 hours</p>
              </div>
              <div class="bundle-price">
                <span class="price-amount">GH₵ 18.00</span>
                <span class="price-original">GH₵ 25.00</span>
              </div>
              <ul class="bundle-features">
                <li><i class="bi bi-check-circle-fill text-success"></i> All Networks</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> Instant Activation</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> 24/7 Support</li>
              </ul>
              <button class="btn btn-primary w-100 btn-lg fw-bold">
                <i class="bi bi-cart-plus me-2"></i>Buy Now
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Weekly Bundles -->
      <div class="tab-pane fade" id="weekly" role="tabpanel">
        <div class="row g-4">
          <!-- Bundle Card 1 -->
          <div class="col-md-6 col-lg-4 fade-up">
            <div class="bundle-card">
              <div class="bundle-badge">Popular</div>
              <div class="bundle-data">
                <h3 class="bundle-size">10GB</h3>
                <p class="bundle-validity">Valid for 7 days</p>
              </div>
              <div class="bundle-price">
                <span class="price-amount">GH₵ 32.00</span>
                <span class="price-original">GH₵ 45.00</span>
              </div>
              <ul class="bundle-features">
                <li><i class="bi bi-check-circle-fill text-success"></i> All Networks</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> Instant Activation</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> 24/7 Support</li>
              </ul>
              <button class="btn btn-primary w-100 btn-lg fw-bold">
                <i class="bi bi-cart-plus me-2"></i>Buy Now
              </button>
            </div>
          </div>

          <!-- Bundle Card 2 -->
          <div class="col-md-6 col-lg-4 fade-up" style="animation-delay: 0.1s;">
            <div class="bundle-card">
              <div class="bundle-badge">Best Value</div>
              <div class="bundle-data">
                <h3 class="bundle-size">20GB</h3>
                <p class="bundle-validity">Valid for 7 days</p>
              </div>
              <div class="bundle-price">
                <span class="price-amount">GH₵ 55.00</span>
                <span class="price-original">GH₵ 78.00</span>
              </div>
              <ul class="bundle-features">
                <li><i class="bi bi-check-circle-fill text-success"></i> All Networks</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> Instant Activation</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> 24/7 Support</li>
              </ul>
              <button class="btn btn-primary w-100 btn-lg fw-bold">
                <i class="bi bi-cart-plus me-2"></i>Buy Now
              </button>
            </div>
          </div>

          <!-- Bundle Card 3 -->
          <div class="col-md-6 col-lg-4 fade-up" style="animation-delay: 0.2s;">
            <div class="bundle-card">
              <div class="bundle-data">
                <h3 class="bundle-size">50GB</h3>
                <p class="bundle-validity">Valid for 7 days</p>
              </div>
              <div class="bundle-price">
                <span class="price-amount">GH₵ 110.00</span>
                <span class="price-original">GH₵ 155.00</span>
              </div>
              <ul class="bundle-features">
                <li><i class="bi bi-check-circle-fill text-success"></i> All Networks</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> Instant Activation</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> 24/7 Support</li>
              </ul>
              <button class="btn btn-primary w-100 btn-lg fw-bold">
                <i class="bi bi-cart-plus me-2"></i>Buy Now
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Monthly Bundles -->
      <div class="tab-pane fade" id="monthly" role="tabpanel">
        <div class="row g-4">
          <!-- Bundle Card 1 -->
          <div class="col-md-6 col-lg-4 fade-up">
            <div class="bundle-card">
              <div class="bundle-badge">Popular</div>
              <div class="bundle-data">
                <h3 class="bundle-size">50GB</h3>
                <p class="bundle-validity">Valid for 30 days</p>
              </div>
              <div class="bundle-price">
                <span class="price-amount">GH₵ 140.00</span>
                <span class="price-original">GH₵ 200.00</span>
              </div>
              <ul class="bundle-features">
                <li><i class="bi bi-check-circle-fill text-success"></i> All Networks</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> Instant Activation</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> 24/7 Support</li>
              </ul>
              <button class="btn btn-primary w-100 btn-lg fw-bold">
                <i class="bi bi-cart-plus me-2"></i>Buy Now
              </button>
            </div>
          </div>

          <!-- Bundle Card 2 -->
          <div class="col-md-6 col-lg-4 fade-up" style="animation-delay: 0.1s;">
            <div class="bundle-card">
              <div class="bundle-badge">Best Value</div>
              <div class="bundle-data">
                <h3 class="bundle-size">100GB</h3>
                <p class="bundle-validity">Valid for 30 days</p>
              </div>
              <div class="bundle-price">
                <span class="price-amount">GH₵ 230.00</span>
                <span class="price-original">GH₵ 350.00</span>
              </div>
              <ul class="bundle-features">
                <li><i class="bi bi-check-circle-fill text-success"></i> All Networks</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> Instant Activation</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> 24/7 Support</li>
              </ul>
              <button class="btn btn-primary w-100 btn-lg fw-bold">
                <i class="bi bi-cart-plus me-2"></i>Buy Now
              </button>
            </div>
          </div>

          <!-- Bundle Card 3 -->
          <div class="col-md-6 col-lg-4 fade-up" style="animation-delay: 0.2s;">
            <div class="bundle-card">
              <div class="bundle-data">
                <h3 class="bundle-size">200GB</h3>
                <p class="bundle-validity">Valid for 30 days</p>
              </div>
              <div class="bundle-price">
                <span class="price-amount">GH₵ 420.00</span>
                <span class="price-original">GH₵ 600.00</span>
              </div>
              <ul class="bundle-features">
                <li><i class="bi bi-check-circle-fill text-success"></i> All Networks</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> Instant Activation</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> 24/7 Support</li>
              </ul>
              <button class="btn btn-primary w-100 btn-lg fw-bold">
                <i class="bi bi-cart-plus me-2"></i>Buy Now
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose AirtelTigo Section -->
<section class="why-network-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <h2 class="section-title fw-bold mb-3">Why Choose AirtelTigo?</h2>
      <p class="section-subtitle text-muted">Quality network services at affordable prices</p>
    </div>
    
    <div class="row g-4">
      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.1s;">
        <div class="why-card text-center">
          <div class="why-icon mb-3">
            <i class="bi bi-wallet2"></i>
          </div>
          <h5 class="fw-bold mb-2">Affordable Rates</h5>
          <p class="text-muted small">Get more data for less with our competitive prices</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.2s;">
        <div class="why-card text-center">
          <div class="why-icon mb-3">
            <i class="bi bi-reception-4"></i>
          </div>
          <h5 class="fw-bold mb-2">Wide Coverage</h5>
          <p class="text-muted small">Reliable network coverage across major cities</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.3s;">
        <div class="why-card text-center">
          <div class="why-icon mb-3">
            <i class="bi bi-speedometer"></i>
          </div>
          <h5 class="fw-bold mb-2">Fast Internet</h5>
          <p class="text-muted small">Enjoy high-speed 4G data connectivity</p>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.4s;">
        <div class="why-card text-center">
          <div class="why-icon mb-3">
            <i class="bi bi-star-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Great Value</h5>
          <p class="text-muted small">Best bang for your buck with flexible plans</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- How It Works Section -->
<section class="how-it-works-section py-5">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <span class="section-badge">Simple Process</span>
      <h2 class="section-title fw-bold mb-3">How to Buy AirtelTigo Bundles</h2>
      <p class="section-subtitle text-muted">Get your data in just 3 easy steps</p>
    </div>
    
    <div class="row g-4">
      <div class="col-md-4 fade-up" style="animation-delay: 0.1s;">
        <div class="step-card text-center">
          <div class="step-number">01</div>
          <div class="step-icon mb-3">
            <i class="bi bi-phone"></i>
          </div>
          <h5 class="fw-bold mb-2">Enter Phone Number</h5>
          <p class="text-muted">Enter your AirtelTigo phone number (026 or 056) to receive the bundle</p>
        </div>
      </div>
      
      <div class="col-md-4 fade-up" style="animation-delay: 0.2s;">
        <div class="step-card text-center">
          <div class="step-number">02</div>
          <div class="step-icon mb-3">
            <i class="bi bi-list-check"></i>
          </div>
          <h5 class="fw-bold mb-2">Choose Bundle</h5>
          <p class="text-muted">Select your preferred data bundle and make payment</p>
        </div>
      </div>
      
      <div class="col-md-4 fade-up" style="animation-delay: 0.3s;">
        <div class="step-card text-center">
          <div class="step-number">03</div>
          <div class="step-icon mb-3">
            <i class="bi bi-check-circle"></i>
          </div>
          <h5 class="fw-bold mb-2">Instant Delivery</h5>
          <p class="text-muted">Your data is delivered instantly to your phone</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <h2 class="section-title fw-bold mb-3">Frequently Asked Questions</h2>
      <p class="section-subtitle text-muted">Got questions? We've got answers</p>
    </div>
    
    <div class="row justify-content-center">
      <div class="col-lg-8 fade-up" style="animation-delay: 0.1s;">
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                How long does it take to receive my bundle?
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Your AirtelTigo data bundle is delivered instantly within seconds after successful payment. You'll receive an SMS confirmation from AirtelTigo.
              </div>
            </div>
          </div>
          
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                Can I buy bundles for another person?
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes! You can purchase AirtelTigo bundles for any AirtelTigo number in Ghana. Simply enter the recipient's phone number during checkout.
              </div>
            </div>
          </div>
          
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                What payment methods do you accept?
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                We accept Mobile Money (MTN, Vodafone, AirtelTigo), bank cards (Visa, Mastercard), and bank transfers.
              </div>
            </div>
          </div>
          
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                Which AirtelTigo numbers are supported?
              </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                We support all AirtelTigo numbers starting with 026 and 056. Both Airtel and Tigo numbers are covered under the merged network.
              </div>
            </div>
          </div>
          
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                What if I don't receive my bundle?
              </button>
            </h2>
            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                In the rare case you don't receive your bundle within 5 minutes, please contact our 24/7 support team and we'll resolve it immediately.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</x-layouts.app>

