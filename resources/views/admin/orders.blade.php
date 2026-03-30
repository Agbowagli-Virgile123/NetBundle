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
                    stat-number="{{$stats['total']}}"
                    label="Total Orders"
                />

                <x-cms.stats-card
                    bg-color="warning"
                    icon="clock-history"
                    stat-number="{{$stats['pending']}}"
                    label="Pending Orders"
                />

                <x-cms.stats-card
                    bg-color="success"
                    icon="check-circle"
                    stat-number="{{$stats['completed']}}"
                    label="Completed"
                />

                <x-cms.stats-card
                    bg-color="danger"
                    icon="x-circle"
                    stat-number="{{$stats['failed']}}"
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
                            @if ($orders->count() > 0)
                                @foreach ($orders as $order)
                                    <x-cms.order-card :order="$order" />
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="10">No Order Found</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    {{ $orders->links() }}

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
