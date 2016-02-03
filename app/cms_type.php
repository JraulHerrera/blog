<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cms_type extends Model
{
    protected $table='cms_types'
    DB::insert('insert into cms_types (id, title) values (?,?)', [1, 'Dayle']);

}
