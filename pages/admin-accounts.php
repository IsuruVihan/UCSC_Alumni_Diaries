<?php include('../components/header.php'); ?>

<link rel="stylesheet" href="../assets/styles/admin-accounts-1.css">
<link rel='stylesheet' href='../assets/styles/admin-account-iframe.css'>
<link rel='stylesheet' href='../assets/styles/signup-iframe.css'>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
          integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script src='../js/admin-accounts.js'></script>

<script>
    $(document).ready(() => {
        $('#member-account-requests').load("../server/admin/accounts/requests/render-list.php");
        $('#mem-acc-req-filter').submit((event) => {
            event.preventDefault();
            const firstName = $('#mem-acc-req-fname').val();
            const lastName = $('#mem-acc-req-lname').val();
            const batch = $('#mem-acc-req-batch').val();
            $('#member-account-requests').load("../server/admin/accounts/requests/filter.php", {
                FirstName: firstName,
                LastName: lastName,
                Batch: batch
            });
        });
    });
    const ViewMemberAccountRequestDetails = (id) => {
        $('#result-details').load("../server/admin/accounts/requests/view-details.php", {
            Id: id
        });
    }
    const AcceptMemberAccountRequest = (id) => {
        $('#message-container').load("../server/admin/accounts/requests/accept-request.php", {
            Id: id
        });
    }
    const RejectMemberAccountRequest = (id) => {
        $('#message-container').load("../server/admin/accounts/requests/reject-request.php", {
            Id: id
        });
    }
</script>

<div id='message-container'>
<!--    <div class='error-message'>-->
<!--        Hello World-->
<!--    </div>-->
<!--    <div class='success-message'>-->
<!--        Hello World-->
<!--    </div>-->
</div>
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
            <a
                class='iframe-nav-link'
                id='account-signup'
                onclick="onClickState('account-signup'); onClickPageShow('account-signup')"
            >Add Member</a>
            <a
                class='iframe-nav-link iframe-nav-state'
                id='account-request'
                onclick="onClickState('account-request'); onClickPageShow('account-request')"
            >Requests</a>
            <a
                class='iframe-nav-link'
                id='account-rejected'
                target='iframe'
                onclick="onClickState('account-rejected'); onClickPageShow('account-rejected')"
            >Rejected</a>
            <a
                class='iframe-nav-link'
                id='account-registered'
                target='iframe'
                onclick="onClickState('account-registered'); onClickPageShow('account-registered')"
            >Registered</a>
            <a
                class='iframe-nav-link'
                id='account-banned'
                target='iframe'
                onclick="onClickState('account-banned'); onClickPageShow('account-banned')"
            >Banned</a>
        </div>
        <div class='iframe-display'>
            <!-- Register form -->
            <div class='register-conatiner01' id='account-register'>
                <div class='register-container'>
                    <div class='register-title'>Register Members</div>
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
                            <input type='reset' value='Cancel' class='register-btn_cancel'/>
                        </div>
                    </form>
                </div>
            </div>
            <!--account registered section-->
            <div class='card registered' id='registered-account'>
                <div class='title'>Registered</div>
                <div class='filter'>
                    <div class='col1'>
                        <input class='input-field' type='text' placeholder='First Name'/>
                        <input class='input-field' type='text' placeholder='Last Name'/>
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
                </div>
            </div>
            <!-- rejected accounts -->
            <div class='card rejected-requests' id='rejected-request'>
                <div class='title'>Rejected Requests</div>
                <div class='filter'>
                    <div class='col1'>
                        <input class='input-field' type='text' placeholder='First Name'/>
                        <input class='input-field' type='text' placeholder='Last Name'/>
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
                    <div class='result' onmouseover=DisplayButtons('rej-req-1') onmouseout=HideButtons('rej-req-1')>
                        <p class='request-id'>RequestID 1</p>
                        <div class='buttons' id='rej-req-1'>
                            <button class='view-btn btn'>View</button>
                            <button class='delete-btn btn'>Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banned accounts -->
            <div class='card banned' id='banned-account'>
                <div class='title'>Banned</div>
                <div class='filter'>
                    <div class='col1'>
                        <input class='input-field' type='text' placeholder='First Name'/>
                        <input class='input-field' type='text' placeholder='Last Name'/>
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
                <div class='title'>Account Requests</div>
                <form id='mem-acc-req-filter' class='filter'>
                    <div class='col1'>
                        <input id='mem-acc-req-fname' class='input-field' type='text' placeholder='First Name'/>
                        <input id='mem-acc-req-lname' class='input-field' type='text' placeholder='Last Name'/>
                        <select id='mem-acc-req-batch' class='input-field'>
                            <option value='All'>All</option>
                            <option value='2018/2019'>2018/2019</option>
                            <option value='2018/2019'>2019/2020</option>
                            <option value='2018/2019'>2020/2021</option>
                        </select>
                    </div>
                    <div class='col2'>
                        <input type='submit' class='filter-btn btn' value='Filter'/>
                    </div>
                </form>
                <div class='results' id='member-account-requests'>
                    <!--
                    <div class='result' onmouseover=DisplayButtons('acc-req-7') onmouseout=HideButtons('acc-req-7')>
                        <p class='request-id'>RequestID 7</p>
                        <div class='buttons' id='acc-req-7'>
                            <button class='view-btn btn' id='acc-req-7'>View</button>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
    <div class='details' id='result-details'>
        <!--
        <div class='details-title'>Details</div>
        <div class='row-1'>
            <div class='container-1'>
                <div class='section-1'>
                    <img src='../assets/images/user-default.png' width='100%' class='user-pic' alt='user-pic'/>
                    <div class='account-type'>Account Type</div>
                </div>
                <div class='section-2'>
                    <div class='subscription-type'>Subscription Type</div>
                    <div class='due-date'>Due Date</div>
                    <button class='recharge-report-btn btn'>Recharge Report</button>
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
        <div class='iframe-nav-projectContribution'>
            <div class='contribution-iframe-link fontColorChange' target='iframe-2' id='contributions'
                     onclick="fontColorChanger()">
                Contributions
            </div>
            <div class='contribution-iframe-link' target='iframe-2' id='involved-projects'
                     onclick="fontColorChangerProjects()">
                Projects
            </div>
        </div>
        <div class='iframe-display-projectContribution'>
            <div class='contributions' id='member-contribution'>
                <div class='list'>
                    <div class='result'>
                        <div class='project-name'>Project Name</div>
                        <div class='amount'>Amount</div>
                    </div>
                </div>
            </div>
            <div class='involved-projects' id='member-involved-projects'>
                <div class='list'>
                    <div class='result'>
                        <div class='project-name'>Project Name</div>
                        <div class='position'>Position</div>
                    </div>
                </div>
            </div>
        </div>
        -->
    </div>
</div>

<?php include('../components/footer.php'); ?>