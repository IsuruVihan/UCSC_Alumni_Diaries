<link rel='stylesheet' href='../../../../../assets/styles/ongoing-projects-assets-items-spend.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<form class='item-spend-spend'>
    <div class='item-spend-parent-group'>
        <div class='item-spend-group item-spend-first'>
            <label for='id'>Item Id</label>
            <select id='id' class='item-spend-input-field'>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
            </select>
        </div>
        <div class='item-spend-group item-spend-middle'>
            <label for='name'>Item Name</label>
            <input id='name' type='text' class='item-spend-input-field' disabled/>
        </div>
        <div class='item-spend-group item-spend-last'>
            <label for='available'>Available Quantity</label>
            <input id='available' type='text' class='item-spend-input-field' disabled/>
        </div>
    </div>
    <div class='item-spend-parent-group'>
        <div class='item-spend-group item-spend-first'>
            <label for='spend'>Spend Quantity</label>
            <input id='spend' type='text' class='item-spend-input-field'/>
        </div>
        <div class='item-spend-group item-spend-last-2'>
            <label for='description'>Description</label>
            <input id='description' type='text' class='item-spend-input-field'/>
        </div>
    </div>
    <div class='item-spend-group'>
        <label for='quotation'>Quotation attachment</label>
        <br/>
        <input id='quotation' type='file' class='item-spend-bill-input'/>
    </div>
    <div class='item-spend-group'>
        <input type='submit' class='item-spend-spend-btn item-spend-button' value='Create spend request' />
    </div>
    <div class='item-spend-notice'>
        * Check the status of the spend request under the <b>Approvals</b> tab.
    </div>
</form>