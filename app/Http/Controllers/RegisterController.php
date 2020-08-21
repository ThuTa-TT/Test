<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=DB::table('registers')
                ->get();
        return view('userlist',compact('users'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=DB::table('registers')
                    ->insert([
                        "name"=>$request->name,
                        "gender"=>$request->gender,
                        "email"=>$request->email,
                        "password"=>$request->pwd,
                        "phone"=>$request->phone,
                        "address"=>$request->add
                    ]);
        return view('userlist',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $users=DB::table('registers')
                    ->insert([
                        "name"=>$request->name,
                        "gender"=>$request->gender,
                        "email"=>$request->email,
                        "password"=>$request->pwd,
                        "phone"=>$request->phone,
                        "address"=>$request->add
                    ]);
       return redirect()->route('registers');
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

       $users = DB::table('registers')
        ->find($id);
        return view('regedit',compact('users'));  
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

         $users=DB::table('registers')
                   ->where('id',$id)
                   ->update([
                    'name'=>$request->name,
                    "gender"=>$request->gender,
                    "email"=>$request->email,
                    "password"=>$request->pwd,
                    "phone"=>$request->phone,
                    "address"=>$request->add
               ]);
        return redirect()->route('registers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $deletetime=DB::table('registers')
                   ->where('id',$id)
                   ->update(['deleted_at'=>Carbon::now()]);

       return redirect()->route('registers');
       
    }
    public function deleteup(Request $request,$id)
    {
        

        $delete=DB::table('registers')
                   ->where('id',$id)
                   ->delete();

       return redirect()->route('registers');

    }
    
}
