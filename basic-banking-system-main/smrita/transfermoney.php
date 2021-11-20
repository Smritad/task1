<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color: #808080;
        color: black;
      }
      
    </style>
</head>

<body">
<?php
    include 'config.php';

    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transfer Money
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap');

h2{
	color: #4C4B4C;
	letter-spacing: 0.5px;
	font-family: raleway;
} 
    </style>
    </h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead class="bg-primary" style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn bg-warning">Transact</button></a></td> 
                    </tr>
                    <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <footer class="text-center mt-5">
      <p><a href="https://github.com/Smritad"><span class="git"><i class="fab fa-github"></i></span></a> <b>Smrita Dubey</b> <br> The Sparks Foundation</p>
      </footer>
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
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
</body>
</html>