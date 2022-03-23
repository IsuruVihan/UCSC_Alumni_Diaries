<?php include('../server/session.php'); ?>

<?php
    if (!(isset($_SESSION['Email']) && $_SESSION['AccType'] == 'TopBoard') || $_SESSION['Banned']) {
        header('Location: home.php');
    }
?>

<link rel='stylesheet' href='../assets/styles/subscriptions-t-b-a.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>

<script>
      $(document).ready(() => {
            $('#pendingsubs').load("../server/subscriptions/pending-subscriptions.php");     
      });

</script>

<script>

    //   $('#pending-filter').submit((event) => {
    //         event.preventDefault();
    //         const firstName = $('#pending-fname').val();
    //         const lastName = $('#pending-lname').val();
    //         const batch = $('#pending-batch').val();
    //         const subtype = $('#pending-subtype').val();
    //         const email = $('#pending-email').val();
    //         $('#pendingsubs').load("../server/subscriptions/pending-filter.php", {
    //             FirstName: firstName,
    //             LastName: lastName,
    //             Batch: batch,
    //             SubType: subtype,
    //             Email: email

    //         });
            
    //     });
      
</script>

<script>
      const Filterbutton = () => {
            const firstName = $('#pending-fname').val();
            const lastName = $('#pending-lname').val();
            const batch = $('#pending-batch').val();
            const subtype = $('#pending-subtype').val();
            const email = $('#pending-email').val();
            $('#pendingsubs').load("../server/subscriptions/pending-filter.php", {
                FirstName: firstName,
                LastName: lastName,
                Batch: batch,
                SubType: subtype,
                Email: email
            });     
    }
</script>



<script>
      const Acceptbtn = (id) => {
        $('#flash-message').load("../server/subscriptions/accept-pending.php", {
            id: id
        });
        setTimeout(() => window.history.go(), 1);
    }
</script>


<script>
      const Rejectbtn = (id) => {
        $('#flash-message').load("../server/subscriptions/reject-pending.php", {
            id: id
        });
        setTimeout(() => window.history.go(), 1);
    }
</script>

<div id='flash-message' class='flash-message'></div>
<div class='main-box'>
    <div class='left-col'>
        <div class='s-to-be-accept'>
            <div class='card subs'>
                <div class='title'>
                    Pending Subscriptions
                </div>
                <div class='alldetails1'>
                    <div class='filtermain' id='pending-filter'>
                        <div class='firstname'>
                            <input type='text' class='fname details-feild' placeholder='First Name' id='pending-fname'>
                        </div>
                        <div class='lastname'>
                            <input type='text' class='lname details-feild' placeholder='Last Name' id='pending-lname'>
                        </div>
                        <div class='bat'>
                            <select class='batch' id='pending-batch'>
                                <option value=''>Batch</option>
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
                        <div class='subscriptiontype'>
                            <select class='stype' id='pending-subtype'>
                                <option value=''>Subscription Type</option>
                                <option value='Monthly'>Monthly</option>
                                <option value='Annually'>Annually</option>
                            </select>
                        </div>
                        <div class='emailaddress'>
                            <input type='text' class='email details-field' placeholder='Email' id='pending-email'>
                        </div>
                        <div class='filterbutton'>
                            <button class="filter-btn btn" onclick=Filterbutton()> Filter </button>
                            <!-- <input type='submit' class='filter-btn btn' value='Filter'/> -->
                        </div>
                    </div> <!-- filtermain -->
                    <div class='flexbox-container' id='pendingsubs'>
                        <!-- <div class='flexbox-item'>
                            <div class='profilepic'>
                                <img class='img' src='../assets/images/user-default.png' width='100%' height=''
                                     class='user-pic' alt='user-pic'/>
                            </div>
                            <div class='col2'>
                                <div class='name'>
                                    <div class='first-name'>
                                        <label class='alllabels'> First Name </label>
                                        <div class='namefirst list-details'> First Name
                                        </div>
                                    </div>
                                    <div class='last-name'>
                                        <label class='alllabels'> Last Name </label>
                                        <div class='namesecond list-details'> Last Name
                                        </div>
                                    </div>
                                </div>
                                <div class='e-mail'>
                                    <label class='alllabels'> Last Name </label>
                                    <div class='mail'> Email
                                    </div>
                                </div>
                                <div class='bill'>
                                    <label class='alllabels'> Bill </label>
                                    <div class='bill-attachment'> Bill Attachment
                                    </div>
                                </div>
                            </div> 
                            <div class='col3'>
                                <div class='batch-year'>
                                    <label class='alllabels'> Batch </label>
                                    <div class='b'> Batch
                                    </div>
                                </div>
                                <div class='timestamp'>
                                    <label class='alllabels'> Time </label>
                                    <div class='time'> Timestamp
                                    </div>
                                </div>
                                <div class='accept'>
                                    <button class='accept-btn'>Accept</button>
                                </div>
                            </div> 
                            <div class='col4'>
                                <div class='subbutton'>
                                    <label class='alllabels'> Subscription Type </label>
                                    <div class='substype'> Subscription Type
                                    </div>
                                </div>
                                <div class='price'>
                                    <label class='alllabels'> Amount </label>
                                    <div class='amount'> Amount
                                    </div>
                                </div>
                                <div class='reject'>
                                    <button class='reject-btn'>Reject
                                    </button>
                                </div>
                            </div> 
                        </div> -->
                    </div> <!-- flexbox-container -->
                </div> <!-- alldetails1 -->
            </div> <!-- card subs -->
        </div> <!-- s-to-be-accept -->
    </div> <!-- left-col -->
</div> <!-- main-box -->

