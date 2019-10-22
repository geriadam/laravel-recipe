$(document).ready(function ($) {
    // Datepicker
    $('.datepicker').datetimepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd hh:ii:ss',
        todayBtn: 'linked',
    });

    $('.datepicker-date').datepicker({
        todayHighlight: true,
        format: 'yyyy-mm-dd',
        todayBtn: 'linked',
    });
    // Default All DataTables
    $('#datatables').DataTable({
        "responsive": {
            "details": {
                "display": $.fn.dataTable.Responsive.display.modal({
                    header: function (row) {
                        var data = row.data();
                        return 'Details for ' + data[0];
                    }
                }),
                "renderer": function (api, rowIdx, columns) {
                    var data = $.map(columns, function (col, i) {
                        if (i !== columns.length - 1) {
                            return '<tr>' +
                                '<td>' + col.title + '</td> ' +
                                '<td>' + '&nbsp;:&nbsp;' + '</td>' +
                                '<td>' + col.data + '</td>' +
                                '</tr>';
                        }
                    }).join('');
                    return $('<table/>').append(data);
                },
            }
        },
        "columnDefs": [{
            "responsivePriority": 2,
            "targets": -1
        }],
        "order": [[0, "desc"]],
        "language": {
            "emptyTable": "Data Masih Kosong, Silahkan Melakukan Pencarian Data Terlebih Dahulu."
        }
    });
    // Predefind Range
    $('#filterdate').daterangepicker({
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        alwaysShowCalendars: true,
        autoUpdateInput: false,
        locale: {
            format: 'DD MMMM YYYY'
        }
    }, function (start, end, label) {
        console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
    });

    $('#filterdate').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('DD MMMM YYYY') + ' - ' + picker.endDate.format('DD MMMM YYYY'));
    });
    
    // Alert Delete
    $(document).on('click', '#btn-delete', function (e) {
        e.preventDefault();
        var link = $(this);
        swal({
                title: "Confirm Delete",
                text: "Are you sure to delete this item?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: true
            },
            function (isConfirm) {
                if (isConfirm) {
                    window.location = link.attr('href');
                } else {
                    swal("cancelled", "Deletion Cancelled", "error");
                }
            });
    });

    $('.colorpicker').colorpicker();
});
