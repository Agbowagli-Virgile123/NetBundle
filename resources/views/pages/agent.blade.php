<x-layouts.app title="Agent">
    @if(session('success'))
        <div class="flash-success d-none">
            {{ session('success') }}
        </div>
    @endif
    <!-- Agent Hero Section -->
<section class="agent-hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 fade-up">
        <span class="section-badge">Join Our Network</span>
        <h1 class="hero-title mb-3">Become a Net Bundle Agent</h1>
        <p class="hero-text mb-4">Start earning money by selling data bundles in your community. Join thousands of successful agents across Ghana and build a profitable business.</p>
        <div class="hero-benefits">
          <div class="benefit-item">
            <i class="bi bi-check-circle-fill text-warning"></i>
            <span>Earn up to 20% commission</span>
          </div>
          <div class="benefit-item">
            <i class="bi bi-check-circle-fill text-warning"></i>
            <span>No registration fees</span>
          </div>
          <div class="benefit-item">
            <i class="bi bi-check-circle-fill text-warning"></i>
            <span>Free training provided</span>
          </div>
        </div>
        <a href="#agent-form" class="btn btn-warning btn-lg mt-3 fw-bold">
          <i class="bi bi-rocket-takeoff me-2"></i>Apply Now
        </a>
      </div>
      <div class="col-lg-6 fade-up" style="animation-delay: 0.2s;">
        <div class="agent-hero-image">
          <div class="earning-card">
            <div class="earning-icon">
              <i class="bi bi-cash-stack"></i>
            </div>
            <div class="earning-info">
              <p class="earning-label">Average Monthly Earnings</p>
              <h3 class="earning-amount">GH₵ 2,500+</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Become an Agent -->
<section class="why-agent-section py-5">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <span class="section-badge">Agent Benefits</span>
      <h2 class="section-title fw-bold mb-3">Why Become an Agent?</h2>
      <p class="section-subtitle text-muted">Join a thriving network of entrepreneurs earning daily</p>
    </div>

    <div class="row g-4">
      <div class="col-md-6 col-lg-4 fade-up" style="animation-delay: 0.1s;">
        <div class="agent-benefit-card">
          <div class="benefit-icon mb-3">
            <i class="bi bi-wallet2"></i>
          </div>
          <h5 class="fw-bold mb-2">High Commission Rates</h5>
          <p class="text-muted">Earn up to 20% commission on every bundle you sell. The more you sell, the more you earn!</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 fade-up" style="animation-delay: 0.2s;">
        <div class="agent-benefit-card">
          <div class="benefit-icon mb-3">
            <i class="bi bi-clock-history"></i>
          </div>
          <h5 class="fw-bold mb-2">Flexible Working Hours</h5>
          <p class="text-muted">Work on your own schedule. Sell bundles anytime, anywhere—perfect for students and part-timers.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 fade-up" style="animation-delay: 0.3s;">
        <div class="agent-benefit-card">
          <div class="benefit-icon mb-3">
            <i class="bi bi-graph-up-arrow"></i>
          </div>
          <h5 class="fw-bold mb-2">Growing Market</h5>
          <p class="text-muted">Tap into the ever-increasing demand for affordable data bundles across Ghana.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 fade-up" style="animation-delay: 0.4s;">
        <div class="agent-benefit-card">
          <div class="benefit-icon mb-3">
            <i class="bi bi-laptop"></i>
          </div>
          <h5 class="fw-bold mb-2">Easy-to-Use Platform</h5>
          <p class="text-muted">Our intuitive dashboard makes it simple to manage orders and track your earnings.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 fade-up" style="animation-delay: 0.5s;">
        <div class="agent-benefit-card">
          <div class="benefit-icon mb-3">
            <i class="bi bi-people"></i>
          </div>
          <h5 class="fw-bold mb-2">Free Training & Support</h5>
          <p class="text-muted">Get comprehensive training and ongoing support from our dedicated team.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 fade-up" style="animation-delay: 0.6s;">
        <div class="agent-benefit-card">
          <div class="benefit-icon mb-3">
            <i class="bi bi-cash-coin"></i>
          </div>
          <h5 class="fw-bold mb-2">Instant Commission Payout</h5>
          <p class="text-muted">Receive your commissions instantly after each successful transaction.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- How It Works -->
