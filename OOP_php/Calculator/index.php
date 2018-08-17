<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
        input{
            width:200px;
            height:30px;
            margin:10px;
            font-size:15px;
        }
        select{
            margin:10px;
            width:90px;
            height:30px;
        }
        button{
            background-color:#0000ff;
            color:#ffffff;
            margin:10px;
            height:30px;
            width:90px;
        }
    </style>
</head>
<body>
    <form action="cal.php" method="POST">
        <input type="number" name="num1"> <br>
        <input type="number" name="num2"> <br>
        <div>
            <select name="op" style="float:left">
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            <select>
            <button type="submit" name="sub">Calculate</button>
        </div>
    </form>
</body>
</html>