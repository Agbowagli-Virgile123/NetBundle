

<tr>
    <td>
        <div class="drag-handle">
            <i class="bi bi-grip-vertical"></i>
        </div>
    </td>
    <td>
        <div class="network-info">

            <div class="network-logo"  style="background: linear-gradient(135deg, {{ $network->primary_color }} 0%, {{ $network->secondary_color }} 100%);" >
                <span class="network-initial">{{Str::upper(Str::substr($network->name, 0, 1))}}</span>
            </div>
            <div>
                <div class="network-name">{{Str::upper($network->name)}}</div>
                <small class="text-muted">{{$network->short_description}}</small>
            </div>
        </div>
    </td>
    <td>
        <span class="code-badge">{{Str::lower(Str::replace(' ', '', $network->code))}}</span>
    </td>
    <td>
        <div class="color-preview-wrapper">
            <div class="color-preview" style="background-color: {{$network->primary_color}};"></div>
            <span class="color-code">{{$network->primary_color}}</span>
        </div>
    </td>
    <td>
        <span class="description-text">{{$network->description ?? 'N/A'  }}</span>
    </td>
    <td>
        <span class="sort-badge">{{$network->sort_order}}</span>
    </td>
    <td>
      <span class="status-badge {{$network->is_active ? 'status-active' : 'status-inactive'}}">
        <i class="bi {{ $network->is_active ? 'bi-check-circle' : 'bi-x-circle' }}"></i> {{$network->is_active ? 'Active' : 'Inactive'}}
      </span>
    </td>
    <td>
        <div class="date-info">
            <div class="date-primary">{{ $network->created_at->format('M d, Y') }}</div>
            <small class="date-time">{{  (string)$network->created_at->format('h:i A') }}</small>
        </div>
    </td>
    <td>
        <div class="action-buttons">
            <button class="btn-action btn-action-view"
                data-id="{{$network->id}}"
                data-name="{{$network->name}}"
                data-is_active="{{$network->is_active}}"
                data-code="{{$network->code}}"
                data-primary_color="{{$network->primary_color}}"
                data-secondary_color="{{$network->secondary_color}}"
                data-sort_order="{{$network->sort_order}}"
                data-short_description="{{$network->short_description}}"
                data-description="{{$network->description}}"
                data-created_at="{{$network->created_at}}"
                data-bs-toggle="modal"
                data-bs-target="#viewNetworkModal"
                title="View Details">
                <i class="bi bi-eye"></i>
            </button>
            <button class="btn-action btn-action-edit" id="network-detail-editBtn"
                    data-id="{{$network->id}}"
                    data-name="{{$network->name}}"
                    data-is_active="{{$network->is_active}}"
                    data-code="{{$network->code}}"
                    data-primary_color="{{$network->primary_color}}"
                    data-secondary_color="{{$network->secondary_color}}"
                    data-sort_order="{{$network->sort_order}}"
                    data-short_description="{{$network->short_description}}"
                    data-description="{{$network->description}}"
                    data-created_at="{{$network->created_at}}"
                    data-bs-toggle="modal"
                    data-bs-target="#editNetworkModal"
                    title="Edit">
                <i class="bi bi-pencil"></i>
            </button>
            <button class="btn-action btn-action-delete"  data-id="{{$network->id}}" data-name="{{$network->name}}" data-bs-toggle="modal" data-bs-target="#deleteNetworkModal" title="Delete">
                <i class="bi bi-trash"></i>
            </button>
        </div>
    </td>
</tr>
