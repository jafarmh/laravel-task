<?php
namespace App\Services;

use App\Repositories\ChangeRequestRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class ChangeRequestService
{

    public function GetDataWithTrackingCode($trackingCode){
        $data=ChangeRequestRepository::GetByField("trackingCode",$trackingCode); 
        return response()->json([
            'data' => $data,
        ]);
    }

    public function addNewItem($request) : JsonResponse {
        $request['trackingCode']=Str::random(10).substr(time(), 6,8);
        $data=ChangeRequestRepository::NewItem($request);
        return response()->json([
            'data' => $data,
        ]);
    }




}
