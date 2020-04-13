<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    // Table Name
    protected $table = 'songs';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
