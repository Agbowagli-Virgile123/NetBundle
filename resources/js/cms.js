import * as bootstrap from 'bootstrap';

// Networks Management JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const openModalFlag = document.getElementById('openAddNetworkModal');

    if (openModalFlag) {
        const modal = new bootstrap.Modal(
            document.getElementById('addNetworkModal')
        );
        modal.show();
    }


    // Initialize tooltips
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));


    // View button click
    const viewButtons = document.querySelectorAll('.btn-action-view');
    viewButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const modal = new bootstrap.Modal(document.getElementById('viewNetworkModal'));
            modal.show();
        });
    });

    // Delete button click
    const deleteButtons = document.querySelectorAll('.btn-action-delete');
    deleteButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const modal = new bootstrap.Modal(document.getElementById('deleteNetworkModal'));
            modal.show();
        });
    });



    // Search functionality
    const searchInput = document.querySelector('.search-box input');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
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
        statusFilter.addEventListener('change', function() {
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

});
