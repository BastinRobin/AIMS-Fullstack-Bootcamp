<footer class="footer">
      <div class="container">
        <p class="text-muted">HashResearch Labs</p>
      </div>
    </footer>
</body>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/sweetalert-dev.js"></script>

	<script type="text/javascript">
		var rangeValues =
		{
		    "1": "Poor",
		    "2": "Average",
		    "3": "Good",
		    "4": "Excellent"
		};
	

		$('document').ready(function() {
			for (i=1; i <= 10; i++) {
				// $('#txt'+i).text(rangeValues[$('#range'+i).val()]);
				// setup an event handler to set the text when the range value is dragged (see event for input) or changed (see event for change)
				$('#range'+i).on('input change', function () {
					a = $(this).attr('id').replace('range','');
				    $('#txt'+a).addClass(rangeValues[$(this).val()]).text(rangeValues[$(this).val()]);
				});
			}
		});
		    

		$('.submit').click(function(e) {
			e.preventDefault();
			swal({
			  title: "Are you sure?",
			  text: "Once submitted you cannot revert back",
			  type: "info",
			  showCancelButton: true,
			  confirmButtonColor: "#DD6B55",
			  confirmButtonText: "Yes, Submit it!",
			  closeOnConfirm: false
			},
			function(){
				$('.loader').append('<img src="img/ajax-loader.gif">');

				$.ajax({
					url: 'http://sentiment.vivekn.com/api/text/',
					method: "POST",
					data: {'txt': $('.comments').val() }
				}).then(function(data) {

					formdata = $('#app-form').serializeArray();
					formdata.push({'name': 'confidence', 'value': data.result.confidence});
					formdata.push({'name': 'sentiment', 'value': data.result.sentiment});

					$.ajax({
						url: 'process.php',
						method: 'POST',
						data: formdata
					}).then(function(d) {
						
						swal("Good job!", "You feedback has been successfully recieved", "success")
						$('.loader').html("<div class='alert alert-success'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Your feedback has been successfully submitted</div>");

						$('#app-form').reset();
					});

				});
			});


			
		});

	</script>
</html>