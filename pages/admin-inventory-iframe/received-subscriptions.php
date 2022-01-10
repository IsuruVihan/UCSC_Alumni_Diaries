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
        $('#subscriptions-container').load("../../server/admin-inventory/received-assets/render-subscriptions.php");
        $('#subscriptions-filter').submit((event) => {
            event.preventDefault();
            const firstName = $('#first-name').val();
            const lastName = $('#last-name').val();
            const from = $('#from').val();
            const to = $('#to').val();
            const batch = $('#batch').val();

            $('#subscriptions-container').load("../../server/admin-inventory/received-assets/filtered-subscriptions.php", {
                firstName: firstName,
                lastEmail: lastName,
                from: from,
                to: to,
                batch: batch
            });
        })
    });
</script>

<script>
    const subscriptionsGenReportBtn = (from, to, firstName, lastName, batch) => {
        const url = "http://localhost/UCSC_Alumni_Diaries/server/generate-reports/admin-inventory/received-subscriptions-report.php?from=" + from + "&to=" + to + "&firstName=" + firstName + "&lastName=" + lastName + "&batch=" + batch;
        window.location.replace(url);
    }
</script>

<div class='subscriptions-main-container'>
    <div Class='subscriptions'>
        <div class='title'>
            Subscriptions
        </div>
        <form class='subscriptions-filter-field' id='subscriptions-filter'>
            <div class='col3'>
                <input class='input-avu2' type='text' id='first-name' placeholder='First Name'/>
                <input class='input-avu2' type='text' id='last-name' placeholder='Last name'/>
            </div>
            <div class='col3'>
                <input class='input-avu2' type='text' id='from' placeholder='From'
                       onmouseup="(this.type='date')">
                <input class='input-avu2' type='text' id='to' placeholder='To'
                       onmouseup="(this.type='date')">
            </div>
            <div class='col3'>
                <select class='input-avu3' id='batch'>
                    <option value="" disabled selected hidden>Batch</option>
                    <option value='2012/2013'>2012/2013</option>
                    <option value='2013/2014'>2013/2014</option>
                    <option value='2014/2015'>2014/2015</option>
                    <option value='2015/2016'>2015/2016</option>
                    <option value='2016/2017'>2016/2017</option>
                    <option value='2017/2018'>2017/2018</option>
                    <option value='2018/2019'>2018/2019</option>
                    <option value='2019/2020'>2019/2020</option>
                    <option value='2020/2021'>2020/2021</option>
                </select>
            </div>
            <div class='col2'>
                <button class='filter-btn btn'>Filter</button>
                <button class='generate-reports-btn btn'
                        onclick=subscriptionsGenReportBtn(document.getElementById('from').value,document.getElementById('to').value,document.getElementById('first-name').value,document.getElementById('last-name').value,document.getElementById('batch').value)
                >Generate Reports</button>
            </div>
        </form>
        <div class='subscriptions-container' id='subscriptions-container'>
            <div class='subscription-item'>
                <div class='label-sec'>
                    <div class='label1'>
                        First Name :
                    </div>
                    <div class='label1'>
                        Last Name :
                    </div>
                </div>
                <div class='sec-6'>
                    <div class='sec-7'>
                        First Name
                    </div>
                    <div class='sec-7'>
                        Last Name
                    </div>
                </div>
                <div class='label-sec'>
                    <div class='label1'>
                        Batch :
                    </div>
                    <div class='label1'>
                        Amount :
                    </div>
                </div>
                <div class='sec-6'>
                    <div class='sec-7'>
                        Batch
                    </div>
                    <div class='sec-7'>
                        Amount
                    </div>
                </div>
                <div class='label'>
                    Email :
                </div>
                <div class='sec-1'>
                    Email
                </div>
                <div class='label'>
                    Subscription Type :
                </div>
                <div class='sec-1'>
                    Sub. Type
                </div>
                <div class='sec-3'>
                    time
                </div>
            </div>
            <div class='subscription-item'>
                <div class='label-sec'>
                    <div class='label1'>
                        First Name :
                    </div>
                    <div class='label1'>
                        Last Name :
                    </div>
                </div>
                <div class='sec-6'>
                    <div class='sec-7'>
                        First Name
                    </div>
                    <div class='sec-7'>
                        Last Name
                    </div>
                </div>
                <div class='label-sec'>
                    <div class='label1'>
                        Batch :
                    </div>
                    <div class='label1'>
                        Amount :
                    </div>
                </div>
                <div class='sec-6'>
                    <div class='sec-7'>
                        Batch
                    </div>
                    <div class='sec-7'>
                        Amount
                    </div>
                </div>
                <div class='label'>
                    Email :
                </div>
                <div class='sec-1'>
                    Email
                </div>
                <div class='label'>
                    Subscription Type :
                </div>
                <div class='sec-1'>
                    Sub. Type
                </div>
                <div class='sec-3'>
                    time
                </div>
            </div>
            <div class='subscription-item'>
                <div class='label-sec'>
                    <div class='label1'>
                        First Name :
                    </div>
                    <div class='label1'>
                        Last Name :
                    </div>
                </div>
                <div class='sec-6'>
                    <div class='sec-7'>
                        First Name
                    </div>
                    <div class='sec-7'>
                        Last Name
                    </div>
                </div>
                <div class='label-sec'>
                    <div class='label1'>
                        Batch :
                    </div>
                    <div class='label1'>
                        Amount :
                    </div>
                </div>
                <div class='sec-6'>
                    <div class='sec-7'>
                        Batch
                    </div>
                    <div class='sec-7'>
                        Amount
                    </div>
                </div>
                <div class='label'>
                    Email :
                </div>
                <div class='sec-1'>
                    Email
                </div>
                <div class='label'>
                    Subscription Type :
                </div>
                <div class='sec-1'>
                    Sub. Type
                </div>
                <div class='sec-3'>
                    time
                </div>
            </div>
            <div class='subscription-item'>
                <div class='label-sec'>
                    <div class='label1'>
                        First Name :
                    </div>
                    <div class='label1'>
                        Last Name :
                    </div>
                </div>
                <div class='sec-6'>
                    <div class='sec-7'>
                        First Name
                    </div>
                    <div class='sec-7'>
                        Last Name
                    </div>
                </div>
                <div class='label-sec'>
                    <div class='label1'>
                        Batch :
                    </div>
                    <div class='label1'>
                        Amount :
                    </div>
                </div>
                <div class='sec-6'>
                    <div class='sec-7'>
                        Batch
                    </div>
                    <div class='sec-7'>
                        Amount
                    </div>
                </div>
                <div class='label'>
                    Email :
                </div>
                <div class='sec-1'>
                    Email
                </div>
                <div class='label'>
                    Subscription Type :
                </div>
                <div class='sec-1'>
                    Sub. Type
                </div>
                <div class='sec-3'>
                    time
                </div>
            </div>
            <div class='subscription-item'>
                <div class='label-sec'>
                    <div class='label1'>
                        First Name :
                    </div>
                    <div class='label1'>
                        Last Name :
                    </div>
                </div>
                <div class='sec-6'>
                    <div class='sec-7'>
                        First Name
                    </div>
                    <div class='sec-7'>
                        Last Name
                    </div>
                </div>
                <div class='label-sec'>
                    <div class='label1'>
                        Batch :
                    </div>
                    <div class='label1'>
                        Amount :
                    </div>
                </div>
                <div class='sec-6'>
                    <div class='sec-7'>
                        Batch
                    </div>
                    <div class='sec-7'>
                        Amount
                    </div>
                </div>
                <div class='label'>
                    Email :
                </div>
                <div class='sec-1'>
                    Email
                </div>
                <div class='label'>
                    Subscription Type :
                </div>
                <div class='sec-1'>
                    Sub. Type
                </div>
                <div class='sec-3'>
                    time
                </div>
            </div>
        </div>
    </div>
</div>