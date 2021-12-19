<?php include('../server/session.php'); ?>

<?php include('../components/header.php'); ?>

<link rel="stylesheet" href="../assets/styles/admin-accounts-1.css">
<link rel='stylesheet' href='../assets/styles/admin-account-iframe.css'>
<link rel='stylesheet' href='../assets/styles/signup-iframe.css'>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
          integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script src='../js/admin-accounts.js'></script>

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

            $('#signup-message').load("../server/admin/accounts/create/register-member.php", {
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
        
        $('#rejected-member-account-requests').load("../server/admin/accounts/rejected/render-list.php");
        $('#mem-rej-req-filter').submit((event) => {
            event.preventDefault();
            const firstName = $('#mem-rej-req-fname').val();
            const lastName = $('#mem-rej-req-lname').val();
            const batch = $('#mem-rej-req-batch').val();
            $('#rejected-member-account-requests').load("../server/admin/accounts/rejected/filter.php", {
                FirstName: firstName,
                LastName: lastName,
                Batch: batch
            });
        });
        
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
        
        $('#registered-members').load("../server/admin/accounts/registered/render-list.php");
        $('#reg-mem-filter').submit((event) => {
            event.preventDefault();
            const firstName = $('#rej-mem-fname').val();
            const lastName = $('#rej-mem-lname').val();
            const batch = $('#rej-mem-batch').val();
            $('#registered-members').load("../server/admin/accounts/registered/filter.php", {
                FirstName: firstName,
                LastName: lastName,
                Batch: batch
            });
        });

        $('#banned-member-accounts').load("../server/admin/accounts/banned/render-list.php");
        $('#ban-mem-filter').submit((event) => {
            event.preventDefault();
            const firstName = $('#ban-mem-fname').val();
            const lastName = $('#ban-mem-lname').val();
            const batch = $('#ban-mem-batch').val();
            $('#banned-member-accounts').load("../server/admin/accounts/banned/filter.php", {
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
    const ViewRejectedAccountRequestDetails = (id) => {
        $('#result-details').load("../server/admin/accounts/rejected/view-details.php", {
            Id: id
        });
    }
    const DeleteRejectAccountRequest = (id) => {
        $('#message-container').load("../server/admin/accounts/rejected/delete-request.php", {
            Id: id
        });
    }
    const AcceptRejectAccountRequest = (id) => {
        $('#message-container').load("../server/admin/accounts/rejected/accept-request.php", {
            Id: id
        });
    }
    const ViewRegisteredMemberDetails = (email) => {
        $('#result-details').load("../server/admin/accounts/registered/view-details.php", {
            Email: email
        });
    }
    const BanMemberAccount = (email) => {
        $('#message-container').load("../server/admin/accounts/registered/ban-account.php", {
            Email: email
        });
    }
    const UnbanMemberAccount = (email) => {
        $('#message-container').load("../server/admin/accounts/registered/unban-account.php", {
            Email: email
        });
    }
    const RemoveMemberAccount = (email) => {
        $('#message-container').load("../server/admin/accounts/registered/remove-account.php", {
            Email: email
        });
    }
    const ViewBannedAccountDetails = (email) => {
        $('#result-details').load("../server/admin/accounts/banned/view-details.php", {
            Email: email
        });
    }
    const RemoveBannedAccount = (email) => {
        $('#message-container').load("../server/admin/accounts/banned/remove-account.php", {
            Email: email
        });
    }
    const UnbanBannedAccount = (email) => {
        $('#message-container').load("../server/admin/accounts/banned/unban-account.php", {
            Email: email
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
                    <form name='signup-form' id='signup-form'>
                        <div class='register-input_box'>
                            <span class='register-details'>Name with Initials</span>
                            <input id='signup-init' type='text'>
                        </div>
                        <div class='register-user_details'>
                            <div class='register-input_box'>
                                <span class='register-details'>First Name</span>
                                <input id='signup-fname' type='text'>
                            </div>
                            <div class='register-input_box'>
                                <span class='register-details'>Last Name</span>
                                <input id='signup-lname' type='text'>
                            </div>
                            <div class='register-input_box'>
                                <span class='register-details'> NIC</span>
                                <input id='signup-nic' type='text'>
                            </div>
                            <div class='register-input_box'>
                                <span class='register-details'>Email</span>
                                <input id='signup-email' type='text'>
                            </div>
                            <div class='register-input_box'>
                                <span class='register-details'>Index Number</span>
                                <input id='signup-index' type='text'>
                            </div>
                            <div class='register-input_box'>
                                <span class='register-details'>Contact Number</span>
                                <input id='signup-contact' type='text'>
                            </div>
                        </div>
                        <div class='register-user_details01'>
                            <div class='register-input_box'>
                                <span class='register-details'>Gender</span>
                                <select id='signup-gender' class='register-Gender'>
                                    <option value='Male'>Male</option>
                                    <option value='Female'>Female</option>
                                </select>
                            </div>
                            <div class='register-input_box'>
                                <span class='register-details'>Batch</span>
                                <select id='signup-batch' class='register-Batch'>
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
                        <div class='register-input_box'>
                            <span class='register-details'>Address</span>
                            <input id='signup-address' type='text'>
                        </div>
                        <p id='signup-message' class='signup-message'></p>
                        <div class='register-buttons'>
                            <input id='signup-submit' name='submit' type='submit' value='Sign Up' class='register-btn'>
                            <input id='signup-cancel' type='button' value='Cancel' class='register-btn_cancel'/>
                        </div>
                    </form>
                </div>
            </div>
            <!--account registered section-->
            <div class='card registered' id='registered-account'>
                <div class='title'>Registered</div>
                <form class='filter' id='reg-mem-filter'>
                    <div class='col1'>
                        <input class='input-field' type='text' placeholder='First Name' id='rej-mem-fname'/>
                        <input class='input-field' type='text' placeholder='Last Name' id='rej-mem-lname'/>
                        <select class='input-field' id='rej-mem-batch'>
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
                <div class='results' id='registered-members'>
                    <!--
                    <div class='result' onmouseover="DisplayButtons('reg-1')" onmouseout="HideButtons('reg-1')">
                        <p class='request-id'>FirstName</p>
                        <p class='request-id'>LastName</p>
                        <p class='request-id'>Batch</p>
                        <div class='buttons' id='reg-1'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                    -->
                </div>
            </div>
            <!-- rejected accounts -->
            <div class='card rejected-requests' id='rejected-request'>
                <div class='title'>Rejected Requests</div>
                <form id='mem-rej-req-filter' class='filter'>
                    <div class='col1'>
                        <input id='mem-rej-req-fname' class='input-field' type='text' placeholder='First Name'/>
                        <input id='mem-rej-req-lname' class='input-field' type='text' placeholder='Last Name'/>
                        <select id='mem-rej-req-batch' class='input-field'>
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
                <div class='results' id='rejected-member-account-requests'>
                    <!--
                    <div class='result' onmouseover=DisplayButtons('rej-req-1') onmouseout=HideButtons('rej-req-1')>
                        <p class='request-id'>RequestID 1</p>
                        <div class='buttons' id='rej-req-1'>
                            <button class='view-btn btn'>View</button>
                            <button class='delete-btn btn'>Delete</button>
                        </div>
                    </div>
                    -->
                </div>
            </div>
            <!-- banned accounts -->
            <div class='card banned' id='banned-account'>
                <div class='title'>Banned</div>
                <form id='ban-mem-filter' class='filter'>
                    <div class='col1'>
                        <input id='ban-mem-fname' class='input-field' type='text' placeholder='First Name'/>
                        <input id='ban-mem-lname' class='input-field' type='text' placeholder='Last Name'/>
                        <select id='ban-mem-batch' class='input-field'>
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
                <div class='results' id='banned-member-accounts'>
                    <!--
                    <div class='result' onmouseover="DisplayButtons('ban-7')" onmouseout="HideButtons('ban-7')">
                        <p class='request-id'>FirstName</p>
                        <p class='request-id'>LastName</p>
                        <p class='request-id'>Batch</p>
                        <div class='buttons' id='ban-7'>
                            <button class='view-btn btn'>View</button>
                        </div>
                    </div>
                    -->
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