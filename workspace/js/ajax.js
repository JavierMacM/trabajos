function getRequestObject() {
  // Asynchronous objec created, handles browser DOM differences

  if(window.XMLHttpRequest) {
    // Mozilla, Opera, Safari, Chrome IE 7+
    return (new XMLHttpRequest());
  }
  else if (window.ActiveXObject) {
    // IE 6-
    return (new ActiveXObject("Microsoft.XMLHTTP"));
  } else {
    // Non AJAX browsers
    return(null);
  }
}

function loadContent(){

   var request=getRequestObject();
   if(request!=null)
   {
       
     var url='../model_controller/getAccidentHistory.php';
     request.open('POST',url,true);
     request.onreadystatechange = 
            function() { 
                if((request.readyState==4)){
                    // Asynchronous response has arrived
                    var ajaxResponse=document.getElementById('history');
                    ajaxResponse.innerHTML=request.responseText;
                    ajaxResponse.style.visibility="visible";
                }     
            };
     request.send(null);
   }
}


$(document).ready(function() 
{
    $("#id_form").submit(function(event){
      event.preventDefault();
       $.ajax(
          {
              type: "POST",
              url: '../model_controller/registerAccident.php',
              data: $(this).serialize(),
              success: function(data)
              {
                loadContent();
              }
          }  
        );
    });
});


