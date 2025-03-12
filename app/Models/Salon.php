<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Salon extends Model
{
    use HasFactory;

    protected $fillable= ['name', 'address', 'qrCode', 'avgHaircutDuration'];

    public function coiffeurs(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function queues(): HasMany
    {
        return $this->hasMany(Queue::class);
    }
}
