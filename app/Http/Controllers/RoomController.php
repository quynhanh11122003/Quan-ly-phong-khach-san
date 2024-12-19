<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking; //sửa
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('rooms.index', ['rooms' => Room::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $classrooms = DB::table('classrooms')->get();
        // return view('students.create', compact('classrooms'));
        return view('rooms.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'RoomNumber'   => 'required',
            'RoomType'  => 'required',
            'Availability'   => 'required',
        ]);

        Room::create($validatedData);

        return redirect()->route('rooms.index')->with('success','Added successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        return view('rooms.edit',[
            //'classrooms'=>$classrooms,
            'room' =>$room
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        $RoomNumber =$request->input('RoomNumber');
        $RoomType =$request->input('RoomType');
        $Availability =$request->input('Availability');
        
        $validatedData =$request->validate([
            'RoomNumber'   => 'required',
            'RoomType'  => 'required',
            'Availability'   => 'required',
        ]);

        $room->update([
            'RoomNumber' =>$RoomNumber,
            'RoomType' =>$RoomType,
            'Availability'=>$Availability,
        ]);
        return redirect()->route('rooms.index')->with('sucess','Data has been updated sucessfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('rooms.index')->with('sucess', 'Data deleted successfully');
    }
}
