<?php
$connection=mysqli_connect("sql105.unaux.com","unaux_31384517","bikashens","unaux_31384517_form");
if(!$connection)
{
    echo "server coudn't found";
}
else{
    echo "connected";
}
$name=$_POST['username'];
$email=$_POST['useremail'];
$msg=$_POST['msg'];
$phoneno=$POST['phno'];
$add=$_POST['addr'];
if($connection){
  
}
$query =   "INSERT INTO bikas(name,email,msg,phonenumber,address) VALUES
('{$name}','{$email}','{$msg}','{$phoneno}','{$add}')";
$result = mysqli_query($connection,$query);
if($result){
  echo "Record Saved Successfully";
}else{
  die("Database Query Failed" . mysqli_error($connection));
}


?>
