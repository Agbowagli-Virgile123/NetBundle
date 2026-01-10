@props(['title' => ''])

<section class="bundles-section py-5">
  <div class="container">
    <x-section-header
        badge="Available Bundles"
        :$title
        subTitle="Choose from our wide range of affordable data bundles"
    />

    <!-- Bundle Tabs -->
    <div class="bundle-tabs mb-4 fade-up" style="animation-delay: 0.1s;">
      <ul class="nav nav-pills justify-content-center" id="bundleTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="daily-tab" data-bs-toggle="pill" data-bs-target="#daily" type="button">Daily Bundles</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="weekly-tab" data-bs-toggle="pill" data-bs-target="#weekly" type="button">Weekly Bundles</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="monthly-tab" data-bs-toggle="pill" data-bs-target="#monthly" type="button">Monthly Bundles</button>
        </li>
      </ul>
    </div>

    <!-- Bundle Content -->
    <div class="tab-content" id="bundleTabsContent">
        {{$slot}}
    </div>
  </div>
</section>
