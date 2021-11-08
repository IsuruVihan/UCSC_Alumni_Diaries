<link rel='stylesheet' href='../../../../../assets/styles/ongoing-projects-assets-cash-spend.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<form class='spend'>
    <div class='group'>
        <label for='amount'>Amount (Rs.)</label>
        <input id='amount' type='text' class='input-field'/>
    </div>
    <div class='group'>
        <label for='description'>Description</label>
        <input id='description' type='text' class='input-field'/>
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