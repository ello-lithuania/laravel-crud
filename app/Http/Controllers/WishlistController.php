<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WishList;
use App\Models\Advertisement;

class WishlistController extends Controller
{
    public function index(Request $request) {
        $method1 = request()->ip();
        $wishlist_get = WishList::where('user_id','=',$method1)->get();
        $wishlist = [];
        foreach($wishlist_get as $item) {
            $wishlist[$item->advertisement_id] = Advertisement::where('id',$item->advertisement_id)->first();
        }

        return view('wishlist',compact('wishlist'));
    }
    public function add(Request $request) {
        $ad_id = $request->input('advertisement_id');
        $method1 = request()->ip();
        if(Advertisement::find($ad_id)) {
            $wish = new WishList();
            $wish->advertisement_id = $ad_id;
            $wish->user_id = $method1;
            $wish->save();
            return response()->json(['status' => 'Produktas pridėtas']);
        } else {
            return response()->json(['status' => 'Produktas neegzistuoja']);
        }
    }
    public function remove(Request $request, $ad_id ) {
        $method1 = request()->ip();
        if(WishList::where('advertisement_id',$ad_id)->where('user_id',$method1)) {
            WishList::where('advertisement_id',$ad_id)->where('user_id',$method1)->first()->delete();
            return redirect()->route('wishlist');
        }
    }
}
