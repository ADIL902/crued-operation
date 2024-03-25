<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="row">
<hr>    <center><h1>CURD Operation in Mysql Using PHP</h1></center><hr>
    <div class="col-md-3"></div>
    <div class="col-md-6">
<?php
$con=mysqli_connect('localhost','root','','mydb');
$q="select * from student";
$rs=mysqli_query($con,$q);
echo "<a href='insert.php' class='btn btn-success'>Add Record</a><br><br><table class='table table-bordered table-striped table-hover table-dark'>";
echo "<tr><td>ID</td><td>Name</td><td>Course</td><td>Image</td><td>Action</td></tr>";
while($r=mysqli_fetch_array($rs))
{
echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td><img src='image\\$r[3]' height='50' width='50'></td>";
echo "<td><a href='delete.php?delid=$r[0]' class='btn btn-danger'>Delete</a> &emsp; <a href='edit.php?upid=$r[0]' class='btn btn-info'>Edit</a></td></tr>";
}
?>