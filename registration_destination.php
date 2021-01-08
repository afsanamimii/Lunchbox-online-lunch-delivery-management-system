 <?php
 SESSION_START();

 include("databaseconnection.php");

 if(isset($_POST['submit'] ))
 {  $id=$_POST['id'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $pass=$_POST['password'];


$_SESSION['name']=$name;

 $sql="insert into customerinfo(id,name,phone,address,password)"."values('$id','$name','$phone','$address','$pass')";


 $res=mysqli_query($conn,$sql);
 if(!$res)

        {
         die("queri failed error.....!!!!!!!!");
        }

        else  echo "Registration sucessfull";
        header("location:menucard.php");

}







 ?>
