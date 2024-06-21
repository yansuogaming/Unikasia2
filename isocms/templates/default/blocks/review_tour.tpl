<div class="stories" id="stories">
    <div id="writeTourReview" style="display:none">
        <form action="" class="simple_form new_review" enctype="multipart/form-data" id="frmCommentCrx" method="post">
            <div class="rating_block">
                <div class="rating-body">
                    <div class="rate">
                        <span class="title">{$core->get_Lang('Your rating is here')}:</span>
                        <div class="rate_row"></div>
                    </div>
                    <div class="details">
                        <div class="control-group text optional mt10">
                            <div class="controls mb10">
                                <input class="required form-control" name="fullname" id="fullname" value=""
                                       maxlength="255" type="text" placeholder="{$core->get_Lang('* Full Name')}"/>
                            </div>
                            <div class="controls mb10">
                                <input class="form-control" name="title" id="title" maxlength="255" type="text"
                                       placeholder="{$core->get_Lang('* Title of review')}"/>
                            </div>
                            <div class="controls mb10">
                                <textarea class="form-control" name="message" id="message" minlength="100"
                                          placeholder="* Your review"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media-preview" id="media-preview"></div>
                <div class="bottom">
                    <div class="right">
                        <button type="button" id="btnClick"
                                class="btn_green">{$core->get_Lang('Submit your review')}</button>
                        <input type="hidden" value="Review" name="Review">
                        <input type="hidden" value="{$profile_id}" id="member_id" name="member_id">
                        <input type="hidden" value="{$table_id}" id="table_id" name="table_id">
                        <input type="hidden" value="{$mod}" id="type" name="type">
                        <input type="hidden" value="{$_LANG_ID}" id="_LANG_ID" name="_LANG_ID">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    var msg_fullname_required = "{$core->get_Lang('Your full name should not be empty')}!";
    var msg_email_required = "{$core->get_Lang('Your email should not be empty')}!";
    var msg_title_required = "{$core->get_Lang('Your title should not be empty')}!";
    var msg_message_required = "{$core->get_Lang('Your message should not be empty')}!";
    var msg_login = "{$core->get_Lang('Sign in saved to review')}!";
    var msg_rating = "{$core->get_Lang('Your rating should not be empty')}!";
    var msg_insert_success = "{$core->get_Lang('Your Review is submit success')}!";
    var msg_email_not_valid = "{$core->get_Lang('Your email is not valid')}!";
    var process = "{$core->get_Lang('Processing')}......";
    var Publish_Review = "{$core->get_Lang('Submit your review')}";
    var Completed = "{$core->get_Lang('Completed')}....";

</script>
<script src="{$URL_JS}/jquery.form.js?ver={$upd_version}"></script>
{literal}
    <script>
        $(function () {
            $(document).on('click', '#btnClick', function (ev) {
                var e = $("#email").val(),
                    a = $("#email").val();
                var $_this = $(this);
                if ($.trim($('input[name=fullname]').val()) == '') {
                    alert(msg_fullname_required);
                    $('input[name=fullname]').addClass('error');
                    $('input[name=fullname]').focus();
                    return false;
                }
                if ($.trim($('input[name=title]').val()) == '') {
                    alert(msg_title_required);
                    $('input[name=title]').addClass('error');
                    $('input[name=title]').focus();
                    return false;
                }
                if ($.trim($('textarea[name=message]').val()) == '') {
                    alert(msg_message_required);
                    $('input[name=message]').addClass('error');
                    $('textarea[name=message]').focus();
                    return false;
                }
                if ($.trim($('input[name=rates]').val()) == '') {
                    alert(msg_rating);
                    $('input[name=rates]').focus();
                    return false;
                }
                $_this.closest('form.simple_form').ajaxSubmit({
                    type: "POST",
                    url: path_ajax_script + '/index.php?mod=home&act=ajSaveReviewsNoLogin&lang=' + LANG_ID,
                    beforeSend: function (xhr) {
                        $('button[id^=btnClick]').text(process).prop('disabled', true);
                    },
                    dataType: "html",
                    success: function (html) {
                        $('button[id^=btnClick]')
                            .text(Completed)
                            .delay(2000)
                            .text(Publish_Review)
                            .prop('disabled', false);
                        $_this.closest('form.simple_form').resetForm();
                        $_this.closest('form.simple_form').clearForm();

                        if (html.indexOf("_ERROR") >= 0) {
                            $('#message_box').html(msg_insert_error).show();
                            return false;
                        } else if (html.indexOf('_SUCCESS') >= 0) {
                            alert(msg_insert_success);
                            $('#media-preview').empty().hide();
                            $(".rate_row .rate_star").removeClass('checked');
                            $("#rates").val('');
                            $("#fullname").val('');
                            $("#title").val('');
                            $("#message").val('');
                            $('#commentCrx li:first').fadeIn().delay(10000).fadeOut();
                        }
                    }
                });
                return false;
            });
            var $number_per_page = 3;
            var $page = 1;
            $page_aj = 0;
            var timer = '';
            /*loadPage();*/
            $('#show-more').click(function (e) {
                var $totalRecord = $('#commentCrx .box').size();
                if ($page_aj) {
                    $page = $page_aj + 1;
                    $page_aj = 0;
                } else $page = $page + 1;
                e.preventDefault();
                var $this = $(this);
                clearTimeout(timer);
                $('.loader').show();
                timer = setTimeout(function () {
                    var $start = ($page - 1) * $number_per_page;
                    var $end = $start + $number_per_page;

                    for (var i = $start; i < $end; i++) {
                        $('.box').eq(i).show();
                    }

                    $('.loader').hide();
                    if ($end >= $totalRecord)
                        $('#show-more').hide();
                }, 500);
            });

        });

        function checkValidEmail(e) {
            var a = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return a.test(e)
        }
    </script>
{/literal}
<script type="text/htmlpreview" src="{$URL_JS}/reviewstar/starwarsjs.js?v={$upd_version}"></script>
<script src="{$URL_JS}/reviewstar/htmlpreview.min.js?v={$upd_version}"></script>
<script src="{$URL_JS}/reviewstar/yql?v={$upd_version}"></script>
<link rel="stylesheet" href="{$URL_JS}/reviewstar/style.css?v={$upd_version}">
{literal}
    <script>
        HTMLPreview.replaceAssets();
        $(function () {
            $('.rate_row').starwarsjs({
                stars: 5,
                count: 1
            });
        });
    </script>
{/literal}
{literal}
    <style>
        #writeTourReview {
            margin-bottom: 40px
        }

        #writeTourReview .bottom .upload_image {
            float: left;
            margin-top: 0;
            width: 200px;
        }

        #writeTourReview .bottom .upload_image input {
            display: none;
            position: absolute;
        }

        #writeTourReview .bottom .upload_image label {
            display: block;
            height: 21px;
            color: #3b444e;
            font-size: 12px;
            line-height: 21px;
            text-transform: uppercase;
            font-weight: 400;
            opacity: .8;
            margin: 5px 0 0 0;
        }

        #writeTourReview .bottom .right {
            float: right;
            width: 310px;
            text-align: right;
        }

        #writeTourReview textarea {
            padding: 10px 15px
        }

        .review_content input, .review_content select {
            width: 100%;
            max-width: 320px;
            line-height: 36px;
            height: 36px;
            padding: 0 10px;
            border-radius: 0;
            border: 1px solid #ccc
        }
    </style>
{/literal}