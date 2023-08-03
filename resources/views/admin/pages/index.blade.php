@extends('Admin/layouts/master')

@section('title')
    {{($setting->title) ?? ''}} | Pages
@endsection
@section('page_name') Pages @endsection
@section('content')

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Pages {{($setting->title) ?? ''}}</h3>
                    <div class="">
                        <button class="btn btn-secondary btn-icon text-white addBtn">
									<span>
										<i class="fe fe-plus"></i>
									</span> Add
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-striped table-bordered text-nowrap w-100" id="dataTable">
                            <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="min-w-25px">#</th>
                                <th class="min-w-125px">Top Title</th>
                                <th class="min-w-50px">Down Tilte</th>
                                <th class="min-w-50px">Category</th>
                                <th class="min-w-50px">Top Description</th>
                                <th class="min-w-50px">Down Description</th>
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
                        <h5 class="modal-title" id="example-Modal3">Page data</h5>
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
    @include('Admin/layouts/myAjaxHelper')
@endsection
@section('ajaxCalls')
    <script>
        var columns = [
            {data: 'id', name: 'id'},
            {data: 'top_title', name: 'top_title'},
            {data: 'down_title', name: 'down_title'},
            {data: 'category_id', name: 'category_id'},
            {data: 'top_description', name: 'top_description'},
            {data: 'down_description', name: 'down_description'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
        showData('{{route('pages.index')}}', columns);
        
        // Add Using Ajax
        showAddModal('{{route('pages.create')}}');
        addScript();
        // Edit Using Ajax
        showEditModal('{{route('pages.edit',':id')}}');
        editScript();
        // Delete Using Ajax
        destroyScript('{{route('pages.destroy', 'id')}}');
        
    </script>
@endsection


