<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus=Menu::all();
        return view('pages.menu',compact('menus'));
    }

    public function logged()
    {
        $menus=Menu::all();
        return view('pages.menuLogged',compact('menus'));
    }

    public function cart()
    {
        return view('cart');
    }

    public function addItemToCart($id)
    {
        $menus=Menu::findOrFail($id);
        $cart=session()->get('cart',[]);
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else{
            $cart[$id]=[
                "name"=>$menus->name,
                "quantity"=>1,
                "price"=>$menus->price,
                "size"=>$menus->size
            ];
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success','Menu item added to cart!');
    }
}
