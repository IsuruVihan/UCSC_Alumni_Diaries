
<link rel='stylesheet' href='../../assets/styles/my-account.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>

<script>
    $(document).ready(() => {
        $('#table-body2').load("../../server/my-account/contributions-items-backend.php");
    });
</script>

<table>
    <thead>
    <tr>
        <th class='cash-h-1'>Project Name</th>
        <th class='cash-h-1'>Item Name</th>
        <th class='cash-h-1'>Quantity</th>
        <th class='cash-h-1'>Status</th>
        <th class='cash-h-1'>Timestamp</th>
    </tr>
    </thead>
    <tbody id='table-body2'>

    </tbody>
</table>