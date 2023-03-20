
$('.buttonMain').click(function(){
    if($(this).text()=='Expand'){
      $('.content').show();
      $(this).text('Collapse');
    } else {
      $('.content').hide();
      $(this).text('Expand');
    }
  });