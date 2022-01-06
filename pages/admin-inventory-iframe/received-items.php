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
        $('#received-items-container').load("../../server/admin-inventory/received-assets/render-received-items.php");
        $('#received-items-filter').load("../../server/admin-inventory/received-assets/received-items-filter.php");
        $('#received-items-filter').submit((event) => {
            event.preventDefault();
            const donorName = $('#donorName1').val();
            const donorEmail = $('#donorEmail1').val();
            const from = $('#from1').val();
            const to = $('#to1').val();
            const project = $('#for1').val();

            $('#received-items-container').load("../../server/admin-inventory/received-assets/filtered-received-items.php", {
                DonorName: donorName,
                DonorEmail: donorEmail,
                From: from,
                To: to,
                Project: project
            });
        })

    });

</script>

<script>
    const itemsGenReportBtn = (from1, to1, donorName1, donorEmail1, project1) => {
        const url = "http://localhost/UCSC_Alumni_Diaries/server/generate-reports/admin-inventory/received-items-report.php?from=" + from1 + "&to=" + to1 + "&donorName=" + donorName1 + "&donorEmail=" + donorEmail1 + "&project=" + project1;
        window.location.replace(url);
    }
</script>

<div class='received-items-main-container'>
    <div class='received-items'>
        <div class='title'>
            Items - For Projects
        </div>
        <form class='cash-received-filter-field' id='received-items-filter'>
            <div class='col3'>
                <input class='input-avu2' type='text' placeholder='Donor Name'/>
                <input class='input-avu2' type='text' placeholder='Donor Email'/>
            </div>
            <div class='col3'>
                <input class='input-avu2' type='text' placeholder='From'
                       onmouseup="(this.type='date')">
                <input class='input-avu2' type='text' placeholder='To'
                       onmouseup="(this.type='date')">
            </div>
            <div class='col3'>
                <select class='input-avu3'>
                    <option value="" disabled selected hidden>Project</option>
                    <option value='2018/2019'>2018/2019</option>
                    <option value='2018/2019'>2019/2020</option>
                    <option value='2018/2019'>2020/2021</option>
                </select>
            </div>
            <div class='col2'>
                <button class='filter-btn btn'>Filter</button>
                <button class='generate-reports-btn btn'>Generate Report</button>
            </div>
        </form>
        <div class='received-items-container' id='received-items-container'>
            <div class='received-items-item'>
                <div class='label'>
                    Donor's Name :
                </div>
                <div class='sec-1'>
                    {$row1['DonorName']}
                </div>
                <div class='label'>
                    Donor's Email :
                </div>
                <div class='sec-1'>
                    {$row1['Email']}
                </div>
                <div class='label'>
                    Item Name :
                </div>
                <div class='sec-1'>
                    {$row1['DonorName']}
                </div>
                <div class='label'>
                    Item Quantity :
                </div>
                <div class='sec-1'>
                    Item Quantity
                </div>
                <div class='sec-3'>
                    time
                </div>
            </div>
            <div class='received-items-item'>
                <div class='label'>
                    Donor's Name :
                </div>
                <div class='sec-1'>
                    Donor Name
                </div>
                <div class='label'>
                    Donor's Email :
                </div>
                <div class='sec-1'>
                    Donor Email
                </div>
                <div class='label'>
                    Item Name :
                </div>
                <div class='sec-1'>
                    Item Name
                </div>
                <div class='label'>
                    Item Quantity :
                </div>
                <div class='sec-1'>
                    Item Quantity
                </div>
                <div class='sec-3'>
                    time
                </div>
            </div>
            <div class='received-items-item'>
                <div class='label'>
                    Donor's Name :
                </div>
                <div class='sec-1'>
                    Donor Name
                </div>
                <div class='label'>
                    Donor's Email :
                </div>
                <div class='sec-1'>
                    Donor Email
                </div>
                <div class='label'>
                    Item Name :
                </div>
                <div class='sec-1'>
                    Item Name
                </div>
                <div class='label'>
                    Item Quantity :
                </div>
                <div class='sec-1'>
                    Item Quantity
                </div>
                <div class='sec-3'>
                    time
                </div>
            </div>
        </div>
    </div>
</div>