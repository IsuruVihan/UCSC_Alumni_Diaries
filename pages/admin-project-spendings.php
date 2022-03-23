<?php include('../server/session.php'); ?>

<?php include('../db/db-conn.php'); ?>

<?php
    if (!(isset($_SESSION['Email']) && $_SESSION['AccType'] == 'TopBoard') || $_SESSION['Banned']) {
        header('Location: home.php');
    }
?>

<?php include('../components/header.php'); ?>

<link rel="stylesheet" href="../assets/styles/project-spendings.css">
<script src="https://use.fontawesome.com/3e9045be79.js" >
</script>

    <script>
        $(document).ready(() => {
            $('#scroll-box1').load('../server/admin/project-spending/all-projects.php');

        });

        // $('#project-filter').submit((event) => {
        //
        //     event.preventDefault();
        //     const toDate = $('#to-date').val();
        //     const fromDate = $('#from-date').val();
        //     const coordinator = $('#coordinator-name').val();
        //     const projectStatus = $('#project-status').val();
        //
        //     $('#scroll-box1').load('../server/admin/project-spending/filter1.php',{
        //         toDate :toDate,
        //         fromDate : fromDate,
        //         coordinator : coordinator,
        //         projectStatus : projectStatus,
        //     });
        // });
        const FilterFunction = () => {
            const toDate = $('#to-date').val();
            const fromDate = $('#from-date').val();
            const coordinator = $('#coordinator-name').val();
            const projectStatus = $('#project-status').val();


            $('#scroll-box1').load('../server/admin/project-spending/filter1.php',{
                toDate :toDate,
                fromDate : fromDate,
                coordinator : coordinator,
                projectStatus : projectStatus,
            });

        }

        const ModalView = (id) => {
            const modal = '#myModal-' + id;
            $(modal).css({display: "block"});
        }

        const ModalClose = (id) => {
            const modal = '#myModal-' + id;
            $(modal).css({display: "none"});
        }

        const ViewCashItems = (id) => {
            $('#cash-spendings').load('../server/admin/project-spending/cash-render.php',{
                Id :id,
            });

            $('#cash-sum').load('../server/admin/project-spending/cash-sum-render.php',{
                Id :id,
            });

            $('#item-spendings').load('../server/admin/project-spending/item-render.php',{
                Id :id,
            });

            $('#item-rpeort-btn').load('../server/admin/project-spending/item-report-render.php',{
                Id :id,
            });
        }

        const GenReportItemSpend = (id) => {
            const url = "http://localhost/UCSC_Alumni_Diaries/server/generate-reports/project-spendings/item-spendings-summary.php?ProjectId=" + id;
            window.location.replace(url);
        }

        const GenReportCashSpend = (id) => {
            const url = "http://localhost/UCSC_Alumni_Diaries/server/generate-reports/project-spendings/cash-spendings-summary.php?ProjectId=" + id;
            window.location.replace(url);
        }
    </script>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href="admin.php">Admin</a> / Project Spending
    </p>
    <p class='main-title'>
        <i class="fa fa-address-card"></i> Project Spending
    </p>
</div>
<div class='admin-project-spendings'>
    <div class='container-col-1'>
        <div class='container-heading'>All Projects</div>
            <div class='filter-box' id='project-filter'>
                <div class='filter-row1'>
                    <input class='input-field date-field' type='date' id='from-date'/>To
                    <input class='input-field date-field' type='date' id='to-date'/>
                    <input class='input-field text-field' type='text' placeholder='Coordinator ' id='coordinator-name'/>
                    <select class='input-field drop-down' id='project-status'>
                        <option value="AllProjects">All Projects</option>
                        <option value="NotStartedYet">Not Yet Started Projects</option>
                        <option value="Ongoing">Ongoing Projects</option>
                        <option value="Completed">Completed Projects</option>
                        <option value="Closed">Closed Projects</option>
                    </select>
                </div>
                <button class='filter-btn btn' onclick=FilterFunction()>Filter</button>
            </div>
        <div class='scroll-box1' id="scroll-box1">

        </div>
    </div>

    <div class='cash-spendings'>
        <div class='container-heading'>Cash Spendings</div>
        <div class='cash-spend-grid' ">
            <div class='cash-spendings-row1' id='cash-spendings' >

            </div>
            <div class='cash-spendings-row2' id='cash-sum'>

            </div>
        </div>
    </div>
    <div class='item-spendings'>
        <div class='container-heading'>Item Spendings</div>
        <div class='item-spendings-row1' id='item-spendings'>


        </div>
        <div class='item-spendings-row2 item-spend-row' id='item-rpeort-btn'>

        </div>
    </div>
</div>

<?php include('../components/footer.php'); ?>