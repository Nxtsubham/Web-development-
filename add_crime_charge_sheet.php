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
		<h1> Add Crime Charge Sheet</h1>

        
		<div class="div_deg">
			<form action="crime_charge_sheet_data_check.php" method="POST">
				<div>
					<label>Charge sheet No.</label>
					<input type="number" name="chargesheetno">
				</div>
				<div>
					<label>Date</label>
					<input type="date" name="date">
				</div>
				<div>
					<label>Details</label>
					<input type="text" name="details">
				</div>
				<div>
					<label>FIR No.</label>
					<input type="number" name="firno">
				</div>
				<div>
					<label>Produced Court Name</label>
					<input type="text" name="producedcourtname">
				</div>
                <div>
					<label>Fine Status</label>
					<input type="text" name="finestatus">
				</div>
                <div>
					<label>Filled By</label>
					<input type="text" name="filledby">
				</div>
				<div>
					<input type="submit" class="btn btn-primary" name="add crime charge sheet" value="apply">
				</div>
				
			</form>
		</div>
        </center>
	</div>

</body>
</html>
