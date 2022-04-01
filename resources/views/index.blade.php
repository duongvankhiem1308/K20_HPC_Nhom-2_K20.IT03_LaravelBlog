@extends('layout')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-head">
            <div class="row">
                <div class="col-md-6">
                    <h3>Quản Lý Sinh Viên</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('sinhvien.create')}}" class="btn btn-primary float-end">Thêm Sinh Viên</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if(Session::has('thongbao'))
            <div class="aleart  aleart-succes">
                {{Session::get('thongbao')}}
            </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>MÃ SINH VIÊN</th>
                        <th>HỌ TÊN</th>
                        <th>NGÀY SINH</th>
                        <th>GIỚI TÍNH</th>
                        <th>ĐỊA CHỈ</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>THAO TÁC</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sinhvien as $sv)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$sv->MaSv}}</td>
                        <td>{{$sv->HoTen}}</td>
                        <td>{{$sv->NgaySinh}}</td>
                        <td>{{$sv->GioiTinh}}</td>
                        <td>{{$sv->DiaChi}}</td>
                        <td>{{$sv->SoDT}}</td>
                        <td>
                            <form action="{{route('sinhvien.destroy',$sv->id)}}" method="POST">
                            <a href="{{route('sinhvien.edit',$sv->id)}}" class="btn btn-info">Sửa</a>
                            @csrf
                            @method('DELETE')
                            <button type="sumbit" class="btn btn-danger">Xóa</button>
                        
                        
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>



@endsection
@inclue('admin.footer')