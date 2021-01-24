$(document).ready(function(){

display_data();
})
function display_data(){

	$(document).on('click','#bnt_edit',function(){
     var Id =$(this).attr('data-id');
     console.log(Id);

	})
}