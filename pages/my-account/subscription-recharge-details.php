<link rel='stylesheet' href='../../assets/styles/my-account.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>
<script>
    const genReportBtn = (from, to, subType) => {
        const url = "http://localhost/UCSC_Alumni_Diaries/server/generate-reports/my-account/report-structure.php?from=" + from + "&to=" + to + "&subtype=" + subType;
        window.location.replace(url);

    }
</script>

<script>
    $(document).ready(() => {
        $('#recharge-details-container').load("../../server/my-account/subscription-recharge-account-details-render.php");
        $('#filter').submit((event) => {
            event.preventDefault();
            const from = $('#from').val();
            const to = $('#to').val();
            const sub_type = $('#subType').val();

            $('#recharge-details-container').load("../../server/my-account/subscription-recharge-account-details-filter.php", {
                From: from,
                To: to,
                SubType: sub_type
            });
        });
    });
</script>

<div class='subscription' id='subscriptions'>
    <div class='recharge-details' id='recharge-details'>
        <form class='filter-field' id='filter'>
            <div class='section-11'>
                <input class='input4' id='from' type='text' placeholder='From'
                       onmouseup="(this.type='date')">
                <input class='input4' id='to' type='text' placeholder='To'
                       onmouseup="(this.type='date')">
            </div>
            <div class='section-11'>
                <select class='input5' id='subType'>
                    <option value="" disabled selected hidden>Subscription Type</option>
                    <option value='Anually'>Annually</option>
                    <option value='Monthly'>Monthly</option>
                </select>
            </div>
            <div class='section-11'>
                <input type='submit' class='filter-btn btn' value='Filter'/>
                <button onClick="window.location.reload();" class='all-btn btn'>All</button>
                <button
                    onClick=genReportBtn(document.getElementById('from').value,document.getElementById('to').value,document.getElementById('subType').value)
                    class='gen-repo-btn btn'
                >Generate Report</button>
            </div>
        </form>
        <table class='involved-projects'>
            <thead>
            <tr>
                <th class='cash-h-1'>Sub. Type</th>
                <th class='cash-h-1'>Amount</th>
                <th class='cash-h-1'>Time</th>
                <th class='cash-h-1'>Bill</th>
            </tr>
            </thead>
            <tbody id='recharge-details-container'>

            </tbody>
        </table>
    </div>
</div>







<!--        <div class='recharge-details-container' id='recharge-details-container'>-->
<!--            <div class='recharge-details-item'>-->
<!--                <div class=section-14>-->
<!--                    <div class='section-12'>-->
<!--                        Subscription Type-->
<!--                    </div>-->
<!--                    <div class='section-12'>-->
<!--                        Amount-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class='section-14'>-->
<!--                    <div class='section-12'>-->
<!--                        Time-->
<!--                    </div>-->
<!--                    <div class='section-13'>-->
<!--                        <button class='bank-slip-btn btn'>Bank Slip</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class='recharge-details-item'>-->
<!--                <div class=section-14>-->
<!--                    <div class='section-12'>-->
<!--                        Subscription Type-->
<!--                    </div>-->
<!--                    <div class='section-12'>-->
<!--                        Amount-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class='section-14'>-->
<!--                    <div class='section-12'>-->
<!--                        Time-->
<!--                    </div>-->
<!--                    <div class='section-13'>-->
<!--                        <button class='bank-slip-btn btn'>Bank Slip</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class='recharge-details-item'>-->
<!--                <div class=section-14>-->
<!--                    <div class='section-12'>-->
<!--                        Subscription Type-->
<!--                    </div>-->
<!--                    <div class='section-12'>-->
<!--                        Amount-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class='section-14'>-->
<!--                    <div class='section-12'>-->
<!--                        Time-->
<!--                    </div>-->
<!--                    <div class='section-13'>-->
<!--                        <button class='bank-slip-btn btn'>Bank Slip</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
