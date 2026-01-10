<x-layouts.app>
<!-- FAQ Hero Section -->
<section class="faq-hero-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center fade-up">
        <span class="section-badge">Help Center</span>
        <h1 class="hero-title mb-3">Frequently Asked Questions</h1>
        <p class="hero-text mb-4">Find quick answers to common questions about Net Bundle services</p>

        <!-- Search Box -->
        <div class="faq-search-box">
          <i class="bi bi-search"></i>
          <input type="text" class="form-control" placeholder="Search for answers...">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Categories -->
<section class="faq-categories-section py-5 bg-light">
  <div class="container">
    <div class="row g-3">
      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.1s;">
        <a href="#general" class="faq-category-card">
          <i class="bi bi-question-circle"></i>
          <h6>General Questions</h6>
        </a>
      </div>
      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.2s;">
        <a href="#bundles" class="faq-category-card">
          <i class="bi bi-box"></i>
          <h6>Data Bundles</h6>
        </a>
      </div>
      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.3s;">
        <a href="#payment" class="faq-category-card">
          <i class="bi bi-credit-card"></i>
          <h6>Payments</h6>
        </a>
      </div>
      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.4s;">
        <a href="#agents" class="faq-category-card">
          <i class="bi bi-people"></i>
          <h6>Agent Program</h6>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Accordions -->
