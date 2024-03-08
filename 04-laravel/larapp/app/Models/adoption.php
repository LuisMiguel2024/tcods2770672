<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adoption extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pet_id',
    ];

    
    //relationship: (adoption belong to user)
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    
    //relationship: (adoption belong to pet)
    public function pet(){
        return $this->belongsTo('App\Models\pet');
    }
}
