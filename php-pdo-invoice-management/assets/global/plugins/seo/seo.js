<script type="text/javascript">
$(document).ready(function(){
$('#preview_title').hide();
$('#preview_desc').hide();
$("#title").keyup(update);
$("#desc").keyup(update);
});
	
function update(){		
		
$('#preview_title').slideDown('slow');
$('#preview_desc').slideDown('slow');
var title = $("#title").val();
var desc = $("#desc").val()
$('#Displaytitle').html(title);
$('#Displaydesc').html(desc);
}
</script>