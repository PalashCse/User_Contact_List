<?php 
	 // For demonstration purpose
	function encrypt($uid)
	{
		$key = md5('1111', true);
		$id = base_convert($uid, 10, 36); // Save some space
		$data = mcrypt_encrypt(MCRYPT_BLOWFISH, $key, $id, 'ecb');
		$data = bin2hex($data);

		return $data;
	}

	function decrypt($uid)
	{
		$key = md5('1111', true);
		$data = pack('H*', $uid); // Translate back to binary
		$data = mcrypt_decrypt(MCRYPT_BLOWFISH, $key, $data, 'ecb');
		$data = base_convert($data, 36, 10);

		return $data;
	}

?>