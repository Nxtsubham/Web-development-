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
		<h1> Add FIR Module</h1>

        
		<div class="div_deg">
			<form action="fir_data_check.php" method="POST">
				<div>
					<label>Victim Name</label>
					<input type="text" name="victimname">
				</div>
				<div>
					<label>Phone No.</label>
					<input type="number" name="phoneno">
				</div>
				<div>
					<label>FIR No.</label>
					<input type="number" name="firno">
				</div>
				<div>
					<label>Address</label>
					<input type="text" name="address">
				</div>
				<div>
					<label>Nationality</label>
					<input type="text" name="nationality">
				</div>
                <div>
					<label>Police station recorded</label>
					<input type="text" name="policestationrecorded">
				</div>
                <div>
					<label>Complaints</label>
					<input type="text" name="complaints">
				</div>
                <div>
					<label>Nature of crime</label>
					<input type="text" name="natureofcrime">
				</div>
                <div>
					<label>Location of crime</label>
					<input type="text" name="locationofcrime">
				</div>
                <div>
					<label>Name of suspect</label>
					<input type="text" name="nameofsuspect">
				</div>
				<div>
					<input type="submit" class="btn btn-primary" name="add fir module" value="apply">
				</div>
				
			</form>
		</div>
        </center>
	</div>

</body>
</html>
