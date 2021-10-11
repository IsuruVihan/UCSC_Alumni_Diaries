<link rel='stylesheet' href='../assets/styles/admin-accounts.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script src='../js/admin-accounts.js'></script>

<?php include('../components/header.php'); ?>

<script>
    $(document).ready(() => {
        $('#member-account-requests').load("../server/admin-accounts/member-account-requests.php");
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
        // $('.acc-req-btn').click((event) => {
        //     console.log(event.target.id);
        // });
    });
    const ViewDetails = (id) => {
        $('#details-panel').load('../server/admin-accounts/member-account-request-details.php', {
            request_id: id
        });
    }
</script>

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
                        <option value='2018/2019'>2018/2019</option>
                        <option value='2018/2019'>2019/2020</option>
                        <option value='2019/2020'>2020/2021</option>
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
        </div>
    </div>
    <div class='card registered'>
        <div class='title'>
            Registered
        </div>
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
    <div class='card banned'>
        <div class='title'>
            Banned
        </div>
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
                    <button class='recharge-report-btn btn'>
                        Recharge Report
                    </button>
                </div>
                <div class='section-3'>
                    <div class='sec-row-1'>
                        <button class='accept-btn btn'>Accept</button>
                        <button class='remove-btn btn'>Reject</button>
                    </div>
                    <div class='sec-row-2'>
                        <button class='ban-btn btn'>Ban</button>
                        <button class='unban-btn btn'>Unban</button>
                    </div>
                </div>
            </div>
            <div class='container-2'>
                <div class='full-name details-field'></div>
                <div class='middle-section'>
                    <div class='mid-sec-row'>
                        <div class='first-name details-field'></div>
                        <div class='last-name details-field'></div>
                    </div>
                    <div class='mid-sec-row'>
                        <div class='gender details-field'></div>
                        <div class='batch details-field'></div>
                    </div>
                    <div class='mid-sec-row'>
                        <div class='nic details-field'></div>
                        <div class='contact-number details-field'></div>
                    </div>
                </div>
                <div class='email details-field'></div>
                <div class='address details-field'></div>
            </div>
        </div>
        <div class='row-2'>
            <div class='contributions'>
                <div class='contributions-title'>
                    Contributions
                </div>
                <div class='list'>
                    <div class='result'>
                        <div class='project-name'>
                            Project Name
                        </div>
                        <div class='amount'>
                            Amount
                        </div>
                    </div>
                </div>
            </div>
            <div class='involved-projects'>
                <div class='involved-projects-title'>
                    Involved Projects
                </div>
                <div class='list'>
                    <div class='result'>
                        <div class='project-name'>
                            Project Name
                        </div>
                        <div class='position'>
                            Position
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
</div>

<?php include('../components/footer.php'); ?>