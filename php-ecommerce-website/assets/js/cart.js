jQuery(document).ready(function(){
cart_count();
cart_summary()
      // This button will increment the value
      $('.quantity-plus').click(function(e){
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          fieldName = $(this).attr('field');
          // Get its current value
          var currentVal = parseInt($('input[name='+fieldName+']').val());
          // If is not undefined
          if (!isNaN(currentVal)) {
              // Increment
              $('input[name='+fieldName+']').val(currentVal + 1);
          } else {
              // Otherwise put a 0 there
              $('input[name='+fieldName+']').val(1);
          }
      });
      // This button will decrement the value till 0
      $(".quantity-minus").click(function(e) {
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          fieldName = $(this).attr('field');
          // Get its current value
          var currentVal = parseInt($('input[name='+fieldName+']').val());
          // If it isn't undefined or its greater than 0
          if (!isNaN(currentVal) && currentVal > 1) {
              // Decrement one
              $('input[name='+fieldName+']').val(currentVal - 1);
          } else {
              // Otherwise put a 0 there
              $('input[name='+fieldName+']').val(1);
          }
      });

      $("#myField").keyup(function() {
          var e = $("#myField");
          if(isNaN(e.val())){
              e.val(e.val().match(/[0-9]*/));
          }
      });

      $('#AddToCart').on('click', function(e) {
              e.preventDefault();
              var action = "add";
              var quantity = $("#qty").val();
              var product_id = $("#product_id").val();
              dataString = 'cmd=' + action + '&quantity=' + quantity + '&product_id=' + product_id;
              $.ajax({
                  url     : '/handlers/cart.php',
                  type    : 'POST',
                  data    : dataString,
                  success : function (data) {
                    $("#cart_message").html(data);
                    cart_count();
                    cart_summary();
                   }
              })
            });

      $('#Cart').on('click', '.button-add-to-cart', function(e) {
              e.preventDefault();
              var action = "add";
              var quantity = $("#qty").val();
              //var product_id = $(this).val();
              var product_id = $(this).attr('pid');
              dataString = 'cmd=' + action + '&quantity=' + quantity + '&product_id=' + product_id;
              $.ajax({
                  url     : '/handlers/cart.php',
                  type    : 'POST',
                  data    : dataString,
                  success : function (data) {
                     $("#SuccessMessage").modal('show');
                     cart_count();
                     cart_summary();
                   }
              })
            });

      $('#cart_container').on('click', '.css', function(e) {
              e.preventDefault();
              $.ajax({
                  url     : '/handlers/cart.php',
                  type    : 'POST',
                  data    : {get_cart_product:1},
                  success : function (data) {
                     $("#cart_product").html(data);
                   }
              })
            });

      $('#goback').click(function () {
              parent.history.back();
              return false;
          });

      $('#senditCancel').click(function (e) {
              $('#sendfrm').slideUp("slow");
          });

      $('#sendf').click(function (e) {
              e.preventDefault();
              if ($('#sendfrm').is(":hidden")) {
                  $('#sendfrm').slideDown("slow");
              }
              else {
                  $('#sendfrm').slideUp("slow");
              }
          });

      $('#qty').bind('keyup blur', function () {
              $(this).val($(this).val().replace(/[^0-9\.]/g, ''));
          });

      function cart_count(){
      	$.ajax({
      		url 	: "/handlers/cart.php",
      		method 	: "POST",
      		data 	: {cart_count:1},
      		success : function(data){
      			$(".count").html(data);
      		}
      	})
      }

      function cart_summary(){
      	$.ajax({
      		url 	: "/handlers/cart.php",
      		method 	: "POST",
      		data 	: {cart_summary:1},
      		success : function(data){
      			$(".sub-total").html(data);
      		}
      	})
      }

      cart_checkout();
      function cart_checkout(){
      	$.ajax({
      		url 	: "/handlers/cart.php",
      		method 	: "POST",
      		data 	: {get_cart_details:1},
      		success : function(data){
      			$("#cart_checkout").html(data);
      		}
      	})
      }

      $('#cart_checkout').on('click', '.remove', function(event) {
      	event.preventDefault();
      	var parent_name = $(this).attr("remove_id");
      	$.ajax({
      		url 	: "/handlers/cart.php",
      		method 	: "POST",
      		data 	: {RemoveFromCart:1,removeId:parent_name},
      		success : function(data){
      			$("#cart_msg").html(data);
      			cart_checkout();
            cart_count();
            cart_summary();
      		}
      	})
      })

      $('#cart_checkout').on('click', '.update', function(event) {
      	event.preventDefault();
        var pid = $(this).attr("update_id");
      	var quantity = $("#qty-"+pid).val();
      	$.ajax({
      		url 	: "/handlers/cart.php",
      		method 	: "POST",
      		data 	: {UpdateCartProduct:1,updateId:pid,quantity:quantity},
      		success : function(data){
      			$("#cart_msg").html(data);
            cart_checkout();
            cart_count();
            cart_summary();
      		}
      	})
      })



});
