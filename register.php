<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" '>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<style>

.main{
 	padding: 40px 0;
}
.main input,
.main input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 400px;
    padding: 10px 40px;
	background:#009edf;
	    color: #FFF;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #009edf;
    font-size: 17px;
}


</style>
<body>
<?php
session_start();

    $data=$_POST;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($data['email'])||
       empty($data['password'])||
       empty($data['confirm'])){
          echo "Please fill all required feilds";
          $flag=false;
       }else{
           $flag=true;
       }
    if($data['password']!==$data['confirm']){ 
       echo "Password is not match";
       $flag=false;
    }else{
        $flag=true;
    }

    if(strlen($data['password'])<8){
       echo "Password must be at least 8 charechters";
       $flag=false;
    }else{
        $flag=true;  
    }
    if($flag==true){
        $_SESSION['email']=$_Post['email'];
        $_SESSION['password']=$_Post['password'];
        header("location:login.php");
    }
    
}

    ?>

   
<!--  -->
<div class="container">
			<div class="main">
				<div class="main-center">
				<h5>Sign up once and watch any of our free demos.</h5>
					<form class="" method="post"  >
						
						<!--  -->

						<div class="form-group">
							<label for="email">Your Email</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="email" placeholder="Enter your Email"/>
							</div>
						</div>

						<!--  -->

						<div class="form-group">
							<label for="password">Password</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" placeholder="Enter your Password"/>
								</div>
						</div>

						<div class="form-group">
							<label for="confirm">Confirm Password</label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" placeholder="Confirm your Password"/>
								</div>
						</div>
                        <button type="submit" name='submit'>SUBMIT</button>
                       
                <a href='login.php'>Already have an account? Login</a>
				
						
					</form>
				</div><!--main-center"-->
			</div><!--main-->
		</div><!--container-->




</body>
</html>