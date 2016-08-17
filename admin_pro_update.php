<?php 
// **********************start database connection and session********************
	session_start();
	include('illegal_access/check_illegal.php');
	include 'config.php';
	$EMAIL = $_SESSION['email'];
	$PASSWORD =$_SESSION['pass'];
	$uid=$_SESSION['st_id'];
?>
<!-- *****************update only for admin************************-->
<?php include('header/admin_header.php');?>
	<div class="wrapper">
		<div class="container">
			<div class="login_main col-md-offset-2 col-md-8">
				<div class="col-md-12 col-sm-12  reg_header text-center">
					<h2>Update Registration Entry</h2>
<!-- ****************menu option in this page************************-->
					<div class="menu col-md-offset-7 col-md-5 text-right">
						<ul>
							<li><a href="adminprofile.php"> Home </a></li>
							<li><a href="logout.php"> Sign Out</a></li>
							<!-- <a href ="" >Sign Out</a> -->
						</ul>
					</div>
				</div>
				<?php 
					$fastnameErr = $lastnameErr = $emailErr = $sessionErr = $rollErr = $subjErr = $imgerror = $passErr ="";
					$err1= $err2= $err3=$err4=$err5=$err6 = $err7="" ;
					$errors = array();	
					if(isset($_POST['send']))
					{	
						if (!preg_match("/^[a-zA-Z ]*$/", $_POST['fastname']))
						{
							$errors['fastnameErr']="Please enter your valid first name";
							$err1 =$errors['fastnameErr'];
						}
						if (!preg_match("/^[a-zA-Z ]*$/", $_POST['lastname']))
						{
							$errors['lastnameErr']="Please enter your valid lastt name";
							$err2 =$errors['lastnameErr'];
						}
						 if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
						{	
							$errors['emailErr']="invalid email";
							$err3 =$errors['emailErr'];
						}
						if (!preg_match("/^[0-9-]*$/", $_POST['session']))
						{
							$errors['sessionErr']="invalid session";
							$err4 =$errors['sessionErr'];
						}
						if ( !preg_match("/^[0-9]*$/", $_POST['roll']) )
						{
							$errors['rollErr']="roll number must be integer";
							$err5 =$errors['rollErr'];
						}
						if (!preg_match("/^[a-zA-Z]*$/", $_POST['subj']))
						{
							$errors['subjErr']="invalid subject name";
							$err6 =$errors['subjErr'];
						}
							$fastname = $_POST['fastname'];
							$lastname = $_POST['lastname'];
							$email = $_POST['email'];
							$session = $_POST['session'];
							$roll = $_POST['roll'];
							$subj = $_POST['subj'];
							$pass = MD5($_POST['pass']);
							if(empty($errors))
							{
//****************image upload*********************************************
								$file_name=$_FILES["image_file"]["name"];
								$file_ext = substr( $file_name, strripos($file_name, '.') ); 
//*****************iamge file verification in .jpg and .png format*******************
								if(!empty($file_name))
								{
									if( ($file_ext  == ".png") || ($file_ext == ".jpg"))
									{
										$target_path1= 'upload/'.$file_name;	
										$target_path=move_uploaded_file($_FILES["image_file"]["tmp_name"],'upload/'.$file_name);
										$Query = "UPDATE registraion SET fastname='$_POST[fastname]', lastname='$_POST[lastname]', email= '$_POST[email]',
										session= '$_POST[session]',roll= '$_POST[roll]',subj= '$_POST[subj]', pass= '$_POST[pass]', 
										image_name= '".$target_path1."' WHERE st_id='$puid' ";
										mysqli_query($db,$Query);
										echo "updated successfully";
										
									}
									else
									{
										$imgerror= "your uploaded file must be in png or jpg format ";
									}
										
									
								}
										$target_path1= 'upload/'.$file_name;	
										$target_path=move_uploaded_file($_FILES["image_file"]["tmp_name"],'upload/'.$file_name);
										$Query = "UPDATE registraion SET fastname='$_POST[fastname]', lastname='$_POST[lastname]' , email= '$_POST[email]', 
										session= '$_POST[session]',roll= '$_POST[roll]',subj= '$_POST[subj]', pass= '$_POST[pass]', 
										 WHERE st_id='$uid' ";
										$result=mysqli_query($db,$Query);
										if($result)
										{
											header('Location:adminprofile.php');
										}
								        else
										{
											?>
											  <script>
												alert("Data Failed to insert");
											  </script>
											
											<?php
										
								        }
										
							}	
					}
				?>
				<?php
					
						$Query = "SELECT * FROM registraion WHERE st_id = '$uid' ";
						$result = mysqli_query($db,$Query);
						while($row = mysqli_fetch_array($result))
						{
							$fastname_old=$row['fastname'];
							$lastname_old=$row['lastname'];
							$email_old=$row['email'];
							$session_old=$row['session'];
							$roll_old=$row['roll'];
							$subj_old=$row['subj'];
							$pass_old=$row['pass'];
							$image_old=$row['image_name'];
						}
					
					
				?>
