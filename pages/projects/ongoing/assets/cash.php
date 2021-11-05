<link rel='stylesheet' href='../../../../assets/styles/ongoing-projects-assets-cash.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<div class='cash'>
    <div class='sec-1'>
        <a
            id='l-1'
            href='./cash/available.php'
            class='iframe-link left clicked-link'
            target='iframe-2'
            onclick=VisitLink('l-1')
        >Summary</a>
        <a
            id='l-2'
            href='./cash/spend.php'
            class='iframe-link'
            target='iframe-2'
            onclick=VisitLink('l-2')
        >Spend</a>
        <a
            id='l-3'
            href='./cash/spend-approvals.php'
            class='iframe-link'
            target='iframe-2'
            onclick=VisitLink('l-3')
        >Approvals</a>
        <a
            id='l-4'
            href='./cash/spent-records.php'
            class='iframe-link'
            target='iframe-2'
            onclick=VisitLink('l-4')
        >Spent Records</a>
    </div>
    <iframe
        name='iframe-2'
        class='sec-2'
        src='./cash/available.php'
    ></iframe>
</div>

<script src='../../../../js/ongoing-projects-assets-cash.js'></script>