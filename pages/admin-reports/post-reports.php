<link rel='stylesheet' href='../../assets/styles/post-reports.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>

<script>
      $(document).ready(() => {
            $('#repo').load("../../server/Report_Actions/post_reports.php");     
      });
      
</script>

<script>
      const DeleteReport = (id) => {
        $('#flash-message').load("../../server/Report_Actions/delete_post_reports.php", {
            id: id
        });
        setTimeout(() => window.history.go(), 1);
    }
</script>

<div id='flash-message' class='flash-message'></div>
<div class='main-box'>
      <div class='post-reports'>
            <div class='card reports'>
                  <div class='title'>
                        Post Reports
                  </div> 
                  <div class='flexbox-container' id='repo'>
                        <!-- <div class='flexbox-item'>
                              <div class='rdetails'>
                                    <div class='propic'>
                                          <img class='img' src='../../assets/images/user-default.png' width='100%' height=''
                                               class='user-pic' alt='user-pic'/>
                                    </div> 
                                    <div class='reporter'>
                                          <div class='reporter-name'>
                                                <div class='fname'>
                                                      <label class='alllabels'> Reporter Name </label>
                                                      <div class='first-name list-details'> First Name (Reporter)
                                                      </div>
                                                </div>
                                                <div class='lname'>
                                                      <label class='alllabels'> </label>
                                                      <div class='last-name list-details'> Last Name (Reporter)
                                                      </div>
                                                </div>
                                          </div>
                                          <div class='report-post'>
                                                <div class='id'>
                                                      <label class='alllabels'> Reported Post ID </label>
                                                      <div class='post-id list-details'> Reported Post ID
                                                      </div>
                                                </div>
                                                <div class='owner'>
                                                      <label class='alllabels'> Post Owner </label>
                                                      <div class='post-owner list-details'> Post Owner
                                                      </div>
                                                </div>
                                          </div> 
                                          <div class='cause'>
                                                <div class='report-cause'>
                                                      <label class='alllabels'> Cause for Reporting </label>
                                                      <div class='the-cause list-details'> Cause for Reporting
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
      </div> <!-- post reports -->
</div>  <!-- main box -->
