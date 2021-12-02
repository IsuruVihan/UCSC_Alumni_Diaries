<?php include('../server/session.php'); ?>

<?php include('../components/header.php'); ?>

    <link rel="stylesheet" href="../assets/styles/wall.css">
    <link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
          integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
    <script src='../js/wall.js'></script>

    <script>
        $(document).ready(() => {
            //create notice
            $('#form-sub').submit((event) => {
                event.preventDefault();
                const url = '../server/wall/important-notice/important-notice-create.php';
                const form = document.getElementById('form-sub');
                const files = document.querySelector('[type=file]').files;
                const formData = new FormData(document.getElementById('form-sub'));

                fetch(url, {
                    method: 'POST',
                    body: formData,
                }).then((response) => {
                    console.log(response);
                }).catch((error) => {
                    console.log(error);
                });

                const noticeTitle = $('#notice-title').val();
                const noticeBody = $('#notice-body').val();
                let isCompleteCreate = true;

                $('#notice-title, #notice-body').removeClass('input-error,input-ok');

                if (noticeTitle === '') {
                    $('#notice-title').addClass('input-error');
                    $('#notice-title').removeClass('input-ok');
                    isCompleteCreate = false;
                } else {
                    $('#notice-title').addClass('input-ok');
                }
                if (noticeBody === '') {
                    $('#notice-body').addClass('input-error');
                    $('#notice-body').removeClass('input-ok');
                    isCompleteCreate = false;
                } else {
                    $('#notice-body').addClass('input-ok');
                }
                if (isCompleteCreate) {
                    $('#notice-body,#notice-title').val('');
                    $('#notice-body').removeClass('input-error');
                    $('#notice-title').removeClass('input-error');
                    $('#notice-body').removeClass('input-ok');
                    $('#notice-title').removeClass('input-ok');
                    $('#flash-message').html("Notice has been created");
                    $('#flash-message').addClass('message-success');
                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                } else {
                    $('#flash-message').html("All Fields must be filled");
                    $('#flash-message').addClass('message-error');
                }
                setTimeout(() => {
                    $('#flash-message').html('');
                }, 4000);
            });
            $('#create-notice-render').load("../server/wall/important-notice/important-notice-render.php");
        });

        //edit notice function
        const EditNotice = (id) => {
            const Id = id;
            const IdRenderNotice = '#render-notice-' + Id;
            const IdEditNotice = '#edit-notice-container-' + Id;
            const IdEditNoticeForm = '#edit-notice-form-' + Id;
            const IdEdit = 'edit-notice-form-' + Id;

            $(IdRenderNotice).hide();
            $(IdEditNotice).show();

            $(IdEditNoticeForm).submit((event) => {
                event.preventDefault();
                const urlTwo = '../server/wall/important-notice/important-notice-update.php';
                const formOne = document.getElementById(IdEdit);
                const files = document.querySelector('[type=file]').files;
                const formData = new FormData(formOne);

                fetch(urlTwo, {
                    method: 'POST',
                    body: formData,
                }).then((response) => {
                    console.log(response);
                }).catch((error) => {
                    console.log(error);
                });

                const IdEditTitle = '#edit-title-' + Id;
                const IdEditContent = '#edit-Content-' + Id;
                const editTitle = $(IdEditTitle).val();
                const editBody = $(IdEditContent).val();

                $(IdEditTitle, IdEditContent).removeClass('input-error,input-ok');
                if (editTitle === '') {
                    $(IdEditTitle).addClass('input-error');
                    $(IdEditTitle).removeClass('input-ok');
                } else {
                    $(IdEditTitle).addClass('input-ok');
                }
                if (editBody === '') {
                    $(IdEditContent).addClass('input-error');
                    $(IdEditContent).removeClass('input-ok');
                } else {
                    $(IdEditContent).addClass('input-ok');
                }
                setTimeout(() => {
                    location.reload();
                }, 2000);
            });
        }
    </script>

    <div class='main-container'>
        <p class='breadcrumb'>
            <a href='home.php'>Home</a> /
            Wall
        </p>
        <p class='main-title'>
            <i class="fa fa-globe"></i> Wall
        </p>
    </div>
    <div class='wall'>
        <div class="important-notice">
            <p class="grid-title">Important Notices</p>
            <div class="filter-box">
                <button class='filter-btn btn'>Starred</button>
                <button class='filter-btn btn'>All</button>
            </div>
            <div class="create-notice-box">
                <div class="box-title">
                    Create Important Notice
                </div>
                <form id='form-sub' name='form-sub' method="post" enctype="multipart/form-data">
                    <div class="row-1">
                        <input class='input-field-title ' id='notice-title' name='notice-title' type='text'
                               placeholder='Title'/>
                    </div>
                    <div class="row-2">
                        <label for="myFile" class='filter-btn btn upload-btn'>
                            <input type="file" id="myFile" name="files[]" onchange="return fileValidation()" multiple/
                            hidden>
                            Upload Picture</label>
                    </div>
                    <div class="row-3">
                        <textarea class="create-notice-text" id='notice-body' name='notice-body'
                                  placeholder="Message"></textarea>
                    </div>
                    <div class="row-4">
                        <input type='submit' class='filter-btn btn' id='create-notice' value='Create Notice'/>
                    </div>
                    <span id='flash-message' class='flashMsg'></span>
                </form>
            </div>

            <!--notices -->
            <div id='create-notice-render'>
                <!--            <div class='row-1 row-1-gap'>-->
                <!--                <div class='input-field-title' id='notice-title'></div>-->
                <!--                <div class='field-header' id='notice-timestamp'></div>-->
                <!--            </div>-->
                <!--            <div class='image-box-notice' id='image-box-notice'>-->
                <!--                <img src='' alt=''>-->
                <!--            </div>-->
                <!--            <div class='notice-content' id='notice-content'>-->
                <!---->
                <!--            </div>-->
                <!--            <div class='row-4'>-->
                <!--                <div class='star-div-off' id='star-div-off'>Star-->
                <!--                    <i class='fa fa-star' onclick=' MarkAsStarred() '></i>-->
                <!--                </div>-->
                <!--                <div class='star-div-on' id='star-div-on'>Star-->
                <!--                    <i class='fa fa-star' onclick=' MarkAsStarred() '></i>-->
                <!--                </div>-->
                <!--                <button class='filter-btn btn edit-btn' id='edit-notice' onclick='ShowEditNotice()'>Edit</button>-->
                <!--                <button class='filter-btn btn dlt-btn' id='delete-notice'>Delete</button>-->
                <!--            </div>-->

                <!--Edit important notices -->
                <!--            <div id='edit-notice-container'>-->
                <!--                    <div class='edit-notice-box' id="edit-notice-box">-->
                <!--                    <div class='box-title'>-->
                <!--                        Edit Important Notice-->
                <!--                    </div>-->
                <!--                    <form id='edit-notice-form'>-->
                <!--                        <div class='row-1'>-->
                <!--                            <input class='input-field-title' type='text' id='edit-title'/>-->
                <!--                            <p class='field-header'> date</p>-->
                <!--                        </div>-->
                <!--                        <div class='row-2'>-->
                <!--                            <label for='myFile' class='filter-btn btn upload-btn'>-->
                <!--                                <input type='file' id='myFile' name='filename' hidden>-->
                <!--                                Edit Upload</label>-->
                <!--                        </div>-->
                <!--                        <div class='row-3'>-->
                <!--                            <textarea class='create-notice-text' id='edit-content'> </textarea>-->
                <!--                        </div>-->
                <!--                        <div class='row-4'>-->
                <!--                            <button class='filter-btn btn'>Save Changes</button>-->
                <!--                            <button class='filter-btn btn'  >Cancel</button>-->
                <!--                        </div>-->
                <!--                    </form>-->
                <!--                </div>-->
                <!--            </div>-->

            </div>


        </div>

        <!--Common wall -->
        <div class="common-wall">
            <div class="wall-top-row">
                <p class="grid-title">Wall</p>
                <button class='create-post-button filter-btn btn' onclick='DisplayCreatePost()'>Create Post</button>
            </div>

            <!--Create post -->
            <div class='create-post-box' id='create-post-box'>
                <div class="box-title">Create Post</div>
                <input type="text" placeholder="Title" class="create-post-title">
                <div class="row-0">
                    <div class="image-box">

                    </div>
                    <textarea class="create-post-text" placeholder="Your content goes here"></textarea>
                </div>
                <div class="row-2">
                    <label for="myFile" class='filter-btn btn'>
                        <input type="file" id="myFile" name="filename" hidden>
                        Attachment</label>
                </div>
                <div class="create-post-buttons">
                    <button class='filter-btn btn'>Submit</button>
                    <button class='filter-btn btn' onclick='HideCreatePost()'>Cancel</button>
                </div>
            </div>

            <!--Filter box -->
            <div class="filter-box">
                <div class="filter-left">
                    <input type='text' placeholder='Search by Title' class="input-field-title">
                    <input type='text' placeholder='Search by ID' class="input-field-title">
                    <button class='filter-btn btn'>Filter</button>
                </div>
                <div class='filter-right'>
                    <button class='filter-btn btn'>Liked</button>
                    <button class='filter-btn btn'>My Posts</button>
                    <button class='filter-btn btn'>All</button>
                </div>
            </div>

            <!--Post-->
            <div class="post-box">
                <div class="post-content">
                    <img src="" alt="" class="dp-box">
                    <div class="f-name ">First Name</div>
                    <div class='l-name post-field '>Last Name</div>
                    <div class='post-time post-field '>Timestamp</div>
                    <button class='filter-btn btn post-delete'>Delete</button>
                    <img src='' alt='' class='pic-box'>
                    <div class='post-title post-field '> Title</div>
                    <div class="post-text post-field "></div>
                    <button class='filter-btn btn report-btn' onclick='DisplayPostReport()'>Report</button>
                    <button class='filter-btn btn show-comment-btn' onclick='DisplayComments()'>Show Comment</button>
                    <button class='filter-btn btn comment-btn' onclick='DisplayAddComment()'>Comment</button>
                    <div class="like-dislike-cell">
                        <button class='thumb-icon'><i class='fa fa-thumbs-up fa-2x'></i></button>
                        <div class="post-like-count post-field">111</div>
                        <button class='thumb-icon'><i class="fa fa-thumbs-down fa-2x" aria-hidden="true"></i></button>
                        <div class="post-dislike-count post-field">112</div>
                    </div>
                </div>

                <!--Post report -->
                <div class='post-report' id='post-report'>
                    <div class='box-title'>Report Post</div>
                    <textarea class='report-txt field-hover' placeholder='Your content goes here'></textarea>
                    <div class='create-post-buttons'>
                        <button class='filter-btn btn'>Submit</button>
                        <button class='filter-btn btn' onclick='HidePostReport()'>Cancel</button>
                    </div>
                </div>

                <!--add comments -->
                <div class='add-comment' id='add-comment'>
                    <div class='box-title '>Add Comment</div>
                    <div class='comment-content'>
                        <img src='' alt='' class='comment-dp'>
                        <input class='c-fname field-hover' placeholder='First Name'>
                        <input class='c-lname field-hover' placeholder='Last Name'>
                        <div class='c-time'>Timestamp</div>
                        <div class='comment-buttons'>
                            <div class='c-edit'></div>
                            <button class='filter-btn btn c-dlt'>Add</button>
                            <button class='filter-btn btn c-report' onclick='HideAddComment ()'>Cancel</button>
                        </div>
                        <textarea class='c-txt field-hover' placeholder='Enter yor comment here'></textarea>
                        <div class='like-box'>

                        </div>
                    </div>
                </div>
                <div class='comment-box' id='show-comment'>
                    <div class='comments-row'>
                        <div class='box-title'>Comments</div>
                        <button class='filter-btn btn hide-cmnt-btn' onclick=' HideComments()'>Hide Comments</button>
                    </div>

                    <!--comment show-->
                    <div class='comment-content'>
                        <img src='' alt='' class='comment-dp'>
                        <div class='c-fname '>First Name</div>
                        <div class='c-lname'>Last Name</div>
                        <div class='c-time'>Timestamp</div>
                        <div class='comment-buttons'>
                            <button class='filter-btn btn c-edit'>Edit</button>
                            <button class='filter-btn btn c-dlt'>delete</button>
                            <button class='filter-btn btn c-report' onclick='DisplayCommentReport()'>Report</button>
                        </div>
                        <div class='c-txt'>Enter yor comment here</div>
                        <div class='like-box'>
                            <div class='r-1'>
                                <button class='thumb-icon'><i class='fa fa-thumbs-up fa-2x'></i></button>
                                <div class='c-like-count'>112</div>
                            </div>
                            <div class='r-2'>
                                <button class='thumb-icon'><i class="fa fa-thumbs-down fa-2x" aria-hidden="true"></i>
                                </button>
                                <div class='c-dislike-count'>111</div>
                            </div>
                        </div>
                    </div>

                    <!--comment report-->
                    <div class='comment-report' id='comment-report'>
                        <div class="box-title">Report Comment</div>
                        <textarea class="report-txt field-hover" placeholder="Your content goes here"></textarea>
                        <div class="create-post-buttons">
                            <button class='filter-btn btn'>Submit</button>
                            <button class='filter-btn btn' onclick='HideCommentReport()'>Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2nd post-->
            <div class="post-box">
                <div class="post-content">
                    <img src="" alt="" class="dp-box">
                    <div class="f-name ">First Name</div>
                    <div class='l-name post-field '>Last Name</div>
                    <div class='post-time post-field '>Timestamp</div>
                    <button class='filter-btn btn post-delete'>Delete</button>
                    <img src='' alt='' class='pic-box'>
                    <div class='post-title post-field '> Title</div>
                    <div class="post-text post-field "></div>
                    <button class='filter-btn btn report-btn' onclick='DisplayPostReport()'>Report</button>
                    <button class='filter-btn btn show-comment-btn' onclick='DisplayComments()'>Show Comment</button>
                    <button class='filter-btn btn comment-btn' onclick='DisplayAddComment()'>Comment</button>
                    <div class="like-dislike-cell">
                        <button class='thumb-icon'><i class='fa fa-thumbs-up fa-2x'></i></button>
                        <div class="post-like-count post-field">111</div>
                        <button class='thumb-icon'><i class="fa fa-thumbs-down fa-2x" aria-hidden="true"></i></button>
                        <div class="post-dislike-count post-field">112</div>
                    </div>
                </div>

                <!--Post report -->
                <div class='post-report' id='post-report'>
                    <div class='box-title'>Report Post</div>
                    <textarea class='report-txt' placeholder='Your content goes here'></textarea>
                    <div class='create-post-buttons'>
                        <button class='filter-btn btn'>Submit</button>
                        <button class='filter-btn btn'>Cancel</button>
                    </div>
                </div>

                <!--add comments -->
                <div class='add-comment' id='add-comment'>
                    <div class='box-title '>Add Comment</div>
                    <div class='comment-content'>
                        <img src='' alt='' class='comment-dp'>
                        <input class='c-fname' placeholder='First Name'>
                        <input class='c-lname' placeholder='Last Name'>
                        <div class='c-time'>Timestamp</div>
                        <div class='comment-buttons'>
                            <div class='c-edit'></div>
                            <button class='filter-btn btn c-dlt'>Add</button>
                            <button class='filter-btn btn c-report' onclick='HideAddComment ()'>Cancel</button>
                        </div>
                        <textarea class='c-txt' placeholder='Enter yor comment here'></textarea>
                        <div class='like-box'>

                        </div>
                    </div>
                </div>
                <div class='comment-box' id='show-comment'>
                    <div class='comments-row'>
                        <div class='box-title'>Comments</div>
                        <button class='filter-btn btn hide-cmnt-btn' onclick=' HideComments()'>Hide Comments</button>
                    </div>

                    <!--comment show-->
                    <div class='comment-content'>
                        <img src='' alt='' class='comment-dp'>
                        <div class='c-fname '>First Name</div>
                        <div class='c-lname'>Last Name</div>
                        <div class='c-time'>Timestamp</div>
                        <div class='comment-buttons'>
                            <button class='filter-btn btn c-edit'>Edit</button>
                            <button class='filter-btn btn c-dlt'>delete</button>
                            <button class='filter-btn btn c-report' onclick='DisplayCommentReport()'>Report</button>
                        </div>
                        <div class='c-txt'>Enter yor comment here</div>
                        <div class='like-box'>
                            <div class='r-1'>
                                <button class='thumb-icon'><i class='fa fa-thumbs-up fa-2x'></i></button>
                                <div class='c-like-count'>112</div>
                            </div>
                            <div class='r-2'>
                                <button class='thumb-icon'><i class="fa fa-thumbs-down fa-2x" aria-hidden="true"></i>
                                </button>
                                <div class='c-dislike-count'>111</div>
                            </div>
                        </div>
                    </div>

                    <!--comment report-->
                    <div class='comment-report' id='comment-report'>
                        <div class="box-title">Report Comment</div>
                        <textarea class="report-txt" placeholder="Your content goes here"></textarea>
                        <div class="create-post-buttons">
                            <button class='filter-btn btn'>Submit</button>
                            <button class='filter-btn btn'>Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('../components/footer.php'); ?>