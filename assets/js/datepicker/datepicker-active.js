<<<<<<< HEAD
(function ($) {
 "use strict";
 
	// Datepickers
		$('#start').datepicker({
			dateFormat: 'dd.mm.yy',
			prevText: '<i class="fa fa-chevron-left"></i>',
			nextText: '<i class="fa fa-chevron-right"></i>',
			onSelect: function( selectedDate )
			{
				$('#finish').datepicker('option', 'minDate', selectedDate);
			}
		});
		$('#finish').datepicker({
			dateFormat: 'dd.mm.yy',
			prevText: '<i class="fa fa-chevron-left"></i>',
			nextText: '<i class="fa fa-chevron-right"></i>',
			onSelect: function( selectedDate )
			{
				$('#start').datepicker('option', 'maxDate', selectedDate);
			}
		});
 
=======
(function ($) {
 "use strict";
 
	// Datepickers
		$('#start').datepicker({
			dateFormat: 'dd.mm.yy',
			prevText: '<i class="fa fa-chevron-left"></i>',
			nextText: '<i class="fa fa-chevron-right"></i>',
			onSelect: function( selectedDate )
			{
				$('#finish').datepicker('option', 'minDate', selectedDate);
			}
		});
		$('#finish').datepicker({
			dateFormat: 'dd.mm.yy',
			prevText: '<i class="fa fa-chevron-left"></i>',
			nextText: '<i class="fa fa-chevron-right"></i>',
			onSelect: function( selectedDate )
			{
				$('#start').datepicker('option', 'maxDate', selectedDate);
			}
		});
 
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
})(jQuery); 