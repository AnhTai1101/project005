@extends('backend.layout')
@section('title', 'Kiểu')
@section('type','active')
@section('main')
<div class="col-lg-6">
    <!-- TOP CAMPAIGN-->
    <div class="top-campaign">
        <form action="{{ route('post-add-type') }}" method="post">
            @csrf
            <div class="input-group">
                <input type="text" id="input2-group2" name="name" placeholder="Kiểu" class="form-control">
                <div class="input-group-btn">
                    <button class="btn btn-primary">Thêm</button>
                </div>
            </div>
            @if ($errors->has('name'))
                <div class="alert alert-danger">
                    <strong>{{ $errors->first('name') }}</strong>
                </div>
            @endif
        </form>
        <br>
        <br>
        <h3 class="title-3 m-b-30">Danh mục sản phẩm</h3>
        
        <div class="table-responsive">
            <table class="table table-top-campaign">
                <tbody>
                    @foreach ($datas as $data)
                        <tr class="show-data" data-id="{{ $data->id }}">
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>
                                <button class= "show-input btn btn-primary">Sửa</button>
                                <a href="{{ route('delete-type', $data->id) }}" class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>
                        <tr class="hide-data" data-id="{{ $data->id }}">
                            <form action="{{ route('edit-type') }}" method="post">
                                @csrf
                                <td>{{ $data->id }}</td>
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <td><input name="name" type="text" value="{{ $data->name }}"></td>
                                <td>
                                    <button class="btn btn-primary">Cập nhật</button>
                                    <p class="hide-input btn btn-danger">Hủy</p>
                                </td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--  END TOP CAMPAIGN-->
</div>
@endsection
@section('script')
    <script src="backend/js/showLogin.js"></script>
@endsection