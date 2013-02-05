// close photo preview block
function closePhotoPreview() {
$('#photo_preview').hide();
$('#photo_preview .pleft').html('empty');
$('#photo_preview .pright').html('empty');
};
 
// display photo preview block
function getPhotoPreviewAjx(id) {
$.post('photos_ajx.php', {action: 'get_info', id: id},
function(data){
$('#photo_preview .pleft').html(data.data1);
$('#photo_preview .pright').html(data.data2);
$('#photo_preview').show();
}, "json"
);
};
 
 
// init
$(function(){
 
// onclick event handlers
$('#photo_preview .photo_wrp').click(function (event) {
event.preventDefault();
 
return false;
});
$('#photo_preview').click(function (event) {
closePhotoPreview();
});
$('#photo_preview img.close').click(function (event) {
closePhotoPreview();
});
 
// display photo preview ajaxy
$('.container .photo img').click(function (event) {
if (event.preventDefault) event.preventDefault();
 
getPhotoPreviewAjx($(this).attr('id'));
});
})
