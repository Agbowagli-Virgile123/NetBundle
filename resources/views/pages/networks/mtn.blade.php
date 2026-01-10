<x-layouts.app title="Mtn">
<!-- Network Hero Section -->
<x-layouts.network-hero-section
    className="mtn"
    image="mtnLogo.jpg"
    networkName="MTN"
    remainingContent="Stay connected with Ghana's leading network."

>
    <form class="quick-purchase-form">
        <div class="mb-3">
            <label class="form-label text-white">Phone Number</label>
            <input type="tel" class="form-control form-control-lg" placeholder="024XXXXXXX">
        </div>
        <div class="mb-3">
            <label class="form-label text-white">Select Bundle</label>
            <select class="form-select form-select-lg">
            <option>Choose your bundle</option>
            <option>1GB - GH₵ 5.00</option>
            <option>2GB - GH₵ 9.00</option>
            <option>5GB - GH₵ 20.00</option>
            </select>
        </div>
        <button type="submit" class="btn btn-warning btn-lg w-100 fw-bold">
            <i class="bi bi-cart-plus me-2"></i>Buy Now
        </button>
    </form>
</x-layouts.network-hero-section>


<!-- Data Bundles Section -->
<x-layouts.bundle-section
    title="MTN Data Plans"
>

    <!-- Daily Bundles -->
      <div class="tab-pane fade show active" id="daily" role="tabpanel">
        <div class="row g-4">
          <!-- Bundle Card 1 -->
            <x-bundle-card
                delayValue="0.1"
                size="1"
                valididy="24 hours"
                amount="5"
                originalPrice="7"
                tag="Popular"
            />

          <!-- Bundle Card 2 -->
           <x-bundle-card
                delayValue="0.2"
                size="2"
                valididy="24 hours"
                amount="9"
                originalPrice="12"
            />

          <!-- Bundle Card 3 -->
           <x-bundle-card
                delayValue="0.3"
                size="5"
                valididy="24 hours"
                amount="20"
                originalPrice="28"
            />
        </div>
      </div>

      <!-- Weekly Bundles -->

      <div class="tab-pane fade" id="weekly" role="tabpanel">
        <div class="row g-4">
          <!-- Bundle Card 1 -->
            <x-bundle-card
                delayValue="0.1"
                size="10"
                valididy="7 days"
                amount="35"
                originalPrice="50"
                tag="Best Value"
            />


          <!-- Bundle Card 2 -->
           <x-bundle-card
                delayValue="0.2"
                size="20"
                valididy="7 days"
                amount="60"
                originalPrice="85"
            />

          <!-- Bundle Card 3 -->
           <x-bundle-card
                delayValue="0.3"
                size="50"
                valididy="7 days"
                amount="120"
                originalPrice="170"
                tag="Best Value"
            />
        </div>
      </div>

      <!-- Monthly Bundles -->
      <div class="tab-pane fade" id="monthly" role="tabpanel">
        <div class="row g-4">
          <!-- Bundle Card 1 -->
           <x-bundle-card
                delayValue="0.1"
                size="50"
                valididy="30 days"
                amount="150"
                originalPrice="220"
                tag="Popular"
            />

          <!-- Bundle Card 2 -->
           <x-bundle-card
                delayValue="0.2"
                size="100"
                valididy="30 days"
                amount="250"
                originalPrice="380"
                tag="Best Value"
            />


          <!-- Bundle Card 3 -->
           <x-bundle-card
                delayValue="0.3"
                size="200"
                valididy="30 days"
                amount="450"
                originalPrice="650"
            />
        </div>
      </div>

</x-layouts.bundle-section>


<!-- Why Choose MTN Section -->
<x-layouts.why-network-section
    networkName="MTN"
    subTitle="Ghana's most reliable network with nationwide coverage">

    <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.1s;">
        <div class="why-card text-center">
          <div class="why-icon mb-3">
            <i class="bi bi-reception-4"></i>
          </div>
          <h5 class="fw-bold mb-2">Best Coverage</h5>
          <p class="text-muted small">Nationwide 4G LTE coverage across Ghana</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.2s;">
        <div class="why-card text-center">
          <div class="why-icon mb-3">
            <i class="bi bi-speedometer2"></i>
          </div>
          <h5 class="fw-bold mb-2">Fast Speeds</h5>
          <p class="text-muted small">Experience blazing fast internet speeds</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.3s;">
        <div class="why-card text-center">
          <div class="why-icon mb-3">
            <i class="bi bi-people"></i>
          </div>
          <h5 class="fw-bold mb-2">Trusted by Millions</h5>
          <p class="text-muted small">Over 20 million satisfied customers</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.4s;">
        <div class="why-card text-center">
          <div class="why-icon mb-3">
            <i class="bi bi-award"></i>
          </div>
          <h5 class="fw-bold mb-2">Award Winning</h5>
          <p class="text-muted small">Ghana's leading telecom provider</p>
        </div>
      </div>
</x-layouts.why-network-section>


<!-- How It Works Section -->
<section class="how-it-works-section py-5">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <span class="section-badge">Simple Process</span>
      <h2 class="section-title fw-bold mb-3">How to Buy MTN Bundles</h2>
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
          <p class="text-muted">Enter your MTN phone number to receive the bundle</p>
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
                Your MTN data bundle is delivered instantly within seconds after successful payment. You'll receive an SMS confirmation from MTN.
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
                Yes! You can purchase MTN bundles for any MTN number in Ghana. Simply enter the recipient's phone number during checkout.
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
                What if I don't receive my bundle?
              </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
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

