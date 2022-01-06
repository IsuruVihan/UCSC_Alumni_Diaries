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
        $('#to-be-acc-cash-container').load("../../server/admin-inventory/to-be-accepted/render-to-be-acc-cash.php");
        $('#cash-filter-field').submit((event) => {
            event.preventDefault();
            const donorName = $('#donorName').val();
            const donorEmail = $('#donorEmail').val();
            const from = $('#from').val();
            const to = $('#to').val();
            const project = $('#for').val();

            $('#to-be-acc-cash-container').load("../../server/admin-inventory/to-be-accepted/filtered-to-be-acc-cash.php", {
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
        $('#to-be-acc-items-container').load("../../server/admin-inventory/to-be-accepted/render-to-be-acc-items.php");
        $('#items-filter-field').submit((event) => {
            event.preventDefault();
            const donorName = $('#donorName1').val();
            const donorEmail = $('#donorEmail1').val();
            const from = $('#from1').val();
            const to = $('#to1').val();
            const project = $('#for1').val();

            $('#to-be-acc-items-container').load("../../server/admin-inventory/to-be-accepted/filtered-to-be-acc-items.php", {
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
        $('#cash-filter-field').load("../../server/admin-inventory/to-be-accepted/cash-filter-field.php");
    });
    $(document).ready(() => {
        $('#items-filter-field').load("../../server/admin-inventory/to-be-accepted/items-filter-field.php");
    });
</script>

<div class='to-be-accepted'>
    <div class='sec-4'>
        <div class='to-be-acc-cash'>
            <div class='title'>
               To be Accepted - Cash
            </div>
            <form class='filter-field' id='cash-filter-field'>
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
                        <option value="" disabled selected hidden>For</option>
                        <option value='2018/2019'>2018/2019</option>
                        <option value='2018/2019'>2019/2020</option>
                        <option value='2018/2019'>2020/2021</option>
                    </select>
                </div>
                <div class='col'>
                    <button class="filter-btn btn">Filter</button>
                </div>
            </form>
            <div class='to-be-acc-cash-container' id='to-be-acc-cash-container'>
                <div class='to-be-acc-cash-item'>
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
                        For :
                    </div>
                    <div class='sec-1'>
                        For
                    </div>
                    <div class='label'>
                        Amount :
                    </div>
                    <div class='sec-1'>
                        Amount
                    </div>
                    <div class='btn-container'>
                        <button class='bill-btn btn'>Bill</button>
                        <button class="accept-btn btn">Accept</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='to-be-acc-cash-item'>
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
                        For :
                    </div>
                    <div class='sec-1'>
                        For
                    </div>
                    <div class='label'>
                        Amount :
                    </div>
                    <div class='sec-1'>
                        Amount
                    </div>
                    <div class='btn-container'>
                        <button class='bill-btn btn'>Bill</button>
                        <button class="accept-btn btn">Accept</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='to-be-acc-cash-item'>
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
                        For :
                    </div>
                    <div class='sec-1'>
                        For
                    </div>
                    <div class='label'>
                        Amount :
                    </div>
                    <div class='sec-1'>
                        Amount
                    </div>
                    <div class='btn-container'>
                        <button class='bill-btn btn'>Bill</button>
                        <button class="accept-btn btn">Accept</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='to-be-acc-cash-item'>
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
                        For :
                    </div>
                    <div class='sec-1'>
                        For
                    </div>
                    <div class='label'>
                        Amount :
                    </div>
                    <div class='sec-1'>
                        Amount
                    </div>
                    <div class='btn-container'>
                        <button class='bill-btn btn'>Bill</button>
                        <button class="accept-btn btn">Accept</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
            </div>
        </div>
        <div class='to-be-acc-item'>
            <div class='title'>
               To Be Accepted - Items
            </div>
            <form class='filter-field' id='items-filter-field'>
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
                        <option value="" disabled selected hidden>For</option>
                        <option value='2018/2019'>2018/2019</option>
                        <option value='2018/2019'>2019/2020</option>
                        <option value='2018/2019'>2020/2021</option>
                    </select>
                </div>
                <div class='col'>
                    <button class="filter-btn btn">Filter</button>
                </div>
            </form>
            <div class='to-be-acc-items-container' id='to-be-acc-items-container'>
                <div class='to-be-acc-items-item'>
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
                        For :
                    </div>
                    <div class='sec-2'>
                        For
                    </div>
                    <div class='label'>
                        Item :
                    </div>
                    <div class='sec-2'>
                        Item
                    </div>
                    <div class='label'>
                        Quantity :
                    </div>
                    <div class='sec-2'>
                        Qty
                    </div>
                    <div class='btn-container'>
                        <button class="accept-btn btn">Accept</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='to-be-acc-items-item'>
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
                        For :
                    </div>
                    <div class='sec-2'>
                        For
                    </div>
                    <div class='label'>
                        Item :
                    </div>
                    <div class='sec-2'>
                        Item
                    </div>
                    <div class='label'>
                        Quantity :
                    </div>
                    <div class='sec-2'>
                        Qty
                    </div>
                    <div class='btn-container'>
                        <button class="accept-btn btn">Accept</button>
                        <button class="delete-btn btn">Delete</button>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='to-be-acc-items-item'>
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
                        For :
                    </div>
                    <div class='sec-2'>
                        For
                    </div>
                    <div class='label'>
                        Item :
                    </div>
                    <div class='sec-2'>
                        Item
                    </div>
                    <div class='label'>
                        Quantity :
                    </div>
                    <div class='sec-2'>
                        Qty
                    </div>
                    <div class='btn-container'>
                        <button class="accept-btn btn">Accept</button>
                        <button class="delete-btn btn">Delete</button>
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

<script>
    const onClickAcceptBtn = (id) => {
        $('#to-be-acc-cash-container').load("../../server/admin-inventory/to-be-accepted/accept-cash.php",{
            Id: id
        });
        $('#to-be-acc-items-container').load("../../server/admin-inventory/to-be-accepted/render-to-be-acc-items.php");
    }

    const CashDeleteBtn = (id) => {
        $('#to-be-acc-cash-container').load("../../server/admin-inventory/to-be-accepted/delete-cash.php",{
            Id: id
        });
        $('#to-be-acc-cash-container').load("../../server/admin-inventory/to-be-accepted/render-to-be-acc-cash.php");
    }
</script>

<script>
    const onClickItemsAcceptBtn = (id) => {
        $('#to-be-acc-items-container').load("../../server/admin-inventory/to-be-accepted/accept-items.php",{
            Id: id
        });
        $('#to-be-acc-items-container').load("../../server/admin-inventory/to-be-accepted/render-to-be-acc-items.php");
    }

    const ItemsDeleteBtn = (id) => {
        $('#to-be-acc-items-container').load("../../server/admin-inventory/to-be-accepted/delete-items.php",{
            Id: id
        });
        $('#to-be-acc-items-container').load("../../server/admin-inventory/to-be-accepted/render-to-be-acc-cash.php");
    }
</script>