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
        url: URL_JS+'/uploader-master/demo/backend/upload.php',
        maxFileSize: 3000000, // 3 Megs max
        auto: false,
        queue: false,
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
        },
        onBeforeUpload: function(id){
            // about tho start uploading a file
            ui_add_log('Starting the upload of #' + id);
            ui_multi_update_file_status(id, 'uploading', 'Uploading...');
            ui_multi_update_file_progress(id, 0, '', true);
            ui_multi_update_file_controls(id, false, true);  // change control buttons status
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
            ui_multi_update_file_controls(id, false, false);  // change control buttons status
        },
        onUploadCanceled: function(id) {
            // Happens when a file is directly canceled by the user.
            ui_multi_update_file_status(id, 'warning', 'Canceled by User');
            ui_multi_update_file_progress(id, 0, 'warning', false);
            ui_multi_update_file_controls(id, true, false);
        },
        onUploadError: function(id, xhr, status, message){
            // Happens when an upload error happens
            ui_multi_update_file_status(id, 'danger', message);
            ui_multi_update_file_progress(id, 0, 'danger', false);
            ui_multi_update_file_controls(id, true, false, true); // change control buttons status
        },
        onFallbackMode: function(){
            // When the browser doesn't support this plugin :(
            ui_add_log('Plugin cant be used here, running Fallback callback', 'danger');
        },
        onFileSizeError: function(file){
            ui_add_log('File \'' + file.name + '\' cannot be added: size excess limit', 'danger');
        }
    });

    /*
      Global controls
    */
    $('#btnApiStart').on('click', function(evt){
        evt.preventDefault();

        $('#drag-and-drop-zone').dmUploader('start');
    });

    $('#btnApiCancel').on('click', function(evt){
        evt.preventDefault();

        $('#drag-and-drop-zone').dmUploader('cancel');
    });

    /*
      Each File element action
     */
    $('#files').on('click', 'button.start', function(evt){
        evt.preventDefault();

        var id = $(this).closest('li.media').data('file-id');
        $('#drag-and-drop-zone').dmUploader('start', id);
    });

    $('#files').on('click', 'button.cancel', function(evt){
        evt.preventDefault();

        var id = $(this).closest('li.media').data('file-id');
        $('#drag-and-drop-zone').dmUploader('cancel', id);
    });
});