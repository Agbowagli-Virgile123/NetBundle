import * as bootstrap from 'bootstrap';

//Function to format date and time
export const formatDate = (dateTimeStr) => {
    const date = new Date(dateTimeStr);
    const day = date.getDate();
    const month = date.toLocaleString("en-US", { month: "short" });
    const year = date.getFullYear();

    const getDaySuffix = (day)=> {
        if (day >= 11 && day <= 13) return "th";
        switch (day % 10) {
            case 1:
                return "st";
            case 2:
                return "nd";
            case 3:
                return "rd";
            default:
                return "th";
        }
    };

    return `${day}${getDaySuffix(day)} ${month} ${year}`;
};
export const formatTime = (dateTimeStr) => {
    const date = new Date(dateTimeStr);
    const hours = date.getHours() % 12 || 12; // convert to 12-hour format
    const minutes = date.getMinutes().toString().padStart(2, "0");
    const ampm = date.getHours() >= 12 ? "PM" : "AM";
    return `${hours}:${minutes} ${ampm}`;
};

export const formatDateTime = (dateTimeStr,mode = "both") => {
    if (mode === "date") {
        return formatDate(dateTimeStr);
    } else if (mode === "time") {
        return formatTime(dateTimeStr);
    } else {
        return `${formatDate(dateTimeStr)} ${formatTime(dateTimeStr)}`;
    }
};

//Function to show the modals when the validation fails
function ShowModalOnValidationFailed(flag, modalId){
    const openModalFlag = document.getElementById(flag);

    if (openModalFlag) {
        const modal = new bootstrap.Modal(
            document.getElementById(modalId),
        );
        modal.show();
    }
}

function showViewLoader(content, loader) {
    document.getElementById(loader).classList.remove('d-none');
    document.getElementById(content).classList.add('d-none');
}

function hideViewLoader(content, loader) {
    document.getElementById(loader).classList.add('d-none');
    document.getElementById(content).classList.remove('d-none');
}


// ==========================================
// 7. TOAST NOTIFICATION HELPER
// ==========================================

function showToast(message, type = 'success') {
    // Create toast container if it doesn't exist
    let toastContainer = document.querySelector('.toast-container');
    if (!toastContainer) {
        toastContainer = document.createElement('div');
        toastContainer.className = 'toast-container position-fixed top-0 end-0 p-3';
        toastContainer.style.zIndex = '9999';
        document.body.appendChild(toastContainer);
    }

    // Create toast
    const toastId = 'toast-' + Date.now();
    const bgClass = type === 'success' ? 'bg-success' : type === 'error' ? 'bg-danger' : 'bg-warning';
    const icon = type === 'success' ? 'check-circle' : type === 'error' ? 'x-circle' : 'exclamation-circle';

    const toastHTML = `
              <div id="${toastId}" class="toast align-items-center text-white ${bgClass} border-0" role="alert">
                <div class="d-flex">
                  <div class="toast-body">
                    <i class="bi bi-${icon} me-2"></i>${message}
                  </div>
                  <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
              </div>
            `;

    toastContainer.insertAdjacentHTML('beforeend', toastHTML);

    const toastElement = document.getElementById(toastId);
    const toast = new bootstrap.Toast(toastElement, {
        autohide: true,
        delay: 3000
    });

    toast.show();

    // Remove toast after it's hidden
    toastElement.addEventListener('hidden.bs.toast', function() {
        toastElement.remove();
    });
}


