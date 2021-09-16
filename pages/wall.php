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
		<p class="title">Important Notices</p>
		<div class="filter-box">
                <button class='filter-btn btn'>Starred</button>
				<button class='filter-btn btn'>All</button>
		</div>
		

	</div>

	<div class="common-wall">
	<p class="title">Common Wall</p>
	</div>
</div>

<?php include('../components/footer.php'); ?>
