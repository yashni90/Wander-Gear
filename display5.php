<?php
include'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .btn{
margin:50px;

        }
        </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="crud.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
       


            <table class="table">
                     <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col"> name </th>
                    <th scope="col"> email </th>
                    <th scope="col">address</th>
                    <th scope="col">number</th>
                    <th scope="col">subject</th>
                    <th scope="col">message</th>
                </tr>

    </thead>
    





</div>
<?php
$sql="Select *from`contact`";
$result=mysqli_query($con,$sql);
if($result){

    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $address=$row['address'];
        $number=$row['number'];
        $subject=$row['subject'];
        $message=$row['message'];
     echo'<tr>
     <th scope="row">'.$id.'</th>
      <td> '.$name.' </td>
      <td>       '.$email.'     </td>
      <td>       '.$address.'   </td>
      <td>       '.$number.'    </td>
      <td>       '.$subject.'   </td>
      <td>             '.$message.'               </td>
      <td>
      <button class="button1"><a href="update5.php?update5id='.$id.'">update</a></button>
      <button class="button2"><a href="delete5.php?delete5id='.$id.'">delete</a></button>
      <button class="button3"><a href="read5.php?read5id='.$id.'">read</a></button>
        <button class="button1"><a href="contact.php?contactid='.$id.'">Add</a></button>

      </td>
      </tr>';
    }
}

?>

</body>

</html>