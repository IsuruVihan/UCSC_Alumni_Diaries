<?php include('../server/session.php'); ?>

<link rel="stylesheet" href="../assets/styles/payhere-modal.css">
<link rel='stylesheet' href='../assets/styles/our-projects.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>
<script>
    $(document).ready(() => {
        $('#projectList').load("../server/All-Projects/render_list.php");
        $('#filter_projects').submit((event) =>{
            event.preventDefault();
            const start_date = $('#start_date').val();
            const end_date =$('#end_date').val();
            const project_name =$('#project_name').val();
            $('#projectList').load("../server/All-Projects/filter.php",{
                Start_Date: start_date,
                End_Date: end_date,
                Project_Name:project_name
            });
        });
    });
    const ViewProjectDetails = (id) => {
        $('#ProjectDetails').load("../server/All-Projects/project-details.php", {
            Id: id       
        });    
    }
    const cashDonation = (id) =>{
       
        const Id = id;
        const CashDonationForm = '#cash-donation-'+Id;
        const CashForm = 'cash-donation-'+Id;
        const Message ='#donation-message-'+Id;
        const Cancel ='#cancel-cash-'+Id;
        const submitFile = '#cash-file-'+Id;
       
        $(CashDonationForm).submit((event) => {
            event.preventDefault();
            const url = '../server/All-Projects/cash-donation.php';
            const form = document.getElementById(CashForm);
            const files = document.getElementById(submitFile);
            const formData = new FormData(form);

            fetch(url, {
                method: 'POST',
                body: formData,
            }).then((response) => {
                console.log(response);
            }).catch((error) => {
                console.log(error);
            });
          
            const Cash_Donator = '#cash-donor-' + Id;
            const Cash_Email = '#cash-email-' + Id;
            const Cash_Amount = '#cash-amount-' + Id;
            const CashDonator = $(Cash_Donator).val();
            const CashEmail = $(Cash_Email).val();
            const CashAmount = $(Cash_Amount).val();
        
           let isComplete = true, isValidEmail=true;
           $(Cash_Donator, Cash_Email, Cash_Amount).removeClass('input-error, input-ok');

           if(CashDonator == ''){
            $(Cash_Donator).addClass('input-error');
            isComplete = false;     
           }else{
               $(Cash_Donator).addClass('input-ok');
           }
           if(CashEmail == ''){
            $(Cash_Email).addClass('input-error');
            isComplete = false;     
           }else{
               $(Cash_Email).addClass('input-ok');
           }
           if(CashAmount == ''){
            $(Cash_Amount).addClass('input-error');
            isComplete = false;     
           }else{
               $(Cash_Amount).addClass('input-ok');
           }
            if (isComplete) {
                if (CashEmail.length <= 2) {
                        isValidEmail = false;
                    } else {
                        if (CashEmail.indexOf("@") == -1) {
                            isValidEmail = false;
                        } else {
                            var parts = CashEmail.split("@");
                            var dot = parts[1].indexOf(".");
                            var len = parts[1].length;
                            var dotSplits = parts[1].split(".");
                            var dotCount = dotSplits.length - 1;
                            if (dot == -1 || dot < 2 || dotCount > 2) {
                                isValidEmail = false;
                            } else {
                                for (var i = 0; i < dotSplits.length; i++) {
                                    if (dotSplits[i].length == 0) {
                                        isValidEmail = false;
                                        break;
                                    }
                                }
                            }
                        }
                    }
                if(!isValidEmail){
                    $(Message).html("Email is not valid");
                    $(Message).addClass('message-error');
                    $(Message).removeClass('message-success');
                    $(Cash_Email).removeClass('input-ok');
                    $(Cash_Email).addClass('input-error');
                    }else{
                        // let currency = $(Cash_Amount).value;
                      if(CashAmount <= 0){
                        $(Message).html("Enter a value greater than 0");
                        $(Message).addClass('message-error');
                        $(Message).removeClass('message-success');
                        $(Cash_Amount).removeClass('input-ok');
                        $(Cash_Amount).addClass('input-error');

                    }else{
                        $(Message).html('Donation has been accepted');
                        $(Message).addClass('message-success');
                    }
                }    
            }else{
                $(Message).html('All fields are required');
                $(Message).addClass('message-error'); 
            }      
        });    
        $(Cancel).click(() =>{
            $(Cash_Donator, Cash_Email, Cash_Amount).removeClass('input-error, input-ok');
            $(Cash_Donator, Cash_Email, Cash_Amount).val('');
        
        });            
    }
    const submitItem = (id) =>{
        const itemId = id;
        const itemDonationForm = '#item-donation-'+ itemId;
        const itemForm = 'item-donation-'+ itemId;
        const item_Message ='#item-donation-message-'+ itemId;
        const item_Cancel ='#cancel-item-'+ itemId;
        const item_submitFile = '#item-file-'+ itemId;

        $(itemDonationForm).submit((event) => {
            event.preventDefault();
            const urlone = '../server/All-Projects/item-donation.php';
            const formone = document.getElementById(itemForm);
            const itemfiles = document.getElementById(item_submitFile);
            const formDataOne = new FormData(formone);

            fetch(urlone, {
                method: 'POST',
                body: formDataOne,
            }).then((response) => {
                console.log(response);
            }).catch((error) => {
                console.log(error);
            });

            const item_Donator = '#item-donor-' + itemId;
            const item_Email = '#item-email-' + itemId;
            const item_Name = '#item-name-' + itemId;
            const item_Quantity = '#item-quantity-' + itemId;
            const itemDonator = $(item_Donator).val();
            const itemEmail = $(item_Email).val();
            const itemName = $(item_Name).val();
            const itemQuantity = $(item_Quantity).val();

            let isComplete = true, isValidEmail=true;
            $(item_Donator, item_Email,item_Name,item_Quantity).removeClass('input-error, input-ok');

            if(itemDonator == ''){
                $(item_Donator).addClass('input-error');
                isComplete = false;     
            }else{
                $(item_Donator).addClass('input-ok');
            }
            if(itemEmail == ''){
                $(item_Email).addClass('input-error');
                isComplete = false;     
            }else{
                $(item_Email).addClass('input-ok');
            }
            if(itemName == ''){
                $(item_Name).addClass('input-error');
                isComplete = false;     
            }else{
                $(item_Name).addClass('input-ok');
            }
            if(itemQuantity == ''){
                $(item_Quantity).addClass('input-error');
                isComplete = false;     
            }else{
                $(item_Quantity).addClass('input-ok');
            }
            if (isComplete) {
                if (itemEmail.length <= 2) {
                        isValidEmail = false;
                    } else {
                        if (itemEmail.indexOf("@") == -1) {
                            isValidEmail = false;
                        } else {
                            var parts = itemEmail.split("@");
                            var dot = parts[1].indexOf(".");
                            var len = parts[1].length;
                            var dotSplits = parts[1].split(".");
                            var dotCount = dotSplits.length - 1;
                            if (dot == -1 || dot < 2 || dotCount > 2) {
                                isValidEmail = false;
                            } else {
                                for (var i = 0; i < dotSplits.length; i++) {
                                    if (dotSplits[i].length == 0) {
                                        isValidEmail = false;
                                        break;
                                    }
                                }
                            }
                        }
                    }
                if(!isValidEmail){
                    $(item_Message).html("Email is not valid");
                    $(item_Message).addClass('message-error');
                    $(item_Message).removeClass('message-success');
                    $(item_Email).removeClass('input-ok');
                    $(item_Email).addClass('input-error');
                }else{
                        // let currency = $(Cash_Amount).value;
                      if(itemQuantity <= 0){
                        $(item_Message).html("Enter a value greater than 0");
                        $(item_Message).addClass('message-error');
                        $(item_Message).removeClass('message-success');
                        $(item_Quantity).removeClass('input-ok');
                        $(item_Quantity).addClass('input-error');
                    }else{
                        $(item_Message).html('Donation has been accepted');
                        $(item_Message).addClass('message-success');
                    }
                }             
            }else{
                $(item_Message).html('All fields are required');
                $(item_Message).addClass('message-error'); 
                $(item_Message).removeClass('message-success');
            } 
        });
        $(item_Cancel).click(() =>{
            $(item_Donator, item_Email,item_Name,item_Quantity).removeClass('input-error, input-ok');
            $(item_Donator, item_Email,item_Name,item_Quantity).val('');
        
        });
    }

    const PayHereModalOpen = (id) => {
        const modal = '#PayHereModal-' + id;
        $(modal).css({display: "block"});
    }

    const PayHereModalClose = (id) => {
        const modal = '#PayHereModal-' + id;
        $(modal).css({display: "none"});
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
                <input class='input-field ' type='text' placeholder='Project Name' id='project_name'/>
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
        </div>
    </div>
    <div class='card container02'>
        <div class='sub-container' id='ProjectDetails'>
            <div class='section-01'>
            </div>
            <div class='section-02' id='section-02'>
            </div>
        </div>
    </div>
</div>

<script src='../js/our-project.js'></script>
<?php include('../components/footer.php'); ?>