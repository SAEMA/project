<?php
/**
* function to check which value to put in edit page the old value or the new value in case of validation errors
*the database value or the new value entered by the user :)
**/
function fill($db_value,$new_value)
{
	if(!empty($new_value))
	{
		return $new_value;
	}
	else
	{
		return $db_value;
	}
}


