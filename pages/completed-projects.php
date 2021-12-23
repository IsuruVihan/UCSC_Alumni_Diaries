<?php include('../server/session.php'); ?>

<link rel='stylesheet' href='../assets/styles/completed_projects.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<script>
    $(document).ready(() => {
        $('#completed-projects-list').load("../server/projects/completed/render-list.php");
        $('#completed-projects-filter').submit((event) => {
            event.preventDefault();

            const Date1 = $('#completed-date1').val();
            const Date2 = $('#completed-date2').val();
            const Id = $('#completed-id').val();
            const Name = $('#completed-name').val();
            const My = $('#completed-my').is(":checked");

            $('#completed-projects-list').load("../server/projects/completed/filter.php", {
                Date1: Date1,
                Date2: Date2,
                Id: Id,
                Name: Name,
                My: My
            });
        });
    });
</script>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='projects.php'>Projects</a> / Completed
    </p>
    <p class='main-title'>
        <i class="fas fa-check-circle"></i> Completed
    </p>
</div>
<div class='completed-projects'>
    <div class='card projects-list'>
        <div class='title'>
            Related Completed Projects
        </div>
        <form id='completed-projects-filter' class='filter'>
            <div class='col1'>
                <input class='input-field date-field' type='date' id='completed-date1'/>
                to
                <input class='input-field date-field' type='date' id='completed-date2'/>
            </div>
            <div class='col1'>
                <input class='input-field date-field' type='text' placeholder='Project Name'  id='completed-name'/>
                <input class='input-field date-field' type='text' placeholder='Project Id'  id='completed-id'/>
            </div>
            <div class='col2'>
                <label>My Projects</label>
                <input class='input-field' type='checkbox' id='completed-my'/>
            </div>
            <div class='col4'>
                <input type='submit' class='filter-btn btn' value='Filter'/>
            </div>
        </form>
        <div class='results' id='completed-projects-list'></div>
    </div>
    <div class='card project-details'>
        <div class='title project-name-div' id='project-name-div'>
            Project Name
        </div>
        <div class='project-status'>
            Started on
        </div>
        <div class='project-status'>
            Completed on
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

<script src='../js/completed-projects.js'></script>

<?php include('../components/footer.php'); ?>