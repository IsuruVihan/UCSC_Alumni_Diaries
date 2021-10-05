<?php include('../components/header.php'); ?>

<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
          integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<link rel='stylesheet' href='../assets/styles/projects.css' />

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> / Projects
    </p>
    <p class='main-title'>
        <i class="fas fa-project-diagram"></i> Projects
    </p>
</div>
<div class='projects'>
    <a class='card-link' href='./our-projects.php'>
        <div class='card' id='accounts-card'>
            <p class='title'>
                All Projects
            </p>
            <div class='img-container'>
                <img src='../assets/gifs/our_projects.gif' alt='not-started-yet' width='100%' />
            </div>
            <div class='description' id='accounts-description'>
                <ul class='list'>
                    <li>All projects</li>
                    <li>Details</li>
                    <li>Donations</li>
                </ul>
            </div>
        </div>
    </a>
    <a class='card-link' href='./not-started-yet-projects.php'>
        <div class='card' id='accounts-card'>
            <p class='title'>
                Not Started Yet
            </p>
            <div class='img-container'>
                <img src='../assets/gifs/not_started_yet_project.gif' alt='not-started-yet' width='100%' />
            </div>
            <div class='description' id='accounts-description'>
                <ul class='list'>
                    <li>About to start</li>
                </ul>
            </div>
        </div>
    </a>
    <a class='card-link' href='./ongoing-projects.php'>
        <div class='card' id='reports-card'>
            <p class='title'>
                Ongoing
            </p>
            <div class='img-container'>
                <img src='../assets/gifs/ongoing_project.gif' alt='ongoing' width='100%' />
            </div>
            <div class='description' id='reports-description'>
                <ul class='list'>
                    <li>Currently in progress</li>
                </ul>
            </div>
        </div>
    </a>
    <a class='card-link' href='./closed-projects.php'>
        <div class='card' id='subscriptions-card'>
            <p class='title'>
                Closed
            </p>
            <div class='img-container'>
                <img src='../assets/gifs/closed_project.gif' alt='closed' width='100%' />
            </div>
            <div class='description' id='subscriptions-description'>
                <ul class='list'>
                    <li>Closed without completing</li>
                </ul>
            </div>
        </div>
    </a>
    <a class='card-link' href='./completed-projects.php'>
        <div class='card' id='spendings-card'>
            <p class='title'>
                Completed
            </p>
            <div class='img-container'>
                <img src='../assets/gifs/completed_project.gif' alt='completed' width='100%' />
            </div>
            <div class='description' id='spendings-description'>
                <ul class='list'>
                    <li>Successfully completed</li>
                </ul>
            </div>
        </div>
    </a>
</div>

<?php include('../components/footer.php'); ?>