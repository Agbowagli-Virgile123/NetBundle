<x-layouts.admin-cms title="Networks Management">
    <!-- Networks Management Content -->
    <div class="dashboard-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-md-6">

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
                <x-cms.stats-card
                    bg-color="primary"
                    icon="diagram-3"
                    stat-number="{{$networks->total()}}"
                    label="Total Networks"
                />

                <x-cms.stats-card
                    bg-color="success"
                    icon="check-circle"
                    stat-number="{{$activecount}}"
                    label="Active Networks"
                />

                <x-cms.stats-card
                    bg-color="warning"
                    icon="clock-history"
                    stat-number="{{$inactivecount}}"
                    label="Inactive Networks"
                />

                <x-cms.stats-card
                    bg-color="info"
                    icon="box-seam"
                    stat-number="48"
                    label="Total Bundles"
                />
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
                                <th style="width: 50px">#</th>
                                <th>Network</th>
                                <th>Code</th>
                                <th>Color</th>
                                <th>Description</th>
                                <th>Sort Order</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th style="width: 150px">Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                                @if($networks)
                                    @foreach($networks as $network)
                                        <x-cms.network-row :network="$network" />
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="89" class="text-center">
                                            No Network Found
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="table-footer">
                        {{$networks->links()}}
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
                    <form method="POST" action="/admin/networks" id="addNetworkForm">
                        @csrf
                        <div class="row g-3">

                            <!-- Network Name -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Network Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" placeholder="e.g., MTN">
                                @error('name')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Network Code -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Network Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="code" placeholder="e.g., mtn">
                                @if($errors->has('code'))
                                    @error('code')
                                        <small class="text-danger fst-italic">{{ $message }}</small>
                                    @enderror
                                @else
                                    <small class="text-muted">Lowercase, no spaces</small>
                                @endif
                            </div>

                            <!-- Brand Color -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Brand Colors <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="color" class="form-control form-control-color" name="primary_color" value="#FFCC00">
                                    <input type="color" class="form-control form-control-color" name="secondary_color" value="#FFA500">
                                    @error(['primary_color','secondary_color'])
                                        <small class="text-danger fst-italic">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Sort Order -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Sort Order <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="sort_order" value="1" min="1">
                                @if($errors->has('sort_order'))
                                    @error('sort_order')
                                        <small class="text-danger fst-italic">{{ $message }}</small>
                                    @enderror
                                @else
                                    <small class="text-muted">Display order on website</small>
                                @endif
                            </div>

                            <!-- Short Description -->
                            <div class="col-12">
                                <label class="form-label fw-bold">Short Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="short_description" rows="1" placeholder="Brief description of the network..."></textarea>
                                @error('short_description')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="col-12">
                                <label class="form-label fw-bold">Description</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Long description of the network..."></textarea>
                                @error('description')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Logo -->
                            <div class="col-12">
                                <label class="form-label fw-bold">Logo </label>
                                <input type="file" class="form-control" name="logo">
                                @error('logo')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
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
