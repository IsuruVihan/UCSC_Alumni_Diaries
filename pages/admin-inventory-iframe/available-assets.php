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

<div class='available-assets'>
    <div class='available-items'>
        <div class='title'>
            Available Items
        </div>
        <div class='available-items-container' id='available-items-container'>
            <div class='available-items-card'>
                <div class='label'>
                    Item :
                </div>
                <div class='item-details'>
                    Item Name
                </div>
                <div class='item-details'>
                    Quantity
                </div>
                <div class='label'>
                    To Transfer :
                </div>
                <select class='input-avu1'>
                       <option value="" disabled selected hidden>Transfer To</option>
                        <option value='2018/2019'>2018/2019</option>
                        <option value='2018/2019'>2019/2020</option>
                        <option value='2018/2019'>2020/2021</option>
                </select>
                <input class='input-avu1' type='number' placeholder='Quantity'/>
                <button class='submit-btn btn'>Submit</button>
            </div>
            <div class='available-items-card'>
                <div class='label'>
                    Item :
                </div>
                <div class='item-details'>
                    Item Name
                </div>
                <div class='item-details'>
                    Quantity
                </div>
                <div class='label'>
                    To Transfer :
                </div>
                <select class='input-avu1'>
                    <option value="" disabled selected hidden>Transfer To</option>
                    <option value='2018/2019'>2018/2019</option>
                    <option value='2018/2019'>2019/2020</option>
                    <option value='2018/2019'>2020/2021</option>
                </select>
                <input class='input-avu1' type='number' placeholder='Quantity'/>
                <button class='submit-btn btn'>Submit</button>
            </div>
            <div class='available-items-card'>
                <div class='label'>
                    Item :
                </div>
                <div class='item-details'>
                    Item Name
                </div>
                <div class='item-details'>
                    Quantity
                </div>
                <div class='label'>
                    To Transfer :
                </div>
                <select class='input-avu1'>
                    <option value="" disabled selected hidden>Transfer To</option>
                    <option value='2018/2019'>2018/2019</option>
                    <option value='2018/2019'>2019/2020</option>
                    <option value='2018/2019'>2020/2021</option>
                </select>
                <input class='input-avu1' type='number' placeholder='Quantity'/>
                <button class='submit-btn btn'>Submit</button>
            </div>
            <div class='available-items-card'>
                <div class='label'>
                    Item :
                </div>
                <div class='item-details'>
                    Item Name
                </div>
                <div class='item-details'>
                    Quantity
                </div>
                <div class='label'>
                    To Transfer :
                </div>
                <select class='input-avu1'>
                    <option value="" disabled selected hidden>Transfer To</option>
                    <option value='2018/2019'>2018/2019</option>
                    <option value='2018/2019'>2019/2020</option>
                    <option value='2018/2019'>2020/2021</option>
                </select>
                <input class='input-avu1' type='number' placeholder='Quantity'/>
                <button class='submit-btn btn'>Submit</button>
            </div>
        </div>
        <div class='generate-reports'>
            <button class='generate-reports-btn btn'>Generate Reports</button>
        </div>
    </div>
    <div class='available-cash'>
        <div class='title'>
            Available Cash
        </div>
        <div class='cash'>
            Cash
        </div>
        <select class='input-avu1'>
            <option value="" disabled selected hidden>Transfer To</option>
            <option value='2018/2019'>2018/2019</option>
            <option value='2018/2019'>2019/2020</option>
            <option value='2018/2019'>2020/2021</option>
        </select>
        <input class='input-avu1' type='number' placeholder='Amount'/>
        <button class='submit-btn btn'>Submit</button>
    </div>
</div>

<script>

</script>