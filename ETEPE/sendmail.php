<?php

session_start();

if(isset($_POST['contact'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];

		// Recipient email
		$toEmail = 'etepe-2018@sreenidhi.edu.in';
		$emailSubject = 'ETEPE2018 Contact Request';
		$htmlContent = '
		<h3>ETEPE - 2018, Contact Details</h3>
		<p>The Below are Contact Request details received from ETEPE2018.in</p>
		<div>
			<table style="  width:100%;">
				<tbody>
					<tr>
						<th>Name :</th>
						<td>'.$name.'</td>
					</tr>
					<tr>
						<th>Email :</th>
						<td>'.$email.'</td>
					</tr>
					<tr>
						<th>Message :</th>
						<td>'.$message.'</td>
					</tr>
				</tbody>
			</table>
		</div>';
		
		// Set content-type header for sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		// Additional headers
		$headers .= 'From:shaik sha<mr.shaiksha@gmail.com>'. "\r\n";
		
		// Send email
		if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
			echo "Successfully sent message. <a href='index.html'>Click here</a> to return to home page.";
			
		}else{
			echo "Message not sent message.please <a href='index.html'>Click here</a> to return to Contact page.";
		}
}

else if(isset($_POST['registration']))
{
	// Get data
    $name = $_POST['name'];
    $qualification = $_POST['qualification'];
    $designation = $_POST['designation'];
    $organization = $_POST['organization'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dd = $_POST['dd'];
    $experience = $_POST['experience'];
	
	//Recipient mail
	$toEmail = 'etepe-2018@sreenidhi.edu.in';
	$emailSubject = 'ETEPE2018 Registration Request';
	$htmlContent = '
	<h3>ETEPE - 2018, Registration Details</h3>
	<p>The Below are registration details received from ETEPE2018.in</p>
	<div>
		<table style="  width:100%;">
			<tbody>
				<tr>
					<th>Name:</th>
					<td>'.$name.'</td>
				</tr>
				<tr>
					<th>Qualification</th>
					<td>'.$qualification.'</td>
				</tr>
				<tr>
					<th>Designation</th>
					<td>'.$designation.'</td>
				</tr>
				<tr>
					<th>Organization</th>
					<td>'.$organization.'</td>
				</tr>
				<tr>
					<th>Correspondence Address</th>
					<td>'.$address.'</td>
				</tr>
				<tr>
					<th>Email</th>
					<td>'.$email.'</td>
				</tr>
				<tr>
					<th>Phone Number</th>
					<td>'.$phone.'</td>
				</tr>
				<tr>
					<th>DD Number</th>
					<td>'.$dd.'</td>
				</tr>
				<tr>
					<th>Experience (in years)</th>
					<td>'.$experience.'</td>
				</tr>
			</tbody>
		</table>
	</div>';
	
	// Set content-type header for sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	// Additional headers
	$headers .= 'From:shaik sha<mr.shaiksha@gmail.com>'. "\r\n";
	
	// Send email
	if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
		
		echo "Successfully sent message. <a href='index.html'>Click here</a> to return to home page.";
		
	}else{
		echo "Message not sent message.please <a href='index.html'>Click here</a> to return to Contact page.";
	}
}
?>