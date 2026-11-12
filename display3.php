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
                    <th scope="col">number</th>
                    <th scope="col">cardname</th>
                    <th scope="col">cardnumber</th>
                    <th scope="col">month</th>
                    <th scope="col">year</th>
                    <th scope="col">code</th>
                   
    </tr>

    </thead>
    





</div>
<?php
$sql="Select *from`cart`";
$result=mysqli_query($con,$sql);
if($result){

    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $number=$row['number'];
        $cardname=$row['cardname'];
        $cardnumber=$row['cardnumber'];
        $month=$row['month'];
        $year=$row['year'];
        $code=$row['code'];
     echo'<tr>
     <th scope="row">'.$id.'</th>
      <td> '.$name.' </td>
      <td>       '.$email.'     </td>
     
      <td>       '.$number.'    </td>
        <td>    '.$cardname.' </td>
          <td>    '.$cardnumber.' </td>
            <td>    '.$month.' </td>
              <td>    '.$year.' </td>
                <td>    '.$code.' </td>
        

      <td>
      <button class="button1"><a href="update3.php?update3id='.$id.'">update</a></button>
      <button class="button2"><a href="delete3.php?delete3id='.$id.'">delete</a></button>
      <button class="button3"><a href="read3.php?read3id='.$id.'">read</a></button>
       <button class="button1"><a href="cart.php?carttid='.$id.'">Add</a></button>
      </td>
      </tr>';
    }
}

?>
</body>
</html>

</body>
</html>