<x-layouts.admin-cms title="Bundles Management">
    <!-- Bundles Management Content -->
    <div class="dashboard-content">
        <div class="container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6 text-md-end">
                        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#addBundleModal">
                            <i class="bi bi-plus-circle me-2"></i>Add New Package
                        </button>
                    </div>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row g-4 mb-4">
                <x-cms.stats-card
                    bg-color="primary"
                    icon="box-seam"
                    stat-number="{{$packages->total()}}"
                    label="Total Packages"
                />

                 <x-cms.stats-card
                    bg-color="success"
                    icon="check-circle"
                    stat-number="{{$activePackages}}"
                    label="Actives Packages"
                />

                <x-cms.stats-card
                    bg-color="warning"
                    icon="star"
                    stat-number="{{$inactivePackages}}"
                    label="Inactives Packages"
                />

                <x-cms.stats-card
                    bg-color="info"
                    icon="currency-dollar"
                    stat-number="GH₵ 8.5k"
                    label="Total Revenue"
                />
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
                                @foreach($networks as $network)
                                    <option value="{{$network->code}}">{{$network->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Bundle Type Filter -->
                        <div class="col-md-3">
                            <label class="form-label fw-bold">Package Type</label>
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
                                <input type="text" class="form-control" placeholder="Search packages...">
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
                        @if($packages->count() > 0)
                            @foreach($packages as $package)
                                <x-cms.packge-card :package="$package" />
                            @endforeach
                        @else
                            <div class="row">
                                No Package Found
                            </div>
                        @endif
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
                                    <th>Tag</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if($packages->count() > 0)
                                        @foreach($packages as $package)
                                            <x-cms.package-list :package="$package" />
                                        @endforeach
                                    @else
                                        <tr class="text-center">
                                            <td colspan="9">No Package Found</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <!-- Pagination -->
                    <div class="mt-3">
                        {{$packages->links()}}
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
                        <i class="bi bi-plus-circle me-2"></i>Add New Package
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/admin/packages" id="addPackageForm">
                        @csrf
                        <div class="row g-3">

                            <!-- Network Selection -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Network <span class="text-danger">*</span></label>
                                <select class="form-select" name="network_id">
                                    <option value="">Select Network</option>
                                    @foreach($networks as $network)
                                        <option value="{{$network->id}}" {{old('network_id', true) ? 'selected' : ''}} >{{$network->name}}</option>
                                    @endforeach
                                </select>
                                @error('network_id', 'addPackage')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Bundle Type -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Package Type <span class="text-danger">*</span></label>
                                <select class="form-select" name="type">
                                    <option value="">Select Type</option>
                                    <option value="daily" {{old('type', true) ? 'selected' : ''}}>Daily</option>
                                    <option value="weekly" {{old('type', true) ? 'selected' : ''}}>Weekly</option>
                                    <option value="monthly" {{old('type', true) ? 'selected' : ''}}>Monthly</option>
                                </select>
                                @error('type', 'addPackage')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Package Tag -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Package Tag <span class="text-danger">*</span></label>
                                <select class="form-select" name="type">
                                    <option value="">Select Tag</option>
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}" {{old('tag', true) ? 'selected' : ''}}>{{$tag->name}}</option>
                                    @endforeach
                                </select>
                                @error('tag', 'addPackage')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Data Size -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Data Size <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="data_size" value="{{old('data_size')}}" placeholder="5">
                                    <select class="form-select" name="data_unit" style="max-width: 100px;">
                                        <option value="MB" {{old('data_unit', true) ? 'selected' : ''}}>MB</option>
                                        <option value="GB" {{old('data_unit', true) ? 'selected' : ''}}>GB</option>
                                    </select>
                                </div>
                                @error('data_size', 'addPackage')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Validity Period -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Validity Period <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="validity_value" value="{{old('validity_value')}}" placeholder="7">
                                    <select class="form-select" name="validity_unit" style="max-width: 120px;">
                                        <option value="hours" {{old('validity_unit', true) ? 'selected' : ''}}>Hours</option>
                                        <option value="days" {{old('validity_unit', true) ? 'selected' : ''}}>Days</option>
                                        <option value="months" {{old('validity_unit', true) ? 'selected' : ''}}>Months</option>
                                    </select>
                                </div>
                                @error('validity_value', 'addPackage')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Selling Price -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Selling Price (GH₵) <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="price" value="{{old('price')}}"  placeholder="20.00" step="0.01">
                                @error('price', 'addPackage')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Agent Price -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Agent Price (GH₵)</label>
                                <input type="number" class="form-control" name="agent_cost" value="{{old('agent_cost')}}" placeholder="18.00" step="0.01">
                                @error('agent_cost', 'addPackage')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Cost Price -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Cost Price (GH₵) <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="cost" value="{{old('cost')}}" placeholder="17.00" step="0.01">
                                @error('cost', 'addPackage')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Package Code -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Package Code</label>
                                <input type="text" class="form-control" name="code" value="{{old('code')}}">
                                @error('code', 'addPackage')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Stock Limit -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Stock Limit</label>
                                <input type="number" class="form-control" name="limit" value="{{old('limit')}}" placeholder="100" step="1">
                                @error('limit', 'addPackage')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Description -->
                            <div class="col-12">
                                <label class="form-label fw-bold">Description</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Package description...">{{old('description')}}</textarea>
                                @error('description', 'addPackage')
                                    <small class="text-danger fst-italic">{{ $message }}</small>
                                @enderror
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
                        btn-text="Add Package"
                        form="addPackageForm"
                    />
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

@if ($errors->addPackage->any())
    <div id="openAddPackageModal"></div>
@endif

@if ($errors->editPackage->any())
    <div id="openEditPackageModal"></div>
@endif
