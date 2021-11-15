<?php include('../server/session.php'); ?>

<link rel='stylesheet' href='../assets/styles/donations.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /Donations
    </p>
    <p class='main-title'>
        <i class='fas fa-users'></i> Donations
    </p>
</div>
<div class='container'>
    <div class='card container-02'>
        <div class='box'>
            <p> Proceed via pay here..</p>
        </div>
        <div class='box-01'>
            <div class='col-03'>
                <label class='label'> Donor Name </label>
                <input class='input-field ' type='text' placeholder='Enter your name here'/>
                <label class='label'> Donor Email </label>
                <input class='input-field ' type='text' placeholder='Enter your email here'/>
                <label class='label'> Amount </label>
                <input class='input-field ' type='text' placeholder='Amount donating'/>
                <label class='label'> Attachment </label>
                <input class='slip-attachment  ' type='file' placeholder='Bank Slip Attachment'/>
            </div>
            <div class='col-04'>
                <button class='submit-btn btn'>Submit</button>
                <button class='cancel-btn btn'>Cancel</button>
            </div>
        </div>
    </div>
</div>

<?php include('../components/footer.php'); ?>
