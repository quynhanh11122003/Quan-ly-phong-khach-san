@extends('rooms.master')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Thông tin phòng chi tiết</b></div>
            <div class="col col-md-6">
                <a href="{{ route('rooms.index') }}" class="btn btn-primary btn-sm float-end">Xem tất cả danh sách</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Room ID</b></label>
            <div class="col-sm-10">
                {{ $room->RoomID}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Room Number</b></label>
            <div class="col-sm-10">
                {{ $room->RoomNumber}}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Room Type</b></label>
            <div class="col-sm-10">
                @if ($room->RoomType == '0') Standard @elseif ($row->RoomType == '1') Deluxe @else Suite @endif
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Availability</b></label>
            <div class="col-sm-10">
                @if ($room->Availability == '0') Available @elseif ($row->Availability == '1') Occupied @else Under maintennance @endif
            </div>
        </div>
            <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</div>

@endsection('content')
