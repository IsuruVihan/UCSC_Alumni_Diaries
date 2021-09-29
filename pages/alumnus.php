<link rel="stylesheet" href="../assets/styles/alumnus.css">
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        Registered Alumni
    </p>
    <p class='main-title'>
	<i class="fa fa-users" ></i> Registered Alumni
    </p>
</div>

<div class='alumnus-container'>
	<header class='grid-title'>Registered Alumnus</header>
	<div class='grid-container'>
		<div class='account-details-container'>
			<div class='img-container'>

			</div>
			<div class='acdc-text-field'>Account Type</div>
			<div class='acdc-text-field'>Remove Account </div>
			<div class='acdc-text-field'>Ban Account</div>
			<div class='acdc-div-container'>
					<div class='acdc-text-field'>Subscription Type</div>
					<div class='acdc-text-field'>Due Date </div>
					<div class='acdc-text-field'>Get Recharge Details</div>	
			</div>
		</div>
		<div class='alumni-details-container'>
			<header class='container-heading'> Account Details </header>
			<div class='aldc-row1'>
				<div class='first-name details-field'>First name</div>
				<div class='last-name details-field'>Last Name</div>
			</div>	
			<div class='details-field full-name'>Full Name</div>
			<div class='details-field gender'>Gender</div>
			<div class='details-field batch'>Batch</div>
			<div class='aldc-row1'>
				<div class='nic details-field'>NIC</div>
				<div class='contact-number details-field'>Contact Number</div>
			</div>
			<div class='details-field address'>Address</div>
		</div>

		<div class='r-alumni-list-container'>

		</div>
		<div class='contributions-container'>

		</div>
		<div class='involved-projects-container'>

		</div>
	</div>
</div>

<?php include('../components/footer.php'); ?>