<section class="how-agent-works-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <span class="section-badge">Simple Process</span>
      <h2 class="section-title fw-bold mb-3">How to Become an Agent</h2>
      <p class="section-subtitle text-muted">Start earning in 4 easy steps</p>
    </div>

    <div class="row g-4">
      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.1s;">
        <div class="agent-step-card text-center">
          <div class="step-number-large">01</div>
          <div class="step-icon-large mb-3">
            <i class="bi bi-file-earmark-text"></i>
          </div>
          <h5 class="fw-bold mb-2">Apply Online</h5>
          <p class="text-muted">Fill out our simple application form with your details</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.2s;">
        <div class="agent-step-card text-center">
          <div class="step-number-large">02</div>
          <div class="step-icon-large mb-3">
            <i class="bi bi-check-circle"></i>
          </div>
          <h5 class="fw-bold mb-2">Get Approved</h5>
          <p class="text-muted">We'll review and approve your application within 24 hours</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.3s;">
        <div class="agent-step-card text-center">
          <div class="step-number-large">03</div>
          <div class="step-icon-large mb-3">
            <i class="bi bi-book"></i>
          </div>
          <h5 class="fw-bold mb-2">Get Trained</h5>
          <p class="text-muted">Complete our free training program and learn the ropes</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 fade-up" style="animation-delay: 0.4s;">
        <div class="agent-step-card text-center">
          <div class="step-number-large">04</div>
          <div class="step-icon-large mb-3">
            <i class="bi bi-cash-stack"></i>
          </div>
          <h5 class="fw-bold mb-2">Start Earning</h5>
          <p class="text-muted">Begin selling bundles and earning commissions immediately</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Commission Structure -->
<section class="commission-section py-5">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <h2 class="section-title fw-bold mb-3">Commission Structure</h2>
      <p class="section-subtitle text-muted">Transparent and competitive commission rates</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="commission-table-wrapper fade-up" style="animation-delay: 0.1s;">
          <table class="commission-table">
            <thead>
              <tr>
                <th>Sales Tier</th>
                <th>Monthly Sales</th>
                <th>Commission Rate</th>
                <th>Potential Earnings</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="tier-badge bronze">Bronze</span></td>
                <td>GH₵ 1,000 - 5,000</td>
                <td>10%</td>
                <td>GH₵ 100 - 500</td>
              </tr>
              <tr>
                <td><span class="tier-badge silver">Silver</span></td>
                <td>GH₵ 5,001 - 15,000</td>
                <td>15%</td>
                <td>GH₵ 750 - 2,250</td>
              </tr>
              <tr>
                <td><span class="tier-badge gold">Gold</span></td>
                <td>GH₵ 15,001 - 30,000</td>
                <td>18%</td>
                <td>GH₵ 2,700 - 5,400</td>
              </tr>
              <tr class="highlight-row">
                <td><span class="tier-badge platinum">Platinum</span></td>
                <td>GH₵ 30,000+</td>
                <td>20%</td>
                <td>GH₵ 6,000+</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Success Stories -->
<section class="success-stories-section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <h2 class="section-title fw-bold mb-3">Success Stories</h2>
      <p class="section-subtitle text-muted">Hear from our top-performing agents</p>
    </div>

    <div class="row g-4">
      <div class="col-md-6 col-lg-4 fade-up" style="animation-delay: 0.1s;">
        <div class="testimonial-card">
          <div class="testimonial-header">
            <div class="testimonial-avatar">
              <span>KA</span>
            </div>
            <div class="testimonial-info">
              <h6 class="fw-bold mb-0">Kwame Asante</h6>
              <p class="text-muted small mb-0">Kumasi Agent</p>
            </div>
          </div>
          <div class="testimonial-body">
            <div class="rating mb-2">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <p class="text-muted">"I've been an agent for 6 months and I'm now earning over GH₵ 3,000 monthly! The platform is easy to use and support is excellent."</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 fade-up" style="animation-delay: 0.2s;">
        <div class="testimonial-card">
          <div class="testimonial-header">
            <div class="testimonial-avatar">
              <span>AM</span>
            </div>
            <div class="testimonial-info">
              <h6 class="fw-bold mb-0">Ama Mensah</h6>
              <p class="text-muted small mb-0">Accra Agent</p>
            </div>
          </div>
          <div class="testimonial-body">
            <div class="rating mb-2">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <p class="text-muted">"Being a Net Bundle agent allows me to earn extra income while studying. Perfect for students like me who need flexible work!"</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 fade-up" style="animation-delay: 0.3s;">
        <div class="testimonial-card">
          <div class="testimonial-header">
            <div class="testimonial-avatar">
              <span>KO</span>
            </div>
            <div class="testimonial-info">
              <h6 class="fw-bold mb-0">Kofi Owusu</h6>
              <p class="text-muted small mb-0">Takoradi Agent</p>
            </div>
          </div>
          <div class="testimonial-body">
            <div class="rating mb-2">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
            <p class="text-muted">"I started with just a few sales per day. Now I'm a Platinum agent earning over GH₵ 5,000 monthly! This business changed my life."</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Requirements Section -->
