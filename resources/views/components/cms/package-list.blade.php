<tr>
    <td>
        <div class="d-flex align-items-center gap-2">
            <div class="bundle-network-badge" style="background: linear-gradient(135deg, {{$package->network->primary_color}} 0%, {{$package->network->secondary_color}} 100%); width: 35px; height: 35px;">
                <span class="network-initial" style="font-size: 1rem;">{{Str::upper(Str::substr($package->network->name, 0, 1)) }}</span>
            </div>
            <div>
                <div class="fw-bold">{{$package->data_amount}}</div>
                <small class="text-muted">{{$package->validity}}</small>
            </div>
        </div>
    </td>
    <td id="networkName" data-code="{{$package->network->code}}" >{{Str::upper($package->network->name)}}</td>

    @switch($package->validity_days)
        @case(1)
            <td><span class="bundle-type-badge daily-badge">Daily</span></td>
            @break

        @case(7)
            <td><span class="bundle-type-badge weekly-badge">Weekly</span></td>
            @break

        @case(30)
            <td><span class="bundle-type-badge monthly-badge">Monthly</span></td>
            @break

        @default
            <td><span class="bundle-type-badge badge text-warning">Undefined</span></td>

    @endswitch

    <td class="fw-bold">GH₵ {{$package->selling_price}}</td>
    <td class="text-muted">GH₵ {{$package->cost_price}}</td>
    <td>
        <div class="bundle-popularity">
            <i class="bi bi-{{$package->packageTag->icon ?? ''}}" style="color: {{$package->packageTag->color ?? ''}}" ></i>
            <span class="text-muted small">{{$package->packageTag->name}}</span>
        </div>
    </td>
    <td><span class="status-badge {{$package->is_active ? 'status-active' : 'status-inactive'}}"><i class="bi {{$package->is_active ? 'bi-check-circle' : 'bi-x-circle'}} "></i> {{$package->is_active ? 'Active' : 'Inactive'}}</span></td>
    <td>
        <div class="action-buttons">
{{--            <button class="btn-action btn-action-view"><i class="bi bi-eye"></i></button>--}}
            <button class="btn-action btn-action-edit"
                data-bs-target="#editBundleModal"
                data-bs-toggle="modal"
                data-id="{{$package->id}}"
                title="Edit Package" >
                <i class="bi bi-pencil"></i>
            </button>
            <button class="btn-action btn-action-delete"
               data-bs-target="#deleteBundleModal"
                data-id="{{$package->id}}"
                data-name="{{$package->name}}"
               title="Delete Package"
                data-bs-toggle="modal">
                <i class="bi bi-trash"></i>
            </button>
        </div>
    </td>
</tr>
