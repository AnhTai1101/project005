@extends('backend.layout')
@section('title', 'Thêm sản phẩm')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">Thông tin người dùng</div>
                    <div class="card-body">
                        <form action="{{ route('post-edit-user') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $info->id }}">
                            <div class="form-group">
                                <label for="name" class="control-label mb-1">Tên người dùng</label>
                                <input id="cc-pament" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{ $info->name }}">
                                @if ($errors->has('name'))
                                    <div class="alert alert-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group has-success">
                                <label for="email" class="control-label mb-1">Email</label>
                                <input id="email" name="email" type="email" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" value="{{ $info->email }}"
                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                @if ($errors->has('email'))
                                    <div class="alert alert-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                    <span id="payment-button-amount">Cập nhật thông tin</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection