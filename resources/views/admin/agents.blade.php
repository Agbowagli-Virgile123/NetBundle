<x-layouts.admin-cms title="Agents Management">
    <!-- Agents Management Content -->
    <div class="dashboard-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-md-6">
{{--                        <h2 class="page-heading">Agents Management</h2>--}}
                        <p class="page-subheading text-muted">Manage agents, wallets, and commissions</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#addAgentModal">
                            <i class="bi bi-plus-circle me-2"></i>Add New Agent
                        </button>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row g-4 mb-4">
                <x-cms.stats-card
                    bg-color="primary"
                    icon="people"
                    stat-number="156"
                    label="Total Agents"
                />

                 <x-cms.stats-card
                    bg-color="success"
                    icon="check-circle"
                    stat-number="142"
                    label="Verified Agents"
                />

                <x-cms.stats-card
                    bg-color="warning"
                    icon="clock-history"
                    stat-number="14"
                    label="Pending Verification"
                />

                 <x-cms.stats-card
                    bg-color="info"
                    icon="wallet2"
                    stat-number="GH₵ 45.2k"
                    label="Total Wallet Balance"
                />

            </div>

            <!-- Filters -->
            <div class="content-card mb-4">
                <div class="card-body-custom p-4">
                    <div class="row g-3 align-items-end">

                        <!-- Status Filter -->
                        <div class="col-md-2">
                            <label class="form-label fw-bold">Status</label>
                            <select class="form-select" id="statusFilter">
                                <option value="">All Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <!-- Verification Filter -->
                        <div class="col-md-2">
                            <label class="form-label fw-bold">Verification</label>
                            <select class="form-select" id="verificationFilter">
                                <option value="">All</option>
                                <option value="verified">Verified</option>
                                <option value="unverified">Unverified</option>
                            </select>
                        </div>

                        <!-- Commission Rate Filter -->
                        <div class="col-md-2">
                            <label class="form-label fw-bold">Commission</label>
                            <select class="form-select" id="commissionFilter">
                                <option value="">All Rates</option>
                                <option value="5">5%</option>
                                <option value="10">10%</option>
                                <option value="15">15%</option>
                                <option value="20">20%</option>
                            </select>
                        </div>

                        <!-- Date Range -->
                        <div class="col-md-3">
                            <label class="form-label fw-bold">Joined Date</label>
                            <input type="date" class="form-control" id="dateFilter">
                        </div>

                        <!-- Search -->
                        <div class="col-md-3">
                            <label class="form-label fw-bold">Search</label>
                            <div class="search-box">
                                <i class="bi bi-search"></i>
                                <input type="text" class="form-control" placeholder="Search agents...">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Agents Table -->
            <div class="content-card">
                <div class="card-header-custom">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h5 class="mb-0">All Agents</h5>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <button class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-download me-1"></i>Export CSV
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-body-custom">
                    <div class="table-responsive">
                        <table class="table custom-table agents-table">
                            <thead>
                            <tr>
                                <th width="50">#</th>
                                <th>Agent</th>
                                <th>Contact</th>
                                <th>Referral Code</th>
                                <th>Commission Rate</th>
                                <th>Wallet Balance</th>
                                <th>Total Sales</th>
                                <th>Status</th>
                                <th>Joined</th>
                                <th width="80">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <!-- Agent Row 1 - Verified & Active -->
                                <tr class="expandable-row" data-agent-id="1">
                                    <td>
                                        <button class="btn-expand" data-bs-toggle="collapse" data-bs-target="#agentDetails1">
                                            <i class="bi bi-chevron-right"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <div class="agent-info">
                                            <div class="agent-avatar">
                                                <i class="bi bi-person-circle"></i>
                                            </div>
                                            <div>
                                                <div class="agent-name">Kwame Asante</div>
                                                <small class="text-muted">ID: AG001</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <div class="contact-item">
                                                <i class="bi bi-envelope text-muted"></i>
                                                <span>kwame@email.com</span>
                                            </div>
                                            <div class="contact-item">
                                                <i class="bi bi-phone text-muted"></i>
                                                <span>+233 24 123 4567</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="referral-code-box">
                                            <code>AG-KW789</code>
                                            <button class="btn-copy-code" data-code="AG-KW789">
                                                <i class="bi bi-clipboard"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="commission-badge">10%</span>
                                    </td>
                                    <td>
                                        <div class="wallet-info">
                                            <div class="balance-main">GH₵ 1,250.00</div>
                                            <small class="commission-balance">+GH₵ 85.50</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="sales-info">
                                            <div class="fw-bold text-success">GH₵ 12,450.00</div>
                                            <small class="text-muted">342 orders</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="agent-status-badges">
                            <span class="status-badge status-active">
                              <i class="bi bi-check-circle"></i> Active
                            </span>
                                            <span class="verified-badge verified">
                              <i class="bi bi-patch-check-fill"></i> Verified
                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="date-info">
                                            <div class="date-primary">Jan 15, 2026</div>
                                            <small class="date-time">3 months ago</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-action-menu" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View Details</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-wallet2 me-2"></i>Manage Wallet</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-x-circle me-2"></i>Deactivate</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Expandable Details Row -->
                                <tr class="collapse-row">
                                    <td colspan="10" class="p-0">
                                        <div class="collapse agent-details-collapse" id="agentDetails1">
                                            <div class="agent-details-panel">

                                                <!-- Tabs Navigation -->
                                                <ul class="nav nav-tabs agent-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#overview1">
                                                            <i class="bi bi-speedometer2"></i> Overview
                                                        </button>
                                                    </li>
                                                    <li class="nav-item">
                                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#wallet1">
                                                            <i class="bi bi-wallet2"></i> Wallet
                                                        </button>
                                                    </li>
                                                    <li class="nav-item">
                                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#orders1">
                                                            <i class="bi bi-cart-check"></i> Orders
                                                        </button>
                                                    </li>
                                                    <li class="nav-item">
                                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#withdrawals1">
                                                            <i class="bi bi-cash-stack"></i> Withdrawals
                                                        </button>
                                                    </li>
                                                    <li class="nav-item">
                                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#documents1">
                                                            <i class="bi bi-file-earmark-text"></i> Documents
                                                        </button>
                                                    </li>
                                                </ul>

                                                <!-- Tabs Content -->
                                                <div class="tab-content agent-tab-content">

                                                    <!-- Overview Tab -->
                                                    <div class="tab-pane fade show active" id="overview1">
                                                        <div class="row g-4">

                                                            <!-- Quick Stats -->
                                                            <div class="col-md-12">
                                                                <h6 class="section-subtitle">Quick Statistics</h6>
                                                                <div class="row g-3">
                                                                    <div class="col-md-3">
                                                                        <div class="mini-stat-card">
                                                                            <div class="mini-stat-icon bg-primary">
                                                                                <i class="bi bi-cart-check"></i>
                                                                            </div>
                                                                            <div>
                                                                                <div class="mini-stat-value">342</div>
                                                                                <div class="mini-stat-label">Total Orders</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mini-stat-card">
                                                                            <div class="mini-stat-icon bg-success">
                                                                                <i class="bi bi-currency-dollar"></i>
                                                                            </div>
                                                                            <div>
                                                                                <div class="mini-stat-value">GH₵ 12,450</div>
                                                                                <div class="mini-stat-label">Total Sales</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mini-stat-card">
                                                                            <div class="mini-stat-icon bg-warning">
                                                                                <i class="bi bi-star"></i>
                                                                            </div>
                                                                            <div>
                                                                                <div class="mini-stat-value">GH₵ 855.50</div>
                                                                                <div class="mini-stat-label">Commission Earned</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="mini-stat-card">
                                                                            <div class="mini-stat-icon bg-info">
                                                                                <i class="bi bi-arrow-down-circle"></i>
                                                                            </div>
                                                                            <div>
                                                                                <div class="mini-stat-value">GH₵ 3,200</div>
                                                                                <div class="mini-stat-label">Total Deposited</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Personal Info -->
                                                            <div class="col-md-6">
                                                                <h6 class="section-subtitle">Personal Information</h6>
                                                                <div class="info-list">
                                                                    <div class="info-item">
                                                                        <span class="info-label">Full Name:</span>
                                                                        <span class="info-value">Kwame Asante</span>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <span class="info-label">Email:</span>
                                                                        <span class="info-value">kwame@email.com</span>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <span class="info-label">Phone:</span>
                                                                        <span class="info-value">+233 24 123 4567</span>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <span class="info-label">WhatsApp:</span>
                                                                        <span class="info-value">+233 24 123 4567</span>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <span class="info-label">Ghana Card:</span>
                                                                        <span class="info-value">GHA-123456789-0</span>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <span class="info-label">Address:</span>
                                                                        <span class="info-value">Kumasi, Ashanti Region</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Account Info -->
                                                            <div class="col-md-6">
                                                                <h6 class="section-subtitle">Account Information</h6>
                                                                <div class="info-list">
                                                                    <div class="info-item">
                                                                        <span class="info-label">Agent ID:</span>
                                                                        <span class="info-value">AG001</span>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <span class="info-label">Referral Code:</span>
                                                                        <span class="info-value"><code>AG-KW789</code></span>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <span class="info-label">Commission Rate:</span>
                                                                        <span class="info-value"><span class="commission-badge">10%</span></span>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <span class="info-label">Joined Date:</span>
                                                                        <span class="info-value">January 15, 2026</span>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <span class="info-label">Verification Status:</span>
                                                                        <span class="info-value">
                                            <span class="verified-badge verified">
                                              <i class="bi bi-patch-check-fill"></i> Verified
                                            </span>
                                          </span>
                                                                    </div>
                                                                    <div class="info-item">
                                                                        <span class="info-label">Account Status:</span>
                                                                        <span class="info-value">
                                            <span class="status-badge status-active">
                                              <i class="bi bi-check-circle"></i> Active
                                            </span>
                                          </span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Quick Actions -->
                                                            <div class="col-md-12">
                                                                <h6 class="section-subtitle">Quick Actions</h6>
                                                                <div class="d-flex gap-2 flex-wrap">
                                                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#creditWalletModal">
                                                                        <i class="bi bi-plus-circle me-1"></i>Credit Wallet
                                                                    </button>
                                                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#debitWalletModal">
                                                                        <i class="bi bi-dash-circle me-1"></i>Debit Wallet
                                                                    </button>
                                                                    <button class="btn btn-sm btn-info">
                                                                        <i class="bi bi-pencil me-1"></i>Edit Commission Rate
                                                                    </button>
                                                                    <button class="btn btn-sm btn-secondary">
                                                                        <i class="bi bi-key me-1"></i>Reset Password
                                                                    </button>
                                                                    <button class="btn btn-sm btn-danger">
                                                                        <i class="bi bi-x-circle me-1"></i>Unverify Agent
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <!-- Wallet Tab -->
                                                    <div class="tab-pane fade" id="wallet1">
                                                        <div class="row g-4">

                                                            <!-- Wallet Summary -->
                                                            <div class="col-md-12">
                                                                <div class="row g-3">
                                                                    <div class="col-md-4">
                                                                        <div class="wallet-summary-card">
                                                                            <div class="wallet-summary-icon">
                                                                                <i class="bi bi-wallet2"></i>
                                                                            </div>
                                                                            <div>
                                                                                <div class="wallet-summary-label">Main Balance</div>
                                                                                <div class="wallet-summary-value">GH₵ 1,250.00</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="wallet-summary-card">
                                                                            <div class="wallet-summary-icon bg-warning">
                                                                                <i class="bi bi-star"></i>
                                                                            </div>
                                                                            <div>
                                                                                <div class="wallet-summary-label">Commission Balance</div>
                                                                                <div class="wallet-summary-value">GH₵ 85.50</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="wallet-summary-card">
                                                                            <div class="wallet-summary-icon bg-success">
                                                                                <i class="bi bi-graph-up-arrow"></i>
                                                                            </div>
                                                                            <div>
                                                                                <div class="wallet-summary-label">Total Earned</div>
                                                                                <div class="wallet-summary-value">GH₵ 855.50</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Recent Transactions -->
                                                            <div class="col-md-12">
                                                                <h6 class="section-subtitle">Recent Transactions</h6>
                                                                <div class="transactions-list">

                                                                    <div class="transaction-item credit-transaction">
                                                                        <div class="transaction-icon">
                                                                            <i class="bi bi-arrow-down-circle"></i>
                                                                        </div>
                                                                        <div class="transaction-details">
                                                                            <div class="transaction-title">Paystack Deposit</div>
                                                                            <div class="transaction-meta">Jan 28, 2026 at 10:30 AM</div>
                                                                        </div>
                                                                        <div class="transaction-amount credit">+GH₵ 500.00</div>
                                                                    </div>

                                                                    <div class="transaction-item debit-transaction">
                                                                        <div class="transaction-icon">
                                                                            <i class="bi bi-cart-check"></i>
                                                                        </div>
                                                                        <div class="transaction-details">
                                                                            <div class="transaction-title">Bundle Purchase - MTN 5GB</div>
                                                                            <div class="transaction-meta">Jan 28, 2026 at 11:15 AM • Order #1234</div>
                                                                        </div>
                                                                        <div class="transaction-amount debit">-GH₵ 19.00</div>
                                                                    </div>

                                                                    <div class="transaction-item credit-transaction">
                                                                        <div class="transaction-icon">
                                                                            <i class="bi bi-star"></i>
                                                                        </div>
                                                                        <div class="transaction-details">
                                                                            <div class="transaction-title">Commission Earned</div>
                                                                            <div class="transaction-meta">Jan 28, 2026 at 11:15 AM • Order #1234</div>
                                                                        </div>
                                                                        <div class="transaction-amount credit">+GH₵ 1.90</div>
                                                                    </div>

                                                                    <div class="transaction-item debit-transaction">
                                                                        <div class="transaction-icon">
                                                                            <i class="bi bi-cash-stack"></i>
                                                                        </div>
                                                                        <div class="transaction-details">
                                                                            <div class="transaction-title">Withdrawal</div>
                                                                            <div class="transaction-meta">Jan 27, 2026 at 3:45 PM</div>
                                                                        </div>
                                                                        <div class="transaction-amount debit">-GH₵ 200.00</div>
                                                                    </div>

                                                                </div>
                                                                <div class="text-center mt-3">
                                                                    <button class="btn btn-sm btn-outline-primary">View All Transactions</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <!-- Orders Tab -->
                                                    <div class="tab-pane fade" id="orders1">
                                                        <div class="table-responsive">
                                                            <table class="table table-sm">
                                                                <thead>
                                                                <tr>
                                                                    <th>Order ID</th>
                                                                    <th>Bundle</th>
                                                                    <th>Phone</th>
                                                                    <th>Amount</th>
                                                                    <th>Commission</th>
                                                                    <th>Status</th>
                                                                    <th>Date</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td><a href="#">#1234</a></td>
                                                                    <td>MTN 5GB Daily</td>
                                                                    <td>0241234567</td>
                                                                    <td>GH₵ 19.00</td>
                                                                    <td class="text-success">+GH₵ 1.90</td>
                                                                    <td><span class="badge bg-success">Completed</span></td>
                                                                    <td>Jan 28, 2026</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#">#1233</a></td>
                                                                    <td>MTN 2GB Daily</td>
                                                                    <td>0207654321</td>
                                                                    <td>GH₵ 9.00</td>
                                                                    <td class="text-success">+GH₵ 0.90</td>
                                                                    <td><span class="badge bg-success">Completed</span></td>
                                                                    <td>Jan 28, 2026</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#">#1232</a></td>
                                                                    <td>MTN 1GB Daily</td>
                                                                    <td>0551112233</td>
                                                                    <td>GH₵ 5.00</td>
                                                                    <td class="text-success">+GH₵ 0.50</td>
                                                                    <td><span class="badge bg-warning">Pending</span></td>
                                                                    <td>Jan 27, 2026</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="text-center mt-3">
                                                            <button class="btn btn-sm btn-outline-primary">View All Orders</button>
                                                        </div>
                                                    </div>

                                                    <!-- Withdrawals Tab -->
                                                    <div class="tab-pane fade" id="withdrawals1">
                                                        <div class="withdrawals-list">

                                                            <div class="withdrawal-item">
                                                                <div class="withdrawal-header">
                                                                    <div>
                                                                        <h6 class="mb-1">Withdrawal Request #WD001</h6>
                                                                        <small class="text-muted">Jan 27, 2026 at 3:30 PM</small>
                                                                    </div>
                                                                    <span class="badge bg-success">Completed</span>
                                                                </div>
                                                                <div class="withdrawal-details">
                                                                    <div class="row g-2">
                                                                        <div class="col-6 col-md-3">
                                                                            <small class="text-muted d-block">Amount</small>
                                                                            <strong>GH₵ 200.00</strong>
                                                                        </div>
                                                                        <div class="col-6 col-md-3">
                                                                            <small class="text-muted d-block">Charges</small>
                                                                            <strong>GH₵ 2.00</strong>
                                                                        </div>
                                                                        <div class="col-6 col-md-3">
                                                                            <small class="text-muted d-block">Net Amount</small>
                                                                            <strong>GH₵ 198.00</strong>
                                                                        </div>
                                                                        <div class="col-6 col-md-3">
                                                                            <small class="text-muted d-block">Method</small>
                                                                            <strong>Bank Transfer</strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="withdrawal-item">
                                                                <div class="withdrawal-header">
                                                                    <div>
                                                                        <h6 class="mb-1">Withdrawal Request #WD002</h6>
                                                                        <small class="text-muted">Jan 20, 2026 at 1:15 PM</small>
                                                                    </div>
                                                                    <span class="badge bg-warning">Pending</span>
                                                                </div>
                                                                <div class="withdrawal-details">
                                                                    <div class="row g-2">
                                                                        <div class="col-6 col-md-3">
                                                                            <small class="text-muted d-block">Amount</small>
                                                                            <strong>GH₵ 150.00</strong>
                                                                        </div>
                                                                        <div class="col-6 col-md-3">
                                                                            <small class="text-muted d-block">Charges</small>
                                                                            <strong>GH₵ 2.00</strong>
                                                                        </div>
                                                                        <div class="col-6 col-md-3">
                                                                            <small class="text-muted d-block">Net Amount</small>
                                                                            <strong>GH₵ 148.00</strong>
                                                                        </div>
                                                                        <div class="col-6 col-md-3">
                                                                            <small class="text-muted d-block">Method</small>
                                                                            <strong>Mobile Money</strong>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="withdrawal-actions">
                                                                    <button class="btn btn-sm btn-success">
                                                                        <i class="bi bi-check-circle me-1"></i>Approve
                                                                    </button>
                                                                    <button class="btn btn-sm btn-danger">
                                                                        <i class="bi bi-x-circle me-1"></i>Reject
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <!-- Documents Tab -->
                                                    <div class="tab-pane fade" id="documents1">
                                                        <div class="row g-3">
                                                            <div class="col-md-6">
                                                                <div class="document-card">
                                                                    <div class="document-icon">
                                                                        <i class="bi bi-file-earmark-image"></i>
                                                                    </div>
                                                                    <div class="document-info">
                                                                        <h6>Ghana Card (Front)</h6>
                                                                        <small class="text-muted">Uploaded: Jan 15, 2026</small>
                                                                    </div>
                                                                    <button class="btn btn-sm btn-outline-primary">
                                                                        <i class="bi bi-eye"></i> View
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="document-card">
                                                                    <div class="document-icon">
                                                                        <i class="bi bi-file-earmark-image"></i>
                                                                    </div>
                                                                    <div class="document-info">
                                                                        <h6>Ghana Card (Back)</h6>
                                                                        <small class="text-muted">Uploaded: Jan 15, 2026</small>
                                                                    </div>
                                                                    <button class="btn btn-sm btn-outline-primary">
                                                                        <i class="bi bi-eye"></i> View
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Agent Row 2 - Unverified -->
                                <tr class="expandable-row" data-agent-id="2">
                                    <td>
                                        <button class="btn-expand" data-bs-toggle="collapse" data-bs-target="#agentDetails2">
                                            <i class="bi bi-chevron-right"></i>
                                        </button>
                                    </td>
                                    <td>
                                        <div class="agent-info">
                                            <div class="agent-avatar">
                                                <i class="bi bi-person-circle"></i>
                                            </div>
                                            <div>
                                                <div class="agent-name">Ama Mensah</div>
                                                <small class="text-muted">ID: AG002</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <div class="contact-item">
                                                <i class="bi bi-envelope text-muted"></i>
                                                <span>ama@email.com</span>
                                            </div>
                                            <div class="contact-item">
                                                <i class="bi bi-phone text-muted"></i>
                                                <span>+233 50 987 6543</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="referral-code-box">
                                            <code>AG-AM456</code>
                                            <button class="btn-copy-code" data-code="AG-AM456">
                                                <i class="bi bi-clipboard"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="commission-badge">5%</span>
                                    </td>
                                    <td>
                                        <div class="wallet-info">
                                            <div class="balance-main">GH₵ 0.00</div>
                                            <small class="commission-balance">+GH₵ 0.00</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="sales-info">
                                            <div class="fw-bold text-muted">GH₵ 0.00</div>
                                            <small class="text-muted">0 orders</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="agent-status-badges">
                            <span class="status-badge status-active">
                              <i class="bi bi-check-circle"></i> Active
                            </span>
                                            <span class="verified-badge unverified">
                              <i class="bi bi-clock-history"></i> Pending
                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="date-info">
                                            <div class="date-primary">Jan 29, 2026</div>
                                            <small class="date-time">2 days ago</small>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn-action-menu" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item text-success" href="#"><i class="bi bi-patch-check me-2"></i>Verify Agent</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View Details</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Expandable Details Row for Agent 2 -->
                                <tr class="collapse-row">
                                    <td colspan="10" class="p-0">
                                        <div class="collapse agent-details-collapse" id="agentDetails2">
                                            <div class="agent-details-panel">
                                                <p class="text-center text-muted py-4">Agent details similar to above...</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="table-footer">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <p class="mb-0 text-muted">Showing 1 to 2 of 156 agents</p>
                            </div>
                            <div class="col-md-6">
                                <nav>
                                    <ul class="pagination justify-content-md-end mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- ADD AGENT MODAL -->
    <div class="modal fade" id="addAgentModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-plus-circle me-2"></i>Add New Agent
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addAgentForm">
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label fw-bold">First Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" name="first_name" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">Last Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" name="last_name" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control form-control-lg" name="email" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">Phone <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control form-control-lg" name="phone" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">WhatsApp Number</label>
                                <input type="tel" class="form-control form-control-lg" name="whatsapp">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold">Commission Rate (%) <span class="text-danger">*</span></label>
                                <input type="number" class="form-control form-control-lg" name="commission_rate" value="10" min="0" max="100" required>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label fw-bold">Address</label>
                                <textarea class="form-control" name="address" rows="2"></textarea>
                            </div>

                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_verified" id="addIsVerified">
                                    <label class="form-check-label fw-bold" for="addIsVerified">
                                        Mark as Verified (Skip verification process)
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_active" id="addIsActive" checked>
                                    <label class="form-check-label fw-bold" for="addIsActive">
                                        Active Status
                                    </label>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" form="addAgentForm" class="btn btn-primary">
                        <i class="bi bi-check-circle me-2"></i>Create Agent
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- CREDIT WALLET MODAL -->
    <div class="modal fade" id="creditWalletModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-plus-circle me-2"></i>Credit Agent Wallet
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="creditWalletForm">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Amount (GH₵) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control form-control-lg" name="amount" step="0.01" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="description" rows="3" placeholder="e.g., Performance bonus for January" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" form="creditWalletForm" class="btn btn-success">
                        <i class="bi bi-check-circle me-2"></i>Credit Wallet
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- DEBIT WALLET MODAL -->
    <div class="modal fade" id="debitWalletModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-warning">
                        <i class="bi bi-dash-circle me-2"></i>Debit Agent Wallet
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning">
                        <i class="bi bi-exclamation-triangle me-2"></i>
                        This will deduct money from the agent's wallet balance.
                    </div>
                    <form id="debitWalletForm">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Amount (GH₵) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control form-control-lg" name="amount" step="0.01" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Reason <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="description" rows="3" placeholder="e.g., Penalty for violation" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" form="debitWalletForm" class="btn btn-warning">
                        <i class="bi bi-check-circle me-2"></i>Debit Wallet
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-cms>

