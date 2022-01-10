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
                <!-- <div class='flexbox-item'>
                    <div class='rdetails'>
                        <div class='propic'>
                            <img class='img' src='../../assets/images/user-default.png' width='100%' height=''
                                 class='user-pic' alt='user-pic'/>
                        </div>
                        <div class='c-reporter'>
                            <div class='c-reporter-name'>
                                <div class='cfname'>
                                    <label class='alllabels'> Reporter Name </label>
                                    <div class='cfirst-name list-details'> First Name (Reporter)
                                    </div>
                                </div>
                                <div class='clname'>
                                    <div class='clast-name list-details'> Last Name (Reporter)
                                    </div>
                                </div>
                            </div> 
                            <div class='c-report-comment'>
                                <div class='cid'>
                                    <label class='alllabels'> Repoted Post ID </label>
                                    <div class='cpost-id list-details'> Reported Post ID
                                    </div>
                                </div>
                                <div class='cowner'>
                                    <label class='alllabels'> Post Owner </label>
                                    <div class='cpost-owner list-details'> Post Owner
                                    </div>
                                </div>
                            </div> 
                            <div class='commentdetails'>
                                <div class='rcid'>
                                    <label class='alllabels'> Reported Comment ID </label>
                                    <div class='cpost-id list-details'> Reported Comment ID
                                    </div>
                                </div>
                                <div class='rcowner'>
                                    <label class='alllabels'> Comment Owner </label>
                                    <div class='cpost-id list-details'> Comment Owner
                                    </div>
                                </div>
                            </div> 
                            <div class='rcause'>
                                <div class='report-cause'>
                                    <label class='alllabels'> Cause for Reporting </label>
                                    <div class='thee-cause list-details'> Cause for Reporting
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div> 
                    <div class='rdelete'>
                        <input type='reset' class='delete-btn' value='Delete'>
                    </div>
                </div>  -->
                
            </div> <!-- flexbox container -->
        </div> <!-- card reports -->
    </div> <!-- comment-reports -->
</div> <!-- main box -->