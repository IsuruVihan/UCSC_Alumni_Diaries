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
        $('#form1').submit((event) => {
            event.preventDefault();
            const sub_type = $('#select-sub-type').val();

            if (sub_type === '') {
                $('#select-sub-type').addClass('input-error');
            } else {
                $('#select-sub-type').addClass('input-ok');
            }
            $('#form1').load("../../server/my-account/subscriptions-recharge-account-backend.php", {
                sub_type: sub_type
            });
        });
    });
</script>

<div class='sub-recharge-main-container'>
    <div class='subscription-01'>
        <div class='sec-16'>
            <div class='sub-type'>
                <div class='title1'>
                    Subscription
                </div>
                <div class='section-7'>
                    <div class='sec-15'>
                        Subscription Type :
                    </div>
                </div>
                <div class='section-7'>
                    <div class='section-8'>
                        <?php echo "${_SESSION['SubscriptionType']}"; ?>
                    </div>
                </div>
                <div class='section-7'>
                    <div class='sec-15'>
                        Due Date :
                    </div>
                    <div class='sec-15'>
                        Amount :
                    </div>
                </div>
                <div class=section-7>
                    <div class='section-8'>
                        <?php echo "${_SESSION['SubscriptionDue']}"; ?>
                    </div>
                    <div class='section-8'>
                        <?php
                         if ($_SESSION['SubscriptionType'] === 'Annually'){
                             echo "5000";
                         } else{
                           echo "500";
                         }
                        ?>
                    </div>
                </div>
            </div>
            <div class='sub-type'>
                <div class='title2'>
                    Change Subscription Type
                </div>
                <form id='form1'>
                    <div class='section-7-1' id='change-sub-type'>
                        <select class='input2' id='select-sub-type'>
                            <option value="" disabled selected hidden>Select Sub. Type</option>
                            <option value='Annually'>Annually</option>
                            <option value='Monthly'>Monthly</option>
                        </select>
                    </div>
                    <div class='section-7-1'>
                        <input id='subscription-submit' class='submit-btn btn' type='submit'>
                    </div>
                </form>
            </div>
        </div>
        <div class='recharge-account'>
            <div class='title1'>
                Recharge Account
            </div>
            <div class='section-9'>
                <input class='input3' type='text' placeholder='Amount'/>
            </div>
            <div class='section-9'>
                <input class='input3' type='file'/>
            </div>
            <div class='section-10'>
                <button class='submit-btn btn'>Submit</button>
                <button class='pay-pal-btn btn'>Pay Pal</button>
            </div>
        </div>
    </div>
</div>

