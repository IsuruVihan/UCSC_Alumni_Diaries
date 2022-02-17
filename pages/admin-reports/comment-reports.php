<link rel='stylesheet' href='../../assets/styles/comment-reports.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>

<script>
      $(document).ready(() => {
            $('#crepo').load("../../server/Report_Actions/comment_reports.php");     
      });
      
</script>  

<script>
      const DeleteReportComment = (id) => {
        $('#flash-message').load("../../server/Report_Actions/delete_comment_reports.php", {
            id: id
        });
        setTimeout(() => window.history.go(), 1);
    }
</script>

<div id='flash-message' class='flash-message'></div>
<div class='main-box'>
    <div class='commentreports'>
        <div class='card reports'>
            <div class='title'>
                Comment Reports
            </div> 
            <div class='flexbox-container' id='crepo'>
            </div>
        </div>
    </div>
</div>