<link rel='stylesheet' href='../assets/styles/admin-subscriptions.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>


<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> / 
        <a href='admin.php'>Admin</a> / Subscriptions
    </p>
    <p class='main-title'>
    <i class="fas fa-file-invoice-dollar"></i> Subscriptions
    </p>
</div>

<div class='main-box'>

    <div class='left-col'>

        <div class='s-to-be-accept'>
            <div class='card subs'>
                <div class='title'>
                     Subscriptions to be Accepted
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
                                <option value='Subscription Type'>Sub. Type</option>
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

                    <div class='flexbox-container'>
                        <div class='flexbox-item'>
                            <div class='profilepic'>
                                <img class ='img' src='../assets/images/user-default.png' width='100%' height='' class='user-pic' alt='user-pic' />
                            </div>
                            <div class='col2'>
                                <div class='name'>
                                    <div class='first-name'>
                                        <div class='namefirst list-details'> First Name 
                                        </div>
                                    </div>
                                    <div class='last-name'>
                                        <div class='namesecond list-details'> Last Name
                                        </div>
                                    </div>
                                </div>
                                <div class='e-mail'>
                                    <div class='mail'> Email 
                                    </div>
                                </div>
                                <div class='bill'>
                                    <div class='bill-attachment'> Bill Attachment
                                    </div>
                                </div>
                            </div> <!-- col2 -->

                            <div class='col3'>
                                <div class='batch-year'>
                                    <div class='b'> Batch
                                    </div>
                                </div>
                                <div class='timestamp'>
                                    <div class='time'> Timestamp
                                    </div>
                                </div>
                                <div class='accept'>
                                    <button class='accept-btn'>Accept</button>
                                </div>
                            </div> <!-- col3 -->

                            <div class='col4'>
                                <div class='subbutton'>
                                    <div class='substype'> Sub. Type
                                    </div>
                                </div>
                                <div class='price'>
                                    <div class='amount'> Amount
                                    </div>
                                </div>
                                <div class='reject'>
                                    <button class='reject-btn'>Reject 
                                    </button>
                                </div>
                            </div> <!-- col4 -->
                        </div> <!-- flexbox-item -->

                        <div class='flexbox-item'>
                            <div class='profilepic'>
                                <img class ='img' src='../assets/images/user-default.png' width='100%' height='' class='user-pic' alt='user-pic' />
                            </div>
                            <div class='col2'>
                                <div class='name'>
                                    <div class='first-name'>
                                        <div class='namefirst list-details'> First Name 
                                        </div>
                                    </div>
                                    <div class='last-name'>
                                        <div class='namesecond list-details'> Last Name
                                        </div>
                                    </div>
                                </div>
                                <div class='e-mail'>
                                    <div class='mail'> Email 
                                    </div>
                                </div>
                                <div class='bill'>
                                    <div class='bill-attachment'> Bill Attachment
                                    </div>
                                </div>
                            </div> <!-- col2 -->

                            <div class='col3'>
                                <div class='batch-year'>
                                    <div class='b'> Batch
                                    </div>
                                </div>
                                <div class='timestamp'>
                                    <div class='time'> Timestamp
                                    </div>
                                </div>
                                <div class='accept'>
                                    <button class='accept-btn'>Accept</button>
                                </div>
                            </div> <!-- col3 -->

                            <div class='col4'>
                                <div class='subbutton'>
                                    <div class='substype'> Sub. Type
                                    </div>
                                </div>
                                <div class='price'>
                                    <div class='amount'> Amount
                                    </div>
                                </div>
                                <div class='reject'>
                                    <button class='reject-btn'>Reject 
                                    </button>
                                </div>
                            </div> <!-- col4 -->
                        </div> <!-- flexbox-item -->

                        <div class='flexbox-item'>
                            <div class='profilepic'>
                                <img class ='img' src='../assets/images/user-default.png' width='100%' height='' class='user-pic' alt='user-pic' />
                            </div>
                            <div class='col2'>
                                <div class='name'>
                                    <div class='first-name'>
                                        <div class='namefirst list-details'> First Name 
                                        </div>
                                    </div>
                                    <div class='last-name'>
                                        <div class='namesecond list-details'> Last Name
                                        </div>
                                    </div>
                                </div>
                                <div class='e-mail'>
                                    <div class='mail'> Email 
                                    </div>
                                </div>
                                <div class='bill'>
                                    <div class='bill-attachment'> Bill Attachment
                                    </div>
                                </div>
                            </div> <!-- col2 -->

                            <div class='col3'>
                                <div class='batch-year'>
                                    <div class='b'> Batch
                                    </div>
                                </div>
                                <div class='timestamp'>
                                    <div class='time'> Timestamp
                                    </div>
                                </div>
                                <div class='accept'>
                                    <button class='accept-btn'>Accept</button>
                                </div>
                            </div> <!-- col3 -->

                            <div class='col4'>
                                <div class='subbutton'>
                                    <div class='substype'> Sub. Type
                                    </div>
                                </div>
                                <div class='price'>
                                    <div class='amount'> Amount
                                    </div>
                                </div>
                                <div class='reject'>
                                    <button class='reject-btn'>Reject 
                                    </button>
                                </div>
                            </div> <!-- col4 -->
                        </div> <!-- flexbox-item -->
                    </div> <!-- flexbox-container -->
                </div> <!-- all details1 -->
            </div> <!-- card subs -->
        </div> <!-- s to be accepted -->



        <div class='s-done'>
            <div class='card subs'>
                <div class='title'>
                    Subscriptions Done
                </div>
                <div class='alldetails2'>
                    <div class='filtermain2'>
                        <div class='name1'>
                            <input type='text' class='fname details-feild' placeholder='F.name'>
                        </div>
                        <div class='name2'>
                            <input type='text' class='lname details-feild' placeholder='L.name'>
                        </div>
                        <div class='thebatch'>
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
                        <div class='thesubtype'>
                            <select class='stype'>
                                <option value='Subscription Type'>Subsc.</option>
                                <option value='Monthly'>Monthly</option>
                                <option value='Annually'>Annually</option>
                            </select>
                        </div>
                        <div class='theemail'>
                            <input type='text' class='email details-field'placeholder='Email'> 
                        </div>
                        <div class='fro'>
                            <input class='from' type='text' placeholder='From' onmouseup="(this.type='date')">            
                        </div>
                        <div class='t'>
                            <input class='to' type='text' placeholder='To' onmouseup="(this.type='date')">
                        </div>
                        <div class='fil'>
                            <button class="filter-btn btn">Filter</button>
                        </div>
                    </div> <!-- filtermain2-->

                    <div class='flexbox-container2'>
                        <div class='flexbox-item2'>
                            <div class='co1'>
                                <img class ='img' src='../assets/images/user-default.png' width='100%' height='' class='user-pic' alt='user-pic' />
                            </div> <!-- co1-->

                            <div class='co2'>
                                <div class='allfullname'>
                                    <div class='firstname1'>
                                        <div class='namefirst'> First Name 
                                        </div>
                                    </div>
                                    <div class='lastname1'>
                                        <div class='namesecond'> Last Name 
                                        </div>
                                    </div>
                                </div>
                                <div class='e-address'>
                                    <div class='mail'> Email
                                    </div>
                                </div>
                                <div class='bills'>
                                    <div class='bill-attachment'> Bill Attachment
                                    </div>
                                </div>
                            </div> <!-- co2-->

                            <div class='co3'>
                                <div class='batch-sub'>
                                    <div class='baat'>
                                        <div class='namefirst'> Batch 
                                        </div>
                                    </div>
                                    <div class='suub'>
                                        <div class='namesecond'> Sub. Type
                                        </div>
                                    </div>
                                </div>
                                <div class='method-amount'>
                                    <div class='me'>
                                        <div class='namefirst'> Method
                                        </div>
                                    </div>
                                    <div class='ammount'>
                                        <div class='namesecond'> Amount
                                        </div>
                                    </div>
                                </div>
                                <div class='timeeestamp'>
                                    <div class='namefirst'> Timestamp 
                                    </div>
                                </div>
                            </div> <!-- co3-->
                        </div> <!-- flexbox-item2-->

                        <div class='flexbox-item2'>
                            <div class='co1'>
                                <img class ='img' src='../assets/images/user-default.png' width='100%' height='' class='user-pic' alt='user-pic' />
                            </div> <!-- co1-->

                            <div class='co2'>
                                <div class='allfullname'>
                                    <div class='firstname1'>
                                        <div class='namefirst'> First Name 
                                        </div>
                                    </div>
                                    <div class='lastname1'>
                                        <div class='namesecond'> Last Name 
                                        </div>
                                    </div>
                                </div>
                                <div class='e-address'>
                                    <div class='mail'> Email
                                    </div>
                                </div>
                                <div class='bills'>
                                    <div class='bill-attachment'> Bill Attachment
                                    </div>
                                </div>
                            </div> <!-- co2-->

                            <div class='co3'>
                                <div class='batch-sub'>
                                    <div class='baat'>
                                        <div class='namefirst'> Batch 
                                        </div>
                                    </div>
                                    <div class='suub'>
                                        <div class='namesecond'> Sub. Type
                                        </div>
                                    </div>
                                </div>
                                <div class='method-amount'>
                                    <div class='me'>
                                        <div class='namefirst'> Method
                                        </div>
                                    </div>
                                    <div class='ammount'>
                                        <div class='namesecond'> Amount
                                        </div>
                                    </div>
                                </div>
                                <div class='timeeestamp'>
                                    <div class='namefirst'> Timestamp 
                                    </div>
                                </div>
                            </div> <!-- co3-->
                        </div> <!-- flexbox-item2-->
                    </div> <!-- flexbox-container2-->
                    
                    <div class='gen-rep-btn'>
                        <button class='reportgeneratebutton'> Generate Reports
                        </button>
                    </div> <!-- gen rep btn-->
                </div> <!-- alldetails2-->
            </div> <!-- card subs-->
        </div> <!-- s done-->
    </div> <!-- left col-->

    <div class='right-col'>
        <div class='card2 subs'>
            <div class='title'>
                Subscription Status
            </div>
            <div class='alldetails3'>
                <div class='filtermain3'>

                    <div class='filterrow1'>
                    <div class='firstname-col2'>
                        <input type='text' class='fname details-feild' placeholder='First Name'>
                    </div>
                    <div class='lastname-col2'>
                        <input type='text' class='lname details-feild' placeholder='Last Name'>
                    </div>
                    <div class='bat-col2'>
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
                    <div class='subscriptiontype-col2'>
                        <select class='stype'>
                            <option value='Subscription Type'>Sub. Type</option>
                            <option value='Monthly'>Monthly</option>
                            <option value='Annually'>Annually</option>
                        </select>
                    </div>
                    </div> <!-- filterrow1-->

                    <div class='filterrow2'>
                        <div class='emailaddress-col2'>
                            <input type='text' class='emailsss details-field' placeholder='Email'>
                        </div>
                        <div class='payments'>
                            <select class='stype'>
                                <option value='Payment Status'>Payment Status</option>
                                <option value='Paid'>Paid</option>
                                <option value='Not Paid'>Not Paid</option>
                            </select>
                        </div>
                        <div class='filterbutton-col2'>
                            <button class="filter-btn btn">Filter</button>
                        </div>
                    </div> <!-- filterrow2-->
                </div> <!-- filtermain3-->

                <div class='flexbox-container3'>
                    <div class='flexbox-item3'>
                        <div class='profilepic-col2'>
                            <img class ='img' src='../assets/images/user-default.png' width='100%' height='' class='user-pic' alt='user-pic' />
                        </div>
                        <div class='col2-col2'>
                            <div class='ids'>
                                <div class='namesecond'> ID 
                                </div>
                            </div>
                            <div class='firstname-right'>
                                <div class='namesecond'> First Name 
                                </div>
                            </div> 
                            <div class='batch-right'>
                                <div class='namesecond'> Batch
                                </div> 
                            </div>
                        </div> <!-- col2-col2-->

                        <div class='col3-col2'>
                            <div class='email-right'>
                                <div class='namesecond'> Email
                                </div> 
                            </div>
                            <div class='lastname-right'>
                                <div class='namesecond'> Last Name
                                </div>
                            </div>
                            <div class='batch-col2'>
                                <div class='namesecond'> Subscription Type
                                </div>
                            </div>
                        </div> <!-- col3-col2-->

                        <div class='col4-col2'>
                            <div class='duedate'>
                                <div class='namesecond'> Due Date
                                </div>
                            </div>
                            <div class='payment'>
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
                        </div> <!-- col4-col2-->
                    </div> <!-- flexbox-item3-->

                    <div class='flexbox-item3'>
                        <div class='profilepic-col2'>
                            <img class ='img' src='../assets/images/user-default.png' width='100%' height='' class='user-pic' alt='user-pic' />
                        </div>
                        <div class='col2-col2'>
                            <div class='ids'>
                                <div class='namesecond'> ID 
                                </div>
                            </div>
                            <div class='firstname-right'>
                                <div class='namesecond'> First Name 
                                </div>
                            </div> 
                            <div class='batch-right'>
                                <div class='namesecond'> Batch
                                </div> 
                            </div>
                        </div> <!-- col2-col2-->

                        <div class='col3-col2'>
                            <div class='email-right'>
                                <div class='namesecond'> Email
                                </div> 
                            </div>
                            <div class='lastname-right'>
                                <div class='namesecond'> Last Name
                                </div>
                            </div>
                            <div class='batch-col2'>
                                <div class='namesecond'> Subscription Type
                                </div>
                            </div>
                        </div> <!-- col3-col2-->

                        <div class='col4-col2'>
                            <div class='duedate'>
                                <div class='namesecond'> Due Date
                                </div>
                            </div>
                            <div class='payment'>
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
                        </div> <!-- col4-col2-->
                    </div> <!-- flexbox-item3-->

                    <div class='flexbox-item3'>
                        <div class='profilepic-col2'>
                            <img class ='img' src='../assets/images/user-default.png' width='100%' height='' class='user-pic' alt='user-pic' />
                        </div>
                        <div class='col2-col2'>
                            <div class='ids'>
                                <div class='namesecond'> ID 
                                </div>
                            </div>
                            <div class='firstname-right'>
                                <div class='namesecond'> First Name 
                                </div>
                            </div> 
                            <div class='batch-right'>
                                <div class='namesecond'> Batch
                                </div> 
                            </div>
                        </div> <!-- col2-col2-->

                        <div class='col3-col2'>
                            <div class='email-right'>
                                <div class='namesecond'> Email
                                </div> 
                            </div>
                            <div class='lastname-right'>
                                <div class='namesecond'> Last Name
                                </div>
                            </div>
                            <div class='batch-col2'>
                                <div class='namesecond'> Subscription Type
                                </div>
                            </div>
                        </div> <!-- col3-col2-->

                        <div class='col4-col2'>
                            <div class='duedate'>
                                <div class='namesecond'> Due Date
                                </div>
                            </div>
                            <div class='payment'>
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
                        </div> <!-- col4-col2-->
                    </div> <!-- flexbox-item3-->

                    <div class='flexbox-item3'>
                        <div class='profilepic-col2'>
                            <img class ='img' src='../assets/images/user-default.png' width='100%' height='' class='user-pic' alt='user-pic' />
                        </div>
                        <div class='col2-col2'>
                            <div class='ids'>
                                <div class='namesecond'> ID 
                                </div>
                            </div>
                            <div class='firstname-right'>
                                <div class='namesecond'> First Name 
                                </div>
                            </div> 
                            <div class='batch-right'>
                                <div class='namesecond'> Batch
                                </div> 
                            </div>
                        </div> <!-- col2-col2-->

                        <div class='col3-col2'>
                            <div class='email-right'>
                                <div class='namesecond'> Email
                                </div> 
                            </div>
                            <div class='lastname-right'>
                                <div class='namesecond'> Last Name
                                </div>
                            </div>
                            <div class='batch-col2'>
                                <div class='namesecond'> Subscription Type
                                </div>
                            </div>
                        </div> <!-- col3-col2-->

                        <div class='col4-col2'>
                            <div class='duedate'>
                                <div class='namesecond'> Due Date
                                </div>
                            </div>
                            <div class='payment'>
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
                        </div> <!-- col4-col2-->
                    </div> <!-- flexbox-item3-->

                    <div class='flexbox-item3'>
                        <div class='profilepic-col2'>
                            <img class ='img' src='../assets/images/user-default.png' width='100%' height='' class='user-pic' alt='user-pic' />
                        </div>
                        <div class='col2-col2'>
                            <div class='ids'>
                                <div class='namesecond'> ID 
                                </div>
                            </div>
                            <div class='firstname-right'>
                                <div class='namesecond'> First Name 
                                </div>
                            </div> 
                            <div class='batch-right'>
                                <div class='namesecond'> Batch
                                </div> 
                            </div>
                        </div> <!-- col2-col2-->

                        <div class='col3-col2'>
                            <div class='email-right'>
                                <div class='namesecond'> Email
                                </div> 
                            </div>
                            <div class='lastname-right'>
                                <div class='namesecond'> Last Name
                                </div>
                            </div>
                            <div class='batch-col2'>
                                <div class='namesecond'> Subscription Type
                                </div>
                            </div>
                        </div> <!-- col3-col2-->

                        <div class='col4-col2'>
                            <div class='duedate'>
                                <div class='namesecond'> Due Date
                                </div>
                            </div>
                            <div class='payment'>
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
                        </div> <!-- col4-col2-->
                    </div> <!-- flexbox-item3-->

                    <div class='flexbox-item3'>
                        <div class='profilepic-col2'>
                            <img class ='img' src='../assets/images/user-default.png' width='100%' height='' class='user-pic' alt='user-pic' />
                        </div>
                        <div class='col2-col2'>
                            <div class='ids'>
                                <div class='namesecond'> ID 
                                </div>
                            </div>
                            <div class='firstname-right'>
                                <div class='namesecond'> First Name 
                                </div>
                            </div> 
                            <div class='batch-right'>
                                <div class='namesecond'> Batch
                                </div> 
                            </div>
                        </div> <!-- col2-col2-->

                        <div class='col3-col2'>
                            <div class='email-right'>
                                <div class='namesecond'> Email
                                </div> 
                            </div>
                            <div class='lastname-right'>
                                <div class='namesecond'> Last Name
                                </div>
                            </div>
                            <div class='batch-col2'>
                                <div class='namesecond'> Subscription Type
                                </div>
                            </div>
                        </div> <!-- col3-col2-->

                        <div class='col4-col2'>
                            <div class='duedate'>
                                <div class='namesecond'> Due Date
                                </div>
                            </div>
                            <div class='payment'>
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
                        </div> <!-- col4-col2-->
                    </div> <!-- flexbox-item3-->

                    



                </div> <!-- flexbox-container3-->




            </div> <!-- alldetails3-->


        </div> <!--card2 subs -->


    </div> <!--right col -->

</div> <!-- main box -->

<?php include('../components/footer.php'); ?>

