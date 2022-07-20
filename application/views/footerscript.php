<script src="<?php echo base_url(); ?>assert/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assert/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assert/js/materialize.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assert/js/custom.js"></script>
<script src="<?php echo base_url(); ?>assert/js/set.js"></script>
<script type="text/javascript">
    function subscriber()
       {
           var email = document.getElementById('email').value;
           
           if( email != "" )
           {
              var ptn = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
              
              if(email.match(ptn))
              {
                 $data = {email:email};;
                 var path = "http://localhost/cubics/backend/subscriber";
                 
                 $.post(path , $data , function(output)
                 {
                    if(output == "1")
                    {
                        $("#err-msg").html("Thank You For Subscribe.");
                        document.getElementById('email').value = '';
                    }
                    if(output == "2")
                    {
                        $("#err-msg").html("You Already Subscribe.");
                        document.getElementById('email').value = '';
                    }
                    
                 });
              }
              else
              {
                  $("#err-msg").html("Please Valid Email.");
              }   
           }
           else
           {
               $("#err-msg").html("Please Enter Email.");
           }   
       }
</script>
