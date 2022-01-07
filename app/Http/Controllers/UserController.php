<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::all();
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = new user;
        return view('user.create', compact('user'));
     
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
            'nama_user' => 'required',
            'harga_user' => 'required',
            'stock' => 'required',
            'detail' => 'required',
            'pengrajin' => 'required',
            'kategori' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
       
        $user = new user();
        $user->nama_user =$request->nama_user;
        $user->harga_user =$request->harga_user;
        $user->stock =$request->stock;
        $user->detail =$request->detail;
        $user->pengrajin =$request->pengrajin;
        $user->kategori = $request->kategori;
        $path = $request->file('image')->store('public/images');
        $user->image = $path;
        $user->save();
       
        return redirect()->route('user')->with('success','user created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
        
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       $user = user::find($id); 
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nama_user' => 'required',
            'harga_user' => 'required',
            'stock' => 'required',
            'detail' => 'required',
            'pengrajin' => 'required',
            'kategori' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
  
        $path = $request->file('image')->store('public/images');
        $user = new user();
        $user->nama_user =$request->nama_user;
        $user->harga_user =$request->harga_user;
        $user->stock =$request->stock;
        $user->detail =$request->detail;
        $user->pengrajin =$request->pengrajin;
        $user->kategori =$request->kategori;
        $user->image = $path;
    
        $user->save();
        return redirect()->route('user.index')
                        ->with('success','user update successfully.');
    
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = user::find($id);
        $user->delete();
        return redirect()->route('user.index')
        ->with('Selamat!', 'Data berhasil dihapus :)');

        
    }
}