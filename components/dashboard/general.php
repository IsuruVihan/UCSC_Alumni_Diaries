<link rel='stylesheet' href='../../assets/styles/general-dashboard.css'/>

<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>

<script>
    $(document).ready(() => {
        $('#general-dashboard').load("../../server/dashboard/general.php");
    });
</script>

<div class='general-dashboard' id='general-dashboard'>

</div>