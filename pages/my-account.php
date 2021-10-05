<?php include('../components/header.php'); ?>

<link rel='stylesheet' href='../assets/styles/my-account.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> / My Account
    </p>
    <p class='main-title'>
        <i class="fas fa-user"></i>
        My Account
    </p>
</div>
<div class='my-account'>
    <div class='pic-section'>
        <div class='section-1'>
            <img src='../assets/images/user-default.png' width='99%' class='user-pic' alt='user-pic'/>
            <button class='edit-pic-btn btn'>Edit Photo</button>
            <button class='remove-pic-btn btn'>Remove Photo</button>
        </div>
        <div class='section-2'>
            Account Type
        </div>
    </div>
    <div class='account-details'>
        <div class='title'>
            Account Details
        </div>
        <div class='container-1' id='container-1'>
            <div class='container-3'>
                <div class='section-3-1'>
                    <div class='first-last-name1'>
                        First Name
                    </div>
                    <div class='first-last-name1'>
                        Last Name
                    </div>
                </div>
                <div class='section-3'>
                    <div class='first-last-name'>
                        First Name
                    </div>
                    <div class='first-last-name'>
                        Last Name
                    </div>
                </div>
                <div class='section-4-1'>
                    Full Name
                </div>
                <div class='section-4'>
                    Full Name
                </div>
                <div class='section-4-1'>
                    Gender
                </div>
                <div class='section-4'>
                    Gender
                </div>
                <div class='section-4-1'>
                    NIC
                </div>
                <div class='section-4'>
                    NIC
                </div>
                <div class='section-4-1'>
                    Batch
                </div>
                <div class='section-4'>
                    Batch
                </div>
            </div>
            <div class='container-4'>
                <div class='section-4-1'>
                    Address
                </div>
                <div class='section-5'>
                    Address
                </div>
                <div class='section-4-1'>
                    Contact Number
                </div>
                <div class='section-4'>
                    Contact Number
                </div>
                <div class='section-4-1'>
                    Email
                </div>
                <div class='section-4'>
                    Email
                </div>
            </div>
        </div>
        <div class='container-2' id='container-2'>
            <button class='edit-details-btn btn' id='edit-btn'>Edit Details</button>
        </div>
        <div class='container-5' id='container-5'>
            <div class='container-3'>
                <div class='section-3-1'>
                    <div class='first-last-name1'>
                        First Name
                    </div>
                    <div class='first-last-name1'>
                        Last Name
                    </div>
                </div>
                <div class='section-3'>
                    <input class='input-first-last-name' type='text' placeholder='Enter First Name'/>
                    <input class='input-first-last-name' type='text' placeholder='Enter Last Name'/>
                </div>
                <div class='section-4-1'>
                    Full Name
                </div>
                <input class='input5' type='text' placeholder='Enter Full Name'/>
                <div class='section-4-1'>
                    Gender
                </div>
                <select class='input5'>
                    <option value="" disabled selected hidden>Enter Gender</option>
                    <option value='male'>Male</option>
                    <option value='female'>Female</option>
                </select>
                <div class='section-4-1'>
                    NIC
                </div>
                <input class='input5' type='text' placeholder='Enter NIC'/>
                <div class='section-4-1'>
                    Batch
                </div>
                <select class='input5'>
                    <option value="" disabled selected hidden>Select Batch</option>
                    <option value='2018/2019'>2018/2019</option>
                    <option value='2018/2019'>2019/2020</option>
                    <option value='2018/2019'>2020/2021</option>
                </select>
            </div>
            <div class='container-4'>
                <div class='section-4-1'>
                    Address
                </div>
                <textarea class='input6' id="w3review" name="w3review" rows="4" cols="50"
                          placeholder='Enter Address'></textarea>
                <div class='section-4-1'>
                    Contact Number
                </div>
                <input class='input5' type='text' placeholder='Enter Contact Naumber'/>
                <div class='section-4-1'>
                    Email
                </div>
                <input class='input5' type='text' placeholder='Enter Email Address'/>
            </div>
        </div>
        <div class='container-6' id='container-6'>
            <button class='submit-btn btn'>Submit</button>
            <button class='cancel-btn btn' id='cancel-btn'>Cancel</button>
        </div>
    </div>
    <div class='projects-contributions'>
        <div class='contributions'>
            <div class='title'>
                Contributions
            </div>
            <div class='contributions-container'>
                <div class='contributions-item'>
                    <p class='item-label'>ProjectName</p>
                    <p class='item-label'>Amount</p>
                    <p class='item-label'>time</p>
                </div>
                <div class='contributions-item'>
                    <p class='item-label'>ProjectName</p>
                    <p class='item-label'>Amount</p>
                    <p class='item-label'>time</p>
                </div>
                <div class='contributions-item'>
                    <p class='item-label'>ProjectName</p>
                    <p class='item-label'>Amount</p>
                    <p class='item-label'>time</p>
                </div>
                <div class='contributions-item'>
                    <p class='item-label'>ProjectName</p>
                    <p class='item-label'>Amount</p>
                    <p class='item-label'>time</p>
                </div>
                <div class='contributions-item'>
                    <p class='item-label'>ProjectName</p>
                    <p class='item-label'>Amount</p>
                    <p class='item-label'>time</p>
                </div>
                <div class='contributions-item'>
                    <p class='item-label'>ProjectName</p>
                    <p class='item-label'>Amount</p>
                    <p class='item-label'>time</p>
                </div>
            </div>
        </div>
        <div class='projects'>
            <div class='title'>
                Involved Projects
            </div>
            <div class='projects-container'>
                <div class='projects-item'>
                    <p class='item-label'>ProjectName</p>
                    <p class='item-label'>Position</p>
                </div>
                <div class='projects-item'>
                    <p class='item-label'>ProjectName</p>
                    <p class='item-label'>Position</p>
                </div>
                <div class='projects-item'>
                    <p class='item-label'>ProjectName</p>
                    <p class='item-label'>Position</p>
                </div>
                <div class='projects-item'>
                    <p class='item-label'>ProjectName</p>
                    <p class='item-label'>Position</p>
                </div>
                <div class='projects-item'>
                    <p class='item-label'>ProjectName</p>
                    <p class='item-label'>Position</p>
                </div>
                <div class='projects-item'>
                    <p class='item-label'>ProjectName</p>
                    <p class='item-label'>Position</p>
                </div>
            </div>
        </div>
    </div>
    <div class='right-column'>
        <div class='password'>
            <div class='title'>
                Password
            </div>
            <div class='section-6'>
                <input class='input1' type='password' placeholder='Current Password'/>
                <input class='input1' type='password' placeholder='New Password'/>
                <input class='input1' type='password' placeholder='Re-enter New Password'/>
            </div>
            <button class='submit-btn btn'>Submit</button>
        </div>
        <div class='subscriptions'>
            <div class='title'>
                Subscription
            </div>
            <div class='sub-type'>
                <div class='section-7'>
                    <div class='section-8'>
                        Subscription Type
                    </div>
                    <select class='input2'>
                        <option value="" disabled selected hidden>Change Sub. Type</option>
                        <option value='2018/2019'>2018/2019</option>
                        <option value='2018/2019'>2019/2020</option>
                        <option value='2018/2019'>2020/2021</option>
                    </select>
                </div>
                <div class='section-7'>
                    <div class='section-8'>
                        Due Date
                    </div>
                    <div class='section-8'>
                        Amount
                    </div>
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
            <div class='recharge-details'>
                <div class='title1'>
                    Recharge Details
                </div>
                <div class='filter-field'>
                    <div class='section-11'>
                        <input class='input4' type='text' placeholder='From'
                               onmouseup="(this.type='date')">
                        <input class='input4' type='text' placeholder='To'
                               onmouseup="(this.type='date')">
                    </div>
                    <div class='section-11'>
                        <select class='input4'>
                            <option value="" disabled selected hidden>Subscription Type</option>
                            <option value='2018/2019'>2018/2019</option>
                            <option value='2018/2019'>2019/2020</option>
                            <option value='2018/2019'>2020/2021</option>
                        </select>
                    </div>
                    <div class='section-11'>
                        <button class='filter-btn btn'>Filter</button>
                        <button class='all-btn btn'>All</button>
                        <button class='gen-repo-btn btn'>Generate Report</button>
                    </div>
                </div>
                <div class='recharge-details-container'>
                    <div class='recharge-details-item'>
                        <div class=section-14>
                            <div class='section-12'>
                                Subscription Type
                            </div>
                            <div class='section-12'>
                                Amount
                            </div>
                        </div>
                        <div class='section-14'>
                            <div class='section-12'>
                                Time
                            </div>
                            <div class='section-13'>
                                <button class='bank-slip-btn btn'>Bank Slip</button>
                            </div>
                        </div>
                    </div>
                    <div class='recharge-details-item'>
                        <div class=section-14>
                            <div class='section-12'>
                                Subscription Type
                            </div>
                            <div class='section-12'>
                                Amount
                            </div>
                        </div>
                        <div class='section-14'>
                            <div class='section-12'>
                                Time
                            </div>
                            <div class='section-13'>
                                <button class='bank-slip-btn btn'>Bank Slip</button>
                            </div>
                        </div>
                    </div>
                    <div class='recharge-details-item'>
                        <div class=section-14>
                            <div class='section-12'>
                                Subscription Type
                            </div>
                            <div class='section-12'>
                                Amount
                            </div>
                        </div>
                        <div class='section-14'>
                            <div class='section-12'>
                                Time
                            </div>
                            <div class='section-13'>
                                <button class='bank-slip-btn btn'>Bank Slip</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src='../js/my-account.js'></script>

<?php include('../components/footer.php'); ?>