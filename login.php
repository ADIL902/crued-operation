<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="row">    
        <div class="col-md-4"></div>
        <div class="col-md-4">
 
          &ensp;
        <h2> User Login page</h2>
        <form >
         Name
        <input type="text" name="u" class="form-control" placeholder="Enter your username"><br>
        Password
        <input type="password" name="p" class="form-control" placeholder="Enter your password"><br>
        <button type="submit" class="btn btn-primary" name="submit" value="Login">Login</button
</form>

<?php
$con=mysqli_connect('localhost','root','','mydb');
if(isset($_REQUEST['submit']))
{
    $n=$_REQUEST['u'];
    $c=$_REQUEST['p'];
  $q="select * from uinfo where uname='$n' && passwors='$c'";
  $rs=mysqli_query($con,$q);
  $x=mysqli_num_rows($rs);
  if($x>0)
  header('location:show.php');
else
echo "<h3>Invalid User Name or Password</h3><br><a href='register.php' class='btn btn-success'>Register Now</a>";

}
          ?>  

    </div>
</body>
</html>