<?php

namespace App\Http\Controllers;

use App\Models\Sinhvien;
use Illuminate\Http\Request;

class SinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sinhvien = SinhVien::paginate(5);
        return view('index', compact('sinhvien'))->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Sinhvien $sinhvien)
    {
        Sinhvien::create($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao','Thêm Sinh Viên ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sinhvien  $sinhvien
     * @return \Illuminate\Http\Response
     */
    public function show(Sinhvien $sinhvien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sinhvien  $sinhvien
     * @return \Illuminate\Http\Response
     */
    public function edit(Sinhvien $sinhvien)
    {
        return view('edit', compact('sinhvien'))->with('thongbao','Xóa Sinh Viên Thành Công !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sinhvien  $sinhvien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sinhvien $sinhvien)
    {
        $sinhvien->update($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao','Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sinhvien  $sinhvien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sinhvien $sinhvien)
    {
        $sinhvien->delete();
        return redirect()->route('sinhvien.index')->with('thongbao', 'Xóa thành công!');
    }
}
