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
        <div class='title'>
            Project Name
        </div>
        <div class='status detail-field'>
            Not Started Yet
        </div>
        <div class='description detail-field'>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In faucibus massa in velit interdum tincidunt. In
            non quam luctus, ultricies mi a, interdum enim. Nulla sed tellus quis lectus dictum ullamcorper. Suspendisse
            potenti. Aenean nec quam at nisl elementum feugiat sit amet quis ipsum. Orci varius natoque penatibus et
            magnis dis parturient montes, nascetur ridiculus mus. Aenean quis leo bibendum sem egestas elementum
            elementum maximus risus. Donec vitae est in metus placerat sollicitudin vel in quam. Donec rhoncus facilisis
            imperdiet. Donec finibus enim eu enim tempor, eget pulvinar urna hendrerit.

            Curabitur nec posuere urna, eget pulvinar velit. Phasellus dapibus nisl eget neque tincidunt dictum. Integer
            augue quam, porta vel tristique commodo, aliquam ultricies magna. Ut augue erat, maximus dignissim dapibus
            id, vestibulum sit amet elit. Suspendisse in velit eros. Praesent lorem elit, aliquam ac nunc at, vehicula
            interdum arcu. Integer venenatis suscipit tincidunt. Curabitur efficitur nec ipsum nec porta. Curabitur sed
            eros facilisis, efficitur libero quis, imperdiet sapien.
        </div>
        <div class='coordinator detail-field'>
            <img class='coord-image' src='../assets/images/user-default.png' alt='çoordinator' width='30%' />
            <p class='coord-first-name'>
                Coordinator's First Name
            </p>
            <p class='coord-last-name'>
                Coordinator's Last Name
            </p>
        </div>
    </div>
    <div class='card project-committee'>
        <div class='title'>
            Committee Members
        </div>
    </div>
</div>

<?php include('../components/footer.php'); ?>