var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$(document).ready(function() 
{
    $('#loginform').submit(function(e) 
    {
        e.preventDefault();
        $.ajax(
        {
            type: "POST",
            url: 'php/loginVal.php',
            data: $(this).serialize(),
            success: function(data)
            {
                if (data == "Login") 
                {
                    window.location = 'views/inicio.php';
                }
                else 
                {
                    window.location = 'http://www.youtube.com/watch_popup?v=g_vZasFzMN4&feature?autoplay=1';
                }
            }
        });
    });
});

