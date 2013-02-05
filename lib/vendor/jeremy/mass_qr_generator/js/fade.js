$.ajax({cache: false});


$(function () {
    
    $('#video-content').fadeOut();
    $('#upload-content').fadeOut();

    $('#photos').click(function () {
    $('#photo-content').fadeIn();
      $('#video-content').fadeOut();
    $('#upload-content').fadeOut();
		
    });
    
    $('#videos').click(function () {
    	$('#photo-content').fadeOut();
    	$('#video-content').fadeIn();
    	$('#upload-content').fadeOut();
    });
    
    $('#upload').click(function () {
		$('#photo-content').fadeOut();
    	$('#video-content').fadeOut();
    	$('#upload-content').fadeIn();
    });

});
