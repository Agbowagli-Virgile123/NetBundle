@props([
    'networkName' => '',
    'inbetweenContent' => '',
])

<section class="how-it-works-section py-5">
  <div class="container">

    <x-section-header
        badge="Simple Process"
        title="How to Buy {{$networkName}} Bundles"
        subTitle="Get your data in just 3 easy steps"
    />


    <div class="row g-4">
      <div class="col-md-4 fade-up" style="animation-delay: 0.1s;">
        <div class="step-card text-center">
          <div class="step-number">01</div>
          <div class="step-icon mb-3">
            <i class="bi bi-phone"></i>
          </div>
          <h5 class="fw-bold mb-2">Enter Phone Number</h5>
          <p class="text-muted">Enter your {{$inbetweenContent}} to receive the bundle</p>
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
