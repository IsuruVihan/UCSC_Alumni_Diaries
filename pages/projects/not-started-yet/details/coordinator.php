<link rel='stylesheet' href='../../../../assets/styles/not-started-yet-details-coordinator.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script src='../../../../js/not-started-yet-details-coordinator.js'></script>

<div class='coordinator'>
    <div class='section-1'>
        <div class='coord-pic'>
            <img src='../../../../assets/images/user-default.png' alt='coord-pic' height='100%'/>
        </div>
        <div class='coord-details'>
            <div class='row-1'>
                <div class='set'>
                    <label>First Name</label>
                    <div class='data-field'></div>
                </div>
                <div class='set'>
                    <label>Last Name</label>
                    <div class='data-field'></div>
                </div>
                <div class='set'>
                    <label>Batch</label>
                    <div class='data-field'></div>
                </div>
            </div>
        </div>
    </div>
    <div class='section-2'>
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
            <div class='result' onmouseover=DisplayButtons('select-1') onmouseout=HideButtons('select-1')>
                <p class='request-id'>FirstName</p>
                <p class='request-id'>LastName</p>
                <p class='request-id'>Batch</p>
                <div class='buttons' id='select-1'>
                    <button class='add-btn btn'>Select</button>
                </div>
            </div>
        </div>
    </div>
</div>