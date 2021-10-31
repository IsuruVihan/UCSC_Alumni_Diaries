<link rel='stylesheet' href='../../../assets/styles/not-started-yet-details.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script src='../../../js/not-started-yet-details.js'></script>

<div class='details'>
    <div class='section-3'>
        <div class='title'>
            Projects list
        </div>
        <div class='filter'>
            <div class='col1'>
                <input class='input-field date-field' type='text' placeholder='Project Name'/>
                <input class='input-field date-field' type='text' placeholder='Project Id'/>
            </div>
            <br/>
            <div class='col3'>
                <button class='filter-btn btn'>Filter</button>
            </div>
        </div>
        <div class='results'>
            <div class='result' onmouseover=DisplayButtons('p-list-1') onmouseout=HideButtons('p-list-1')>
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-1'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
        </div>
    </div>
    <div class='section-1'>
        <a
            id='l-1'
            class='iframe-link clicked-link'
            href='./details/general.php'
            target='details-iframe'
            onclick=ClickLink('l-1')
        >General</a>
        <a
            id='l-2'
            class='iframe-link'
            href='./details/committee-members.php'
            target='details-iframe'
            onclick=ClickLink('l-2')
        >Committee members</a>
        <a
            id='l-3'
            class='iframe-link'
            href='./details/coordinator.php'
            target='details-iframe'
            onclick=ClickLink('l-3')
        >Coordinator</a>
    </div>
    <iframe
        name='details-iframe'
        class='section-2'
        src='./details/general.php'
    ></iframe>
</div>