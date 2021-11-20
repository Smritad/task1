<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title> TSF Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>

      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-4">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Greetings to</h3>
                  <h1>TSF BANK</h1>
                </div>
                </div>
                
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <span class="user-icon"><i class="fas fa-user-check"></i></span>
                    <br>
                    <a href="createuser.php"><button style="background-color : 	#	B8860B;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                  <span class="user-icon"><i class="fas fa-hand-holding-usd"></i></span>
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #	B8860B;">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                  <span class="user-icon"><i class="fas fa-money-check-alt"></i></span>
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #	B8860B;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5">
      <p><a href="https://github.com/Smritad"><span class="git"><i class="fab fa-github"></i></span></a> <b>Smrita Dubey</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap');
body {
  background-image: url('https://cdn.pixabay.com/photo/2018/05/01/22/46/bank-3367208_960_720.jpg');
  background-repeat: no-repeat;background-size: cover;
  }

*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}
.container-f{
  background:rgba(0,0,0,0.5);
}
.intro{
	background: rgba(0,0,0,0);
  text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
}
h1{
  font-size:7vh;
	color: white;
	font-weight: bold;
	
}
h3{
	color: white;
}
button{
	border:none;
	border-radius: 8px;
	padding: 10px;
	background:#7B8788; 
	color:white;
	letter-spacing: 1.5px;
	font-size: 15px;
	transition: 0.5s;
}
button:hover{
  background-color:white;border:1px solid white;
  color:black;
	transform: scale(1.1);
}
button:hover{
	background-color:#4C4B4B;
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
span i{
  color: #	FFEBCD;
  font-size: 240px;
  text-shadow: 2px 5px 5px rgba(0,0,0,0.8);
}

@media only screen and (orientation:portrait){
	.intro{
		display:flex;
		flex-direction: column-reverse;
	}
	h1{
		font-size: 30px;
	}
	.act{
		padding-bottom: 100px;
	}
} 
</style>
</html>