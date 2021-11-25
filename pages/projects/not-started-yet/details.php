<link rel='stylesheet' href='../../../assets/styles/not-started-yet-details.css'/>
<link rel='stylesheet' href='../../../assets/styles/not-started-yet-details-general.css'/>
<link rel='stylesheet' href='../../../assets/styles/not-started-yet-details-committee-members.css'/>
<link rel='stylesheet' href='../../../assets/styles/not-started-yet-details-coordinator.css'/>
<link rel='stylesheet' href='../../../assets/styles/not-started-yet-details-committee-members-committee.css'/>
<link rel='stylesheet' href='../../../assets/styles/not-started-yet-details-committee-members-add.css'/>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>

<script>
    $(document).ready(() => {
        $('#details-results').load("../../../server/projects/not-started-yet/render-list.php");
        $('#details-filter').submit((event) => {
            event.preventDefault();
            
            const date1 = $('#filter-date1').val();
            const date2 = $('#filter-date2').val();
            const name = $('#filter-name').val();
            const id = $('#filter-id').val();
            const my = $('#filter-my').is(":checked");
            
            $('#details-results').load("../../../server/projects/not-started-yet/filter.php", {
                Date1: date1,
                Date2: date2,
                Name: name,
                Id: id,
                My: my
            });
        });
    });
    
    const ViewProjectDetails = (id) => {
        $('#left-section').load("../../../server/projects/not-started-yet/view-details.php", {
            Id: id
        });
    }

    const ClickLink = (id) => {
        const link1 = document.getElementById('l-1');
        const link2 = document.getElementById('l-2');
        const link3 = document.getElementById('l-3');

        const general = document.getElementById('general');
        const committeeMembers =document.getElementById('committee-members');
        const coordinator = document.getElementById('coordinator');

        document.getElementById(id).classList.add('details-clicked-button');
        if (id==='l-1') {
            link2.classList.remove('details-clicked-button');
            link3.classList.remove('details-clicked-button');
            general.style.display = 'block';
            committeeMembers.style.display = 'none';
            coordinator.style.display = 'none';
        } else if (id==='l-2') {
            link1.classList.remove('details-clicked-button');
            link3.classList.remove('details-clicked-button');
            general.style.display = 'none';
            committeeMembers.style.display = 'grid';
            coordinator.style.display = 'none';
        } else if (id==='l-3') {
            link1.classList.remove('details-clicked-button');
            link2.classList.remove('details-clicked-button');
            general.style.display = 'none';
            committeeMembers.style.display = 'none';
            coordinator.style.display = 'grid';
        }
    }
    const ClickLinkCommittee = (id) => {
        document.getElementById(id).classList.add('committee-members-clicked-link');
        const committee = document.getElementById('committee-card');
        const addMembers = document.getElementById('add-members-card');
        if (id==='link-1') {
            document.getElementById('link-2').classList.remove('committee-members-clicked-link');
            committee.style.display = 'flex';
            addMembers.style.display = 'none';
        } else if (id==='link-2') {
            document.getElementById('link-1').classList.remove('committee-members-clicked-link');
            committee.style.display = 'none';
            addMembers.style.display = 'flex';
        }
    }
    
    const SaveChanges = (id) => {
        let isComplete = true;

        $('#p-name').removeClass('input-error');
        $('#p-description').removeClass('input-error');
        $('#p-name').removeClass('input-ok');
        $('#p-description').removeClass('input-ok');

        const name = $('#p-name').val();
        const description = $('#p-description').val();

        if (name === '') {
            $('#p-name').addClass('input-error');
            isComplete = false;
        } else {
            $('#p-name').addClass('input-ok');
        }
        if (description === '') {
            $('#p-description').addClass('input-error');
            isComplete = false;
        } else {
            $('#p-description').addClass('input-ok');
        }

        if (isComplete) {
            $('#p-name').removeClass('input-ok');
            $('#p-name').removeClass('input-error');
            $('#p-description').removeClass('input-ok');
            $('#p-description').removeClass('input-error');
        }

        $('#general-notice').load('../../../server/projects/not-started-yet/save-info.php', {
            Id: id,
            Name: name,
            Description: description
        });
    }
