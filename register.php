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
        <h2> User Registration form</h2>
        
        <form>
          name
    <input type="text" name="n" class="form-control"><br>
          password
    <input type="text" name="p" class="form-control"><br>
          Email
    <input type="text" name="e" class="form-control"><br>
    Phone Number
              <input type="text" name="ph" class="form-control"><br>
              <input type="submit" name="submit" class="btn-btn -info" value="Register"><br>
</form>
<?php
$con=mysqli_connect('localhost','root','','mydb');
if(isset($_REQUEST['submit']))
{
    $n=$_REQUEST['n'];
    $p=$_REQUEST['p'];
    $e=$_REQUEST['e'];
    $ph=$_REQUEST['ph'];
    $q="insert into uinfo values('$n','$p','$e','ph')";
    $x=mysqli_query($con,$q);
    if($x>0)
    header('location:login.php');
else
echo "<br>Could not Register";

}
          ?>  

    </div>
</body>
</html>