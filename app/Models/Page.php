<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Page extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body'
    ];
   protected static function boot(){
        parent::boot();
        static::creating(function($model){
            if(Auth::id() != null){
                $model->user_id=Auth::id();
            }
    });
        static::updating(function($model){
        $model->user_id=Auth::id();
    });
    }
}
