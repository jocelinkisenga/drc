<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Viewer extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'user_ip_address',
        'viewers'
    ];

    public function post() : BelongsTo {
        return $this->BelongsTo(Post::class);
    }
}
