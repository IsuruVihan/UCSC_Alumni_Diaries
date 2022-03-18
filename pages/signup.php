<?php include('../server/session.php'); ?>

<link rel='stylesheet' href='../assets/styles/signup.css'/>

<?php include('../components/header.php'); ?>

<script>
    $(document).ready(() => {
        $('#signup-cancel').click(() => {
            $('#signup-init, #signup-fname, #signup-lname, #signup-nic, #signup-email, #signup-index, #signup-contact,'
                + '#signup-gender, #signup-batch, #signup-address').removeClass('input-error, input-ok');
            $('#signup-init, #signup-fname, #signup-lname, #signup-nic, #signup-email, #signup-index, #signup-contact,'
                + '#signup-address').val('');
         
        });
        
        $('#signup-form').submit((event) => {
            event.preventDefault();
            let isComplete = true;
            
            const name_with_initials = $('#signup-init').val();
            const first_name = $('#signup-fname').val();
            const last_name = $('#signup-lname').val();
            const nic = $('#signup-nic').val();
            const email = $('#signup-email').val();
            const index = $('#signup-index').val();
            const contact = $('#signup-contact').val();
            const gender = $('#signup-gender').val();
            const batch = $('#signup-batch').val();
            const address = $('#signup-address').val();
            
            $('#signup-init, #signup-fname, #signup-lname, #signup-nic, #signup-email, #signup-index, #signup-contact,'
                + '#signup-gender, #signup-batch, #signup-address').removeClass('input-error, input-ok');

            if (name_with_initials === '') {
                $('#signup-init').addClass('input-error');
                isComplete = false;
            } else {
                $('#signup-init').addClass('input-ok');
            }
            if (first_name === '') {
                $('#signup-fname').addClass('input-error');
                isComplete = false;
            } else {
                $('#signup-fname').addClass('input-ok');
            }
            if (last_name === '') {
                $('#signup-lname').addClass('input-error');
                isComplete = false;
            } else {
                $('#signup-lname').addClass('input-ok');
            }
            if (nic === '') {
                $('#signup-nic').addClass('input-error');
                isComplete = false;
            } else {
                $('#signup-nic').addClass('input-ok');
            }
            if (email === '') {
                $('#signup-email').addClass('input-error');
                isComplete = false;
            } else {
                $('#signup-email').addClass('input-ok');
            }
            if (index === '') {
                $('#signup-index').addClass('input-error');
                isComplete = false;
            } else {
                $('#signup-index').addClass('input-ok');
            }
            if (contact === '') {
                $('#signup-contact').addClass('input-error');
                isComplete = false;
            } else {
                $('#signup-contact').addClass('input-ok');
            }
            if (address === '') {
                $('#signup-address').addClass('input-error');
                isComplete = false;
            } else {
                $('#signup-address').addClass('input-ok');
            }

            if (isComplete) {
                $('#signup-init, #signup-fname, #signup-lname, #signup-nic, #signup-email, #signup-index, #signup-contact,'
                    + '#signup-address').val('');
                $('#signup-init, #signup-fname, #signup-lname, #signup-nic, #signup-email, #signup-index, #signup-contact,'
                    + '#signup-gender, #signup-batch, #signup-address').removeClass('input-error, input-ok');
            }
            
            $('#signup-message').load("../server/signup/signup-form.php", {
                name_with_initials: name_with_initials,
                first_name: first_name,
                last_name: last_name,
                nic: nic,
                email: email,
                index: index,
                contact: contact,
                gender: gender,
                batch: batch,
                address: address
            });
        });
    });
</script>

<div class='conatiner01'>
    <div class='container'>
        <div class='title'>Sign Up</div>
        <form name='signup-form' id='signup-form'>
            <div class='input_box'>
                <span class='details'>Name with Initials</span>
                <input id='signup-init' type='text'>
            </div>
            <div class='user_details'>
                <div class='input_box'>
                    <span class='details'>First Name</span>
                    <input id='signup-fname' type='text'>
                </div>
                <div class='input_box'>
                    <span class='details'>Last Name</span>
                    <input id='signup-lname' type='text'>
                </div>
                <div class='input_box'>
                    <span class='details'> NIC</span>
                    <input id='signup-nic' type='text'>
                </div>
                <div class='input_box'>
                    <span class='details'>Email</span>
                    <input id='signup-email' type='text'>
                </div>
                <div class='input_box'>
                    <span class='details'>Index Number</span>
                    <input id='signup-index' type='text'>
                </div>
                <div class='input_box'>
                    <span class='details'>Contact Number</span>
                    <input id='signup-contact' type='text'>
                </div>
            </div>
            <div class='user_details01'>
                <div class='input_box'>
                    <span class='details'>Gender</span>
                    <select id='signup-gender' class='Gender'>
                        <option value='Male'>Male</option>
                        <option value='Female'>Female</option>
                    </select>
                </div>
                <div class='input_box'>
                    <span class='details'>Batch</span>
                    <select id='signup-batch' class='Batch'>
                        <option value='2004/2005'>2004/2005</option>
                        <option value='2005/2006'>2005/2006</option>
                        <option value='2006/2007'>2006/2007</option>
                        <option value='2007/2008'>2007/2008</option>
                        <option value='2008/2009'>2008/2009</option>
                        <option value='2009/2010'>2009/2010</option>
                        <option value='2010/2011'>2010/2011</option>
                        <option value='2011/2012'>2011/2012</option>
                        <option value='2012/2013'>2012/2013</option>
                        <option value='2013/2014'>2013/2014</option>
                        <option value='2014/2015'>2014/2015</option>
                        <option value='2015/2016'>2015/2016</option>
                        <option value='2016/2017'>2016/2017</option>
                        <option value='2017/2018'>2017/2018</option>
                        <option value='2018/2019'>2018/2019</option>
                        <option value='2019/2020'>2019/2020</option>
                        <option value='2020/2021'>2020/2021</option>
                        <option value='2021/2022'>2021/2022</option>
                    </select>
                </div>
            </div>
            <div class='input_box'>
                <span class='details'>Address</span>
                <input id='signup-address' type='text'>
            </div>
            <p id='signup-message'></p>
            <div class='buttons'>
                <input id='signup-submit' name='submit' type='submit' value='Sign Up' class='btn'/>
                <input id='signup-cancel' type='button' value='Cancel' class='btn_cancel'/>
            </div>
            <p>Already have an account? <a href='login.php'>log in</a></p>
        </form>
    </div>
</div>

<?php include('../components/footer.php'); ?>