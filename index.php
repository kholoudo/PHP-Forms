<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.home{
    text-align:center;
    margin:20% auto;
    display:flex;
    flex-direction:column;
}
.home1{
    width:40%;
    margin:auto 30%;
    padding:0.5em;
    border-radius:0.5em;
    background-color:#009EDF;
    color:white;
    font-weight:bold;
    
}
.home1:hover{
    background-color:grey;
}



</style>
<body>
    <div class="home">
<h1>Hello There</h1>
    <button class="home1" onClick="document.location='register.php'" >Register</button>
    <button class="home1" onClick="document.location='login.php'">Login</button>
    </div>
</body>
</html>