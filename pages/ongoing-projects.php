<?php include('../server/session.php'); ?>

<link rel='stylesheet' href='../assets/styles/ongoing_projects.css' />
<link rel='stylesheet' href='../assets/styles/ongoing-projects-details.css' />
<link rel='stylesheet' href='../assets/styles/ongoing-projects-committee.css' />
<link rel='stylesheet' href='../assets/styles/ongoing-projects-chat.css' />
<link rel='stylesheet' href='../assets/styles/ongoing-projects-assets.css' />
<link rel='stylesheet' href='../assets/styles/ongoing-projects-actions.css' />
<link rel="stylesheet" href="../assets/styles/ongoing-projects-assets-cash.css">
<link rel='stylesheet' href='../assets/styles/ongoing-projects-assets-cash-available.css' />
<link rel='stylesheet' href='../assets/styles/ongoing-projects-assets-cash-spend.css' />
<link rel='stylesheet' href='../assets/styles/ongoing-projects-assets-cash-approvals.css' />
<link rel='stylesheet' href='../assets/styles/ongoing-projects-assets-cash-records.css' />
<link rel='stylesheet' href='../assets/styles/ongoing-projects-assets-items.css' />
<link rel='stylesheet' href='../assets/styles/ongoing-projects-assets-items-available.css' />
<link rel='stylesheet' href='../assets/styles/ongoing-projects-assets-items-spend.css' />
<link rel='stylesheet' href='../assets/styles/ongoing-projects-assets-items-approvals.css' />
<link rel='stylesheet' href='../assets/styles/ongoing-projects-assets-items-records.css' />
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<script>
    $(document).ready(() => {
        $('#ongoing-projects-list').load("../server/projects/ongoing/render-list.php");
        $('#ongoing-projects-filter').submit((event) => {
            event.preventDefault();
            
            const Date1 = $('#ongoing-date1').val();
            const Date2 = $('#ongoing-date2').val();
            const Id = $('#ongoing-id').val();
            const Name = $('#ongoing-name').val();
            const My = $('#ongoing-my').is(":checked");

            $('#ongoing-projects-list').load("../server/projects/ongoing/filter.php", {
                Date1: Date1,
                Date2: Date2,
                Id: Id,
                Name: Name,
                My: My
            });
        });
    });
    
    const ViewProjectDetails = (id) => {
        $('#ongoing-projects-view-details-section').load("../server/projects/ongoing/view-details.php", {
            Id: id
        });
    }
    
    const SendChatMessage = (data) => {
        const ProjectId = data.split(',')[0];
        const SenderEmail = data.split(',')[1];
        const Message = $('#text-message-body').val();
        
        $('#message-list').load("../server/projects/ongoing/send-message.php", {
            ProjectId: ProjectId,
            SenderEmail: SenderEmail,
            Message: Message
        });
    }
</script>

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
    <div class='section-1'>
        <div class='card projects-list'>
            <div class='title'>
                Projects List
            </div>
            <form id='ongoing-projects-filter' class='filter'>
                <div class='col1'>
                    <input class='input-field date-field' type='date' id='ongoing-date1'/>
                    to
                    <input class='input-field date-field' type='date' id='ongoing-date2'/>
                </div>
                <div class='col3'>
                    <input class='input-field date-field' type='text' placeholder='Project Name'  id='ongoing-name'/>
                    <input class='input-field date-field' type='text' placeholder='Project Id'  id='ongoing-id'/>
                </div>
                <div class='col2'>
                    <label>My Projects</label>
                    <input class='input-field' type='checkbox' id='ongoing-my'/>
                </div>
                <div class='col4'>
                    <input type='submit' class='filter-btn btn' value='Filter'/>
                </div>
            </form>
            <div class='results' id='ongoing-projects-list'></div>
        </div>
    </div>
    <div class='section-2' id='ongoing-projects-view-details-section'></div>
</div>

<script src='../js/ongoing-projects.js'></script>
<script src='../js/ongoing-projects-assets.js'></script>
<script src='../js/ongoing-projects-assets-items.js'></script>
<script src='../js/ongoing-projects-assets-cash.js'></script>

<?php include('../components/footer.php'); ?>