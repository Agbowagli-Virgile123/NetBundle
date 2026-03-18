<!-- Order Row -->
<tr class="expandable-row" data-order-id="1">
    <td>
        <button class="btn-expand" data-bs-toggle="collapse" data-bs-target="#orderDetails1">
            <i class="bi bi-chevron-right"></i>
        </button>
    </td>
    <td>
        <div class="order-info">
            <div class="order-number">{{$order->order_number}}</div>
            <small class="text-muted">ID: #{{$order->id}}</small>
        </div>
    </td>
    <td>
        <div class="agent-mini-info">
            <div class="agent-mini-avatar">
                <i class="bi bi-person-circle"></i>
            </div>
            <div>
                <div class="agent-mini-name">{{$order->agent->first_name." ".$order->agent->last_name}}</div>
                <small class="text-muted">{{$order->agent->referral_code}}</small>
            </div>
        </div>
    </td>
    <td>
        <div class="package-info">
            <div class="network-mini-badge" style="background: linear-gradient(135deg, {{$order->network->primary_color}} 0%, {{$order->network->secondary_color}} 100%);">
                <span>{{Str::upper(Str::substr($order->network->name, 0, 1))}}</span>
            </div>
            <div>
                <div class="package-name">{{$order->network->name}} {{$order->package->data_amount}}</div>
                <small class="text-muted">{{$order->package->validity}}</small>
            </div>
        </div>
    </td>
    <td>
        <div class="recipient-info">
            <div class="recipient-phone">
                <i class="bi bi-phone text-muted"></i>
                <span>{{$order->receipient_phone}}</span>
            </div>
            <small class="text-muted">{{$order->recipient_name}}</small>
        </div>
    </td>
    <td>
        <div class="amount-info">
            <div class="amount-main">{{currencyFormat($order->total_amount)}}</div>
            <small class="text-success">+{{currencyFormat($order->commission_amount)}}</small>
        </div>
    </td>
    <td>
        <div class="payment-info">
            @switch($order->payment_method)
                @case('wallet')
                    <span class="payment-badge wallet-payment">
                      <i class="bi bi-wallet2"></i> Wallet
                    </span>
                    @break
                @case('paystack')
                    <span class="payment-badge paystack-payment">
                      <i class="bi bi-credit-card"></i> Paystack
                    </span>
                    @break
                @case('cash')
                    <span class="payment-badge cash-payment">
                      <i class="bi bi-cash"></i> Cash
                    </span>
                    @break
                @default
                    <span class="payment-badge wallet-payment">
                      <i class="bi bi-wallet2"></i> Wallet
                    </span>
            @endswitch

            @switch($order->payment_status)
                @case('paid')
                        <span class="payment-status-badge paid">Paid</span>
                        @break
                @case('pending')
                        <span class="payment-status-badge pending">Pending</span>
                        @break
                @case('failed')
                        <span class="payment-status-badge failed">Failed</span>
                        @break
                @case('refunded')
                        <span class="payment-status-badge refunded">Refunded</span>
                        @break
                @default
                        <span class="payment-status-badge pending">Pending</span>
                        @break

            @endswitch
        </div>
    </td>
    <td>
        @switch($order->ststus)
            @case('')
        @endswitch

      <span class="order-status-badge status-failed status-completed status-processing status-pending">
        <i class="bi bi-clock-history"></i> Pending
        <i class="bi bi-check-circle"></i> Completed
        <i class="bi bi-x-circle"></i> Failed
        <i class="bi bi-x-circle"></i> Failed
      </span>
    </td>
    <td>
        <div class="date-info">
            <div class="date-primary">{{$order->created_at->format('M, Y, Y')}}</div>
            <small class="date-time">{{$order->created_at->format('h:i A')}}</small>
        </div>
    </td>
    <td>
        <div class="dropdown">
            <button class="btn-action-menu" data-bs-toggle="dropdown">
                <i class="bi bi-three-dots-vertical"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#"><i class="bi bi-eye me-2"></i>View Details</a></li>
                <li><a class="dropdown-item text-success process-order-btn" href="#" data-order-id="1"><i class="bi bi-arrow-right-circle me-2"></i>Process Order</a></li>
                <li><a class="dropdown-item text-warning retry-order-btn" href="#" data-order-id="1"><i class="bi bi-arrow-clockwise me-2"></i>Retry</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger cancel-order-btn" href="#" data-order-id="1"><i class="bi bi-x-circle me-2"></i>Cancel</a></li>
            </ul>
        </div>
    </td>
