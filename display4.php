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
    <title>Document</title>
    <link rel="stylesheet" href="crud.css">
</head>
<body>
    <div class="container">

        <table class="table">
            <thead>
                <tr><th scope="col"> id </th>
                    <th scope="col"> name </th>
                    <th scope="col"> email </th>
                    <th scope="col">contact</th>
                    <th scope="col">message</th>
                </tr>
            </thead>
</div>
<?php
$sql="Select *from`customer`";
$result=mysqli_query($con,$sql);
if($result){

    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $contact=$row['contact'];
        $message=$row['message'];
        
        echo'<tr>
        <th scope="row">'.$id.'</th>
         <td> '.$name.' </td>
         <td>       '.$email.'     </td>
         <td>       '.$contact.'   </td>
         <td>       '.$message.'    </td>
       
         <td>
         <button class="button1"><a href="update4.php?update4id='.$id.'">update</a></button>
         <button class="button2"><a href="delete4.php?delete4id='.$id.'">delete</a></button>
         <button class="button3"><a href="read4.php?read4id='.$id.'">read</a></button>
          <button class="button1"><a href="customer.php?customertid='.$id.'">Add</a></button>
         </td>
         </tr>';
    }
}

?>

<button class="btn"><a  href="customer.php">Add</a> </button>
</body>
</html>

</body>
</html>