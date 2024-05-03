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
		<h1> Add Fine Payment</h1>

        
		<div class="div_deg">
			<form action="fine_payment_data_check.php" method="POST">
				<div>
					<label>Depositor's Name</label>
					<input type="text" name="depositorsname">
				</div>
				<div>
					<label>Phone No.</label>
					<input type="number" name="phoneno">
				</div>
				<div>
					<label>Email</label>
					<input type="email" name="email">
				</div>
				<div>
					<label>Payment Mode</label>
					<input type="text" name="paymentmode">
				</div>
				<div>
					<label>Amount</label>
					<input type="number" name="amount">
				</div>
                <div>
					<label>Reason For Payment</label>
					<input type="text" name="reasonforpayment">
				</div>
               
				<div>
					<input type="submit" class="btn btn-primary" name="add fine payment" value="apply">
				</div>
				
			</form>
		</div>
        </center>
	</div>

</body>
</html>
