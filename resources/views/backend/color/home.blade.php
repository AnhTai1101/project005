@extends('backend.layout')
@section('title', 'Trang màu sắc')
@section('color','active')
@section('main')
<div class="col-lg-6">
    <!-- TOP CAMPAIGN-->
    <div class="top-campaign">
        <form action="{{ route('post-add-color') }}" method="post">
            @csrf
            <div class="input-group">
                <input type="text" id="input2-group2" name="name" placeholder="Màu" class="form-control">
                <div class="input-group-btn">
                    <button class="btn btn-primary">Thêm</button>
                </div>
                @if ($errors->has('name'))
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('name') }}</strong>
                    </div>
                @endif
            </div>
        </form>
        <br>
        <br>
        <h3 class="title-3 m-b-30">Danh sách màu sắc</h3>
        
        <div class="table-responsive">
            <table class="table table-top-campaign">
                <tbody>
                    @foreach ($datas as $data)
                        <tr class="show-data">
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>
                                <button class= "show-input btn btn-primary">Sửa</button>
                                <button class="btn btn-danger">Xóa</button>
                            </td>
                        </tr>
                        <tr class="hide-data">
                            <td>{{ $data->id }}</td>
                            <td><input type="text" value="{{ $data->name }}"></td>
                            <td>
                                <button class="btn btn-primary">Cập nhật</button>
                                <button class="btn btn-danger">Hủy</button>
                            </td>
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