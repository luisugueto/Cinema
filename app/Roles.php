<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';

   	protected $fillable = ['name'];

   	public function user(){
        return $this->belongsTo('Cinema\User');
    }
}
