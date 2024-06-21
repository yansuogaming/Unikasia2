  /*
   * Some helper functions to work with our UI and keep our code cleaner
   */

// Adds an entry to our debug area

  function ui_multi_add_file(id, file)
  {
    var template = $('#files-template').text();
    template = template.replace('%%filename%%', file.name);

    template = $(template);
    template.prop('id', 'uploaderFile' + id);
    template.data('file-id', id);

    $('#files').find('li.empty').fadeOut(); // remove the 'no files yet'
    $('#files').prepend(template);
  }
  function ui_multi_update_file_status(id, status, message)
  {
    $('#uploaderFile' + id).find('#result_count').html(message).prop('class', 'status text-' + status);
  }

// Creates a new file and add it to our list
  function ui_multi_update_file_progress(id, percent, color, active)
  {
    color = (typeof color === 'undefined' ? false : color);
    active = (typeof active === 'undefined' ? true : active);

    var bar = $('#uploaderFile' + id).find('div.progress-bar');

    bar.width(percent + '%').attr('aria-valuenow', percent);
    bar.toggleClass('progress-bar-striped progress-bar-animated', active);

    if (percent === 0){
      bar.html('');
    } else {
      bar.html(percent + '%');
    }

    if (color !== false){
      bar.removeClass('bg-success bg-info bg-warning bg-danger');
      bar.addClass('bg-' + color);
    }
  }