<script>
    var loader = ` <div class="linear-background">
                            <div class="inter-crop"></div>
                            <div class="inter-right--top"></div>
                            <div class="inter-right--bottom"></div>
                        </div>
        `;

    // Show Data Using YAJRA
    async function showData(routeOfShow,columns) {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: routeOfShow,
                columns: columns,
                order: [
                    [0, "DESC"]
                ],
                "language": {
                    "sProcessing": "جاري التحميل ..",
                    "sLengthMenu": "اظهار _MENU_ سجل",
                    "sZeroRecords": "لا يوجد نتائج",
                    "sInfo": "اظهار _START_ الى  _END_ من _TOTAL_ سجل",
                    "sInfoEmpty": "لا نتائج",
                    "sInfoFiltered": "للبحث",
                    "sSearch": "بحث :    ",
                    "oPaginate": {
                        "sPrevious": "السابق",
                        "sNext": "التالي",
                    },
                    buttons: {
                        copyTitle: 'تم النسخ للحافظة <i class="fa fa-check-circle text-success"></i>',
                        copySuccess: {
                            1: "تم نسخ صف واحد",
                            _: "تم نسخ %d صفوف بنجاح"
                        },
                    }
                },

                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'copy',
                        text: 'نسخ',
                        className: 'btn-primary'
                    },
                    {
                        extend: 'print',
                        text: 'طباعة',
                        className: 'btn-primary'
                    },
                    {
                        extend: 'excel',
                        text: 'اكسيل',
                        className: 'btn-primary'
                    },
                    // {
                    //     extend: 'pdf',
                    //     text: 'PDF',
                    //     className: 'btn-primary'
                    // },
                    {
                        extend: 'colvis',
                        text: 'عرض',
                        className: 'btn-primary'
                    },
                ]
            });
        }

    // Delete Using Ajax
    function deleteAny(routeOfDelete) {
        $(document).ready(function () {
            //Show data in the delete form
            $('#delete_modal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var title = button.data('title')
                var modal = $(this)
                modal.find('.modal-body #delete_id').val(id);
                modal.find('.modal-body #title').text(title);
            });
        });
        $(document).on('click', '#delete_btn', function (event) {
            var id = $("#delete_id").val();
            $.ajax({
                type: 'Delete',
                url: routeOfDelete,
                data: {
                    '_token': "{{csrf_token()}}",
                    'id': id,
                },
                success: function (data) {
                    if (data.status === 200) {
                        $("#dismiss_delete_modal")[0].click();
                        $('#dataTable').DataTable().ajax.reload();
                        toastr.success(data.message)
                    } else {
                        $("#dismiss_delete_modal")[0].click();
                        toastr.error(data.message)
                    }
                }
            });
        });
    }

    // Delete Using Ajax
    function destroyScript(routeOfDelete) {
        $(document).ready(function () {
            //Show data in the delete form
            $('#delete_modal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var title = button.data('title')
                var modal = $(this)
                modal.find('.modal-body #delete_id').val(id);
                modal.find('.modal-body #title').text(title);
            });
        });
        $(document).on('click', '#delete_btn', function (event) {
            var id = $("#delete_id").val();
            $.ajax({
                type: 'DELETE',
                url: routeOfDelete,
                data: {
                    '_token': "{{csrf_token()}}",
                    'id': id,
                },
                success: function (data) {
                    if (data.status === 200) {
                        $("#dismiss_delete_modal")[0].click();
                        $('#dataTable').DataTable().ajax.reload();
                        toastr.success(data.message)
                    } else {
                        $("#dismiss_delete_modal")[0].click();
                        toastr.error(data.message)
                    }
                }
            });
        });
    }
    // Delete Using Ajax
    function deleteScript(routeOfDelete) {
        $(document).ready(function () {
            //Show data in the delete form
            $('#delete_modal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var title = button.data('title')
                var modal = $(this)
                modal.find('.modal-body #delete_id').val(id);
                modal.find('.modal-body #title').text(title);
            });
        });
        $(document).on('click', '#delete_btn', function (event) {
            var id = $("#delete_id").val();
            $.ajax({
                type: 'POST',
                url: routeOfDelete,
                data: {
                    '_token': "{{csrf_token()}}",
                    'id': id,
                },
                success: function (data) {
                    if (data.status === 200) {
                        $("#dismiss_delete_modal")[0].click();
                        $('#dataTable').DataTable().ajax.reload();
                        toastr.success(data.message)
                    } else {
                        $("#dismiss_delete_modal")[0].click();
                        toastr.error(data.message)
                    }
                }
            });
        });
    }

    // show Add Modal
    function showAddModal(routeOfShow){
        $(document).on('click', '.addBtn', function () {
            $('#modal-body').html(loader)
            $('#editOrCreate').modal('show')
            setTimeout(function () {
                $('#modal-body').load(routeOfShow)
            }, 250)
        });
    }

    function addScript(){
        $(document).on('submit', 'Form#addForm', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            var url = $('#addForm').attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                beforeSend: function () {
                    $('#addButton').html('<span class="spinner-border spinner-border-sm mr-2" ' +
                        ' ></span> <span style="margin-left: 4px;">Wait ..</span>').attr('disabled', true);
                },
                success: function (data) {
                    if (data.status == 200) {
                        $('#dataTable').DataTable().ajax.reload();
                        toastr.success('Added successfully');
                    } else if(data.status == 405){
                        toastr.error(data.mymessage);
                    }
                    else
                        toastr.error('Something is wrong ..');
                    $('#addButton').html(`Add`).attr('disabled', false);
                    $('#editOrCreate').modal('hide')
                },
                error: function (data) {
                    if (data.status === 500) {
                        toastr.error('Something is wrong ..');
                    } else if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    toastr.error(value, 'Error');
                                });
                            }
                        });
                    } else
                        toastr.error('Something is wrong ..');
                    $('#addButton').html(`Add`).attr('disabled', false);
                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });
        });
    }

    function showEditModal(routeOfEdit){
        $(document).on('click', '.editBtn', function () {
            var id = $(this).data('id')
            var url = routeOfEdit;
            url = url.replace(':id', id)
            $('#modal-body').html(loader)
            $('#editOrCreate').modal('show')

            setTimeout(function () {
                $('#modal-body').load(url)
            }, 500)
        })
    }

    function editScript(){
        $(document).on('submit', 'Form#updateForm', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            var url = $('#updateForm').attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                beforeSend: function () {
                    $('#updateButton').html('<span class="spinner-border spinner-border-sm mr-2" ' +
                        ' ></span> <span style="margin-left: 4px;">Wait ..</span>').attr('disabled', true);
                },
                success: function (data) {
                    $('#updateButton').html(`Edit`).attr('disabled', false);
                    if (data.status == 200) {
                        $('#dataTable').DataTable().ajax.reload();
                        toastr.success('Updated successfully');
                    } else
                        toastr.error('Something is wrong ..');

                    $('#editOrCreate').modal('hide')
                },
                error: function (data) {
                    if (data.status === 500) {
                        toastr.error('Something is wrong ..');
                    } else if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    toastr.error(value, 'Error');
                                });
                            }
                        });
                    } else
                        toastr.error('Something is wrong ..');
                    $('#updateButton').html(`Edit`).attr('disabled', false);
                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });
        });
    }
</script>
