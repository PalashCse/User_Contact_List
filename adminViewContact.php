<?php//*** start database connection and session*****	include 'config.php';	session_start();	include('illegal_access/check_illegal.php');	$id=$_GET['id'];		$EMAIL = $_SESSION['email'];	$PASSWORD =$_SESSION['pass'];?><!--*********** total list of contact here******* --><?php include('header/header.php');?>	<div class="wrapper">		<div class="container">			<div class="dashboard_main"><!-- *******title section of admin dashboard*****-->				<div class="">					<div class="main_header">						<div class="col-md-8 reg_title">							<h2>Contact Book</h2>						</div><!-- ***menu section of admin dashboard**********-->						<div class="col-md-4 menu">							<ul class="text-center">								<li><a href="adminprofile.php"> Home </a></li>								<li><a href="logout.php"> Sign Out</a></li>							</ul>						</div>					</div>				</div><!-- *****heading section of the table *********-->				<div class="table-responsive tbl_reg">					<table class="table table-hover table-bordered" >						<thead>							<tr class="active">								<th>Serial No.</th>								<th>First Name</th>								<th>Last Name</th>								<th>Your Address</th>								<th>Your Email</th>								<th>Date</th>								<th>Contact No.</th>								<th>Photo</th>								<!-- <th>Action</th> -->							</tr>						</thead>						<tbody>						<?php// ***php code for taking all registered user data****							include 'config.php';							$email = $_SESSION['email'];							$Query = "SELECT * FROM tbl_contact WHERE st_contact_id= $id ";							$result = mysqli_query($db,$Query);							$count = mysqli_num_rows($result);							$i=0;							while($row = mysqli_fetch_array($result))							{									$i++;						?>								<tr class="info">									<td><?php  echo $i ; ?></td>									<td><?php  echo $row['firststname']; ?></td>									<td><?php  echo $row['lastname']; ?></td>									<td><?php  echo $row['address']; ?></td>									<td><?php  echo $row['email']; ?></td>									<td><?php  echo $row['contact_date']; ?></td>									<td><?php  echo $row['phone']; ?></td>									<td><img class="img-responsive img-circle" src="<?php echo $row['image_name']; ?>" ></td>									<!-- <td>										<a href="updateContact.php?id=<?php  echo $row['user_id']; ?>">Edit </a><?php echo "&nbsp;";?>										<a Onclick=" return Confirm_Delete()" href="deleteContact.php?id=<?php  echo $row['st_contact_id']; ?>" >Delete</a>									</td> -->								</tr>							<?php												}																		?>											</tbody>					</table>					 </div>			</div>		</div>	</div><!--***jave script for  delete conformation*****-->	<script>	    		function Confirm_Delete()		{		  return confirm("Are you sure you want to delete?");		}	</script></body></html>