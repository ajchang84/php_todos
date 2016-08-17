$(document).ready(function(){
  $(".toggle").dblclick(function() {
    $(this).hide();
    $(this).next().toggleClass('hidden').focus()
    $(this).next().next().hide()
  });

  $('.checkbox').change(function() {
    if($(this).is(":checked")) {
      $(this).next().css('text-decoration', 'line-through');  
    } else {
      $(this).next().css('text-decoration', 'none');  
    }
    
    $id = $(this).val();
    $.ajax({
      url: 'http://localhost:8000/todos/' + $id + '/check',
      type: 'PUT',
    });
  });

  $(".edit").focusout(function() {
    $(this).toggleClass('hidden')
    $(this).prev().show()
    $(this).next().show()
    $edit = $(this).val()
    $id = $(this).data('index')
    $(this).prev().text($edit)

    $.ajax({
      url: 'http://localhost:8000/todos/' + $id + '/edit',
      type: 'PUT',
      data: "name="+$edit
    });
  });

});




