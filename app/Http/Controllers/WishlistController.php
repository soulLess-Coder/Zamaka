<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AppWishlist;
use Auth;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $wishlists = Wishlist::where("user_id", "=", $user->id)->orderby('id', 'desc')->paginate(10);
        return view('frontend.wishlist', compact('user', 'wishlists'),user()->Auth::id());
    }
    public function __construct() {
        $this->middleware(['auth']);
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
        $this->validate($request, array(
            'user_id'=>'required',
            'property_id' =>'required',
          ));
  
        $wishlist = new Wishlist;
  
        $wishlist->user_id = $request->user_id;
        $wishlist->property_id = $request->property_id;
  
  
        $wishlist->save();
  
        return redirect()->back()->with('flash_message',
            'Item, '. $wishlist->property->title.' Added to your wishlist.');
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
        $wishlist = Wishlist::findOrFail($id);
        $wishlist->delete();
  
        return redirect()->route('wishlist.index')
            ->with('flash_message',
             'Item successfully deleted');
    }
}
