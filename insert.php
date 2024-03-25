<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="row">
    <hr>
    <center><h1>Insert data</h1></center>
    <hr>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form method="post" enctype="multipart/form-data">
            Name
            <input type="text" name="n" class="form-control" placeholder="Enter name"><br>
            course
            <input type="text" name="c" class="form-control" placeholder="Enter course"><br>
            Select image
            <input type="file" name="file" class="form-control"><br>
            <input type="submit" name="submit" class="btn btn-info" value="insert">

        </form>
        <br><br>
        <?php
        $con=mysqli_connect('localhost','root','','mydb');
        if(isset($_REQUEST['submit'])){
            $n=$_REQUEST['n'];
            $c=$_REQUEST['c'];
            $img=$_FILES['file']['name'];
            
if (move_uploaded_file($_FILES['file']['tmp_name'],'image\\$img')){
$q="insert into student(name,course,image)values('$n','$c','$img')";
$rs=mysqli_query($con,$q);
if($rs>0)
    header('location:show.php');

else{
echo"Could not insert";
}

}
else{
    echo"could not upload file";
}
}



        
        
        ?>
    </div>
</div>