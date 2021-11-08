<link rel='stylesheet' href='../../../../assets/styles/not-started-yet-details-committee-members.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script src='../../../../js/not-started-yet-details-committee-members.js'></script>

<div class='committee-members'>
    <div class='section-1'>
        <a
            id='l-1'
            class='iframe-link clicked-link'
            href='./committee-members/committee.php'
            target='committee-members-iframe'
            onclick=ClickLink('l-1')
        >Committee</a>
        <a
            id='l-2'
            class='iframe-link'
            href='./committee-members/add-members.php'
            target='committee-members-iframe'
            onclick=ClickLink('l-2')
        >Add member</a>
    </div>
    <iframe
        class='section-2'
        src='./committee-members/committee.php'
        name='committee-members-iframe'
    ></iframe>
</div>