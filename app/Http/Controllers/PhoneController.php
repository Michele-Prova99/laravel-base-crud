<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Phone::all();

        return view('index',compact('data'));

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
        $data = $request->all();

          if(empty($data['modello']) || empty($data['anno'])) {
            return back()->withInput();
          }

          $phoneNew = new Phone;
          $phoneNew->modello = $data['modello'];
          $phoneNew->anno = $data['anno'];
          $phoneNew->description = $data['description'];
          $saved = $phoneNew->save();
          dd($saved);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show(Phone $phone)
     {
         // dd($phone);
         // $phone = Phone::find($id);
         return view('show',compact('phone'));
     }

    // public function show($id)
    // {
    //     $phone = Phone::find($id);
    //     return view('show',compact('phone'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Phone $phone)
    {
        return view('create',compact('phone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phone $phone)
    {
        $data = $request->all();
        $phone->update($data);
        return view('show',compact('phone'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phone $phone)
    {
      $phone->delete();

      return redirect()->route('phones.index');
    }
}
