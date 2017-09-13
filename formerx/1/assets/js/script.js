$(document).ready(function() {

	$('#myTable').DataTable({
        "ajax": "reportlist.php",
        "columns": [
            { "data": "action" },
            { "data": "id" },
            { "data": "division" },
            { "data": "date" },
            { "data": "company" },
            { "data": "facility" },
            { "data": "location" },
            { "data": "regard" }
        ]
    });


	$('#btn_send').click(function() {
		alert ('Please wait while sending...');

		var to = $('#to').val();
		var cc = $('#cc').val();
		var subject = $('#subject').val();
		var report_type = $('#report_type').val();
		var attachment = $('#attachment').val();


		if (report_type == 'inspection') {
			var url = 'report_inspection.php';
		} else {
			var url = 'report_incident.php';
		}

	    var id = [];
	    $('td :checkbox:checked').each(function(i) {
	        id[i] = $(this).val();
	    });
	    if (id.length === 0) {
	        alert('Please select atleast one checkbox');
	    }else{
	        $.ajax({
	            url: url,
	            type: 'POST',
	            data: {id:id, report_type:report_type, to:to, cc:cc, subject:subject, attachment:attachment},
	            beforeSend:function(html){
	                $('#status').html('Sending...');
	            },
	            success:function(msg){
	                $('#status').html(msg);
		        }
	        });
	     }

    });

});