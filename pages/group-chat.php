<link rel='stylesheet' href='../assets/styles/group-chat.css'/>
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<?php include('../components/header.php'); ?>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        <a href='admin.php'>Admin</a> / Group Chat
    </p>
    <p class='main-title'>
        <i class="fas fa-comments"></i> Group Chat
    </p>
</div>  
    <div class='group-chat-grid'>
            <div class='card chat-list'>
                        <div class='title'>Chat List</div>    
                    <div class='filter'>
                        <div class='box-01'>
                               <input class='input-field' type='text' placeholder='First Name'/>
                                <input class='input-field' type='text' placeholder='Last Name'/>
                            <select class='input-field'>
                                <option value='All'>All</option>
                                <option value='2004/2005'>2004/2005</option>
                                <option value='2005/2006'>2005/2006</option>
                                <option value='2006/2007'>2006/2007</option>
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
                                <option value='2022/2023'>2022/2023</option>
                            </select>
                        </div> 
                         <div class='box-02'> 
                           <button class='filter-btn btn'>Filter</button>   
                         </div>  
                    </div>
                <div class='chats'>
                    <div class='list-items'>
                            <img src='../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic' >
                        <div class='name-buttons'>
                                <div class='name'> Name</div>
                                <div class='buttons'>
                                    <button class='view-btn btn'>View</button>
                                    <button class='delete-btn btn'>Delete</button> 
                                </div>
                        </div>
                    </div>
                    <div class='list-items'>
                          <img src='../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic' >
                            <div class='name-buttons'>
                                   <div class='name'> Name</div>
                                    <div class='buttons'>
                                        <button class='view-btn btn'>View</button>
                                        <button class='delete-btn btn'>Delete</button> 
                                    </div>
                            </div>
                    </div>
                    <div class='list-items'>
                        <img src='../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic' >
                        <div class='name-buttons'>
                                <div class='name'> Name</div>
                                <div class='buttons'>
                                    <button class='view-btn btn'>View</button>
                                    <button class='delete-btn btn'>Delete</button> 
                                </div>
                        </div>
                    </div>
                    <div class='list-items'>
                        <img src='../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic' >
                        <div class='name-buttons'>
                                <div class='name'> Name</div>
                                <div class='buttons'>
                                    <button class='view-btn btn'>View</button>
                                    <button class='delete-btn btn'>Delete</button> 
                                </div>
                        </div>
                    </div>
                    <div class='list-items'>
                        <img src='../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic' >
                        <div class='name-buttons'>
                                <div class='name'> Name</div>
                                <div class='buttons'>
                                    <button class='view-btn btn'>View</button>
                                    <button class='delete-btn btn'>Delete</button> 
                                </div>
                        </div>
                    </div>
                    <div class='list-items'>
                            <img src='../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic' >
                        <div class='name-buttons'>
                                <div class='name'> Name</div>
                                <div class='buttons'>
                                    <button class='view-btn btn'>View</button>
                                    <button class='delete-btn btn'>Delete</button> 
                                </div>
                        </div>
                    </div>
                    <div class='list-items'>
                            <img src='../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic' >
                        <div class='name-buttons'>
                                <div class='name'> Name</div>
                                <div class='buttons'>
                                    <button class='view-btn btn'>View</button>
                                    <button class='delete-btn btn'>Delete</button> 
                                </div>
                        </div>
                    </div>
                    <div class='list-items'>
                            <img src='../assets/images/user-default.png' width='23%' height='' class='user-pic' alt='user-pic' >
                        <div class='name-buttons'>
                                <div class='name'> Name</div>
                                <div class='buttons'>
                                    <button class='view-btn btn'>View</button>
                                    <button class='delete-btn btn'>Delete</button> 
                                </div>
                        </div>
                    </div>      
                </div>         
            </div>
            <div class='chat-wall'>
                <div class='row-01'>
                   <img src='../assets/images/user-default.png' width='9%' class='group-pic' alt='user-pic' >
                   <div class='top-window'>    
                        <div class='group-name'> Group Name</div>
                        <button class='Edit-btn btn'>Edit</button> 
                    </div>      
                </div>
                        <div class='row-02'></div>
                        <div class='row-03'></div>
                <div class='row-04'>
                    <div class='participants'>
                      <div class='title-02'>Participants</div> 
                         <div class='Participants-filter'>
                                    <div class='p_box-01'>
                                            <input class='participants-field' type='text' placeholder='First Name'/>
                                            <input class='participants-field' type='text' placeholder='Last Name'/>
                                        <select class='participants-field'>
                                            <option value='All'>All</option>
                                            <option value='2004/2005'>2004/2005</option>
                                            <option value='2005/2006'>2005/2006</option>
                                            <option value='2006/2007'>2006/2007</option>
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
                                            <option value='2022/2023'>2022/2023</option>
                
                                        </select>
                                    </div> 
                                        <div class='box-02'> 
                                        <button class='filter-btn btn'>Filter</button>   
                                    </div>  
                                </div>

                             <div class='participants-list'>
                               <div class='list'> 
                                 <img src='../assets/images/user-default.png' width='9%' height='' class='participants-pic' alt='user-pic' >
                               <div class='p-name-buttons'>
                               <div class='p-first-name'>First Name</div>
                               <div class='p-last-name'>last Name</div>
                               </div>
                               <button class='remove-btn btn'>Remove</button> 
                            
                            </div>
                               <div class='list'>
                               <img src='../assets/images/user-default.png' width='9%' height='' class='participants-pic' alt='user-pic' >
                               <div class='p-name-buttons'>
                               <div class='p-first-name'>First Name</div>
                               <div class='p-last-name'>last Name</div>
                               </div>
                               <button class='remove-btn btn'>Remove</button> 
                               </div>
                               <div class='list'>
                               <img src='../assets/images/user-default.png' width='9%' height='' class='participants-pic' alt='user-pic' >
                               <div class='p-name-buttons'>
                               <div class='p-first-name'>First Name</div>
                               <div class='p-last-name'>last Name</div>
                               </div>
                               <button class='remove-btn btn'>Remove</button> 
                               </div>
                               <div class='list'>
                               <img src='../assets/images/user-default.png' width='9%' height='' class='participants-pic' alt='user-pic' >
                               <div class='p-name-buttons'>
                               <div class='p-first-name'>First Name</div>
                               <div class='p-last-name'>last Name</div>
                               </div>
                               <button class='remove-btn btn'>Remove</button> 
                               </div>
                               <div class='list'>
                               <img src='../assets/images/user-default.png' width='9%' height='' class='participants-pic' alt='user-pic' >
                               <div class='p-name-buttons'>
                               <div class='p-first-name'>First Name</div>
                               <div class='p-last-name'>last Name</div>
                               </div>
                               <button class='remove-btn btn'>Remove</button> 
                               </div>
                               <div class='list'>
                               <img src='../assets/images/user-default.png' width='9%' height='' class='participants-pic' alt='user-pic' >
                               <div class='p-name-buttons'>
                               <div class='p-first-name'>First Name</div>
                               <div class='p-last-name'>last Name</div>
                               </div>
                               <button class='remove-btn btn'>Remove</button> 

                               </div>
                               
                       </div>   

</div>
                    </div>    
                 </div>
                      
            
            <div class='card available-users'>
            <div class='title'>Available Users</div>
                                
                
                                <div class='filter'>
                                    <div class='box-01'>
                                            <input class='input-field' type='text' placeholder='First Name'/>
                                            <input class='input-field' type='text' placeholder='Last Name'/>
                                        <select class='input-field'>
                                            <option value='All'>All</option>
                                            <option value='2004/2005'>2004/2005</option>
                                            <option value='2005/2006'>2005/2006</option>
                                            <option value='2006/2007'>2006/2007</option>
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
                                            <option value='2022/2023'>2022/2023</option>
                
                                        </select>
                                    </div> 
                                        <div class='box-02'> 
                                        <button class='filter-btn btn'>Filter</button>   
                                    </div>  
                                </div>
                           <div class='chats'>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                               <div class='list-items'>chat</div>
                       </div>    
</div> 
    <div class='create-group'>
</div> 
    <div class='edit-group'>
</div> 
 
</div>


<?php include('../components/footer.php'); ?>