<section class="faq-content-section py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">

        <!-- General Questions -->
        <div class="faq-category-section fade-up" id="general">
          <h3 class="faq-category-title">
            <i class="bi bi-question-circle me-2"></i>
            General Questions
          </h3>
          <div class="accordion faq-accordion" id="generalAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#general1">
                  What is Net Bundle?
                </button>
              </h2>
              <div id="general1" class="accordion-collapse collapse show" data-bs-parent="#generalAccordion">
                <div class="accordion-body">
                  Net Bundle is Ghana's leading online platform for purchasing affordable data bundles across all major networks including MTN, AirtelTigo, and Telecel. We provide instant delivery, competitive prices, and 24/7 customer support to keep you connected.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general2">
                  How does Net Bundle work?
                </button>
              </h2>
              <div id="general2" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                <div class="accordion-body">
                  It's simple! Just select your network, choose a data bundle, enter the phone number, make payment, and receive your data instantly. The entire process takes less than a minute.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general3">
                  Is Net Bundle safe and legitimate?
                </button>
              </h2>
              <div id="general3" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                <div class="accordion-body">
                  Yes, absolutely! Net Bundle is a registered business in Ghana. We use bank-level encryption to protect your payments and personal information. We've successfully served thousands of customers since our inception.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general4">
                  Do I need to create an account?
                </button>
              </h2>
              <div id="general4" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                <div class="accordion-body">
                  No, you don't need to create an account to buy data bundles. However, creating an account allows you to track your purchase history and enjoy faster checkouts.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general5">
                  What are your operating hours?
                </button>
              </h2>
              <div id="general5" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                <div class="accordion-body">
                  Our platform operates 24/7, 365 days a year. You can purchase data bundles at any time, day or night. Our customer support team is also available 24/7 to assist you.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Data Bundles Questions -->
        <div class="faq-category-section fade-up" id="bundles">
          <h3 class="faq-category-title">
            <i class="bi bi-box me-2"></i>
            Data Bundles
          </h3>
          <div class="accordion faq-accordion" id="bundlesAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bundle1">
                  Which networks do you support?
                </button>
              </h2>
              <div id="bundle1" class="accordion-collapse collapse show" data-bs-parent="#bundlesAccordion">
                <div class="accordion-body">
                  We currently support all major networks in Ghana: MTN, AirtelTigo, and Telecel. We're constantly working to add more network options.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bundle2">
                  How long does it take to receive my bundle?
                </button>
              </h2>
              <div id="bundle2" class="accordion-collapse collapse" data-bs-parent="#bundlesAccordion">
                <div class="accordion-body">
                  Your data bundle is delivered instantly within 5-10 seconds after successful payment. You'll receive an SMS confirmation from your network provider.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bundle3">
                  Can I buy bundles for another person?
                </button>
              </h2>
              <div id="bundle3" class="accordion-collapse collapse" data-bs-parent="#bundlesAccordion">
                <div class="accordion-body">
                  Yes! You can purchase data bundles for any phone number in Ghana. Simply enter the recipient's phone number during checkout. It's a great way to gift data to friends and family.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bundle4">
                  What if I enter the wrong phone number?
                </button>
              </h2>
              <div id="bundle4" class="accordion-collapse collapse" data-bs-parent="#bundlesAccordion">
                <div class="accordion-body">
                  Please double-check the phone number before completing payment. Once a bundle is delivered, we cannot transfer it to another number. If you make an error, contact our support team immediately.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bundle5">
                  How long are bundles valid for?
                </button>
              </h2>
              <div id="bundle5" class="accordion-collapse collapse" data-bs-parent="#bundlesAccordion">
                <div class="accordion-body">
                  Bundle validity varies by type: Daily bundles are valid for 24 hours, weekly bundles for 7 days, and monthly bundles for 30 days. The exact validity is clearly displayed for each bundle.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bundle6">
                  Can I purchase multiple bundles at once?
                </button>
              </h2>
              <div id="bundle6" class="accordion-collapse collapse" data-bs-parent="#bundlesAccordion">
                <div class="accordion-body">
                  Yes, you can purchase multiple bundles in separate transactions. For bulk purchases (10+ bundles), please contact our sales team for special rates.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bundle7">
                  What happens if my bundle expires?
                </button>
              </h2>
              <div id="bundle7" class="accordion-collapse collapse" data-bs-parent="#bundlesAccordion">
                <div class="accordion-body">
                  Unused data expires at the end of the validity period and cannot be recovered. We recommend choosing bundle sizes and validity periods that match your usage patterns.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Payment Questions -->
        <div class="faq-category-section fade-up" id="payment">
          <h3 class="faq-category-title">
            <i class="bi bi-credit-card me-2"></i>
            Payments & Billing
          </h3>
          <div class="accordion faq-accordion" id="paymentAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#payment1">
                  What payment methods do you accept?
                </button>
              </h2>
              <div id="payment1" class="accordion-collapse collapse show" data-bs-parent="#paymentAccordion">
                <div class="accordion-body">
                  We accept Mobile Money (MTN, Vodafone, AirtelTigo), bank cards (Visa, Mastercard, Verve), and bank transfers. All payments are processed securely with encryption.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment2">
                  Are there any hidden fees?
                </button>
              </h2>
              <div id="payment2" class="accordion-collapse collapse" data-bs-parent="#paymentAccordion">
                <div class="accordion-body">
                  No! The price you see is exactly what you pay. We believe in transparent pricing with no hidden charges or surprise fees.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment3">
                  Is my payment information secure?
                </button>
              </h2>
              <div id="payment3" class="accordion-collapse collapse" data-bs-parent="#paymentAccordion">
                <div class="accordion-body">
                  Absolutely. We use industry-standard SSL encryption and comply with PCI-DSS standards. We never store your complete card details on our servers.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment4">
                  My payment was deducted but I didn't receive data. What should I do?
                </button>
              </h2>
              <div id="payment4" class="accordion-collapse collapse" data-bs-parent="#paymentAccordion">
                <div class="accordion-body">
                  This is rare but can happen due to network delays. Please wait for 5 minutes. If you still haven't received your bundle, contact our support team immediately with your transaction reference. We'll resolve it within minutes.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment5">
                  Can I get a refund?
                </button>
              </h2>
              <div id="payment5" class="accordion-collapse collapse" data-bs-parent="#paymentAccordion">
                <div class="accordion-body">
                  Since data bundles are delivered instantly, we generally cannot offer refunds. However, if there's a technical issue preventing delivery, we'll either resend your bundle or issue a refund. See our Refund Policy for details.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#payment6">
                  Will I receive a receipt?
                </button>
              </h2>
              <div id="payment6" class="accordion-collapse collapse" data-bs-parent="#paymentAccordion">
                <div class="accordion-body">
                  Yes, you'll receive a receipt via email and/or SMS after each successful transaction. You can also access your purchase history if you have an account.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Agent Questions -->
        <div class="faq-category-section fade-up" id="agents">
          <h3 class="faq-category-title">
            <i class="bi bi-people me-2"></i>
            Agent Program
          </h3>
          <div class="accordion faq-accordion" id="agentsAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#agent1">
                  How do I become an agent?
                </button>
              </h2>
              <div id="agent1" class="accordion-collapse collapse show" data-bs-parent="#agentsAccordion">
                <div class="accordion-body">
                  Visit our "Become an Agent" page and fill out the application form. You'll need to be 18 or older, have a valid ID, and a Mobile Money account. We'll review your application within 24 hours.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#agent2">
                  How much can I earn as an agent?
                </button>
              </h2>
              <div id="agent2" class="accordion-collapse collapse" data-bs-parent="#agentsAccordion">
                <div class="accordion-body">
                  Agents earn between 10-20% commission on every sale. Your commission rate increases as your monthly sales grow. Top agents earn over GH₵ 5,000 per month!
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#agent3">
                  When do I receive my commissions?
                </button>
              </h2>
              <div id="agent3" class="accordion-collapse collapse" data-bs-parent="#agentsAccordion">
                <div class="accordion-body">
                  Commissions are paid instantly to your Mobile Money account after each successful sale. There's no waiting period!
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#agent4">
                  Is there a registration fee?
                </button>
              </h2>
              <div id="agent4" class="accordion-collapse collapse" data-bs-parent="#agentsAccordion">
                <div class="accordion-body">
                  No! Becoming a Net Bundle agent is completely free. We also provide free training and marketing materials.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#agent5">
                  Do I need an office or shop?
                </button>
              </h2>
              <div id="agent5" class="accordion-collapse collapse" data-bs-parent="#agentsAccordion">
                <div class="accordion-body">
                  No, you can operate from anywhere! Many agents work from home or on-the-go using just their smartphones. All you need is internet access and a phone.
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Still Have Questions -->
<section class="still-questions-section py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center fade-up">
        <h3 class="fw-bold mb-3">Didn't Find Your Answer?</h3>
        <p class="text-muted mb-4">Our support team is here to help you with any questions</p>
        <div class="contact-options">
          <a href="/contact" class="btn btn-primary btn-lg me-3 mb-2">
            <i class="bi bi-envelope me-2"></i>Contact Us
          </a>
          <a href="https://wa.me/233XXXXXXXXX" class="btn btn-success btn-lg mb-2">
            <i class="bi bi-whatsapp me-2"></i>WhatsApp Support
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
</x-layouts.app>
