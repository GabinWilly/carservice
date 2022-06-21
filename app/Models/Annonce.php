<?php

namespace App\Models;

use App\Notifications\Test;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;
    public $annonce;

    protected $fillable = [
        'name', 'description'
    ];
    public function lik($annonce){
        auth()->user();
        $this->annonce = $annonce;
    }

    // public function getAllAnnonces(){
    //     return Annonce::all();
    // }
    public function exemple(){
        $this->annonce->user->notify(new Test($this->annonce));
    }
}
