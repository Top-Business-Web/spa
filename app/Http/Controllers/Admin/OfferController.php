<?php

namespace App\Http\Controllers\Admin;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Services\OfferService;
use App\Http\Controllers\Controller;
use App\Http\Requests\OfferStoreRequest;
use App\Http\Requests\OfferUpdateRequest;

class OfferController extends Controller
{
    private $offerService;

    public function __construct(OfferService $offerService)
    {
        $this->offerService = $offerService;
    }

    public function index(Request $request)
    {
        return $this->offerService->index($request);
    }

    public function create()
    {
        return $this->offerService->create();
    }

    public function store(OfferStoreRequest $request)
    {
        return $this->offerService->store($request);
    }

    public function edit(Offer $offer)
    {
        return $this->offerService->edit($offer);
    }

    public function update(OfferUpdateRequest $request, Offer $offer)
    {
        return $this->offerService->update($request, $offer);
    }

    public function destroy(Request $request)
    {
        return $this->offerService->destroy($request->id);
    }
}
