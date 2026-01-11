<x-layouts.app title="Mtn">
<!-- Network Hero Section -->

<x-layouts.network-hero-section
    className="airtel"
    image="ATG.jpg"
    networkName="AirtelTigo"
    remainingContent="Experience quality connectivity at unbeatable rates."

>
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
</x-layouts.network-hero-section>

<!-- Data Bundles Section -->
<x-layouts.bundle-section
    title="AirtelTigo Data Plans"
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


<!-- Why Choose AirtelTigo Section -->
<x-layouts.why-network-section
    networkName="AirtelTigo"
    subTitle="Quality network services at affordable prices">

    <x-why-network-card
        delayValue="0.1"
        icon="wallet2"
        title="Affordable Rates"
        content="Get more data for less with our competitive prices"
    />

    <x-why-network-card
        delayValue="0.2"
        icon="reception-4"
        title="Wide Coverage"
        content="Reliable network coverage across major cities"
    />

    <x-why-network-card
        delayValue="0.3"
        icon="speedometer"
        title="Fast Internet"
        content="Enjoy high-speed 4G data connectivity"
    />
    <x-why-network-card
        delayValue="0.4"
        icon="star-fill"
        title="Great Value"
        content="Best bang for your buck with flexible plans"
    />

</x-layouts.why-network-section>


<!-- How It Works Section -->
<x-layouts.how-it-works
    networkName="AirtelTigo"
    inbetweenContent="AirtelTigo phone number (026 or 056)"
/>

<!-- FAQ Section -->
<x-layouts.faq-section>
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
</x-layouts.faq-section>

</x-layouts.app>

