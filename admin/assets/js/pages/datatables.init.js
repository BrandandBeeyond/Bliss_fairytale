$(document).ready(function() {
    $("#datatable").DataTable({
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'></i>",
                next: "<i class='mdi mdi-chevron-right'></i>"
            }
        },
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
        }
    });

    var a = $("#datatable-buttons").DataTable({
        lengthChange: false,
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'></i>",
                next: "<i class='mdi mdi-chevron-right'></i>"
            }
        },
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
        },
        buttons: [
            "copy",
            {
                text: '<i class="mdi mdi-file-excel-outline"></i> Excel',
                extend: "excel"
            },
           
            {
                text: '<i class="mdi mdi-file-pdf-outline"></i> PDF',
                extend: "pdf"
            },
            "colvis"
        ]
    });

    a.buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");
    $(".dataTables_length select").addClass("form-select form-select-sm");

    $("#selection-datatable").DataTable({
        select: {
            style: "multi"
        },
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'></i>",
                next: "<i class='mdi mdi-chevron-right'></i>"
            }
        },
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
        }
    });

    $("#key-datatable").DataTable({
        keys: true,
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'></i>",
                next: "<i class='mdi mdi-chevron-right'></i>"
            }
        },
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
        }
    });

    $("#alternative-page-datatable").DataTable({
        pagingType: "full_numbers",
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
            $(".dataTables_length select").addClass("form-select form-select-sm");
        }
    });

    $("#scroll-vertical-datatable").DataTable({
        scrollY: "350px",
        scrollCollapse: true,
        paging: false,
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'></i>",
                next: "<i class='mdi mdi-chevron-right'></i>"
            }
        },
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
        }
    });

    $("#complex-header-datatable").DataTable({
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'></i>",
                next: "<i class='mdi mdi-chevron-right'></i>"
            }
        },
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
            $(".dataTables_length select").addClass("form-select form-select-sm");
        },
        columnDefs: [{
            visible: false,
            targets: -1
        }]
    });

    $("#state-saving-datatable").DataTable({
        stateSave: true,
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'></i>",
                next: "<i class='mdi mdi-chevron-right'></i>"
            }
        },
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
            $(".dataTables_length select").addClass("form-select form-select-sm");
        }
    });
});
