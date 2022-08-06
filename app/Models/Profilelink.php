<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profilelink extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'url',
        'image',
        'user_id',
    ];
    
    protected $table = 'profile_links';


    public function user()
    {
        return $this->belongsTo(USer::class, 'user_id');
    }

}
