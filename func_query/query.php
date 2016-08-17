<?php
/*exist email query*/
function email_exist($db,$email)
{
	$email_exists = mysqli_query($db,"SELECT email FROM registraion WHERE email = '$email' ");
	$num= mysqli_num_rows($email_exists);
	
	return $num;
}
/*registration data insert*/
function reg_data_Insert($db,$firstname,$lastname,$email,$session,$roll,$subj,$pass,$target_path1)
{
	$Query = "INSERT INTO registraion ( fastname, lastname, email, session, roll, subj, pass,image_name) VALUES ( '$firstname', '$lastname', '$email', '$session', '$roll', '$subj','$pass','".$target_path1."' )";
	$result=mysqli_query($db,$Query);
	return $result;
}
/*user contact data insert*/
function con_data_Insert($db,$id,$firstname,$lastname,$address,$email,$contact_date,$phone,$target_path1,$task)
{
	$Query = "INSERT INTO tbl_contact ( st_contact_id, firststname, lastname, address, email, contact_date, phone, image_name, rel_status) VALUES ('$id' , '$firstname' , '$lastname' , '$address' , '$email' , '$contact_date' , '$phone' , ' ".$target_path1." ', '$task')";
	$result=mysqli_query($db,$Query);
	return $result;
}
/*data retrieve for user log in*/
function login_retrieve($db,$email,$pass)
{
	$Query = "SELECT * FROM registraion WHERE email='$email' AND pass='$pass' ";
	$result = mysqli_query($db,$Query);
	return $result;
}
/*to store token data*/
function login_update($db,$token,$email,$pass)
{
	$sql="UPDATE registraion SET Token= '$token' WHERE email='$email' AND pass='$pass'";
	$result = mysqli_query($db,$sql);
	return $result;
}
/*loged in user data update with image*/
function main_user_data_update($db,$id,$faststname,$lastname,$email,$session,$roll,$subj,$pass,$target_path1)
{
	$Query = "UPDATE registraion SET fastname='$fastname', lastname='$lastname', email= '$email',
	session= '$session',roll= '$roll',subj= '$subj', pass= '$pass', image_name= '".$target_path1."' WHERE st_id='$id' ";
	$result=mysqli_query($db,$Query);
	return result;
}
/*loged in user data update without image*/
function main_user_data_update_wi($db,$id,$fastname,$lastname,$email,$session,$roll,$subj,$pass)
{
	$Query = "UPDATE registraion SET fastname='$fastname', lastname='$lastname' ,  
    session= '$session',roll= '$roll',subj= '$subj',pass= '$pass' WHERE st_id='$id' ";
	$result=mysqli_query($db,$Query);
	return result;
}
/*user data update with image*/
function user_data_update($db,$tid,$firststname,$lastname,$address,$email,$contact_date,$phone,$target_path1)
{
	$Query = "UPDATE tbl_contact SET firststname='$firststname', lastname='$lastname', address= '$address',
	email= '$email', contact_date='$contact_date', phone= '$phone', 
	image_name= '".$target_path1."' WHERE user_id='$tid' ";
	$result=mysqli_query($db,$Query);
	return result;
}
/*user data update without image*/
function user_data_update_wi($db,$tid,$firststname,$lastname,$address,$email,$contact_date,$phone)
{
	$Query = "UPDATE tbl_contact SET firststname='$firststname', lastname='$lastname', address= '$address',
	email= '$email', contact_date='$contact_date', 
	phone= '$phone' WHERE user_id='$tid' ";
	$result=mysqli_query($db,$Query);
	return result;
}
/*user data retrieve*/
function userpro_Retrieve($db,$id)
{
	$Query = "SELECT * FROM registraion WHERE st_id='$id' ";
	$result = mysqli_query($db,$Query);
	return $result;
	
}
function all_user_contact_Retrieve($db,$id)
{
	$Query = "SELECT * FROM tbl_contact WHERE st_contact_id='$id' ";
	$result = mysqli_query($db,$Query);
	return $result;
	
}
function indv_contact_Retrieve($db,$id)
{
	$Query = "SELECT * FROM tbl_contact WHERE user_id='$id' ";
	$result = mysqli_query($db,$Query);
	return $result;
	
}
function view_Cont_Group($db,$id)
{
	$Query1="select distinct st_contact_id, rel_name from tbl_contact_type where st_contact_id=$id";
	$result = mysqli_query($db,$Query1);
	return $result;
}
function view_Cont_Group_1($db)
{
	$Query1="SELECT DISTINCT rel_name FROM tbl_contact_type ";
	$result = mysqli_query($db,$Query1);	
	return $result;
}
/*user category insert*/
function category_Insert($db,$id,$category_name)
{
	$sql="INSERT INTO tbl_contact_type ( rel_name,st_contact_id) VALUES ('$category_name' , '$id')";
	$result=mysqli_query($db,$sql); 	
	return $result;
}
/*delete user contact*/
function delete_query($db,$id)
{
	$Query = "DELETE FROM tbl_contact WHERE user_id= $id ";
	$result=mysqli_query($db,$Query);
	return $result;
	
}
/*user view contact group*/
function viewConract_group($db,$id,$relation1)
{
	$Query = "SELECT * FROM tbl_contact WHERE st_contact_id = '$id' AND rel_status='$relation1' ";
	$result = mysqli_query($db,$Query);
	return $result;
}
?>