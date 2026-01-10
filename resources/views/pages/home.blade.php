<x-layouts.app title="Home">
  {{-- Carrousel Section --}}
    <x-carousel />

    {{-- Network Section --}}
   <!-- Network Selection Section -->
<section class="network-section py-5" id="networks">
  <div class="container">
    <!-- Section Header -->
    <x-section-header
        badge="Our Services"
        title="Choose Your Network"
        subTitle="Select your preferred network to view available data bundles and start saving today"
    />


    <!-- Network Cards -->
    <div class="row g-4 justify-content-center">
      <!-- MTN Card -->
        <x-network-card
            path="/netbundlemtn"
            image="mtnLogo.jpg"
            name="MTN"
            shortDesc="Ghana's leading network with nationwide coverage"
        />

      <!-- AirtelTigo Card -->
        <x-network-card
            path="/netbundleat"
            image="ATG.jpg"
            name="AirtelTigo"
            shortDesc="Affordable data plans with reliable service"
        />

      <!-- Telecel Card -->

        <x-network-card
            path="/netbundletelecel"
            image="TLC.jpg"
            name="Telecel"
            shortDesc="Fast speeds and great value for money"
        />
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
