<?php
    /*first name check*/
	function check_Fname($name)
	{
		$nameError="";
		/*first check the length*/
	    $length = strlen($name);
	    if ($length < 5 || $length > 10)
		{
		  $nameError="Should be between 5-10"; 
	    }
		else
		{
			/*check name only contains letters and whitespace*/
			$name = test_input($name);  
			if (!preg_match("/^[a-zA-Z ]*$/",$name))
			{
				$nameError = "Only letters and white space allowed";
			}
		
		}
		return $nameError;
    }
	/*Email check*/
	function check_Email($email)
	{
		$emailError="";
		$email=test_input($email);
		if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email))
		{
			$emailError="Please put your correct email";
		}
      return $emailError;
	}
	function check_Session($session)
	{
		$sessionError="";
		$session=test_input($session);
		if (!preg_match("/^[0-9-]*$/", $session)) 
		{
			$sessionError="Invalid Session!";
		}
		
		return $sessionError;
	}
	function check_Roll($roll)
	{
		$rollError="";
		$length = strlen($roll);
	    if ($length < 4 || $length >6)
		{
		  $rollError="Should be between 4-6"; 
	    }
		else
		{
			$roll=test_input($roll);
			if (!preg_match("/^[0-9]*$/", $roll)) 
			{
				$rollError="Invalid Roll!";
			}
			
		}
		return $rollError;
	}
	function check_Subj($name)
	{
		$nameError="";
		/*check name only contains letters and whitespace*/
		$name = test_input($name);  
		if (!preg_match("/^[a-zA-Z]*$/",$name))
		{
			$nameError = "Only letters allowed";
		}
		return $nameError;
    }
	function check_Password($pass)
	{
		$passError="";
		if(!empty($pass))
			{
				$pass = test_input($pass);
				if (strlen($pass) < '8') 
				{
					 $passError ="Your Password Must Contain At Least 8 Characters!";
				}
				elseif(!preg_match("#[0-9]+#",$pass))
				{
					 $passError ="Your Password Must Contain At Least 1 Number!";
				}
				elseif(!preg_match("#[A-Z]+#",$pass)) 
				{
					 $passError ="Your Password Must Contain At Least 1 Capital Letter!";
				}
				elseif(!preg_match("#[a-z]+#",$pass))
				{
					 $passError ="Your Password Must Contain At Least 1 Lowercase Letter!";
				}
					
				
				 
			}
			else
			{
				$passError ="password is Required";
			}
			return $passError;
				
	}
	/*check address*/
	function check_Address($address)
	{
		$addressError="";
		/*check name only contains letters and whitespace*/
		$address = test_input($address);  
		if (!preg_match("/^[a-zA-Z ]*$/",$address))
		{
			$addressError = "Only letters allowed";
		}
		return $addressError;
		
	}
	/*check contact date*/
	function check_Condate($contact_date)
	{
		$condateError="";
		$contact_date= test_input($contact_date); 
		if ( !preg_match("/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/", $contact_date) )//2012-09-12
		{
			$condateError="invalid date format";
			
		}			
		return $condateError; 
	}
	/*check phone number*/
	function check_Phone($phone)
	{
		$phonrError="";
		$phone= test_input($phone); 
		if ( !preg_match("/^[0-9]{5}-[0-9]{6}$/", $phone) )//2012-09-12
		{
			$phonrError="invalid phone number";
			
		}			
		return $phonrError; 
	}
	/*check user category*/
	function user_Category($category)
	{
		$ctegryError="";
		/*first check the length*/
	    $length = strlen($category);
	    if ($length < 4 || $length >10)
		{
		  $ctegryError="Should be between 4-10"; 
	    }
		else
		{
			/*check name only contains letters and whitespace*/
			$category= test_input($category);  
			if (!preg_match("/^[a-zA-Z ]*$/",$category))
			{
				$ctegryError = "Only letters and white space allowed";
			}
		
		}
		return $ctegryError;
	}
	
	function test_input($data){
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
	}
   /*Test for log in form*/
  function blank_Email($email)
  {
	$emailErr="";
	if(empty($email))
	{
		$emailErr.= "Email field cannot Be empty";
	} 
	return $emailErr;
  }
  function blank_Password($pass)
  {
	$passwordErr="";
	if(empty($pass))
    {
		$passwordErr.= "password field cannot Be empty";
	}
	return $passwordErr;
  }
?>