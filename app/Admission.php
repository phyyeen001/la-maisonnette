<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $primaryKey='id';

    public function emergency_contact()
    {
        return $this->hasMany('App\Emergency_Contact_Info');
    }
}
