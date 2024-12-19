@extends('rooms.master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
    {{ $message }}
</div>

@endif

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lý phòng</b></h1>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b></b></div>
            <div class="col col-md-6">
                <a href="{{ route('rooms.create') }}" class="btn btn-success btn-sm float-end">Add</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Room ID</th>
                <th>Room Number</th>
                <th>Room Type</th>
                <th>Availability</th>
                <th>Actions</th>
            </tr>
            @if(count($rooms) >0)

                @foreach($rooms as $row)

                    <tr>
                        <td>{{ $row->RoomID}}</td>
                        <td>{{ $row->RoomNumber}}</td>
                        <td>@if ($row->RoomType == '0') Standard @elseif ($row->RoomType == '1') Deluxe @else Suite @endif </td>
                        <td>@if ($row->Availability == '0') Available @elseif ($row->Availability == '1') Occupied @else Under maintennance @endif</td>
                        <td>
                            <form method="post" action="{{ route('rooms.destroy', $row->RoomID) }}" onsubmit="return confirm('Bạn có chắc chắn muốn xóa?');">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('rooms.show', $row->RoomID) }}" class="btn btn-primary">Xem chi tiết</a>
                                <a href="{{ route('rooms.edit', $row->RoomID) }}" class="btn btn-warning">Sửa</a>
                                <input type="submit" class="btn btn-danger btn-sm" value="Xóa"/>
                            </form>
                        </td>
                        
                    </tr>

                @endforeach

            @else
                <tr>
                    <td colspan="4" class="text-center">No Data Found</td>
                </tr>
            @endif

        </table>
        {!! $rooms->links() !!}
    </div>
</div>

@endsection

