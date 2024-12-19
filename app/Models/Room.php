<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'RoomID';

    public function booking()
    {
        return $this->belongsTo(Booking::booking, 'BookingID', 'BookingID');
    }
    protected $fillable = ['RoomID', 'RoomNumber', 'RoomType', 'Availability'];

}
