<?php
        $Firstname = $_POST['Fname'];
	$Middlename = $_POST['Midname'];
	$Lastname = $_POST['Lastname'];
	$Gender1 = $_POST['Gender'];
	$Month1 = $_POST['Month'];
	$Day1 = $_POST['Day'];
	$Year1 = $_POST['Year'];
	$Program1 = $_POST['Program'];
	$StudentType1 = $_POST['Student_type'];
	$Address1 = $_POST['Address'];
?>
<html>
Firstname: <strong><?php echo $Firstname; ?></strong><br />
Middlename: <strong><?php echo $Middlename; ?></strong><br />
Lastname: <strong><?php echo $Lastname; ?></strong><br />
Gender: <strong><?php echo $Gender; ?></strong><br />
Month: <strong><?php echo $Month; ?></strong><br />
Day:  <strong><?php echo $Day; ?></strong><br />
Year:  <strong><?php echo $Year; ?></strong><br />
Program:  <strong><?php echo $Program; ?></strong><br />
Student Type:  <strong><?php echo $StudentType; ?></strong><br />
Address:  <strong><?php echo $Address; ?></strong><br />
