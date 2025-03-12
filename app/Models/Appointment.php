<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['client_id','queue_id','appointmentTime', 'status'];

    public function client(): BelongsTo
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function queue(): BelongsTo
    {
        return $this->belongsTo(Queue::class);
    }
}
