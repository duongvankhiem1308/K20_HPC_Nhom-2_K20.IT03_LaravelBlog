@extends('layout')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-head">
            <div class="row">
                <div class="col-md-6">
                    <h3>Thêm Sinh Vien</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('sinhvien.index')}}" class="btn btn-primary float-end">Danh Sách Sinh Viên</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('sinhvien.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Mã Sinh Viên</strong>
                            <input type="text" name="MaSv" class="form-control" placeholder="Nhập Mã Số Sinh Viên">
                        </div>
                        <div class="form-group">
                            <strong>Họ Tên</strong>
                            <input type="text" name="HoTen" class="form-control" placeholder="Nhập Mã Số Sinh Viên">
                        </div>
                        <div class="form-group">
                            <strong>Ngày Sinh</strong>
                            <input type="date" name="NgaySinh" class="form-control" placeholder="Nhập Mã Số Sinh Viên">
                    </div>
                    <div class="form-group">
                            <strong>Giới Tính</strong>
                            <select name="GioiTinh" class="form-select">
                                <option selected >Chọn Giới Tính</option>
                                <option value="Nam">Nam</option>
                                <option value="Nu">Nu</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <strong>Địa chỉ</strong>
                        <input type="text" name="DiaChi" class="form-control" placeholder="Nhập Mã Số Sinh Viên">

                    </div>
                    <div class="form-group">
                        <strong>Số Điện Thoại</strong>
                        <input type="text" name="SoDT" class="form-control" placeholder="Nhập Mã Số Sinh Viên">

                    </div>
                    <button type="sumbit" class="btn btn-success mt-2">Lưu</button>

            </form>
        </div>
    </div>
</div>


@endsection

