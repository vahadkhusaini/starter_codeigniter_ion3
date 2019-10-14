	$('.delete-info').on('click', function () {
	    const Id = $(this).data('id');
	    const User = $(this).data('name');

	    $('#userId').html(Id);
	    $('#user').html(User);
	    $('#username').val(User);
    });
    
$('#delete_user').on('click', function () {
	const Id = $('#userId').val();

	$.ajax({
	    url: "<?= base_url('auth/delete_user'); ?>",
	    type: 'post',
	    data: {
            Id: Id
	    },
	    success: function () {
	        document.location.href = "<?= base_url('auth/index'); ?>";
        }
    });
});