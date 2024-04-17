<?php


namespace App\Interfaces;

interface RepositoryInterface
{
    public static function GetByField($field,$value);
    public static function NewItem($data);
    public static function UpdateItem($data,$id);
    public static function Remove($id);
    public static function Index();
}
