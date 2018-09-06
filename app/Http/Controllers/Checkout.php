<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree_ClientToken;
use Braintree_Gateway;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class Checkout extends Controller
{
    public function gettoken()
    {
        //$user=User::find(1);
        //return $user;

         $gateway = new Braintree_Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchant_id'),
            'publicKey' => config('services.braintree.public_key'),
            'privateKey' => config('services.braintree.private_key')
        ]);
        $clientToken = $gateway->clientToken()->generate();


        return view('checkout', compact(['clientToken']));
    }
    public function payment(Request $request)
    {
        //dd(request()->all());
        //4242 4242 4242 4242
        // failed: 4000111111111115

        //echo $request['_token'];

        //*


        $gateway = new Braintree_Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchant_id'),
            'publicKey' => config('services.braintree.public_key'),
            'privateKey' => config('services.braintree.private_key')
        ]);

       // $result = $gateway->customer()->create([
       //      'id' => 'customer_123',
       //      'firstName' => 'Eda'
       //  ]);

        // $customer = $gateway->customer()->find('customer_123');
       // if ($customer) {
       //     echo "ekziton customer";
       // }

       // $result = $gateway->paymentMethod()->create([
       //      'customerId' => 'customer_123',
       //      'paymentMethodNonce' => $request['payment_method_nonce'],
       //      'options' => [
       //          'verifyCard' => true
       //      ]
       //  ]);

        // $result->success;
        // false

        // $verification = $result->creditCardVerification;
        // $verification->status;
        // // "processor_declined"

        // $verification->processorResponseCode;
        // // "2000"

        // $verification->processorResponseText;
        // // "Do Not Honor"



        //dd($result);       


		// Then, create a transaction:
		$result = $gateway->transaction()->sale([
		    'amount' => '5001.00',
		    'paymentMethodNonce' => $request['payment_method_nonce'],
		    'options' => [ 'submitForSettlement' => true ]
		]);

		//dd($result);
		if ($result->success) {
		    print_r("success!: " . $result->transaction->id);
		} else if ($result->transaction) {
		    print_r("Error processing transaction:");
		    print_r("\n  code: " . $result->transaction->processorResponseCode);
		    print_r("\n  text: " . $result->transaction->processorResponseText);
		} else {
		    print_r("Validation errors: \n");
		    print_r($result->errors->deepAll());
		}

        //*/
    
    }

    
}
