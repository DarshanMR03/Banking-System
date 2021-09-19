<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
              body{
          background-image: url(back2.png);
          background-size: cover;
      }
      .container{
          background-color: #fff;
          border-bottom-left-radius: 30px;
          border-bottom-right-radius: 30px;
          border-top-left-radius: 30px;
          border-top-right-radius: 30px;
          position:relative;
          top:100px;
        
      }
      .nav {
    width: 100%;
    z-index: 2;
}

.nav ul {
    position: absolute;
    padding-left: 900px;
}

.nav ul li {
    list-style-type: none;
    display: inline-block;
    padding-left: 30px;
    padding-top: 20px;
    font-size: 20px;
}

.nav ul li a {
    color: #fff;
}
h5 {
position:absolute;
    color: grey;
  padding-left: 270px;
    font-size: 15px;
    padding-top: 20px;
}
        </style>
</head>

<body>

<div class="nav">
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="allusers.php">Users</a></li>
    <li><a href="transfermoney.php">Transfer Money</a></li>
    <li><a href="transactionhistory.php">Transfer History</a></li>
   
  </ul>
</div>

	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['tid']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>
    <h5>Made by Darshan MR,Nitte Meenakshi Institute of Technology(2021)</h5>
    </div>
</div>