</script>

<!--<script>-->
<!--    $(document).ready(() => {-->
<!--        $('#general-details-form').submit((event) => {-->
<!--            event.preventDefault();-->
<!--            let isComplete = true;-->
<!---->
<!--            $('#p-name, #p-description').removeClass('input-error, input-ok');-->
<!---->
<!--            const name = $('#p-name').val();-->
<!--            const description = $('#p-description').val();-->
<!---->
<!--            if (name === '') {-->
<!--                $('#p-name').addClass('input-error');-->
<!--                isComplete = false;-->
<!--            } else {-->
<!--                $('#p-name').addClass('input-ok');-->
<!--            }-->
<!--            if (description === '') {-->
<!--                $('#p-description').addClass('input-error');-->
<!--                isComplete = false;-->
<!--            } else {-->
<!--                $('#p-description').addClass('input-ok');-->
<!--            }-->
<!---->
<!--            if (isComplete) {-->
<!--                $('#p-name').val('');-->
<!--                $('#p-name').removeClass('input-ok');-->
<!--                $('#p-name').removeClass('input-error');-->
<!--                $('#p-description').val('');-->
<!--                $('#p-description').removeClass('input-ok');-->
<!--                $('#p-description').removeClass('input-error');-->
<!--            }-->
<!---->
<!--            $('#general-notice').load('../../../server/projects/not-started-yet/save-info.php', {-->
<!--                Name: name,-->
<!--                Description: description-->
<!--            }, setTimeout(() => {-->
<!--                location.reload();-->
<!--            }, 2000));-->
<!--        });-->
<!--    });-->
<!---->
<!--    const ClickLink = (id) => {-->
<!--        const link1 = document.getElementById('l-1');-->
<!--        const link2 = document.getElementById('l-2');-->
<!--        const link3 = document.getElementById('l-3');-->
<!---->
<!--        const general = document.getElementById('general');-->
<!--        const committeeMembers =document.getElementById('committee-members');-->
<!--        const coordinator = document.getElementById('coordinator');-->
<!---->
<!--        document.getElementById(id).classList.add('details-clicked-button');-->
<!--        if (id==='l-1') {-->
<!--            link2.classList.remove('details-clicked-button');-->
<!--            link3.classList.remove('details-clicked-button');-->
<!--            general.style.display = 'block';-->
<!--            committeeMembers.style.display = 'none';-->
<!--            coordinator.style.display = 'none';-->
<!--        } else if (id==='l-2') {-->
<!--            link1.classList.remove('details-clicked-button');-->
<!--            link3.classList.remove('details-clicked-button');-->
<!--            general.style.display = 'none';-->
<!--            committeeMembers.style.display = 'grid';-->
<!--            coordinator.style.display = 'none';-->
<!--        } else if (id==='l-3') {-->
<!--            link1.classList.remove('details-clicked-button');-->
<!--            link2.classList.remove('details-clicked-button');-->
<!--            general.style.display = 'none';-->
<!--            committeeMembers.style.display = 'none';-->
<!--            coordinator.style.display = 'grid';-->
<!--        }-->
<!--    }-->
<!--    const ClickLinkCommittee = (id) => {-->
<!--        document.getElementById(id).classList.add('committee-members-clicked-link');-->
<!--        const committee = document.getElementById('committee-card');-->
<!--        const addMembers = document.getElementById('add-members-card');-->
<!--        if (id==='link-1') {-->
<!--            document.getElementById('link-2').classList.remove('committee-members-clicked-link');-->
<!--            committee.style.display = 'flex';-->
<!--            addMembers.style.display = 'none';-->
<!--        } else if (id==='link-2') {-->
<!--            document.getElementById('link-1').classList.remove('committee-members-clicked-link');-->
<!--            committee.style.display = 'none';-->
<!--            addMembers.style.display = 'flex';-->
<!--        }-->
<!--    }-->
<!--</script>-->

