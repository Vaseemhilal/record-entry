<?php
###Function for generating dynamic option list###
function get_option_list($table,$col_id,$col_value,$sel=0)
{
	$SQL="SELECT * FROM $table ORDER BY $col_value";
	$rs=mysql_query($SQL) or die(my_sql_error());
	$option_list="<option value=0>Please Select</option>";
	while($data=mysql_fetch_assoc($rs))
	{
		If($data[$col_id]==$sel)
		{
			$option_list.="<option value='$data[$col_id]' selected>$data[$col_value]</option>";
		}
		else
		{
			$option_list.="<option value='$data[$col_id]' >$data[$col_value]</option>";
		}
	}
	return $option_list;
}

###Function for generating dynamic option checkbox###
function get_check_list($table,$col_id,$col_value,$name,$sel=0)
{
	$SQL="SELECT * FROM $table ORDER BY $col_value";
	$rs=mysql_query($SQL) or die(my_sql_error());
	$check_list="";
	$sel=explode(",",$sel);
	while($data=mysql_fetch_assoc($rs))
	{
		if(in_array($data[$col_id],$sel))
		{
			$check_list.="<input type='checkbox' name='$name' value='$data[$col_id]' checked>$data[$col_value]<br>";
		}
		else
		{
			$check_list.="<input type='checkbox' name='$name' value='$data[$col_id]'>$data[$col_value]<br>";
		}
	}
	return $check_list;
}
?>