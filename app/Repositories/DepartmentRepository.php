<?php

namespace App\Repositories;

use App\Models\Department;
use App\Repositories\Interfaces\DepartmentRepositoryInterface;

class DepartmentRepository implements DepartmentRepositoryInterface
{
    private $department;
    public function __construct(Department $department)
    {
        $this->department = $department;
    }
    public function getAllData()
    {
        return $this->department->latest()->paginate(5);
    }
    public function storeOrUpdate($id = null, $data)
    {
    }
    public function view($id)
    {
    }
    public function delete($id)
    {
    }
}
