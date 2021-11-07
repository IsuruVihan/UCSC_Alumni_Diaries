<?php include('../components/header.php'); ?>
<link rel="stylesheet" href="../assets/styles/admin-accounts-1.css">
<link rel='stylesheet' href='../assets/styles/admin-account-iframe.css'>
<link rel='stylesheet' href='../assets/styles/signup-iframe.css'>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css' integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous' />
<script src='../js/admin-accounts.js'></script>

<!-- <script>
    $(document).ready( () => {
        $('#account-signup').click(function(){
            $('#account-register').show;
            $('#regitered-account').hide;
        });
        $('#account-registered').click(function(){
            $('#registered-account').show;
            $('#account-register').hide;
        });

        
    });
</script> -->

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='admin.php'>Admin</a> / Accounts
    </p>
    <p class='main-title'>
        <i class="fas fa-users-cog"></i> Accounts
    </p>
</div>
<div class='admin-accounts'>
    <div class='admin-account-iframe'>
        <div class='iframe-nav'>
            <a class='iframe-nav-link' id='account-signup'  onclick="onClickState('account-signup'); onClickPageShow('account-signup')">Create</a>
            <a class='iframe-nav-link iframe-nav-state' id='account-request'  onclick="onClickState('account-request'); onClickPageShow('account-request')">Requests</a>
            <a class='iframe-nav-link' id='account-rejected' target='iframe' onclick="onClickState('account-rejected'); onClickPageShow('account-rejected')">Rejected</a>
            <a class='iframe-nav-link' id='account-registered' target='iframe' onclick="onClickState('account-registered'); onClickPageShow('account-registered')">Registered</a>
            <a class='iframe-nav-link' id='account-banned' target='iframe' onclick="onClickState('account-banned'); onClickPageShow('account-banned')">Banned</a>
        </div>

        <div class='iframe-display'>

            <!-- Register form -->
            <div class='register-conatiner01' id='account-register' >
                <div class='register-container'>
                    <div class='title'>Register Members</div>
                    <form>
                        <div class='register-input_box'>
                            <span class='register-details'>Name with Initials</span>
                            <input type='text' placeholder=' Enter Your Name with initials'>
                        </div>
                        <div class='register-user_details'>
                            <div class='register-input_box'>
                                <span class='register-details'>First Name</span>
                                <input type='text' placeholder='Enter Your First Name'>
                            </div>
                            <div class='register-input_box'>
                                <span class='register-details'>Last Name</span>
                                <input type='text' placeholder='Enter Your Last Name'>
                            </div>
                            <div class='register-input_box'>
                                <span class='register-details'> NIC</span>
                                <input type='text' placeholder='Enter Your NIC'>
                            </div>
                            <div class='register-input_box'>
                                <span class='register-details'>Email</span>
                                <input type='email' placeholder='Enter Your Email Address'>
                            </div>
                            <div class='register-input_box'>
                                <span class='register-details'>Index Number</span>
                                <input type='text' placeholder='Enter Your Index Number'>
                            </div>
                            <div class='register-input_box'>
                                <span class='register-details'>Contact Number</span>
                                <input type='text' placeholder='Enter Your Contact Number'>
                            </div>
                        </div>
                        <div class='register-user_details01'>
                            <div class='register-input_box'>
                                <span class='register-details'>Gender</span>
                                <select class='register-Gender'>
                                    <option value='D' class='register-option01'>Select Gender</option>
                                    <option value='N'>Male</option>
                                    <option value='f'>Female</option>
                                </select>
                            </div>
                            <div class='register-input_box'>
                                <span class='register-details'>Batch</span>
                                <select class='register-Batch'>
                                    <option value='G' class='register-option01'>Select Batch</option>
                                    <option value="01">2004/2005</option>
                                    <option value="02">2005/2006</option>
                                    <option value="03">2006/2007</option>
                                    <option value="04">2007/2008</option>
                                    <option value="05">2008/2009</option>
                                    <option value="06">2009/2010</option>
                                    <option value="07">2010/2011</option>
                                    <option value="08">2011/2012</option>
                                    <option value="09">2012/2013</option>
                                    <option value="10">2013/2014</option>
                                    <option value="01">2014/2015</option>
                                    <option value="02">2016/2017</option>
                                    <option value="03">2018/2019</option>
                                    <option value="04">2019/2020</option>
                                    <option value="05">2020/2021</option>
                                    <option value="06">2021/2022</option>
                                    <option value="07">2022/2023</option>
                                </select>
                            </div>
                        </div>
                        <div class='register-input_box'>
                            <span class='register-details'>Address</span>
                            <input type='text' placeholder='Enter Your Address'>
                        </div>
                        <div class='register-buttons'>
                            <input type='submit' value='Create Account' class='register-btn'>
                            <input type='reset' value='Cancel' class='register-btn_cancel' />
                        </div>
                    </form>
                </div>
            </div>
            <!--account registered section-->
            <div class='card registered' id='registered-account'>
                <div class='title'>
                    Registered
                </div>
                <div class='filter'>
                    <div class='col1'>
                        <input class='input-field' type='text' placeholder='First Name' />
                        <input class='input-field' type='text' placeholder='Last Name' />
                        <select class='input-field'>
                            <option value='All'>All</option>
                            <option value='2018/2019'>2018/2019</option>
                            <option value='2018/2019'>2019/2020</option>
                            <option value='2018/2019'>2020/2021</option>
                        </select>
                    </div>
                    <div class='col2'>
                        <button class='filter-btn btn'>Filter</button>
                    </div>
                </div>
                <div class='results'>
                    <div class='result' onmouseover="DisplayButtons('reg-1')" onmouseout="HideButtons('reg-1')">
                        <p class='request-id'>FirstName</p>
                        <p class='request-id'>LastName</p>
                        <p class='request-id'>Batch</p>
                        <div class='buttons' id='reg-1'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('reg-2')" onmouseout="HideButtons('reg-2')">
                        <p class='request-id'>FirstName</p>
                        <p class='request-id'>LastName</p>
                        <p class='request-id'>Batch</p>
                        <div class='buttons' id='reg-2'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('reg-3')" onmouseout="HideButtons('reg-3')">
                        <p class='request-id'>FirstName</p>
                        <p class='request-id'>LastName</p>
                        <p class='request-id'>Batch</p>
                        <div class='buttons' id='reg-3'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('reg-4')" onmouseout="HideButtons('reg-4')">
                        <p class='request-id'>FirstName</p>
                        <p class='request-id'>LastName</p>
                        <p class='request-id'>Batch</p>
                        <div class='buttons' id='reg-4'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('reg-5')" onmouseout="HideButtons('reg-5')">
                        <p class='request-id'>FirstName</p>
                        <p class='request-id'>LastName</p>
                        <p class='request-id'>Batch</p>
                        <div class='buttons' id='reg-5'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('reg-6')" onmouseout="HideButtons('reg-6')">
                        <p class='request-id'>FirstName</p>
                        <p class='request-id'>LastName</p>
                        <p class='request-id'>Batch</p>
                        <div class='buttons' id='reg-6'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('reg-7')" onmouseout="HideButtons('reg-7')">
                        <p class='request-id'>FirstName</p>
                        <p class='request-id'>LastName</p>
                        <p class='request-id'>Batch</p>
                        <div class='buttons' id='reg-7'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- rejected accounts -->
            <div class='card rejected-requests' id='rejected-request'>
                <div class='title'>
                    Rejected Requests
                </div>
                <div class='filter'>
                    <div class='col1'>
                        <input class='input-field' type='text' placeholder='First Name' />
                        <input class='input-field' type='text' placeholder='Last Name' />
                        <select class='input-field'>
                            <option value='All'>All</option>
                            <option value='2018/2019'>2018/2019</option>
                            <option value='2018/2019'>2019/2020</option>
                            <option value='2018/2019'>2020/2021</option>
                        </select>
                    </div>
                    <div class='col2'>
                        <button class='filter-btn btn'>Filter</button>
                    </div>
                </div>
                <div class='results'>
                    <div class='result' onmouseover="DisplayButtons('rej-req-1')" onmouseout="HideButtons('rej-req-1')">
                        <p class='request-id'>RequestID 1</p>
                        <div class='buttons' id='rej-req-1'>
                            <button class='view-btn btn'>View</button>
                            <button class='delete-btn btn'>Delete</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('rej-req-2')" onmouseout="HideButtons('rej-req-2')">
                        <p class='request-id'>RequestID 2</p>
                        <div class='buttons' id='rej-req-2'>
                            <button class='view-btn btn'>View</button>
                            <button class='delete-btn btn'>Delete</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('rej-req-3')" onmouseout="HideButtons('rej-req-3')">
                        <p class='request-id'>RequestID 3</p>
                        <div class='buttons' id='rej-req-3'>
                            <button class='view-btn btn'>View</button>
                            <button class='delete-btn btn'>Delete</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('rej-req-4')" onmouseout="HideButtons('rej-req-4')">
                        <p class='request-id'>RequestID 4</p>
                        <div class='buttons' id='rej-req-4'>
                            <button class='view-btn btn'>View</button>
                            <button class='delete-btn btn'>Delete</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('rej-req-5')" onmouseout="HideButtons('rej-req-5')">
                        <p class='request-id'>RequestID 5</p>
                        <div class='buttons' id='rej-req-5'>
                            <button class='view-btn btn'>View</button>
                            <button class='delete-btn btn'>Delete</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('rej-req-6')" onmouseout="HideButtons('rej-req-6')">
                        <p class='request-id'>RequestID 6</p>
                        <div class='buttons' id='rej-req-6'>
                            <button class='view-btn btn'>View</button>
                            <button class='delete-btn btn'>Delete</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('rej-req-7')" onmouseout="HideButtons('rej-req-7')">
                        <p class='request-id'>RequestID 7</p>
                        <div class='buttons' id='rej-req-7'>
                            <button class='view-btn btn'>View</button>
                            <button class='delete-btn btn'>Delete</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('rej-req-8')" onmouseout="HideButtons('rej-req-8')">
                        <p class='request-id'>RequestID 8</p>
                        <div class='buttons' id='rej-req-8'>
                            <button class='view-btn btn'>View</button>
                            <button class='delete-btn btn'>Delete</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('rej-req-9')" onmouseout="HideButtons('rej-req-9')">
                        <p class='request-id'>RequestID 9</p>
                        <div class='buttons' id='rej-req-9'>
                            <button class='view-btn btn'>View</button>
                            <button class='delete-btn btn'>Delete</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- banned accounts -->
            <div class='card banned' id='banned-account'>
                <div class='title'>
                    Banned
                </div>
                <div class='filter'>
                    <div class='col1'>
                        <input class='input-field' type='text' placeholder='First Name' />
                        <input class='input-field' type='text' placeholder='Last Name' />
                        <select class='input-field'>
                            <option value='All'>All</option>
                            <option value='2018/2019'>2018/2019</option>
                            <option value='2018/2019'>2019/2020</option>
                            <option value='2018/2019'>2020/2021</option>
                        </select>
                    </div>
                    <div class='col2'>
                        <button class='filter-btn btn'>Filter</button>
                    </div>
                </div>
                <div class='results'>
                    <div class='result' onmouseover="DisplayButtons('ban-1')" onmouseout="HideButtons('ban-1')">
                        <p class='request-id'>FirstName</p>
                        <p class='request-id'>LastName</p>
                        <p class='request-id'>Batch</p>
                        <div class='buttons' id='ban-1'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('ban-2')" onmouseout="HideButtons('ban-2')">
                        <p class='request-id'>FirstName</p>
                        <p class='request-id'>LastName</p>
                        <p class='request-id'>Batch</p>
                        <div class='buttons' id='ban-2'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('ban-3')" onmouseout="HideButtons('ban-3')">
                        <p class='request-id'>FirstName</p>
                        <p class='request-id'>LastName</p>
                        <p class='request-id'>Batch</p>
                        <div class='buttons' id='ban-3'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('ban-4')" onmouseout="HideButtons('ban-4')">
                        <p class='request-id'>FirstName</p>
                        <p class='request-id'>LastName</p>
                        <p class='request-id'>Batch</p>
                        <div class='buttons' id='ban-4'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('ban-5')" onmouseout="HideButtons('ban-5')">
                        <p class='request-id'>FirstName</p>
                        <p class='request-id'>LastName</p>
                        <p class='request-id'>Batch</p>
                        <div class='buttons' id='ban-5'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('ban-6')" onmouseout="HideButtons('ban-6')">
                        <p class='request-id'>FirstName</p>
                        <p class='request-id'>LastName</p>
                        <p class='request-id'>Batch</p>
                        <div class='buttons' id='ban-6'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('ban-7')" onmouseout="HideButtons('ban-7')">
                        <p class='request-id'>FirstName</p>
                        <p class='request-id'>LastName</p>
                        <p class='request-id'>Batch</p>
                        <div class='buttons' id='ban-7'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- account requests -->
            <div class='card account-requests' id='requests-account'>
                <div class='title'>
                    Account Requests
                </div>
                <div class='filter'>
                    <div class='col1'>
                        <input class='input-field' type='text' placeholder='First Name' />
                        <input class='input-field' type='text' placeholder='Last Name' />
                        <select class='input-field'>
                            <option value='All'>All</option>
                            <option value='2018/2019'>2018/2019</option>
                            <option value='2018/2019'>2019/2020</option>
                            <option value='2018/2019'>2020/2021</option>
                        </select>
                    </div>
                    <div class='col2'>
                        <button class='filter-btn btn'>Filter</button>
                    </div>
                </div>
                <div class='results'>
                    <div class='result' onmouseover="DisplayButtons('acc-req-1')" onmouseout="HideButtons('acc-req-1')">
                        <p class='request-id'>RequestID 1</p>
                        <div class='buttons' id='acc-req-1'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('acc-req-2')" onmouseout="HideButtons('acc-req-2')">
                        <p class='request-id'>RequestID 2</p>
                        <div class='buttons' id='acc-req-2'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('acc-req-3')" onmouseout="HideButtons('acc-req-3')">
                        <p class='request-id'>RequestID 3</p>
                        <div class='buttons' id='acc-req-3'>
                            <button class='view-btn btn' id='acc-req-3'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('acc-req-4')" onmouseout="HideButtons('acc-req-4')">
                        <p class='request-id'>RequestID 4</p>
                        <div class='buttons' id='acc-req-4'>
                            <button class='view-btn btn' id='acc-req-4'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('acc-req-5')" onmouseout="HideButtons('acc-req-5')">
                        <p class='request-id'>RequestID 5</p>
                        <div class='buttons' id='acc-req-5'>
                            <button class='view-btn btn' id='acc-req-5'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('acc-req-6')" onmouseout="HideButtons('acc-req-6')">
                        <p class='request-id'>RequestID 6</p>
                        <div class='buttons' id='acc-req-6'>
                            <button class='view-btn btn' id='acc-req-6'>View</button>
                        </div>
                    </div>
                    <div class='result' onmouseover="DisplayButtons('acc-req-7')" onmouseout="HideButtons('acc-req-7')">
                        <p class='request-id'>RequestID 7</p>
                        <div class='buttons' id='acc-req-7'>
                            <button class='view-btn btn' id='acc-req-7'>View</button>
                        </div>
                    </div>
                </div>
            </div>
            



        </div>
    </div>

    <div class='details'>
        <div class='details-title'>
            Details
        </div>
        <div class='row-1'>
            <div class='container-1'>
                <div class='section-1'>
                    <img src='../assets/images/user-default.png' width='100%' class='user-pic' alt='user-pic' />
                    <div class='account-type'>
                        Account Type
                    </div>
                </div>
                <div class='section-2'>
                    <div class='subscription-type'>
                        Subscription Type
                    </div>
                    <div class='due-date'>
                        Due Date
                    </div>
                    <button class='recharge-report-btn btn'>
                        Recharge Report
                    </button>
                </div>
                <div class='section-3'>
                    <div class='sec-row-1'>
                        <button class='accept-btn btn'>Accept</button>
                        <button class='remove-btn btn'>Remove</button>
                    </div>
                    <div class='sec-row-2'>
                        <button class='ban-btn btn'>Ban</button>
                        <button class='unban-btn btn'>Unban</button>
                    </div>
                </div>
            </div>
            <div class='container-2'>
                <div class='full-name details-field'>Full Name</div>
                <div class='middle-section'>
                    <div class='mid-sec-row'>
                        <div class='first-name details-field'>First Name</div>
                        <div class='last-name details-field'>Last Name</div>
                    </div>
                    <div class='mid-sec-row'>
                        <div class='gender details-field'>Gender</div>
                        <div class='batch details-field'>Batch</div>
                    </div>
                    <div class='mid-sec-row'>
                        <div class='nic details-field'>NIC</div>
                        <div class='contact-number details-field'>Contact Number</div>
                    </div>
                </div>
                <div class='email details-field'>Email</div>
                <div class='address details-field'>Address</div>
            </div>
        </div>

        <!-- <div class='contribution-iframe-section'> -->
        <div class='iframe-nav-projectContribution'>
            <a href='./admin-accounts/admin-accounts-contributions.php' class='contribution-iframe-link fontColorChange' target='iframe-2' id='contributions' onclick="fontColorChanger()">Contributions</a>
            <a href='./admin-accounts/admin-accounts-involved-projects.php' class='contribution-iframe-link' target='iframe-2' id='involved-projects' onclick="fontColorChangerProjects()">Projects</a>
        </div>
        <iframe class='iframe-display-projectContribution' src='./admin-accounts/admin-accounts-contributions.php' name='iframe-2' height='100%' width='100%' title="Iframe">

        </iframe>
        <!-- </div> -->
    </div>
</div>

<?php include('../components/footer.php'); ?>