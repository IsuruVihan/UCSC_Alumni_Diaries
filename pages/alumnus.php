<?php include('../server/session.php'); ?>

<?php
    if (!isset($_SESSION['Email']) || $_SESSION['Banned']) {
        header('Location: home.php');
    }
?>

<?php include('../components/header.php'); ?>

<link rel="stylesheet" href="../assets/styles/alumnus.css">
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<script>
    $(document).ready(() => {
        $('#registered-members').load("../server/alumnus/render-list.php");
        $('#reg-mem-filter').submit((event) => {
            event.preventDefault();
            const picSrc = $('#rej-mem-pic').val();
            const firstName = $('#rej-mem-fname').val();
            const lastName = $('#rej-mem-lname').val();
            const batch = $('#rej-mem-batch').val();
            $('#registered-members').load("../server/alumnus/filter.php", {
                    FirstName: firstName,
                    LastName: lastName,
                    Batch: batch
            });
        });
    });

    const ViewRegisteredMemberDetails = (email) => {
        $('#result-details').load("../server/alumnus/view-details.php", {
            Email: email
        });
    }

</script>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        Alumni
    </p>
    <p class='main-title'>
        <i class="fa fa-users"></i> Registered Alumni
    </p>
</div>
<div class='alumnus-container'>
    <div class='grid-container'>
        <div class='alumni-details-panel' id='result-details'>
            <div class='account-details-container'>
                <div class='img-container'>

                </div>
                <div class='acdc-text-field'>Account Type</div>
            </div>
            <div class='alumni-details-container'>
                <header class='container-heading'> Account Details</header>
                <div class='aldc-row1'>
                    <div class='first-name details-field'>First name</div>
                    <div class='last-name details-field'>Last Name</div>
                </div>
                <div class='details-field full-name'>Full Name</div>
                <div class='details-field gender'>Gender</div>
                <div class='details-field batch'>Batch</div>
                <div class='aldc-row1'>
                    <div class='nic details-field'>NIC</div>
                    <div class='contact-number details-field'>Contact Number</div>
                </div>
                <div class='details-field address'>Address</div>
            </div> 
            <div class='contributions-container'>
                <header class='container-heading'>Contributions</header>
                <div class='contribution-box'>
                    <div class='contribution-row1'>
                        <p class='request-id'>Project Name</p>
                    </div>
                </div>
            </div>
            <div class='involved-projects-container'>
                <header class='container-heading'>Involved Projects</header>
                <div class='involved-projects-box'>
                    <div class='involved-projects-row'>
                        <p>Project Name</p>
                        <p>Position</p>
                    </div>
                </div>
            </div>       
        </div>

        <div class='r-alumni-list-container'>
            <header class='container-heading'>Registered Alumni List</header>
            <form class='filter-container' id='reg-mem-filter'>
                <div class='filter-container-col1'>
                    <input type='text' placeholder='First Name' class='input-field-title field-hover' id='rej-mem-fname'/>
                    <input type='text' placeholder='Last Name' class='input-field-title field-hover' id='rej-mem-lname'/>
                    <select class='input-field-title field-hover' id='rej-mem-batch'>
                        <option value='All'>All</option>
                        <option value='2004/2005'>2004/2005</option>
                        <option value='2005/2006'>2005/2006</option>
                        <option value='2006/2007'>2006/2007</option>
                        <option value='2007/2008'>2007/2008</option>
                        <option value='2008/2009'>2008/2009</option>
                        <option value='2009/2010'>2009/2010</option>
                        <option value='2010/2011'>2010/2011</option>
                        <option value='2011/2012'>2011/2012</option>
                        <option value='2012/2013'>2012/2013</option>
                        <option value='2013/2014'>2013/2014</option>
                        <option value='2014/2015'>2014/2015</option>
                        <option value='2015/2016'>2015/2016</option>
                        <option value='2016/2017'>2016/2017</option>
                        <option value='2017/2018'>2017/2018</option>
                        <option value='2018/2019'>2018/2019</option>
                        <option value='2019/2020'>2019/2020</option>
                        <option value='2020/2021'>2020/2021</option>
                        <option value='2021/2022'>2021/2022</option>
                    </select>
                </div>
                <div class='filter-container-col2'>
                    <button class='btn filter-btn'>Filter</button>
                </div>
            </form>
            <div class='alumni-list-box' id='registered-members'>
                <!-- <div class='alumni-box-row'>
                    <div class='list-prof-pic'></div>
                    <div class='list-detail-field'>First name</div>
                    <div class='list-detail-field'>Last name</div>
                    <div class='list-detail-field'>Batch</div>
                    <button class='btn view-btn'>View</button>
                </div> -->
            </div>
        </div>
    </div>
</div>

<?php include('../components/footer.php'); ?>