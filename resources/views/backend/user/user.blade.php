@extends('backend.layout')
@section('title', 'Home User')
@section('user', 'active')
@section('main')
    <div class="container">
        <h2 class="text-info">Danh sách thành viên</h2>
        <p>Bảng biểu thị danh sach thành viên người dùng</p> 
        <button class="show-login btn badge-primary"> Add user</button>
            <div style="display: none" class="row show">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Thông tin người dùng</div>
                        <div class="card-body">
                            <form action="{{ route('add-user') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="control-label mb-1">Tên người dùng</label>
                                    <input id="cc-pament" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" placeholder="Nhập tên người dùng">
                                </div>
                                <div class="form-group has-success">
                                    <label for="email" class="control-label mb-1">Email</label>
                                    <input id="email" name="email" type="email" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" placeholder="Email đăng ký"
                                        autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label mb-1">Mật khẩu</label>
                                    <input type="password" id="cc-number" name="password" type="tel" class="form-control cc-number identified visa" placeholder="***********" data-val="true"
                                        data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number"
                                        autocomplete="cc-number">
                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                                        <span id="payment-button-amount">Tạo người dùng</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>          
        <table class="table table-striped">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>
                        <a href="{{ route('edit-user',$data->id) }}"><button class="edit-input btn btn-info">Edit</button></a>
                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa!')" href="{{ route('delete-user',$data->id) }}"><button class="btn btn-danger">Del</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>

        </table>
    </div>
    
@endsection
@section('script')
    <script src="backend/js/showLogin.js"></script>
@endsection