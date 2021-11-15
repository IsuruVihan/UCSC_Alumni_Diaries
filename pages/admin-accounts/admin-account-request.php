<link rel="stylesheet" href="../../assets/styles/admin-accounts-1.css">
<script src='../../js/admin-accounts.js'></script>


<div class='card account-requests'>
        <div class='title'>
            Account Requests
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
            <div class='result' onmouseover="DisplayButtons('acc-req-1')" onmouseout="HideButtons('acc-req-1')">
                <p class='request-id'>RequestID 1</p>
                <div class='buttons' id='acc-req-1'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('acc-req-2')" onmouseout="HideButtons('acc-req-2')">
                <p class='request-id'>RequestID 2</p>
                <div class='buttons' id='acc-req-2'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('acc-req-3')" onmouseout="HideButtons('acc-req-3')">
                <p class='request-id'>RequestID 3</p>
                <div class='buttons' id='acc-req-3'>
                    <button class='view-btn btn' id='acc-req-3'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('acc-req-4')" onmouseout="HideButtons('acc-req-4')">
                <p class='request-id'>RequestID 4</p>
                <div class='buttons' id='acc-req-4'>
                    <button class='view-btn btn' id='acc-req-4'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('acc-req-5')" onmouseout="HideButtons('acc-req-5')">
                <p class='request-id'>RequestID 5</p>
                <div class='buttons' id='acc-req-5'>
                    <button class='view-btn btn' id='acc-req-5'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('acc-req-6')" onmouseout="HideButtons('acc-req-6')">
                <p class='request-id'>RequestID 6</p>
                <div class='buttons' id='acc-req-6'>
                    <button class='view-btn btn' id='acc-req-6'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('acc-req-7')" onmouseout="HideButtons('acc-req-7')">
                <p class='request-id'>RequestID 7</p>
                <div class='buttons' id='acc-req-7'>
                    <button class='view-btn btn' id='acc-req-7'>View</button>
                </div>
            </div>
        </div>
    </div>