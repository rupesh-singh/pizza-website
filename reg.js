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
url : 'ajaxjx.php',
data : data,
beforeSend: function() {
$("#error").fadeOut();
$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span>   registering...');
},


success : function(response) {
if(response==1){
$("#error").fadeIn(1000, function(){
$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   Sorry email already taken !</div>');
$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');
});
} 

else if(response=="registered"){

} 
else {
	alert("here bitch");
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