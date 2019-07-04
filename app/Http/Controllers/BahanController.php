<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Bahan;

class BahanController extends Controller
{
    
    public function bahan(){
        $page ='admin/bahan/bahan';
        $data = Bahan::all();
        return view($page)->with(compact('data'));
    
    }

    public function addbahan(){
    	$page = 'admin/bahan/addbahan';
    	return view($page);
    }

    public function index (){
    	$data = Bahan::all();
        return view('admin.bahan.bahan')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bahan.addbahan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        	'nama'=> 'required',
        ]);

        $data = new Bahan();
        $data->bahan = $request->get('nama');
        $data->save();
        return redirect()->route('bahan')->with('alert', 'Data berhasil ditambahkan');;
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
