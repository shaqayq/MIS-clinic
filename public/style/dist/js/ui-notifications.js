$(document).ready(function(){

	/* =================================================================
		SweetAlert2
	================================================================= */

	$("form").submit(load("job.index"),function() {
		
					swal({
						title: 'Auto close alert!',
						text: 'I will close in 2 seconds.',
						timer: 2000,
						confirmButtonClass: 'btn btn-primary btn-lg',
						buttonsStyling: false
					});}
				
	});

	/* =================================================================
		Toastr
	================================================================= */

	$('.run-toast').on('click', function() {
		var type = $(this).data('type')
		if (type === 'info') {
			toastr.options = {
				positionClass: 'toast-top-right'
			};
			toastr.info('Info!');
		}
		if (type === 'success') {
			toastr.options = {
				positionClass: 'toast-top-right'
			};
			toastr.success('Success!');
		}
		if (type === 'warning') {
			toastr.options = {
				positionClass: 'toast-top-right'
			};
			toastr.warning('Warning!');
		}
		if (type === 'danger') {
			toastr.options = {
				positionClass: 'toast-top-right'
			};
			toastr.error('Danger!');
		}
	});

});