</tr>

<!-- Expandable Details Row -->
<tr class="collapse-row">
    <td colspan="10" class="p-0">
        <div class="collapse order-details-collapse" id="orderDetails1">
            <div class="order-details-panel">
                <div class="row g-4">

                    <!-- Left Column - Order Info -->
                    <div class="col-md-6">
                        <h6 class="section-subtitle">Order Information</h6>
                        <div class="info-list">
                            <div class="info-item">
                                <span class="info-label">Order Number:</span>
                                <span class="info-value"><code>{{$order->order_number}}</code></span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Package:</span>
                                <span class="info-value">{{$order->network->name}} {{$order->package->data_amount}} {{$order->package->validity}}</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Recipient Phone:</span>
                                <span class="info-value">{{$order->receipient_phone}}</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Recipient Name:</span>
                                <span class="info-value">{{$order->receipient_name}}</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Agent:</span>
                                <span class="info-value">{{$order->agent->first_name." ".$order->agent->last_name}} ({{$order->agent->referral_code}})</span>
                            </div>
                        </div>

                        <h6 class="section-subtitle mt-4">Pricing Details</h6>
                        <div class="info-list">
                            <div class="info-item">
                                <span class="info-label">Package Price:</span>
                                <span class="info-value">{{currencyFormat($order->total_amount)}}</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Cost Price:</span>
                                <span class="info-value">GH₵ 17.00</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Commission:</span>
                                <span class="info-value text-success">{{currencyFormat($order->commission_amount)}}</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label fw-bold">Total Amount:</span>
                                <span class="info-value fw-bold">{{currencyFormat($order->total_amount)}}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Status & API -->
                    <div class="col-md-6">
                        <h6 class="section-subtitle">Status & Payment</h6>
                        <div class="info-list">
                            <div class="info-item">
                                <span class="info-label">Order Status:</span>
                                <span class="info-value">
                                <span class="order-status-badge status-pending">
                                  <i class="bi bi-clock-history"></i> Pending
                                </span>
                              </span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Payment Method:</span>
                                <span class="info-value">
                                <span class="payment-badge wallet-payment">
                                  <i class="bi bi-wallet2"></i> Wallet
                                </span>
                              </span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Payment Status:</span>
                                <span class="info-value">
                                <span class="payment-status-badge paid">Paid</span>
                              </span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Payment Reference:</span>
                                <span class="info-value"><code>PAY-123456</code></span>
                            </div>
                        </div>

                        <h6 class="section-subtitle mt-4">API Details</h6>
                        <div class="info-list">
                            <div class="info-item">
                                <span class="info-label">API Reference:</span>
                                <span class="info-value"><code>API-REF-789</code></span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Retry Count:</span>
                                <span class="info-value">0</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Failure Reason:</span>
                                <span class="info-value text-muted">N/A</span>
                            </div>
                        </div>

                        <h6 class="section-subtitle mt-4">Timestamps</h6>
                        <div class="info-list">
                            <div class="info-item">
                                <span class="info-label">Created:</span>
                                <span class="info-value">Jan 29, 2026 at 10:30 AM</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Paid At:</span>
                                <span class="info-value">Jan 29, 2026 at 10:31 AM</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Processed At:</span>
                                <span class="info-value text-muted">Not yet</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">Completed At:</span>
                                <span class="info-value text-muted">Not yet</span>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="col-12">
                        <h6 class="section-subtitle">Quick Actions</h6>
                        <div class="d-flex gap-2 flex-wrap">
                            <button class="btn btn-sm btn-success process-order-btn" data-order-id="1">
                                <i class="bi bi-arrow-right-circle me-1"></i>Process Order
                            </button>
                            <button class="btn btn-sm btn-warning retry-order-btn" data-order-id="1">
                                <i class="bi bi-arrow-clockwise me-1"></i>Retry Delivery
                            </button>
                            <button class="btn btn-sm btn-info">
                                <i class="bi bi-receipt me-1"></i>Generate Receipt
                            </button>
                            <button class="btn btn-sm btn-secondary refund-order-btn" data-order-id="1">
                                <i class="bi bi-arrow-counterclockwise me-1"></i>Refund Order
                            </button>
                            <button class="btn btn-sm btn-danger cancel-order-btn" data-order-id="1">
                                <i class="bi bi-x-circle me-1"></i>Cancel Order
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </td>
</tr>