<div class='details'>
    <div class='details-section-3'>
        <div class='details-title'>
            Projects list
        </div>
        <form class='details-filter' id='details-filter'>
            <div class='details-col1'>
                <input class='details-input-field details-date-field' type='date' id='filter-date1'/>
                to
                <input class='details-input-field details-date-field' type='date' id='filter-date2'/>
            </div>
            <div class='details-col3'>
                <input
                    class='details-input-field details-date-field'
                    type='text'
                    placeholder='Project Name'
                    id='filter-name'
                />
                <input
                    class='details-input-field details-date-field'
                    type='text'
                    placeholder='Project Id'
                    id='filter-id'
                />
            </div>
            <div class='details-col2'>
                <label>My Projects</label>
                <input class='details-input-field' type='checkbox' id='filter-my'>
            </div>
            <div class='details-col4'>
                <input type='submit' class='details-filter-btn details-btn' value='Filter' />
            </div>
        </form>
        <div class='details-results' id='details-results'></div>
    </div>
    <div class='left-section' id='left-section'>
        
        
<!--        <div class='details-section-1'>-->
<!--            <a-->
<!--                id='l-1'-->
<!--                class='details-link-button details-clicked-button'-->
<!--                onclick=ClickLink('l-1')-->
<!--            >General</a>-->
<!--            <a-->
<!--                id='l-2'-->
<!--                class='details-link-button'-->
<!--                onclick=ClickLink('l-2')-->
<!--            >Committee members</a>-->
<!--            <a-->
<!--                id='l-3'-->
<!--                class='details-link-button'-->
<!--                onclick=ClickLink('l-3')-->
<!--            >Coordinator</a>-->
<!--        </div>-->
<!--        <div class='details-section-2'>-->
<!--            <div class='general' id='general'>-->
<!--                <form class='general-details-form'>-->
<!--                    <label for='p-name' class='general-label'>Project name</label>-->
<!--                    <input id='p-name' class='general-input' type='text'/>-->
<!--                    <label for='p-description' class='general-label'>Project description</label>-->
<!--                    <textarea class='general-input general-text-area' id='p-description'></textarea>-->
<!--                    <div class='general-notice'>-->
<!--                        * You have unsaved changes.-->
<!--                    </div>-->
<!--                    <div class='general-buttons'>-->
<!--                        <input class='general-button general-save-btn' type='submit' value='Save changes' />-->
<!--                        <button class='general-button general-cancel-btn'>Cancel</button>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--            <div class='committee-members' id='committee-members'>-->
<!--                <div class='committee-members-section-1'>-->
<!--                    <a-->
<!--                        id='link-1'-->
<!--                        class='committee-members-iframe-link committee-members-clicked-link'-->
<!--                        onclick=ClickLinkCommittee('link-1')-->
<!--                    >Committee</a>-->
<!--                    <a-->
<!--                        id='link-2'-->
<!--                        class='committee-members-iframe-link'-->
<!--                        onclick=ClickLinkCommittee('link-2')-->
<!--                    >Add member</a>-->
<!--                </div>-->
<!--                <div class='committee-members-section-2'>-->
<!--                    <div class='committee-card banned' id='committee-card'>-->
<!--                        <div class='committee-filter'>-->
<!--                            <div class='committee-col1'>-->
<!--                                <input class='committee-input-field' type='text' placeholder='First Name'/>-->
<!--                                <input class='committee-input-field' type='text' placeholder='Last Name'/>-->
<!--                                <select class='committee-input-field'>-->
<!--                                    <option value='All'>All</option>-->
<!--                                    <option value='2018/2019'>2018/2019</option>-->
<!--                                    <option value='2018/2019'>2019/2020</option>-->
<!--                                    <option value='2018/2019'>2020/2021</option>-->
<!--                                </select>-->
<!--                            </div>-->
<!--                            <div class='committee-col2'>-->
<!--                                <button class='committee-filter-btn committee-btn'>Filter</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class='committee-results'>-->
<!--                            <div class='committee-result' onmouseover=DisplayButtons('rem-1') onmouseout=HideButtons('rem-1')>-->
<!--                                <p class='request-id'>FirstName</p>-->
<!--                                <p class='request-id'>LastName</p>-->
<!--                                <p class='request-id'>Batch</p>-->
<!--                                <div class='committee-buttons' id='rem-1'>-->
<!--                                    <button class='committee-remove-btn committee-btn'>Remove</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class='add-members-card banned' id='add-members-card'>-->
<!--                        <div class='add-members-filter'>-->
<!--                            <div class='add-members-col1'>-->
<!--                                <input class='add-members-input-field' type='text' placeholder='First Name'/>-->
<!--                                <input class='add-members-input-field' type='text' placeholder='Last Name'/>-->
<!--                                <select class='add-members-input-field'>-->
<!--                                    <option value='All'>All</option>-->
<!--                                    <option value='2018/2019'>2018/2019</option>-->
<!--                                    <option value='2018/2019'>2019/2020</option>-->
<!--                                    <option value='2018/2019'>2020/2021</option>-->
<!--                                </select>-->
<!--                            </div>-->
<!--                            <div class='add-members-col2'>-->
<!--                                <button class='add-members-filter-btn add-members-btn'>Filter</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class='add-members-results'>-->
<!--                            <div class='add-members-result' onmouseover=DisplayButtons('add-1') onmouseout=HideButtons('add-1')>-->
<!--                                <p class='request-id'>FirstName</p>-->
<!--                                <p class='request-id'>LastName</p>-->
<!--                                <p class='request-id'>Batch</p>-->
<!--                                <div class='add-members-buttons' id='add-1'>-->
<!--                                    <button class='add-members-add-btn add-members-btn'>Add</button>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class='coordinator' id='coordinator'>-->
<!--                <div class='coordinator-section-1'>-->
<!--                    <div class='coordinator-coord-pic'>-->
<!--                        <img src='../../../assets/images/user-default.png' alt='coord-pic' height='100%'/>-->
<!--                    </div>-->
<!--                    <div class='coordinator-coord-details'>-->
<!--                        <div class='coordinator-row-1'>-->
<!--                            <div class='coordinator-set'>-->
<!--                                <label>First Name</label>-->
<!--                                <div class='coordinator-data-field'></div>-->
<!--                            </div>-->
<!--                            <div class='coordinator-set'>-->
<!--                                <label>Last Name</label>-->
<!--                                <div class='coordinator-data-field'></div>-->
<!--                            </div>-->
<!--                            <div class='coordinator-set'>-->
<!--                                <label>Batch</label>-->
<!--                                <div class='coordinator-data-field'></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class='coordinator-section-2'>-->
<!--                    <div class='coordinator-filter'>-->
<!--                        <div class='coordinator-col1'>-->
<!--                            <input class='coordinator-input-field' type='text' placeholder='First Name'/>-->
<!--                            <input class='coordinator-input-field' type='text' placeholder='Last Name'/>-->
<!--                            <select class='coordinator-input-field'>-->
<!--                                <option value='All'>All</option>-->
<!--                                <option value='2018/2019'>2018/2019</option>-->
<!--                                <option value='2018/2019'>2019/2020</option>-->
<!--                                <option value='2018/2019'>2020/2021</option>-->
<!--                            </select>-->
<!--                        </div>-->
<!--                        <div class='coordinator-col2'>-->
<!--                            <button class='coordinator-filter-btn coordinator-btn'>Filter</button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class='coordinator-results'>-->
<!--                        <div class='coordinator-result' onmouseover=DisplayButtons('select-1') onmouseout=HideButtons('select-1')>-->
<!--                            <p class='request-id'>FirstName</p>-->
<!--                            <p class='request-id'>LastName</p>-->
<!--                            <p class='request-id'>Batch</p>-->
<!--                            <div class='coordinator-buttons' id='select-1'>-->
<!--                                <button class='coordinator-add-btn coordinator-btn'>Select</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        
        
    </div>
</div>

<!--<script src='../../../js/not-started-yet-details.js'></script>-->
<script src='../../../js/not-started-yet-details-coordinator.js'></script>
<script src='../../../js/not-started-yet-details-committee-members-add.js'></script>
<script src='../../../js/not-started-yet-details-committee-members-committee.js'></script>