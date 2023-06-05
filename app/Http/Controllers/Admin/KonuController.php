<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Konu;
use Illuminate\Http\Request;
use App\Http\Requests\KonuCreateRequest;
use Laravel\Jetstream\Jetstream;
use App\Http\Requests\KonuUpdateRequest;


class KonuController extends Controller
{
    /**788888888IOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOCF- DSC     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index()
    {
        $konus =Konu::OrderBy('created_at','DESC')->paginate(5);
        return view('Admin.Konu.list',compact(('konus')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Konu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KonuCreateRequest $request)
    {
        Konu::create($request->post());
        return redirect()->route('Konu.index')->withSuccess("Fikir Oluşturuldu");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $konu=Konu::find($id) ?? abort(404,'Fikir Bulunamadı');

        return view('Admin.Konu.edit',compact('konu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KonuUpdateRequest $request, $id)
    {
        $konu=Konu::find($id) ?? abort(404,'Fikir Bulunamadı');
        Konu::where('id',$id)->update($request->except(['_method','_token']));
        return redirect()->route('Konu.index')->withSuccess('fikir güncelleme başarıyla gerçekleştirildi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $konu=Konu::find($id) ?? abort(404,'fikir bulunamadı');
        $konu->delete();
        return redirect()->route('Konu.index')->withSuccess('fikir silme işlemi gerçekleştirildi');

    }
}
