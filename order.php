<html>
<head>
<title>Pizza mania</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

<script>



$('document').ready(function() {
	
$("#register-form2").validate({
rules:
{
firstName: {
	required: true,
	minlength: 3
},

address: {
	required: true
},

phone: {
	required: true
},

quantity:{
	required:true,
},

pizza:{
	required:true,
},


size:{
	required:true,
},


toppings:{
	required:true,
}

},
messages:
{
firstName: "please enter your name",
address: "please enter a your address",
phone: "please provide a phone number",
quantity: "please specify qunatity",
toppings: "please specify qunatity",
size: "please specify qunatity",
pizza: "please specify qunatity"

},
submitHandler: submitForm
});


function submitForm() {
	
var data = $("#register-form2").serialize();
$.ajax({
type : 'POST',
url : 'orderphp.php',
data : data,
beforeSend: function() {
$("#error").fadeOut();
$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span>   saving.... ');
},


success : function(response) {
	alert(response)
if(response==""){
$("#error").fadeIn(1000, function(){
$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   Sorry something went wrong !</div>');
$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span>   Place order');
});
} 

else {
$("#error").fadeIn(1000, function(){
$("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span>  Your order is placed!<br> AMOUNT: '+ response +' <br> Keep the money ready !! :)</div>');
$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span>   Place order');
});
} 
}
});
return false;
}

});
</script>


<style>
.social:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 .social {
     -webkit-transform: scale(0.8);
     /* Browser Variations: */
     
     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }

/*
    Multicoloured Hover Variations
*/
 
 #social-fb:hover {
     color: #3B5998;
 }
 #social-tw:hover {
     color: #4099FF;
 }
 #social-gp:hover {
     color: #d34836;
 }
 #social-em:hover {
     color: #f39c12;
 }

 
 
</style>


</head>

	
	

<body bgcolor="black">

<!-- HEADER -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">Arya's Pie</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.html">Home</a></li>
      <li><a href="pizza.php">pizzas</a></li>
      <li><a href="location.html">location</a></li>
      <li><a href="about.html">Rss Feeds</a></li>
	  <li><a href="register.php">Register</a></li>
      <li><a href="order.php">Order Online</a></li>
	</ul>
  </div>
</nav>



<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ait";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
?>



<div class="container">
            <form class="form-horizontal" role="form" id="register-form2" method="POST">
			
                <h2>Place your order</h2>
<div id="error">
</div>            
			<div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="firstName" id="firstName" placeholder="Full Name" class="form-control" autofocus>
                        <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                        <textarea name="address" id="address" placeholder="Address" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Phone number</label>
                    <div class="col-sm-9">
                        <input type="text" name="phone" id="phone" placeholder="phone number" class="form-control">
                    </div>
                </div>
				
				
                <div class="form-group">
                    <label for="pizza" class="col-sm-3 control-label">Pizza Preference</label>
                    <div class="col-sm-9">
                        
						<select name="pizza" id="pizza" class="form-control">

						<?php                        
    $sql = "SELECT name FROM pizzas";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
while( $emp = mysqli_fetch_assoc($resultset) ) {
?>
<option><?php echo $emp["name"]; ?> </option>
 
 <?php
}
?> 
</select>
</div>
</div>

				
				<div class="form-group">
                    <label for="quantity" class="col-sm-3 control-label">Quantity</label>
                    <div class="col-sm-9">
                        <input type="number" name="quantity" id="quantity" placeholder="quantity" class="form-control">
                    </div>
                </div>

                
				
				<div class="form-group">
                    <label for="toppings" class="col-sm-3 control-label">Toppings</label>
                    <div class="col-sm-9">
                        <select name="toppings" id="toppings" class="form-control">
                            <option>Pepperoni</option>
                            <option>Cheese</option>
							<option>Onion</option>
							<option>Mushroom</option>
                        </select>
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="size" class="col-sm-3 control-label">Size</label>
                    <div class="col-sm-9">
                        <select name="size" id="size" class="form-control">
                            <option> SMALL </option>
                            <option> MEDIUM </option>
							<option> LARGE </option>
							</select>
                    </div>
                </div>
				
				
				
				<div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit" onclick="submitForm()"><span class="glyphicon glyphicon-ok"></span>  Place Order</button>
                    </div>
                </div>
            </form> <!-- /form -->
			<hr>
        </div> <!-- ./container -->






<div class="text-center center-block">
            <br />
                <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
</div>  
  
</body>
</html>