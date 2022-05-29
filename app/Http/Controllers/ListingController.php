<?php

namespace App\Http\Controllers;
use App\Models\Address;
use App\Models\Property;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //TODO: Add If(Request()->Ajax) and shift away from api
    /**
     * Display a listing of the resource.
     * @mixin Eloquent
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Property::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @noinspection PhpUndefinedMethodInspection
     */
    public function store(Request $request)
    {
         //validation
         $this->validate($request, [
            'description' => 'required|max:100',
            'landmarks' => 'required',
            'property_size'=> 'required',
            'image'=> 'required',
            'video'=> 'required',
            'lease_price'=> 'required|min:10|numeric',
            'build_year'=> 'required',
            'street' => 'required',
            'house_number'=> 'required',
            'sector',
            'mohala',
            'city'=>'required'
        ]);

        return Property::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Property::find($id);
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
