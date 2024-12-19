@extends('rooms.master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

    @endforeach
    </ul>
</div>

@endif

<div class="card">
    <div class="card-header">Thêm mới</div>
    <div class="card-body">
        <form method="post" action="{{ route('rooms.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Room Number</label>
                <div class="col-sm-10">
                    <input type="text" name="RoomNumber" class="form-control"required/>
                </div>    
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Room Type</label>
                <div class="col-sm-10">
                    <select name="RoomType" class="form-control">
                        <option value="0">Standard</option>
                        <option value="1">Deluxe</option>
                        <option value="2">Suite</option>
                    </select>
                </div>    
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Availability</label>
                <div class="col-sm-10">
                    <select name="Availability" class="form-control">
                        <option value="0">Available</option>
                        <option value="1">Occupied</option>
                        <option value="2">Under maintennance</option>
                    </select>
                </div>    
            </div>
            <div class="text-center">
                <a href="{{ route('rooms.index') }}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" class="btn btn-primary" value="Thêm"/>
            </div>
        </form>
    </div>
</div>

@endsection('content')
