@extends('layout')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-head">
            <div class="row">
                <div class="col-md-6">
                    <h3>Sửa Sinh Vien</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('sinhvien.index')}}" class="btn btn-primary float-end">Danh Sách Sinh Viên</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('sinhvien.update', $sinhvien->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Mã Sinh Viên</strong>
                            <input type="text" name="MaSv" value="{{$sinhvien->MaSv}}" class="form-control" placeholder="Nhập Mã Số Sinh Viên">
                        </div>
                        <div class="form-group">
                            <strong>Họ Tên</strong>
                            <input type="text" name="HoTen" value="{{$sinhvien->HoTen}}" class="form-control" placeholder="Nhập Mã Số Sinh Viên">
                        </div>
                        <div class="form-group">
                            <strong>Ngày Sinh</strong>
                            <input type="date" name="NgaySinh" value="{{$sinhvien->NgaySinh}}" class="form-control" placeholder="Nhập Mã Số Sinh Viên">
                    </div>
                    <div class="form-group">
                            <strong>Giới Tính</strong>
                            <select name="GioiTinh" class="form-select">
                                <option selected >Chọn Gioi Tính</option>
                                <option value="Nam" {{$sinhvien->GioiTinh == "Nam" ? 'selected' : ''}}>Nam</option>
                                <option value="Nu" {{$sinhvien->GioiTinh == "Nu" ? 'selected' : ''}}>Nu</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <strong>Địa chỉ</strong>
                        <input type="text" name="DiaChi" value="{{$sinhvien->DiaChi}}" class="form-control" placeholder="Nhập Mã Số Sinh Viên">

                    </div>
                    <div class="form-group">
                        <strong>Số Điện Thoại</strong>
                        <input type="text" name="SoDT" value="{{$sinhvien->SoDT}}" class="form-control" placeholder="Nhập Mã Số Sinh Viên">

                    </div>
                    <button type="sumbit" class="btn btn-success mt-2">Cập Nhật</button>

            </form>
        </div>
    </div>
</div>


@endsection

