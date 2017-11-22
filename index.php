
</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PhotoSite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel='stylesheet' href='/css/bootstrap.min.css' type='text/css' media='all'>
    <link rel="stylesheet" href="css/main.css"> 

    <?php include 'php/main.php'; ?>


</head>
<body>

<!-- Navbar -->
<nav class = "navbar fixed-top  navbar-dark bg-primary">
 <button class="btn btn-primary" type="button">Menu</button>
<a class="navbar-brand" href="#">Photo Site </a>
	<button type="button" class="btn btn-primary login" data-toggle="modal" data-target="#exampleModal">
  Log in
	</button>
</nav>


  <!-- Modal -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
            	<h4 class="modal-title">Login</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
               <form id="contactForm">
				    <div class="form-group">
    				<label for="exampleInputEmail1">Email address</label>
   					 <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email">
  					</div>
  					<div class="form-group">
   					 <label for="exampleInputPassword1">Password</label>
    				 <input type="password" class="form-control" id="InputPassword" placeholder="Password">
  					</div>
 				 <div class="form-group row">
			    <div class="col-sm-10">
 				     <button type="submit" class="sign btn btn-primary signin">Sign in</button>
				    </div>

				   <div id="msgSubmit" class="h3 text-center d-none">Loginned</div>
  				</div>

			</form>                 
            </div>
            <div class="modal-footer">
			    <div class="col-sm-5">
			      <button type="button" class="btn btn-secondary">New User</button>
			    </div>

    
 			   <div class="col-sm-5">
			      <button type="button" class="btn btn-secondary">Forget Password</button>
 			   </div>
            </div>
        </div>
    </div>
</div>





	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/validator.js"></script>
	<script src="js/main.js"></script> 

</body>
</html>