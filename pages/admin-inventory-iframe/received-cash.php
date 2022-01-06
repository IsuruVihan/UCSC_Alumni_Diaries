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
        $('#received-cash-container-association').load("../../server/admin-inventory/received-assets/render-received-cash-association.php");
        $('#filter-association').submit((event) => {
            event.preventDefault();
            const donorName = $('#donorName').val();
            const donorEmail = $('#donorEmail').val();
            const from = $('#from').val();
            const to = $('#to').val();

            $('#received-cash-container-association').load("../../server/admin-inventory/received-assets/filtered-received-cash-association.php", {
                DonorName: donorName,
                DonorEmail: donorEmail,
                From: from,
                To: to,
            });
        })
    });

</script>

<script>
    $(document).ready(() => {
        $('#received-cash-container-projects').load("../../server/admin-inventory/received-assets/render-received-cash-projects.php");
        $('#filter-projects').submit((event) => {
            event.preventDefault();
            const donorName = $('#donorName1').val();
            const donorEmail = $('#donorEmail1').val();
            const from = $('#from1').val();
            const to = $('#to1').val();
            const project = $('#for1').val();

            $('#received-cash-container-projects').load("../../server/admin-inventory/received-assets/filtered-received-cash-projects.php", {
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
    $(document).ready(() => {
        $('#filter-projects').load("../../server/admin-inventory/received-assets/received-cash-projects-filter.php");
    });
</script>

<script>
    const associationGenReportBtn = (from, to, donorName, donorEmail) => {
        const url = "http://localhost/UCSC_Alumni_Diaries/server/generate-reports/admin-inventory/received-cash-for-association-report.php?from=" + from + "&to=" + to + "&donorName=" + donorName + "&donorEmail=" + donorEmail;
        window.location.replace(url);
    }
</script>

<script>
    const projectsGenReportBtn = (from1, to1, donorName1, donorEmail1, project1) => {
        const url = "http://localhost/UCSC_Alumni_Diaries/server/generate-reports/admin-inventory/received-cash-for-projects-report.php?from=" + from1 + "&to=" + to1 + "&donorName=" + donorName1 + "&donorEmail=" + donorEmail1 + "&project=" + project1;
        window.location.replace(url);
    }
</script>

<div class='received-cash'>
    <div class='sec-4'>
        <div class='cash-for-association'>
            <div class='title'>
                For Association
            </div>
            <form class='cash-received-filter-field' id='filter-association'>
                <div class='col4'>
                    <input class='input-avu2' type='text' id='donorName' placeholder='Donor Name'/>
                    <input class='input-avu2' type='text' id='donorEmail' placeholder='Donor Email'/>
                </div>
                <div class='col4'>
                    <input class='input-avu2' type='text' id='from' placeholder='From'
                           onmouseup="(this.type='date')">
                    <input class='input-avu2' type='text' id='to' placeholder='To'
                           onmouseup="(this.type='date')">
                </div>
                <div class='col2'>
                    <input type='submit' class='filter-btn btn' value='Filter'/>
                    <button class='generate-reports-btn btn'
                            onclick=associationGenReportBtn(document.getElementById('from').value,document.getElementById('to').value,document.getElementById('donorName').value,document.getElementById('donorEmail').value)
                    >Generate Reports</button>
                </div>
            </form>
            <div class='received-cash-container' id='received-cash-container-association'>
                <div class='received-cash-item-for-association'>
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
                        Amount :
                    </div>
                    <div class='sec-1'>
                        Amount
                    </div>
                    <div class='label'>
                        Paid By :
                    </div>
                    <div class='sec-1'>
                        Paid By
                    </div>
                    <div class='btn-container-received-cash'>
                        <button class="bill-btn btn">Bill</button>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='received-cash-item-for-association'>
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
                        Amount :
                    </div>
                    <div class='sec-1'>
                        Amount
                    </div>
                    <div class='label'>
                        Paid By :
                    </div>
                    <div class='sec-1'>
                        Paid By
                    </div>
                    <div class='btn-container-received-cash'>
                        <button class="bill-btn btn">Bill</button>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='received-cash-item-for-association'>
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
                        Amount :
                    </div>
                    <div class='sec-1'>
                        Amount
                    </div>
                    <div class='label'>
                        Paid By :
                    </div>
                    <div class='sec-1'>
                        Paid By
                    </div>
                    <div class='btn-container-received-cash'>
                        <button class="bill-btn btn">Bill</button>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
            </div>
        </div>
        <div class='cash-for-projects'>
            <div class='title'>
                For Projects
            </div>
            <form class='cash-received-filter-field' id='filter-projects'>
                <div class='col3'>
                    <input class='input-avu2' type='text' id='donorName' placeholder='Donor Name'/>
                    <input class='input-avu2' type='text' id='donorEmail' placeholder='Donor Email'/>
                </div>
                <div class='col3'>
                    <input class='input-avu2' type='text' id='from' placeholder='From'
                           onmouseup="(this.type='date')">
                    <input class='input-avu2' type='text' id='to' placeholder='To'
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
            <div class='received-cash-container' id='received-cash-container-projects'>
                <div class='received-cash-item'>
                    <div class='label'>
                        Donor's Name :
                    </div>
                    <div class='sec-2'>
                        Donor Name
                    </div>
                    <div class='label'>
                        Donor's Email :
                    </div>
                    <div class='sec-2'>
                        Donor Email
                    </div>
                    <div class='label'>
                        Amount :
                    </div>
                    <div class='sec-2'>
                        Amount
                    </div>
                    <div class='label'>
                        Paid By :
                    </div>
                    <div class='sec-2'>
                        Paid By
                    </div>
                    <div class='label'>
                        Project :
                    </div>
                    <div class='sec-2'>
                        Project
                    </div>
                    <div class='btn-container-received-cash'>
                        <button class="bill-btn btn">Bill</button>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='received-cash-item'>
                    <div class='label'>
                        Donor's Name :
                    </div>
                    <div class='sec-2'>
                        Donor Name
                    </div>
                    <div class='label'>
                        Donor's Email :
                    </div>
                    <div class='sec-2'>
                        Donor Email
                    </div>
                    <div class='label'>
                        Amount :
                    </div>
                    <div class='sec-2'>
                        Amount
                    </div>
                    <div class='label'>
                        Paid By :
                    </div>
                    <div class='sec-2'>
                        Paid By
                    </div>
                    <div class='label'>
                        Project :
                    </div>
                    <div class='sec-2'>
                        Project
                    </div>
                    <div class='btn-container-received-cash'>
                        <button class="bill-btn btn">Bill</button>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='received-cash-item'>
                    <div class='label'>
                        Donor's Name :
                    </div>
                    <div class='sec-2'>
                        Donor Name
                    </div>
                    <div class='label'>
                        Donor's Email :
                    </div>
                    <div class='sec-2'>
                        Donor Email
                    </div>
                    <div class='label'>
                        Amount :
                    </div>
                    <div class='sec-2'>
                        Amount
                    </div>
                    <div class='label'>
                        Paid By :
                    </div>
                    <div class='sec-2'>
                        Paid By
                    </div>
                    <div class='label'>
                        Project :
                    </div>
                    <div class='sec-2'>
                        Project
                    </div>
                    <div class='btn-container-received-cash'>
                        <button class="bill-btn btn">Bill</button>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const  ShowModal = (id) => {
        const modal = document.getElementById("bank-slip-modal-" + id);
        modal.style.display = "flex";
    }

    const HideModal = (id) => {
        const modal = document.getElementById("bank-slip-modal-" + id);
        modal.style.display = "none";
    }
</script>