<html>
    <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<link rel="stylesheet" href="style.css">
<body>
<div class="row">
    <?php
    $con=mysqli_connect('localhost','root','','mydb');
    $id=$_REQUEST['upid'];
    $q="select * from student where id=$id";
    $rs=mysqli_query($con,$q);
    $r=mysqli_fetch_array($rs);
    ?>
   <hr> <center>
    <h1>
     Edit Username</h1><hr></center>
    <br><br>
    <div class="col-md-3"></div>
    <div class="col-md-4">
    <form method="post" enctype="multipart/form-data"> 
        ID
        <input type="text" name="id" class="form-control" placeholder="ID" value="<?php echo $r[0];?>"><br>  
         Enter name
        <input type="text" name="n" class="form-control" placeholder="Name" value="<?php echo $r[1];?>"><br>
        Enter Course
        <input type="text" name="c" class="form-control" placeholder="Course" value="<?php echo $r[2];?>"><br>
        Select Image
        <input type="file" name="file" class="form-control">
        <img src="image\\<?php echo $r[3];?>" height="100" width='100'>
        <br>
        <input type="submit" class="btn btn-info" value="Update" name="submit">

</form>
<br><br>
<?php


if(isset($_REQUEST['submit']))
{
$id=$_REQUEST['id'];
$n=$_REQUEST['n'];
$c=$_REQUEST['c'];
$img=$_FILES['file']['name'];


if(move_uploaded_file($_FILES['file']['tmp_name'],"image\\$img"))
{
    $q="update `student` set  name='$n',course='$c',image='$img'
     where id=$id";
     
    $x=mysqli_query($con,$q);
    if($x>0)
    {
    header('location:show.php');
    // echo"update successfully";
    }
else{
echo "<br>Could not Update";
}
}
}

?>