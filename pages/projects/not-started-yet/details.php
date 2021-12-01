<link rel='stylesheet' href='../../../assets/styles/not-started-yet-details.css'/>
<link rel='stylesheet' href='../../../assets/styles/not-started-yet-details-general.css'/>
<link rel='stylesheet' href='../../../assets/styles/not-started-yet-details-committee-members.css'/>
<link rel='stylesheet' href='../../../assets/styles/not-started-yet-details-coordinator.css'/>
<link rel='stylesheet' href='../../../assets/styles/not-started-yet-details-committee-members-committee.css'/>
<link rel='stylesheet' href='../../../assets/styles/not-started-yet-details-committee-members-add.css'/>
<link rel='stylesheet' href='../../../assets/styles/not-started-yet-details-actions.css'/>
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
        const link4 = document.getElementById('l-4');

        const general = document.getElementById('general');
        const committeeMembers =document.getElementById('committee-members');
        const coordinator = document.getElementById('coordinator');
        const actions = document.getElementById('actions');

        document.getElementById(id).classList.add('details-clicked-button');
        if (id==='l-1') {
            link2.classList.remove('details-clicked-button');
            link3.classList.remove('details-clicked-button');
            link4.classList.remove('details-clicked-button');
            general.style.display = 'block';
            committeeMembers.style.display = 'none';
            coordinator.style.display = 'none';
            actions.style.display = 'none';
        } else if (id==='l-2') {
            link1.classList.remove('details-clicked-button');
            link3.classList.remove('details-clicked-button');
            link4.classList.remove('details-clicked-button');
            general.style.display = 'none';
            committeeMembers.style.display = 'grid';
            coordinator.style.display = 'none';
            actions.style.display = 'none';
        } else if (id==='l-3') {
            link1.classList.remove('details-clicked-button');
            link2.classList.remove('details-clicked-button');
            link4.classList.remove('details-clicked-button');
            general.style.display = 'none';
            committeeMembers.style.display = 'none';
            coordinator.style.display = 'grid';
            actions.style.display = 'none';
        } else if (id==='l-4') {
            link1.classList.remove('details-clicked-button');
            link2.classList.remove('details-clicked-button');
            link3.classList.remove('details-clicked-button');
            general.style.display = 'none';
            committeeMembers.style.display = 'none';
            coordinator.style.display = 'none';
            actions.style.display = 'block';
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
    
    const FilterCommittee = (id) => {
        const FirstName = $('#filter1-first-name').val();
        const LastName = $('#filter1-last-name').val();
        const Batch = $('#filter1-batch').val();

        $('#committee-results').load('../../../server/projects/not-started-yet/filter-committee-members.php', {
            Id: id,
            FirstName: FirstName,
            LastName: LastName,
            Batch: Batch
        });
    }
    
    const FilterAvailableMembers = (id) => {
        const FirstName = $('#filter2-first-name').val();
        const LastName = $('#filter2-last-name').val();
        const Batch = $('#filter2-batch').val();

        $('#available-members-for-committee')
            .load('../../../server/projects/not-started-yet/filter-available-members.php', {
            ProjectId: id,
            FirstName: FirstName,
            LastName: LastName,
            Batch: Batch
        });
    }

    const FilterAvailableMembers2 = (id) => {
        const FirstName = $('#filter3-first-name').val();
        const LastName = $('#filter3-last-name').val();
        const Batch = $('#filter3-batch').val();
        
        $('#available-members-for-coordinator')
            .load('../../../server/projects/not-started-yet/filter-available-members2.php', {
            ProjectId: id,
            FirstName: FirstName,
            LastName: LastName,
            Batch: Batch
        });
    }
    
    const AddCommitteeMember = (data) => {
        const Email = data.split(',')[0];
        const ProjectId = data.split(',')[1];
        $('#message-area').load('../../../server/projects/not-started-yet/add-committee-member.php', {
            Email: Email,
            ProjectId: ProjectId
        });
    }

    const AddCoordinator = (data) => {
        const Email = data.split(',')[0];
        const ProjectId = data.split(',')[1];
        $('#message-area').load('../../../server/projects/not-started-yet/add-coordinator.php', {
            Email: Email,
            ProjectId: ProjectId
        });
    }

    const RemoveMember = (data) => {
        const Email = data.split(',')[0];
        const ProjectId = data.split(',')[1];
        $('#message-area').load('../../../server/projects/not-started-yet/remove-member.php', {
            Email: Email,
            ProjectId: ProjectId
        });
    }
    
    const StartProject = (id) => {
        $('#action-messages').load('../../../server/projects/not-started-yet/start-project.php', {
            Id: id
        });
    }

    const DeleteProject = (id) => {
        $('#action-messages').load('../../../server/projects/not-started-yet/delete-project.php', {
            Id: id
        });
    }
</script>

<div id='message-area'></div>
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
    <div class='left-section' id='left-section'></div>
</div>

<!--<script src='../../../js/not-started-yet-details.js'></script>-->
<script src='../../../js/not-started-yet-details-coordinator.js'></script>
<script src='../../../js/not-started-yet-details-committee-members-add.js'></script>
<script src='../../../js/not-started-yet-details-committee-members-committee.js'></script>