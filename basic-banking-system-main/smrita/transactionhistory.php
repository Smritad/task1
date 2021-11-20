<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transaction History
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap');

h2{
	color: #4C4B4B;
	letter-spacing: 0.5px;
	font-family: raleway;
}
    </style>
    </h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
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

            $sql ="SELECT * FROM `transaction`";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer class="text-center">
      <p><a href="https://github.com/Smritad"><span class="git"><i class="fab fa-github"></i></span></a> <b>Smrita Dubey</b> <br> The Sparks Foundation</p>
      </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
<style>
*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}
h2{
	font-size: 40px;
}
table{
	letter-spacing: 1.2px;
}
td{
	text-align: center;
}
button{
	border:none;
	background:  #808080;
    transition: 1s;
}
@media only screen and (orientation: portrait){
	*{
		letter-spacing: 1px;
	}
} 
footer{
	color:#EAF0F1;
	background-color:rgba(0,0,0,0.99);
	letter-spacing: 0.5px;
  padding: 30px;
  margin-top: 300px;
}
footer p{
	margin: 0;
	font-size: 15px;
}
.git i{
  color: #fff;
  font-size: 18px;
}
</style>
</html>
