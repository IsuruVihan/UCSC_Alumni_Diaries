<link rel='stylesheet' href='../assets/styles/ongoing_projects.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script src='../js/ongoing-projects.js'></script>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='projects.php'>Projects</a> / Ongoing
    </p>
    <p class='main-title'>
        <i class="fas fa-play-circle"></i> Ongoing
    </p>
</div>
<div class='ongoing-projects'>
    <div class='card projects-list'>
        <div class='title'>
            Related Ongoing Projects
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
    <div class='project-details'>
        Project Details
    </div>
    <div class='committee-members'>
        Committee Members
    </div>
    <div class='cash'>
        Cash
    </div>
    <div class='items'>
        Items
    </div>
    <div class='cash-spent'>
        Cash Spent
    </div>
    <div class='items-spent'>
        Items Spent
    </div>
    <div class='committee-chat'>
        Committee Chat
    </div>
</div>

<?php include('../components/footer.php'); ?>