<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    protected $primarykey = "id";
    protected $keyType = "int";
    protected $table = "contacts";
    protected $incrementing = "true";
    protected $timestamps = "true";

    public function contacts(): BelongsTo
    {
        return $this->belongsTo(Contact::class, 'user_id', 'id');
    }
}
