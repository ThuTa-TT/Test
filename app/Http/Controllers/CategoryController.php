<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=DB::table('categories')
                    ->get();
        return $categories;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories=DB::table('categories')
                    ->insert([
                        "name"=>$request->name

                    ]);
        return $categories;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories=DB::table('categories')
                    ->where('id',$id)
                    ->get();
                       
        return $categories;
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
       $categories=DB::table('categories')
                   ->where('id',$id)
                   ->update(['name'=>$request->name]);
           
        return $categories;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $categories=DB::table('categories')
        //            ->where('id',$id)
        //            ->delete();

         $categories=DB::table('categories')
                   ->where('id',$id)
                   ->update(['deleted_at'=>Carbon::now()]);
           
        return $categories;
    }
}
