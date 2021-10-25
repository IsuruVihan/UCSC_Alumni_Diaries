<?php include('../server/session.php'); ?>

<?php include('../components/privileges/admin.php'); ?>

<?php include('../components/header.php'); ?>
<link rel='stylesheet' href='../assets/styles/inventory-new.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='admin.php'>Admin</a> / Inventory
    </p>
    <p class='main-title'>
        <i class='fas fa-inventory'></i>
        Inventory
    </p>
</div>
<div class='inventory'>
    <div class='available-assets'>
        <div class='available-cash'>
            <div class='title'>
                Available Cash
            </div>
            <div class='cash'>
                Cash
            </div>
            <div class='trans-to1'>
                <div class='col1'>
                    <select class='input-avu2'>
                        <option value="" disabled selected hidden>Transfer To</option>
                        <option value='2018/2019'>2018/2019</option>
                        <option value='2018/2019'>2019/2020</option>
                        <option value='2018/2019'>2020/2021</option>
                    </select>
                    <input class='input-avu2' type='number' placeholder='Amount'/>
                </div>
                <div class='col2'>
                    <button class='submit-btn btn'>Submit</button>
                </div>
            </div>
        </div>
        <div class='available-items'>
            <div class='title'>
                Available Items
            </div>
            <div class='available-items-container'>
                <div class='available-items-card'>
                    <div class='item-details'>
                        <div class='item-name'>
                            Item Name
                        </div>
                        <div class='item-quantity'>
                            Quantity
                        </div>
                    </div>
                    <div class='trans-to2'>
                        <div class='col3'>
                            <select class='input-avu1'>
                                <option value="" disabled selected hidden>Transfer To</option>
                                <option value='2018/2019'>2018/2019</option>
                                <option value='2018/2019'>2019/2020</option>
                                <option value='2018/2019'>2020/2021</option>
                            </select>
                            <input class='input-avu1' type='number' placeholder='Quantity'/>
                        </div>
                        <div class='col2'>
                            <button class='submit-btn btn'>Submit</button>
                        </div>
                    </div>
                </div>
                <div class='available-items-card'>
                    <div class='item-details'>
                        <div class='item-name'>
                            Item Name
                        </div>
                        <div class='item-quantity'>
                            Quantity
                        </div>
                    </div>
                    <div class='trans-to2'>
                        <div class='col3'>
                            <select class='input-avu1'>
                                <option value="" disabled selected hidden>Transfer To</option>
                                <option value='2018/2019'>2018/2019</option>
                                <option value='2018/2019'>2019/2020</option>
                                <option value='2018/2019'>2020/2021</option>
                            </select>
                            <input class='input-avu1' type='number' placeholder='Quantity'/>
                        </div>
                        <div class='col2'>
                            <button class='submit-btn btn'>Submit</button>
                        </div>
                    </div>
                </div>
                <div class='available-items-card'>
                    <div class='item-details'>
                        <div class='item-name'>
                            Item Name
                        </div>
                        <div class='item-quantity'>
                            Quantity
                        </div>
                    </div>
                    <div class='trans-to2'>
                        <div class='col3'>
                            <select class='input-avu1'>
                                <option value="" disabled selected hidden>Transfer To</option>
                                <option value='2018/2019'>2018/2019</option>
                                <option value='2018/2019'>2019/2020</option>
                                <option value='2018/2019'>2020/2021</option>
                            </select>
                            <input class='input-avu1' type='number' placeholder='Quantity'/>
                        </div>
                        <div class='col2'>
                            <button class='submit-btn btn'>Submit</button>
                        </div>
                    </div>
                </div>
                <div class='available-items-card'>
                    <div class='item-details'>
                        <div class='item-name'>
                            Item Name
                        </div>
                        <div class='item-quantity'>
                            Quantity
                        </div>
                    </div>
                    <div class='trans-to2'>
                        <div class='col3'>
                            <select class='input-avu1'>
                                <option value="" disabled selected hidden>Transfer To</option>
                                <option value='2018/2019'>2018/2019</option>
                                <option value='2018/2019'>2019/2020</option>
                                <option value='2018/2019'>2020/2021</option>
                            </select>
                            <input class='input-avu1' type='number' placeholder='Quantity'/>
                        </div>
                        <div class='col2'>
                            <button class='submit-btn btn'>Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class='generate-reports'>
                <button class='generate-reports-btn btn'>Generate Reports</button>
            </div>
        </div>
    </div>
    <div class='transfers'>
        <div class='title'>
            Transfers
        </div>
        <div class='cash-transfers'>
            <div class='title'>
                Cash
            </div>
            <div class='filter-field'>
                <div class='col3'>
                    <input class='input-avu2' type='text' placeholder='From'
                           onmouseup="(this.type='date')">
                    <input class='input-avu2' type='text' placeholder='To'
                           onmouseup="(this.type='date')">
                </div>
                <div class='col3'>
                    <select class='input-avu2'>
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
            </div>
            <div class='cash-transfers-container'>
                <div class='cash-transfers-item'>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Transferred To
                        </div>
                        <div class='sec-2'>
                            Received From
                        </div>
                    </div>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Amount
                        </div>
                        <div class='sec-2'>
                            Bill Attachment
                        </div>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='cash-transfers-item'>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Transferred To
                        </div>
                        <div class='sec-2'>
                            Received From
                        </div>
                    </div>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Amount
                        </div>
                        <div class='sec-2'>
                            Bill Attachment
                        </div>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='cash-transfers-item'>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Transferred To
                        </div>
                        <div class='sec-2'>
                            Received From
                        </div>
                    </div>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Amount
                        </div>
                        <div class='sec-2'>
                            Bill Attachment
                        </div>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
            </div>
            <div class='cash-transfers-total'>
                Total
            </div>
        </div>
        <div class='item-transfers'>
            <div class='title'>
                Items
            </div>
            <div class='filter-field'>
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
                    <select class='input-avu2'>
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
            </div>
            <div class='item-transfers-container'>
                <div class='item-transfers-item'>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Item Name
                        </div>
                        <div class='sec-2'>
                            Quantity
                        </div>
                    </div>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Transfer To
                        </div>
                        <div class='sec-2'>
                            Received From
                        </div>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='item-transfers-item'>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Item Name
                        </div>
                        <div class='sec-2'>
                            Quantity
                        </div>
                    </div>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Transfer To
                        </div>
                        <div class='sec-2'>
                            Received From
                        </div>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='item-transfers-item'>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Item Name
                        </div>
                        <div class='sec-2'>
                            Quantity
                        </div>
                    </div>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Transfer To
                        </div>
                        <div class='sec-2'>
                            Received From
                        </div>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='to-be-accepted'>
        <div class='title'>
            To Be Accepted
        </div>
        <div class='sec-4'>
            <div class='to-be-acc-item'>
                <div class='title'>
                    Cash
                </div>
                <div class='filter-field'>
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
                        <select class='input-avu2'>
                            <option value="" disabled selected hidden>For</option>
                            <option value='2018/2019'>2018/2019</option>
                            <option value='2018/2019'>2019/2020</option>
                            <option value='2018/2019'>2020/2021</option>
                        </select>
                    </div>
                    <div class='col2'>
                        <button class="filter-btn btn">Filter</button>
                    </div>
                </div>
                <div class='to-be-acc-cash-container'>
                    <div class='to-be-acc-cash-item'>
                        <div class='sec-1'>
                            <div class='sec-2'>
                                Donor Name
                            </div>
                            <div class='sec-2'>
                                Donor Email
                            </div>
                        </div>
                        <div class='sec-1'>
                            <div class='sec-2'>
                                For
                            </div>
                            <div class='sec-2'>
                                Amount
                            </div>
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
                        <div class='sec-1'>
                            <div class='sec-2'>
                                Donor Name
                            </div>
                            <div class='sec-2'>
                                Donor Email
                            </div>
                        </div>
                        <div class='sec-1'>
                            <div class='sec-2'>
                                For
                            </div>
                            <div class='sec-2'>
                                Amount
                            </div>
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
                        <div class='sec-1'>
                            <div class='sec-2'>
                                Donor Name
                            </div>
                            <div class='sec-2'>
                                Donor Email
                            </div>
                        </div>
                        <div class='sec-1'>
                            <div class='sec-2'>
                                For
                            </div>
                            <div class='sec-2'>
                                Amount
                            </div>
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
                    Item
                </div>
                <div class='filter-field'>
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
                        <select class='input-avu2'>
                            <option value="" disabled selected hidden>For</option>
                            <option value='2018/2019'>2018/2019</option>
                            <option value='2018/2019'>2019/2020</option>
                            <option value='2018/2019'>2020/2021</option>
                        </select>
                    </div>
                    <div class='col2'>
                        <button class="filter-btn btn">Filter</button>
                    </div>
                </div>
                <div class='to-be-acc-items-container'>
                    <div class='to-be-acc-items-item'>
                        <div class='sec-1'>
                            <div class='sec-2'>
                                Donor Name
                            </div>
                            <div class='sec-2'>
                                Donor Email
                            </div>
                        </div>
                        <div class='sec-1'>
                            <div class='sec-5'>
                                For
                            </div>
                            <div class='sec-5'>
                                Item
                            </div>
                            <div class='sec-5'>
                                Qty
                            </div>
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
                        <div class='sec-1'>
                            <div class='sec-2'>
                                Donor Name
                            </div>
                            <div class='sec-2'>
                                Donor Email
                            </div>
                        </div>
                        <div class='sec-1'>
                            <div class='sec-5'>
                                For
                            </div>
                            <div class='sec-5'>
                                Item
                            </div>
                            <div class='sec-5'>
                                Quantity
                            </div>
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
                        <div class='sec-1'>
                            <div class='sec-2'>
                                Donor Name
                            </div>
                            <div class='sec-2'>
                                Donor Email
                            </div>
                        </div>
                        <div class='sec-1'>
                            <div class='sec-5'>
                                For
                            </div>
                            <div class='sec-5'>
                                Item
                            </div>
                            <div class='sec-5'>
                                Quantity
                            </div>
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
    <div class='received'>
        <div class='title'>
            Received
        </div>
        <div class='received-cash'>
            <div class='title'>
                Cash
            </div>
            <div class='sec-4'>
                <div class='cash-for-association'>
                    <div class='title'>
                        For Association
                    </div>
                    <div class='cash-received-filter-field'>
                        <div class='col4'>
                            <input class='input-avu2' type='text' placeholder='Donor Name'/>
                            <input class='input-avu2' type='text' placeholder='Donor Email'/>
                        </div>
                        <div class='col3'>
                            <input class='input-avu3' type='text' placeholder='From'
                                   onmouseup="(this.type='date')">
                        </div>
                        <div class='col3'>
                            <input class='input-avu3' type='text' placeholder='To'
                                   onmouseup="(this.type='date')">
                        </div>
                        <div class='col2'>
                            <button class='filter-btn btn'>Filter</button>
                            <button class='generate-reports-btn btn'>Generate Report</button>
                        </div>
                    </div>
                    <div class='received-cash-container'>
                        <div class='received-cash-item'>
                            <div class='sec-1'>
                                <div class='sec-2'>
                                    Donor Name
                                </div>
                                <div class='sec-2'>
                                    Donor Email
                                </div>
                            </div>
                            <div class='sec-1'>
                                <div class='sec-2'>
                                    Amount
                                </div>
                                <div class='sec-2'>
                                    Paid By
                                </div>
                            </div>
                            <div class='btn-container'>
                                <button class="bill-btn btn">Bill</button>
                            </div>
                            <div class='sec-3'>
                                time
                            </div>
                        </div>
                        <div class='received-cash-item'>
                            <div class='sec-1'>
                                <div class='sec-2'>
                                    Donor Name
                                </div>
                                <div class='sec-2'>
                                    Donor Email
                                </div>
                            </div>
                            <div class='sec-1'>
                                <div class='sec-2'>
                                    Amount
                                </div>
                                <div class='sec-2'>
                                    Paid By
                                </div>
                            </div>
                            <div class='btn-container'>
                                <button class='bill-btn btn'>Bill</button>
                            </div>
                            <div class='sec-3'>
                                time
                            </div>
                        </div>
                        <div class='received-cash-item'>
                            <div class='sec-1'>
                                <div class='sec-2'>
                                    Donor Name
                                </div>
                                <div class='sec-2'>
                                    Donor Email
                                </div>
                            </div>
                            <div class='sec-1'>
                                <div class='sec-2'>
                                    Amount
                                </div>
                                <div class='sec-2'>
                                    Paid By
                                </div>
                            </div>
                            <div class='btn-container'>
                                <button class='bill-btn btn'>Bill</button>
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
                    <div class='cash-received-filter-field'>
                        <div class='col3'>
                            <input class='input-avu2' type='text' placeholder='Donor Name'/>
                            <input class='input-avu2' type='text' placeholder='Donor Email'/>
                        </div>
                        <div class='col3'>
                            <input class='input-avu3' type='text' placeholder='From'
                                   onmouseup="(this.type='date')">
                        </div>
                        <div class='col3'>
                            <input class='input-avu3' type='text' placeholder='To'
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
                    </div>
                    <div class='received-cash-container'>
                        <div class='received-cash-item'>
                            <div class='sec-1'>
                                <div class='sec-2'>
                                    Donor Name
                                </div>
                                <div class='sec-2'>
                                    Donor Email
                                </div>
                            </div>
                            <div class='sec-1'>
                                <div class='sec-2'>
                                    Amount
                                </div>
                                <div class='sec-2'>
                                    Paid By
                                </div>
                            </div>
                            <div class='btn-container-received-cash'>
                                <div class='sec-2'>
                                    Project
                                </div>
                                <button class="bill-btn btn">Bill</button>
                            </div>
                            <div class='sec-3'>
                                time
                            </div>
                        </div>
                        <div class='received-cash-item'>
                            <div class='sec-1'>
                                <div class='sec-2'>
                                    Donor Name
                                </div>
                                <div class='sec-2'>
                                    Donor Email
                                </div>
                            </div>
                            <div class='sec-1'>
                                <div class='sec-2'>
                                    Amount
                                </div>
                                <div class='sec-2'>
                                    Paid By
                                </div>
                            </div>
                            <div class='btn-container-received-cash'>
                                <div class='sec-2'>
                                    Project
                                </div>
                                <button class='bill-btn btn'>Bill</button>
                            </div>
                            <div class='sec-3'>
                                time
                            </div>
                        </div>
                        <div class='received-cash-item'>
                            <div class='sec-1'>
                                <div class='sec-2'>
                                    Donor Name
                                </div>
                                <div class='sec-2'>
                                    Donor Email
                                </div>
                            </div>
                            <div class='sec-1'>
                                <div class='sec-2'>
                                    Amount
                                </div>
                                <div class='sec-2'>
                                    Paid By
                                </div>
                            </div>
                            <div class='btn-container-received-cash'>
                                <div class='sec-2'>
                                    Project
                                </div>
                                <button class='bill-btn btn'>Bill</button>
                            </div>
                            <div class='sec-3'>
                                time
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='received-items'>
            <div class='title'>
                Items - For Projects
            </div>
            <div class='subscriptions-filter-field'>
                <div class='col3'>
                    <input class='input-avu2' type='text' placeholder='Donor Name'/>
                    <input class='input-avu2' type='text' placeholder='Donor Email'/>
                </div>
                <div class='col4'>
                    <input class='input-avu4' type='text' placeholder='From'
                           onmouseup="(this.type='date')">
                    <input class='input-avu4' type='text' placeholder='To'
                           onmouseup="(this.type='date')">
                    <select class='input-avu4'>
                        <option value="" disabled selected hidden>Project</option>
                        <option value='2018/2019'>2018/2019</option>
                        <option value='2018/2019'>2019/2020</option>
                        <option value='2018/2019'>2020/2021</option>
                    </select>
                </div>
                <div class='col2'>
                    <button class='subscriptions-filter-btn btn'>Filter</button>
                    <button class='subscriptions-gen-repo-btn btn'>Generate Report</button>
                </div>
            </div>
            <div class='subscriptions-container'>
                <div class='subscription-item'>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Donor Name
                        </div>
                        <div class='sec-2'>
                            Donor Email
                        </div>
                    </div>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Item Name
                        </div>
                        <div class='sec-2'>
                            Item Quantity
                        </div>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='subscription-item'>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Donor Name
                        </div>
                        <div class='sec-2'>
                            Donor Email
                        </div>
                    </div>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Item Name
                        </div>
                        <div class='sec-2'>
                            Item Quantity
                        </div>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='subscription-item'>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Donor Name
                        </div>
                        <div class='sec-2'>
                            Donor Email
                        </div>
                    </div>
                    <div class='sec-1'>
                        <div class='sec-2'>
                            Item Name
                        </div>
                        <div class='sec-2'>
                            Quantity
                        </div>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
            </div>
        </div>
        <div Class='subscriptions'>
            <div class='title'>
                Subscriptions
            </div>
            <div class='subscriptions-filter-field'>
                <div class='col4'>
                    <input class='input-avu4' type='text' placeholder='Last Name'>
                    <input class='input-avu4' type='text' placeholder='First name'>
                    <select class='input-avu4'>
                        <option value="" disabled selected hidden>Batch</option>
                        <option value='All'>All</option>
                        <option value='2018/2019'>2018/2019</option>
                        <option value='2018/2019'>2019/2020</option>
                        <option value='2018/2019'>2020/2021</option>
                    </select>
                </div>
                <div class='col4'>
                    <select class='input-avu4'>
                        <option value="" disabled selected hidden>Project</option>
                        <option value='All'>All</option>
                        <option value='2018/2019'>2018/2019</option>
                        <option value='2018/2019'>2019/2020</option>
                        <option value='2018/2019'>2020/2021</option>
                    </select>
                    <input class='input-avu4' type='text' placeholder='From'
                           onmouseup="(this.type='date')">
                    <input class='input-avu4' type='text' placeholder='To'
                           onmouseup="(this.type='date')">
                </div>
                <div class='subs-filter-btn-container'>
                    <button class='subscriptions-filter-btn btn'>Filter</button>
                    <button class='subscriptions-gen-repo-btn btn'>Generate Report</button>
                </div>
            </div>
            <div class='subscriptions-container'>
                <div class='subscription-item'>
                    <div class='sec-1'>
                        <div class='sec-6'>
                            First Name
                        </div>
                        <div class='sec-6'>
                            Last Name
                        </div>
                        <div class='sec-6'>
                            Email
                        </div>
                    </div>
                    <div class='sec-1'>
                        <div class='sec-6'>
                            Batch
                        </div>
                        <div class='sec-6'>
                            Sub. Type
                        </div>
                        <div class='sec-6'>
                            Amount
                        </div>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='subscription-item'>
                    <div class='sec-1'>
                        <div class='sec-6'>
                            First Name
                        </div>
                        <div class='sec-6'>
                            Last Name
                        </div>
                        <div class='sec-6'>
                            Email
                        </div>
                    </div>
                    <div class='sec-1'>
                        <div class='sec-6'>
                            Batch
                        </div>
                        <div class='sec-6'>
                            Sub. Type
                        </div>
                        <div class='sec-6'>
                            Amount
                        </div>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='subscription-item'>
                    <div class='sec-1'>
                        <div class='sec-6'>
                            First Name
                        </div>
                        <div class='sec-6'>
                            Last Name
                        </div>
                        <div class='sec-6'>
                            Email
                        </div>
                    </div>
                    <div class='sec-1'>
                        <div class='sec-6'>
                            Batch
                        </div>
                        <div class='sec-6'>
                            Sub. Type
                        </div>
                        <div class='sec-6'>
                            Amount
                        </div>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='subscription-item'>
                    <div class='sec-1'>
                        <div class='sec-6'>
                            First Name
                        </div>
                        <div class='sec-6'>
                            Last Name
                        </div>
                        <div class='sec-6'>
                            Email
                        </div>
                    </div>
                    <div class='sec-1'>
                        <div class='sec-6'>
                            Batch
                        </div>
                        <div class='sec-6'>
                            Sub. Type
                        </div>
                        <div class='sec-6'>
                            Amount
                        </div>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
                <div class='subscription-item'>
                    <div class='sec-1'>
                        <div class='sec-6'>
                            First Name
                        </div>
                        <div class='sec-6'>
                            Last Name
                        </div>
                        <div class='sec-6'>
                            Email
                        </div>
                    </div>
                    <div class='sec-1'>
                        <div class='sec-6'>
                            Batch
                        </div>
                        <div class='sec-6'>
                            Sub. Type
                        </div>
                        <div class='sec-6'>
                            Amount
                        </div>
                    </div>
                    <div class='sec-3'>
                        time
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../components/footer.php'); ?>