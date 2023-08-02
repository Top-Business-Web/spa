<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;

class ServiceController extends Controller
{
    use PhotoTrait;
    public function index(request $request)
    {
        if ($request->ajax()) {
            $services = Service::latest()->get();
            return Datatables::of($services)
                ->addColumn('action', function ($services) {
                    return '
                                <button type="button" data-id="' . $services->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $services->id . '" data-title="' . $services->title . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('Admin/services/index');
        }
    }
    // Index End


    // Create Start
    public function create()
    {
        return view('admin.services.parts.create');
    }
    // Create End

    // Store Start
    public function store(ServiceStoreRequest $request)
    {
        try {
            $inputs = $request->validated();

            $service = Service::create($inputs);

            return response()->json(['status' => 200]);
        } catch (\Exception $e) {
            return response()->json(['status' => 405]);
        }
    }
    // Store End


    // Start Edit
    public function edit(Service $service)
    {
        return view('admin.services.parts.edit', compact('service'));
    }
    // end  of edit

    public function update(ServiceUpdateRequest $request, Service $service)
    {
        try {
            $inputs = $request->validated();

            $service->update($inputs);

            return response()->json(['status' => 200]);
        } catch (\Exception $e) {
            return response()->json(['status' => 405]);
        }
    }


    public function destroy(Request $request)
    {
        $service = Service::where('id', $request->id)->first();
        $service->delete();
        return response(['message' => 'Deleted successfully', 'status' => 200], 200);
    }
    //end of delete
}
