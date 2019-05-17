var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$(document).ready(function() 
{
    $('#registro').submit(function(e) 
    {
        e.preventDefault();
        $.ajax(
        {
            type: "POST",
            url: '../php/dinosaurio.php',
            data: $(this).serialize(),
            success: function(data)
            {
                    alert('cxread');
                
            }
        });
    });
});

