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
                    <th scope="col"> number </th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                    <th scope="col">cpassword</th>
                    
    </tr>

    </thead>
    





</div>
<?php
$sql="Select *from`user`";
$result=mysqli_query($con,$sql);
if($result){

    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $number=$row['number'];
        $email=$row['email'];
        $password=$row['password'];
        $cpassword=$row['cpassword'];
       
     echo'<tr>
     <th scope="row">'.$id.'</th>
      <td> '.$name.' </td>
      <td>       '.$number.'     </td>
      <td>       '.$email.'   </td>
      <td>       '.$password.'    </td>
      <td>       '.$cpassword.'   </td>
      
      <td>
      <button class="button1"><a href="update2.php?update2id='.$id.'">update</a></button>
      <button class="button2"><a href="delete2.php?delete2id='.$id.'">delete</a></button>
      <button class="button3"><a href="read2.php?read2id='.$id.'">read</a></button>
       <button class="button1"><a href="user.php?userid='.$id.'">Add</a></button>
      </td>
      </tr>';
    }
}

?>
</body>
</html>