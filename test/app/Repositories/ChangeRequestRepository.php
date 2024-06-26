<?php

namespace App\Repositories;


use App\Interfaces\RepositoryInterface;
use App\Models\ChangeRequest;


class ChangeRequestRepository implements RepositoryInterface
{
    private function query(): \Illuminate\Database\Eloquent\Builder
    {
        $query=ChangeRequest::query();
        return $query;
    }

    public static function GetByField($field, $value)
    {
        return (new self)->query()->where($field, $value)->get();
    }
 
    public static function FindById($id)
    {
        return (new self)->query()->where('id', $id)->first();
    }

    static function NewItem($data): \Illuminate\Database\Eloquent\Model
    {
        return  ChangeRequest::create($data);
    }
    static function UpdateItem($data, $id): int
    {
        $record = (new self )->FindById($id);
        foreach ($data as $key=>$value){
            $record->{$key}=$value;
        }
        return $record->save();
    }
 

    static function Remove($id)
    {
        $record = (new self )->FindById($id);
        return $record ->delete();
    }


}
