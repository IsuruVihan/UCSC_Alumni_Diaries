<?php include('../server/session.php'); ?>

<?php include('../components/privileges/member.php'); ?>

<link rel='stylesheet' href='../assets/styles/closed_projects.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='projects.php'>Projects</a> / Closed
    </p>
    <p class='main-title'>
        <i class="fas fa-times-circle"></i> Closed
    </p>
</div>
<div class='closed-projects'>
    <div class='card projects-list'>
        <div class='title'>
            Related Closed Projects
        </div>
        <div class='filter'>
            <div class='col1'>
                <input class='input-field date-field' type='date' placeholder='First Name'/>
                to
                <input class='input-field date-field' type='date' placeholder='Last Name'/>
            </div>
            <div class='col2'>
                <label>My Projects</label>
                <input class='input-field' type='checkbox'>
            </div>
            <div class='col3'>
                <button class='filter-btn btn'>Filter</button>
            </div>
        </div>
        <div class='results'>
            <div class='result' onmouseover="DisplayButtons('p-list-1')" onmouseout="HideButtons('p-list-1')">
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-1'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('p-list-2')" onmouseout="HideButtons('p-list-2')">
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-2'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('p-list-3')" onmouseout="HideButtons('p-list-3')">
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-3'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('p-list-4')" onmouseout="HideButtons('p-list-4')">
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-4'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('p-list-5')" onmouseout="HideButtons('p-list-5')">
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-5'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('p-list-6')" onmouseout="HideButtons('p-list-6')">
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-6'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('p-list-7')" onmouseout="HideButtons('p-list-7')">
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-7'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('p-list-8')" onmouseout="HideButtons('p-list-8')">
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-8'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
        </div>
    </div>
    <div class='card project-details'>
        <div class='title project-name-div' id='project-name-div'>
            Project Name
        </div>
        <div class='project-status'>
            Started on
        </div>
        <div class='project-status'>
            Closed on
        </div>
        <div class='project-description' id='project-description'>
            Project description comes here...
        </div>
        <div class='coord'>
            <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
            <p class='coord-fname'>First Name</p>
            <p class='coord-lname'>Last Name</p>
        </div>
    </div>
    <div class='card project-committee' id='committee-members'>
        <div class='title'>
            Committee Members
        </div>
        <div class='results'>
            <div class='result'>
                <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
                <div class='fname'>First Name</div>
                <div class='lname'>Last Name</div>
            </div>
            <div class='result'>
                <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
                <div class='fname'>First Name</div>
                <div class='lname'>Last Name</div>
            </div>
            <div class='result'>
                <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
                <div class='fname'>First Name</div>
                <div class='lname'>Last Name</div>
            </div>
            <div class='result'>
                <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
                <div class='fname'>First Name</div>
                <div class='lname'>Last Name</div>
            </div>
            <div class='result'>
                <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
                <div class='fname'>First Name</div>
                <div class='lname'>Last Name</div>
            </div>
        </div>
    </div>
    <div class='card expenditures'>
        <div class='title'>
            Expenditures
        </div>
        <div class='gen-report-div'>
            <button class='btn gen-rep-btn'>Expenditure Report</button>
        </div>
    </div>
</div>

<script src='../js/closed-projects.js'></script>

<?php include('../components/footer.php'); ?>