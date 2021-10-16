<link rel='stylesheet' href='../assets/styles/admin-accounts.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script src='../js/admin-accounts.js'></script>

<?php include('../components/header.php'); ?>

<script>
    $(document).ready(() => {
        $('#member-account-requests').load("../server/admin-accounts/member-account-requests.php");
        $('#member-account-rej-requests').load("../server/admin-accounts/member-account-rej-requests.php");
        $('#registered-members').load("../server/admin-accounts/registered-members.php");
        $('#banned-member-accounts').load("../server/admin-accounts/banned-member-accounts.php");
        $('#member-account-requests-filter').submit((event) => {
            event.preventDefault();
            const first_name = $('#mem-acc-req-filter-fname').val();
            const last_name = $('#mem-acc-req-filter-lname').val();
            const batch = $('#mem-acc-req-filter-batch').val();

            $('#member-account-requests').load("../server/admin-accounts/member-account-requests-filter.php", {
                first_name: first_name,
                last_name: last_name,
                batch: batch
            });
        });
        $('#member-account-rej-requests-filter').submit((event) => {
            event.preventDefault();
            const first_name = $('#mem-acc-rej-req-filter-fname').val();
            const last_name = $('#mem-acc-rej-req-filter-lname').val();
            const batch = $('#mem-acc-rej-req-filter-batch').val();

            $('#member-account-rej-requests').load("../server/admin-accounts/member-account-rej-requests-filter.php", {
                first_name: first_name,
                last_name: last_name,
                batch: batch
            });
        });
        $('#registered-members-filter').submit((event) => {
            event.preventDefault();
            const first_name = $('#reg-mem-filter-fname').val();
            const last_name = $('#reg-mem-filter-lname').val();
            const batch = $('#reg-mem-filter-batch').val();

            $('#registered-members').load("../server/admin-accounts/registered-members-filter.php", {
                first_name: first_name,
                last_name: last_name,
                batch: batch
            });
        });
        $('#banned-members-filter').submit((event) => {
            event.preventDefault();
            const first_name = $('#banned-mem-acc-fname').val();
            const last_name = $('#banned-mem-acc-lname').val();
            const batch = $('#banned-mem-acc-batch').val();

            $('#banned-member-accounts').load("../server/admin-accounts/banned-member-accounts-filter.php", {
                first_name: first_name,
                last_name: last_name,
                batch: batch
            });
        });
    });
    const ViewDetails = (id) => {
        $('#details-panel').load('../server/admin-accounts/member-account-request-details.php', {
            request_id: id
        });
    }
    const ViewRejectedRequestDetails = (id) => {
        $('#details-panel').load('../server/admin-accounts/member-account-rej-request-details.php', {
            request_id: id
        });
    }
    const ViewRegisteredMemberDetails = (email) => {
        $('#details-panel').load('../server/admin-accounts/registered-member-details.php', {
            member_email: email
        });
    }
    const ViewBannedMemberDetails = (email) => {
        $('#details-panel').load('../server/admin-accounts/banned-member-details.php', {
            member_email: email
        });
    }
    const AcceptRequest = (id) => {
        $('#flash-message').load('../server/admin-accounts/member-account-request-accept.php', {
            request_id: id
        });
    }
    const RejectRequest = (id) => {
        $('#flash-message').load('../server/admin-accounts/member-account-request-reject.php', {
            request_id: id
        });
    }
    const DeleteRequest = (id) => {
        $('#flash-message').load('../server/admin-accounts/member-account-request-delete.php', {
            request_id: id
        });
    }
    const RemoveMemberAccount = (email) => {
        $('#flash-message').load('../server/admin-accounts/registered-member-delete.php', {
            member_email: email
        });
    }
    const BanMemberAccount = (email) => {
        $('#flash-message').load('../server/admin-accounts/registered-member-ban.php', {
            member_email: email
        });
    }
    const UnbanMemberAccount = (email) => {
        $('#flash-message').load('../server/admin-accounts/registered-member-unban.php', {
            member_email: email
        });
    }
</script>

<div id='flash-message' class='flash-message'></div>
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
    <div class='card account-requests'>
        <div class='title'>
            Account Requests
        </div>
        <div class='filter'>
            <form id='member-account-requests-filter' class='filter-form'>
                <div class='col1'>
                    <input id='mem-acc-req-filter-fname' class='input-field' type='text' placeholder='First Name'/>
                    <input id='mem-acc-req-filter-lname' class='input-field' type='text' placeholder='Last Name'/>
                    <select id='mem-acc-req-filter-batch' class='input-field'>
                        <option value='All'>All</option>
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
                <div class='col2'>
                    <input type='submit' value='Filter' class='filter-btn btn'>
                </div>
            </form>
        </div>
        <div class='results' id='member-account-requests'>
