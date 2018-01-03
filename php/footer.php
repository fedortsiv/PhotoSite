<nav class = "navbar fixed-top  navbar-dark bg-primary">
 <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Menu
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="php/userpage.php">User Page</a>

    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
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
			    <div class="col-sm-4">
			      <button type="button" class="btn btn-secondary new_user">New User</button>
			    </div>

    
 			   <div class="col-sm-4">
			      <button type="button" class="btn btn-secondary forget_password">Forget Password</button>
 			   </div>
         <div class="col-sm-4">
            <a class="btn btn-primary" href="php/logout.php" role="button">Logout</a>
         </div>
            </div>
        </div>
    </div>
</div>