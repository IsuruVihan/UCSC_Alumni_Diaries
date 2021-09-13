<link rel='stylesheet' href='../assets/styles/admin-accounts.css' />
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css' integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

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
            <div class='result'>
                <p class='request-id'>RequestID 1</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>RequestID 2</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>RequestID 3</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>RequestID 4</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>RequestID 5</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>RequestID 6</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>RequestID 7</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
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
            <div class='result'>
                <p class='request-id'>RequestID 1</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>RequestID 2</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>RequestID 3</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>RequestID 4</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>RequestID 5</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>RequestID 6</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>RequestID 7</p>
                <div class='buttons'>
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
            <div class='result'>
                <p class='request-id'>FirstName</p>
                <p class='request-id'>LastName</p>
                <p class='request-id'>Batch</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>FirstName</p>
                <p class='request-id'>LastName</p>
                <p class='request-id'>Batch</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>FirstName</p>
                <p class='request-id'>LastName</p>
                <p class='request-id'>Batch</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>FirstName</p>
                <p class='request-id'>LastName</p>
                <p class='request-id'>Batch</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>FirstName</p>
                <p class='request-id'>LastName</p>
                <p class='request-id'>Batch</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>FirstName</p>
                <p class='request-id'>LastName</p>
                <p class='request-id'>Batch</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>FirstName</p>
                <p class='request-id'>LastName</p>
                <p class='request-id'>Batch</p>
                <div class='buttons'>
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
            <div class='result'>
                <p class='request-id'>FirstName</p>
                <p class='request-id'>LastName</p>
                <p class='request-id'>Batch</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>FirstName</p>
                <p class='request-id'>LastName</p>
                <p class='request-id'>Batch</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>FirstName</p>
                <p class='request-id'>LastName</p>
                <p class='request-id'>Batch</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>FirstName</p>
                <p class='request-id'>LastName</p>
                <p class='request-id'>Batch</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>FirstName</p>
                <p class='request-id'>LastName</p>
                <p class='request-id'>Batch</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>FirstName</p>
                <p class='request-id'>LastName</p>
                <p class='request-id'>Batch</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result'>
                <p class='request-id'>FirstName</p>
                <p class='request-id'>LastName</p>
                <p class='request-id'>Batch</p>
                <div class='buttons'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
        </div>
    </div>
    <div class='details'>

    </div>
</div>

<?php include('../components/footer.php'); ?>