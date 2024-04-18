<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddChangeRequest;
use App\Services\ChangeRequestService;

class ChangeRequestController extends Controller
{
    private ChangeRequestService $changeRequestService;
 
    public function __construct(ChangeRequestService $changeRequestService)
    {
        $this->changeRequestService = $changeRequestService;
    }

    function getDetail($trackingCode)  {
        return $this->changeRequestService->GetDataWithTrackingCode($trackingCode);
    }

    function new(AddChangeRequest $request)  {
        return $this->changeRequestService->addNewItem($request->validated());
    }
}
