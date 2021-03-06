<?php include('../server/session.php'); ?>

<?php
    if (!(isset($_SESSION['Email']) && $_SESSION['AccType'] == 'TopBoard') || $_SESSION['Banned']) {
        header('Location: home.php');
    }
?>

<link rel='stylesheet' href='../assets/styles/subscriptions-done.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>

<script>
      $(document).ready(() => {
            $('#rejectedsubs').load("../server/subscriptions/rejected-subscriptions.php");     
      });
      
</script>

<script>
      const Filterbutton = () => {
            const firstName = $('#rejected-fname').val();
            const lastName = $('#rejected-lname').val();
            const batch = $('#rejected-batch').val();
            const subtype = $('#rejected-subtype').val();
            const email = $('#rejected-email').val();
            const start_date = $('#start_date').val();
            const end_date =$('#end_date').val();
            $('#rejectedsubs').load("../server/subscriptions/rejected-subscriptions-filter.php", {
                FirstName: firstName,
                LastName: lastName,
                Batch: batch,
                SubType: subtype,
                Email: email,
                Start_Date: start_date,
                End_Date: end_date
            });     
    }
</script>

<div class='main-box'>
    <div class='left-col'>
        <div class='card subs'>
            <div class='title'>
                Rejected Subscriptions
            </div>
            <div class='alldetails2'>
                <div class='filtermain2'>
                    <div class='filtermain2-row1'>
                        <div class='name1'>
                            <input type='text' class='fname details-feild' placeholder='First name' id='rejected-fname'>
                        </div>
                        <div class='name2'>
                            <input type='text' class='lname details-feild' placeholder='Last name' id='rejected-lname'>
                        </div>
                        <div class='thebatch'>
                            <select class='batch' id='rejected-batch'>
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
                        <div class='thesubtype'>
                            <select class='stype' id='rejected-subtype'>
                                <option value=''> Subscription </option>
                                <option value='Monthly'>Monthly</option>
                                <option value='Annually'>Annually</option>
                            </select>
                        </div>
                    </div> <!-- filtermain2-row1-->
                    <div class='filtermain2-row2'>
                        <div class='theemail'>
                            <input type='text' class='email details-field' placeholder='Email' id='rejected-email'>
                        </div>
                        <div class='fro'>
                            <input class='from' type='text' placeholder='From' onmouseup="(this.type='date')" id='start_date'>
                        </div>
                        <div class='t'>
                            <input class='to' type='text' placeholder='To' onmouseup="(this.type='date')" id='end_date'>
                        </div>
                    </div> <!-- filtermain2-row2-->
                    <div class='filtermain2-row3'>
                        <div class='fil'>
                            <button class="filter-btn btn" onclick=Filterbutton()> Filter </button>
                        </div>
                    </div> 
                </div> <!-- filtermain2 -->
                <div class='flexbox-container2' id='rejectedsubs'>
                    <!-- <div class='flexbox-item2'>
                        <div class='co1'>
                            <img class='img' src='../assets/images/user-default.png' width='100%' height=''
                            class='user-pic' alt='user-pic'/>
                        </div> 
                        <div class='co2'>
                            <div class='allfullname'>
                                <div class='firstname1'>
                                    <label class='alllabels'> First Name </label>
                                    <div class='namefirst'> First Name
                                    </div>
                                </div>
                                <div class='lastname1'>
                                    <label class='alllabels'> Last Name </label>
                                    <div class='namesecond'> Last Name
                                    </div>
                                </div>
                            </div> 
                            <div class='e-address'>
                                <label class='alllabels'> Email </label>
                                <div class='mail'> Email
                                </div>
                            </div>
                            <div class='bills'>
                                <label class='alllabels'> Bill </label>
                                <div class='bill-attachment'> Bill Attachment
                                </div>
                            </div>
                        </div> 
                        <div class='co3'>
                            <div class='batch-sub'>
                                <div class='baat'>
                                    <label class='alllabels'> Batch </label>
                                    <div class='namefirst'> Batch
                                    </div>
                                </div>
                                <div class='suub'>
                                    <label class='alllabels'> Subscription Type </label>
                                    <div class='namesecond'> Subscription Type
                                    </div>
                                </div>
                            </div>
                            <div class='method-amount'>
                                <div class='me'>
                                    <label class='alllabels'> Method </label>
                                    <div class='namefirst'> Method
                                    </div>
                                </div>
                                <div class='ammount'>
                                    <label class='alllabels'> Total Amount </label>
                                    <div class='namesecond'> Total Amount
                                    </div>
                                </div>
                            </div>
                            <div class='timeeestamp'>
                                <label class='alllabels'> Time </label>
                                <div class='time-attachment'> Timestamp
                                </div>
                            </div>
                        </div> 
                    </div>  -->
                </div> <!-- flexbox-container2 -->
                <!-- <div class='gen-rep-btn'>
                    <button class='reportgeneratebutton'> Generate Reports
                    </button>
                </div> gen rep btn -->
            </div> <!-- alldetails2 -->
        </div> <!-- card subs -->
    </div> <!-- left-col -->
</div> <!-- main-box -->