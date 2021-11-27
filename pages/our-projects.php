<?php include('../server/session.php'); ?>

<link rel='stylesheet' href='../assets/styles/our-projects.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>
<script>
    $(document).ready(() => {
        $('#projectList').load("../server/our-projects/render_list.php");
        $('#filter_projects').submit((event) =>{
            event.preventDefault();
            const start_date = $('#start_date').val();
            const end_date =$('#end_date').val();
            $('#projectList').load("../server/our-projects/filter.php",{
                Start_Date: start_date,
                End_Date: end_date
            });
        });
   
    });
    const ViewProjectDetails = (id) => {
        $('#ProjectDetails').load("../server/our-projects/project-details.php", {
            Id: id
        });
       
    }    
    

</script>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='projects.php'>Projects</a> / Our Projects
    </p>
    <p class='main-title'>
        <i class='fas fa-users'></i> Our Projects
    </p>
</div>
<div class='our-projects'>
    <div class='card container01'>
        <form class='filter' id='filter_projects'>
            <div class='col01'>
                <input class='input-field date-field' type='date' placeholder='Start Date' id='start_date'/>
                to
                <input class='input-field date-field' type='date' placeholder='End Date'  id='end_date'/>
            </div>
            <div class='col02'>
                <input type='submit' class='filter-btn btn' value='Filter'></input>
            </div>
        </form>
        <div class='scroll' id='projectList'>
            <!-- <div class='list' onmouseover="DisplayButtons('p-list-1')" onmouseout="HideButtons('p-list-1')">
                <p class='project-name'>Project Name</p>
                <p class='project-name'>Timestamp</p>
                <div class='buttons' id='p-list-1'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='list' onmouseover="DisplayButtons('p-list-2')" onmouseout="HideButtons('p-list-2')">
                <p class='project-name'>Project Name</p>
                <p class='project-name'>Timestamp</p>
                <div class='buttons' id='p-list-2'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='list' onmouseover="DisplayButtons('p-list-3')" onmouseout="HideButtons('p-list-3')">
                <p class='project-name'>Project Name</p>
                <p class='project-name'>Timestamp</p>
                <div class='buttons' id='p-list-3'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='list' onmouseover="DisplayButtons('p-list-4')" onmouseout="HideButtons('p-list-4')">
                <p class='project-name'>Project Name</p>
                <p class='project-name'>Timestamp</p>
                <div class='buttons' id='p-list-4'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='list' onmouseover="DisplayButtons('p-list-5')" onmouseout="HideButtons('p-list-5')">
                <p class='project-name'>Project Name</p>
                <p class='project-name'>Timestamp</p>
                <div class='buttons' id='p-list-5'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='list' onmouseover="DisplayButtons('p-list-6')" onmouseout="HideButtons('p-list-6')">
                <p class='project-name'>Project Name</p>
                <p class='project-name'>Timestamp</p>
                <div class='buttons' id='p-list-6'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='list' onmouseover="DisplayButtons('p-list-7')" onmouseout="HideButtons('p-list-7')">
                <p class='project-name'>Project Name</p>
                <p class='project-name'>Timestamp</p>
                <div class='buttons' id='p-list-7'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='list' onmouseover="DisplayButtons('p-list-8')" onmouseout="HideButtons('p-list-8')">
                <p class='project-name'>Project Name</p>
                <p class='project-name'>Timestamp</p>
                <div class='buttons' id='p-list-8'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='list' onmouseover="DisplayButtons('p-list-9')" onmouseout="HideButtons('p-list-9')">
                <p class='project-name'>Project Name</p>
                <p class='project-name'>Timestamp</p>
                <div class='buttons' id='p-list-9'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='list' onmouseover="DisplayButtons('p-list-10')" onmouseout="HideButtons('p-list-10')">
                <p class='project-name'>Project Name</p>
                <p class='project-name'>Timestamp</p>
                <div class='buttons' id='p-list-10'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='list' onmouseover="DisplayButtons('p-list-11')" onmouseout="HideButtons('p-list-11')">
                <p class='project-name'>Project Name</p>
                <p class='project-name'>Timestamp</p>
                <div class='buttons' id='p-list-11'>
                    <button class='view-btn btn'>View</button>
                </div> -->
            <!-- </div>
            <div class='list' onmouseover="DisplayButtons('p-list-12')" onmouseout="HideButtons('p-list-12')">
                <p class='project-name'>Project Name</p>
                <p class='project-name'>Timestamp</p>
                <div class='buttons' id='p-list-12'>
                    <button class='view-btn btn'>View</button>
                </div> -->
            <!-- </div> -->
        </div>
    </div>
    <div class='card container02'>
        <div class='sub-container' id='ProjectDetails'>
            <div class='section-01'>
                <div class='title'>
                    Project Name
                </div>
                <div class='filter-01'>
                    <div class='box-01'>
                        <div class='text'>
                            Start Date
                        </div>
                        <div class='text'>
                            Cordinator Name
                        </div>
                    </div>
                    <div class=box-02>
                        <div class='text'>
                            Cordinator email
                        </div>
                    </div>
                </div>
                <div class='project-description'>
                    Project Description Comes here....
                </div>
                <div class='scroll-02'>
                    <!-- <div class='list-01'>
                        <p class='project-name'>Member 01</p>
                    </div>
                    <div class='list-01'>
                        <p class='project-name'>Member 02</p>
                    </div>
                    <div class='list-01'>
                        <p class='project-name'>Member 03</p>
                    </div>
                    <div class='list-01'>
                        <p class='project-name'>Member 04</p>
                    </div>
                    <div class='list-01'>
                        <p class='project-name'>Member 05</p>
                    </div>
                    <div class='list-01'>
                        <p class='project-name'>Member 06</p>
                    </div>
                    <div class='list-01'>
                        <p class='project-name'>Member 07</p>
                    </div>
                    <div class='list-01'>
                        <p class='project-name'>Member 08</p>
                    </div>
                    <div class='list-01'>
                        <p class='project-name'>Member 09</p>
                    </div> -->
                </div>
            </div>
            <div class=' section-02'>
                <div class='container-01'>
                    <div class='title'>
                        Donate Cash
                    </div>
                    <div class='col-03'>
                        <input class='input-field text-field' type='text' placeholder='Donar Name'/>
                        <input class='input-field text-field' type='text' placeholder='Donar Email'/>
                        <input class='input-field text-field' type='text' placeholder='Amount'/>
                        <input class='input-field text-field' type='text' placeholder='Bank Slip Attachment'/>
                    </div>
                    <div class='col-04'>
                        <button class='submit-btn btn'>Submit</button>
                        <button class='cancel-btn btn'>Cancel</button>
                    </div>
                </div>
                <div class='container-02'>
                    <p class='project-name'>Donate via pay here</p>
                    <button class='pay-btn btn'>Pay here</button>  
                </div>
                <div class='container-03'>
                    <div class='title'>
                        Donate Items
                    </div>
                    <div class='col-03'>
                        <input class='input-field text-field' type='text' placeholder='Donar Name'/>
                        <input class='input-field text-field' type='text' placeholder='Donar Email'/>
                        <input class='input-field text-field' type='text' placeholder='Item'/>
                        <input class='input-field text-field' type='text' placeholder='Quantity'/>
                    </div>
                    <div class='col-04'>
                        <button class='submit-btn btn'>Submit</button>
                        <button class='cancel-btn btn'>Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src='../js/our-project.js'></script>
<?php include('../components/footer.php'); ?>