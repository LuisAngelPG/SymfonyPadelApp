<!-- new way of doing things -->
function changeTemplate(templateUrl, idDiv) {
	$.ajax({url: templateUrl, success: function(result){
		document.getElementById(idDiv).innerHTML = result;
		finishedTemplate();
	}});
}

function changeImage(evt, idImage) {
	var tgt = evt.target || window.event.srcElement;
    var files = tgt.files;

    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function () {
            document.getElementById(idImage).src = fr.result;
        }
        fr.readAsDataURL(files[0]);
    }
}

<!-- -->

	$("#club_image").change(function(evt) {
	var tgt = evt.target || window.event.srcElement;
    var files = tgt.files;

    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function () {
            document.getElementById("clubImg").src = fr.result;
        }
        fr.readAsDataURL(files[0]);
    }
});