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
