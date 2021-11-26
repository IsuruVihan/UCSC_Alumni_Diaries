<?php
    
    include('../../../db/db-conn.php');
    
    $Id = $_POST['Id'];
    
    $query = "SELECT Name, Description FROM projects WHERE Id='{$Id}'";
    $results = mysqli_query($conn, $query);
    
    $query2 = "SELECT Email FROM committeemembers WHERE ProjectId='{$Id}' AND Type='Member'";
    $results2 = mysqli_query($conn, $query2);
    
    $query4 = "SELECT Email FROM committeemembers WHERE ProjectId='{$Id}' AND Type='Coordinator'";
    $results4 = mysqli_query($conn, $query4);
    
    if (mysqli_num_rows($results) > 0) {
        while ($row = mysqli_fetch_assoc($results)) {
            echo "
                <div class='details-section-1'>
                    <a
                        id='l-1'
                        class='details-link-button details-clicked-button'
                        onclick=ClickLink('l-1')
                    >General</a>
                    <a
                        id='l-2'
                        class='details-link-button'
                        onclick=ClickLink('l-2')
                    >Committee members</a>
                    <a
                        id='l-3'
                        class='details-link-button'
                        onclick=ClickLink('l-3')
                    >Coordinator</a>
                </div>
                <div class='details-section-2'>
                    <div class='general' id='general'>
                        <div class='general-details-form' id='general-details-form'>
                            <label for='p-name' class='general-label'>Project name</label>
                            <input id='p-name' class='general-input' type='text' value='{$row['Name']}'>
                            <label for='p-description' class='general-label'>Project description</label>
                            <textarea class='general-input general-text-area' id='p-description'>{$row['Description']}
                            </textarea>
                            <div class='general-notice' id='general-notice'></div>
                            <div class='general-buttons'>
                                <button class='general-button general-save-btn' onclick=SaveChanges('{$Id}')>
                                    Save changes
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class='committee-members' id='committee-members'>
                        <div class='committee-members-section-1'>
                            <a
                                id='link-1'
                                class='committee-members-iframe-link committee-members-clicked-link'
                                onclick=ClickLinkCommittee('link-1')
                            >Committee</a>
                            <a
                                id='link-2'
                                class='committee-members-iframe-link'
                                onclick=ClickLinkCommittee('link-2')
                            >Add member</a>
                        </div>
                        <div class='committee-members-section-2'>
                            <div class='committee-card banned' id='committee-card'>
                                <div class='committee-filter' id='filter-committee-members'>
                                    <div class='committee-col1'>
                                        <input
                                            class='committee-input-field'
                                            type='text'
                                            placeholder='First Name'
                                            id='filter1-first-name'
                                        />
                                        <input
                                            class='committee-input-field'
                                            type='text'
                                            placeholder='Last Name'
                                            id='filter1-last-name'
                                        />
                                        <select id='filter1-batch' class='committee-input-field'>
                                            <option value='All'>All</option>
                                            <option value='2004/2005'>2004/2005</option>
                                            <option value='2005/2006'>2005/2006</option>
                                            <option value='2006/2007'>2006/2007</option>
                                            <option value='2007/2008'>2007/2008</option>
                                            <option value='2008/2009'>2008/2009</option>
                                            <option value='2009/2010'>2009/2010</option>
                                            <option value='2010/2011'>2010/2011</option>
                                            <option value='2011/2012'>2011/2012</option>
                                            <option value='2012/2013'>2012/2013</option>
                                            <option value='2013/2014'>2013/2014</option>
                                            <option value='2014/2015'>2014/2015</option>
                                            <option value='2015/2016'>2015/2016</option>
                                            <option value='2016/2017'>2016/2017</option>
                                            <option value='2017/2018'>2017/2018</option>
                                            <option value='2018/2019'>2018/2019</option>
                                            <option value='2019/2020'>2019/2020</option>
                                            <option value='2020/2021'>2020/2021</option>
                                            <option value='2021/2022'>2021/2022</option>
                                        </select>
                                    </div>
                                    <div class='committee-col2'>
                                        <button
                                            class='committee-filter-btn committee-btn'
                                            onclick=FilterCommittee('{$Id}')
                                        >Filter</button>
                                    </div>
                                </div>
                                <div class='committee-results' id='committee-results'>
            ";
            
            if (mysqli_num_rows($results2) > 0) {
                while ($row2 = mysqli_fetch_assoc($results2)) {
                    $query3 = "SELECT FirstName, LastName, Batch FROM registeredmembers WHERE Email='{$row2['Email']}'";
                    $results3 = mysqli_query($conn, $query3);
                    while ($row3 = mysqli_fetch_assoc($results3)) {
                        echo "
                                    <div
                                        class='committee-result'
                                        onmouseover=DisplayButtons('rem-{$row2['Email']}')
                                        onmouseout=HideButtons('rem-{$row2['Email']}')
                                    >
                                        <p class='request-id'>{$row3['FirstName']}</p>
                                        <p class='request-id'>{$row3['LastName']}</p>
                                        <p class='request-id'>{$row3['Batch']}</p>
                                        <div class='committee-buttons' id='rem-{$row2['Email']}'>
                                            <button class='committee-remove-btn committee-btn'>Remove</button>
                                        </div>
                                    </div>
                        ";
                    }
                }
            } else {
                echo "
                                    <div class='committee-result'>
                                        <p class='request-id'>No results</p>
                                    </div>
                ";
            }
            
            echo "
                                </div>
                            </div>
                            <div class='add-members-card banned' id='add-members-card'>
                                <div class='add-members-filter'>
                                    <div class='add-members-col1'>
                                        <input class='add-members-input-field' type='text' placeholder='First Name'/>
                                        <input class='add-members-input-field' type='text' placeholder='Last Name'/>
                                        <select class='add-members-input-field'>
                                            <option value='All'>All</option>
                                            <option value='2018/2019'>2018/2019</option>
                                            <option value='2018/2019'>2019/2020</option>
                                            <option value='2018/2019'>2020/2021</option>
                                        </select>
                                    </div>
                                    <div class='add-members-col2'>
                                        <button class='add-members-filter-btn add-members-btn'>Filter</button>
                                    </div>
                                </div>
                                <div class='add-members-results'>
                                    <div
                                        class='add-members-result'
                                        onmouseover=DisplayButtons('add-1')
                                        onmouseout=HideButtons('add-1')
                                    >
                                        <p class='request-id'>FirstName</p>
                                        <p class='request-id'>LastName</p>
                                        <p class='request-id'>Batch</p>
                                        <div class='add-members-buttons' id='add-1'>
                                            <button class='add-members-add-btn add-members-btn'>Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='coordinator' id='coordinator'>
                        <div class='coordinator-section-1'>
            ";
            
            if (mysqli_num_rows($results4) > 0) {
                while ($row4 = mysqli_fetch_assoc($results4)) {
                    $query5 = "
                        SELECT FirstName, LastName, Batch, PicSrc FROM registeredmembers WHERE Email='{$row4['Email']}'
                    ";
                    $results5 = mysqli_query($conn, $query5);
                    if (mysqli_num_rows($results5) > 0) {
                        while ($row5 = mysqli_fetch_assoc($results5)) {
                            echo "
                            <div class='coordinator-coord-pic'>
                        ";
                
                            if ($row5['PicSrc']==='user-default.png') {
                                echo "
                                <img src='../../../assets/images/user-default.png' alt='coord-pic' height='100%'/>
                            ";
                            } else {
                                echo "
                                <img src='{$row5['PicSrc']}' alt='coord-pic' height='100%'/>
                            ";
                            }
                
                            echo "
                            </div>
                            <div class='coordinator-coord-details'>
                                <div class='coordinator-row-1'>
                                    <div class='coordinator-set'>
                                        <label>First Name</label>
                                        <div class='coordinator-data-field'>{$row5['FirstName']}</div>
                                    </div>
                                    <div class='coordinator-set'>
                                        <label>Last Name</label>
                                        <div class='coordinator-data-field'>{$row5['LastName']}</div>
                                    </div>
                                    <div class='coordinator-set'>
                                        <label>Batch</label>
                                        <div class='coordinator-data-field'>{$row5['Batch']}</div>
                                    </div>
                                </div>
                            </div>
                            ";
                        }
                    }
                }
            } else {
                echo "
                            <div class='coordinator-empty'>
                                Select a coordinator for the project
                            </div>
                ";
            }
            
            echo "
                        </div>
                        <div class='coordinator-section-2'>
                            <div class='coordinator-filter'>
                                <div class='coordinator-col1'>
                                    <input class='coordinator-input-field' type='text' placeholder='First Name'/>
                                    <input class='coordinator-input-field' type='text' placeholder='Last Name'/>
                                    <select class='coordinator-input-field'>
                                        <option value='All'>All</option>
                                        <option value='2018/2019'>2018/2019</option>
                                        <option value='2018/2019'>2019/2020</option>
                                        <option value='2018/2019'>2020/2021</option>
                                    </select>
                                </div>
                                <div class='coordinator-col2'>
                                    <button class='coordinator-filter-btn coordinator-btn'>Filter</button>
                                </div>
                            </div>
                            <div class='coordinator-results'>
                                <div
                                    class='coordinator-result'
                                    onmouseover=DisplayButtons('select-1')
                                    onmouseout=HideButtons('select-1')
                                >
                                    <p class='request-id'>FirstName</p>
                                    <p class='request-id'>LastName</p>
                                    <p class='request-id'>Batch</p>
                                    <div class='coordinator-buttons' id='select-1'>
                                        <button class='coordinator-add-btn coordinator-btn'>Select</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
    }