document.addEventListener('DOMContentLoaded', function() {
    const successFlash = document.querySelector('.flash-success');
    if (successFlash) {
        showToast(successFlash.textContent.trim(), 'success');
    }

    const ErrorFlash = document.querySelector('.flash-error');
    if (ErrorFlash) {
        showToast(ErrorFlash.textContent.trim(), 'error');
    }


    //Network Add Modal
    ShowModalOnValidationFailed("openAddNetworkModal", "addNetworkModal");

    //Network Edit Modal
    ShowModalOnValidationFailed("openEditNetworkModal", "editNetworkModal");

    //Packages Add Modal
    ShowModalOnValidationFailed("openAddPackageModal", "addBundleModal");

    //Packages Edit Modal
    ShowModalOnValidationFailed("openEditPackageModal", "editBundleModal");

    //Admin Crediting Agent Wallet Modal
    ShowModalOnValidationFailed("openCreditWalletModal", "creditWalletModal");

    // Search functionality
    const searchInput = document.querySelector('.search-box input');
    if (searchInput) {
        searchInput.addEventListener('input', function () {
            const searchTerm = this.value.toLowerCase();
            const rows = document.querySelectorAll('.custom-table tbody tr');
            const cards = document.querySelectorAll('.bundle-card')

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });

            cards.forEach(card => {
                const text = card.textContent.toLowerCase();
                card.style.display = text.includes(searchTerm) ? '' : 'none';
            });

        });
    }

    // Filter by status
    // const statusFilter = document.getElementById('statusFilter');
    // if (statusFilter) {
    //     statusFilter.addEventListener('change', function () {
    //         const filterValue = this.value;
    //         const rows = document.querySelectorAll('.custom-table tbody tr');
    //         const cards = document.querySelectorAll('.bundles-grid >.bundle-card');
    //         rows.forEach(row => {
    //
    //             if (filterValue === '') {
    //                 row.style.display = '';
    //             } else {
    //                 const statusBadge = row.querySelector('.status-badge');
    //                 const isActive = statusBadge.classList.contains('status-active');
    //
    //                 if (filterValue === 'active' && isActive) {
    //                     row.style.display = '';
    //                 } else if (filterValue === 'inactive' && !isActive) {
    //                     row.style.display = '';
    //                 } else {
    //                     row.style.display = 'none';
    //                 }
    //             }
    //         });
    //
    //         cards.forEach(card => {
    //
    //             if (filterValue === '') {
    //                 card.style.display = '';
    //             } else {
    //                 const statusBadge = card.querySelector('.status-badge');
    //                 const isActive = statusBadge.classList.contains('status-active');
    //
    //                 if (filterValue === 'active' && isActive) {
    //                     card.style.display = '';
    //                 } else if (filterValue === 'inactive' && !isActive) {
    //                     card.style.display = '';
    //                 } else {
    //                     card.style.display = 'none';
    //                 }
    //             }
    //         });
    //     });
    // }


    // Networks Management JavaScript
    //When View Modal Opens, store the network object globally
    let currentNetwork = null;
    const viewNetworkModal = document.getElementById('viewNetworkModal');

    if(!viewNetworkModal){
        return;
    }

    viewNetworkModal
        .addEventListener('show.bs.modal', function (event) {

            const btn = event.relatedTarget;

            if (!btn) {
                console.error('View modal opened without a trigger button');
                return;
            }

            const networkId = btn.dataset.id;

            showViewLoader('view-network-content', 'view-network-loader');

            fetch(`/admin/networks/${networkId}`)
                .then(res => res.json())
                .then(network => {
                    currentNetwork = network;
                    fillViewModal(network);
                    hideViewLoader('view-network-content', 'view-network-loader');
                })
                .catch(() => {
                    hideViewLoader('view-network-content', 'view-network-loader');
                    document.getElementById('view-network-content').innerHTML =
                    `<div class="alert alert-danger text-center">
                        Failed to load network details.
                     </div>`;
                });
    });

    function fillViewModal(network) {
        const firstLetterEl = document.getElementById('first-letter');
        firstLetterEl.innerHTML =
            `<span class="network-initial-large">${network.name.charAt(0)}</span>`;
        firstLetterEl.style.background =
            `linear-gradient(135deg, ${network.primary_color}, ${network.secondary_color})`;

            document.getElementById('network-name').textContent = network.name;
            document.getElementById('description').textContent = network.description;
            document.getElementById('network-code').textContent = network.code;
            document.getElementById('sort-order').textContent = network.sort_order;
            document.getElementById('created-at').textContent =
            formatDateTime(network.created_at);

        const statusEl = document.getElementById('status');
        if (network.is_active) {
            statusEl.className = 'status-badge status-active';
            statusEl.innerHTML = '<i class="bi bi-check-circle"></i> Active';
        } else {
            statusEl.className = 'status-badge status-inactive';
            statusEl.innerHTML = '<i class="bi bi-x-circle"></i> Inactive';
        }

        document.getElementById('color-preview').innerHTML = `
        <div class="color-preview" style="background:${network.primary_color}"></div>
        <span class="color-code">${network.primary_color}</span>`;
    }


    function fillEditModal(network) {
        const form = document.getElementById('editNetworkForm');

        form.action = `/admin/networks/${network.id}`;

        form.querySelector('[name="name"]').value = network.name;
        form.querySelector('[name="code"]').value = network.code;
        form.querySelector('[name="short_description"]').value = network.short_description;
        form.querySelector('[name="description"]').value = network.description;
        form.querySelector('[name="primary_color"]').value = network.primary_color;
        form.querySelector('[name="secondary_color"]').value = network.secondary_color;
        form.querySelector('[name="is_active"]').checked = network.is_active;
    }

    document.getElementById('editNetworkModal')
        .addEventListener('show.bs.modal', function (event) {

            const btn = event.relatedTarget;

            // 🔹 Case 1: Edit clicked from table
            if (btn && btn.classList.contains('btn-action-edit')) {
                const networkId = btn.dataset.id;

                showViewLoader('editNetworkForm', 'edit-network-loader');

                fetch(`/admin/networks/${networkId}`)
                    .then(res => res.json())
                    .then(network => {
                        currentNetwork = network;
                        fillEditModal(network);
                        hideViewLoader('editNetworkForm', 'edit-network-loader');
                    });

                return;
            }

            // 🔹 Case 2: Edit clicked from VIEW modal
            if (currentNetwork) {
                fillEditModal(currentNetwork);
                hideViewLoader('editNetworkForm', 'edit-network-loader');
            }
        });



    //Delete Network Modal
    document.getElementById('deleteNetworkModal')
        .addEventListener('show.bs.modal', function (event) {

            const btn = event.relatedTarget;

            if (!btn) {
                console.error('View modal opened without a trigger button');
                return;
            }

            document.getElementById('deleteNetworkForm').action= `/admin/networks/${btn.dataset.id}`;
            document.getElementById('deleteNetworkName').innerText= btn.dataset.name;
    });


    document.getElementById('viewNetworkModal')
    .addEventListener('hidden.bs.modal', function () {

        document.getElementById('view-network-content').classList.add('d-none');
        document.getElementById('view-network-loader').classList.remove('d-none');
    });

 document.getElementById('editNetworkModal')
    .addEventListener('hidden.bs.modal', function () {

        document.getElementById('editNetworkForm').classList.add('d-none');
        document.getElementById('edit-network-loader').classList.remove('d-none');
    });

});


