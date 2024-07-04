<?php

namespace App\Http\Controllers;

use App\Models\AFood;
use App\Models\MFoodCategory;
use Illuminate\Http\Request;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Invoice;

class FoodController extends Controller
{
    //
    public function FoodListing(){
        // dd('test');
        $aFoodArray = AFood::all();
        $mFoodCategoryArray = MFoodCategory::with('AFood')->get();

        // dd($aFoodArray);

        return view('Food.listing', compact('aFoodArray', 'mFoodCategoryArray'));
    }

    public function addToCart(Request $request)
    {   

        
        $product = AFood::findOrFail($request->food_id);

        $cart = $request->session()->get('cart',[]);

        if(isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                "name" => $product->name,
                "quantity" => $request->quantity,
                // "discount_price" => $product->discount_price,
                "price" => $product->price,
                // "image" => $product->images
            ];
        }

        
        $request->session()->put('cart', $cart);

        $cart_products = collect(request()->session()->get('cart'));
        $cart_total = 0;
        // foreach ($cart_products as $key => $product) {
            
        //     $cart_total+= $product['quantity'] * $product['discount_price'];
        // }

        // $renderHTML = view('frontend.cart.mini-cart-render',compact('cart_products','cart_total'))->render();
        $total_products_count = count(request()->session()->get('cart'));
        return response()->json(['total_products_count'=>$total_products_count],200);
    }

    public function reduceFromCart(Request $request)
    {   

        
        $product = AFood::findOrFail($request->food_id);

        $cart = $request->session()->get('cart',[]);

        if(isset($cart[$product->id])) {
            $cart[$product->id]['quantity']--;
        } 

        
        $request->session()->put('cart', $cart);

        $cart_products = collect(request()->session()->get('cart'));
        $cart_total = 0;
        // foreach ($cart_products as $key => $product) {
            
        //     $cart_total+= $product['quantity'] * $product['discount_price'];
        // }

        // $renderHTML = view('frontend.cart.mini-cart-render',compact('cart_products','cart_total'))->render();
        $total_products_count = count(request()->session()->get('cart'));
        return response()->json(['total_products_count'=>$total_products_count],200);
    }

    
    public function removeFromCart(Request $request)
    {
        $id = $request->product_id;

        $cart = $request->session()->get('cart');
        if (isset($cart[$id])) {
            
            unset($cart[$id]);
        }
        $request->session()->put('cart',$cart);
    }

    public function showCart()
    {
        $cart_products = collect(request()->session()->get('cart'));

        $cart_total = 0;
        if(session('cart')){
            foreach ($cart_products as $key => $product) {
                
                $cart_total+= $product['quantity'] * $product['price'];
            }
        }
        
        // dd($cart_total);
        // $products = Product::has('images')->with('images')->latest()->limit(10)->get();        
        $total_products_count = request()->session()->get('cart') ? count(request()->session()->get('cart')) : 0;
        return view('Food.ShowCart',compact('cart_products','cart_total','total_products_count'));
        //return view('frontend.cart.mini-cart-render',compact('cart_products'));
    }

    public function createReceipt(){
        $cart_products = collect(request()->session()->get('cart'));
        // dd($cart_products);

        $client = new Party([
            'name'          => 'Mommy Carren',
            'phone'         => '(520) 318-9486',
            'address'       => 'Jl.kol.pol.m.thaher no 52.kel.pakuan baru kec.jambi selatan 36132, Wijaya Pura, Jambi Selatan, Jambi City, Jambi 36312, Indonesia',
            
        ]);
        
        $customer = new Party([
            'name'          => 'Roosevelt Lloyd',
            'address'       => 'The Green Street 12',
            'custom_fields' => [
                'order number' => '> 654321 <',
            ],
        ]);

        $items = [];
        foreach($cart_products as $product){
            $temp = InvoiceItem::make($product["name"])
                ->pricePerUnit($product["price"])
                ->quantity($product["quantity"]);
            $items[] = $temp;
        }

        $invoice = Invoice::make('receipt')
            ->series('BIG')
            // ability to include translated invoice status
            // in case it was paid
            ->sequence(667)
            ->serialNumberFormat('{SEQUENCE}/{SERIES}')
            // ->date(now()->subWeeks(3))
            // ->dateFormat('m/d/Y')
            ->seller($client)
            ->buyer($customer)
            ->currencySymbol('Rp')
            ->currencyCode('Rupiah')
            ->currencyFormat('{SYMBOL}{VALUE}')
            ->currencyThousandsSeparator('.')
            ->currencyDecimalPoint(',')
            ->filename('test')
            ->addItems($items)
            ->payUntilDays(0)
            // ->logo(public_path('vendor/invoices/sample-logo.png'))
            ->save('public');

            return $invoice->stream();

            
    }

}
