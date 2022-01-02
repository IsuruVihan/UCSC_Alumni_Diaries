<?php include('../server/session.php'); ?>

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

<div class='main-box'>
    <div class='left-col'>
        <div class='s-to-be-accept'>
            <div class='card subs'>
                <div class='title'>
                    Pending Subscriptions
                </div>
                <div class='alldetails1'>
                    <div class='filtermain'>
                        <div class='firstname'>
                            <input type='text' class='fname details-feild' placeholder='First Name'>
                        </div>
                        <div class='lastname'>
                            <input type='text' class='lname details-feild' placeholder='Last Name'>
                        </div>
                        <div class='bat'>
                            <select class='batch'>
                                <option value='All'>Batch</option>
                                <option value='2012/2013'>2012/2013</option>
                                <option value='2013/2014'>2013/2014</option>
                                <option value='2014/2015'>2014/2015</option>
                                <option value='2015/2016'>2015/2016</option>
                                <option value='2016/2017'>2016/2017</option>
                                <option value='2017/2018'>2017/2018</option>
                                <option value='2018/2019'>2018/2019</option>
                                <option value='2019/2020'>2019/2020</option>
                                <option value='2020/2021'>2020/2021</option>
                            </select>
                        </div>
                        <div class='subscriptiontype'>
                            <select class='stype'>
                                <option value='Subscription Type'>Subscription Type</option>
                                <option value='Monthly'>Monthly</option>
                                <option value='Annually'>Annually</option>
                            </select>
                        </div>
                        <div class='emailaddress'>
                            <input type='text' class='email details-field' placeholder='Email'>
                        </div>
                        <div class='filterbutton'>
                            <button class="filter-btn btn">Filter</button>
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