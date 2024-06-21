$(function(){
    /*
     * For the sake keeping the code clean and the examples simple this file
     * contains only the plugin configuration & callbacks.
     *
     * UI functions ui_* can be located in:
     *   - assets/demo/uploader/js/ui-main.js
     *   - assets/demo/uploader/js/ui-multiple.js
     *   - assets/demo/uploader/js/ui-single.js
     */
    $('#drag-and-drop-zone').dmUploader({ //
        url: DOMAIN_NAME+'/upload.php',
        maxFileSize: 3000000, // 3 Megs
        allowedTypes: 'image/*',
        extFilter: ["jpg", "jpeg","png","gif"],
        onDragEnter: function(){
            // Happens when dragging something over the DnD area
            this.addClass('active');
        },
        onDragLeave: function(){
            // Happens when dragging something OUT of the DnD area
            this.removeClass('active');
        },
        onInit: function(){
            // Plugin is ready to use
            ui_add_log('Penguin initialized :)', 'info');

        },
        onComplete: function(){
            // All files in the queue are processed (success or error)
            ui_add_log('All pending tranfers finished');
        },
        onNewFile: function(id, file){
            // When a new file is added using the file selector or the DnD area
            ui_add_log('New file added #' + id);
            ui_multi_add_file(id, file);

            if (typeof FileReader !== "undefined"){
                var reader = new FileReader();
                var img = $('#uploaderFile' + id).find('img');

                reader.onload = function (e) {
                    img.attr('src', e.target.result);
                }
                reader.readAsDataURL(file);
            }
        },
        onBeforeUpload: function(id){
            // about tho start uploading a file
            ui_add_log('Starting the upload of #' + id);
            ui_multi_update_file_progress(id, 0, '', true);
            ui_multi_update_file_status(id, 'uploading', 'Uploading...');
        },
        onUploadProgress: function(id, percent){
            // Updating file progress
            ui_multi_update_file_progress(id, percent);
        },
        onUploadSuccess: function(id, data){
            // A file was successfully uploaded
            ui_add_log('Server Response for file #' + id + ': ' + JSON.stringify(data));
            ui_add_log('Upload of file #' + id + ' COMPLETED', 'success');
            ui_multi_update_file_status(id, 'success', 'Upload Complete');
            ui_multi_update_file_progress(id, 100, 'success', false);
            alertify.success('Upload Complete');
            // alert('success');
            $.ajax({
                type: "POST",
                url: path_ajax_script + '/index.php?mod=' + mod + '&act=ajAddMutiGallery&tour_id='+$tour_id,
                data: data,
                dataType: "json",
                success: function(json) {
                    // console.log(json);
                    $('#uploaderFile' + id).find('a').attr({'data-target':'#edit_tour_image_'+json['max_id'],'id':'image_galry_'+json['max_id'],'title':json['title']});
                    $('#uploaderFile' + id).find('.modal').attr({'aria-labelledby':'edit_tour_image_'+json['max_id']+'Label','id':'edit_tour_image_'+json['max_id']});
                    $('#uploaderFile' + id).find('.modal-title').attr('id','edit_tour_image_'+json['max_id']+'Label').text(json['title']);
                    $('#uploaderFile' + id).find('.isoman_show_image').attr({'src':json['image_rz'],'alt':json['title'],'id':'isoman_show_image_'+json['max_id']});
                    $('#uploaderFile' + id).find('input[name=isoman_url_image]').val(json['path']).attr('id','isoman_hidden_image_'+json['max_id']);
                    $('#uploaderFile' + id).find('.ajOpenDialog').attr({'isoman_val':json['path'],'isoman_for_id':'image_'+json['max_id']});
                    if(json['path']){
                        $('#uploaderFile' + id).find('.deleteItemImage').attr('pvalTable',json['max_id']).show();
                    }else{
                        $('#uploaderFile' + id).find('.deleteItemImage').attr('pvalTable',json['max_id']).hide();
                    }

                    $('#uploaderFile' + id).find('.imgTour_image').attr({'isoman_val':json['path'],'id':'imgTour_image'+json['max_id']});
                    $('#uploaderFile' + id).find('input[name=image_src]').val(json['path']).attr('id','imgTour_hidden'+json['max_id']);
                    $('#uploaderFile' + id).find('input[name=title]').val(json['title']);
                    $('#uploaderFile' + id).find('.close_image').attr('pvalTable',json['max_id']);
                    $('#uploaderFile' + id).find('.save_edit_img_gallery').attr('pvalTable',json['max_id']);
                }
            });
            $('.ko-progress-circle').attr('data-progress', count_run * rate_progress);
            $('#uploaderFile'+id).find('.backdrop_upload').hide();
            // alert(count_run * rate_progress);
            count_run ++;
            if(count == count_run){
                $('#result_count').html('Upload success');
                setTimeout(function(){
                    $('.progress_circle').fadeOut(1000);
                }, 2000);
                setTimeout(function(){
                    $('.ko-progress-circle').attr('data-progress', '0');
                    count = 1;
                    count_run = 1;
                    rate_progress = 0;
                }, 3000);

            }
        },
        onUploadError: function(id, xhr, status, message){
            ui_multi_update_file_status(id, 'danger', message);
            ui_multi_update_file_progress(id, 0, 'danger', true);
        },
        onFallbackMode: function(){
            // When the browser doesn't support this plugin :(
            ui_add_log('Plugin cant be used here, running Fallback callback', 'danger');
        },
        onFileSizeError: function(file){
            ui_add_log('File \'' + file.name + '\' cannot be added: size excess limit', 'danger');
        },
        onFileTypeError: function(file){
            ui_add_log('File \'' + file.name + '\' cannot be added: must be an image (type error)', 'danger');
        },
        onFileExtError: function(file){
            ui_add_log('File \'' + file.name + '\' cannot be added: must be an image (extension error)', 'danger');
        }
    });
    function ui_add_log(message, color)
    {
        var d = new Date();

        var dateString = (('0' + d.getHours())).slice(-2) + ':' +
            (('0' + d.getMinutes())).slice(-2) + ':' +
            (('0' + d.getSeconds())).slice(-2);

        color = (typeof color === 'undefined' ? 'muted' : color);

        var template = $('#debug-template').text();
        template = template.replace('%%date%%', dateString);
        template = template.replace('%%message%%', message);
        template = template.replace('%%color%%', color);

        $('#debug').find('li.empty').fadeOut(); // remove the 'no messages yet'
        $('#debug').prepend(template);
    };

// Changes the status messages on our list


// Updates a file progress, depending on the parameters it may animate it or change the color.
    
});