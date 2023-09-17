@extends('admin/layouts/master')

@section('title')
    {{ $setting->title ?? '' }} | Reviews
@endsection
@section('page_name')
    Reviews
@endsection
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Reviews {{ $setting->title ?? '' }}</h3>
                    {{-- <div class="">
                        <button class="btn btn-secondary btn-icon text-white addBtn">
									<span>
										<i class="fe fe-plus"></i>
									</span> Add
                        </button>
                    </div> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-striped table-bordered text-nowrap w-100" id="dataTable">
                            <thead>
                                <tr class="fw-bolder text-muted bg-light">
                                    <th class="min-w-25px">#</th>
                                    <th class="min-w-125px">Name</th>
                                    <th class="min-w-50px">email</th>
                                    <th class="min-w-50px">Page</th>
                                    <th class="min-w-50px">Rate</th>
                                    <th class="min-w-50px">Status</th>
                                    <th class="min-w-50px">Description</th>
                                    <th class="min-w-50px rounded-end">Actions</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--Delete MODAL -->
        <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input id="delete_id" name="id" type="hidden">
                        <p>Are you sure to delete the following data?<span id="title" class="text-danger"></span>؟</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="dismiss_delete_modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-danger" id="delete_btn">Delete !</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL CLOSED -->

        <!-- Create Or Edit Modal -->
        <div class="modal fade" id="editOrCreate" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="example-Modal3">Review data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal-body">

                    </div>
                </div>
            </div>
        </div>
        <!-- Create Or Edit Modal -->
    </div>
    @include('admin/layouts/myAjaxHelper')
@endsection
@section('ajaxCalls')
    <script>
        var columns = [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'page_id',
                name: 'page_id'
            },
            {
                data: 'rate',
                name: 'rate'
            },
            {
                data: 'status',
                name: 'status'
            },
            {
                data: 'description',
                name: 'description'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ]
        showData('{{ route('reviews.index') }}', columns);

        // Add Using Ajax
        showAddModal('{{ route('reviews.create') }}');
        addScript();
        // Edit Using Ajax
        showEditModal('{{ route('reviews.edit', ':id') }}');
        editScript();
        // Delete Using Ajax
        destroyScript('{{ route('reviews.destroy', 'id') }}');

        // function to make change status review Start
        $(document).on('change', '.status-checkbox', function() {
            var reviewId = $(this).data('review-id');
            var status = this.checked ? 1 : 0;

            $.ajax({
                type: 'PUT',
                url: '/reviews/update-status/' + reviewId,
                data: {
                    "_token": "{{ csrf_token() }}",
                    status: status
                },
                success: function(response) {
                    if (response.status == 200) {
                        toastr.success('Change Update Successfully')
                    }
                },
                errors: function(response) {
                    if(response.status == 405) {
                        toastr.errors('There are some errors')
                    }
                }
            });
        });
        // function to make change status review Start
    </script>
@endsection
