<<<<<<< HEAD
(function ($) {
 "use strict";

		var $table = $('#table');
				$('#toolbar').find('select').change(function () {
					$table.bootstrapTable('destroy').bootstrapTable({
						exportDataType: $(this).val()
					});
				});
 
=======
(function ($) {
 "use strict";

		var $table = $('#table');
				$('#toolbar').find('select').change(function () {
					$table.bootstrapTable('destroy').bootstrapTable({
						exportDataType: $(this).val()
					});
				});
 
>>>>>>> 611e77ae89cd9b84b10f51cb1675f1cc82593a4d
})(jQuery); 