<x-layouts.app title="Pricing">
    <!-- Pricing Hero Section -->
<section class="pricing-hero-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center fade-up">
        <span class="section-badge">Transparent Pricing</span>
        <h1 class="hero-title mb-3">Simple, Affordable Pricing</h1>
        <p class="hero-text mb-4">No hidden fees. No surprises. Just honest pricing for quality data bundles across all networks.</p>
      </div>
    </div>
  </div>
</section>

<!-- Network Comparison Section -->
<section class="comparison-section py-5">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <h2 class="section-title fw-bold mb-3">Compare Network Prices</h2>
      <p class="section-subtitle text-muted">Choose the best network for your budget and needs</p>
    </div>

    <!-- Network Selector -->
    <div class="network-selector mb-4 fade-up" style="animation-delay: 0.1s;">
      <ul class="nav nav-pills justify-content-center" id="networkTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="mtn-pricing-tab" data-bs-toggle="pill" data-bs-target="#mtn-pricing" type="button">
            <img src="assets/networks/mtnLogo.jpg" alt="MTN" class="network-tab-logo">
            MTN
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="airtel-pricing-tab" data-bs-toggle="pill" data-bs-target="#airtel-pricing" type="button">
            <img src="assets/networks/ATG.jpg" alt="AirtelTigo" class="network-tab-logo">
            AirtelTigo
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="telecel-pricing-tab" data-bs-toggle="pill" data-bs-target="#telecel-pricing" type="button">
            <img src="assets/networks/TLC.jpg" alt="Telecel" class="network-tab-logo">
            Telecel
          </button>
        </li>
      </ul>
    </div>

    <!-- Pricing Tables -->
    <div class="tab-content" id="networkTabsContent">
      <!-- MTN Pricing -->
      <div class="tab-pane fade show active" id="mtn-pricing" role="tabpanel">
        <div class="row g-4">
          <!-- Daily Plans -->
          <div class="col-lg-4 fade-up" style="animation-delay: 0.1s;">
            <div class="pricing-table">
              <div class="pricing-header">
                <h3 class="plan-category">Daily Plans</h3>
                <p class="plan-validity">Valid for 24 Hours</p>
              </div>
              <div class="pricing-body">
                <div class="pricing-row">
                  <span class="data-amount">1GB</span>
                  <span class="price-tag">GH₵ 5.00</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">2GB</span>
                  <span class="price-tag">GH₵ 9.00</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">5GB</span>
                  <span class="price-tag">GH₵ 20.00</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Weekly Plans -->
          <div class="col-lg-4 fade-up" style="animation-delay: 0.2s;">
            <div class="pricing-table featured">
              <div class="featured-badge">Most Popular</div>
              <div class="pricing-header">
                <h3 class="plan-category">Weekly Plans</h3>
                <p class="plan-validity">Valid for 7 Days</p>
              </div>
              <div class="pricing-body">
                <div class="pricing-row">
                  <span class="data-amount">10GB</span>
                  <span class="price-tag">GH₵ 35.00</span>
                  <button class="btn btn-sm btn-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">20GB</span>
                  <span class="price-tag">GH₵ 60.00</span>
                  <button class="btn btn-sm btn-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">50GB</span>
                  <span class="price-tag">GH₵ 120.00</span>
                  <button class="btn btn-sm btn-primary">Buy</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Monthly Plans -->
          <div class="col-lg-4 fade-up" style="animation-delay: 0.3s;">
            <div class="pricing-table">
              <div class="pricing-header">
                <h3 class="plan-category">Monthly Plans</h3>
                <p class="plan-validity">Valid for 30 Days</p>
              </div>
              <div class="pricing-body">
                <div class="pricing-row">
                  <span class="data-amount">50GB</span>
                  <span class="price-tag">GH₵ 150.00</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">100GB</span>
                  <span class="price-tag">GH₵ 250.00</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">200GB</span>
                  <span class="price-tag">GH₵ 450.00</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- AirtelTigo Pricing -->
      <div class="tab-pane fade" id="airtel-pricing" role="tabpanel">
        <div class="row g-4">
          <!-- Daily Plans -->
          <div class="col-lg-4 fade-up">
            <div class="pricing-table">
              <div class="pricing-header">
                <h3 class="plan-category">Daily Plans</h3>
                <p class="plan-validity">Valid for 24 Hours</p>
              </div>
              <div class="pricing-body">
                <div class="pricing-row">
                  <span class="data-amount">1GB</span>
                  <span class="price-tag">GH₵ 4.50</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">2GB</span>
                  <span class="price-tag">GH₵ 8.50</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">5GB</span>
                  <span class="price-tag">GH₵ 18.00</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Weekly Plans -->
          <div class="col-lg-4 fade-up" style="animation-delay: 0.1s;">
            <div class="pricing-table featured">
              <div class="featured-badge">Most Popular</div>
              <div class="pricing-header">
                <h3 class="plan-category">Weekly Plans</h3>
                <p class="plan-validity">Valid for 7 Days</p>
              </div>
              <div class="pricing-body">
                <div class="pricing-row">
                  <span class="data-amount">10GB</span>
                  <span class="price-tag">GH₵ 32.00</span>
                  <button class="btn btn-sm btn-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">20GB</span>
                  <span class="price-tag">GH₵ 55.00</span>
                  <button class="btn btn-sm btn-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">50GB</span>
                  <span class="price-tag">GH₵ 110.00</span>
                  <button class="btn btn-sm btn-primary">Buy</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Monthly Plans -->
          <div class="col-lg-4 fade-up" style="animation-delay: 0.2s;">
            <div class="pricing-table">
              <div class="pricing-header">
                <h3 class="plan-category">Monthly Plans</h3>
                <p class="plan-validity">Valid for 30 Days</p>
              </div>
              <div class="pricing-body">
                <div class="pricing-row">
                  <span class="data-amount">50GB</span>
                  <span class="price-tag">GH₵ 140.00</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">100GB</span>
                  <span class="price-tag">GH₵ 230.00</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">200GB</span>
                  <span class="price-tag">GH₵ 420.00</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Telecel Pricing -->
      <div class="tab-pane fade" id="telecel-pricing" role="tabpanel">
        <div class="row g-4">
          <!-- Daily Plans -->
          <div class="col-lg-4 fade-up">
            <div class="pricing-table">
              <div class="pricing-header">
                <h3 class="plan-category">Daily Plans</h3>
                <p class="plan-validity">Valid for 24 Hours</p>
              </div>
              <div class="pricing-body">
                <div class="pricing-row">
                  <span class="data-amount">1GB</span>
                  <span class="price-tag">GH₵ 4.80</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">2GB</span>
                  <span class="price-tag">GH₵ 8.80</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">5GB</span>
                  <span class="price-tag">GH₵ 19.00</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Weekly Plans -->
          <div class="col-lg-4 fade-up" style="animation-delay: 0.1s;">
            <div class="pricing-table featured">
              <div class="featured-badge">Most Popular</div>
              <div class="pricing-header">
                <h3 class="plan-category">Weekly Plans</h3>
                <p class="plan-validity">Valid for 7 Days</p>
              </div>
              <div class="pricing-body">
                <div class="pricing-row">
                  <span class="data-amount">10GB</span>
                  <span class="price-tag">GH₵ 33.00</span>
                  <button class="btn btn-sm btn-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">20GB</span>
                  <span class="price-tag">GH₵ 57.00</span>
                  <button class="btn btn-sm btn-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">50GB</span>
                  <span class="price-tag">GH₵ 115.00</span>
                  <button class="btn btn-sm btn-primary">Buy</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Monthly Plans -->
          <div class="col-lg-4 fade-up" style="animation-delay: 0.2s;">
            <div class="pricing-table">
              <div class="pricing-header">
                <h3 class="plan-category">Monthly Plans</h3>
                <p class="plan-validity">Valid for 30 Days</p>
              </div>
              <div class="pricing-body">
                <div class="pricing-row">
                  <span class="data-amount">50GB</span>
                  <span class="price-tag">GH₵ 145.00</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">100GB</span>
                  <span class="price-tag">GH₵ 240.00</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
                <div class="pricing-row">
                  <span class="data-amount">200GB</span>
                  <span class="price-tag">GH₵ 435.00</span>
                  <button class="btn btn-sm btn-outline-primary">Buy</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Pricing Features -->