//Packages Management JavaScript
document.addEventListener('DOMContentLoaded', function() {

    // View Toggle (Grid/List)
    const gridBtn = document.querySelector('.btn-group button:first-child');
    const listBtn = document.querySelector('.btn-group button:last-child');
    const bundlesGrid = document.querySelector('.bundles-grid');
    const bundlesList = document.querySelector('.bundles-list');

    if (gridBtn && listBtn) {
        gridBtn.addEventListener('click', function() {
            // Show grid view
            bundlesGrid.style.display = 'grid';
            bundlesList.style.display = 'none';

            // Update button states
            gridBtn.classList.add('active');
            listBtn.classList.remove('active');
        });

        listBtn.addEventListener('click', function() {
            // Show list view
            bundlesGrid.style.display = 'none';
            bundlesList.style.display = 'block';

            // Update button states
            listBtn.classList.add('active');
            gridBtn.classList.remove('active');
        });
    }


    //Filter Based on network
    const networkFilter = document.getElementById('networkFilter');
    if (networkFilter) {
        networkFilter.addEventListener('change', function () {
            const filterValue = this.value;
            const rows = document.querySelectorAll('.custom-table tbody tr');
            const cards = document.querySelectorAll('.bundles-grid >.bundle-card');
            rows.forEach(row => {

                if (filterValue === '') {
                    row.style.display = '';
                } else {
                    const networkData = row.querySelector('#networkName');
                    const networkValue = networkData.dataset.code;
                    if (filterValue === networkValue) {
                        row.style.display = '';
                    }else {
                        row.style.display = 'none';
                    }
                }
            });

            cards.forEach(card => {

                if (filterValue === '') {
                    card.style.display = '';
                } else {
                    const networkData = card.querySelector('#networkName');
                    const networkValue = networkData.dataset.code;
                    if (filterValue === networkValue) {
                        card.style.display = '';
                    }else {
                        card.style.display = 'none';
                    }
                }
            });
        });
    }


    //Filter Based on type
    const packageTypeFilter = document.getElementById('typeFilter');
    if (packageTypeFilter) {
        packageTypeFilter.addEventListener('change', function () {
            const filterValue = this.value;
            const rows = document.querySelectorAll('.custom-table tbody tr');
            const cards = document.querySelectorAll('.bundles-grid >.bundle-card');
            rows.forEach(row => {

                if (filterValue === '') {
                    row.style.display = '';
                } else {
                    const typeValue = row.querySelector('.bundle-type-badge').innerText;
                    if (filterValue === typeValue.toLowerCase()) {
                        row.style.display = '';
                    }else {
                        row.style.display = 'none';
                    }
                }
            });

            cards.forEach(card => {

                if (filterValue === '') {
                    card.style.display = '';
                } else {
                    const typeValue = card.querySelector('.bundle-type-badge').innerText;
                    if (filterValue === typeValue.toLowerCase()) {
                        card.style.display = '';
                    }else {
                        card.style.display = 'none';
                    }
                }
            });
        });
    }


    // Edit Bundle - Populate form with data
    function fillPackageEditModal(bundle){
        const form = document.getElementById('editBundleForm');

        form.action = `/admin/packages/${bundle.id}`;

        const name = bundle.name;

        // extract data size + unit
        const dataMatch = name.match(/(\d+(?:\.\d+)?)(MB|GB|TB)/i);
        const dataSize = dataMatch ? dataMatch[1] : '';
        const dataUnit = dataMatch ? dataMatch[2].toUpperCase() : '';

        // extract type
        const typeMatch = name.match(/\b(Daily|Weekly|Monthly|Yearly)\b/i);
        const type = typeMatch ? typeMatch[1] : '';

        const validity = (bundle.validity || '').trim();

        const match = validity.match(/^(\d+)?\s*(.+)$/);

        const validityValue = match && match[1] ? match[1] : '';
        const validityUnit  = match && match[2] ? match[2].trim() : '';


        form.querySelector('[name="network_id"]').value = bundle.network_id;
        form.querySelector('[name="tag"]').value = bundle.package_tag_id;
        form.querySelector('[name="type"]').value = type;
        form.querySelector('[name="data_size"]').value = dataSize;
        form.querySelector('[name="data_unit"]').value = dataUnit;
        form.querySelector('[name="validity_value"]').value = validityValue;
        form.querySelector('[name="validity_unit"]').value = validityUnit;
        form.querySelector('[name="price"]').value = bundle.selling_price;
        form.querySelector('[name="agent_price"]').value = bundle.agent_price;
        form.querySelector('[name="cost"]').value = bundle.cost_price;
        form.querySelector('[name="code"]').value = bundle.package_code;
        form.querySelector('[name="limit"]').value = bundle.stock_limit;
        form.querySelector('[name="description"]').value = bundle.description;
        form.querySelector('[name="is_active"]').checked = bundle.is_active;

    }

    const editBundleModal = document.getElementById('editBundleModal');

    if(!editBundleModal){
        return;
    }

    editBundleModal.addEventListener('show.bs.modal', function (event){
            const btn = event.relatedTarget;

            if (btn && btn.classList.contains('btn-action-edit')) {
                const packageId = btn.dataset.id;

                showViewLoader('editBundleForm', 'edit-package-loader');

                fetch(`/admin/packages/${packageId}`)
                    .then(res => res.json())
                    .then(bundle => {
                        fillPackageEditModal(bundle);
                        hideViewLoader('editBundleForm', 'edit-package-loader');
                    });
            }

        });

    // Delete Bundle - Show bundle name
    document.getElementById('deleteBundleModal')
        .addEventListener('show.bs.modal', function (event) {

            const btn = event.relatedTarget;

            if (!btn) {
                console.error('View modal opened without a trigger button');
                return;
            }

            document.getElementById('deleteBundleForm').action= `/admin/packages/${btn.dataset.id}`;
            document.getElementById('deleteBundleName').innerText= btn.dataset.name;
    });

});


