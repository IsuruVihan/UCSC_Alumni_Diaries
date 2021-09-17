<link rel='stylesheet' href='../assets/styles/not_started_yet_projects.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script src='../js/not-started-yet-projects.js'></script>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='projects.php'>Projects</a> / Not Started Yet
    </p>
    <p class='main-title'>
        <i class='fas fa-pause-circle'></i> Not Started Yet
    </p>
</div>
<div class='not-started-yet-projects'>
    <div class='card projects-list'>
        <div class='title'>
            Related Projects
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
            <i class='fas fa-edit edit-btn' title='Edit project name' onclick='DisplayEditProjectNameDiv()'></i>
        </div>
        <div class='edit-project-name-div' id='edit-project-name-div'>
            <input type='text' placeholder='Enter new project name' value="Project Name"
                   class='new-project-name input-field' id='new-project-name'/>
            <button class='submit-new-project-name btn'>Edit</button>
            <button class='cancel-btn btn' onclick='HideEditProjectNameDiv()'>Cancel</button>
        </div>
        <div class='project-status'>
            Not Started Yet
        </div>
        <div class='project-description' id='project-description'>
            Project description comes here...
            <br/><br/>
            <i class='fas fa-edit edit-btn des-edit' title='Edit project description'
               onclick='DisplayEditProjectDescriptionDiv()'></i>
        </div>
        <div class='edit-project-description' id='edit-project-description'>
            <textarea class='new-project-description'></textarea>
            <div class='btn-set'>
                <button class='submit-new-project-description btn'>Edit</button>
                <button class='cancel-btn btn' onclick='HideEditProjectDescriptionDiv()'>Cancel</button>
            </div>
        </div>
        <div class='coord' onmouseover='DisplayEditCoordBtn()' onmouseout='HideEditCoordBtn()'>
            <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic' />
            <p class='coord-fname'>First Name</p>
            <p class='coord-lname'>Last Name</p>
            <i class='fas fa-edit edit-btn edit-coord-btn' id='edit-coord-btn' title='Change project coordinator'
               onclick='DisplayEditProjectDescriptionDiv()'></i>
        </div>
    </div>
    <div class='card project-committee'>
        <div class='title'>
            Committee Members
        </div>
    </div>
</div>

<?php include('../components/footer.php'); ?>