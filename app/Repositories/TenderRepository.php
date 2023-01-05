<?php

namespace App\Repositories;

use App\Models\Department;
use App\Models\Location;
use App\Models\Method;
use App\Models\Tender;
use App\Repositories\Interfaces\TenderRepositoryInterface;

class TenderRepository implements TenderRepositoryInterface
{
    public function __construct()
    {
        //
    }
    public function getAllData(array $args = [])
    {
        $orderBy = empty($args['order_by']) ? 'id' : $args['order_by']; // column name
        $order = empty($args['order']) ? 'desc' : $args['order']; //asc, desc
        $query = Tender::orderBy($orderBy, $order)->with('department', 'method', 'location');
        if (isset($args['is_query']) && $args['is_query']) {
            return $query;
        }
        return $query->get();
    }

    public function storeOrUpdate($id = null, $data)
    {
        if (is_null($id)) {
            Tender::create($data);
        } else {
        }
    }

    public function view($id)
    {
        return Tender::find($id);
    }
    public function delete($id)
    {
        return Tender::findOrFail($id)->delete();
    }
    public function getDepartment()
    {
        return Department::orderBy('id', 'desc')->get();
    }
    public function getLocation()
    {
        return Location::orderBy('id', 'desc')->get();
    }
    public function getMethod()
    {
        return Method::orderBy('id', 'desc')->get();
    }
}
