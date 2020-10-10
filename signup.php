
<!doctype html>
<html lang="en">
  <head>
    <title>
        
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="login.css">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/FitText.js/1.1/jquery.fittext.min.css"></script> 
     <link rel="stylesheet" href="C:\Users\User\Desktop\Bootstrap_Example\css\main.css">
    <link rel="stylesheet" href="C:\Users\User\Desktop\Bootstrap_Example\css\boots.css">
    <link rel="stylesheet" href="C:\Users\User\Desktop\Bootstrap_Example\css\dropdown.css">
 
  
 </head>
 <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="signup.php">Signup</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addbook.php">AddBook</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="return.php">Return</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="borrow.php">Borrow</a>
      </li>
    
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="row">
<h2 align='center'>Customer Registration Form</h2>
<br>
</div>
<br>
  <div class="container">
  <form action="signup.php" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="name"></label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email"></label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Your email..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country"></label>
    </div>
    <div class="col-75">
      <select id="country" name="loc">
        <option value="street1">street1</option>
        <option value="street1">street1</option>
        <option value="street1">street1</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="mobile"></label>
    </div>
    <div class="col-75">
      <input type="text" id="mobile" name="mobile" placeholder="Your mobile no..">
	  </div>
  </div>
 
  <div class="row">
    <div class="col-25">
      <label for="mobile"></label>
    </div>
    <div class="col-75">
      <input type="digit" id="age" name="age" placeholder="Your age">
	  </div>
  </div>
 
  
  
  <div class="row">
    <div class="col-25">
      <label for="pass"></label>
    </div>
    <div class="col-75">
      <input type="password" id="pass" name="pass" placeholder="Your password..">
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit" name="submit">
  </div>
  </form>
</div>
</div>



 </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 </body>
 </html>

<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$loc=$_POST['loc'];
	$mobile=$_POST['mobile'];
	$age=$_POST['age'];
	$pass=$_POST['pass'];
	//customer id generation
	$num=rand(10,100);
	$cus_id="c-".$num;
	
	
	
	$query="insert into customer values('$cus_id','$name','$loc',$mobile ,'$age','$email','$pass')";
	if(mysqli_query($con,$query))
	{
		echo "Successfully inserted!";
	
    }
	else
	{
		echo "error!".mysqli_error($con);
	}
}
?>