<link rel='stylesheet' href='../../assets/styles/private-chat.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
</script>
<script>
    $(document).ready(() => {
        $('#available-users-container').load("../../server/private-chat/render-available-user-list.php");
    });
</script>

<script>
    $(document).ready(() => {
        $('#filter-field').submit((event) => {
            event.preventDefault();
            const firstname = $('#first-name').val();
            const lastname = $('#last-name').val();
            const batch = $('#batch').val();
            $('#available-users-container').load("../../server/private-chat/available-users-filter.php", {
                firstname: firstname,
                lastname: lastname,
                batch: batch
            });
        });
    })
</script>

<div class='available-users-main-container'>
    <div class='available-users'>
        <div class='available-users-title'>
            Available Users
            <form class='filter-field' id='filter-field'>
                <div class='col1'>
                    <input class='input-avu' id='first-name' type='text' placeholder='First Name'/>
                    <input class='input-avu' id='last-name' type='text' placeholder='Last Name'/>
                    <select class='input-avu' id='batch'>
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
                    <button class="filter-btn btn" type='submit' value='filter'>Filter</button>
                </div>
            </form>
        </div>
        <div class='available-users-container' id='available-users-container'>
            <div class='available-users-item'>
                <img src='../../assets/images/user-default.png' width="20%" height="90%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="add-btn btn">Add</button>
                    </div>
                </div>
            </div>
            <div class='available-users-item'>
                <img src='../../assets/images/user-default.png' width="20%" height="90%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="add-btn btn">Add</button>
                    </div>
                </div>
            </div>
            <div class='available-users-item'>
                <img src='../../assets/images/user-default.png' width="20%" height="90%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="add-btn btn">Add</button>
                    </div>
                </div>
            </div>
            <div class='available-users-item'>
                <img src='../../assets/images/user-default.png' width="20%" height="90%" class='user-pic' alt='user-pic'>
                <div class='names-btn-container'>
                    <div class='names-container'>
                        <div class='first-name'>First Name</div>
                        <div class='last-name'>Last Name</div>
                    </div>
                    <div class='btn-container'>
                        <button class="add-btn btn">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
     const onClickAddBtn = (Id) =>{
         $('#available-users-container').load("../../server/private-chat/add-user-to-chat-list.php", {
             Id: Id
         });
     }
</script>