<section class="requirements-section py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 fade-up">
        <h2 class="section-title fw-bold mb-3">Requirements</h2>
        <p class="lead mb-4">All you need to become an agent:</p>
        <ul class="requirements-list">
          <li>
            <i class="bi bi-check-circle-fill text-success"></i>
            <div>
              <strong>Age:</strong> Must be 18 years or older
            </div>
          </li>
          <li>
            <i class="bi bi-check-circle-fill text-success"></i>
            <div>
              <strong>Mobile Phone:</strong> Smartphone with internet access
            </div>
          </li>
          <li>
            <i class="bi bi-check-circle-fill text-success"></i>
            <div>
              <strong>Mobile Money Account:</strong> For receiving commissions
            </div>
          </li>
          <li>
            <i class="bi bi-check-circle-fill text-success"></i>
            <div>
              <strong>Ghana Card/ID:</strong> Valid identification document
            </div>
          </li>
          <li>
            <i class="bi bi-check-circle-fill text-success"></i>
            <div>
              <strong>Enthusiasm:</strong> Willingness to learn and grow
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-6 fade-up" style="animation-delay: 0.2s;">
        <div class="requirements-illustration">
          <div class="requirement-icon-grid">
            <div class="requirement-icon-item">
              <i class="bi bi-person-check"></i>
            </div>
            <div class="requirement-icon-item">
              <i class="bi bi-phone"></i>
            </div>
            <div class="requirement-icon-item">
              <i class="bi bi-wallet2"></i>
            </div>
            <div class="requirement-icon-item">
              <i class="bi bi-card-heading"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Application Form Section -->
