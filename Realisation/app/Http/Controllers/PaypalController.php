<?php

namespace App\Http\Controllers;

use App\Models\Cart;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayPalController extends Controller
{
    public $provider;

    public function __construct()
    {
        $this->provider = new PayPalClient;
        $this->provider->getAccessToken();
    }

    public function payment()
    {
        
        // Initialize the purchase units array
        $purchaseUnits = [];
        
        // Loop through each cart item and add it to the purchase units array
       
            

            $unit = [
                'name' => 'titi',
                'quantity' => '1',
                'unit_amount' => [
                    'currency_code' => 'USD',
                    'value' => '300'
                ]
            ];

            $purchaseUnits[] = $unit;
            
        

        // Set the purchase units and application context fields in the order array
        $order = [
            'intent' => 'CAPTURE',
            'purchase_units' => [
                [
                    'items' => $purchaseUnits,
                    'amount' => [
                        'currency_code' => 'USD',
                        'value' => '300',
                        'breakdown' => [
                            'item_total' => [
                                'currency_code' => 'USD',
                                'value' => '300'
                            ],
                        ]
                    ]
                ]
            ],
            'application_context' => [
                'return_url' => url('payment-success'),
                'cancel_url' => url('payement-failed')
            ]
        ];

        $response = $this->provider->createOrder($order);
        
        try {
            $approve_paypal_url = $response['links'][1]['href'];
            return Redirect::to($approve_paypal_url);
        } catch (\Throwable $th) {
            dd($th->getMessage(), $response);
        }
    }

    public function cancel(Request $request)
    {
        dd('payment cancled');
    }

    public function success(Request $request)
    {
    //     $response = $this->provider->capturePaymentOrder($request->get('token'));
    //     $cartItems = Cart::where('user_id', auth()->id())->with('product')->get();
    //     $products = [];
    //     $total = 0;
    //     foreach ($cartItems as $cartItem) {
    //         $product = $cartItem->product;
    //         $products[] = $product->id;
    //         $total += $product->price * $cartItem->quantity;

    //         $newStockQuantity = $product->stock - $cartItem->quantity;
    //         $product->update(['stock' => $newStockQuantity]);
    //     }

    //     $order = session()->get('orderData');

    //     $order['total'] = $total;
    //     $order['payment_status'] = 'Paid';
    //     $order['order_status'] = 'In progress';
    //     $order['products'] = $products;

    //     $orderCreate = Order::create($order);

    //     $orderCreate->products()->attach($order['products']);

    //     foreach ($cartItems as $cartItem) {
    //         $cartItem->delete();
    //     }
    //     return redirect()->route('success')->with('message','Your payment is completed');
    }
}

    // public function handlePayment(){
        
    // }

    // public function paymentSuccess(){

    // }

    // public function paymentFailed(){

    // }
// }
