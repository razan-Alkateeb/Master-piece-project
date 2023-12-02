<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
{
    public function payment($total)
    {
        // dd($total);
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal_success'),
                "cancel_url" => route('paypal_cancel')

            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" =>  $total
                    ]


                ]

            ]
        ]);
        // dd($response);
        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('paypal_cancel');
        }
    }




    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);

        // dd($response);
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // return "payment is successful";
            $message = "payment is successful";
            $paragraph = "Your subscription has been successfully activated! Now, enjoy the complete range of benefits that FlexGym has to offer.";
            $image = "assets/img/successfully-icon.png";
            return view('user_views.pages.payment_message', compact('message' , 'paragraph' , 'image'));
        } else {
            return redirect()->route('paypal_cancel');
        }
    }
    public function cancel()
    {
        // return "Payment is cancelled!";
        $message = "Payment is cancelled!";
        $paragraph = "oops an error occurred !try again. If you have any questions or need further assistance, please don't hesitate to contact our
        customer support team. Thank you for being a part of FlexGym, and we hope to welcome you back in the future.";
        $image = "assets/img/cancel-icon.png";
        return view('user_views.pages.payment_message', compact('message' , 'paragraph' , 'image'));
    }
}
