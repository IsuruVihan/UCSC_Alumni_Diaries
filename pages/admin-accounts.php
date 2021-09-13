<link rel='stylesheet' href='../assets/styles/admin-accounts.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script src='../js/admin-accounts.js'></script>

<?php include('../components/header.php'); ?>

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
    <div class='details'>
        <div class='details-title'>
            Details
        </div>
        <div class='row-1'>
            <div class='container-1'>
                Container-1
            </div>
            <div class='container-2'>
                Container-2
            </div>
        </div>
        <div class='row-2'>
            <div class='contributions'>
                Contributions
            </div>
            <div class='involved-projects'>
                Involved Projects
            </div>
        </div>
    </div>
</div>

<?php include('../components/footer.php'); ?>