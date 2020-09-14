<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Online Quiz - Quiz List</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a81368914c.js"></script>
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
		<div class="header">
			<a class="logo">Subjects</a>
        	<a class="navi-link"><i class="fa fa-user" aria-hidden="true"></i></a>
		</div>
		<?php
		include("database.php");
		$rs=mysqli_query($con,"select * from mst_subject");
		echo '<div class="grid-container">';
		while($row=mysqli_fetch_row($rs))
		{
			echo "<div class='grid-item'>
					<h2>$row[1]</h2>
					<a class='sub-link' href=showtest.php?subid=$row[0]>click<i class='fa fa-arrow-right' aria-hidden='true'></i></a>
		  		</div>";
		}
		echo '</div>';
		
		?>
	</body>
</html>
