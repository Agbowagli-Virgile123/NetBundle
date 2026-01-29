<div class="bundle-card {{$package->is_active ? '' : 'inactive-card'}} ">
    <div class="bundle-card-header">
        <div class="bundle-network-badge" id="networkName" data-code="{{$package->network->code}}"  style="background: linear-gradient(135deg, {{$package->network->primary_color}} 0%, {{$package->network->secondary_color}} 100%);">
            <span class="network-initial"  >{{Str::upper(Str::substr($package->network->name, 0, 1)) }}</span>
        </div>
        <div class="bundle-actions">
            <div class="dropdown">
                <button class="btn-bundle-action dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i>
                </button>
                <ul class="dropdown-menu  dropdown-menu-end">
{{--                    <li>--}}
{{--                        <a class="dropdown-item view-bundle-btn" href="#" data-bundle-id="1">--}}
{{--                            <i class="bi bi-eye me-2"></i>View--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li>
                        <a class="dropdown-item edit-bundle-btn btn-action-edit"  data-bs-toggle="modal" data-bs-target="#editBundleModal" data-id="{{$package->id}}">
                            <i class="bi bi-pencil me-2"></i>Edit
                        </a>
                    </li>
{{--                    <li>--}}
{{--                        <a class="dropdown-item duplicate-bundle-btn" href="#" data-bundle-id="1">--}}
{{--                            <i class="bi bi-files me-2"></i>Duplicate--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item text-danger delete-bundle-btn" href="#" data-bs-toggle="modal" data-bs-target="#deleteBundleModal" data-id="{{$package->id}}" data-name="{{$package->name}}">
                            <i class="bi bi-trash me-2"></i>Delete
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="bundle-card-body">
        <div class="bundle-size">{{$package->data_amount}}</div>
        <div class="bundle-validity">{{$package->validity}}</div>
        @switch($package->validity_days)
            @case(1)
                <div class="bundle-type-badge daily-badge">Daily</div>
                @break

            @case(7)
                <div class="bundle-type-badge weekly-badge">Weekly</div>
                @break

            @case(30)
                <div class="bundle-type-badge monthly-badge">Monthly</div>
                @break

            @default
                <div class="bundle-type-badge badge text-warning">Undefined</div>
        @endswitch


        <div class="bundle-pricing">
            <div class="price-main">GH₵ {{$package->selling_price}}</div>
            <div class="price-cost text-muted">Cost: GH₵ {{$package->cost_price}}</div>
        </div>

{{--        <div class="bundle-stats">--}}
{{--            <div class="bundle-stat-item">--}}
{{--                <i class="bi bi-cart-check text-success"></i>--}}
{{--                <span>342 sales</span>--}}
{{--            </div>--}}
{{--            <div class="bundle-stat-item">--}}
{{--                <i class="bi bi-eye text-info"></i>--}}
{{--                <span>1.2k views</span>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    <div class="bundle-card-footer">
      <span class="status-badge {{$package->is_active ? 'status-active' : 'status-inactive'}}  ">
        <i class="bi {{$package->is_active ? 'bi-check-circle' : 'bi-x-circle'}} "></i>{{$package->is_active ? 'Active' : 'Inactive'}}
      </span>
        <div class="bundle-popularity">
            <i class="bi bi-{{$package->packageTag->icon ?? ''}}" style="color: {{$package->packageTag->color ?? ''}}" ></i>
            <span class="text-muted small">{{$package->packageTag->name}}</span>
        </div>
    </div>
</div>
