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

// Networks Management JavaScript
document.addEventListener('DOMContentLoaded', function() {

    //Network Add Modal
    ShowModalOnValidationFailed("openAddNetworkModal", "addNetworkModal");

    //Network Edit Modal
    ShowModalOnValidationFailed("openEditNetworkModal", "editNetworkModal");


    // Initialize tooltips
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

    // Delete button click
    const deleteButtons = document.querySelectorAll('.btn-action-delete');
    deleteButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            const modal = new bootstrap.Modal(document.getElementById('deleteNetworkModal'));
            modal.show();
        });
    });


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
    let currentNetwork = {};

    document.getElementById('viewNetworkModal')
        .addEventListener('show.bs.modal', function (event) {

            const btn = event.relatedTarget;

            if (!btn) {
                console.error('View modal opened without a trigger button');
                return;
            }

            currentNetwork = {
                id: btn.dataset.id,
                name: btn.dataset.name,
                is_active: btn.dataset.is_active,
                code: btn.dataset.code,
                primary_color: btn.dataset.primary_color,
                secondary_color: btn.dataset.secondary_color,
                sort_order: btn.dataset.sort_order,
                short_description: btn.dataset.short_description,
                description: btn.dataset.description,
                created_at: btn.dataset.created_at,
            };

            // Fill view modal
            const firstLetterEl = document.getElementById('first-letter');

            firstLetterEl.innerHTML = `<span class="network-initial-large" >${currentNetwork.name.charAt(0)}</span>`;
            firstLetterEl.style = `background: linear-gradient(135deg, ${currentNetwork.primary_color} 0%, ${currentNetwork.secondary_color} 100%)`;

            //Network Name
            document.getElementById('network-name').textContent = currentNetwork.name;

            //Desc
            document.getElementById('description').textContent = currentNetwork.description;

            //code
            document.getElementById('network-code').textContent = currentNetwork.code;

            // Status
            const statusEl = document.getElementById('status');

            if (currentNetwork.is_active) {
                statusEl.className = 'status-badge status-active';
                statusEl.innerHTML = '<i class="bi bi-check-circle"></i> Active';
            } else {
                statusEl.className = 'status-badge status-inactive';
                statusEl.innerHTML = '<i class="bi bi-x-circle"></i> Inactive';
            }

            //Preview Color
            const previewColorEl = document.getElementById('color-preview');

            previewColorEl.innerHTML = `<div class="color-preview" style="background-color: ${currentNetwork.primary_color};"></div>
                                        <span class="color-code">${currentNetwork.primary_color}</span>`;

            //Sort order
            document.getElementById('sort-order').textContent = currentNetwork.sort_order;

            //Create At
            document.getElementById('created-at').textContent = `${formatDateTime(currentNetwork.created_at)}`;
        });

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

            const btn = event.relatedTarget; // ✅ always correct

            // Case 1: opened from LIST page
            if (btn && btn.classList.contains('btn-action-edit')) {
                currentNetwork = {
                    id: btn.dataset.id,
                    name: btn.dataset.name,
                    is_active: btn.dataset.is_active == 1,
                    code: btn.dataset.code,
                    primary_color: btn.dataset.primary_color,
                    secondary_color: btn.dataset.secondary_color,
                    sort_order: btn.dataset.sort_order,
                    short_description: btn.dataset.short_description,
                    description: btn.dataset.description,
                    created_at: btn.dataset.created_at,
                };
            }

            // Case 2: opened from VIEW modal
            // currentNetwork is already set → do nothing

            if (!currentNetwork.id) return;

            fillEditModal(currentNetwork);
        });

});
