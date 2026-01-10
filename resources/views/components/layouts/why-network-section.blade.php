@props(['networkName' => '', 'subTitle' => ''])

<section class="why-network-section py-5 bg-light">
  <div class="container">
     <x-section-header
        title="Why Choose {{ $networkName }}?"
        :$subTitle
    />

    <div class="row g-4">
        {{ $slot }}
    </div>
  </div>
</section>
