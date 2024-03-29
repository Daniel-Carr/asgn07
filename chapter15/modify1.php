<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify1.php
	Purpose:Chapter 13 Exercise

	modify1.html asks the user to submit their hours worked and pay rate.
	The current version of modify1.php updates the hourly wage to 8.00
	if it is less than 8.00, then calculates the weekly pay and a bonus,
	and displays the results. The program does this without using any
	functions.

	Change modify1.php so that it uses the setMinimumWage(), getWage() and
	getBonus() functions that are provided in the inc-wage-functions.php file
	instead of performing these calculations directly.Note that your program
	becomes much simpler.

-->
<html>
<head>
	<title>Wage Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>WAGE REPORT</h1>

	<?php

	include("inc-employee-object.php");

	$emp1 = new Employee();

	$emp1->getID("123456");
	$emp1->getFirstName("Alan");
	$emp1->getLastName("Turing");
	$emp1->getHourlyWage(15.25);
	print("<table>
			<tr><td>ID</td><td>".$emp1->getID()."</td></tr>
			<tr><td>First Name</td><td>".$emp1->getFirstName()."</td></tr>
			<tr><td>Last Name</td><td>".$emp1->getLastName()."</td></tr>
			<tr><td>Weekly Pay</td><td>".$emp1->getWeeklyPay(40)."</td></tr>
			</table>");
	?>
</body>
</html>
