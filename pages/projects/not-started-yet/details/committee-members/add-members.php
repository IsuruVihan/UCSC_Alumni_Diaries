<link rel='stylesheet' href='../../../../../assets/styles/not-started-yet-details-committee-members-add.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script src='../../../../../js/not-started-yet-details-committee-members-add.js'></script>

<div class='card banned'>
    <div class='filter'>
        <div class='col1'>
            <input class='input-field' type='text' placeholder='First Name'/>
            <input class='input-field' type='text' placeholder='Last Name'/>
            <select class='input-field'>
                <option value='All'>All</option>
                <option value='2018/2019'>2018/2019</option>
                <option value='2018/2019'>2019/2020</option>
                <option value='2018/2019'>2020/2021</option>
            </select>
        </div>
        <div class='col2'>
            <button class='filter-btn btn'>Filter</button>
        </div>
    </div>
    <div class='results'>
        <div class='result' onmouseover=DisplayButtons('add-1') onmouseout=HideButtons('add-1')>
            <p class='request-id'>FirstName</p>
            <p class='request-id'>LastName</p>
            <p class='request-id'>Batch</p>
            <div class='buttons' id='add-1'>
                <button class='add-btn btn'>Add</button>
            </div>
        </div>
    </div>
</div>