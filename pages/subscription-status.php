<?php include('../server/session.php'); ?>

<?php
    if (!(isset($_SESSION['Email']) && $_SESSION['AccType'] == 'TopBoard')) {
        header('Location: home.php');
    }
?>

<link rel='stylesheet' href='../assets/styles/subscription-status.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>

<script>
      $(document).ready(() => {
            $('#statussubs').load("../server/subscriptions/subscription-status.php");     
      });
      
</script>

<script>
      const Filterbutton = () => {
            const firstName = $('#status-fname').val();
            const lastName = $('#status-lname').val();
            const batch = $('#status-batch').val();
            const subscriptiontype = $('#status-subscriptiontype').val();
            const email = $('#status-email').val();
            const paymentstatus = $('#status-paymentstatus').val();
            $('#statussubs').load("../server/subscriptions/subscription-status-filter.php", {
                FirstName: firstName,
                LastName: lastName,
                Batch: batch,
                SubscriptionType: subscriptiontype,
                Email: email,
                PaymentStatus: paymentstatus
            });     
    }
</script>

<script>
      const Banbtn = (email) => {
        $('#flash-message').load("../server/subscriptions/ban-status.php", {
            email: email
        });
        setTimeout(() => window.history.go(), 1);
    }
</script>

<script>
      const UnBanbtn = (email) => {
        $('#flash-message').load("../server/subscriptions/unban-status.php", {
            email: email
        });
        setTimeout(() => window.history.go(), 1);
    }
</script>

<div id='flash-message' class='flash-message'></div>
<div class='main-box'>
    <div class='right-col'>
        <div class='card2 subs'>
            <div class='title'>
                Subscription Status
            </div>
            <div class='alldetails3'>
                <div class='filtermain3'>
                    <div class='filterrow1'>
                    <div class='firstname-col2'>
                            <input type='text' class='fname details-feild' placeholder='First Name' id='status-fname'>
                        </div>
                        <div class='lastname-col2'>
                            <input type='text' class='lname details-feild' placeholder='Last Name' id='status-lname'>
                        </div>
                        <div class='bat-col2'>
                            <select class='batch' id='status-batch'>
                                <option value='All'>Batch</option>
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
                        <div class='subscriptiontype-col2'>
                            <select class='stype' id='status-subscriptiontype'>
                                <option value='All'>Subscription Type</option>
                                <option value='Monthly'>Monthly</option>
                                <option value='Anually'>Annually</option>
                            </select>
                        </div>
                        <div class='emailaddress-col2'>
                            <input type='text' class='emailsss details-field' placeholder='Email' id='status-email'>
                        </div>
                        <div class='payments'>
                            <select class='stype' id='status-paymentstatus'>
                                <option value='All'>Payment Status</option>
                                <option value='Paid'>Paid</option>
                                <option value='NotPaid'>Not Paid</option>
                            </select>
                        </div>
                    </div> <!-- filterrow1 -->
                    <div class='filterrow2'>
                        <div class='filterbutton-col2'>
                            <button class="filter-btn btn" onclick=Filterbutton()> Filter </button>
                        </div>
                    </div> <!-- filterrow2 -->
                </div> <!-- filtermain3 -->

                <div class='flexbox-container3' id='statussubs'>
                    <!-- <div class='flexbox-item3'>
                        <div class='profilepic-col2'>
                            <img class='img' src='../assets/images/user-default.png' width='100%' height=''
                                 class='user-pic' alt='user-pic'/>
                        </div>
                        <div class='col2-col2'>
                            <div class='ids'>
                                <label class='alllabels'> ID </label>
                                <div class='namesecond'> ID
                                </div>
                            </div>
                            <div class='firstname-right'>
                                <label class='alllabels'> First Name </label>
                                <div class='namesecond'> First Name
                                </div>
                            </div>
                            <div class='batch-right'>
                                <label class='alllabels'> Batch </label>
                                <div class='namesecond'> Batch
                                </div>
                            </div>
                        </div> 
                        <div class='col3-col2'>
                            <div class='email-right'>
                                <label class='alllabels'> Email </label>
                                <div class='namesecond'> Email
                                </div>
                            </div>
                            <div class='lastname-right'>
                                <label class='alllabels'> Last Name </label>
                                <div class='namesecond'> Last Name
                                </div>
                            </div>
                            <div class='batch-col2'>
                                <label class='alllabels'> Subscription Type </label>
                                <div class='namesecond'> Subscription Type
                                </div>
                            </div>
                        </div> 
                        <div class='col4-col2'>
                            <div class='duedate'>
                                <label class='alllabels'> Due Date </label>
                                <div class='namesecond'> Due Date
                                </div>
                            </div>
                            <div class='payment'>
                                <label class='alllabels'> Payment Status </label>
                                <div class='namesecond'> Payment Status
                                </div>
                            </div>
                            <div class='ban-unban'>
                                <div class='ban'>
                                    <button class='ban-btn'> Ban
                                    </button>
                                </div>
                                <div class='unban'>
                                    <button class='unban-btn'> Unban
                                    </button>
                                </div>
                            </div>
                        </div> 
                    </div>  -->
                </div> <!-- flexbox-container3 -->
            </div> <!-- alldetails3 -->
        </div> <!-- card2 subs -->
    </div> <!-- right-col -->
</div> <!-- filtermain2 -->