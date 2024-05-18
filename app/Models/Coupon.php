<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coupon extends Model
{
    use HasFactory;
    use Notifiable;
    protected $fillable = ["type_id","title", "description"];

    public function images(){
        return $this->hasMany(Image::class);
    }
}
