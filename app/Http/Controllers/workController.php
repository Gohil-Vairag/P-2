<?php

namespace App\Http\Controllers;

use App\Models\work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class workController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashborad()
    {
        $works = work::get();
        return view('dashborad');
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
    public function store(Request $request)
    {

        $image = $request->file('image');
        $img_name = time().rand(100000,999999).$image->getClientOriginalName();

        $image->move('uploads/',$img_name);
        $work = new work;

        $work -> name = $request -> name;
        $work -> mo_no = $request -> mo_no;
        $work -> email = $request -> email;
        $work -> gender = $request -> gender;
        $work -> password =Hash::make($request -> password);
        $work -> hobby = implode(',', $request->hobby);
        $work -> married = $request -> married;
        $work -> bod = $request -> bod;
        $work ->image = $img_name;
        $work -> address = $request -> address;
        $work -> save();
        // dd(1111);

        return redirect('/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function list()
    {

        // if(!Auth::work())
        // {
        //     return redirect('/');
        // }
        $works = work::get();
        return view('list',compact('works'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = DB::table('works')->where('id',$id)->first();
        return view('edit',compact('work'));
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
           // $image = $request->file('image');
        // $img_name = rand(111111,999999).time().$image->getClientOriginalName();
        // $image->move('upload/',$img_name);
        $id = $request->id;
        $name = $request->name;
        $mo_no = $request->mo_no;
        $email = $request->email;
        $gendar = $request->gendar;
        $married = $request->married;
        $hobby = $request->hobby;
        $bod = $request->bod;
        $password = $request->password;
        $data = [
            "name" =>  $name,
            "mo_no" =>  $mo_no,
            "email" =>  $email,
            "gendar" =>  $gendar,
            "married" =>  $married,
            "hobby" =>  $hobby,
            "bod" =>  $bod,
            // "image" =>  $img_name,
            "password" =>  $password,
        ];
        DB::table('works')->where('id',$id)->update($data);
        return redirect('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $work = Work::find($id);

        $work->delete();
        return back();
    }
}
