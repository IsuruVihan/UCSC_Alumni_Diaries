<?php include('../server/session.php'); ?>

<?php
    if (!isset($_SESSION['Email'])) {
        header('Location: home.php');
    }
?>

<?php include('../components/header.php'); ?>

<link rel='stylesheet' href='../assets/styles/completed_projects.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

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
    
    const ViewAllProjectDetails = (id) => {
        $('#completed-project-details').load("../server/projects/completed/view-details.php", {
            ProjectId: id
        });
        $('#completed-project-committee-members').load("../server/projects/completed/view-committee-members.php", {
            ProjectId: id
        });
        $('#completed-project-expenditures').load("../server/projects/completed/view-expenditures.php", {
            ProjectId: id
        });
    }

    const GenRep = (ProjectId) => {
        const url = "http://localhost/UCSC_Alumni_Diaries/server/generate-reports/projects/completed/expenditures.php?projectid=" + ProjectId;
        window.location.replace(url);
    }
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
    <div class='card project-details' id='completed-project-details'></div>
    <div class='card project-committee' id='completed-project-committee-members'></div>
    <div class='card expenditures' id='completed-project-expenditures'></div>
</div>

<script src='../js/completed-projects.js'></script>

<?php include('../components/footer.php'); ?>