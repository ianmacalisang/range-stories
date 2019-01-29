$(document).ready(function() {

$(".topic-guide").click(function(){
    $(this).closest('form').find('.topic-guide-inner').slideToggle();
    console.log('clicked');
});

    $('input[id="check-share"]').click(function() {
        if ($(this).prop("checked") == true) {
            $(this).closest('form').find('input[name=sender]').attr({
                required: false,
                readonly: true
            }).val("Anonymous");

        } else if ($(this).prop("checked") == false) {
            $(this).closest('form').find('input[name=sender]').attr({
                required: true,
                disabled: false,
                readonly: false
            }).val("Your Name");
        }
    });


    tinymce.init({
        selector: '#story-textarea',
        plugins: "image",
        menubar: false,
        toolbar_items_size: 'small',
    });

    $(".to-overlay").on({
        mouseenter: function() {
            $(this).children(".story-overlay").show("fast");
        },
        mouseleave: function() {
            $(this).children(".story-overlay").hide("fast");
        }
    }, ".story_container");


    $('#subscribe-form').on('submit', function() {
        $('#subscribe-submit').prop('disabled', true).html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Please Wait...');
        console.log('processing...');
    });
    
    
    $('#shareStoryForm').on('submit', function() {
        $('#shareStorySubmit').prop('disabled', true).html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Posting...');
        console.log('processing...');
    });
    

    $('#propertyForm').on('submit', function() {
        $('#propertySubmit').prop('disabled', true).html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Sending...');
        console.log('processing...');
    });

    $('#moveForm').on('submit', function() {
        $('#moveSubmit').prop('disabled', true).html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Sending...');
        console.log('processing...');
    });
    
    $('#homeForm').on('submit', function() {
        $('#homeSubmit').prop('disabled', true).html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Sending...');
        console.log('processing...');
    });
    
    $('#relocationForm').on('submit', function() {
        $('#relocationSubmit').prop('disabled', true).html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Sending...');
        console.log('processing...');
    });
    
    $('#creativeForm').on('submit', function() {
        $('#creativeSubmit').prop('disabled', true).html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i> Sending...');
        console.log('processing...');
    });


    $(function() {
        return $(".modal").on("show.bs.modal", function() {
            var curModal;
            curModal = this;
            $(".modal").each(function() {
                if (this !== curModal) {
                    $(this).modal("hide");
                }
            });
        });
    });

    function share_fb(url) {
        window.open('https://www.facebook.com/sharer/sharer.php?u=' + url, 'facebook-share-dialog', "width=626,height=436");
    }

    
    $('video, audio').mediaelementplayer({videoVolume:'horizontal',videoWidth:'100%',hideVideoControlsOnLoad:true,features:['playpause','progress','volume','fullscreen'],});

// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

$(function(){
    $('#modal_image').on('show.bs.modal', function (e) {
       var src = $(e.relatedTarget).attr('src');
       $(this).find('.modal-body > img.image_modal').attr('src', src);
    });
});
//email validation
$('#emailLogin').on('change', function() {
    var email = $('#emailLogin').val();
    var action = 'validateEmail';
    $.ajax({
    	type: "POST",
        url: "/includes/process.php?action=validateEmail",
        data:"email=" + email,
        dataType: 'json',
        success: function(data) {
            if(data.result) {
                $('#validationAlert').addClass('alert-danger').html('<i class="fa fa-window-close-o" aria-hidden="true"></i>&nbsp;&nbsp;Email is already taken.').show();
                 $('#loginSubmit').prop('disabled',true);
                console.log('checking');
            }
            else {
                $('#validationAlert').addClass('alert-success').html('<i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Email is available.').show();
                $('#loginSubmit').prop('disabled',false);
                console.log('checking');
            }
        },
        error: function(data){
            alert('Error');
            console.log('checking');
        }
    });
	});
	
	
//validate login
$("#but_submit").click(function(){
        var email = $("#email").val().trim();
        var password = $("#password").val().trim();

        if( email != "" && password != "" ){
            $.ajax({
                url:'/includes/login.php',
                type:'post',
                data:{email:email,password:password},
                beforeSend: function() {
                	 $('#but_submit').prop('disabled', true).html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>');
                },
                success:function(response){
                    var msg = "";
                    if(response == 1){
                       location.href="/dashboard/";
                       console.log('good');
                    }else{
                        var msg = "Invalid email and password!";
                        console.log('invalid');
                        $('#but_submit').prop('disabled', false).html('LOG ME IN');
                    }
                    $("#loginMsg").html(msg);
                }
            });
        }
    });
	
	
// DASHBOARD

$('#paginate').on('click','.actionButton',function(){
        event.stopPropagation()
        var element = $(this);
        var id = element.attr("id");
        var action = element.attr("data-callback");
        var info = 'id='+id+'&action='+action;
            if(confirm("Are you sure?"))
            {
                $.ajax({
                    type: "POST",
                    url: "/includes/callback.php",
                    data: info,
                     success: function(){
                        console.log('success');
                        },
                     error: function(data){
                        console.log(data);
                        }   
            });
            	if(action == "deleteStory"){
            		$(this).parents("#storyContainer").fadeOut();  
            	}
            	if(action == "approveStory"){
            		$(this).parents("#storyContainer").fadeOut();  
            		alert('Story Approved');
            	}
            	if(action == "toReview"){
            		$(this).parents("#storyContainer").fadeOut();  
            		alert('Story sent for Review');
            	}
            	if(action == "toFeature"){
            		$(this).parents("#storyContainer").find('.feature-slot').html('<div class="label label-success">Featured</div>');  
            		alert('Story set as featured');
            	} 
            	if(action == "toUnfeature"){
            		$(this).parents("#storyContainer").find('.feature-slot').fadeOut();  
            		alert('Story unfeatured');
            	}
            	if(action == "deletePhoto"){
            		$(this).parents("#photoContainer").fadeOut();
            		alert('Photo Deleted');
            	}        
            }
        return false;
    });
	
		
});