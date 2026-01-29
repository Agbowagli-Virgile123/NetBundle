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


document.addEventListener('DOMContentLoaded', function() {

    //Network Add Modal
    ShowModalOnValidationFailed("openAddNetworkModal", "addNetworkModal");

    //Network Edit Modal
    ShowModalOnValidationFailed("openEditNetworkModal", "editNetworkModal");

    //Packages Add Modal
    ShowModalOnValidationFailed("openAddPackageModal", "addBundleModal");

    //Packages Edit Modal
    ShowModalOnValidationFailed("openEditPackageModal", "editBundleModal");


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
    const statusFilter = document.getElementById('statusFilter');
    if (statusFilter) {
        statusFilter.addEventListener('change', function () {
            const filterValue = this.value;
            const rows = document.querySelectorAll('.custom-table tbody tr');
            const cards = document.querySelectorAll('.bundles-grid >.bundle-card');
            rows.forEach(row => {

                if (filterValue === '') {
                    row.style.display = '';
                } else {
                    const statusBadge = row.querySelector('.status-badge');
                    const isActive = statusBadge.classList.contains('status-active');

                    if (filterValue === 'active' && isActive) {
                        row.style.display = '';
                    } else if (filterValue === 'inactive' && !isActive) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                }
            });

            cards.forEach(card => {

                if (filterValue === '') {
                    card.style.display = '';
                } else {
                    const statusBadge = card.querySelector('.status-badge');
                    const isActive = statusBadge.classList.contains('status-active');

                    if (filterValue === 'active' && isActive) {
                        card.style.display = '';
                    } else if (filterValue === 'inactive' && !isActive) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                }
            });
        });
    }


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

    document.getElementById('editBundleModal')
        .addEventListener('show.bs.modal', function (event){
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
