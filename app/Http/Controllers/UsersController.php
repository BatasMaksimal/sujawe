<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Catalogs;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $catalogs = Catalogs::query();
        if($request->cari){
            $catalogs = $catalogs->where('title','LIKE', '%'.$request->cari.'%');
        }
        $users = Users::all();
        $catalogs = $catalogs->paginate(2);
        return view('user.post_blog_user',[
            "title"=>"Shone pager",
            "users"=> $users,
            "catalogs"=>$catalogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.tambah_post.tambah_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required'
        ]);
        

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('image')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            
            $request->file('image')->store('catalogs', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $product = new Catalogs([
                "title" => $request->get('title'),
                "description" => $request->get('description'),
                "price" => $request->get('price'),
                "image" => $request->file('image')->hashName()
            ]);
            
            $product->save(); // Finally, save the record.

            return redirect()->route('users.catalogs.index');
        }
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
        $catalogs = Catalogs::findorfail($id);
        return view('user.tambah_post.edit',compact('catalogs'));
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
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required'
        ]);

        $request->file('image')->store('catalogs', 'public');
        $product = [
            "title" => $request->get('title'),
            "description" => $request->get('description'),
            "price" => $request->get('price'),
            "image" => $request->file('image')->hashName()
        ];
        Catalogs::whereId($id)->update( $product);
        return redirect()->route('users.catalogs.index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catalogs = Catalogs::findorfail($id);
        $catalogs->delete();

        return redirect()->back()->with('succes','Data berhasil dihapus');
    }
}
