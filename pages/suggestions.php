<link rel='stylesheet' href='../assets/styles/suggestions.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>


<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> / Suggestions
    </p>
    <p class='main-title'>
	<i class="fas fa-lightbulb"></i> Suggestions
    </p>
</div>

<div class='main-box'>
<div class='suggestions-form'>
	<div class='card suggestions-box'>
		<div class='title'>
            Any Suggestions?        
		</div>
        <div class='fields'>
            <form action='suggestions.php'>
                <label class='suggestion-form-label'> Full Name </label>
                <input type='text' class='full-name details-field'  placeholder='Your Name' >
                <label class='suggestion-form-label'> Email </label>
                <input type='text' class='email-field details-field'  placeholder='Email' >
                <label class='suggestion-form-label'> Title </label>
                <input type='text' class='title-field details-field'  placeholder='Title' >
                <div class='sub-cont'>
                    <input type='file' class='image-field' name='suggestion-image' accept='image/*'> 
                    <textarea class='comment'>    Enter your suggestions here... </textarea>
                </div>
                
                <div class='submit-button'>
                    <input type='submit' class='submit-btn' value='Submit'>
                </div>
            </form>
               

        </div>


	

    </div>

</div>

<div class='suggestions-list-item'>
	<div class='card suggestions-box'>
		<div class='title'>
            Suggestions List

	

    </div>
</div>

<?php include('../components/footer.php'); ?>

