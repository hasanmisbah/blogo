

$(function(){



  $('.timestamp').each(function(){
    var getTime = $('.timestamp').val();
    // var updatedTime = getTime.moment(getTime).format('lll').fromNow();
    //$('.timestamp').val(updatedTime);
    var updated = moment(getTime).format();
    $('.timestamp').val(updated);
  });
  /* Login and Signup Page */

  // By Default signup Will be hidden
  $('#signup').hide();

  $('.alert').alert();

  //Check To see is clicked
  $('.panel-heading h3').on('click', function(){

    // check which one clicked login or signup
    if ($(this).attr('id') == 'login-form-handler'){
      $('#signup-form-handler').removeClass('active');
      $(this).addClass('active');
      $('#signup').fadeOut('fast');
      $('#login').fadeIn('fast');
    }
    
    //Check to if signup button Clicked
    else if ($(this).attr('id') == 'signup-form-handler'){
      $('#login').fadeOut('fast');
      $('#signup').fadeIn('fast');
      $('#login-form-handler').removeClass('active');
      $(this).addClass('active');
    }

  });
});
CKEDITOR.replace('pageeditor');
CKEDITOR.replace('posteditor');
