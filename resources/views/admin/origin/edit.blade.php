@extends('admin.layout.master')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Nơi sản xuất</h5>
                <form action="{{route('origin.update', $origin)}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên</label>
                        <input type="text" class="form-control" name="name" value="{{$origin->name}}" id="name" >
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                    <a href="{{route('origin.index')}}"><button style="background-color:red" type="button" class="btn btn-danger">Hủy</button></a>
                </form>
            </div>
        </div>
    </div>
@endsection