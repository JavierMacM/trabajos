$(document).ready(function(){
    
    $("#usuarioreg").submit(function(ev){
        ev.preventDefault();
        
        var formData = {
            'namew'      : $('input[name=name]').val(),
            'lastnamew'  : $('input[name=lastname]').val(),
            'emailw'     : $('input[name=email]').val(),
            'hobbiew'    : $('select[name=hobbie]').val()
        };
        
        $.ajax(
          {
              type: "POST",
              url: 'controller/registerUser.php',
              data: formData,
              success: function(data)
              {
                 M.toast({html: data, classes: 'rounded'});
              }
          }  
        );
    });
    
});