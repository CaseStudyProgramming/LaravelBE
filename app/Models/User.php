<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    protected $table = "users";
    protected $primarKey = "id";
    protected $keyType = "int";
    protected $timestamps = "true";
    protected $incrementing = "true";

    protected $fillable = [
        'username',
        'password',
        'name'
    ];


    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class, 'user_id', 'id');
    }
}
