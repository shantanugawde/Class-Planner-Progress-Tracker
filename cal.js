$(document).ready(function () {
	$("#my-calendar").zabuto_calendar( { action: function() { myDateFunction(this.id); } } );
	var classList = $('#head').attr('class').split(/\s+/);
$.each(classList, function(index, item) {
    alert(item);
});
});
function myDateFunction(id) {
	//alert("yo");
	var date = $("#" + id).data("date");
	var hasEvent = $("#" + id).data("hasEvent");
	var dialog = document.querySelector('dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialog.showModal();
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
}