<link rel='stylesheet' href='../../assets/styles/inventory-new.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p'
      crossorigin='anonymous'/>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>

<script>
    $(document).ready(() => {
        $('#available-items-container').load("../../server/admin-inventory/render-available-items-list.php");
    });

</script>

<script>
    $(document).ready(() => {
        $('#available-cash').load("../../server/admin-inventory/render-available-cash.php");
    });
</script>

<div class='available-assets'>
    <div class='available-items'>
        <div class='title'>
            Available Items
        </div>
        <div class='available-items-container' id='available-items-container'></div>
        <div class='generate-reports'>
            <button class='generate-reports-btn btn' onclick=genReportBtn()>Generate Reports</button>
        </div>
    </div>
    <div class='available-cash' id='available-cash'></div>
</div>

<script>
    const onClickSubmitBtn = (Id) => {
        const project = $('#project-' + Id).val();
        const quantity = $('#quantity-' + Id).val();
        $('#available-items-container').load("../../server/admin-inventory/transfer-items-to-projects.php",{
            ItemId: Id,
            ProjectId: project,
            quantity: quantity
        });
    }
</script>

<script>
    const onCLickCashSubmit = () => {
        const project = $('#project1').val();
        const amount = $('#amount').val();
        $('#available-cash').load("../../server/admin-inventory/transfer-cash-to-projects.php",{
            ProjectId: project,
            Amount: amount
        })
    }
</script>

<script>
    const genReportBtn = () => {
        const url = "http://localhost/UCSC_Alumni_Diaries/server/generate-reports/admin-inventory/available-items-report.php";
        window.location.replace(url);
    }
</script>