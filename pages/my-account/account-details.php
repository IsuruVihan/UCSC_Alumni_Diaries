<link rel='stylesheet' href='../../assets/styles/my-account.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>

<?php include('../../db/db-conn.php'); ?>
<?php include('../../server/session.php'); ?>

<script>
    $(document).ready(() => {
        $('#edit-details-submit').click(() => {
            const address = $('#user-address').val();
            const contact = $('#user-contact').val();

            $('#user-address, #user-contact').removeClass();

            if (address === '') {
                $('#user-address').addClass('input-error1');
            } else {
                $('#user-address').addClass('input-ok1');
            }
            if (contact === '') {
                $('#user-contact').addClass('input-error2');
            } else {
                $('#user-contact').addClass('input-ok2');
            }

            $('#flash-message').load("../../server/my-account/account-details-backend.php",
            (response) => {
                if (response==="1") {
                    setTimeout(() => window.history.go(), 1);
                }
            });
        });
    });
</script>

<div class='my-account-main-container' id='my-account-main-container'>
    <div class='pic-section' id='pic-section'>
        <div class='section-1'>
            <?php
                if ($_SESSION['PicSrc'] === 'user-default.png') {
                    echo "
                        <img src='../../assets/images/{$_SESSION['PicSrc']}' width='99%' class='user-pic' alt='user-pic'/>
                    ";
                } else {
                    echo "
                        <img src='../../uploads/profile-pics/{$_SESSION['PicSrc']}' width='99%' class='user-pic' alt='user-pic'/>
                    ";
                }
            ?>
            <form id="form1" action='../../server/my-account/edit-photo.php' method="post" enctype="multipart/form-data">
                <label class="pic-upload">
                    <input type="file" value="Edit Photo" name="new-photo" id="new-photo" class="file-upload-btn btn">
                    Edit Photo
                </label>
                <button type="submit" name="change-pic-submit" onclick=submitPhoto() id="change-pic-submit" class="save-pic-btn btn">Submit</button>
            </form>
            <label class="pic-upload1">
                <button class="remove-pic-btn btn" id="remove-pic" onclick=removePhoto()> Remove Photo</button>
            </label>
        </div>
        <div class='section-2'>
            <?php echo "${_SESSION['AccType']}"; ?>
        </div>
    </div>
    <div class='account-details'>
        <div class='title'>
            Account Details
        </div>
        <div class='container-1' id='container-1'>
            <div class='container-3'>
                <div class='section-4-1'>
                    First Name
                </div>
                <div class='section-4'>
                    <?php echo "${_SESSION['FirstName']}"; ?>
                </div>
                <div class='section-4-1'>
                    Full Name
                </div>
                <div class='section-4'>
                    <?php echo "${_SESSION['NameWithInitials']}"; ?>
                </div>
                <div class='section-4-1'>
                    Gender
                </div>
                <div class='section-4'>
                    <?php echo "${_SESSION['Gender']}"; ?>
                </div>
                <div class='section-4-1'>
                    NIC
                </div>
                <div class='section-4'>
                    <?php echo "${_SESSION['NIC']}"; ?>
                </div>
                <div class='section-4-1'>
                    Batch
                </div>
                <div class='section-4'>
                    <?php echo "${_SESSION['Batch']}"; ?>
                </div>
            </div>
            <div class='container-3'>
                <div class='section-4-1'>
                    Last Name
                </div>
                <div class='section-4'>
                    <?php echo "${_SESSION['LastName']}"; ?>
                </div>
                <div class='section-4-1'>
                    Address
                </div>
                <div class='section-5'>
                    <?php echo "${_SESSION['Address']}"; ?>
                </div>
                <div class='section-4-1'>
                    Contact Number
                </div>
                <div class='section-4'>
                    <?php echo "${_SESSION['ContactNumber']}"; ?>
                </div>
                <div class='section-4-1'>
                    Email
                </div>
                <div class='section-4'>
                    <?php echo "${_SESSION['Email']}"; ?>
                </div>
            </div>
        </div>
        <div class='container-2' id='container-2'>
            <button class='edit-details-btn btn' id='edit-btn'>Edit Details</button>
        </div>
        <div class='container-5' id='container-5'>
<!--            <div class='container-3'>-->
<!--                <div class='section-4-1'>-->
<!--                    First Name-->
<!--                </div>-->
<!--                <input class='input5' type='text' placeholder='Enter First Name'/>-->
<!--                <div class='section-4-1'>-->
<!--                    Full Name-->
<!--                </div>-->
<!--                <input class='input5' type='text' placeholder='Enter Full Name'/>-->
<!--                <div class='section-4-1'>-->
<!--                    Gender-->
<!--                </div>-->
<!--                <select class='input5'>-->
<!--                    <option value="" disabled selected hidden>Enter Gender</option>-->
<!--                    <option value='male'>Male</option>-->
<!--                    <option value='female'>Female</option>-->
<!--                </select>-->
<!--                <div class='section-4-1'>-->
<!--                    NIC-->
<!--                </div>-->
<!--                <input class='input5' type='text' placeholder='Enter NIC'/>-->
<!--                <div class='section-4-1'>-->
<!--                    Batch-->
<!--                </div>-->
<!--                <select class='input5'>-->
<!--                    <option value="" disabled selected hidden>Select Batch</option>-->
<!--                    <option value='2018/2019'>2018/2019</option>-->
<!--                    <option value='2018/2019'>2019/2020</option>-->
<!--                    <option value='2018/2019'>2020/2021</option>-->
<!--                </select>-->
<!--            </div>-->
            <div class='container-3'>
<!--                <div class='section-4-1'>-->
<!--                    Last Name-->
<!--                </div>-->
<!--                <input class='input5' type='text' placeholder='Enter Last Name'/>-->
                <div class='section-4-1'>
                    Address
                </div>
                <textarea class='input6' id='user-address' rows='4' cols='50'><?php echo "${_SESSION['Address']}"; ?></textarea>
                <div class='section-4-1'>
                    Contact Number
                </div>
                <input class='input5' type='text' id='user-contact'
                       value='<?php echo "${_SESSION['ContactNumber']}"; ?>'/>
<!--                <div class='section-4-1'>-->
<!--                    Email-->
<!--                </div>-->
<!--                <input class='input5' type='text' placeholder='Enter Email Address'/>-->
                <br />
                <div class='flash-message' id='flash-message'></div>
            </div>
        </div>
        <div class='container-6' id='container-6'>
            <button class='submit-btn btn' id='edit-details-submit'>Submit</button>
            <button class='cancel-btn btn' id='cancel-btn'>Cancel</button>
        </div>
    </div>
</div>    

<script>
    const removePhoto = () => {
        $('#pic-section').load("../../server/my-account/remove-photo.php");
    }
</script>
<script src='../../js/my-account.js'></script>