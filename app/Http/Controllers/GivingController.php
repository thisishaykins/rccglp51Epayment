<?php

namespace App\Http\Controllers;

use App\User;
use App\Giving;
use App\Offering_Transactions;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GivingController extends Controller
{
    use RegistersUsers;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Giving  $giving
     * @return \Illuminate\Http\Response
     */
    public function show(Giving $giving)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Giving  $giving
     * @return \Illuminate\Http\Response
     */
    public function edit(Giving $giving)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Giving  $giving
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Giving $giving)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Giving  $giving
     * @return \Illuminate\Http\Response
     */
    public function destroy(Giving $giving)
    {
        //
    }

    /**
     * Process transactions through the specified resource.
     *
     * @param  \App\Giving  $giving
     * @return \Illuminate\Http\Response
     */
    public function process(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'currency' => 'required',
            'offering_type' => 'required',
            'offering_amount' => 'required',
        ]);

        // Validate or Recreate User
        $check_user = User::where(['email' => $request->email])->first();
        // var_dump($check_user);
        if ($check_user) {

            $create_giving = Giving::create([
                'user_id' => $check_user->id,
                'offering_id' => $request->offering_type,
                'parish_id' => $request->parish_id,
                'currency_id' => $request->currency,
                'amount' => $request->offering_amount,
                'comment_feedback' => $request->comment,
                'status' => FALSE,
                'status_message' => 'initiated'
            ]);
            // var_dump($create_giving);

            $transaction_reference = Offering_Transactions::orderReference(7);
            // var_dump($transaction_reference);

            $create_transactions = Offering_Transactions::create([
                'user_id' => $check_user->id,
                'giving_id' => $create_giving->id,
                'offering_id' => $request->offering_type,
                'parish_id' => $request->parish_id,
                'currency_id' => $request->currency,
                'amount' => $request->offering_amount,
                'is_success' => FALSE,
                'reference' => $transaction_reference,
                'status' => FALSE,
                'status_message' => 'initiated',
            ]);
            // var_dump($create_transactions);
        } else {
            $new_password = 'Ud2^(@U@109';
            $split_name = explode(" ", $request->full_name);

            $new_user = User::create([
                'first_name' => $split_name[0],
                'last_name' => $split_name[1],
                'email' => $request->email,
                'phone' => $request->mobile,
                'password' => Hash::make($new_password),
            ]);
            var_dump($new_user);

            if ($new_user) {

                $create_giving = Giving::create([
                    'user_id' => $new_user->id,
                    'offering_id' => $request->offering_type,
                    'parish_id' => $request->parish_id,
                    'currency_id' => $request->currency,
                    'amount' => $request->offering_amount,
                    'comment_feedback' => $request->comment,
                    'status' => FALSE,
                    'status_message' => 'initiated'
                ]);
                // var_dump($create_giving);
    
                $transaction_reference = Offering_Transactions::orderReference(7);
                // var_dump($transaction_reference);
    
                $create_transactions = Offering_Transactions::create([
                    'user_id' => $new_user->id,
                    'giving_id' => $create_giving->id,
                    'offering_id' => $request->offering_type,
                    'parish_id' => $request->parish_id,
                    'currency_id' => $request->currency,
                    'amount' => $request->offering_amount,
                    'is_success' => FALSE,
                    'reference' => $transaction_reference,
                    'status' => FALSE,
                    'status_message' => 'initiated',
                ]);
                // var_dump($create_transactions);

            } else {
                echo "Hey no account could be created on your behalf";
            }

        }

        return redirect()->route('giving.pay', $transaction_reference)->with('success','Giving created successfully.');

        // var_dump($request->all());
        // var_dump($request->offering_amount);

        // return redirect()->route('products.index')->with('success','Product created successfully.');
    }

    /**
     * Make Pay through the specified resource.
     *
     * @param  \App\Giving  $giving
     * @return \Illuminate\Http\Response
     */
    public function pay($reference)
    {
        $get_transaction = Offering_Transactions::where(['reference' => $reference, 'status' => false])->with('giving', 'offering', 'parish', 'user', 'currency_item')->firstOrFail();
        // var_dump($get_transaction);

        if($get_transaction) {

            if($get_transaction)

            // $secret_key = env("PAYSTACK_SECRET_KEY");
            $secret_key = "sk_test_578360724c60e23497e3dfdb01125e42ab0e519b";

            $url = "https://api.paystack.co/transaction/initialize";
            $fields = [
                'first_name' => $get_transaction->user->first_name,
                'last_name' => $get_transaction->user->last_name,
                'email' => $get_transaction->user->email,
                'phone' => $get_transaction->user->phone,
                'currency' => $get_transaction->currency_item->title,
                'label' => $get_transaction->offering->title,
                // if (!empty($get_transaction->paystack_subaccount)) {
                    'subaccount' => $get_transaction->paystack_subaccount,
                    'bearer' => "subaccount",
                // }
                'amount' => $get_transaction->amount * 100,
                'reference' => $get_transaction->reference
            ];
            $fields_string = http_build_query($fields);
            //open connection
            $ch = curl_init();
            
            //set the url, number of POST vars, POST data
            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch,CURLOPT_POST, true);
            curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Authorization: Bearer ".$secret_key,
                "Cache-Control: no-cache",
            ));
            
            //So that curl_exec returns the contents of the cURL; rather than echoing it
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            
            //execute post
            $result = curl_exec($ch);
            $result = json_decode($result);
            // var_dump($result);

            if ($result->status){
                
                // echo "Works... ".$result->message;
                $access_code = $result->data->access_code;
                // print_r($access_code);
                $get_transaction->access_code = $access_code;
                $get_transaction->initiated_status = true;
                $get_transaction->save();

                if($get_transaction){
                    return redirect()->away($result->data->authorization_url);
                }

            } else {
                // Fails
                echo $result->message;
            }

            // return view('giving.pay', compact('get_transaction'));

        } else {
            echo "Invalid Transaction";
        }

    }

    /**
     * Confirm Payment through the specified resource.
     *
     * @param  \App\Giving  $giving
     * @return \Illuminate\Http\Response
     */
    public function confirmation()
    {
        // echo "Hi...";
        $trxref = Input::get('trxref');
        $reference = Input::get('reference');
        print_r($reference);
        $get_transaction = Offering_Transactions::where(['reference' => $reference])->with('giving', 'offering', 'parish', 'user', 'currency_item')->firstOrFail();
        var_dump($get_transaction);

    }
}
