<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>   
    </head>
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
    
    Enter Username: <input type="text" placeholder="Name" onkeyup="chckUserfun(this.value)"/>
    <div id="msg"></div>








</html>