<section class="agent-form-section py-5 bg-light" id="agent-form">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="agent-form-wrapper fade-up">
          <div class="text-center mb-4">
            <h2 class="section-title fw-bold mb-3">Agent Application Form</h2>
            <p class="text-muted">Fill out the form below to start your journey as a Net Bundle agent</p>
          </div>

          <form method="POST" action="/apply-agents" class="agent-application-form">
             @csrf
            <div class="form-section">
              <h5 class="form-section-title">Personal Information</h5>
              <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold">First Name <span class="text-danger">*</span></label>
                    <input type="text" name="first_name" value="{{old('first_name')}}" class="form-control form-control-lg" placeholder="John">
                    @error('first_name')
                        <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-bold">Last Name <span class="text-danger">*</span></label>
                  <input type="text" name="last_name" value="{{old('last_name')}}" class="form-control form-control-lg" placeholder="Doe">
                    @error('last_name')
                        <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-bold">Date of Birth <span class="text-danger">*</span></label>
                  <input type="date" name="date_of_birth" value="{{old('date_of_birth')}}" class="form-control form-control-lg">
                    @error('date_of_birth')
                        <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-bold">Gender <span class="text-danger">*</span></label>
                  <select class="form-select form-select-lg" name="gender">
                    <option value="">Select gender</option>
                    <option value="male" @selected(old('gender') == 'male')>Male</option>
                    <option value="female" @selected(old('gender') == 'female')>Female</option>
                    <option value="other" @selected(old('gender') == 'other')>Other</option>
                      @error('gander')
                      <small class="text-danger fst-italic">{{ $message }}</small>
                      @enderror
                  </select>
                </div>
              </div>
            </div>

            <div class="form-section">
              <h5 class="form-section-title">Contact Information</h5>
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label fw-bold">Phone Number <span class="text-danger">*</span></label>
                  <input type="tel" name="phone_number" value="{{old('phone_number')}}" class="form-control form-control-lg" placeholder="24XXXXXXX">
                    @error('phone_number')
                    <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-bold">WhatsApp Number</label>
                  <input type="tel" name="whatsapp_number" value="{{old('whatsapp_number')}}" class="form-control form-control-lg" placeholder="24XXXXXXX">
                    @error('whatsapp_number')
                    <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-12">
                  <label class="form-label fw-bold">Email Address <span class="text-danger">*</span></label>
                  <input type="email"  name="email" value="{{old('email')}}" class="form-control form-control-lg" placeholder="john@example.com">
                    @error('email')
                    <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-bold">Region <span class="text-danger">*</span></label>
                  <select class="form-select form-select-lg" name="region">
                    <option value="">Select region</option>
                    <option value="greater-accra" @selected(old('region') == 'greater-accra' )>Greater Accra</option>
                    <option value="ashanti" @selected(old('region') == 'ashanti' )>Ashanti</option>
                    <option value="western" @selected(old('region') == 'western' )>Western</option>
                    <option value="central" @selected(old('region') == 'central' )>Central</option>
                    <option value="eastern" @selected(old('region') == 'eastern' )>Eastern</option>
                    <option value="volta" @selected(old('region') == 'volta' )>Volta</option>
                    <option value="northern" @selected(old('region') == 'northern' )>Northern</option>
                    <option value="upper-east" @selected(old('region') == 'upper-east' )>Upper East</option>
                    <option value="upper-west" @selected(old('region') == 'upper-west' )>Upper West</option>
                  </select>
                    @error('region')
                    <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-bold">City/Town <span class="text-danger">*</span></label>
                  <input type="text"  name="city"  value="{{old('city')}}" class="form-control form-control-lg" placeholder="e.g. Kumasi">
                    @error('city')
                    <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-12">
                  <label class="form-label fw-bold">Residential Address <span class="text-danger">*</span></label>
                  <textarea name="address" class="form-control" rows="3" placeholder="Enter your full address" >{{old('address')}}</textarea>
                    @error('address')
                    <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>
              </div>
            </div>

            <div class="form-section">
              <h5 class="form-section-title">ID & Payment Information</h5>
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label fw-bold">ID Type <span class="text-danger">*</span></label>
                  <select class="form-select form-select-lg" name="id_type" >
                    <option value="">Select ID type</option>
                    <option value="Ghana Card" @selected(old('id_type') == 'Ghana Card' )>Ghana Card</option>
                    <option value="Voter's ID" @selected(old('id_type') == 'Voter\'s ID' )>Voter's ID</option>
                    <option value="Passport" @selected(old('id_type') == 'Passport' )>Passport</option>
                    <option value="Driver's License" @selected(old('id_type') == 'Driver\'s License' )>Driver's License</option>
                  </select>
                    @error('id_type')
                    <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-bold">ID Number <span class="text-danger">*</span></label>
                  <input type="text" name="id_number" value="{{old('id_number')}}" class="form-control form-control-lg" placeholder="GHA-XXXXXXXXX-X">
                    @error('id_number')
                    <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-bold">Mobile Money Network <span class="text-danger">*</span></label>
                  <select class="form-select form-select-lg" name="mobile_money_network">
                    <option value="">Select network</option>
                    <option value="Mtn" @selected(old('mobile_money_network') == 'Mtn' )>MTN Mobile Money</option>
                    <option value="Vodafone" @selected(old('mobile_money_network') == 'Vodafone' )>Vodafone Cash</option>
                    <option value="Airteltigo" @selected(old('mobile_money_network') == 'Airteltigo' )>AirtelTigo Money</option>
                  </select>
                    @error('mobile_money_network')
                    <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-bold">Mobile Money Number <span class="text-danger">*</span></label>
                  <input type="tel" name="mobile_money_number" value="{{old('mobile_money_number')}}" class="form-control form-control-lg" placeholder="24XXXXXXX">
                    @error('mobile_money_number')
                    <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>
              </div>
            </div>

            <div class="form-section">
              <h5 class="form-section-title">Additional Information</h5>
              <div class="row g-3">
                <div class="col-12">
                  <label class="form-label fw-bold">Why do you want to become an agent? <span class="text-danger">*</span></label>
                  <textarea class="form-control" name="reason" rows="4" placeholder="Tell us about your motivation..." >{{old('reason')}}</textarea>
                    @error('reason')
                    <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-bold">Do you have sales experience?</label>
                  <select class="form-select form-select-lg" name="have_sales_experience">
                    <option value="">Select option</option>
                    <option value="1" @selected(old('have_sales_experience') == '1')>Yes</option>
                    <option value="0" @selected(old('have_sales_experience') == '0')>No</option>
                  </select>
                    @error('have_sales_experience')
                    <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label fw-bold">How did you hear about us?</label>
                  <select class="form-select form-select-lg" name="way_of_hearing_us">
                    <option value="">Select option</option>
                    <option value="friend" @selected(old('way_of_hearing_us') == 'friend' )>Friend/Family</option>
                    <option value="social-media" @selected(old('way_of_hearing_us') == 'social-media' )>Social Media</option>
                    <option value="website" @selected(old('way_of_hearing_us') == 'website' )>Website</option>
                    <option value="agent" @selected(old('way_of_hearing_us') == 'agent' )>Current Agent</option>
                    <option value="other" @selected(old('way_of_hearing_us') == 'other' )>Other</option>
                  </select>
                    @error('way_of_hearing_us')
                    <small class="text-danger fst-italic">{{ $message }}</small>
                    @enderror
                </div>
              </div>
            </div>

            <div class="form-section">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms" required>
                <label class="form-check-label" for="terms">
                  I agree to the <a href="/terms">Terms and Conditions</a> and confirm that all information provided is accurate. <span class="text-danger">*</span>
                </label>
              </div>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary btn-lg px-5 fw-bold">
                <i class="bi bi-send me-2"></i>Submit Application
              </button>
              <p class="text-muted small mt-3">You'll receive a response within 24 hours</p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</x-layouts.app>
