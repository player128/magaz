$('.item-block').click(function() {
    let id = $(this).attr('productID');

    // $.ajax({
    //     type: "POST",
    //     url: 'cardProduct.php',
    //     data: 'id='+ id,
    //     success: function(response)
    //     {
    //         console.log(response);
    //     }
    // });    
    window.location.href = '/magaz/card/show/' + id;
  });