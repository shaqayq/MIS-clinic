<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
     public function isAdmin(){

        return $this->role =='Admin' ? true :false;
    }
}
