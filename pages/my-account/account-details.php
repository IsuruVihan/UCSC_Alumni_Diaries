<link rel='stylesheet' href='../../assets/styles/new-my-account.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
      
<div class='my-account'> 
    <div class='pic-section'>
        <div class='section-1'>
            <img src='../../assets/images/user-default.png' width='60%' class='user-pic' alt='user-pic'/>
            <button class='edit-pic-btn btn'>Edit Photo</button>
            <button class='remove-pic-btn btn'>Remove Photo</button>
        </div>
        <div class='section-2'>
            Account Type
        </div>
    </div>
    <div class='account-details'>
        <div class='title'>
            Account Details
        </div>
        <div class='container-1' id='container-1'>
            <div class='container-3'>
                <div class='section-3-1'>
                    <div class='first-last-name1'>
                        First Name
                    </div>
                    <div class='first-last-name1'>
                        Last Name
                    </div>
                </div>
                <div class='section-3'>
                    <div class='first-last-name'>
                        First Name
                    </div>
                    <div class='first-last-name'>
                        Last Name
                    </div>
                </div>
                <div class='section-4-1'>
                    Full Name
                </div>
                <div class='section-4'>
                    Full Name
                </div>
                <div class='section-4-1'>
                    Gender
                </div>
                <div class='section-4'>
                    Gender
                </div>
                <div class='section-4-1'>
                    NIC
                </div>
                <div class='section-4'>
                    NIC
                </div>
                <div class='section-4-1'>
                    Batch
                </div>
                <div class='section-4'>
                    Batch
                </div>
            </div>
            <div class='container-4'>
                <div class='section-4-1'>
                    Address
                </div>
                <div class='section-5'>
                    Address
                </div>
                <div class='section-4-1'>
                    Contact Number
                </div>
                <div class='section-4'>
                    Contact Number
                </div>
                <div class='section-4-1'>
                    Email
                </div>
                <div class='section-4'>
                    Email
                </div>
            </div>
        </div>
        <div class='container-2' id='container-2'>
            <button class='edit-details-btn btn' id='edit-btn'>Edit Details</button>
        </div>
        <div class='container-5' id='container-5'>
            <div class='container-3'>
                <div class='section-3-1'>
                    <div class='first-last-name1'>
                        First Name
                    </div>
                    <div class='first-last-name1'>
                        Last Name
                    </div>
                </div>
                <div class='section-3'>
                    <input class='input-first-last-name' type='text' placeholder='Enter First Name'/>
                    <input class='input-first-last-name' type='text' placeholder='Enter Last Name'/>
                </div>
                <div class='section-4-1'>
                    Full Name
                </div>
                <input class='input5' type='text' placeholder='Enter Full Name'/>
                <div class='section-4-1'>
                    Gender
                </div>
                <select class='input5'>
                    <option value="" disabled selected hidden>Enter Gender</option>
                    <option value='male'>Male</option>
                    <option value='female'>Female</option>
                </select>
                <div class='section-4-1'>
                    NIC
                </div>
                <input class='input5' type='text' placeholder='Enter NIC'/>
                <div class='section-4-1'>
                    Batch
                </div>
                <select class='input5'>
                    <option value="" disabled selected hidden>Select Batch</option>
                    <option value='2018/2019'>2018/2019</option>
                    <option value='2018/2019'>2019/2020</option>
                    <option value='2018/2019'>2020/2021</option>
                </select>
            </div>
            <div class='container-4'>
                <div class='section-4-1'>
                    Address
                </div>
                <textarea class='input6' id="w3review" name="w3review" rows="4" cols="50"
                          placeholder='Enter Address'></textarea>
                <div class='section-4-1'>
                    Contact Number
                </div>
                <input class='input5' type='text' placeholder='Enter Contact Naumber'/>
                <div class='section-4-1'>
                    Email
                </div>
                <input class='input5' type='text' placeholder='Enter Email Address'/>
            </div>
        </div>
        <div class='container-6' id='container-6'>
            <button class='submit-btn btn'>Submit</button>
            <button class='cancel-btn btn' id='cancel-btn'>Cancel</button>
        </div>
    </div>
</div>    

<script src='../../js/my-account.js'></script>