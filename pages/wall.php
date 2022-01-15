<?php include('../server/session.php'); ?>
<?php include('../components/header.php'); ?>


    <link rel="stylesheet" href="../assets/styles/wall.css">
    <link rel="stylesheet" href="../assets/styles/modal.css">
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

            //create post
            $('#create-post-form').submit((event) =>{
                event.preventDefault();
                const urlOne = '../server/wall/common-wall/create.php';
                const form = document.getElementById('create-post-form');
                const files = document.querySelector('[type=file]').files;
                const formDataOne = new FormData(document.getElementById('create-post-form'));

                fetch(urlOne, {
                    method: 'POST',
                    body: formDataOne,
                }).then((response) => {
                    console.log(response);
                }).catch((error) => {
                    console.log(error);
                });


                const postContent = $('#post-content').val();
                let isCompleteCreatePost = true;

                $('#post-content').removeClass('input-error,input-ok');

                if (postContent === '') {
                    $('#post-content').addClass('input-error');
                    $('#post-content').removeClass('input-ok');
                    isCompleteCreatePost = false;
                } else {
                    $('#post-content').addClass('input-ok');
                }
                if (isCompleteCreatePost) {
                    $('#post-content').val('');
                    $('#post-content').removeClass('input-error');
                    $('#post-content').removeClass('input-ok');
                    $('#flash-message3').html("Post has been created");
                    $('#flash-message3').addClass('message-success');
                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                } else {
                    $('#flash-message3').html("All Fields must be filled");
                    $('#flash-message3').addClass('message-error');
                }
                setTimeout(() => {
                    $('#flash-message3').html('');
                }, 4000);
            });


            $('#post-box').load('../server/wall/common-wall/render.php');

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

            $('#edit-cancel').click(() => {
                $(IdRenderNotice).show();
                $(IdEditNotice).hide();
            });
        }

        const DeleteNotice = (id) => {
            $('#flash-message-1').load("../server/wall/important-notice/important-notice-delete.php", {
                id: id
            });
            setTimeout(() => {
                location.reload();
            }, 1000);
        }

        const MarkAsStarred = (id) => {
            const star = '#star-div-off-' + id;
            $('#flash-message-2').load("../server/wall/important-notice/important-notice-star.php", {
                id: id
            }, (response) => {
                if (response === "done") {
                    $(star).addClass('star-div-on');

                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                }
            });
        }

        const UnMarkStarred = (id) => {
            const star = '#star-div-off-' + id;
            $('#flash-message-2').load("../server/wall/important-notice/remove-star.php", {
                id: id
            }, (response) => {
                if (response === "Okay") {
                    $(star).removeClass('star-div-on');

                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                }
            });
        }

        const StarredPostFilter = () => {
            $('#create-notice-render').load("../server/wall/important-notice/starred-post-filter.php");
        }

        const AllPostFilter = () => {
            $('#create-notice-render').load("../server/wall/important-notice/important-notice-render.php");
        }

        const ModalView = (id) => {
            const modal = '#myModal-' + id;
            $(modal).css({display: "block"});
        }

        const ModalClose = (id) => {
            const modal = '#myModal-' + id;
            $(modal).css({display: "none"});
        }
        // $(window).click(function(e) {
        //     const id= e.target.id;
        //     const modal=document.getElementById(id);
        // //meke target.id === myModal kiyana eke aga number ekak vatenna hadanna.ethakota
        //     if (e.target.id === 'myModal-23') {
        //                 modal.style.display = "none";
        //             }
        // });

        const DisplayPostReport = (id) => {
            const postReport = '#post-report-box-'+id;
            const postReportNoHash = 'post-report-box-'+id;
            const displayAddComment ='#add-comment-'+id;
            const showComment ='#show-comment-box-'+id;

            $(postReport).css({display: 'flex'});
            $(showComment).css({display: 'none'});
            $(displayAddComment).css({display: 'none'});

            $(postReport).submit((event) =>{
                event.preventDefault();
                const url = '../server/wall/common-wall/post-report-submit.php';
                const form = document.getElementById(postReportNoHash);
                const formDataSix = new FormData(form);

                fetch(url, {
                    method: 'POST',
                    body: formDataSix,
                }).then((response) => {
                    console.log(response);
                }).catch((error) => {
                    console.log(error);
                }); 
                const postReportContent='#post-report-content-'+id;
                const postReportContent1 = $(postReportContent).val();

                if(postReportContent1 != ''){
                    setTimeout(() => {
                        HidePostReport(id);
                    });                  
                    $(postReportContent).val('');                
                }
            });    
        }

        const HidePostReport = (id) =>{
            const postReport = '#post-report-box-'+id;
            $(postReport).css({display : 'none'});
        }

        const DisplayAddComment = (id) => {
            const displayAddComment ='#add-comment-'+id;
            const showComment ='#show-comment-box-'+id;
            const postReport = '#post-report-box-'+id;

            //form id's
            // const addCommentForm='#add-comment-form-'+id;
            const addForm ='#add-comment-form-'+id;
            const addFormNoHash ='add-comment-form-'+id;

            $(displayAddComment).css({display: 'flex'});
            $(postReport).css({display : 'none'});
            $(showComment).css({display: 'none'});

            $(addForm).submit( (event) => {
                event.preventDefault();

                const url3 = '../server/wall/common-wall/add-comment.php';
                const formData4 = new FormData(document.getElementById(addFormNoHash));

                fetch(url3, {
                    method: 'POST',
                    body: formData4,
                }).then((response) => {
                    console.log(response);

                }).catch((error) => {
                    console.log(error);
                });
                setTimeout(() => {
                    location.reload();
                }, 2000)
            });

            
        }

        const HideAddComment = (id) => {
            const displayAddComment ='#add-comment-'+id;
            $(displayAddComment).css({display: 'none'});
        }

        const ShowComments = (id) => {
            const showComment ='#show-comment-box-'+id;
            const displayAddComment ='#add-comment-'+id;
            const postReport = '#post-report-box-'+id;

            $(showComment).css({display: 'flex'});
            $(postReport).css({display : 'none'});
            $(displayAddComment).css({display: 'none'});

            const commentRender = '#show-comment-'+id;
            $(commentRender).load("../server/wall/common-wall/comment-show.php",{
                id : id,
            });

        }
        const HideComments = (id) => {
            const showComment ='#show-comment-box-'+id;
            $(showComment).css({display: 'none'});
        }

        const PostDelete = (id) => {
            $('#post-box').load('../server/wall/common-wall/delete-post.php',{
                id: id,
            });
            setTimeout(() => {
                location.reload();
            });
        }

        const DisplayCommentReport = (id) => {
            const showCommentReport ='#comment-report-'+id;
            $(showCommentReport).css({display: 'flex'});
        }

        const HideCommentReport =(id) => {
            const showCommentReport ='#comment-report-'+id;
            $(showCommentReport).css({display: 'none'});
        }

        const CommentReportSubmit = (id) =>{
            const ReportSubmit = '#comment-report-'+id;
            const ReportNoHash = 'comment-report-'+id;
            
            $(ReportSubmit).submit((event) =>{
                event.preventDefault();
                const url = '../server/wall/common-wall/comment-report-submit.php';
                const form = document.getElementById(ReportNoHash);
                const formDataFive = new FormData(form);

                

                fetch(url, {
                    method: 'POST',
                    body: formDataFive,
                }).then((response) => {
                    console.log(response);
                }).catch((error) => {
                    console.log(error);
                }); 

                const reportContent='#comment-report-content-'+id;
                const reportContent1 = $(reportContent).val();
                        
                if(reportContent1 != ''){
                    setTimeout(() => {
                        HideCommentReport(id);
                    });
                    const reportContent ='#comment-report-content-'+id;
                    $(reportContent).val('');                
                }             
            });
    }

    const CommentEdit = (id) =>{
        
        const  commentWrapper ='#comment-content-wrapper-'+id;
        const  editWrapper ='#comment-edit-box-'+id;
        const  editWrapperNoHash ='comment-edit-box-'+id;
        const  commentBody = '#comment-content-'+id;
        
        $(commentWrapper).css("display","none");   
        $(editWrapper).css("display","flex");   

        $(editWrapper).submit((event) => {
            event.preventDefault();
                const url = '../server/wall/common-wall/comment-edit.php';
                const form = document.getElementById(editWrapperNoHash);
                const formDataSeven = new FormData(form);

                

                fetch(url, {
                    method: 'POST',
                    body: formDataSeven,
                }).then((response) => {
                    console.log(response);
                }).catch((error) => {
                    console.log(error);
                });  

                if( $(commentBody).val() != ''){
                    setTimeout(() => {
                        location.reload();
                    });
                }      
        });
     
    }

    const HideCommentEdit = (id) => {
        const  commentWrapper='#comment-content-wrapper-'+id;
        const  editWrapper='#comment-edit-box-'+id;
        
        $(commentWrapper).css("display","flex");
        $(commentWrapper).css("flex-direction","column");     
        $(editWrapper).css("display","none");
    }
    
    const MyPosts = (id) => {
        $('#post-box').load('../server/wall/common-wall/my-posts.php');
    }

    const AllPosts = (id) => {
        $('#post-box').load('../server/wall/common-wall/render.php');
    }

    const FilterById = (id) => {
        const Id= $('#id-input').val();
        $('#post-box').load('../server/wall/common-wall/id-filter.php',{
            id : Id,
        });
    }

    const LitPosts = (id) => {
        $('#post-box').load('../server/wall/common-wall/lit-render.php');
    }

    const DisplayPostEdit = (id) => {
        const postEditId = '#post-edit-show-'+id;
        const postEditIdNohash = 'post-edit-show-'+id;
        const postShowId = '#post-content-'+id;
        const postBody = '#post-content-body-'+id;
        
        $(postShowId).css("display","none");
        $(postEditId).css("display","flex")

        $(postEditId).submit((event) =>{
            event.preventDefault();
            const url = '../server/wall/common-wall/post-edit.php';
            const form = document.getElementById(postEditIdNohash);
            const formDataEight = new FormData(form);

                

                fetch(url, {
                    method: 'POST',
                    body: formDataEight,
                }).then((response) => {
                    console.log(response);
                }).catch((error) => {
                    console.log(error);
                });  

                // const postBodyValue = $(postBody).val();

                if( $(postBody).val()  != ''){
                    setTimeout(() => {
                        location.reload();
                    });
                }   

        });
    }

    const ShowPostHideEdit = (id) =>{
        const postEditId = '#post-edit-show-'+id;
        const postShowId = '#post-content-'+id;
        $(postShowId).css("display","flex");
        $(postShowId).css("flex-direction","column"); 
        $(postEditId).css("display","none")
    }

    const LitFunction = (id) =>{
            // former like function
        const lit = '#lit-'+id;
        const click = 1;

        $('#flash-message-3').load("../server/wall/common-wall/react.php", {
            id: id,
            click : click,
        }, (response) => {
            if (response === "done") {
                $(lit).addClass('fire');

                setTimeout(() => {
                    location.reload();
                }, 2000);
            }
        });
    }

    const FrownFunction = (id) => {
            //former dislike function
        const frown = '#frown-'+id;
        const click = 2;

        $('#flash-message-3').load("../server/wall/common-wall/react.php", {
            id: id,
            click : click,
        }, (response) => {
            if (response === "done") {
                $(frown).addClass('frown');

                setTimeout(() => {
                    location.reload();
                }, 2000);
            }
        });
    }

        const LitFunctionRemove = (id) => {
            const lit = '#lit-'+id;
            const click = 3;

            $('#flash-message-3').load("../server/wall/common-wall/react.php", {
                id: id,
                click : click,
            }, (response) => {
                if (response === "done") {
                    $(lit).removeClass('fire');

                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                }
            });
        }

        const FrownFunctionRemove = (id) => {
            const frown = '#frown-'+id;
            const click = 3;

            $('#flash-message-3').load("../server/wall/common-wall/react.php", {
                id: id,
                click : click,
            }, (response) => {
                if (response === "done") {
                    $(frown).removeClass('frown');

                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                }
            });

        }

        const LitFunctionChange = (id) => {
            const lit = '#lit-'+id;
            const click = 4;

            $('#flash-message-3').load("../server/wall/common-wall/react.php", {
                id: id,
                click : click,
            }, (response) => {
                if (response === "done") {
                    $(lit).addClass('fire');

                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                }
            });

        }

        const FrownFunctionChange = (id) => {
            const frown = '#frown-'+id;
            const click = 5;

            $('#flash-message-3').load("../server/wall/common-wall/react.php", {
                id: id,
                click : click,
            }, (response) => {
                if (response === "done") {
                    $(frown).addClass('frown');

                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                }
            });
        }

        const LitFunctionComment = (id) => {
            // former like function
            const lit = '#lit-'+id;
            const click = 1;

            $('#flash-message-3').load("../server/wall/common-wall/comment-react.php", {
                id: id,
                click : click,
            }, (response) => {
                if (response === "done") {
                    $(lit).addClass('fire');

                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                }
            });
        }
        const FrownFunctionComment = (id) => {
            //former dislike function
            const frown = '#frown-'+id;
            const click = 2;

            $('#flash-message-3').load("../server/wall/common-wall/comment-react.php", {
                id: id,
                click : click,
            }, (response) => {
                if (response === "done") {
                    $(frown).addClass('frown');

                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                }
            });
        }

        const LitFunctionRemoveComment = (id) => {
            const lit = '#lit-'+id;
            const click = 3;

            $('#flash-message-3').load("../server/wall/common-wall/comment-react.php", {
                id: id,
                click : click,
            }, (response) => {
                if (response === "done") {
                    $(lit).removeClass('fire');

                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                }
            });
        }

        const FrownFunctionRemoveComment = (id) => {
            const frown = '#frown-'+id;
            const click = 3;

            $('#flash-message-3').load("../server/wall/common-wall/comment-react.php", {
                id: id,
                click : click,
            }, (response) => {
                if (response === "done") {
                    $(frown).removeClass('frown');

                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                }
            });

        }

        const LitFunctionChangeComment = (id) => {
            const lit = '#lit-'+id;
            const click = 4;

            $('#flash-message-3').load("../server/wall/common-wall/comment-react.php", {
                id: id,
                click : click,
            }, (response) => {
                if (response === "done") {
                    $(lit).addClass('fire');

                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                }
            });

        }

        const FrownFunctionChangeComment = (id) => {
            const frown = '#frown-'+id;
            const click = 5;

            $('#flash-message-3').load("../server/wall/common-wall/comment-react.php", {
                id: id,
                click : click,
            }, (response) => {
                if (response === "done") {
                    $(frown).addClass('frown');

                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                }
            });
        }

        const DeleteComment = (id) => {

            $('#post-box').load('../server/wall/common-wall/delete-comment.php',{
                id: id,
            });
            setTimeout(() => {
                location.reload();
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
            <span id='flash-message-1' class='flashMsg'></span>
            <span id='flash-message-2' class='flashMsg flashMsgHide '></span>
            <div class="filter-box">
                <button class='filter-btn btn' id='starred-post' onclick=StarredPostFilter()>Starred</button>
                <button class='filter-btn btn' id='all-post' onclick=AllPostFilter()>All</button>
            </div>
            <?php if (isset($_SESSION["AccType"]) && $_SESSION["AccType"] == "TopBoard") {
                echo "<div class='create-notice-box'>
                <div class='box-title'>
                    Create Important Notice 
                </div>
                <form id='form-sub' name='form-sub' method='post' enctype='multipart/form-data'>
                    <div class='row-1'>
                        <input class='input-field-title ' id='notice-title' name='notice-title' type='text'
                               placeholder='Title'/>
                    </div>
                    <div class='row-2'>
                        <label for='myFile' class='filter-btn btn upload-btn'>
                            <input type='file' id='myFile' name='files[]' onchange='return fileValidation()' multiple/
                            hidden>
                            Upload Picture</label>
                    </div>
                    <div class='row-3''>
                        <textarea class='create-notice-text' id='notice-body' name='notice-body'
                                  placeholder='Message'></textarea>
                    </div>
                    <div class='row-4'>
                        <input type='submit' class='filter-btn btn' id='create-notice' value='Create Notice'/>
                    </div>
                    <span id='flash-message' class='flashMsg'></span>
                </form>
            </div>";
            }
            ?>

            <!--notices -->
            <div id='create-notice-render'>

            </div>
        </div>

        <!--Common wall -->
        <div class="common-wall">
            <div class="wall-top-row">
                <p class="grid-title">Wall</p>
                <button class='create-post-button filter-btn btn' onclick='DisplayCreatePost()'>Create Post</button>
            </div>
            <span id='flash-message-3'>  </span>

            <!--Create post -->
            <form class='create-post-box' id='create-post-form' enctype='multipart/form-data' >
                <div class="box-title">Create Post</div>
<!--                <input type="text" placeholder="Title" class="create-post-title" id='post-title' name='post-title'/>-->
                <div class="row-0">
                    <textarea class="create-post-text" placeholder="Your content goes here" id='post-content' name='post-content'></textarea>
                </div>
                <div class="row-2">
                    <label for="myFile2" class='filter-btn btn'>
                        <input type="file" id="myFile2" name="files[]" onchange='return fileValidationPost()' multiple hidden />
                        Upload Photo</label>
                </div>
                <span id='flash-message3' class='flashMsg'></span>
                <div class="create-post-buttons">
                    <input type='submit' class='filter-btn btn post-input-btn' id='wall-post-submit' value='Post'/>
                    <input type='reset' class='filter-btn btn post-input-btn' id='create-post-cancel' value='Cancel' onclick=HideCreatePost() >
                </div>
            </form>

            <!--Filter box -->
          <?php 
            $query = "SELECT OwnerEmail, Id FROM posts WHERE isImportant='0'";
            $results = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($results)) {
                if(isset($_SESSION["AccType"]) && $_SESSION["AccType"] == "TopBoard") {
                    echo "
                        <div class='filter-box'>
                            <div class='filter-left'>
                                <input type='text' placeholder='Search by ID' class='input-field-title' id='id-input'>
                                <button class='filter-btn btn' onclick=FilterById('{$row['Id']}')>Filter</button>
                            </div>
                            <div class='filter-right'>
                                <button class='filter-btn btn' onclick=LitPosts('{$row['Id']}') >Lit</button>
                                <button class='filter-btn btn' onclick=MyPosts('{$row['Id']}') >My Posts</button>
                                <button class='filter-btn btn' onclick=AllPosts('{$row['Id']}') >All</button>
                            </div>
                        </div>
                    ";
                } else {
                    echo"
                          <div class='filter-box-member-session'>
                                <button class='filter-btn btn filter-member-session' onclick=LitPosts('{$row['Id']}') >Liked</button>
                                <button class='filter-btn btn filter-member-session' onclick=MyPosts('{$row['Id']}') >My Posts</button>
                                <button class='filter-btn btn filter-member-session' onclick=AllPosts('{$row['Id']}') >All</button>
                          </div>
                    ";
                }
                break;
            }
          ?>
            <!--Post-->
            <div class="post-box" id='post-box'>
                <span id="comment-del"></span>
            </div>        
        </div>
    </div>

<?php include('../components/footer.php'); ?>