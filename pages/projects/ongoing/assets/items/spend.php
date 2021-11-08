<link rel='stylesheet' href='../../../../../assets/styles/ongoing-projects-assets-items-spend.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<form class='spend'>
    <div class='parent-group'>
        <div class='group first'>
            <label for='id'>Item Id</label>
            <select id='id' class='input-field'>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
            </select>
        </div>
        <div class='group middle'>
            <label for='name'>Item Name</label>
            <input id='name' type='text' class='input-field' disabled/>
        </div>
        <div class='group last'>
            <label for='available'>Available Quantity</label>
            <input id='available' type='text' class='input-field' disabled/>
        </div>
    </div>
    <div class='parent-group'>
        <div class='group first'>
            <label for='spend'>Spend Quantity</label>
            <input id='spend' type='text' class='input-field'/>
        </div>
        <div class='group last-2'>
            <label for='description'>Description</label>
            <input id='description' type='text' class='input-field'/>
        </div>
    </div>
    <div class='group'>
        <label for='quotation'>Quotation attachment</label>
        <br/>
        <input id='quotation' type='file' class='bill-input'/>
    </div>
    <div class='group'>
        <input type='submit' class='spend-btn button' value='Create spend request' />
    </div>
    <div class='notice'>
        * Check the status of the spend request under the <b>Approvals</b> tab.
    </div>
</form>