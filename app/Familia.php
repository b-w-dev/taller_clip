<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Familia extends Model
{
    //
    use Sortable, SoftDeletes;
    protected $table ='familia';
    protected $fillable=['id', 'nombre','abreviatura'];
    protected $hidden=['created_at','updated_at','deleted_at'];
    public $sortable=['id','nombre','abreviatura'];
}
