<x-layouts.admin-cms title="Orders Management">
    @if(session('success'))
        <div class="flash-success d-none">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="flash-error d-none">
            {{ session('error') }}
        </div>
    @endif

    <!-- Orders Management Content -->
    <div class="dashboard-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-md-6">
{{--                        <h2 class="page-heading">Orders Management</h2>--}}
                        <p class="page-subheading text-muted">Manage and process all orders</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#placeOrderModal">
                            <i class="bi bi-plus-circle me-2"></i>Place New Order
                        </button>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row g-4 mb-4">
                <x-cms.stats-card
                    bg-color="primary"
                    icon="cart-check"
                    stat-number="1,245"
                    label="Total Orders"
                />

                <x-cms.stats-card
                    bg-color="warning"
                    icon="clock-history"
                    stat-number="23"
                    label="Pending Orders"
                />

                <x-cms.stats-card
                    bg-color="success"
                    icon="check-circle"
                    stat-number="1,198"
                    label="Completed"
                />

                <x-cms.stats-card
                    bg-color="danger"
                    icon="x-circle"
                    stat-number="23"
                    label="Failed"
                />
            </div>

            <!-- Filters -->
            <div class="content-card mb-4">
                <div class="card-body-custom p-4">
                    <div class="row g-3 align-items-end">

                        <!-- Status Filter -->
                        <div class="col-6 col-md-2">
                            <label class="form-label fw-bold">Status</label>
                            <select class="form-select" id="statusFilter">
                                <option value="">All Status</option>
                                <option value="pending">Pending</option>
                                <option value="paid">Paid</option>
                                <option value="processing">Processing</option>
                                <option value="completed">Completed</option>
                                <option value="failed">Failed</option>
                                <option value="refunded">Refunded</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>

                        <!-- Network Filter -->
                        <div class="col-6 col-md-2">
                            <label class="form-label fw-bold">Network</label>
                            <select class="form-select" id="networkFilter">
                                <option value="">All Networks</option>
                                <option value="mtn">MTN</option>
                                <option value="airteltigo">AirtelTigo</option>
                                <option value="telecel">Telecel</option>
                            </select>
                        </div>

                        <!-- Agent Filter -->
                        <div class="col-6 col-md-2">
                            <label class="form-label fw-bold">Agent</label>
                            <select class="form-select" id="agentFilter">
                                <option value="">All Agents</option>
                                <option value="1">Kwame Asante</option>
                                <option value="2">Ama Mensah</option>
                            </select>
                        </div>

                        <!-- Date From -->
                        <div class="col-6 col-md-2">
                            <label class="form-label fw-bold">Date From</label>
                            <input type="date" class="form-control" id="dateFromFilter">
                        </div>

                        <!-- Date To -->
                        <div class="col-6 col-md-2">
                            <label class="form-label fw-bold">Date To</label>
                            <input type="date" class="form-control" id="dateToFilter">
                        </div>

                        <!-- Search -->
                        <div class="col-12 col-md-2">
                            <label class="form-label fw-bold">Search</label>
                            <div class="search-box">
                                <i class="bi bi-search"></i>
                                <input type="text" class="form-control" placeholder="Order #, Phone...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Orders Table -->
            <div class="content-card">
                <div class="card-header-custom">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h5 class="mb-0">All Orders</h5>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <div class="btn-group" role="group">
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-download me-1"></i>Export CSV
                                </button>
                                <button class="btn btn-sm btn-outline-primary" id="refreshOrdersBtn">
                                    <i class="bi bi-arrow-clockwise me-1"></i>Refresh
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body-custom">
                    <div class="table-responsive">
                        <table class="table custom-table orders-table">
                            <thead>
                            <tr>
                                <th width="50">#</th>
                                <th>Order Details</th>
                                <th>Agent</th>
                                <th>Package</th>
                                <th>Recipient</th>
                                <th>Amount</th>
                                <th>Payment</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th width="100">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            <!-- Order Row 1 - Pending -->
                            <tr class="expandable-row" data-order-id="1">
                                <td>
                                    <button class="btn-expand" data-bs-toggle="collapse" data-bs-target="#orderDetails1">
                                        <i class="bi bi-chevron-right"></i>
                                    </button>
                                </td>
                                <td>
                                    <div class="order-info">
                                        <div class="order-number">ORD-20260227-ABC123</div>
                                        <small class="text-muted">ID: #1234</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="agent-mini-info">
                                        <div class="agent-mini-avatar">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div>
                                            <div class="agent-mini-name">Kwame Asante</div>
                                            <small class="text-muted">AG-KW789</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="package-info">
                                        <div class="network-mini-badge" style="background: linear-gradient(135deg, #FFCC00 0%, #FFA500 100%);">
                                            <span>M</span>
                                        </div>
                                        <div>
                                            <div class="package-name">MTN 5GB</div>
                                            <small class="text-muted">24 Hours</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="recipient-info">
                                        <div class="recipient-phone">
                                            <i class="bi bi-phone text-muted"></i>
                                            <span>024 123 4567</span>
                                        </div>
                                        <small class="text-muted">John Doe</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="amount-info">
                                        <div class="amount-main">GH₵ 20.00</div>
                                        <small class="text-success">+GH₵ 2.00</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="payment-info">
                    <span class="payment-badge wallet-payment">
                      <i class="bi bi-wallet2"></i> Wallet
                    </span>
                                        <span class="payment-status-badge paid">Paid</span>
                                    </div>
                                </td>
                                <td>
                  <span class="order-status-badge status-pending">
                    <i class="bi bi-clock-history"></i> Pending
                  </span>
                                </td>
                                <td>
                                    <div class="date-info">
                                        <div class="date-primary">Jan 29, 2026</div>
                                        <small class="date-time">10:30 AM</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn-action-menu" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View Details</a></li>
                                            <li><a class="dropdown-item text-success process-order-btn" href="#" data-order-id="1"><i class="bi bi-arrow-right-circle me-2"></i>Process Order</a></li>
                                            <li><a class="dropdown-item text-warning retry-order-btn" href="#" data-order-id="1"><i class="bi bi-arrow-clockwise me-2"></i>Retry</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger cancel-order-btn" href="#" data-order-id="1"><i class="bi bi-x-circle me-2"></i>Cancel</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Expandable Details Row -->
                            <tr class="collapse-row">
                                <td colspan="10" class="p-0">
                                    <div class="collapse order-details-collapse" id="orderDetails1">
                                        <div class="order-details-panel">
                                            <div class="row g-4">

                                                <!-- Left Column - Order Info -->
                                                <div class="col-md-6">
                                                    <h6 class="section-subtitle">Order Information</h6>
                                                    <div class="info-list">
                                                        <div class="info-item">
                                                            <span class="info-label">Order Number:</span>
                                                            <span class="info-value"><code>ORD-20260227-ABC123</code></span>
                                                        </div>
                                                        <div class="info-item">
                                                            <span class="info-label">Package:</span>
                                                            <span class="info-value">MTN 5GB Daily Bundle</span>
                                                        </div>
                                                        <div class="info-item">
                                                            <span class="info-label">Recipient Phone:</span>
                                                            <span class="info-value">024 123 4567</span>
                                                        </div>
                                                        <div class="info-item">
                                                            <span class="info-label">Recipient Name:</span>
                                                            <span class="info-value">John Doe</span>
                                                        </div>
                                                        <div class="info-item">
                                                            <span class="info-label">Agent:</span>
                                                            <span class="info-value">Kwame Asante (AG-KW789)</span>
                                                        </div>
                                                    </div>

                                                    <h6 class="section-subtitle mt-4">Pricing Details</h6>
                                                    <div class="info-list">
                                                        <div class="info-item">
                                                            <span class="info-label">Package Price:</span>
                                                            <span class="info-value">GH₵ 20.00</span>
                                                        </div>
                                                        <div class="info-item">
                                                            <span class="info-label">Cost Price:</span>
                                                            <span class="info-value">GH₵ 17.00</span>
                                                        </div>
                                                        <div class="info-item">
                                                            <span class="info-label">Commission:</span>
                                                            <span class="info-value text-success">GH₵ 2.00</span>
                                                        </div>
                                                        <div class="info-item">
                                                            <span class="info-label fw-bold">Total Amount:</span>
                                                            <span class="info-value fw-bold">GH₵ 20.00</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Right Column - Status & API -->
                                                <div class="col-md-6">
                                                    <h6 class="section-subtitle">Status & Payment</h6>
                                                    <div class="info-list">
                                                        <div class="info-item">
                                                            <span class="info-label">Order Status:</span>
                                                            <span class="info-value">
                                <span class="order-status-badge status-pending">
                                  <i class="bi bi-clock-history"></i> Pending
                                </span>
                              </span>
                                                        </div>
                                                        <div class="info-item">
                                                            <span class="info-label">Payment Method:</span>
                                                            <span class="info-value">
                                <span class="payment-badge wallet-payment">
                                  <i class="bi bi-wallet2"></i> Wallet
                                </span>
                              </span>
                                                        </div>
                                                        <div class="info-item">
                                                            <span class="info-label">Payment Status:</span>
                                                            <span class="info-value">
                                <span class="payment-status-badge paid">Paid</span>
                              </span>
                                                        </div>
                                                        <div class="info-item">
                                                            <span class="info-label">Payment Reference:</span>
                                                            <span class="info-value"><code>PAY-123456</code></span>
                                                        </div>
                                                    </div>

                                                    <h6 class="section-subtitle mt-4">API Details</h6>
                                                    <div class="info-list">
                                                        <div class="info-item">
                                                            <span class="info-label">API Reference:</span>
                                                            <span class="info-value"><code>API-REF-789</code></span>
                                                        </div>
                                                        <div class="info-item">
                                                            <span class="info-label">Retry Count:</span>
                                                            <span class="info-value">0</span>
                                                        </div>
                                                        <div class="info-item">
                                                            <span class="info-label">Failure Reason:</span>
                                                            <span class="info-value text-muted">N/A</span>
                                                        </div>
                                                    </div>

                                                    <h6 class="section-subtitle mt-4">Timestamps</h6>
                                                    <div class="info-list">
                                                        <div class="info-item">
                                                            <span class="info-label">Created:</span>
                                                            <span class="info-value">Jan 29, 2026 at 10:30 AM</span>
                                                        </div>
                                                        <div class="info-item">
                                                            <span class="info-label">Paid At:</span>
                                                            <span class="info-value">Jan 29, 2026 at 10:31 AM</span>
                                                        </div>
                                                        <div class="info-item">
                                                            <span class="info-label">Processed At:</span>
                                                            <span class="info-value text-muted">Not yet</span>
                                                        </div>
                                                        <div class="info-item">
                                                            <span class="info-label">Completed At:</span>
                                                            <span class="info-value text-muted">Not yet</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Quick Actions -->
                                                <div class="col-12">
                                                    <h6 class="section-subtitle">Quick Actions</h6>
                                                    <div class="d-flex gap-2 flex-wrap">
                                                        <button class="btn btn-sm btn-success process-order-btn" data-order-id="1">
                                                            <i class="bi bi-arrow-right-circle me-1"></i>Process Order
                                                        </button>
                                                        <button class="btn btn-sm btn-warning retry-order-btn" data-order-id="1">
                                                            <i class="bi bi-arrow-clockwise me-1"></i>Retry Delivery
                                                        </button>
                                                        <button class="btn btn-sm btn-info">
                                                            <i class="bi bi-receipt me-1"></i>Generate Receipt
                                                        </button>
                                                        <button class="btn btn-sm btn-secondary refund-order-btn" data-order-id="1">
                                                            <i class="bi bi-arrow-counterclockwise me-1"></i>Refund Order
                                                        </button>
                                                        <button class="btn btn-sm btn-danger cancel-order-btn" data-order-id="1">
                                                            <i class="bi bi-x-circle me-1"></i>Cancel Order
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Order Row 2 - Processing -->
                            <tr class="expandable-row" data-order-id="2">
                                <td>
                                    <button class="btn-expand collapsed" data-bs-toggle="collapse" data-bs-target="#orderDetails2">
                                        <i class="bi bi-chevron-right"></i>
                                    </button>
                                </td>
                                <td>
                                    <div class="order-info">
                                        <div class="order-number">ORD-20260227-DEF456</div>
                                        <small class="text-muted">ID: #1235</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="agent-mini-info">
                                        <div class="agent-mini-avatar">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div>
                                            <div class="agent-mini-name">Ama Mensah</div>
                                            <small class="text-muted">AG-AM456</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="package-info">
                                        <div class="network-mini-badge" style="background: linear-gradient(135deg, #FF0000 0%, #DC143C 100%);">
                                            <span>A</span>
                                        </div>
                                        <div>
                                            <div class="package-name">AirtelTigo 2GB</div>
                                            <small class="text-muted">7 Days</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="recipient-info">
                                        <div class="recipient-phone">
                                            <i class="bi bi-phone text-muted"></i>
                                            <span>027 987 6543</span>
                                        </div>
                                        <small class="text-muted">Jane Smith</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="amount-info">
                                        <div class="amount-main">GH₵ 12.00</div>
                                        <small class="text-success">+GH₵ 1.20</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="payment-info">
                    <span class="payment-badge paystack-payment">
                      <i class="bi bi-credit-card"></i> Paystack
                    </span>
                                        <span class="payment-status-badge paid">Paid</span>
                                    </div>
                                </td>
                                <td>
                  <span class="order-status-badge status-processing">
                    <i class="bi bi-x-circle"></i> Failed
                  </span>
                                </td>
                                <td>
                                    <div class="date-info">
                                        <div class="date-primary">Jan 29, 2026</div>
                                        <small class="date-time">11:15 AM</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn-action-menu" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View Details</a></li>
                                            <li><a class="dropdown-item text-warning" href="#"><i class="bi bi-arrow-clockwise me-2"></i>Check Status</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Collapse row for order 2 -->
                            <tr class="collapse-row">
                                <td colspan="10" class="p-0">
                                    <div class="collapse order-details-collapse" id="orderDetails2">
                                        <div class="order-details-panel">
                                            <p class="text-center text-muted py-4">Order details similar to above...</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Order Row 3 - Completed -->
                            <tr class="expandable-row" data-order-id="3">
                                <td>
                                    <button class="btn-expand collapsed" data-bs-toggle="collapse" data-bs-target="#orderDetails3">
                                        <i class="bi bi-chevron-right"></i>
                                    </button>
                                </td>
                                <td>
                                    <div class="order-info">
                                        <div class="order-number">ORD-20260229-GHI789</div>
                                        <small class="text-muted">ID: #1236</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="agent-mini-info">
                                        <div class="agent-mini-avatar">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div>
                                            <div class="agent-mini-name">Kwame Asante</div>
                                            <small class="text-muted">AG-KW789</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="package-info">
                                        <div class="network-mini-badge" style="background: linear-gradient(135deg, #00A650 0%, #008040 100%);">
                                            <span>T</span>
                                        </div>
                                        <div>
                                            <div class="package-name">Telecel 1GB</div>
                                            <small class="text-muted">24 Hours</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="recipient-info">
                                        <div class="recipient-phone">
                                            <i class="bi bi-phone text-muted"></i>
                                            <span>055 111 2233</span>
                                        </div>
                                        <small class="text-muted">Kofi Mensah</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="amount-info">
                                        <div class="amount-main">GH₵ 5.00</div>
                                        <small class="text-success">+GH₵ 0.50</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="payment-info">
                    <span class="payment-badge wallet-payment">
                      <i class="bi bi-wallet2"></i> Wallet
                    </span>
                                        <span class="payment-status-badge paid">Paid</span>
                                    </div>
                                </td>
                                <td>
                  <span class="order-status-badge status-completed">
                    <i class="bi bi-check-circle"></i> Completed
                  </span>
                                </td>
                                <td>
                                    <div class="date-info">
                                        <div class="date-primary">Jan 28, 2026</div>
                                        <small class="date-time">3:45 PM</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn-action-menu" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View Details</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-receipt me-2"></i>Download Receipt</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Collapse row for order 3 -->
                            <tr class="collapse-row">
                                <td colspan="10" class="p-0">
                                    <div class="collapse order-details-collapse" id="orderDetails3">
                                        <div class="order-details-panel">
                                            <p class="text-center text-muted py-4">Order details similar to above...</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <!-- Order Row 4 - Failed -->
                            <tr class="expandable-row" data-order-id="4">
                                <td>
                                    <button class="btn-expand collapsed" data-bs-toggle="collapse" data-bs-target="#orderDetails4">
                                        <i class="bi bi-chevron-right"></i>
                                    </button>
                                </td>
                                <td>
                                    <div class="order-info">
                                        <div class="order-number">ORD-20260227-JKL012</div>
                                        <small class="text-muted">ID: #1237</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="agent-mini-info">
                                        <div class="agent-mini-avatar">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div>
                                            <div class="agent-mini-name">Ama Mensah</div>
                                            <small class="text-muted">AG-AM456</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="package-info">
                                        <div class="network-mini-badge" style="background: linear-gradient(135deg, #FFCC00 0%, #FFA500 100%);">
                                            <span>M</span>
                                        </div>
                                        <div>
                                            <div class="package-name">MTN 10GB</div>
                                            <small class="text-muted">30 Days</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="recipient-info">
                                        <div class="recipient-phone">
                                            <i class="bi bi-phone text-muted"></i>
                                            <span>020 555 6789</span>
                                        </div>
                                        <small class="text-muted">Akua Boateng</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="amount-info">
                                        <div class="amount-main">GH₵ 45.00</div>
                                        <small class="text-success">+GH₵ 4.50</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="payment-info">
                    <span class="payment-badge wallet-payment">
                      <i class="bi bi-wallet2"></i> Wallet
                    </span>
                                        <span class="payment-status-badge refunded">Refunded</span>
                                    </div>
                                </td>
                                <td>
                  <span class="order-status-badge status-failed">
                    <i class="bi bi-x-circle"></i> Failed
                  </span>
                                </td>
                                <td>
                                    <div class="date-info">
                                        <div class="date-primary">Jan 27, 2026</div>
                                        <small class="date-time">1:20 PM</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn-action-menu" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View Details</a></li>
                                            <li><a class="dropdown-item text-warning" href="#"><i class="bi bi-arrow-clockwise me-2"></i>Retry Order</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <!-- Collapse row for order 4 -->
                            <tr class="collapse-row">
                                <td colspan="10" class="p-0">
                                    <div class="collapse order-details-collapse" id="orderDetails4">
                                        <div class="order-details-panel">
                                            <p class="text-center text-muted py-4">Order details similar to above...</p>
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
                                <p class="mb-0 text-muted">Showing 1 to 4 of 1,245 orders</p>
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
                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">25</a></li>
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

    <!-- PLACE ORDER MODAL -->
    <div class="modal fade" id="placeOrderModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-plus-circle me-2"></i>Place New Order
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="placeOrderForm">
                        <div class="row g-3">

                            <!-- Agent Selection (Optional - admin can place for specific agent) -->
                            <div class="col-12">
                                <label class="form-label fw-bold">Order For</label>
                                <select class="form-select form-select-lg" name="order_for">
                                    <option value="admin">Admin Order (Direct)</option>
                                    <option value="agent">On Behalf of Agent</option>
                                </select>
                            </div>

                            <!-- Agent Selector (shown when "On Behalf of Agent" is selected) -->
                            <div class="col-12" id="agentSelectDiv" style="display: none;">
                                <label class="form-label fw-bold">Select Agent <span class="text-danger">*</span></label>
                                <select class="form-select form-select-lg" name="agent_id">
                                    <option value="">Choose Agent...</option>
                                    <option value="1">Kwame Asante (AG-KW789)</option>
                                    <option value="2">Ama Mensah (AG-AM456)</option>
                                </select>
                            </div>

                            <!-- Network Selection -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Network <span class="text-danger">*</span></label>
                                <select class="form-select form-select-lg" name="network_id" id="networkSelect" required>
                                    <option value="">Select Network</option>
                                    <option value="1">MTN</option>
                                    <option value="2">AirtelTigo</option>
                                    <option value="3">Telecel</option>
                                </select>
                            </div>

                            <!-- Package Selection -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Package <span class="text-danger">*</span></label>
                                <select class="form-select form-select-lg" name="package_id" id="packageSelect" required>
                                    <option value="">Select Package</option>
                                    <!-- Will be populated based on network selection -->
                                </select>
                            </div>

                            <!-- Recipient Phone -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Recipient Phone <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control form-control-lg" name="recipient_phone" placeholder="024 123 4567" required>
                                <small class="text-muted">Phone number to receive the bundle</small>
                            </div>

                            <!-- Recipient Name -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Recipient Name</label>
                                <input type="text" class="form-control form-control-lg" name="recipient_name" placeholder="John Doe">
                                <small class="text-muted">Optional</small>
                            </div>

                            <!-- Package Details Preview -->
                            <div class="col-12" id="packagePreview" style="display: none;">
                                <div class="alert alert-info mb-0">
                                    <h6 class="alert-heading">Package Details</h6>
                                    <div class="row g-2">
                                        <div class="col-6 col-md-3">
                                            <small class="text-muted d-block">Data Size</small>
                                            <strong id="previewDataSize">-</strong>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <small class="text-muted d-block">Validity</small>
                                            <strong id="previewValidity">-</strong>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <small class="text-muted d-block">Price</small>
                                            <strong id="previewPrice" class="text-success">-</strong>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <small class="text-muted d-block">Commission</small>
                                            <strong id="previewCommission" class="text-warning">-</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Method -->
                            <div class="col-12">
                                <label class="form-label fw-bold">Payment Method <span class="text-danger">*</span></label>
                                <div class="payment-methods-grid">
                                    <label class="payment-method-card">
                                        <input type="radio" name="payment_method" value="wallet" checked>
                                        <div class="payment-method-content">
                                            <i class="bi bi-wallet2"></i>
                                            <span>Agent Wallet</span>
                                        </div>
                                    </label>
                                    <label class="payment-method-card">
                                        <input type="radio" name="payment_method" value="paystack">
                                        <div class="payment-method-content">
                                            <i class="bi bi-credit-card"></i>
                                            <span>Paystack</span>
                                        </div>
                                    </label>
                                    <label class="payment-method-card">
                                        <input type="radio" name="payment_method" value="cash">
                                        <div class="payment-method-content">
                                            <i class="bi bi-cash"></i>
                                            <span>Cash</span>
                                        </div>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" form="placeOrderForm" class="btn btn-primary">
                        <i class="bi bi-check-circle me-2"></i>Place Order
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- REFUND ORDER MODAL -->
    <div class="modal fade" id="refundOrderModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-warning">
                        <i class="bi bi-arrow-counterclockwise me-2"></i>Refund Order
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning">
                        <i class="bi bi-exclamation-triangle me-2"></i>
                        This will refund the money back to the agent's wallet and mark the order as refunded.
                    </div>
                    <form id="refundOrderForm">
                        <input type="hidden" name="order_id" value="">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Refund Amount (GH₵)</label>
                            <input type="number" class="form-control form-control-lg" name="refund_amount" value="20.00" step="0.01" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Refund Reason <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="refund_reason" rows="3" placeholder="Reason for refund..." required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" form="refundOrderForm" class="btn btn-warning">
                        <i class="bi bi-check-circle me-2"></i>Process Refund
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-cms>
