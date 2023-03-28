<?php

namespace App\Http\Controllers;
use App\Models\Catalogs;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogs = Catalogs::query();
        if($request->cari){
            $catalogs = $catalogs->where('title','LIKE', '%'.$request->cari.'%')->paginate(2);;
        }
        $catalogs = $catalogs->paginate(2);
        return view('web.produk',[
            "title"=>"Shone pager",
            "catalogs"=> $catalogs
        ]);
    }

    public function cari($cari)
	{
		// mengambil data dari table pegawai sesuai pencarian data
		$catalogs = Catalogs::where('title','like',"%".$cari."%");
        
        // mengirim data pegawai ke view index
		return view('web.produk',[
            "title"=>"Search found",
            'catalogs' => $catalogs
        ]);
 
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