//Agents Management
/* ========================================
AGENTS MANAGEMENT PAGE JAVASCRIPT
======================================== */
document.addEventListener('DOMContentLoaded', function() {
        // ==========================================
        // 1. EXPANDABLE ROWS FUNCTIONALITY
        // ==========================================

        const expandButtons = document.querySelectorAll('.btn-expand');

        expandButtons.forEach(button => {
            const targetId = button.getAttribute('data-bs-target');
            const targetCollapse = document.querySelector(targetId);

            if (targetCollapse) {
                // Add event listeners for collapse events
                targetCollapse.addEventListener('show.bs.collapse', function() {
                    button.classList.remove('collapsed');
                });

                targetCollapse.addEventListener('hide.bs.collapse', function() {
                    button.classList.add('collapsed');
                    console.log('Collapsing agent details:', targetId);
                });
            }
        });

        // ==========================================
        // 2. COPY REFERRAL CODE
        // ==========================================
        const copyButtons = document.querySelectorAll('.btn-copy-code');
        copyButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const code = this.getAttribute('data-code');

                console.log(code);

                // Copy to clipboard
                navigator.clipboard.writeText(code).then(() => {
                    // Change icon to checkmark
                    const icon = this.querySelector('i');
                    const originalClass = icon.className;
                    icon.className = 'bi bi-check';

                    // Show success message
                    showToast('Referral code copied!', 'success');

                    // Reset icon after 2 seconds
                    setTimeout(() => {
                        icon.className = originalClass;
                    }, 2000);
                }).catch(err => {
                    console.error('Failed to copy:', err);
                    showToast('Failed to copy code', 'error');
                });
            });
        });

        // ==========================================
        // 3. FILTERS FUNCTIONALITY
        // ==========================================

        const statusFilter = document.getElementById('statusFilter');
        const verificationFilter = document.getElementById('verificationFilter');
        const commissionFilter = document.getElementById('commissionFilter');
        const dateFilter = document.getElementById('dateFilter');
        const searchInput = document.querySelector('.search-box input');

        // Status Filter
        if (statusFilter) {
            statusFilter.addEventListener('change', function() {
                const filterValue = this.value;
                // console.log('Status filter changed:', filterValue);
                filterAgents();
            });
        }

        // Verification Filter
        if (verificationFilter) {
            verificationFilter.addEventListener('change', function() {
                const filterValue = this.value;
                //console.log('Verification filter changed:', filterValue);
                filterAgents();
            });
        }

        // Commission Filter
        if (commissionFilter) {
            commissionFilter.addEventListener('change', function() {
                const filterValue = this.value;
                console.log('Commission filter changed:', filterValue);
                filterAgents();
            });
        }

        // Search
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                //console.log('Search term:', searchTerm);
                filterAgents();
            });
        }

        // Filter Agents Function
        function filterAgents() {
            const rows = document.querySelectorAll('.expandable-row');
            const statusValue = statusFilter ? statusFilter.value : '';
            const verificationValue = verificationFilter ? verificationFilter.value : '';
            const searchTerm = searchInput ? searchInput.value.toLowerCase() : '';

            rows.forEach(row => {
                let showRow = true;

                // Status Filter
                if (statusValue) {
                    const statusBadge = row.querySelector('.status-badge');
                    const isActive = statusBadge && statusBadge.classList.contains('status-active');

                    if (statusValue === 'active' && !isActive) showRow = false;
                    if (statusValue === 'inactive' && isActive) showRow = false;
                }

                // Verification Filter
                if (verificationValue) {
                    const verifiedBadge = row.querySelector('.verified-badge');
                    const isVerified = verifiedBadge && verifiedBadge.classList.contains('verified');

                    if (verificationValue === 'verified' && !isVerified) showRow = false;
                    if (verificationValue === 'unverified' && isVerified) showRow = false;
                }

                // Search Filter
                if (searchTerm) {
                    const rowText = row.textContent.toLowerCase();
                    if (!rowText.includes(searchTerm)) showRow = false;
                }

                // Show/Hide Row
                row.style.display = showRow ? '' : 'none';

                // Also hide the collapse row
                const collapseRow = row.nextElementSibling;
                if (collapseRow && collapseRow.classList.contains('collapse-row')) {
                    collapseRow.style.display = showRow ? '' : 'none';
                }
            });
        }

        // ==========================================
        // 4. FORM SUBMISSIONS
        // ==========================================
       //Function to prepare the agent modal action forms
        function fillAgentRelatedModalForm(formId,agentId){
            const form = document.getElementById(formId);
            if (form) {
                form.querySelector('input[name="agent_id"]').value = agentId;
            }
        }

        //Show Credit wallet Modal
        const  creditWalletModal = document.getElementById('creditWalletModal');
        if (creditWalletModal) {
            creditWalletModal.addEventListener('shown.bs.modal', (event) => {
                const btn = event.relatedTarget;
                if(btn){
                    const id = btn.dataset.id;
                    showViewLoader('creditWalletForm', 'credit-wallet-loader')
                    fillAgentRelatedModalForm('creditWalletForm',id);
                    hideViewLoader('creditWalletForm', 'credit-wallet-loader')
                }
            })
        }


        // Debit Wallet Form
        const debitWalletForm = document.getElementById('debitWalletForm');
        if (debitWalletForm) {
            debitWalletForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(this);
                const data = Object.fromEntries(formData);

                console.log('Debiting wallet:', data);

                showToast('Wallet debited successfully!', 'success');
                bootstrap.Modal.getInstance(document.getElementById('debitWalletModal')).hide();
                this.reset();
            });
        }

        // ==========================================
        // 5. DROPDOWN ACTIONS
        // ==========================================

        // Handle dropdown menu clicks
        document.addEventListener('click', function(e) {
            // Verify Agent
            if (e.target.closest('.dropdown-item') && e.target.textContent.includes('Verify')) {
                e.preventDefault();
                const agentRow = e.target.closest('.expandable-row');
                const agentId = agentRow ? agentRow.getAttribute('data-agent-id') : null;

                if (confirm('Are you sure you want to verify this agent?')) {
                    console.log('Verifying agent:', agentId);
                    showToast('Agent verified successfully!', 'success');

                    // Update UI
                    const verifiedBadge = agentRow.querySelector('.verified-badge');
                    if (verifiedBadge) {
                        verifiedBadge.className = 'verified-badge verified';
                        verifiedBadge.innerHTML = '<i class="bi bi-patch-check-fill"></i> Verified';
                    }
                }
            }

            // Deactivate Agent
            if (e.target.closest('.dropdown-item') && e.target.textContent.includes('Deactivate')) {
                e.preventDefault();
                const agentRow = e.target.closest('.expandable-row');
                const agentId = agentRow ? agentRow.getAttribute('data-agent-id') : null;

                if (confirm('Are you sure you want to deactivate this agent?')) {
                    console.log('Deactivating agent:', agentId);
                    showToast('Agent deactivated successfully!', 'success');

                    // Update UI
                    const statusBadge = agentRow.querySelector('.status-badge');
                    if (statusBadge) {
                        statusBadge.className = 'status-badge status-inactive';
                        statusBadge.innerHTML = '<i class="bi bi-x-circle"></i> Inactive';
                    }
                }
            }
        });

        // ==========================================
        // 6. WITHDRAWAL APPROVAL/REJECTION
        // ==========================================

        document.addEventListener('click', function(e) {
            // Approve Withdrawal
            if (e.target.closest('.btn-success') && e.target.textContent.includes('Approve')) {
                e.preventDefault();
                const withdrawalItem = e.target.closest('.withdrawal-item');

                if (confirm('Approve this withdrawal request?')) {
                    console.log('Approving withdrawal');
                    showToast('Withdrawal approved!', 'success');

                    // Update badge
                    const badge = withdrawalItem.querySelector('.badge');
                    if (badge) {
                        badge.className = 'badge bg-success';
                        badge.textContent = 'Approved';
                    }

                    // Hide action buttons
                    const actions = withdrawalItem.querySelector('.withdrawal-actions');
                    if (actions) {
                        actions.style.display = 'none';
                    }
                }
            }

            // Reject Withdrawal
            if (e.target.closest('.btn-danger') && e.target.textContent.includes('Reject')) {
                e.preventDefault();
                const withdrawalItem = e.target.closest('.withdrawal-item');

                if (confirm('Reject this withdrawal request?')) {
                    console.log('Rejecting withdrawal');
                    showToast('Withdrawal rejected!', 'warning');

                    // Update badge
                    const badge = withdrawalItem.querySelector('.badge');
                    if (badge) {
                        badge.className = 'badge bg-danger';
                        badge.textContent = 'Rejected';
                    }

                    // Hide action buttons
                    const actions = withdrawalItem.querySelector('.withdrawal-actions');
                    if (actions) {
                        actions.style.display = 'none';
                    }
                }
            }
        });

        // ==========================================
        // 8. INITIALIZE TOOLTIPS
        // ==========================================

        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

        // ==========================================
        // 9. AUTO-CLOSE DROPDOWNS ON SCROLL
        // ==========================================

        window.addEventListener('scroll', function() {
            const openDropdowns = document.querySelectorAll('.dropdown-menu.show');
            openDropdowns.forEach(dropdown => {
                const bsDropdown = bootstrap.Dropdown.getInstance(dropdown.previousElementSibling);
                if (bsDropdown) {
                    bsDropdown.hide();
                }
            });
        });

        console.log('Agents page JavaScript initialized successfully');
    });
