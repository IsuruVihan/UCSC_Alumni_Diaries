<?php include('../components/header.php'); ?>
<link rel="stylesheet" href="../assets/styles/wall.css">
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        Wall
    </p>
    <p class='main-title'>
	<i class="fa fa-globe"></i></i> Wall
    </p>
</div>
<div class='wall'>
	<div class="important-notice">
		<p class="grid-title">Important Notices</p>
		<div class="filter-box">
                <button class='filter-btn btn'>Starred</button>
				<button class='filter-btn btn'>All</button>
		</div>
		<div class="create-notice-box">
			<div class="box-title">
			Create Important Notice
			</div>
			<form action="" id="create-notice">
				<div class="row-1">
					<input class='input-field-title' type='text' placeholder='Title'/>
					<p class="field-header"> date</p>	 
				</div>
				<div class="row-2">
					<label for="myFile" class='filter-btn btn'>
					<input type="file" id="myFile" name="filename" hidden>
					Upload Picture</label>
				</div>
				<div class="row-3">
				<input class='input-field-message' type='text' placeholder='Message'/>
				</div>
				<div class="row-4">
					<button class='filter-btn btn'>Create Notice</button>
				</div>
			</form>
		</div>


	</div>

	<div class="common-wall">
	<p class="grid-title">Common Wall</p>
	</div>
</div>

<?php include('../components/footer.php'); ?>
