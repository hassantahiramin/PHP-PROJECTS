jQuery(document).ready(function(){

  $('#opt_search').autocomplete({
       source: "/handlers/search.php",
       minLength: 2,
       select: function(event, ui) {
           var url = ui.item.id;
       },
       open: function(event, ui) {
           $(".ui-autocomplete").css("z-index", 1000)
       }
   })


    $('#competitor').on('change',function(){
        var id = $(this).val();
        if(id){
            $.ajax({
                type:'POST',
                url:'/handlers/competitor_reference.php',
                data:'competitor_id='+id,
                success:function(html){
                    $('#customer_reference').html(html);
                }
            });
        }
    });


});
