<x-layouts.app title="Home">
  {{-- Carrousel Section --}}
    <x-carousel />

    {{-- Network Section --}}
   <!-- Network Selection Section -->
<section class="network-section py-5" id="networks">
  <div class="container">
    <!-- Section Header -->
    <div class="text-center mb-5 fade-up">
      <span class="section-badge">Our Services</span>
      <h2 class="section-title fw-bold mb-3">Choose Your Network</h2>
      <p class="section-subtitle text-muted">Select your preferred network to view available data bundles and start saving today</p>
    </div>

    <!-- Network Cards -->
    <div class="row g-4 justify-content-center">
      <!-- MTN Card -->
      <div class="col-12 col-sm-6 col-lg-4 fade-up" style="animation-delay: 0.1s;">
        <a href="/mtn" class="text-decoration-none">
          <div class="card network-card h-100 border-0">
            <div class="card-body text-center p-4">
              <div class="network-logo-wrapper mb-4">
                <img src="assets/networks/mtnLogo.jpg" alt="MTN" class="img-fluid">
                <div class="network-badge">
                  <i class="bi bi-check-circle-fill"></i> Available
                </div>
              </div>
              <h4 class="network-title fw-bold mb-2">MTN</h4>
              <p class="network-description text-muted mb-3">Ghana's leading network with nationwide coverage</p>
              <div class="network-arrow">
                <span>View Bundles</span>
                <i class="bi bi-arrow-right ms-2"></i>
              </div>
            </div>
          </div>
        </a>
      </div>

      <!-- AirtelTigo Card -->
      <div class="col-12 col-sm-6 col-lg-4 fade-up" style="animation-delay: 0.2s;">
        <a href="/airtel-tigo" class="text-decoration-none">
          <div class="card network-card h-100 border-0">
            <div class="card-body text-center p-4">
              <div class="network-logo-wrapper mb-4">
                <img src="assets/networks/ATG.jpg" alt="AirtelTigo" class="img-fluid">
                <div class="network-badge">
                  <i class="bi bi-check-circle-fill"></i> Available
                </div>
              </div>
              <h4 class="network-title fw-bold mb-2">AirtelTigo</h4>
              <p class="network-description text-muted mb-3">Affordable data plans with reliable service</p>
              <div class="network-arrow">
                <span>View Bundles</span>
                <i class="bi bi-arrow-right ms-2"></i>
              </div>
            </div>
          </div>
        </a>
      </div>

      <!-- Telecel Card -->
      <div class="col-12 col-sm-6 col-lg-4 fade-up" style="animation-delay: 0.3s;">
        <a href="/telecel" class="text-decoration-none">
          <div class="card network-card h-100 border-0">
            <div class="card-body text-center p-4">
              <div class="network-logo-wrapper mb-4">
                <img src="assets/networks/TLC.jpg" alt="Telecel" class="img-fluid">
                <div class="network-badge">
                  <i class="bi bi-check-circle-fill"></i> Available
                </div>
              </div>
              <h4 class="network-title fw-bold mb-2">Telecel</h4>
              <p class="network-description text-muted mb-3">Fast speeds and great value for money</p>
              <div class="network-arrow">
                <span>View Bundles</span>
                <i class="bi bi-arrow-right ms-2"></i>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <!-- Additional Info -->
    <div class="row mt-5">
      <div class="col-12 text-center fade-up" style="animation-delay: 0.4s;">
        <div class="info-box p-4">
          <i class="bi bi-lightning-charge-fill text-warning fs-1 mb-3"></i>
          <h5 class="fw-bold mb-2">Instant Delivery Guaranteed</h5>
          <p class="text-white mb-0">All data bundles are delivered to your phone within seconds. Available 24/7!</p>
        </div>
      </div>
    </div>
  </div>
</section>

</x-layouts.app>
