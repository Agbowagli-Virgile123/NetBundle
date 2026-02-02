<x-layouts.admin-cms title="Networks Management">
    <!-- Networks Management Content -->
    <div class="dashboard-content">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-md-6">
{{--                        <h2 class="page-heading">Networks Management</h2>--}}
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
                    stat-number="{{$totalPackages}}"
                    label="Total Packages"
                />
            </div>

            <!-- Networks Table Card -->
            <div class="content-card">
                <div class="card-header-custom">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h5 class="mb-0">All Networks</h5>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="d-flex gap-2 justify-content-md-end flex-column flex-md-row">
                                <!-- Search -->
                                <div class="search-box">
                                    <i class="bi bi-search"></i>
                                    <input type="text" class="form-control" placeholder="Search networks...">
                                </div>

                                <!-- Filter -->
                                <select class="form-select" id="statusFilter" style="max-width: 150px;">
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
                                @if($networks->count() > 0)
                                    @foreach($networks as $network)
                                        <x-cms.network-row :network="$network" />
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="9" class="text-center">
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
                    <form method="POST" action="/admin/networks" enctype="multipart/form-data" id="addNetworkForm">
                        @csrf
                        <div class="row g-3">

                            <!-- Network Name -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Network Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="e.g., MTN">
                                @error('name', 'addNetwork')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Network Code -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Network Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="code" value="{{old('code')}}" placeholder="e.g., mtn">
                                @if($errors->addNetwork->has('code'))
                                    <small class="text-danger fst-italic">
                                        {{ $errors->addNetwork->first('code') }}
                                    </small>
                                @else
                                    <small class="text-muted">Lowercase, no spaces</small>
                                @endif

                            </div>

                            <!-- Primary Color -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Primary Color <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="color" class="form-control form-control-color" name="primary_color" value="#FFCC00">
                                    @if(
                                        $errors->addNetwork->has('primary_color')
                                    )
                                        <small class="text-danger fst-italic">
                                            {{ $errors->addNetwork->first('primary_color')}}
                                        </small>
                                    @endif

                                </div>
                            </div>

                            <!-- Secondary Color -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Secondary Color <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="color" class="form-control form-control-color" name="secondary_color" value="#FFA500">
                                    @if($errors->addNetwork->has('secondary_color'))
                                        <small class="text-danger fst-italic">{{ $errors->addNetwork->first('secondary_color') }}</small>
                                    @endif
                                </div>
                            </div>

                            <!-- Short Description -->
                            <div class="col-12">
                                <label class="form-label fw-bold">Short Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="short_description" rows="1" placeholder="Brief description of the network...">{{old('short_description')}}</textarea>
                                @error('short_description', 'addNetwork')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="col-12">
                                <label class="form-label fw-bold">Description</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Long description of the network...">{{old('description')}}</textarea>
                                @error('description', 'addNetwork')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Logo -->
                            <div class="col-12">
                                <label class="form-label fw-bold">Logo </label>
                                <input type="file" class="form-control" name="logo">
                                @error('logo', 'addNetwork')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_active" value="1" id="addIsActive" {{old('is_active', true) ? 'checked' : ''}}>
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
                    <x-submit-btn
                        class-name="btn-primary"
                        icon-class="check-circle me-2"
                        btn-text="Add Network"
                        form="addNetworkForm"
                    />
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

                    <!-- Loading Spinner -->
                    <div id="edit-network-loader" class="text-center py-5 d-none">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="mt-3">Loading network details...</div>
                    </div>

                    <form method="POST" class="d-none" enctype="multipart/form-data" id="editNetworkForm"  >
                        @csrf
                        @method('PATCH')
                        <div class="row g-3">

                            <!-- Network Name -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Network Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="e.g., MTN">
                                @error('name', 'editNetwork')
                                <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Network Code -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Network Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="code" value="{{old('code')}}" placeholder="e.g., mtn">
                                @if($errors->editNetwork->has('code'))
                                    <small class="text-danger fst-italic">{{$errors->editNetwork->first('code')}}</small>
                                @else
                                    <small class="text-muted">Lowercase, no spaces</small>
                                @endif
                            </div>

                            <!-- Primary Color -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Primary Color <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="color" class="form-control form-control-color" name="primary_color" value="#FFCC00">

                                    @if($errors->editNetwork->has('primary_color'))
                                        <small class="text-danger fst-italic">
                                            {{ $errors->editNetwork->first('primary_color')}}
                                        </small>
                                    @endif
                                </div>
                            </div>

                            <!-- Secondary Order -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Secondary Color <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="color" class="form-control form-control-color" name="secondary_color" value="#FFA500">
                                </div>
                                @if($errors->editNetwork->has('secondary_color'))
                                    <small class="text-danger fst-italic">{{ $errors->editNetwork->first('secondary_color') }}</small>
                                @endif
                            </div>

                            <!-- Short Description -->
                            <div class="col-12">
                                <label class="form-label fw-bold">Short Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="short_description" rows="1" placeholder="Brief description of the network...">{{old('short_description')}}</textarea>
                                @error('short_description', 'editNetwork')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="col-12">
                                <label class="form-label fw-bold">Description</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Long description of the network...">{{old('description')}}</textarea>
                                @error('description', 'editNetwork')
                                <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Logo -->
                            <div class="col-12">
                                <label class="form-label fw-bold">Logo </label>
                                <input type="file" class="form-control" name="logo">
                                @error('logo', 'editNetwork')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Status -->
                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="is_active" value="1" id="addIsActive" {{old('is_active', true) ? 'checked' : ''}}>
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
                    <x-submit-btn
                        class-name="btn-primary"
                        icon-class="check-circle me-2"
                        btn-text="Update Network"
                        form="editNetworkForm"
                    />
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

                    <!-- Loading Spinner -->
                    <div id="view-network-loader" class="text-center py-5 d-none">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="mt-3">Loading network details...</div>
                    </div>


                    <div class="network-detail-view  d-none" id="view-network-content">

                        <!-- Network Header -->
                        <div class="network-detail-header text-center mb-2">
                            <div class="network-logo-large mb-3 " id="first-letter" style="">

                            </div>
                            <h3 class="mb-2" id="network-name"></h3>
                            <span class="" id="status">
{{--                              <i class="bi bi-check-circle"></i> <span class="">Active</span>--}}
                            </span>
                        </div>

                        <!-- Network Info Grid -->
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label" >Network Code</label>
                                    <p class="detail-value">
                                        <span class="code-badge" id="network-code"></span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label">Brand Color</label>
{{--                                    <p class="detail-value">--}}
                                    <div class="color-preview-wrapper" id="color-preview">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label">Sort Order</label>
                                    <p class="detail-value">
                                        <span class="sort-badge" id="sort-order" ></span>
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
                                    <p class="detail-value" id="description">

                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="detail-item">
                                    <label class="detail-label">Created At</label>
                                    <p class="detail-value" id="created-at"></p>
                                </div>
                            </div>

{{--                            <div class="col-md-6">--}}
{{--                                <div class="detail-item">--}}
{{--                                    <label class="detail-label">Last Updated</label>--}}
{{--                                    <p class="detail-value">January 15, 2026 at 10:30 AM</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editNetworkModal" id="network-detail-editBtn">
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
                    <p class="text-muted mb-0">Are you sure you want to delete <strong id="deleteNetworkName"></strong>? This action cannot be undone.</p>
                    <div class="alert alert-warning mt-3" role="alert">
                        <i class="bi bi-exclamation-circle me-2"></i>
                        <strong>Warning:</strong> All associated bundles will also be affected.
                    </div>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <x-submit-btn
                        class-name="btn-danger"
                        icon-class="bi-trash me-2"
                        btn-text="Yes, Delete"
                        form="deleteNetworkForm"
                    />
                </div>

{{--                Delete form--}}
                <div class="visually-hidden">
                    <form method="POST" id="deleteNetworkForm" >
                        @csrf
                        @method('DELETE')
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-layouts.admin-cms>


@if ($errors->addNetwork->any())
    <div id="openAddNetworkModal"></div>
@endif

@if ($errors->editNetwork->any())
    <div id="openEditNetworkModal"></div>
@endif