<section class="pricing-features-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <h2 class="section-title fw-bold mb-3">What's Included</h2>
      <p class="section-subtitle text-muted">Every bundle comes with these benefits</p>
    </div>

    <div class="row g-4">
      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.1s;">
        <div class="feature-box text-center">
          <div class="feature-icon-circle mb-3">
            <i class="bi bi-lightning-charge-fill"></i>
          </div>
          <h5 class="fw-bold mb-2">Instant Delivery</h5>
          <p class="text-muted small">Get your data within seconds of purchase</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.2s;">
        <div class="feature-box text-center">
          <div class="feature-icon-circle mb-3">
            <i class="bi bi-shield-check"></i>
          </div>
          <h5 class="fw-bold mb-2">Secure Payment</h5>
          <p class="text-muted small">Bank-level security for all transactions</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.3s;">
        <div class="feature-box text-center">
          <div class="feature-icon-circle mb-3">
            <i class="bi bi-headset"></i>
          </div>
          <h5 class="fw-bold mb-2">24/7 Support</h5>
          <p class="text-muted small">Always here when you need assistance</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.4s;">
        <div class="feature-box text-center">
          <div class="feature-icon-circle mb-3">
            <i class="bi bi-arrow-repeat"></i>
          </div>
          <h5 class="fw-bold mb-2">No Hidden Fees</h5>
          <p class="text-muted small">What you see is what you pay</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bulk Purchase Section -->
