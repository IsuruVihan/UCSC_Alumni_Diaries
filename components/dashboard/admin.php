<link rel='stylesheet' href='../../assets/styles/admin-dashboard.css'/>

<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>

<script>
    $(document).ready(() => {
        $('#admin-dashboard').load("../../server/dashboard/admin.php");
    });
</script>

<div class='admin-dashboard' id='admin-dashboard'></div>