<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Queue extends Model
{
    use HasFactory;

    protected $fillable = ['coiffeur_id', 'salon_id', 'status'];

    public function coiffeur(): BelongsTo
    {
        return $this->belongsTo(User::class, 'coiffeur_id');
    }

    public function salon(): BelongsTo
    {
        return $this->belongsTo(Salon::class);
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
