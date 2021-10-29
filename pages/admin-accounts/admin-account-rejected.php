<link rel='stylesheet' href='./admin-accounts-1.css'>
<script src='../../js/admin-accounts.js'></script>

    <div class='card rejected-requests'>
        <div class='title'>
            Rejected Requests
        </div>
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
            <div class='result' onmouseover="DisplayButtons('rej-req-1')" onmouseout="HideButtons('rej-req-1')">
                <p class='request-id'>RequestID 1</p>
                <div class='buttons' id='rej-req-1'>
                    <button class='view-btn btn'>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('rej-req-2')" onmouseout="HideButtons('rej-req-2')">
                <p class='request-id'>RequestID 2</p>
                <div class='buttons' id='rej-req-2'>
                    <button class='view-btn btn'>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('rej-req-3')" onmouseout="HideButtons('rej-req-3')">
                <p class='request-id'>RequestID 3</p>
                <div class='buttons' id='rej-req-3'>
                    <button class='view-btn btn'>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('rej-req-4')" onmouseout="HideButtons('rej-req-4')">
                <p class='request-id'>RequestID 4</p>
                <div class='buttons' id='rej-req-4'>
                    <button class='view-btn btn'>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('rej-req-5')" onmouseout="HideButtons('rej-req-5')">
                <p class='request-id'>RequestID 5</p>
                <div class='buttons' id='rej-req-5'>
                    <button class='view-btn btn'>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('rej-req-6')" onmouseout="HideButtons('rej-req-6')">
                <p class='request-id'>RequestID 6</p>
                <div class='buttons' id='rej-req-6'>
                    <button class='view-btn btn'>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('rej-req-7')" onmouseout="HideButtons('rej-req-7')">
                <p class='request-id'>RequestID 7</p>
                <div class='buttons' id='rej-req-7'>
                    <button class='view-btn btn'>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('rej-req-8')" onmouseout="HideButtons('rej-req-8')">
                <p class='request-id'>RequestID 8</p>
                <div class='buttons' id='rej-req-8'>
                    <button class='view-btn btn'>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('rej-req-9')" onmouseout="HideButtons('rej-req-9')">
                <p class='request-id'>RequestID 9</p>
                <div class='buttons' id='rej-req-9'>
                    <button class='view-btn btn'>View</button>
                    <button class='delete-btn btn'>Delete</button>
                </div>
            </div>
        </div>
    </div>