<?php 
include_once("includes/header.php"); 
$condition=1;
if($_REQUEST[search_text])
{
	$st=$_REQUEST[search_text];
	$condition.=" AND (st_name LIKE '%$st%'";
	$condition.=" OR st_father LIKE '%$st%'";
	$condition.=" OR st_add1 LIKE '%$st%'";
	$condition.=" OR st_add2 LIKE '%$st%')";				
}
$SQL="SELECT * FROM student WHERE $condition ORDER BY st_id";
$rs=mysql_query($SQL) or die(mysql_error());
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	/*$(document).ready(function(){
		//$("tr:even").css("background-color","grey");
		$("tr:odd").css("background-color","lightgrey");
	});*/
	</script><style type="text/css">
	<style>
	.searchicon{
		width: 130px;
		box-sizing: border-box;
		border: 2px solid #ccc;
		border-radius: 4px;
		font-size: 16px;
		background-image: url('search.png');
		background-position: 10px 10px; 
		background-repeat: no-repeat;
		padding: 12px 20px 12px 40px;
		-webkit-transition: width 0.4s ease-in-out;
		transition: width 0.4s ease-in-out;
	}
	.searchicon:focus {
		width: 60%;
	}
	table{
		border: 1px solid lightgray;
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
	table tr:nth-child(even){background-color: #f2f2f2;}
	table tr:hover {background-color: gray;}
</style>
<link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<div align="center"><?=$_REQUEST['msg']?></div>

<form name="search_text" action="#">
	<table class="table-responsive" width="90%" border="0" align="center">
		<tr>
			<td>Search text:      
				<input type="text" name="search_text"  class="searchicon"/>
				<input name="Search" type="submit" value="Search" />
			</td>
		</tr>
	</table>
</form>
<form name="student_view" action="lib/student.php" enctype="multipart/form-data" method="post">

	<div style="overflow-y: auto;">

		<table class="table-responsive" width="90%" border="1" align="center">
			<tr>
				<td colspan="6"><div align="right"><a href="student_add.php">Student Add </a>| <a href="javascript:delete_multiple_students()">Delete</a> </div></td>
			</tr>
			<tr>
				<td><div align="center">
					<input name="cck_all" type="checkbox" id="cck_all" onclick="check_all(this)" />
				</div></td>
				<td><div align="center">ID. No. </div></td>
				<td><div align="center">Name</div></td>
				<td><div align="center">Father Name </div></td>
				<td><div align="center">Mobile</div></td>
				<td><div align="center">Action</div></td>
			</tr>
			<?php
			while($data=mysql_fetch_assoc($rs))
			{
				?>
				<tr>
					<td align="center"><div align="center">
						<input name="st_id_multiple[]" type="checkbox" id="checkbox" value="<?=$data['st_id']?>" />
					</div></td>
					<td align="center"><?=$data['st_id']?></td>
					<td><?=$data['st_name']?></td>
					<td><?=$data['st_father']?></td>
					<td><?=$data['st_mobile']?></td>
					<td align="center"><a href="student_add.php?st_id=<?=$data[st_id]?>">Edit</a> | <a href="javascript:delete_student(<?=$data[st_id]?>)">Delete</a></td>
				</tr>
				<?php } ?>
			</table></div>
			<input type="hidden" name="act" />
			<input type="hidden" name="st_id" />
		</form>
		<?php include_once("includes/footer.php"); ?>
