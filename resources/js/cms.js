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

function showViewLoader() {
    document.getElementById('view-network-loader').classList.remove('d-none');
    document.getElementById('view-network-content').classList.add('d-none');
}

function hideViewLoader() {
    document.getElementById('view-network-loader').classList.add('d-none');
    document.getElementById('view-network-content').classList.remove('d-none');
}


// Networks Management JavaScript
document.addEventListener('DOMContentLoaded', function() {

    //Network Add Modal
    ShowModalOnValidationFailed("openAddNetworkModal", "addNetworkModal");

    //Network Edit Modal
    ShowModalOnValidationFailed("openEditNetworkModal", "editNetworkModal");


    // Search functionality
    const searchInput = document.querySelector('.search-box input');
    if (searchInput) {
        searchInput.addEventListener('input', function () {
            const searchTerm = this.value.toLowerCase();
            const rows = document.querySelectorAll('.custom-table tbody tr');

            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(searchTerm) ? '' : 'none';
            });
        });
    }

    // Filter by status
    const statusFilter = document.querySelector('select.form-select');
    if (statusFilter) {
        statusFilter.addEventListener('change', function () {
            const filterValue = this.value;
            const rows = document.querySelectorAll('.custom-table tbody tr');

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
        });
    }


    //When View Modal Opens, store the network object globally
    let currentNetwork = null;

    document.getElementById('viewNetworkModal')
        .addEventListener('show.bs.modal', function (event) {

            const btn = event.relatedTarget;

            if (!btn) {
                console.error('View modal opened without a trigger button');
                return;
            }

            const networkId = btn.dataset.id;

            showViewLoader();

            fetch(`/admin/networks/${networkId}`)
                .then(res => res.json())
                .then(network => {
                    currentNetwork = network;
                    fillViewModal(network);
                    hideViewLoader();
                })
                .catch(() => {
                    hideViewLoader();
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
        form.querySelector('[name="sort_order"]').value = network.sort_order;
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

                fetch(`/admin/networks/${networkId}`)
                    .then(res => res.json())
                    .then(network => {
                        currentNetwork = network;
                        fillEditModal(network);
                    });

                return;
            }

            // 🔹 Case 2: Edit clicked from VIEW modal
            if (currentNetwork) {
                fillEditModal(currentNetwork);
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

});


//Bundles Management JavaScript
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

    // Edit Bundle - Populate form with data
    document.querySelectorAll('.edit-bundle-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const bundleId = this.getAttribute('data-bundle-id');

            // Here you would fetch bundle data and populate the form
            console.log('Editing bundle:', bundleId);

            // Example: populate form (you'd get this data from your backend)
            // document.querySelector('#editBundleForm input[name="bundle_id"]').value = bundleId;
        });
    });

// Delete Bundle - Show bundle name
    document.querySelectorAll('.delete-bundle-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const bundleId = this.getAttribute('data-bundle-id');

            // Update modal with bundle info
            document.getElementById('deleteBundleName').textContent = '1GB MTN Daily'; // Get from data
            document.getElementById('confirmDeleteBtn').setAttribute('data-bundle-id', bundleId);
        });
    });

// Confirm Delete
//     document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
//         const bundleId = this.getAttribute('data-bundle-id');
//
//         console.log('Deleting bundle:', bundleId);
//
//         // Here you would send delete request to backend
//         // After successful delete, close modal and remove card from view
//
//         alert('Bundle deleted successfully!');
//         bootstrap.Modal.getInstance(document.getElementById('deleteBundleModal')).hide();
//     });

// View Bundle
    document.querySelectorAll('.view-bundle-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const bundleId = this.getAttribute('data-bundle-id');
            console.log('Viewing bundle:', bundleId);
            // Open view modal or redirect to detail page
        });
    });

// Duplicate Bundle
    document.querySelectorAll('.duplicate-bundle-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const bundleId = this.getAttribute('data-bundle-id');
            console.log('Duplicating bundle:', bundleId);
            // Copy bundle data and open add modal with pre-filled data
        });
    });

});
