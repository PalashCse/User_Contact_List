<?php     /*start database connection and session*/	include 'config.php';	session_start();	/*decrypt user id*/	$uid=$_SESSION['st_id'];		include('encrypt_decrypt/en_de_crypt.php');	$id=decrypt($uid);	/*restrict illegal user*/	include('illegal_access/check_illegal.php');	include('func_query/query.php');	?><!--*update only for user*--><?php include('header/header.php');?>	<div class="wrapper">		<div class="container">			<div class="login_main col-md-offset-2 col-md-8">				<div class="col-md-12 col-sm-12  reg_header text-center">					<h2>Update Registration Form</h2>                     <!--menu section for user-->					<div class="menu col-md-offset-7 col-md-5 text-right">						<ul>							<li><a href ="userprofile.php<?php $_SESSION['st_id']=encrypt($id);?>">Home</a></li>							<li><a href="logout.php"> Sign Out</a></li>													</ul>					</div>				</div>				<?php					$fastname_old = $lastname_old=$email_old = $session_old= $roll_old=$subj_old=$pass_old=$image_old="";					$err1= $err2= $err3=$err4=$err5=$err6 = $err7="" ;					$result=userpro_Retrieve($db,$id);					while($row = mysqli_fetch_array($result))					{						$fastname_old=$row['fastname'];						$lastname_old=$row['lastname'];						$email_old=$row['email'];						$session_old=$row['session'];						$roll_old=$row['roll'];						$subj_old=$row['subj'];						$pass_old=$row['pass'];						$image_old=$row['image_name'];					}				?>				    <?php 										$imgerror = $passErr ="";										$errors = array();                    /*input field validation*/					$errors = array();						if(isset($_POST['send']))					{							$fastname = $_POST['fastname'];						$lastname = $_POST['lastname'];						$email = $_POST['email'];							$session = $_POST['session'];						$roll = $_POST['roll'];						$subj = $_POST['subj'];						$pass=$_POST['pass'];						/*Form validation*/						include('validation/valid_check.php');						$err1=check_Fname($fastname);						$err2=check_Fname($lastname);						$err3=check_Email($email);						$err4=check_Session($session);						$err5=check_Roll($roll);						$err6=check_Subj($subj);						$pass = MD5($_POST['pass']);						if(empty($$err1)&& empty($$err2)&& empty($$err3)&& empty($$err4)&& empty($$err5)&&empty($$err6))						{							                            /*php code for file(image) upload*/							$file_name=$_FILES["image_file"]["name"];							$file_ext = substr( $file_name, strripos($file_name, '.') );                            /*verify img extention in .jpg & .png fornat*/								if(!empty($file_name))							{								if( ($file_ext  == ".png") || ($file_ext == ".jpg"))								{									$target_path1= 'upload/'.$file_name;										$target_path=move_uploaded_file($_FILES["image_file"]["tmp_name"],'upload/'.$file_name);									$result=main_user_data_update($db,$id,$faststname,$lastname,$email,$session,$roll,$subj,$pass,$target_path1);									if($result)									{										header('Location:userprofile.php');																			}									else									{										?>										  <script>											alert("Fail to update data");										  </script>										<?php									}								}								else								{									$imgerror= "your uploaded file must be in png or jpg format ";								}							}									$target_path1= 'upload/'.$file_name;										$target_path=move_uploaded_file($_FILES["image_file"]["tmp_name"],'upload/'.$file_name);									$result=main_user_data_update_wi($db,$id,$fastname,$lastname,$email,$session,$roll,$subj,$pass);									if($result)									{										header('Location:userprofile.php');																			}									else									{										?>										  <script>											alert("Fail to update data");										  </script>										<?php									}															}						}				?>											                <!--html input form for user update-->				<form class = "form-horizontal" method="post" action="update.php" enctype="multipart/form-data">  <!--update.php -->                    <!--user first name-->									<div class="form-group  ">						<label class=" col-md-2 col-md-offset-2 text-right" for="usrFN" > First Name: </label>						<div class="col-md-5  ">							<input type = "text" class = "form-control " id="usrFN" value="<?php echo $fastname_old; ?>" name="fastname" required>							<p class="error"><?php echo $err1;?></p>						</div>					</div>					<!--user last name-->							<div class="form-group">						<label for="usrLN" class="col-md-2 col-md-offset-2 text-right" >Last Name: </label>						<div class="col-md-5 ">							<input type = "text" class = "form-control " id="usrLN" value="<?php echo $lastname_old; ?>" name="lastname" required>							<p class="error"><?php echo $err2;?></p>						</div>					</div>	                    <!--user email name-->							<div class="form-group">						<label for="Email" class="col-md-2 col-md-offset-2 text-right" >Email: </label>						<div class="col-md-5 ">							<input type = "text" class = "form-control col-md-6" id="Email" value="<?php echo $email_old; ?>" name="email" >						<p class="error"><?php echo $err3;?></p>						</div>					</div>                    <!--user session-->							<div class="form-group">						<label for="SESSION" class="col-md-2 col-md-offset-2 text-right">Session: </label>						<div class="col-md-5 ">							<input type = "text" class = "form-control col-md-6 datepicker" id="SESSION" value="<?php echo $session_old; ?>" name="session" required>							<p class="error"><?php echo $err4;?></p>						</div>					</div>                    <!--user rolll-->								<div class="form-group">						<label for="ROLL" class="col-md-2 col-md-offset-2 text-right">Roll: </label>						<div class="col-md-5 ">							<input type = "text" class = "form-control col-md-6" id="ROLL" value="<?php echo $roll_old; ?>" name="roll" required>							<p class="error"><?php echo $err5;?></p>						</div>					</div>                    <!--user subject name-->										<div class="form-group">						<label for="sjt" class="col-md-2 col-md-offset-2 text-right">Subject: </label>						<div class="col-md-5 ">							<input type = "text" class = "form-control col-md-6" id="sjt" value="<?php echo $subj_old; ?>" name="subj" required>							<p class="error"><?php echo $err6;?></p>						</div>					</div>	                     <!--user password-->												<div class="form-group">						<label for="pwd" class="col-md-2 col-md-offset-2 text-right col-md-6">Password: </label>						<div class="col-md-5 ">							<input type = "password" class = "form-control" id="pwd" value="<?php echo $pass_old; ?>" name="pass" required>							<p class="error"><?php echo $passErr;?></p>						</div>					</div>					<!--user image-->							<div class="form-group">						<label class="col-md-2 col-md-offset-2 text-right col-md-6">Image: </label>						<input type="file" name="image_file">												<p class="error col-md-offset-1 "><?php echo $imgerror;?></p>						<p class="col-md-offset-2 "><?php echo $image_old;?></p>					</div>                    <!--submit updated info-->												<div class="form-group" > 						<div class="col-md-offset-1 text-center">							<input class="btn btn-primary" type="submit" value="Update" name="send">						</div>					</div>				</form>			</div>		</div>	</div></body></html>