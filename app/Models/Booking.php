<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'BookingID';

    public function rooms()
    {
        return $this->belongsTo(Room::class,'RoomID','RoomID');
    }
    protected $fillable = ['BookingID', 'CustomerID', 'RoomID', 'CheckinDate', 'CheckoutDate'];
}
