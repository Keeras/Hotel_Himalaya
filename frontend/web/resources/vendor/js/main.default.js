jQuery(function($) {
    "use strict";
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    $('ul a').each(function() {
        if (this.href === path) {
            $(this).addClass('active');
        }
    });
});

// var header = document.getElementById("nav-active");
// var btns = header.getElementsByClassName("nav-btn");
// for (var i = 0; i < btns.length; i++) {
//     btns[i].addEventListener("click", function(e) {
//         "use strict";
//         e.preventDefault();
//         var current = document.getElementsByClassName("active");
//         if (current.length > 0) {
//             current[0].className = current[0].className.replace(" active", "");
//         }
//         this.className += " active";
//     });
// }

$(document).ready(function () {
    "use strict";
    $('.edit-button').click(function () {
        var modal = $('#exampleModal');
        var post = $(this).parents('.post');
        var id = post.data('id');
        var name = post.find('#name').html();
        var title = post.find('#title').html();
        var content = post.find('#content').html();
        var status = post.find('#status').html();
        modal.find('[name="id"]').val(id);
        modal.find('[name="name"]').val(name);
        modal.find('[name="title"]').val(title);
        modal.find('[name="content"]').val(content);
        modal.find('[name="status"]').val(status);
        // console.log(status);
        modal.modal('show');
    });

    $('.add-button').click(function () {
        $(".modal").find('input, textarea').val('');
    });

    $('#exampleModal button[type="submit"]').click(function(e){
        e.preventDefault();
        var formdata = $(this).parents('.search-form').serialize();
        console.log(formdata)
        $.ajax({
            url: baseUrl + "/blog/update",
            type: 'post',
            data: formdata,
            success: function (data) {
                if(data==1){
                    alert('Success, ' + data);
                }else{
                    alert('Failed, ' + data);
                }
            },
            error: function () {
                alert('Server Error');
            }
        });


    });

// $(document).ready(function() {
//     $( ".mr-auto .nav-item" ).bind( "click", function(event) {
//         event.preventDefault();
//         var clickedItem = $( this );
//         $( ".mr-auto .nav-item" ).each( function() {
//             $( this ).removeClass( "active" );
//         });
//         clickedItem.addClass( "active" );
//     });
});