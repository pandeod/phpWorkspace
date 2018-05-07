$(document).ready(function()
{
var xmlhttp = new XMLHttpRequest();

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        if(myObj[0]=="9999")
        {
            var signup = "<li><a href='REGISTRATION/registration.html' style='color:white;''><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>"
            var login  = "<li><a href='LOGIN/login.html' style='color:white;''><span class='glyphicon glyphicon-log-in'></span> Login</a></li>"
            $("#hide").append(signup,login);     // Append new elements

        }
        else
        {
          var user = "<li class='dropdown user user-menu'><a href='#' class='dropdown-toggle' Style= 'background-color : #c44dff;' data-toggle='dropdown'><img src='CACHE/user.jpg' class='user-image' alt='User Image'><span class='hidden-xs' STYLE='color: #fff; text-shadow: 3px 2px #aa00ff;'>"+myObj[0]+"</span> </a> <ul class='dropdown-menu'><!-- Menu Footer--> <li class='user-footer' STYLE='box-shadow: 0px -10px 10px #b31aff;'> <div class='pull-left'> <a href='COLLEGES/colleges.php' class='btn btn-default btn-flat'>Find Colleges</a> </div> <div class='pull-right'> <a href='destroy.php' class='btn btn-default btn-flat'>Log out</a> </div> </li> </ul> </li>";
          $("#hide").append(user);          
        }
    }
};
xmlhttp.open("GET", "sessionCheck.php", true);
xmlhttp.send();

});