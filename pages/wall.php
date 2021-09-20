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
		<div class="create-notice-box">
			<div class="box-title">
			Edit Important Notice
			</div>
			<form action="" id="create-notice">
				<div class="row-1">
					<input class='input-field-title' type='text' placeholder='Title'/>
					<p class="field-header"> date</p>	 
				</div>
				<div class="row-2">
					<label for="myFile" class='filter-btn btn'>
					<input type="file" id="myFile" name="filename" hidden>
					Edit Upload</label>
				</div>
				<div class="row-3">
				<input class='input-field-message' type='text' placeholder='Message'/>
				</div>
				<div class="row-4">
					<button class='filter-btn btn'>Edit Notice</button>
				</div>
			</form>
		</div>

		<div class="notice-box">
			<form action="" id="create-notice">
				<div class="row-1 row-1-gap">
					<input class='input-field-title' type='text' placeholder='Title'/>
					<p class="field-header"> date</p>	 
				</div>
				<img src="" alt="" class="image-box">
				<div class="row-3">
				<input class='input-field-message' type='text' placeholder='Message'/>
				</div>
				<div class="row-4">
					<button class='filter-btn btn'>Add Star </button>
					<button class='filter-btn btn'>Edit </button>
					<button class='filter-btn btn'>Delete </button>
				</div>
			</form>
		</div>


	</div>

	<div class="common-wall">
		<p class="grid-title">Common Wall</p>
		<div class="box-row">
			<div class="create-post-box">
				<div class = "box-title">Create Post</div>
				<input type="text" placeholder="Title">
				<input type="text" placeholder="Content">
				<div>attachment</div>
				<div class="row-1">
					<div>submit</div>
					<div>cancel</div>
				</div>	
			</div>
							

			<div class="report-box">
					<div class="post-report">
						<div class="box-title">Report Post</div>
						<input type="text" placeholder="Cause">
						<div class="row-1">
							<div>submit</div>
							<div>cancel</div>
						</div>
					</div>
					
					<div class="comment-report">
						<div class="box-title">Report Comment</div>
						<input type="text" placeholder="Cause">
						<div class="row-1">
							<div>submit</div>
							<div>cancel</div>
						</div>
					</div>
			</div>
		</div>
		<div class="filter-box">
			<div class="filter-left">
				<button class='filter-btn btn'>Search by Title</button>
				<button class='filter-btn btn'>Search by ID</button>
			</div>
			<div class="filter-right">
				<button class='filter-btn btn'>Liked</button>
				<button class='filter-btn btn'>My Posts</button>
				<button class='filter-btn btn'>All</button>	
			</div>
		</div>






	</div>
</div>

<?php include('../components/footer.php'); ?>
