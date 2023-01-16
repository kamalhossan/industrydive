$ = jQuery;
$(function() {
    var header = $(".header_menu");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            $(".header_menu").addClass("sticy_header");

        } else {
            $(".header_menu").removeClass("sticy_header");
        }
    });

    let currentPage = 1;
    $('#load-more').on('click', function() {
      currentPage++; // Do currentPage + 1, because we want to load the next page
    
      $.ajax({
        type: 'POST',
        url: '/wp-admin/admin-ajax.php',
        dataType: 'json',
        data: {
          action: 'industrydive_load_more',
          paged: currentPage,
        },
        success: function (res) {
          if(currentPage >= res.max) {
            $('#load-more').hide();
          }
          $('.home_latest').append(res.html);
        }
      });
    });
});

