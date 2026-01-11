<!-- Login Page -->

<x-layouts.base title="Login">
    <section class="login-section">
      <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
          <div class="col-lg-10">
            <div class="login-wrapper fade-up">
              <div class="row g-0">
                <!-- Left Side - Branding -->
                <div class="col-lg-6 login-brand-side">
                  <div class="brand-content">
                    <div class="brand-logo mb-4">
                      <h2 class="text-white fw-bold">
                        <span class="text-warning">Net</span> Bundle
                      </h2>
                    </div>
                    <h3 class="text-white fw-bold mb-3">Welcome Back!</h3>
                    <p class="text-white-50 mb-4">Sign in to access your dashboard and manage your account.</p>

                    <div class="login-features">
                      <div class="feature-item">
                        <i class="bi bi-shield-check"></i>
                        <span>Secure Login</span>
                      </div>
                      <div class="feature-item">
                        <i class="bi bi-speedometer2"></i>
                        <span>Fast Access</span>
                      </div>
                      <div class="feature-item">
                        <i class="bi bi-headset"></i>
                        <span>24/7 Support</span>
                      </div>
                    </div>

                    <div class="login-illustration mt-5">
                      <div class="illustration-circle circle-1"></div>
                      <div class="illustration-circle circle-2"></div>
                      <div class="illustration-circle circle-3"></div>
                    </div>
                  </div>
                </div>

                <!-- Right Side - Login Form -->
                <div class="col-lg-6 login-form-side">
                  <div class="login-form-content">
                    <div class="text-center mb-4">
                      <h4 class="fw-bold mb-2">Sign In to Your Account</h4>
                      <p class="text-muted">Enter your credentials to continue</p>
                    </div>

                    <form class="login-form" id="loginForm">
                      <!-- User Type Selection -->
                      <div class="mb-4">
                        <label class="form-label fw-bold">Login As <span class="text-danger">*</span></label>
                        <div class="user-type-selector">
                          <div class="user-type-option">
                            <input type="radio" class="btn-check" name="userType" id="adminType" value="admin" checked>
                            <label class="btn user-type-btn" for="adminType">
                              <i class="bi bi-shield-lock"></i>
                              <span>Admin</span>
                            </label>
                          </div>
                          <div class="user-type-option">
                            <input type="radio" class="btn-check" name="userType" id="agentType" value="agent">
                            <label class="btn user-type-btn" for="agentType">
                              <i class="bi bi-person-badge"></i>
                              <span>Agent</span>
                            </label>
                          </div>
                        </div>
                      </div>

                      <!-- Email Input -->
                      <div class="mb-3">
                        <label class="form-label fw-bold">Email Address <span class="text-danger">*</span></label>
                        <div class="input-group">
                          <span class="input-group-text">
                            <i class="bi bi-envelope"></i>
                          </span>
                          <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                      </div>

                      <!-- Password Input -->
                      <div class="mb-3">
                        <label class="form-label fw-bold">Password <span class="text-danger">*</span></label>
                        <div class="input-group">
                          <span class="input-group-text">
                            <i class="bi bi-lock"></i>
                          </span>
                          <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                          <button class="btn btn-outline-secondary toggle-password" type="button">
                            <i class="bi bi-eye"></i>
                          </button>
                        </div>
                      </div>

                      <!-- Remember Me & Forgot Password -->
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="rememberMe">
                          <label class="form-check-label" for="rememberMe">
                            Remember me
                          </label>
                        </div>
                        <a href="/forgot-password" class="forgot-link">Forgot Password?</a>
                      </div>

                      <!-- Login Button -->
                      <button type="submit" class="btn btn-primary w-100 btn-lg fw-bold mb-3">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Sign In
                      </button>

                      <!-- Divider -->
                      <div class="divider my-4">
                        <span>OR</span>
                      </div>

                      <!-- Register Link (Only for Agents) -->
                      <div class="text-center agent-register" style="display: none;">
                        <p class="text-muted mb-0">Don't have an agent account? <a href="/apply-agent" class="register-link">Become an Agent</a></p>
                      </div>

                      <!-- Admin Info -->
                      <div class="text-center admin-info">
                        <p class="text-muted small mb-0">
                          <i class="bi bi-info-circle me-1"></i>
                          Admin access is restricted. Contact support if you need assistance.
                        </p>
                      </div>
                    </form>

                    <!-- Back to Home -->
                    <div class="text-center mt-4">
                      <a href="/" class="back-home-link">
                        <i class="bi bi-arrow-left me-2"></i>Back to Home
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</x-layouts.base>
