<?php
require_once('stripe-php/init.php');

//check whether stripe token is not empty
if(!empty($_POST['stripeToken'])){
    //get token, card and user info from the form
    $token  = $_POST['stripeToken'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $card_num = $_POST['card_num'];
    $card_cvc = $_POST['cvc'];
    $card_exp_month = $_POST['exp_month'];
    $card_exp_year = $_POST['exp_year'];
    $price = $_POST['price'];
    $items = $_POST['items'];
    //include Stripe PHP library
    require_once('stripe-php/init.php');
    
    //set api key
    $stripe = array(
      "secret_key"      => "sk_test_51JsqGOSCLSgfIVDf78EQ03ny09DMnBAnTUQ5xBkg42Tsu6M9R4RyS2h2PE2mLgC4HeeHqKEeqhtFoZ1I3n2Xs1aw00LlXAufEu",
      "publishable_key" => "pk_test_51JsqGOSCLSgfIVDfkv6k1QB76FlILAnwpYogHhrg2tJitn3Xcvst1CiWbvDEIn4BZcjI6G24wPlrlyCEmZApXMP000xhG0FMR0"
    );
    
    \Stripe\Stripe::setApiKey($stripe['secret_key']);
    
    //add customer to stripe
    $customer = \Stripe\Customer::create(array(
        'email' => $email,
        'source'  => $token,
    ));
    
    //item information
    $itemName = "SBK Parts";
    $itemPrice = $price; // Pass Value
    $currency = "inr";
    $orderID = "SBKP9271239";
    
    //charge a credit or a debit card
    $charge = \Stripe\Charge::create(array(
        'customer' => $customer->id,
        'amount'   => $price,
        'currency' => $currency,
        'description' => $itemName,
        'metadata' => array(
            'order_id' => $orderID
        )
    ));
    
    //retrieve charge details
    $chargeJson = $charge->jsonSerialize();

    //check whether the charge is successful
    if($chargeJson['amount_refunded'] == 0 && empty($chargeJson
['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){
        //order details 
        $amount = $chargeJson['amount'];
        $balance_transaction = $chargeJson['balance_transaction'];
        $currency = $chargeJson['currency'];
        $status = $chargeJson['status'];
        $date = date("Y-m-d H:i:s");
        
        //include database config file
        include_once 'dbConfig.php';
        
        //insert tansaction data into the database
        $sql = 
"INSERT INTO orders(name,email,card_num,card_cvc,card_exp_month,card_exp_year,
item_price,item_price_currency,paid_amount,
paid_amount_currency,txn_id,payment_status,created,modified) VALUES
('".$name."','".$email."','".$card_num."','".$card_cvc."','".$card_exp_month."',
'".$card_exp_year."','".$itemPrice."','".$currency."',
'".$amount."','".$currency."','".$balance_transaction."'
,'".$status."','".$date."','".$date."')";
        $insert = $db->query($sql);
        $last_insert_id = $db->insert_id;
        
        //if order inserted successfully
        if($last_insert_id && $status == 'succeeded'){
            $url = 'location: ../success.php?items=' . $items . '&txn=' . $balance_transaction;
            header($url);
        }else{
            $statusMsg = "Transaction has been failed";
            set_time_limit(5);
            header('location: cart.php');
        }
    }else{
        $statusMsg = "Transaction has been failed";
        set_time_limit(5);
        header('location: cart.php');
    }
}else{
    $statusMsg = "Form submission error.......";
    set_time_limit(5);
    header('location: cart.php');
}

//show success or error message
echo $statusMsg;
?>