

<x-layouts.admin-cms title="Networks">
    <!-- Networks Management Content -->
    <div class="dashboard-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="page-heading">Networks Management</h2>
                        <p class="page-subheading text-muted">Manage telecom networks and their settings</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#addNetworkModal">
                            <i class="bi bi-plus-circle me-2"></i>Add New Network
                        </button>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row g-4 mb-4">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon bg-primary">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                        <div class="stat-content">
                            <h3 class="stat-number">3</h3>
                            <p class="stat-label">Total Networks</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon bg-success">
                            <i class="bi bi-check-circle"></i>
                        </div>
                        <div class="stat-content">
                            <h3 class="stat-number">3</h3>
                            <p class="stat-label">Active Networks</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon bg-warning">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <div class="stat-content">
                            <h3 class="stat-number">0</h3>
                            <p class="stat-label">Inactive Networks</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon bg-info">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <div class="stat-content">
                            <h3 class="stat-number">48</h3>
                            <p class="stat-label">Total Bundles</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Networks Table Card -->
            <div class="content-card">
                <div class="card-header-custom">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h5 class="mb-0">All Networks</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex gap-2 justify-content-md-end">
                                <!-- Search -->
                                <div class="search-box">
                                    <i class="bi bi-search"></i>
                                    <input type="text" class="form-control" placeholder="Search networks...">
                                </div>

                                <!-- Filter -->
                                <select class="form-select" style="max-width: 150px;">
                                    <option value="">All Status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body-custom">
                    <div class="table-responsive">
                        <table class="table custom-table">
                            <thead>
                            <tr>
                                <th width="50">#</th>
                                <th>Network</th>
                                <th>Code</th>
                                <th>Color</th>
                                <th>Description</th>
                                <th>Sort Order</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th width="150">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            <!-- Network Row 1: MTN -->
                            <tr>
                                <td>
                                    <div class="drag-handle">
                                        <i class="bi bi-grip-vertical"></i>
                                    </div>
                                </td>
                                <td>
                                    <div class="network-info">
                                        <div class="network-logo" style="background: linear-gradient(135deg, #FFCC00 0%, #FFA500 100%);">
                                            <span class="network-initial">M</span>
                                        </div>
                                        <div>
                                            <div class="network-name">MTN</div>
                                            <small class="text-muted">Mobile Telecommunications Network</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="code-badge">mtn</span>
                                </td>
                                <td>
                                    <div class="color-preview-wrapper">
                                        <div class="color-preview" style="background-color: #FFCC00;"></div>
                                        <span class="color-code">#FFCC00</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="description-text">Ghana's leading mobile network operator</span>
                                </td>
                                <td>
                                    <span class="sort-badge">1</span>
                                </td>
                                <td>
                  <span class="status-badge status-active">
                    <i class="bi bi-check-circle"></i> Active
                  </span>
                                </td>
                                <td>
                                    <div class="date-info">
                                        <div class="date-primary">Jan 15, 2026</div>
                                        <small class="date-time">10:30 AM</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-action btn-action-view" data-bs-toggle="tooltip" title="View Details">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn-action btn-action-edit" data-bs-toggle="modal" data-bs-target="#editNetworkModal" data-bs-toggle="tooltip" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn-action btn-action-delete" data-bs-toggle="tooltip" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Network Row 2: AirtelTigo -->
                            <tr>
                                <td>
                                    <div class="drag-handle">
                                        <i class="bi bi-grip-vertical"></i>
                                    </div>
                                </td>
                                <td>
                                    <div class="network-info">
                                        <div class="network-logo" style="background: linear-gradient(135deg, #FF0000 0%, #DC143C 100%);">
                                            <span class="network-initial">A</span>
                                        </div>
                                        <div>
                                            <div class="network-name">AirtelTigo</div>
                                            <small class="text-muted">Merged Network Provider</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="code-badge">airteltigo</span>
                                </td>
                                <td>
                                    <div class="color-preview-wrapper">
                                        <div class="color-preview" style="background-color: #FF0000;"></div>
                                        <span class="color-code">#FF0000</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="description-text">Combined Airtel and Tigo network services</span>
                                </td>
                                <td>
                                    <span class="sort-badge">2</span>
                                </td>
                                <td>
                  <span class="status-badge status-active">
                    <i class="bi bi-check-circle"></i> Active
                  </span>
                                </td>
                                <td>
                                    <div class="date-info">
                                        <div class="date-primary">Jan 15, 2026</div>
                                        <small class="date-time">10:32 AM</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-action btn-action-view" data-bs-toggle="tooltip" title="View Details">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn-action btn-action-edit" data-bs-toggle="tooltip" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn-action btn-action-delete" data-bs-toggle="tooltip" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Network Row 3: Telecel -->
                            <tr>
                                <td>
                                    <div class="drag-handle">
                                        <i class="bi bi-grip-vertical"></i>
                                    </div>
                                </td>
                                <td>
                                    <div class="network-info">
                                        <div class="network-logo" style="background: linear-gradient(135deg, #00A650 0%, #008040 100%);">
                                            <span class="network-initial">T</span>
                                        </div>
                                        <div>
                                            <div class="network-name">Telecel</div>
                                            <small class="text-muted">Formerly Vodafone Ghana</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="code-badge">telecel</span>
                                </td>
                                <td>
                                    <div class="color-preview-wrapper">
                                        <div class="color-preview" style="background-color: #00A650;"></div>
                                        <span class="color-code">#00A650</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="description-text">Rebranded Vodafone network in Ghana</span>
                                </td>
                                <td>
                                    <span class="sort-badge">3</span>
                                </td>
                                <td>
                  <span class="status-badge status-active">
                    <i class="bi bi-check-circle"></i> Active
                  </span>
                                </td>
                                <td>
                                    <div class="date-info">
                                        <div class="date-primary">Jan 15, 2026</div>
                                        <small class="date-time">10:35 AM</small>
                                    </div>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn-action btn-action-view" data-bs-toggle="tooltip" title="View Details">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button class="btn-action btn-action-edit" data-bs-toggle="tooltip" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn-action btn-action-delete" data-bs-toggle="tooltip" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
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
                                <p class="mb-0 text-muted">Showing 1 to 3 of 3 entries</p>
                            </div>
                            <div class="col-md-6">
                                <nav>
                                    <ul class="pagination justify-content-md-end mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item disabled">
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

    <!-- ========================================
         ADD NETWORK MODAL
    ======================================== -->
    <div class="modal fade" id="addNetworkModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-plus-circle me-2"></i>Add New Network
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addNetworkForm">
                        <div class="row g-3">

                            <!-- Network Name -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Network Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" name="name" placeholder="e.g., MTN" required>
                            </div>

                            <!-- Network Code -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Network Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" name="code" placeholder="e.g., mtn" required>
                                <small class="text-muted">Lowercase, no spaces</small>
                            </div>

                            <!-- Brand Color -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Brand Color <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="color" class="form-control form-control-color" name="color" value="#FFCC00" required>
                                    <input type="text" class="form-control form-control-lg" name="color_code" value="#FFCC00" placeholder="#FFCC00" required>
                                </div>
                            </div>

                            <!-- Sort Order -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Sort Order <span class="text-danger">*</span></label>
                                <input type="number" class="form-control form-control-lg" name="sort_order" value="1" min="1" required>
                                <small class="text-muted">Display order on website</small>
                            </div>

                            <!-- Description -->
                            <div class="col-12">
                                <label class="form-label fw-bold">Description</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Brief description of the network..."></textarea>
                            </div>

                            <!-- Status -->
                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_active" id="addIsActive" checked>
                                    <label class="form-check-label fw-bold" for="addIsActive">
                                        Active Status
                                    </label>
                                    <small class="d-block text-muted">Enable this network for customers</small>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" form="addNetworkForm" class="btn btn-primary">
                        <i class="bi bi-check-circle me-2"></i>Add Network
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================
         EDIT NETWORK MODAL
    ======================================== -->
    <div class="modal fade" id="editNetworkModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-pencil me-2"></i>Edit Network
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="editNetworkForm">
                        <input type="hidden" name="id" value="1">

                        <div class="row g-3">

                            <!-- Network Name -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Network Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" name="name" value="MTN" required>
                            </div>

                            <!-- Network Code -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Network Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-lg" name="code" value="mtn" required>
                                <small class="text-muted">Lowercase, no spaces</small>
                            </div>

                            <!-- Brand Color -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Brand Color <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="color" class="form-control form-control-color" name="color" value="#FFCC00" required>
                                    <input type="text" class="form-control form-control-lg" name="color_code" value="#FFCC00" required>
                                </div>
                            </div>

                            <!-- Sort Order -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Sort Order <span class="text-danger">*</span></label>
                                <input type="number" class="form-control form-control-lg" name="sort_order" value="1" min="1" required>
                                <small class="text-muted">Display order on website</small>
                            </div>

                            <!-- Description -->
                            <div class="col-12">
                                <label class="form-label fw-bold">Description</label>
                                <textarea class="form-control" name="description" rows="3">Ghana's leading mobile network operator</textarea>
                            </div>

                            <!-- Status -->
                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_active" id="editIsActive" checked>
                                    <label class="form-check-label fw-bold" for="editIsActive">
                                        Active Status
                                    </label>
                                    <small class="d-block text-muted">Enable this network for customers</small>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" form="editNetworkForm" class="btn btn-primary">
                        <i class="bi bi-check-circle me-2"></i>Update Network
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================
         VIEW NETWORK MODAL
    ======================================== -->
    <div class="modal fade" id="viewNetworkModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-eye me-2"></i>Network Details
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="network-detail-view">

                        <!-- Network Header -->
                        <div class="network-detail-header text-center mb-4">
                            <div class="network-logo-large mb-3" style="background: linear-gradient(135deg, #FFCC00 0%, #FFA500 100%);">
                                <span class="network-initial-large">M</span>
                            </div>
                            <h3 class="mb-2">MTN</h3>
                            <span class="status-badge status-active">
              <i class="bi bi-check-circle"></i> Active
            </span>
                        </div>

                        <!-- Network Info Grid -->
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label">Network Code</label>
                                    <p class="detail-value">
                                        <span class="code-badge">mtn</span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label">Brand Color</label>
                                    <p class="detail-value">
                                    <div class="color-preview-wrapper">
                                        <div class="color-preview" style="background-color: #FFCC00;"></div>
                                        <span class="color-code">#FFCC00</span>
                                    </div>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label">Sort Order</label>
                                    <p class="detail-value">
                                        <span class="sort-badge">1</span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label">Total Bundles</label>
                                    <p class="detail-value">16 bundles</p>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="detail-item">
                                    <label class="detail-label">Description</label>
                                    <p class="detail-value">Ghana's leading mobile network operator</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label">Created At</label>
                                    <p class="detail-value">January 15, 2026 at 10:30 AM</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label">Last Updated</label>
                                    <p class="detail-value">January 15, 2026 at 10:30 AM</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editNetworkModal">
                        <i class="bi bi-pencil me-2"></i>Edit Network
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================================
         DELETE CONFIRMATION MODAL
    ======================================== -->
    <div class="modal fade" id="deleteNetworkModal" tabindex="-1">
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
                    <h5 class="mb-3">Delete Network?</h5>
                    <p class="text-muted mb-0">Are you sure you want to delete <strong>MTN</strong>? This action cannot be undone.</p>
                    <div class="alert alert-warning mt-3" role="alert">
                        <i class="bi bi-exclamation-circle me-2"></i>
                        <strong>Warning:</strong> All associated bundles will also be affected.
                    </div>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">
                        <i class="bi bi-trash me-2"></i>Yes, Delete
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin-cms>
