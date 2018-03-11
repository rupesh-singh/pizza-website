<html>
<head>
<title>Brothers Pizza</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>   

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

<script>
$('document').ready(function() {
/* handle form validation */
$("#register-form").validate({
rules:
{
firstName: {
required: true,
minlength: 3
},

email: {
required: true,
email: true
},

phone: {
required: true
},


birthDate: {
required: true
},


gender: {
required: true,
},


meal: {
required: true,
},



},
messages:
{
firstName: "please enter your name",
email: "please enter a valid email address",
phone: "please provide a phone number",
dob: "please enter your name",
gender: "please enter your name",
meal: "please enter your name"

},
submitHandler: submitForm
});
/* handle form submit */

function submitForm() {
var data = $("#register-form").serialize();
$.ajax({
type : 'POST',
url : 'ajaxjs.php',
data : data,
beforeSend: function() {
$("#error").fadeOut();
$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span>   registering...');
},


success : function(response) {
	alert(response)
if(response==1){
	alert("i'm here 1")
$("#error").fadeIn(1000, function(){
$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   Sorry email already taken !</div>');
$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');
});
} 

else if(response=="registered"){

$("#error").fadeIn(1000, function(){
$("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span>  You are registered! Thanks !! :) </div>');
$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');
});
} 
else {
	alert("i'm here reg")
$("#error").fadeIn(1000, function(){
$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span>   '+data+' !</div>');
$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');
});
}
}
});
return false;
}
});
</script>
<script type="text/javascript">
 
    function chckUserfun(val)
    {
        $.ajax({
            
        type:"POST",
            url:"chckuserext.php",
            data:'Name='+val,
            success:function(data){
                $("#msg").html(data);
            }
            
            
            
        });
    }
    
    
    
   
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

 body {margin: 0;}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #d60000;}
    
    ul.topnav li a.main{background-color: #660000}
    
ul.topnav li.right {float: right;}

@media screen and (max-width: 600px){
    ul.topnav li.right, 
    ul.topnav li {float: none;}
}
 
</style>


</head>

	
	

<body bgcolor="black">

<!-- HEADER -->
<ul class="topnav">
<li><a style="font-family: Comic Sans MS;font-size: 17px" href="index.html"><b>Brothers Pizza</b></a></li>
  <li><a  href="index.html">Home</a></li>
   <li><a href="pizza.php">pizzas</a></li>
      <li><a href="location.html">location</a></li>
      <li><a class="active" href="register.php">Register</a></li>
      <li><a href="order.php">Order Online</a></li>
  <li class="right"><a href="about.html">About</a></li>
</ul>



<div class="container">
            <form class="form-horizontal" role="form" id="register-form" method="POST">
			
                <h2><b>Regsiter here</b></h2>
<div id="error">
</div>            
			<div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="firstName" id="firstName" placeholder="Name" class="form-control" autofocus onkeyup="chckUserfun(this.value)"/>
    <div id="msg"></div>
                      <!--  <input type="text" name="firstName" id="firstName" placeholder="Full Name" class="form-control" autofocus>-->
                        <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="col-sm-3 control-label">Phone number</label>
                    <div class="col-sm-9">
                        <input type="text" name="phone" id="phone" placeholder="phone number" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" name="birthDate" id="birthDate" class="form-control">
                    </div>
                </div>
                
				
				<div class="form-group">
                    <label for="gender" class="col-sm-3 control-label">Gender</label>
                    <div class="col-sm-9">
                        <select name="gender" id="gender" class="form-control">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
				
				
				<div class="form-group">
                    <label for="meal" class="col-sm-3 control-label">Meal Preference</label>
                    <div class="col-sm-9">
                        <select name="meal" id="meal" class="form-control">
                            <option>VEG</option>
                            <option>NON-VEG</option>
                        </select>
                    </div>
                </div>
				
				
				
				<div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit"><span class="glyphicon glyphicon-log-in"></span> Register</button>
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