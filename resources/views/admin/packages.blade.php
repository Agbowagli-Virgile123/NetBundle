<x-layouts.admin-cms title="Bundles Management">
    <!-- Bundles Management Content -->
    <div class="dashboard-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="page-heading">Bundles Management</h2>
                        <p class="page-subheading text-muted">Manage data bundles and packages</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#addBundleModal">
                            <i class="bi bi-plus-circle me-2"></i>Add New Bundle
                        </button>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row g-4 mb-4">
                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon bg-primary">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <div class="stat-content">
                            <h3 class="stat-number">48</h3>
                            <p class="stat-label">Total Bundles</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon bg-success">
                            <i class="bi bi-check-circle"></i>
                        </div>
                        <div class="stat-content">
                            <h3 class="stat-number">45</h3>
                            <p class="stat-label">Active Bundles</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon bg-warning">
                            <i class="bi bi-star"></i>
                        </div>
                        <div class="stat-content">
                            <h3 class="stat-number">12</h3>
                            <p class="stat-label">Popular Bundles</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon bg-info">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="stat-content">
                            <h3 class="stat-number">GH₵ 8.5k</h3>
                            <p class="stat-label">Total Revenue</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters and Actions -->
            <div class="content-card mb-4">
                <div class="card-body-custom p-4">
                    <div class="row g-3 align-items-end">

                        <!-- Network Filter -->
                        <div class="col-md-3">
                            <label class="form-label fw-bold">Network</label>
                            <select class="form-select" id="networkFilter">
                                <option value="">All Networks</option>
                                <option value="mtn">MTN</option>
                                <option value="airteltigo">AirtelTigo</option>
                                <option value="telecel">Telecel</option>
                            </select>
                        </div>

                        <!-- Bundle Type Filter -->
                        <div class="col-md-3">
                            <label class="form-label fw-bold">Bundle Type</label>
                            <select class="form-select" id="typeFilter">
                                <option value="">All Types</option>
                                <option value="daily">Daily</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
                            </select>
                        </div>

                        <!-- Status Filter -->
                        <div class="col-md-2">
                            <label class="form-label fw-bold">Status</label>
                            <select class="form-select" id="statusFilter">
                                <option value="">All Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <!-- Search -->
                        <div class="col-md-4">
                            <label class="form-label fw-bold">Search</label>
                            <div class="search-box">
                                <i class="bi bi-search"></i>
                                <input type="text" class="form-control" placeholder="Search bundles...">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Bundles Table Card -->
            <div class="content-card">
                <div class="card-header-custom">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h5 class="mb-0">All Bundles</h5>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <div class="btn-group" role="group">
                                <button class="btn btn-sm btn-outline-primary active">
                                    <i class="bi bi-grid-3x3-gap me-1"></i>Grid
                                </button>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="bi bi-list-ul me-1"></i>List
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body-custom p-4">

                    <!-- Grid View -->
                    <div class="bundles-grid">

                        <!-- Bundle Card 1 -->
                        <div class="bundle-card">
                            <div class="bundle-card-header">
                                <div class="bundle-network-badge" style="background: linear-gradient(135deg, #FFCC00 0%, #FFA500 100%);">
                                    <span class="network-initial">M</span>
                                </div>
                                <div class="bundle-actions">
                                    <div class="dropdown">
{{--                                        <button class="btn-bundle-action" data-bs-toggle="dropdown">--}}
{{--                                            <i class="bi bi-three-dots-vertical"></i>--}}
{{--                                        </button>--}}
                                        <div class="dropdown">
                                            <button class="btn-bundle-action" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-toggle dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item view-bundle-btn" href="#" data-bundle-id="1">
                                                        <i class="bi bi-eye me-2"></i>View
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item edit-bundle-btn" href="#" data-bs-toggle="modal" data-bs-target="#editBundleModal" data-bundle-id="1">
                                                        <i class="bi bi-pencil me-2"></i>Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item duplicate-bundle-btn" href="#" data-bundle-id="1">
                                                        <i class="bi bi-files me-2"></i>Duplicate
                                                    </a>
                                                </li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li>
                                                    <a class="dropdown-item text-danger delete-bundle-btn" href="#" data-bs-toggle="modal" data-bs-target="#deleteBundleModal" data-bundle-id="1">
                                                        <i class="bi bi-trash me-2"></i>Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bundle-card-body">
                                <div class="bundle-size">1GB</div>
                                <div class="bundle-validity">24 Hours</div>
                                <div class="bundle-type-badge daily-badge">Daily</div>

                                <div class="bundle-pricing">
                                    <div class="price-main">GH₵ 5.00</div>
                                    <div class="price-cost text-muted">Cost: GH₵ 4.20</div>
                                </div>

                                <div class="bundle-stats">
                                    <div class="bundle-stat-item">
                                        <i class="bi bi-cart-check text-success"></i>
                                        <span>342 sales</span>
                                    </div>
                                    <div class="bundle-stat-item">
                                        <i class="bi bi-eye text-info"></i>
                                        <span>1.2k views</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bundle-card-footer">
              <span class="status-badge status-active">
                <i class="bi bi-check-circle"></i> Active
              </span>
                                <div class="bundle-popularity">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span class="text-muted small">Popular</span>
                                </div>
                            </div>
                        </div>

                        <!-- Bundle Card 2 -->
                        <div class="bundle-card">
                            <div class="bundle-card-header">
                                <div class="bundle-network-badge" style="background: linear-gradient(135deg, #FFCC00 0%, #FFA500 100%);">
                                    <span class="network-initial">M</span>
                                </div>
                                <div class="bundle-actions">
                                    <div class="dropdown">
                                        <button class="btn-bundle-action" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item view-bundle-btn" href="#" data-bundle-id="1">
                                                    <i class="bi bi-eye me-2"></i>View
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item edit-bundle-btn" href="#" data-bs-toggle="modal" data-bs-target="#editBundleModal" data-bundle-id="1">
                                                    <i class="bi bi-pencil me-2"></i>Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item duplicate-bundle-btn" href="#" data-bundle-id="1">
                                                    <i class="bi bi-files me-2"></i>Duplicate
                                                </a>
                                            </li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li>
                                                <a class="dropdown-item text-danger delete-bundle-btn" href="#" data-bs-toggle="modal" data-bs-target="#deleteBundleModal" data-bundle-id="1">
                                                    <i class="bi bi-trash me-2"></i>Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bundle-card-body">
                                <div class="bundle-size">2GB</div>
                                <div class="bundle-validity">24 Hours</div>
                                <div class="bundle-type-badge daily-badge">Daily</div>

                                <div class="bundle-pricing">
                                    <div class="price-main">GH₵ 9.00</div>
                                    <div class="price-cost text-muted">Cost: GH₵ 7.50</div>
                                </div>

                                <div class="bundle-stats">
                                    <div class="bundle-stat-item">
                                        <i class="bi bi-cart-check text-success"></i>
                                        <span>289 sales</span>
                                    </div>
                                    <div class="bundle-stat-item">
                                        <i class="bi bi-eye text-info"></i>
                                        <span>980 views</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bundle-card-footer">
              <span class="status-badge status-active">
                <i class="bi bi-check-circle"></i> Active
              </span>
                            </div>
                        </div>

                        <!-- Bundle Card 3 -->
                        <div class="bundle-card">
                            <div class="bundle-card-header">
                                <div class="bundle-network-badge" style="background: linear-gradient(135deg, #FFCC00 0%, #FFA500 100%);">
                                    <span class="network-initial">M</span>
                                </div>
                                <div class="bundle-actions">
                                    <div class="dropdown">
                                        <button class="btn-bundle-action" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-files me-2"></i>Duplicate</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bundle-card-body">
                                <div class="bundle-size">5GB</div>
                                <div class="bundle-validity">24 Hours</div>
                                <div class="bundle-type-badge daily-badge">Daily</div>

                                <div class="bundle-pricing">
                                    <div class="price-main">GH₵ 20.00</div>
                                    <div class="price-cost text-muted">Cost: GH₵ 17.00</div>
                                </div>

                                <div class="bundle-stats">
                                    <div class="bundle-stat-item">
                                        <i class="bi bi-cart-check text-success"></i>
                                        <span>456 sales</span>
                                    </div>
                                    <div class="bundle-stat-item">
                                        <i class="bi bi-eye text-info"></i>
                                        <span>1.5k views</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bundle-card-footer">
              <span class="status-badge status-active">
                <i class="bi bi-check-circle"></i> Active
              </span>
                                <div class="bundle-popularity">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span class="text-muted small">Popular</span>
                                </div>
                            </div>
                        </div>

                        <!-- Bundle Card 4 - AirtelTigo -->
                        <div class="bundle-card">
                            <div class="bundle-card-header">
                                <div class="bundle-network-badge" style="background: linear-gradient(135deg, #FF0000 0%, #DC143C 100%);">
                                    <span class="network-initial">A</span>
                                </div>
                                <div class="bundle-actions">
                                    <div class="dropdown">
                                        <button class="btn-bundle-action" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-files me-2"></i>Duplicate</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bundle-card-body">
                                <div class="bundle-size">10GB</div>
                                <div class="bundle-validity">7 Days</div>
                                <div class="bundle-type-badge weekly-badge">Weekly</div>

                                <div class="bundle-pricing">
                                    <div class="price-main">GH₵ 32.00</div>
                                    <div class="price-cost text-muted">Cost: GH₵ 27.00</div>
                                </div>

                                <div class="bundle-stats">
                                    <div class="bundle-stat-item">
                                        <i class="bi bi-cart-check text-success"></i>
                                        <span>198 sales</span>
                                    </div>
                                    <div class="bundle-stat-item">
                                        <i class="bi bi-eye text-info"></i>
                                        <span>750 views</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bundle-card-footer">
              <span class="status-badge status-active">
                <i class="bi bi-check-circle"></i> Active
              </span>
                            </div>
                        </div>

                        <!-- Bundle Card 5 - Telecel -->
                        <div class="bundle-card">
                            <div class="bundle-card-header">
                                <div class="bundle-network-badge" style="background: linear-gradient(135deg, #00A650 0%, #008040 100%);">
                                    <span class="network-initial">T</span>
                                </div>
                                <div class="bundle-actions">
                                    <div class="dropdown">
                                        <button class="btn-bundle-action" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-files me-2"></i>Duplicate</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bundle-card-body">
                                <div class="bundle-size">50GB</div>
                                <div class="bundle-validity">30 Days</div>
                                <div class="bundle-type-badge monthly-badge">Monthly</div>

                                <div class="bundle-pricing">
                                    <div class="price-main">GH₵ 145.00</div>
                                    <div class="price-cost text-muted">Cost: GH₵ 120.00</div>
                                </div>

                                <div class="bundle-stats">
                                    <div class="bundle-stat-item">
                                        <i class="bi bi-cart-check text-success"></i>
                                        <span>87 sales</span>
                                    </div>
                                    <div class="bundle-stat-item">
                                        <i class="bi bi-eye text-info"></i>
                                        <span>420 views</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bundle-card-footer">
              <span class="status-badge status-active">
                <i class="bi bi-check-circle"></i> Active
              </span>
                                <div class="bundle-popularity">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span class="text-muted small">Popular</span>
                                </div>
                            </div>
                        </div>

                        <!-- Bundle Card 6 - Inactive Example -->
                        <div class="bundle-card inactive-card">
                            <div class="bundle-card-header">
                                <div class="bundle-network-badge" style="background: linear-gradient(135deg, #FFCC00 0%, #FFA500 100%);">
                                    <span class="network-initial">M</span>
                                </div>
                                <div class="bundle-actions">
                                    <div class="dropdown">
                                        <button class="btn-bundle-action" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-files me-2"></i>Duplicate</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-trash me-2"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="bundle-card-body">
                                <div class="bundle-size">100GB</div>
                                <div class="bundle-validity">30 Days</div>
                                <div class="bundle-type-badge monthly-badge">Monthly</div>

                                <div class="bundle-pricing">
                                    <div class="price-main">GH₵ 250.00</div>
                                    <div class="price-cost text-muted">Cost: GH₵ 210.00</div>
                                </div>

                                <div class="bundle-stats">
                                    <div class="bundle-stat-item">
                                        <i class="bi bi-cart-check text-success"></i>
                                        <span>12 sales</span>
                                    </div>
                                    <div class="bundle-stat-item">
                                        <i class="bi bi-eye text-info"></i>
                                        <span>156 views</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bundle-card-footer">
              <span class="status-badge status-inactive">
                <i class="bi bi-x-circle"></i> Inactive
              </span>
                            </div>
                        </div>

                    </div>

                    <!-- List View (Hidden by default) -->
                    <div class="bundles-list" style="display: none;">
                        <div class="table-responsive">
                            <table class="table custom-table">
                                <thead>
                                <tr>
                                    <th>Bundle</th>
                                    <th>Network</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                    <th>Cost</th>
                                    <th>Sales</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="bundle-network-badge" style="background: linear-gradient(135deg, #FFCC00 0%, #FFA500 100%); width: 35px; height: 35px;">
                                                <span class="network-initial" style="font-size: 1rem;">M</span>
                                            </div>
                                            <div>
                                                <div class="fw-bold">1GB</div>
                                                <small class="text-muted">24 Hours</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>MTN</td>
                                    <td><span class="bundle-type-badge daily-badge">Daily</span></td>
                                    <td class="fw-bold">GH₵ 5.00</td>
                                    <td class="text-muted">GH₵ 4.20</td>
                                    <td>342 sales</td>
                                    <td><span class="status-badge status-active"><i class="bi bi-check-circle"></i> Active</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action btn-action-view"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action btn-action-edit"><i class="bi bi-pencil"></i></button>
                                            <button class="btn-action btn-action-delete"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <!-- Pagination -->
                    <div class="mt-4">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <p class="mb-0 text-muted">Showing 1 to 6 of 48 bundles</p>
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
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
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

    <!-- ADD BUNDLE MODAL -->
    <div class="modal fade" id="addBundleModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-plus-circle me-2"></i>Add New Bundle
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addBundleForm">
                        <div class="row g-3">

                            <!-- Network Selection -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Network <span class="text-danger">*</span></label>
                                <select class="form-select form-select-lg" name="network_id" required>
                                    <option value="">Select Network</option>
                                    <option value="1">MTN</option>
                                    <option value="2">AirtelTigo</option>
                                    <option value="3">Telecel</option>
                                </select>
                            </div>

                            <!-- Bundle Type -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Bundle Type <span class="text-danger">*</span></label>
                                <select class="form-select form-select-lg" name="type" required>
                                    <option value="">Select Type</option>
                                    <option value="daily">Daily</option>
                                    <option value="weekly">Weekly</option>
                                    <option value="monthly">Monthly</option>
                                </select>
                            </div>

                            <!-- Data Size -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Data Size <span class="text-danger">*</span></label>
                                <div class="input-group input-group-lg">
                                    <input type="number" class="form-control" name="data_size" placeholder="5" required>
                                    <select class="form-select" name="data_unit" style="max-width: 100px;">
                                        <option value="MB">MB</option>
                                        <option value="GB" selected>GB</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Validity Period -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Validity Period <span class="text-danger">*</span></label>
                                <div class="input-group input-group-lg">
                                    <input type="number" class="form-control" name="validity_value" placeholder="7" required>
                                    <select class="form-select" name="validity_unit" style="max-width: 120px;">
                                        <option value="hours">Hours</option>
                                        <option value="days" selected>Days</option>
                                        <option value="months">Months</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Selling Price -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Selling Price (GH₵) <span class="text-danger">*</span></label>
                                <input type="number" class="form-control form-control-lg" name="price" placeholder="20.00" step="0.01" required>
                            </div>

                            <!-- Cost Price -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Cost Price (GH₵) <span class="text-danger">*</span></label>
                                <input type="number" class="form-control form-control-lg" name="cost" placeholder="17.00" step="0.01" required>
                            </div>

                            <!-- Description -->
                            <div class="col-12">
                                <label class="form-label fw-bold">Description</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Bundle description..."></textarea>
                            </div>

                            <!-- Features -->
                            <div class="col-12">
                                <label class="form-label fw-bold">Features (One per line)</label>
                                <textarea class="form-control" name="features" rows="3" placeholder="All Networks&#10;Instant Activation&#10;24/7 Support"></textarea>
                            </div>

                            <!-- Checkboxes -->
                            <div class="col-12">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="is_active" id="addIsActive" checked>
                                            <label class="form-check-label fw-bold" for="addIsActive">
                                                Active
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="is_popular" id="addIsPopular">
                                            <label class="form-check-label fw-bold" for="addIsPopular">
                                                Popular
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="is_featured" id="addIsFeatured">
                                            <label class="form-check-label fw-bold" for="addIsFeatured">
                                                Featured
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" form="addBundleForm" class="btn btn-primary">
                        <i class="bi bi-check-circle me-2"></i>Add Bundle
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- EDIT BUNDLE MODAL -->
    <div class="modal fade" id="editBundleModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-pencil me-2"></i>Edit Bundle
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editBundleForm">
                        <input type="hidden" name="bundle_id" value="1">

                        <div class="row g-3">
                            <!-- Same form fields as Add Bundle -->
                            <!-- Copy all fields from addBundleModal -->
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" form="editBundleForm" class="btn btn-primary">
                        <i class="bi bi-check-circle me-2"></i>Update Bundle
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- DELETE BUNDLE MODAL -->
    <div class="modal fade" id="deleteBundleModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-danger">
                        <i class="bi bi-exclamation-triangle me-2"></i>Confirm Delete
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center py-4">
                    <div class="delete-icon mb-3">
                        <i class="bi bi-trash"></i>
                    </div>
                    <h5 class="mb-3">Delete Bundle?</h5>
                    <p class="text-muted mb-0">Are you sure you want to delete <strong id="deleteBundleName">1GB MTN Daily</strong>? This action cannot be undone.</p>
                    <div class="alert alert-warning mt-3" role="alert">
                        <i class="bi bi-exclamation-circle me-2"></i>
                        <strong>Warning:</strong> All related data will be permanently removed.
                    </div>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteBtn">
                        <i class="bi bi-trash me-2"></i>Yes, Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-cms>
