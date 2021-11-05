<link rel='stylesheet' href='../../../assets/styles/ongoing-projects-assets.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<div class='assets'>
    <div class='container-1'>
        <a
            id='l-1'
            href='./assets/cash.php'
            class='iframe-link left clicked-link'
            target='iframe'
            onclick=VisitLink('l-1')
        >Cash</a>
        <a
            id='l-2'
            href='./assets/items.php'
            class='iframe-link right'
            target='iframe'
            onclick=VisitLink('l-2')
        >Items</a>
    </div>
    <iframe
        class='container-2'
        name='iframe'
        src='./assets/cash.php'
    ></iframe>
</div>

<script src='../../../js/ongoing-projects-assets.js'></script>

<!--<div class='card cash'>-->
<!--    <div class='title'>-->
<!--        Cash-->
<!--    </div>-->
<!--    <div class='summary'>-->
<!--        <div class='available-cash-div'>-->
<!--            Available (Rs.) <br/>-->
<!--            <div class='available-cash-input'>10000</div>-->
<!--        </div>-->
<!--        <div class='spent-cash-div'>-->
<!--            Spent (Rs.) <br/>-->
<!--            <div class='spent-cash-input'>4500</div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class='transaction'>-->
<!--        <div class='row-1'>-->
<!--            <input type='text' placeholder='Rs.' class='amount-input input-field'/>-->
<!--            <input type='text' placeholder='Description' class='description-input input-field'/>-->
<!--            <input type='file' class='bill-input' id='bill-input' style='display: none'/>-->
<!--            <button onclick="document.getElementById('bill-input').click()" class='btn bill-btn'>Bill</button>-->
<!--        </div>-->
<!--        <div class='row-2'>-->
<!--            <button class='spend-btn btn'>Spend</button>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class='gen-report-div'>-->
<!--        <button class='btn gen-rep-btn'>Generate Report</button>-->
<!--    </div>-->
<!--</div>-->
<!--<div class='card items'>-->
<!--    <div class='title'>-->
<!--        Items-->
<!--    </div>-->
<!--    <div class='results2'>-->
<!--        <div class='result3'>-->
<!--            <div class='item-details'>-->
<!--                <div class='detail-field'>Item Name</div>-->
<!--                <div class='detail-field'>Available Qty</div>-->
<!--                <div class='detail-field'>Spent Qty</div>-->
<!--            </div>-->
<!--            <div class='transaction'>-->
<!--                <div class='row-1'>-->
<!--                    <input type='text' placeholder='Qty' class='amount-input input-field'/>-->
<!--                    <input type='text' placeholder='Description' class='description-input input-field'/>-->
<!--                    <input type='file' class='bill-input' id='bill-input' style='display: none'/>-->
<!--                    <button onclick="document.getElementById('bill-input').click()" class='btn bill-btn'>Bill-->
<!--                    </button>-->
<!--                </div>-->
<!--                <div class='row-2'>-->
<!--                    <button class='spend-btn btn'>Spend</button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class='gen-report-div'>-->
<!--        <button class='btn gen-rep-btn'>Generate Report</button>-->
<!--    </div>-->
<!--</div>-->
<!--<div class='card cash-spent'>-->
<!--    <div class='title'>-->
<!--        Cash Spent-->
<!--    </div>-->
<!--    <div class='results'>-->
<!--        <div class='result4'>-->
<!--            <div>Amount (Rs.)</div>-->
<!--            <button class='btn bill-btn'>Bill</button>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class='gen-report-div'>-->
<!--        <button class='btn gen-rep-btn'>Generate Report</button>-->
<!--    </div>-->
<!--</div>-->
<!--<div class='card items-spent'>-->
<!--    <div class='title'>-->
<!--        Items Spent-->
<!--    </div>-->
<!--    <div class='results'>-->
<!--        <div class='result4'>-->
<!--            <div>ItemName</div>-->
<!--            <div>Qty</div>-->
<!--            <button class='btn bill-btn'>Bill</button>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class='gen-report-div'>-->
<!--        <button class='btn gen-rep-btn'>Generate Report</button>-->
<!--    </div>-->
<!--</div>-->