<!--            <div class='result' onmouseover="DisplayButtons('acc-req-8')" onmouseout="HideButtons('acc-req-8')">-->
<!--                <p class='request-id'>RequestID 8</p>-->
<!--                <div class='buttons' id='acc-req-8'>-->
<!--                    <button class='acc-req-btn view-btn btn' id='8'>View</button>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
    <div class='card rejected-requests'>
        <div class='title'>
            Rejected Requests
        </div>
        <div class='filter'>
            <form id='member-account-rej-requests-filter' class='filter-form'>
                <div class='col1'>
                    <input id='mem-acc-rej-req-filter-fname' class='input-field' type='text' placeholder='First Name'/>
                    <input id='mem-acc-rej-req-filter-lname' class='input-field' type='text' placeholder='Last Name'/>
                    <select id='mem-acc-rej-req-filter-batch' class='input-field'>
                        <option value='All'>All</option>
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
                <div class='col2'>
                    <input type='submit' value='Filter' class='filter-btn btn'>
                </div>
            </form>
        </div>
        <div class='results' id='member-account-rej-requests'>
            <!--
            <div class='result' onmouseover="DisplayButtons('rej-req-1')" onmouseout="HideButtons('rej-req-1')">
                <p class='request-id'>RequestID 1</p>
                <div class='buttons' id='rej-req-1'>
                    <button class='view-btn btn'>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
            -->
        </div>
    </div>
    <div class='card registered'>
        <div class='title'>
            Registered
        </div>
        <div class='filter'>
            <form id='registered-members-filter' class='filter-form'>
                <div class='col1'>
                    <input id='reg-mem-filter-fname' class='input-field' type='text' placeholder='First Name'/>
                    <input id='reg-mem-filter-lname' class='input-field' type='text' placeholder='Last Name'/>
                    <select id='reg-mem-filter-batch' class='input-field'>
                        <option value='All'>All</option>
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
                <div class='col2'>
                    <button class='filter-btn btn'>Filter</button>
                </div>
            </form>
        </div>
        <div id='registered-members' class='results'>
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
    <div class='card banned'>
        <div class='title'>
            Banned
        </div>
        <div class='filter'>
            <form id='banned-members-filter' class='filter-form'>
                <div class='col1'>
                    <input id='banned-mem-acc-fname' class='input-field' type='text' placeholder='First Name'/>
                    <input id='banned-mem-acc-lname' class='input-field' type='text' placeholder='Last Name'/>
                    <select id='banned-mem-acc-batch' class='input-field'>
                        <option value='All'>All</option>
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
                <div class='col2'>
                    <button class='filter-btn btn'>Filter</button>
                </div>
            </form>
        </div>
        <div id='banned-member-accounts' class='results'>
            <!--
            <div class='result' onmouseover="DisplayButtons('ban-1')" onmouseout="HideButtons('ban-1')">
                <p class='request-id'>FirstName</p>
                <p class='request-id'>LastName</p>
                <p class='request-id'>Batch</p>
                <div class='buttons' id='ban-1'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            -->
        </div>
    </div>
    <div id='details-panel' class='details'>
        <div class='details-title'>
            Details
        </div>
        <div class='row-1'>
            <div class='container-1'>
                <div class='section-1'>
                    <img src='../assets/images/user-default.png' width='100%' class='user-pic' alt='user-pic'/>
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
<!--                    <button class='recharge-report-btn btn'>-->
<!--                        Recharge Report-->
<!--                    </button>-->
                </div>
<!--                <div class='section-3'>-->
<!--                    <div class='sec-row-1'>-->
<!--                        <button class='accept-btn btn'>Accept</button>-->
<!--                        <button class='remove-btn btn'>Reject</button>-->
<!--                    </div>-->
<!--                    <div class='sec-row-2'>-->
<!--                        <button class='ban-btn btn'>Ban</button>-->
<!--                        <button class='unban-btn btn'>Unban</button>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
            <div class='container-2'>
                <div class='full-name details-field'>Name with Initials</div>
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
                <div class='address details-field'>Living Address</div>
            </div>
        </div>
        <div class='row-2'>
            <div class='contributions'>
                <div class='contributions-title'>
                    Contributions
                </div>
                <div class='list'>
<!--                    <div class='result'>-->
<!--                        <div class='project-name'>-->
<!--                            Project Name-->
<!--                        </div>-->
<!--                        <div class='amount'>-->
<!--                            Amount-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
            <div class='involved-projects'>
                <div class='involved-projects-title'>
                    Involved Projects
                </div>
                <div class='list'>
<!--                    <div class='result'>-->
<!--                        <div class='project-name'>-->
<!--                            Project Name-->
<!--                        </div>-->
<!--                        <div class='position'>-->
<!--                            Position-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../components/footer.php'); ?>