<section class="bulk-purchase-section py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 fade-up">
        <span class="section-badge">Special Offer</span>
        <h2 class="section-title fw-bold mb-3">Bulk Purchase Discounts</h2>
        <p class="lead mb-4">Need data bundles for your business, organization, or family? Get special discounts on bulk purchases!</p>
        <ul class="bulk-benefits-list">
          <li><i class="bi bi-check-circle-fill text-success"></i> Up to 40% discount on bulk orders</li>
          <li><i class="bi bi-check-circle-fill text-success"></i> Dedicated account manager</li>
          <li><i class="bi bi-check-circle-fill text-success"></i> Priority customer support</li>
          <li><i class="bi bi-check-circle-fill text-success"></i> Flexible payment terms</li>
          <li><i class="bi bi-check-circle-fill text-success"></i> Custom bundles available</li>
        </ul>
        <a href="/contact" class="btn btn-primary btn-lg mt-3">
          <i class="bi bi-envelope me-2"></i>Contact Us for Bulk Pricing
        </a>
      </div>
      <div class="col-lg-6 fade-up" style="animation-delay: 0.2s;">
        <div class="bulk-illustration">
          <div class="discount-badge">
            <span class="discount-text">Up to</span>
            <span class="discount-percentage">40%</span>
            <span class="discount-off">OFF</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <h2 class="section-title fw-bold mb-3">Pricing FAQs</h2>
      <p class="section-subtitle text-muted">Common questions about our pricing</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8 fade-up" style="animation-delay: 0.1s;">
        <div class="accordion" id="pricingFaqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                Why are your prices lower than direct network purchases?
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#pricingFaqAccordion">
              <div class="accordion-body">
                We partner directly with network providers to get wholesale rates, which we pass on to you. Our high volume allows us to negotiate better prices.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                Are there any hidden charges?
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#pricingFaqAccordion">
              <div class="accordion-body">
                No! The price you see is exactly what you pay. We believe in transparent pricing with no hidden fees or surprise charges.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                Do you offer refunds if I'm not satisfied?
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#pricingFaqAccordion">
              <div class="accordion-body">
                Since data bundles are delivered instantly, we cannot offer refunds. However, if there's an issue with delivery, we'll resolve it immediately or provide a replacement.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                Can I get a custom bundle size?
              </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#pricingFaqAccordion">
              <div class="accordion-body">
                For bulk purchases and corporate clients, we can create custom bundle sizes. Contact our sales team to discuss your specific needs.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</x-layouts.app>
