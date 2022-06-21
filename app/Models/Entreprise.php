<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name','ville'
    ];
    public function role()
    {
        # code...
        return $this->belongsToMany('App\Models\Role');
    }
    public function use(){
        return $this->belongsToMany('App\Models\User');
    }
}
