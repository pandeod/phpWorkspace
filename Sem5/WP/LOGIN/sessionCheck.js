$(document).ready(function()
{
var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        if(myObj[0]=="9999" )
        {
            
            if(document.referrer=="http://localhost/3nov/WP/LOGIN/login.php")
                {
                    $("#logged").text("*looks like You havent yet Registered*");
                }
            else
                {
                    $("#logged").text(" ");
                }
        }
        else
        {
         window.location.replace('../index.html');  
        }
    }
};
xmlhttp.open("GET", "sessionCheck.php", true);
xmlhttp.send();

});