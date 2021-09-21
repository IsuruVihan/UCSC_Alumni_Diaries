<link rel='stylesheet' href='../assets/styles/ongoing_projects.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<script src='../js/ongoing-projects.js'></script>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='projects.php'>Projects</a> / Ongoing
    </p>
    <p class='main-title'>
        <i class="fas fa-play-circle"></i> Ongoing
    </p>
</div>
<div class='ongoing-projects'>
    <div class='card projects-list'>
        <div class='title'>
            Related Ongoing Projects
        </div>
        <div class='filter'>
            <div class='col1'>
                <input class='input-field date-field' type='date' placeholder='First Name'/>
                to
                <input class='input-field date-field' type='date' placeholder='Last Name'/>
            </div>
            <div class='col2'>
                <label>My Projects</label>
                <input class='input-field' type='checkbox'>
            </div>
            <div class='col3'>
                <button class='filter-btn btn'>Filter</button>
            </div>
        </div>
        <div class='results'>
            <div class='result' onmouseover="DisplayButtons('p-list-1')" onmouseout="HideButtons('p-list-1')">
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-1'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('p-list-2')" onmouseout="HideButtons('p-list-2')">
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-2'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('p-list-3')" onmouseout="HideButtons('p-list-3')">
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-3'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('p-list-4')" onmouseout="HideButtons('p-list-4')">
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-4'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('p-list-5')" onmouseout="HideButtons('p-list-5')">
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-5'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('p-list-6')" onmouseout="HideButtons('p-list-6')">
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-6'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('p-list-7')" onmouseout="HideButtons('p-list-7')">
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-7'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
            <div class='result' onmouseover="DisplayButtons('p-list-8')" onmouseout="HideButtons('p-list-8')">
                <p class='request-id'>ProjectId</p>
                <p class='request-id'>ProjectName</p>
                <div class='buttons' id='p-list-8'>
                    <button class='view-btn btn'>View</button>
                </div>
            </div>
        </div>
    </div>
    <div class='card project-details'>
        <div class='title project-name-div' id='project-name-div'>
            Project Name
        </div>
        <!--        <div class='project-status'>-->
        <!--            Not Started Yet-->
        <!--        </div>-->
        <div class='project-description' id='project-description'>
            Project description comes here...
        </div>
        <div class='coord'>
            <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
            <p class='coord-fname'>First Name</p>
            <p class='coord-lname'>Last Name</p>
        </div>
        <div class='start-delete'>
            <button class='start-btn btn'>Complete Project</button>
            <button class='delete-btn btn'>Close Project</button>
        </div>
    </div>
    <div class='card project-committee' id='committee-members'>
        <div class='title'>
            Committee Members
        </div>
        <div class='results'>
            <div class='result2'>
                <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
                <div class='fname'>First Name</div>
                <div class='lname'>Last Name</div>
            </div>
            <div class='result2'>
                <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
                <div class='fname'>First Name</div>
                <div class='lname'>Last Name</div>
            </div>
            <div class='result2'>
                <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
                <div class='fname'>First Name</div>
                <div class='lname'>Last Name</div>
            </div>
            <div class='result2'>
                <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
                <div class='fname'>First Name</div>
                <div class='lname'>Last Name</div>
            </div>
            <div class='result2'>
                <img src='../assets/images/user-default.png' height='100%' alt='user' class='coord-pic'/>
                <div class='fname'>First Name</div>
                <div class='lname'>Last Name</div>
            </div>
        </div>
    </div>
    <div class='card cash'>
        <div class='title'>
            Cash
        </div>
        <div class='summary'>
            <div class='available-cash-div'>
                Available (Rs.) <br/>
                <div class='available-cash-input'>10000</div>
            </div>
            <div class='spent-cash-div'>
                Spent (Rs.) <br/>
                <div class='spent-cash-input'>4500</div>
            </div>
        </div>
        <div class='transaction'>
            <div class='row-1'>
                <input type='text' placeholder='Rs.' class='amount-input input-field'/>
                <input type='text' placeholder='Description' class='description-input input-field'/>
                <input type='file' class='bill-input' id='bill-input' style='display: none'/>
                <button onclick="document.getElementById('bill-input').click()" class='btn bill-btn'>Bill</button>
            </div>
            <div class='row-2'>
                <button class='spend-btn btn'>Spend</button>
            </div>
        </div>
        <div class='gen-report-div'>
            <button class='btn gen-rep-btn'>Generate Report</button>
        </div>
    </div>
    <div class='card items'>
        <div class='title'>
            Items
        </div>
        <div class='results2'>
            <div class='result3'>
                <div class='item-details'>
                    <div class='detail-field'>Item Name</div>
                    <div class='detail-field'>Available Qty</div>
                    <div class='detail-field'>Spent Qty</div>
                </div>
                <div class='transaction'>
                    <div class='row-1'>
                        <input type='text' placeholder='Qty' class='amount-input input-field'/>
                        <input type='text' placeholder='Description' class='description-input input-field'/>
                        <input type='file' class='bill-input' id='bill-input' style='display: none'/>
                        <button onclick="document.getElementById('bill-input').click()" class='btn bill-btn'>Bill
                        </button>
                    </div>
                    <div class='row-2'>
                        <button class='spend-btn btn'>Spend</button>
                    </div>
                </div>
            </div>
            <div class='result3'>
                <div class='item-details'>
                    <div class='detail-field'>Item Name</div>
                    <div class='detail-field'>Available Qty</div>
                    <div class='detail-field'>Spent Qty</div>
                </div>
                <div class='transaction'>
                    <div class='row-1'>
                        <input type='text' placeholder='Qty' class='amount-input input-field'/>
                        <input type='text' placeholder='Description' class='description-input input-field'/>
                        <input type='file' class='bill-input' id='bill-input' style='display: none'/>
                        <button onclick="document.getElementById('bill-input').click()" class='btn bill-btn'>Bill
                        </button>
                    </div>
                    <div class='row-2'>
                        <button class='spend-btn btn'>Spend</button>
                    </div>
                </div>
            </div>
        </div>
        <div class='gen-report-div'>
            <button class='btn gen-rep-btn'>Generate Report</button>
        </div>
    </div>
    <div class='card cash-spent'>
        <div class='title'>
            Cash Spent
        </div>
        <div class='results'>
            <div class='result4'>
                <div>Amount (Rs.)</div>
                <button class='btn bill-btn'>Bill</button>
            </div>
            <div class='result4'>
                <div>Amount (Rs.)</div>
                <button class='btn bill-btn'>Bill</button>
            </div>
            <div class='result4'>
                <div>Amount (Rs.)</div>
                <button class='btn bill-btn'>Bill</button>
            </div>
            <div class='result4'>
                <div>Amount (Rs.)</div>
                <button class='btn bill-btn'>Bill</button>
            </div>
            <div class='result4'>
                <div>Amount (Rs.)</div>
                <button class='btn bill-btn'>Bill</button>
            </div>
        </div>
        <div class='gen-report-div'>
            <button class='btn gen-rep-btn'>Generate Report</button>
        </div>
    </div>
    <div class='card items-spent'>
        <div class='title'>
            Items Spent
        </div>
        <div class='results'>
            <div class='result4'>
                <div>ItemName</div>
                <div>Qty</div>
                <button class='btn bill-btn'>Bill</button>
            </div>
            <div class='result4'>
                <div>ItemName</div>
                <div>Qty</div>
                <button class='btn bill-btn'>Bill</button>
            </div>
            <div class='result4'>
                <div>ItemName</div>
                <div>Qty</div>
                <button class='btn bill-btn'>Bill</button>
            </div>
            <div class='result4'>
                <div>ItemName</div>
                <div>Qty</div>
                <button class='btn bill-btn'>Bill</button>
            </div>
            <div class='result4'>
                <div>ItemName</div>
                <div>Qty</div>
                <button class='btn bill-btn'>Bill</button>
            </div>
        </div>
        <div class='gen-report-div'>
            <button class='btn gen-rep-btn'>Generate Report</button>
        </div>
    </div>
    <div class='card committee-chat'>
        <div class='title'>
            Committee Chat
        </div>
        <div class='results3'>
            <div class='sent-message-line'>
                <div class='sent-message'>
                    <div class='content'>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                        words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32
                        and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                        written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
                        section 1.10.32.
                    </div>
                    <div class='time'>
                        09:28
                    </div>
                </div>
            </div>
            <div class='received-message-line'>
                <div class='received-message'>
                    <div class='sender-name'>
                        Isuru
                    </div>
                    <div class='content'>
                        Hello Machan
                    </div>
                    <div class='time'>
                        09:28
                    </div>
                </div>
            </div>
            <div class='sent-message-line'>
                <div class='sent-message'>
                    <div class='content'>
                        Hello Machan
                    </div>
                    <div class='time'>
                        09:28
                    </div>
                </div>
            </div>
            <div class='received-message-line'>
                <div class='received-message'>
                    <div class='sender-name'>
                        Isuru
                    </div>
                    <div class='content'>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                        Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                        words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32
                        and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,
                        written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                        Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
                        section 1.10.32.
                    </div>
                    <div class='time'>
                        09:28
                    </div>
                </div>
            </div>
            <div class='sent-message-line'>
                <div class='sent-message'>
                    <div class='content'>
                        Hello Machan
                    </div>
                    <div class='time'>
                        09:28
                    </div>
                </div>
            </div>
            <div class='sent-message-line'>
                <div class='sent-message'>
                    <div class='content'>
                        Hello Machan
                    </div>
                    <div class='time'>
                        09:28
                    </div>
                </div>
            </div>
            <div class='received-message-line'>
                <div class='received-message'>
                    <div class='sender-name'>
                        Isuru
                    </div>
                    <div class='content'>
                        Hello Machan
                    </div>
                    <div class='time'>
                        09:28
                    </div>
                </div>
            </div>
        </div>
        <div class='create-message-div'>
            <textarea class='chat-message'></textarea>
            <div class='button-set'>
                <i class='fas fa-paper-plane chat-icon send-icon'></i>
                <i class='fas fa-paperclip chat-icon attach-icon'></i>
                <i class='fas fa-times-circle chat-icon clear-icon'></i>
            </div>
        </div>
    </div>
</div>

<?php include('../components/footer.php'); ?>