@props([
    'className' => '',
    'image' => '',
    'networkName' => '',
    'remainingContent' => '',

])

<section class="network-hero-section {{$className}}-hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 fade-up">
        <div class="network-logo-badge mb-4">
          <img src="assets/networks/{{$image}}" alt="{{$networkName}}" class="network-logo-large">
        </div>
        <h1 class="network-hero-title mb-3">{{$networkName}} Data Bundles</h1>
        <p class="network-hero-text mb-4">Get the best deals on {{$networkName}} data bundles. Fast delivery, affordable prices, and reliable service. {{$remainingContent}}</p>
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
            {{ $slot }}
            </div>
        </div>
    </div>
  </div>
</section>
