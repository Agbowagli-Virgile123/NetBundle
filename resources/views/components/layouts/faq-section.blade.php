<section class="faq-section py-5 bg-light">
  <div class="container">

    <x-section-header
        title="Frequently Asked Questions"
        subTitle="Got questions? We've got answers"
    />

    <div class="row justify-content-center">
      <div class="col-lg-8 fade-up" style="animation-delay: 0.1s;">
        <div class="accordion" id="faqAccordion">
          {{ $slot }}
        </div>
      </div>
    </div>
  </div>
</section>
