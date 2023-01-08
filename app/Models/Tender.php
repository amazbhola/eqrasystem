<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{

    use HasFactory;

    protected  $fillable = [
        'tender_id',
        'description',
        'document_price',
        'tender_security',
        'date',
        'department_id',
        'method_id',
        'location_id',
        'similar',
        'turnover',
        'liquid',
        'tender_capacity',
        'media',
        'media',

    ];


    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
    public function method()
    {
        return $this->belongsTo(Method::class, 'method_id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
