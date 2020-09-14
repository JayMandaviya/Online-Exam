<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
	body{
		width: 100%;
    	height: 100%;
		overflow: hidden;
	}

	.header{
   		background-color: #32be8f;
	    width: 100%;
    	height: 8vh;
		top: 0%;
    	padding: 0;
		margin-left: -8px;
    	margin-top: -8px;
	}

	.logo{
		float: left;
		padding: 1rem;
		font-size: 20px;
		color: #333;
		cursor: pointer;
	}

	.navi-link{
		float: right;
		color: #474747;
		padding: 1rem;
		font-size: 20px;
		z-index: 2;
	}

	.navi-link:hover{
		color: #333;
		cursor: pointer;
	}

	.grid-container {
		display: grid;
		grid-template-columns: auto auto auto auto;
		background-color: white;
		margin:2% 1% 0% 0%;
		padding: 0;
		height: 50vh;
	}

	.grid-item {
		padding: 10px;
		width: 75%;
		font-size: 30px;
		text-align: center;
		border: 4px solid white;
		border-radius: 1rem;
		background-color: #32be8f;
	}

	a{
		text-decoration: none;
	}

	.sub-link{
        cursor: pointer;
        color: #333;
        font-size: 20px;
    }
</style>
</head>
<body>
<?php
include("database.php");
extract($_GET);
$rs1=mysqli_query($con,"select * from mst_subject where sub_id=$subid");
$row1=mysqli_fetch_array($rs1);
$rs=mysqli_query($con,"select * from mst_test where sub_id=$subid");

echo "<div class='header'>
		<a class='logo'>$row1[1]</a>
		<a class='navi-link'><i class='fa fa-user' aria-hidden='true'></i></a>
	</div>";

if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h2> No Quiz for this Subject </h2>";
	exit;
}

echo '<div class="grid-container">';
		while($row=mysqli_fetch_row($rs))
		{
			echo "<div class='grid-item'>
					<h2>$row[2]</h2>
					<a class='sub-link' href=quiz.php?testid=$row[0]&subid=$subid>click<i class='fa fa-arrow-right' aria-hidden='true'></i></a>
		  		</div>";
		}
		echo '</div>';
?>
</body>
</html>
