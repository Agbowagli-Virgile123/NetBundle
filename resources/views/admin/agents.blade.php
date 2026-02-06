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
                    stat-number="{{$stats['total']}}"
                    label="Total Agents"
                />

                 <x-cms.stats-card
                    bg-color="success"
                    icon="check-circle"
                    stat-number="{{$stats['verified']}}"
                    label="Verified Agents"
                />

                <x-cms.stats-card
                    bg-color="warning"
                    icon="clock-history"
                    stat-number="{{$stats['unverified']}}"
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
                                    <th style="width: 50px">#</th>
                                    <th>Agent</th>
                                    <th>Contact</th>
                                    <th>Referral Code</th>
                                    <th>Commission Rate</th>
                                    <th>Wallet Balance</th>
                                    <th>Total Sales</th>
                                    <th>Status</th>
                                    <th>Joined</th>
                                    <th style="width: 80px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                               @if($agents->count() > 0)
                                    @foreach($agents as $agent)
                                        <x-cms.agent-card :agent="$agent" />
                                    @endforeach
                               @else
                                   <tr>
                                       <td colspan="10">No Agent Found</td>
                                   </tr>
                               @endif
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="table-footer">
                        {{$agents->links()}}
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

    <!-- EDIT COMMISSION RATE MODAL -->
    <div class="modal fade" id="editCommissionRateModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-info">
                        <i class="bi bi-dash-circle me-2"></i>Edit Commission Rate
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="debitWalletForm">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Rate (%)<span class="text-danger">*</span></label>
                            <input type="number" class="form-control form-control-lg" name="amount" step="0.01" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" form="debitWalletForm" class="btn btn-info">
                        <i class="bi bi-check-circle me-2"></i>Edit Rate
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-cms>

