<?php
require_once('stripe/stripe-php/init.php');
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
 header('location: index.php');
}
$charge = $_POST['charge'];
$items = $_POST['items'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>SBK Parts | Payment</title>
    <!---- External css file index.css placed in the folder css is linked-->
    <link href="index.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Stripe JavaScript library -->
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <!-- jQuery is used only for this example; it isn't required to use Stripe -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
    //set your publishable key
    Stripe.setPublishableKey('pk_test_51JsqGOSCLSgfIVDfkv6k1QB76FlILAnwpYogHhrg2tJitn3Xcvst1CiWbvDEIn4BZcjI6G24wPlrlyCEmZApXMP000xhG0FMR0');

    //callback to handle the response from stripe
    function stripeResponseHandler(status, response) {
        if (response.error) {
            //enable the submit button
            $('#payBtn').removeAttr("disabled");
            //display the errors on the form
            $(".payment-errors").html(response.error.message);
        } else {
            var form$ = $("#paymentFrm");
            //get token id
            var token = response['id'];
            //insert the token into the form
            form$.append("<input type='hidden' name='stripeToken' value='" 
    + token + "' />");
            //submit form to the server
            form$.get(0).submit();
        }
    }
    $(document).ready(function() {
        //on form submit
        $("#paymentFrm").submit(function(event) {
            //disable the submit button to prevent repeated clicks
            $('#payBtn').attr("disabled", "disabled");
            
            //create single-use token to charge the user
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
            
            //submit from callback
            return false;
        });
    });
    </script>
</head>
<body style="font-family: 'Nunito';">
    <?php
    include 'includes/header.php';
    ?>
    <div class="container">
    <br><br><br>
    <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
            <span class="glyphicon glyphicon-menu-right text-success"></span> Pay by Credit Card / Debit Card            
          </a>
        </h2>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">
            <!-- display errors returned by createToken -->
            <span style="color: #ff0000;" class="payment-errors"></span>

            <!-- stripe payment form -->
            <form action="stripe/submit.php" method="POST" id="paymentFrm">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" size="50" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" size="50" />
                </div>
                <div class="form-group">
                    <label>Amount Payable: ₹<?php echo $charge ?></label>
                    <input type="hidden" name="price" size="50" value="<?php echo $charge ?>"/>
                </div>
                <div class="form-group">
                    <label>Card Number</label>
                    <input type="text" name="card_num" size="20" autocomplete="off" 
            class="card-number" />
                </div>
                <div class="form-group">
                    <label>CVC</label>
                    <input type="password" name="cvc" size="4" autocomplete="off" class="card-cvc" />
                </div>
                <div class="form-group">
                    <label>Expiration (MM/YYYY)</label>
                    <input type="text" name="exp_month" size="2" class="card-expiry-month"/>
                    <span> / </span>
                    <input type="text" name="exp_year" size="4" class="card-expiry-year"/>
                </div>
                <input type="hidden" name="items" value="<?php echo $items ?>">
                <button type="submit" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;" id="payBtn">Submit Payment</button>
            </form>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
            <span class="glyphicon glyphicon-menu-right text-info"></span> Cash On Delivery        
          </a>
        </h2>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse">
        <div class="panel-body">
            Our delivery partner will ask for ₹<?php echo $charge ?> when delivering the product(s). Please keep the change ready if needed.<br>Estimated time for delivery: 3-4 business days.<br><br>
            <a href="success.php?items=<?php echo $items ?>&txn=COD" class="btn btn-primary" style="background-color: #4c4c4c;border: 1px solid #4c4c4c;" id="payBtn">Confirm Order</a>
    </div>
      </div>
    </div>
    </div>
    </div>
    <div style = "width: 100%; position: fixed; bottom: 0;">
    <?php 
    include 'includes/footer.php';
    ?>
    </div>
</body>
</html>