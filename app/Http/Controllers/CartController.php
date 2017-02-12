<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Products;
use App\Points;
use App\Orders;
use App\ProductOrders;

use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        $p = Points::all()->count();

        if($p  == 0)
        {
            return redirect('/');
        }else
        {

        $cart = Cart::content();

        $points = $cart->sum('options.points');
        $SubTotal = $cart->sum('price');

        $totalPoints = Points::find('1')->totalpoints;
        $AmountPoints = Points::find('1')->amountSum;
        $amountEntrega = Points::find('1')->amountEntrega;
     
        if($points > $totalPoints)
        {
            $Total = $SubTotal+$AmountPoints;
            return view("Cart.index")->with(["cart" => $cart, "Total" => $Total, "amountEntrega" => $amountEntrega]);
        }else
        {
            $Total = $SubTotal+0;
            return view("Cart.index")->with(["cart" => $cart, "Total" => $Total, "amountEntrega" => $amountEntrega]);
        }
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirmPurchase(Request $request)
    {

         $entrega = $request->fastDelivery;

        if($entrega == '1')
        {   
            $orders = new Orders($request->all());
            $orders->delivered = '1';
            $amountEntrega = Points::find('1')->amountEntrega;
            $orders->totalPrice = $request->totalPrice+$amountEntrega;

        }else
        {
            $orders = new Orders($request->all());
            $orders->delivered = '1';
            $orders->totalPrice = $request->totalPrice;
        }

        $orders->save();

        
        $cart = Cart::content();

        foreach($cart as $c)
        {
            $products = new ProductOrders();

            $products->idPedido = $orders->id;
            $products->title = $c->name;
            $products->quantity = $c->qty;
            $products->price = $c->price;

            $products->save();
        }

       Cart::destroy();
       return redirect('ItemsCart');



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addItem(Request $request, $id)
    {
        $p = Products::find($id);
        Cart::add($id, $p->title, 1 , $p->price, ["points" => $p->points]);
        return redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $cart = Cart::content();

        $points = $cart->sum('options.points');
        $SubTotal = $cart->sum('price');

        $totalPoints = Points::find('1')->totalpoints;
        $AmountPoints = Points::find('1')->amountSum;
        $amountEntrega = Points::find('1')->amountEntrega;
     
        if($points > $totalPoints)
        {
            $Total = $SubTotal+$AmountPoints;
            return view("Cart.show")->with(["cart" => $cart, "Total" => $Total, "amountEntrega" => $amountEntrega]);
        }else
        {
            $Total = $SubTotal+0;
            return view("Cart.show")->with(["cart" => $cart, "Total" => $Total, "amountEntrega" => $amountEntrega]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ventas()
    {
        $orders = Orders::all();

        return view("Sales.index")->with('orders', $orders);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pedido($id)
    {
        
        $o = ProductOrders::where('idPedido', $id)->get();

             return response()->json(
                $o->toArray()
                );
        
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('ItemsCart');
    }
}
