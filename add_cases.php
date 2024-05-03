<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

    <style type="text/css">
        label
        {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .div_deg
        {
            background-color: skyblue;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>
    
	<?php
	include 'admin_css.php'
	?>
	
</head>
<body>

	<?php

	include 'admin_sidebar.php';

	?>
	
	<div class="content">
        <center>
		<h1> Add Cases</h1>

        
		<div class="div_deg">
			<form action="cases_data_check.php" method="POST">
				<div>
					<label>Cases Name</label>
					<input type="text" name="casesname">
				</div>
				<div>
					<label>Station</label>
					<input type="text" name="station">
				</div>
				<div>
					<label>Case Stating</label>
					<input type="text" name="casestating">
				</div>
				<div>
					<label>Incident Date</label>
					<input type="date" name="incidentdate">
				</div>
				<div>
					<label>Incident Place</label>
					<input type="text" name="incidentplace">
				</div>
                <div>
					<label>Description</label>
					<input type="text" name="description">
				</div>

				<div>
					<input type="submit" class="btn btn-primary" name="add cases" value="apply">
				</div>
				
			</form>
		</div>
        </center>
	</div>

</body>
</html>
