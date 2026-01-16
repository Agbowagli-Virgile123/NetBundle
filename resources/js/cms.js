// Networks Management JavaScript
document.addEventListener('DOMContentLoaded', function() {

    // Initialize tooltips
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

    // Color picker sync
    const colorInputs = document.querySelectorAll('input[type="color"]');
    colorInputs.forEach(colorInput => {
        const textInput = colorInput.nextElementSibling;

        colorInput.addEventListener('input', function() {
            textInput.value = this.value.toUpperCase();
        });

        textInput.addEventListener('input', function() {
            if (/^#[0-9A-F]{6}$/i.test(this.value)) {
                colorInput.value = this.value;
            }
        });
    });

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

    // Drag and drop for reordering (basic example)
    let draggedRow = null;

    const tableBody = document.querySelector('.custom-table tbody');
    if (tableBody) {
        tableBody.addEventListener('dragstart', function(e) {
            if (e.target.tagName === 'TR') {
                draggedRow = e.target;
                e.target.style.opacity = '0.5';
            }
        });

        tableBody.addEventListener('dragend', function(e) {
            if (e.target.tagName === 'TR') {
                e.target.style.opacity = '';
                draggedRow = null;
            }
        });

        tableBody.addEventListener('dragover', function(e) {
            e.preventDefault();
            const afterElement = getDragAfterElement(tableBody, e.clientY);
            if (afterElement == null) {
                tableBody.appendChild(draggedRow);
            } else {
                tableBody.insertBefore(draggedRow, afterElement);
            }
        });
    }

    function getDragAfterElement(container, y) {
        const draggableElements = [...container.querySelectorAll('tr:not(.dragging)')];

        return draggableElements.reduce((closest, child) => {
            const box = child.getBoundingClientRect();
            const offset = y - box.top - box.height / 2;

            if (offset < 0 && offset > closest.offset) {
                return { offset: offset, element: child };
            } else {
                return closest;
            }
        }, { offset: Number.NEGATIVE_INFINITY }).element;
    }

    // Make rows draggable
    const tableRows = document.querySelectorAll('.custom-table tbody tr');
    tableRows.forEach(row => {
        row.setAttribute('draggable', 'true');
    });

});
