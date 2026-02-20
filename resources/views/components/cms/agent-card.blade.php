<tr class="expandable-row">
    <td>
        <button class="btn-expand" data-bs-toggle="collapse" data-bs-target="#agentDetails{{$agent->id}}">
            <i class="bi bi-chevron-right"></i>
        </button>
    </td>
    <td>
        <div class="agent-info">
            <div class="agent-avatar">
                <i class="bi bi-person-circle"></i>
            </div>
            <div>
                <div class="agent-name">{{$agent->last_name.' '.$agent->first_name}}</div>
                <small class="text-muted">ID: AG-{{$agent->id}}</small>
            </div>
        </div>
    </td>
    <td>
        <div>
            <div class="contact-item">
                <i class="bi bi-envelope text-muted"></i>
                <span>{{$agent->email}}</span>
            </div>
            <div class="contact-item">
                <i class="bi bi-phone text-muted"></i>
                <span>+233 {{$agent->phone_number}}</span>
            </div>
        </div>
    </td>
    <td>
        <div class="referral-code-box">
            <code>{{$agent->referral_code}}</code>
            <button class="btn-copy-code"  data-code="{{$agent->referral_code}}">
                <i class="bi bi-clipboard"></i>
            </button>
        </div>
    </td>
    <td>
        <span class="commission-badge">{{$agent->commission_rate}}%</span>
    </td>
    <td>
        <div class="wallet-info">
            <div class="balance-main">{{currencyFormat($agent->wallet->balance)}}</div>
            <small class="commission-balance">+{{currencyFormat($agent->wallet->commission_balance)}}</small>
        </div>
    </td>
    <td>
        <div class="sales-info">
            <div class="fw-bold text-success">{{currencyFormat($agent->wallet->balance + $agent->wallet->commission_balance)}}</div>
{{--            <small class="text-muted">{{$agent->getTotalOrdersAttribute()}} orders</small>--}}
            <small class="text-muted">0 orders</small>
        </div>
    </td>
    <td>
        <div class="agent-status-badges">
            <span class="status-badge {{$agent->is_active ? 'status-active' : 'status-inactive'}} ">
               <i class="bi {{ $agent->is_active ? 'bi-check-circle' : 'bi-x-circle' }}"></i> {{$agent->is_active ? 'Active' : 'Inactive'}}
            </span>
            <span class="verified-badge {{$agent->is_verified ? 'verified' : 'unverified'}} ">
                <i class="bi {{ $agent->is_verified ? 'bi-patch-check-fill' : 'bi-clock-history' }}"></i> {{$agent->is_verified ? 'Verified' : 'Pending'}}
            </span>
        </div>
    </td>
    <td>
        <div class="date-info">
            <div class="date-primary">{{ $agent->created_at->format('M d, Y') }}</div>
            <small class="date-time">{{(string)$agent->created_at->format('h:i A') }}</small>
        </div>
    </td>
    <td>
        <div class="dropdown dropdown-toggle">
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
        <div class="collapse agent-details-collapse" id="agentDetails{{$agent->id}}">
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
{{--                                                <div class="mini-stat-value">{{$agent->getTotalOrdersAttribute()}}</div>--}}
                                                <div class="mini-stat-value">0</div>
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
                                                <div class="mini-stat-value">{{currencyFormat($agent->wallet->balance)}}</div>
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
                                                <div class="mini-stat-value">{{currencyFormat($agent->wallet->commission_balance)}}</div>
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
                                                <div class="mini-stat-value">{{currencyFormat($agent->wallet->total_deposited)}}</div>
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
                                        <span class="info-value">{{$agent->getFullNameAttribute() }}</span>
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Email:</span>
                                        <span class="info-value">{{$agent->email}}</span>
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Phone:</span>
                                        <span class="info-value">+233 {{$agent->phone_number}}</span>
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">WhatsApp:</span>
                                        <span class="info-value">+233 {{$agent->whatsapp_number}}</span>
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">{{$agent->id_type}}:</span>
                                        <span class="info-value">{{$agent->id_number}}</span>
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Address:</span>
                                        <span class="info-value">{{$agent->city.', '.$agent->region}}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Account Info -->
                            <div class="col-md-6">
                                <h6 class="section-subtitle">Account Information</h6>
                                <div class="info-list">
                                    <div class="info-item">
                                        <span class="info-label">Agent ID:</span>
                                        <span class="info-value">AG-{{$agent->id}}</span>
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Referral Code:</span>
                                        <span class="info-value"><code>{{$agent->referral_code}}</code></span>
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Commission Rate:</span>
                                        <span class="info-value"><span class="commission-badge">{{$agent->commission_rate}}%</span></span>
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Joined Date:</span>
                                        <span class="info-value">{{ $agent->created_at->format('M d, Y') }}</span>
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Verification Status:</span>
                                        <span class="info-value">
                                            <span class="verified-badge {{$agent->is_verified ? 'verified' : 'unverified'}}">
                                                <i class="bi {{ $agent->is_verified ? 'bi-patch-check-fill' : 'bi-clock-history' }}"></i> {{$agent->is_verified ? 'Verified' : 'Pending'}}
                                            </span>
                                          </span>
                                    </div>
                                    <div class="info-item">
                                        <span class="info-label">Account Status:</span>
                                        <span class="info-value">
                                            <span class="status-badge {{$agent->is_active ? 'status-active' : 'status-inactive'}}">
                                              <i class="bi {{ $agent->is_active ? 'bi-check-circle' : 'bi-x-circle' }}"></i> {{$agent->is_active ? 'Active' : 'Inactive'}}
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
                                    <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#editCommissionRateModal">
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
                                                <div class="wallet-summary-value">{{currencyFormat($agent->wallet->balance)}}</div>
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
                                                <div class="wallet-summary-value">{{currencyFormat($agent->wallet->commission_balance)}}</div>
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
                                                <div class="wallet-summary-value">{{currencyFormat($agent->wallet->balance + $agent->wallet->commission_balance)}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Recent Transactions -->
                            <div class="col-md-12">
                                <h6 class="section-subtitle">Recent Transactions</h6>
                                <div class="transactions-list">

                                    @if($agent->walletTransactions->count() > 0)
                                        @foreach($agent->walletTransactions as $transaction)

                                        @endforeach
                                    @else

                                    @endif

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
