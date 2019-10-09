<script type="text/javascript">
	$(function(){
		
		//appointment
		 $('.appointment-form').submit(function(e){
		 	e.preventDefault();

		 	var data = $(this).serialize() + '&submit=appointment';
	        $.post($(this).attr('action'),data,function(d,r){

	            if (r !== 'success') {
	                //error server
	                alert('Server Error');
	               
	            }
	            if (d.trim() === '0') {
	                // form couldn't be submitted
	                 alert("Appointment form added couldn't be submitted!");
	            }
	            else if (d.trim() === '1')
	            {
	                // successful submit
	                alert("Appointment submitted successfully!");
	                window.location.reload();
	            }

	        });
		 });

		//vehicle
		$('#vehicle-form').submit(function(e){
			e.preventDefault();

		 	var data = $(this).serialize() + '&submit=vehicle';
	        $.post($(this).attr('action'),data,function(d,r){

	            if (r !== 'success') {
	                //error server
	                alert('Server Error');
	               
	            }
	            if (d.trim() === '0') {
	                // form couldn't be submitted
	                 alert("Vehicle form added couldn't be submitted!");
	            }
	            else if (d.trim() === '1')
	            {
	                // successful submit
	                alert("Vehicle submitted successfully!");
	                window.location.reload();
	            }

	        });
		 });

		//customer
		$('#customer-form').submit(function(e){

			e.preventDefault();

		 	var data = $(this).serialize() + '&submit=customer';
	        $.post($(this).attr('action'),data,function(d,r){

	            if (r !== 'success') {
	                //error server
	                alert('Server Error');
	               
	            }
	            if (d.trim() === '0') {
	                // form couldn't be submitted
	                 alert("Customer form added couldn't be submitted!");
	            }
	            else if (d.trim() === '1')
	            {
	                // successful submit
	                alert("Customer submitted successfully!");
	                window.location.reload();
	            }

	        });
		 });


		$('.select2-customers').on('change',function(){
			location.search = '?customer=' + $(this).val();
		});
	})
</script>