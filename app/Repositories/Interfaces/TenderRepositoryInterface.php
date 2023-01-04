<?php

namespace App\Repositories\Interfaces;

interface TenderRepositoryInterface
{
    public function getAllData();
    public function storeOrUpdate($id = null, $data);
    public function view($id);
    public function delete($id);
}
