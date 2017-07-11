<?php
namespace AQ2EMarketingPlatform;

/**
 * Filename: AQ2EPassGen.class.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 4/3/2017 10:52 PM
 */

class AQ2EPassGen {
	
	// Generates a strong password of N length containing at least one lower case letter,
// one uppercase letter, one digit, and one special character. The remaining characters
// in the password are chosen at random from those four sets.
//
// The available characters in each set are user friendly - there are no ambiguous
// characters such as i, l, 1, o, 0, etc. This, coupled with the $add_dashes option,
// makes it much easier for users to manually type or speak their passwords.
//
// Note: the $add_dashes option will increase the length of the password by
// floor(sqrt(N)) characters.
	static function generateStrongPassword($length = 9, $add_dashes = false, $available_sets = 'luds')
	{
		
		$sets = array();
		
		if(strpos($available_sets, 'l') !== false)
			$sets[] = 'abcdefghjkmnpqrstuvwxyz';
		if(strpos($available_sets, 'u') !== false)
			$sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
		if(strpos($available_sets, 'd') !== false)
			$sets[] = '0123456789';
/*		if(strpos($available_sets, 's') !== false)
			$sets[] = '!@#$%&*?';*/
		
		$all = '';
		$password = '';
		foreach($sets as $set)
		{
			$password .= $set[array_rand(str_split($set))];
			$all .= $set;
		}
		
		$all = str_split($all);
		
		for($i = 0; $i < $length - count($sets); $i++)
			$password .= $all[array_rand($all)];
		
		$password = str_shuffle($password);
		
		return $password;
		
		
	}
	
}