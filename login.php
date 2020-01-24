<?php
  include 'inc/header.php';
  include 'lib/User.php';
  Session::checkLogin();
?>
<?php
$user= new User();
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login']))
{
	$userLogin= $user-> userLogin($_POST);
}
?>
		<div class="panel panel-default">
		    <div class="panel-heading">
			    <h2 align="center"> User Login_page </h2>
			</div>
			<div class="panel-body">
			<div style="max-width:600px; margin:0 auto">
			<?php
			    if(isset($userLogin))
				{
					echo $userLogin;
				}
			?>
			<form action=" " method="POST">
			<div class="form-group">
				    <label for="phone">
					       Phone number
					</label>
					<input type="phone" id="phone" name="phone" class="form-control"/ >
				</div>
                <div class="form-group">
				    <label for="email">
					       Email Address
					</label>
					<input type="text" id="email" name="email" class="form-control"/ >
				</div>
				
				<button type="submit" name="login" class="btn btn-success">
				  Login      
				</button>
            </form>
            </div>		    
			</div>
		</div>
<?php include 'inc/footer.php';	?>