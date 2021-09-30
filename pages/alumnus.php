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
	
	<div class='grid-container'>
		<div class='account-details-container'>
			<div class='img-container'>

			</div>
			<div class='acdc-text-field'>Account Type</div>
			<button class='btn acdc-btn'>Remove Account </button>
			<button class='btn acdc-btn'>Ban Account</button>
			<div class='acdc-div-container'>
					<div class='acdc-text-field'>Subscription Type</div>
					<div class='acdc-text-field'>Due Date </div>
					<button class='btn acdc-btn'>Recharge Details</button>	
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
			<header class='container-heading'>Registered Alumni List </header>
			<div class='filter-container'>
				<div class='filter-container-col1'>
					<input type='text' placeholder='First Name' class='input-field-title'>
					<input type='text' placeholder='Last Name' class='input-field-title'>
					<select class='input-field-title'>
						<option value='All'>All</option>
						<option value='2018/2019'>2018/2019</option>
						<option value='2018/2019'>2019/2020</option>
						<option value='2018/2019'>2020/2021</option>
					</select>
				</div>
				<div class='filter-container-col2'>
					<button class='btn filter-btn'>Filter</button>
				</div>
			</div>
			<div class='alumni-list-box'>
				<div class='alumni-box-row'>
					<div class='list-prof-pic'> </div>
					<div class='list-detail-field'>First name</div>
					<div class='list-detail-field'>Last name</div>
					<div class='list-detail-field'>Batch</div>
					<button class='btn view-btn'>View</button>
				</div>
				<div class='alumni-box-row'>
					<div class='list-prof-pic'> </div>
					<div class='list-detail-field'>First name</div>
					<div class='list-detail-field'>Last name</div>
					<div class='list-detail-field'>Batch</div>
					<button class='btn view-btn'>View</button>
				</div>
				<div class='alumni-box-row'>
					<div class='list-prof-pic'> </div>
					<div class='list-detail-field'>First name</div>
					<div class='list-detail-field'>Last name</div>
					<div class='list-detail-field'>Batch</div>
					<button class='btn view-btn'>View</button>
				</div>
				<div class='alumni-box-row'>
					<div class='list-prof-pic'> </div>
					<div class='list-detail-field'>First name</div>
					<div class='list-detail-field'>Last name</div>
					<div class='list-detail-field'>Batch</div>
					<button class='btn view-btn'>View</button>
				</div>
				<div class='alumni-box-row'>
					<div class='list-prof-pic'> </div>
					<div class='list-detail-field'>First name</div>
					<div class='list-detail-field'>Last name</div>
					<div class='list-detail-field'>Batch</div>
					<button class='btn view-btn'>View</button>
				</div>
				<div class='alumni-box-row'>
					<div class='list-prof-pic'> </div>
					<div class='list-detail-field'>First name</div>
					<div class='list-detail-field'>Last name</div>
					<div class='list-detail-field'>Batch</div>
					<button class='btn view-btn'>View</button>
				</div>
				<div class='alumni-box-row'>
					<div class='list-prof-pic'> </div>
					<div class='list-detail-field'>First name</div>
					<div class='list-detail-field'>Last name</div>
					<div class='list-detail-field'>Batch</div>
					<button class='btn view-btn'>View</button>
				</div>
				<div class='alumni-box-row'>
					<div class='list-prof-pic'> </div>
					<div class='list-detail-field'>First name</div>
					<div class='list-detail-field'>Last name</div>
					<div class='list-detail-field'>Batch</div>
					<button class='btn view-btn'>View</button>
				</div>
				<div class='alumni-box-row'>
					<div class='list-prof-pic'> </div>
					<div class='list-detail-field'>First name</div>
					<div class='list-detail-field'>Last name</div>
					<div class='list-detail-field'>Batch</div>
					<button class='btn view-btn'>View</button>
				</div>
				
				
			</div>
			
		</div>

		<div class='contributions-container'>
			<header class='container-heading'>Contributions </header>
			<div class='contribution-box'>	
				<div class='contribution-row1'>
						<p class='request-id'>FirstName</p>
						<p class='request-id'>LastName</p>
						<p class='request-id'>Timestamp</p>
				</div>
				<div class='contribution-row1'>
						<p class='request-id'>FirstName</p>
						<p class='request-id'>LastName</p>
						<p class='request-id'>Timestamp</p>
				</div>
				<div class='contribution-row1'>
						<p class='request-id'>FirstName</p>
						<p class='request-id'>LastName</p>
						<p class='request-id'>Timestamp</p>
				</div>
				<div class='contribution-row1'>
						<p class='request-id'>FirstName</p>
						<p class='request-id'>LastName</p>
						<p class='request-id'>Timestamp</p>
				</div>
				<div class='contribution-row1'>
						<p class='request-id'>FirstName</p>
						<p class='request-id'>LastName</p>
						<p class='request-id'>Timestamp</p>
				</div>
				<div class='contribution-row1'>
						<p class='request-id'>FirstName</p>
						<p class='request-id'>LastName</p>
						<p class='request-id'>Timestamp</p>
				</div>
				<div class='contribution-row1'>
						<p class='request-id'>FirstName</p>
						<p class='request-id'>LastName</p>
						<p class='request-id'>Timestamp</p>
				</div>
				<div class='contribution-row1'>
						<p class='request-id'>FirstName</p>
						<p class='request-id'>LastName</p>
						<p class='request-id'>Timestamp</p>
				</div>
				<div class='contribution-row1'>
						<p class='request-id'>FirstName</p>
						<p class='request-id'>LastName</p>
						<p class='request-id'>Timestamp</p>
				</div>
				<div class='contribution-row1'>
						<p class='request-id'>FirstName</p>
						<p class='request-id'>LastName</p>
						<p class='request-id'>Timestamp</p>
				</div>
				<div class='contribution-row1'>
						<p class='request-id'>FirstName</p>
						<p class='request-id'>LastName</p>
						<p class='request-id'>Timestamp</p>
				</div>
				<div class='contribution-row1'>
						<p class='request-id'>FirstName</p>
						<p class='request-id'>LastName</p>
						<p class='request-id'>Timestamp</p>
				</div>
				
				
			</div>	
		</div>

		<div class='involved-projects-container'>
			<header class='container-heading'>Involved Projects </header>
			<div class='involved-projects-box'>
				<div class='involved-projects-row'>
					<p>Project Name</p>
					<p>Position</p>
				</div>
				<div class='involved-projects-row'>
					<p>Project Name</p>
					<p>Position</p>
				</div>
				<div class='involved-projects-row'>
					<p>Project Name</p>
					<p>Position</p>
				</div>
				<div class='involved-projects-row'>
					<p>Project Name</p>
					<p>Position</p>
				</div>
				<div class='involved-projects-row'>
					<p>Project Name</p>
					<p>Position</p>
				</div>
				<div class='involved-projects-row'>
					<p>Project Name</p>
					<p>Position</p>
				</div>
				<div class='involved-projects-row'>
					<p>Project Name</p>
					<p>Position</p>
				</div>
				<div class='involved-projects-row'>
					<p>Project Name</p>
					<p>Position</p>
				</div>
				<div class='involved-projects-row'>
					<p>Project Name</p>
					<p>Position</p>
				</div>
				<div class='involved-projects-row'>
					<p>Project Name</p>
					<p>Position</p>
				</div>
				<div class='involved-projects-row'>
					<p>Project Name</p>
					<p>Position</p>
				</div>
				
				
			</div>
		</div>
	</div>
</div>

<?php include('../components/footer.php'); ?>
