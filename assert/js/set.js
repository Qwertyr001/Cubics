var base_url = "http://localhost/cubics/";

function set_combo( action , id )
{    
    $("#"+action).html('<option value="">Loding..</option>'); 
   var c=0;
   var cc = setInterval(function(){
       
       c++;
       if(c > 1)
       {
            clearInterval(cc);
       }    
       else
       {
           $data = {id:id};
           var path = base_url + "backend/" + action;
           $.post( path , $data , function(output){
                 //alert(output);
                 //$('#city').append(output);
                $("#"+action).html(output); 
                 //document.getElementById(action).value = alert(output);
            } );
   
       }    
   } ,500 );
    
    
    
}

function change_status( action , id )
{
    if($("#"+action+id).hasClass('fa-toggle-off'))
    {
        //class
        $("#"+action+id).removeClass('fa-toggle-off').addClass('fa-toggle-on');
        //Title
        $("#"+action+id).removeAttr('title').removeAttr('data-toggle').attr('data-toggle','tooltip').attr('data-original-title','Active');
        $("#"+action+id).css('color','#c72727');
    }
    else
    {
        $("#"+action+id).removeClass('fa-toggle-on').addClass('fa-toggle-off');
        
        $("#"+action+id).removeAttr('title').removeAttr('data-toggle').attr('data-toggle','tooltip').attr('data-original-title','Deactive');
        $("#"+action+id).css('color','#777');
    }   
    
    $data = { action:action , id:id };
    var path = base_url + 'backend/change_status';
    
    $.post( path , $data , function(output){
    });
    
}