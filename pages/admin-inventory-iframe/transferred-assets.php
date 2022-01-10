<link rel='stylesheet' href='../../assets/styles/inventory-new.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>

<script>
    $(document).ready(() => {
        $('#cash-transfers-container').load("../../server/admin-inventory/transferred-assets/render-transferred-cash.php");
        $('#transferred-cash-filter-field').submit((event) => {
            event.preventDefault();
            const from = $('#from').val();
            const to = $('#to').val();
            const transferred_to = $('#transferred-to').val();

            $('#cash-transfers-container').load("../../server/admin-inventory/transferred-assets/filtered-transferred-cash.php", {
                From: from,
                To: to,
                TransferredTo: transferred_to
            });
        });
    });

    $(document).ready(() => {
        $('#item-transfers-container').load("../../server/admin-inventory/transferred-assets/render-transferred-items.php");
        $('#transferred-items-filter-field').submit((event) => {
            event.preventDefault();
            const from = $('#from1').val();
            const to = $('#to1').val();
            const transferred_to = $('#transferred-to1').val();
            const item_name = $('#item-name').val();

            $('#item-transfers-container').load("../../server/admin-inventory/transferred-assets/filtered-transferred-items.php", {
                From: from,
                To: to,
                TransferredTo: transferred_to,
                ItemName: item_name
            });
        })
    });

</script>

<script>
    $(document).ready(() => {
        $('#cash-transfers-total').load("../../server/admin-inventory/transferred-assets/total-transferred-cash.php");
    });
</script>

<script>
    const cashGenReportBtn = (from, to, transferred_to) => {
        const url = "http://localhost/UCSC_Alumni_Diaries/server/generate-reports/admin-inventory/transferred-cash.php?from=" + from + "&to=" + to + "&transferred_to=" + transferred_to;
        window.location.replace(url);
    }
</script>

<script>
    const itemsGenReportBtn = (from, to, transferred_to, item_name) => {
        const url = "http://localhost/UCSC_Alumni_Diaries/server/generate-reports/admin-inventory/transferred-items.php?from=" + from + "&to=" + to + "&transferred_to=" + transferred_to + "&item_name=" + item_name;
        window.location.replace(url);
    }
</script>

<div class='transfers'>
    <div class='cash-transfers'>
        <div class='title'>
            Transferred Cash
        </div>
        <form class='filter-field' id='transferred-cash-filter-field'>
            <div class='col3'>
                <input class='input-avu2' type='text' placeholder='From'
                       onmouseup="(this.type='date')">
                <input class='input-avu2' type='text' placeholder='To'
                       onmouseup="(this.type='date')">
            </div>
            <div class='col3'>
                <select class='input-avu3'>
                    <option value="" disabled selected hidden>Transferred To</option>
                    <option value='2018/2019'>2018/2019</option>
                    <option value='2018/2019'>2019/2020</option>
                    <option value='2018/2019'>2020/2021</option>
                </select>
            </div>
            <div class='col2'>
                <button class="filter-btn btn">Filter</button>
                <button class="generate-reports-btn btn">Generate Reports</button>
            </div>
        </form>
        <div class='cash-transfers-container' id='cash-transfers-container'>
            <div class='cash-transfers-item'>
                <div class='label'>
                    Transferred To :
                </div>
                <div class='sec-1'>
                    Transferred To
                </div>
                <div class='label'>
                    Received From :
                </div>
                <div class='sec-1'>
                    Received From
                </div>
                <div class='label'>
                    Amount :
                </div>
                <div class='sec-1'>
                    Amount
                </div>
                <div class='label'>
                    BIll Attachment :
                </div>
                <div class='sec-1'>
                    Bill Attachment
                </div>
                <div class='sec-3'>
                    time
                </div>
            </div>
        </div>
        <div class='cash-transfers-total' id='cash-transfers-total'>

        </div>
    </div>
    <div class='item-transfers'>
        <div class='title'>
            Transferred Items
        </div>
        <form class='filter-field' id='transferred-items-filter-field'>
            <div class='col3'>
                <input class='input-avu2' type='text' placeholder='Item Name'/>
                <input class='input-avu2' type='text' placeholder='Received From'/>
            </div>
            <div class='col3'>
                <input class='input-avu2' type='text' placeholder='From'
                       onmouseup="(this.type='date')">
                <input class='input-avu2' type='text' placeholder='To'
                       onmouseup="(this.type='date')">
            </div>
            <div class='col3'>
                <select class='input-avu3'>
                    <option value="" disabled selected hidden>Transfer To</option>
                    <option value='2018/2019'>2018/2019</option>
                    <option value='2018/2019'>2019/2020</option>
                    <option value='2018/2019'>2020/2021</option>
                </select>
            </div>
            <div class='col2'>
                <button class="filter-btn btn">Filter</button>
                <button class="generate-reports-btn btn">Generate Reports</button>
            </div>
        </form>
        <div class='item-transfers-container' id='item-transfers-container'>
            <div class='item-transfers-item'>
                <div class='label'>
                    Item Name :
                </div>
                <div class='sec-1'>
                    Item Name
                </div>
                <div class='label'>
                    Quantity :
                </div>
                <div class='sec-1'>
                    Quantity
                </div>
                <div class='label'>
                    Transferred To :
                </div>
                <div class='sec-1'>
                    Transferred To
                </div>
                <div class='label'>
                    Received From :
                </div>
                <div class='sec-1'>
                    Received From
                </div>
                <div class='sec-3'>
                    time
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(() => {
        $('#transferred-cash-filter-field').load("../../server/admin-inventory/transferred-assets/transferred-cash-filter-field.php");
    });

    $(document).ready(() => {
        $('#transferred-items-filter-field').load("../../server/admin-inventory/transferred-assets/transferred-items-filter-field.php");
    });

</script>

<script>

</script>
