<?php 
include_once("includes/header.php"); 
if($_REQUEST[st_id])
{
	$SQL="SELECT * FROM student WHERE st_id='$_REQUEST[st_id]'";
	$rs=mysql_query($SQL) or die(mysql_error());
	$data=mysql_fetch_assoc($rs);
}
?>
<!-- <meta charset="utf-8"> checking -->

<!-- <meta http-equiv="refresh" content="2"> -->

<style type="text/css">

}
input[type=button], input[type=submit], input[type=reset] {
	background-color: #4CAF50;
	border: none;
	color: white;
	padding: 16px 32px;
	text-decoration: none;
	margin: 4px 2px;
	cursor: pointer;
}
select {
	width: 100%;
	padding: 16px 20px;
	border: none;
	border-radius: 4px;
	background-color: #f1f1f1;
}
textarea {
	width: 100%;
	height: 50px;
	padding: 12px 20px;
	box-sizing: border-box;
	border: 2px solid #ccc;
	border-radius: 4px;
	background-color: #f8f8f8;
	resize: none;
}
input[type=text] {
	-webkit-transition: width 0.4s ease-in-out;
	transition: width 0.4s ease-in-out;
}

table{
	/* border: 1px solid black;*/
	border-collapse: collapse;
	width: 90%;
	margin: 0 auto;
}
td{
	text-align: left;
}
div{
	padding: 5px;
}
[required] {
	/*color:grey;*/
	box-shadow: none;
}
input,select,textarea {
/*-webkit-border-radius: 50px;
-moz-border-radius: 50px;*/
border-radius: 10px;
}
</style>
<form data-toggle="validator" class = "form-horizontal" role = "form" name="student_frm" action="lib/student.php" enctype="multipart/form-data" onsubmit="return valid_student(this);" method="post">
	<fieldset><legend>Student Registration Form</legend>
		<table >
			<colgroup>
				<col span="1" style="background-color:lightblue">
				<col span="1" style="background-color:lightgreen">
				<col span="1" style="background-color:lightblue">
				<col span="1" style="background-color:lightgreen">


				<col style="background-color:yellow">
			</colgroup>
	  <!-- <tr>
		<th colspan="4"><div  align="center">Student Registration Form </div></th>
	</tr> -->
	<tr>
		<div class = "form-group">	  
			<td><div align="center">
				<label for = "firstname" class = "col-sm-6 control-label">Name</label></div>
			</td>
			<td>
				<input type="text" name="st_name" value="<?=$data[st_name]?>" class = "form-control" id = 		"firstname" placeholder = "Enter Name" required/>		
			</td>
		</div>
		<div class="form-group">
			<td><div align="center">
				<label for = "lastname" class = "col-sm-6 control-label">Father Name</label>
			</td>
			<td>
				<input type="text" name="st_father" value="<?=$data[st_father]?>" class = "form-control" id = "lastname" placeholder = "Enter Father Name" required/>		
			</td>
		</div>
	</tr>
	<tr>
		<td><div align="center">Address 1 </div></td>
		<td>
			<textarea name="st_add1"  required><?=$data[st_add1]?></textarea>		</td>
			<td><div align="center">Address 2 </div></td>
			<td><textarea name="st_add2" required><?=$data[st_add2]?></textarea></td>
		</tr>
		<tr>
			<td><div align="center">City</div></td>
			<td>
				<select name="st_city" required>
					<?php echo get_option_list("city","city_id","city_name",$data[st_city]); ?>
				</select>		</td>
				<td><div align="center">State</div></td>
				<td><select name="st_state" required>
					<?php echo get_option_list("state","state_id","state_desc",$data[st_state]); ?>
				</select></td>
			</tr>
			<tr>
				<td><div align="center">Country</div></td>
				<td><select name="st_country" required>
					<?php echo get_option_list("country","country_id","country_name",$data[st_country]); ?>
				</select></td>
				<td><div align="center">Nationality</div></td>
				<td>
					<input type="text" name="st_nationality" value="<?=$data[st_nationality]?>" required/>		</td>
				</tr>
				<tr>
					<td><div align="center">Gender </div></td>
					<td>
						<label>
							<input name="st_gender" type="radio" value="male" <?php if($data[st_gender]=="male") echo "checked"; ?>  required/>
						Male</label>
						<label>
							<input name="st_gender" type="radio" value="female" <?php if($data[st_gender]=="female") echo "checked"; ?> required/>
						Female </label>		</td>
						<td><div align="center">Qualification</div></td>
						<td>
							<div style="height:75; overflow:scroll">
								<?php echo get_check_list("courses","course_id","course_name","st_qul[]",$data[st_qul] ); ?>		</div>		</td>
							</tr>
							<tr>
								<td><div align="center">Course</div></td>
								<td>
									<select name="st_course" required>
										<?php echo get_option_list("courses","course_id","course_name",$data[st_course]); ?>
									</select>		</td>
									<td><div align="center">Photo</div></td>
									<td>
										<input type="file" name="st_photo"  required/>		<br>
										<?php
										if($data[st_photo])
										{
											echo "<img src= '$SERVER_PATH/uploads/$data[st_photo]'  height=50 width=50 ></img>";
										}
										?>
									</td>
								</tr>
								<tr>
									<td><div align="center">Hobbies</div></td>
									<td><textarea name="st_hobbies" required><?=$data[st_hobbies]?></textarea></td>
									<td><div align="center">Mobile</div></td>
									<td><input type="text" name="st_mobile" value="<?=$data[st_mobile]?>" required/></td>
								</tr>
								<tr>
									<td colspan="4">
										<div align="center">
											<input type="submit" name="Submit" value="Submit" />
											<input type="reset" name="Reset" value="Reset" />
										</div>			</td>
									</tr>
								</table>
								<input type="hidden" name="st_photo" value="<?=$data[st_photo]?>" />
								<input type="hidden" name="act" value="save_student" />
								<input type="hidden" name="st_id" value="<?=$data[st_id]?>" />
							</form>
						</fieldset>
						<?php include_once("includes/footer.php"); ?>