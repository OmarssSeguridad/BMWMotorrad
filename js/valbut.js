$('#btnSubmit').click(function(e) {
  e.preventDefault();
  if ($('form').smkValidate()) {
  	 $('form').submit();
  }
  else{
  	$.smkAlert({
      text: 'Faltan datos!',
      type: 'warning'
    });
  }
});

// Form Clear
$('#btnClear').click(function(e) {
  e.preventDefault();
  $('form').smkClear();
});
$(document).ready(function() {
  $("a[rel=example_group]").fancybox({
    'transitionIn'    : 'none',
    'transitionOut'   : 'none',
    'titlePosition'   : 'over',
    'titleFormat'   : function(title, currentArray, currentIndex, currentOpts) {
      return '<span id="fancybox-title-over">Foto ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
    }
  });
});