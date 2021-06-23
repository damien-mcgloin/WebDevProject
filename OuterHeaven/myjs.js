
$(function() {

  //add a click event to the element id title1
  var text = $(".product1").text();

  if (text == "Remove") {

    $(".product").on("click", function(e) {

      $(".product").html('Add to cart');
      console.log('I was clicked');

    });
  }

});
