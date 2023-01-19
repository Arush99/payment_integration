<script src="https://checkout.razorpay.com/v1/checkout.js"></script> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>


    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="check/checkout.css">
</head>
<body class ="card" >
    <div class="container">
    <div class="row justify-content-center"></div>
        <div class="col-lg-6 px-4 pb-4">
            <h4 class="text-center text-info p-2"><strong>Complete your Order</strong></h4>
            <!-- <div class="jumbotron p-3 mb-2 text-center">

            </div> -->
            </div>
            </div>
<form>
    <label id="nm"><strong> Your Name:  </strong></label> 
    <input type="textbox" name="name" id="name" placeholder="Enter your name"/><br/><br/> 
    <label> <strong>Your Amount:</strong> </label>     
    <input type="textbox" name="amt" id="amt" placeholder="Enter your amount"/><br/><br/>         
    <input type="button" name="btn"  id= "btn"  value=" Pay now" onClick="pay_now()"/>
                    </form>
                    <script>
                    function pay_now(){
                        var name=jQuery('#name').val();
                        var amt=jQuery('#amt').val();
                    var options = {   
                    "key":"rzp_test_o30bR0ULTo72Mo", // Enter the Key ID generated from the Dashboard    
                    "amount": amt, 
                    // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise    
                    "currency": "INR",    
                    "name": "Pay now!",    
                    "description": "secure way to pay",    
                    "image": "https://example.com/your_logo",    
                    //"order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1    
                    "handler": function (response){
                        jQuery.ajax({
                            type:'post',
                            url:'payment_process.php',
                            data:"payement_id"+response.razorpay_payment_id+"&amt="+amt+"&name="+name,
                            success:function(result){
                                window.location.href="thank_you.php";
                            }
                        });   
                    }
                        };       
                        // alert(response.razorpay_payment_id);        
                        // alert(response.razorpay_order_id);       
                        //  alert(response.razorpay_signature)    },    
                        //  "prefill": {        
                        //      "name": "Gaurav Kumar",       
                        //      "email": "gaurav.kumar@example.com",        
                        //      "contact": "9999999999"    },    
                        //      "notes": {        "address": "Razorpay Corporate Office"    },    
                        //      "theme": {        "color": "#3399cc"    }};
                            
                            //  rzp1.on('payment.failed', 
                            //  function (response){        
                            //     alert(response.error.code);       
                            //     alert(response.error.description);        
                            //     alert(response.error.source);        
                            //     alert(response.error.step);        
                            //     alert(response.error.reason);        
                            //     alert(response.error.metadata.order_id);        
                            //     alert(response.error.metadata.payment_id);});
                                //document.getElementById('rzp-button1').onclick = function(e){    
                                    var rzp1 = new Razorpay(options);
                                    rzp1.open();  
                    }
                    // <button id="rzp-button1">Pay</button>
                    // <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                    
                    
