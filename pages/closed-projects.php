<?php include('../server/session.php'); ?>

<link rel='stylesheet' href='../assets/styles/closed_projects.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<script>
    $(document).ready(() => {
        $('#closed-projects-list').load("../server/projects/closed/render-list.php");
        $('#closed-projects-filter').submit((event) => {
            event.preventDefault();

            const Date1 = $('#closed-date1').val();
            const Date2 = $('#closed-date2').val();
            const Id = $('#closed-id').val();
            const Name = $('#closed-name').val();
            const My = $('#closed-my').is(":checked");

            $('#closed-projects-list').load("../server/projects/closed/filter.php", {
                Date1: Date1,
                Date2: Date2,
                Id: Id,
                Name: Name,
                My: My
            });
        });
    });

    const ViewAllProjectDetails = (id) => {
        $('#closed-project-details').load("../server/projects/closed/view-details.php", {
            ProjectId: id
        });
        $('#closed-project-committee-members').load("../server/projects/closed/view-committee-members.php", {
            ProjectId: id
        });
        $('#closed-project-expenditures').load("../server/projects/closed/view-expenditures.php", {
            ProjectId: id
        });
    }
</script>

    <div class='main-container'>
        <p class='breadcrumb'>
            <a href='home.php'>Home</a> /
            <a href='projects.php'>Projects</a> / Closed
        </p>
        <p class='main-title'>
            <i class="fas fa-check-circle"></i> Closed
        </p>
    </div>
    <div class='closed-projects'>
        <div class='card projects-list'>
            <div class='title'>
                Related Closed Projects
            </div>
            <form id='closed-projects-filter' class='filter'>
                <div class='col1'>
                    <input class='input-field date-field' type='date' id='closed-date1'/>
                    to
                    <input class='input-field date-field' type='date' id='closed-date2'/>
                </div>
                <div class='col1'>
                    <input class='input-field date-field' type='text' placeholder='Project Name'  id='closed-name'/>
                    <input class='input-field date-field' type='text' placeholder='Project Id'  id='closed-id'/>
                </div>
                <div class='col2'>
                    <label>My Projects</label>
                    <input class='input-field' type='checkbox' id='closed-my'/>
                </div>
                <div class='col4'>
                    <input type='submit' class='filter-btn btn' value='Filter'/>
                </div>
            </form>
            <div class='results' id='closed-projects-list'></div>
        </div>
        <div class='card project-details' id='closed-project-details'></div>
        <div class='card project-committee' id='closed-project-committee-members'></div>
        <div class='card expenditures' id='closed-project-expenditures'></div>
    </div>

    <script src='../js/closed-projects.js'></script>

<?php include('../components/footer.php'); ?>