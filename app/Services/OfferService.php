<?php
namespace App\Services;

use App\Models\Offer;
use Yajra\DataTables\DataTables;

class OfferService
{
    public function index($request)
    {
        if ($request->ajax()) {
            $offers = Offer::latest()->get();
            return Datatables::of($offers)
                ->addColumn('action', function ($offers) {
                    return '
                                <button type="button" data-id="' . $offers->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                        data-id="' . $offers->id . '" data-title="' . $offers->title . '">
                                        <i class="fas fa-trash"></i>
                                </button>
                           ';
                })
                ->escapeColumns([])
                ->make(true);
        } else {
            return view('admin/offers/index');
        }
    }
    // Index End

    public function create()
    {
        return view('admin.offers.parts.create');
    }

    public function store($request)
    {
        try {
            $inputs = $request->validated();

            $offers = Offer::create($inputs);

            return response()->json(['status' => 200]);
        } catch (\Exception $e) {
            return response()->json(['status' => 405]);
        }
    }

    public function edit($offer)
    {
        return view('admin.offers.parts.edit', compact('offer'));
    }

    public function update($request, $offer)
    {
        try {
            $inputs = $request->validated();

            $offer->update($inputs);

            return response()->json(['status' => 200]);
        } catch (\Exception $e) {
            return response()->json(['status' => 405]);
        }
    }

    public function destroy($id)
    {
        $offer = Offer::where('id', $id)->first();
        $offer->delete();
        return response(['message' => 'Deleted successfully', 'status' => 200], 200);
    }
}
