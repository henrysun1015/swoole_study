<?php

/**
	 * @purpose  Check if there is a special character in the string
	 * @param $string
	 * @param $chars=array(' ','"',':',"'",'*')
	 * @return bool
	 */
	function filter_special_char($string,$chars=array(' ','"',':',"'",'*'))
	{
		if(is_array($chars))
		{
			foreach ($chars as $key => $value) {
				return false===strpos($string, $value);
			}
		}else{
			return false===strpos($string, $chars);
		}
		return true ;
	}