<!-- *******************html input form for updating user.***************** -->
				<form class = "form-horizontal" method="post" action="adminUpdate.php?id=<?php  echo $id; ?> " enctype="multipart/form-data"> 
<!-- *******************html input form for updating user.  first name filed***************** -->				
					<div class="form-group  ">
						<label class=" col-md-2 col-md-offset-2 text-right" for="usrFN" > First Name: </label>
						<div class="col-md-5  ">
							<input type = "text" class = "form-control " id="usrFN" value="<?php echo $fastname_old; ?>" name="fastname" required>
							<p class="error"><?php echo $err1;?></p>
						</div>
					</div>
<!-- *******************html input form for updating user.  last name filed***************** -->		
					<div class="form-group">
						<label for="usrLN" class="col-md-2 col-md-offset-2 text-right" >Last Name: </label>
						<div class="col-md-5 ">
							<input type = "text" class = "form-control " id="usrLN" value="<?php echo $lastname_old; ?>" name="lastname" required>
							<p class="error"><?php echo $err2;?></p>
						</div>
						
					</div>	
<!-- *******************html input form for updating user.  email name filed***************** -->							
					<div class="form-group">
						<label for="Email" class="col-md-2 col-md-offset-2 text-right" >Email: </label>
						<div class="col-md-5 ">
							<input type = "text" class = "form-control col-md-6" id="Email" value="<?php echo $email_old; ?>" name="email" required>
							<p class="error"><?php echo $err3;?></p>
						</div>
					</div>
<!-- *******************html input form for updating user.  session name filed***************** -->							
					<div class="form-group">
						<label for="SESSION" class="col-md-2 col-md-offset-2 text-right">Session: </label>
						<div class="col-md-5 ">
							<input type = "text" class = "form-control col-md-6 datepicker" id="SESSION" value="<?php echo $session_old; ?>" name="session" required>
							<p class="error"><?php echo $err4;?></p>
						</div>
					</div>
<!-- *******************html input form for updating user.  roll number filed***************** -->							
					<div class="form-group">
						<label for="ROLL" class="col-md-2 col-md-offset-2 text-right">Roll: </label>
						<div class="col-md-5 ">
							<input type = "text" class = "form-control col-md-6" id="ROLL" value="<?php echo $roll_old; ?>" name="roll" required>
							<p class="error"><?php echo $err5;?></p>
						</div>
					</div>
<!-- *******************html input form for updating user.  subject name filed***************** -->							
					<div class="form-group">
						<label for="sjt" class="col-md-2 col-md-offset-2 text-right">Subject: </label>
						<div class="col-md-5 ">
							<input type = "text" class = "form-control col-md-6" id="sjt" value="<?php echo $subj_old; ?>" name="subj" required>
							<p class="error"><?php echo $err6;?></p>
						</div>
					</div>	
<!-- *******************html input form for updating user.  password filed***************** -->							
					<div class="form-group">
						<label for="pwd" class="col-md-2 col-md-offset-2 text-right col-md-6">Password: </label>
						<div class="col-md-5 ">
							<input type = "password" class = "form-control" id="pwd" value="<?php echo $pass_old; ?>" name="pass" required>
							
						</div>
					</div>
<!-- *******************html input form for updating user.  image filed***************** -->							
					<div class="form-group">
						<label class="col-md-2 col-md-offset-2 text-right col-md-6">Image: </label>
						<input type="file" name="image_file" value="<?php echo $image_old; ?>" required>
					</div>
<!-- *******************html input form for updating user.  submit filed***************** -->							
					<div class="form-group" > 
						<div class="col-md-offset-1 text-center">
							<input class="btn btn-primary" type="submit" value="Update" name="send">
						
						</div>
					</div>
					
				</form>

			</div>
			
		</div>
	</div>
	
</body>
</html>