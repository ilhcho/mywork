/*Dialog
  $(function() {
  	$( "#dialog" ).dialog({
  dialogClass: "no-close",
  buttons: [
    {
      text: "close",
      click: function() {
        $( this ).dialog( "close" );
      }
    }
  ]
});


    $( "#dialog" ).dialog({
    position: { my: "left+70% bottom", at: "right", of: button },
	width:500
});
  });
*/
//Draggable for folders
	$(document).ready(function(){
		$('div.box').draggable({
			scroll:false			
		});
	});
//Draggble for note
$(document).ready(function(){
		$('div.note_move').draggable({
			scroll:false			
		});
	});
//Draggable for opend box
	$(document).ready(function(){
		$('div.modal-box').draggable({
			scroll:false			
		});
	});
$(document).ready(function(){
		$('div.reference_modal_box').draggable({
			scroll:false			
		});
	});
$(document).ready(function(){
		$('div.education_modal_box').draggable({
			scroll:false			
		});
	});
$(document).ready(function(){
		$('div.pro_skill_computer').draggable({
			scroll:false			
		});
	});
$(document).ready(function(){
		$('div.potential_skill_computer').draggable({
			scroll:false			
		});
	});
$(document).ready(function(){
		$('div.papers_grades').draggable({
			scroll:false			
		});
	});
$(document).ready(function(){
		$('div.wordPress_modal_box').draggable({
			scroll:false			
		});
	});

// Start button slide
	$(document).ready(function(){
  $("#start_button").click(function(){
    $("#start_menu").toggle();
  });
});

/* Computer light box*/
	$(function(){
	var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");
		$('a[data-modal-id]').click(function(e) {
			e.preventDefault();
	    $("body").append(appendthis);
	    $(".modal-overlay").fadeTo(500, 0.7);
	    //$(".js-modalbox").fadeIn(500);
			var modalBox = $(this).attr('data-modal-id');
			$('#'+modalBox).fadeIn($(this).data());
		});  
	$(".js-modal-close, .modal-overlay").click(function() {
	    $(".modal-box, .modal-overlay").fadeOut(500, function() {
	        $(".modal-overlay").remove();
	    });
	});
	$(window).resize(function() {
	    $(".modal-box").css({
	        top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
	        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
	    });
	});
	$(window).resize();
});

/* Programming skill in computer*/
	$(function(){
	var appendthis =  ("<div class='modal_overlay_skill js-modal-close'></div>");
		$('a[data-modal-skill]').click(function(e) {
			e.preventDefault();
	    $("body").append(appendthis);
	    $(".modal_overlay_skill").fadeTo(500, 0.7);
	    //$(".js-modalbox").fadeIn(500);
			var modalBox = $(this).attr('data-modal-skill');
			$('#'+modalBox).fadeIn($(this).data());
		});  	  
	$(".js-modal-close-skill, modal_overlay_skill").click(function() {
	    $(".pro_skill_computer, .modal_overlay_skill").fadeOut(500, function() {
	        $(".modal_overlay_skill").remove();
	    });
	});	 
});

/* Potential skill in computer*/
$(function(){

	var appendthis =  ("<div class='modal_overlay_skill js-modal-close'></div>");

		$('a[data-modal-skill]').click(function(e) {
			e.preventDefault();
	    $("body").append(appendthis);
	    $(".modal_overlay_skill").fadeTo(500, 0.7);
	    //$(".js-modalbox").fadeIn(500);
			var modalBox = $(this).attr('data-modal-skill');
			$('#'+modalBox).fadeIn($(this).data());
		});  
	$(".js-modal-close-skill, .modal_overlay_skill").click(function() {
	    $(".potential_skill_computer, .modal_overlay_skill").fadeOut(500, function() {
	        $(".modal_overlay_skill").remove();
	    });
	});
});

/* Education Folder light box*/
	$(function(){
	var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

		$('a[data-modal-id]').click(function(e) {
			e.preventDefault();
	    $("body").append(appendthis);
	    $(".modal-overlay").fadeTo(500, 0.7);
	    //$(".js-modalbox").fadeIn(500);
			var modalBox = $(this).attr('data-modal-id');
			$('#'+modalBox).fadeIn($(this).data());
		});  
	  
	$(".js-modal-close, .modal-overlay").click(function() {
	    $(".education_modal_box, .modal-overlay").fadeOut(500, function() {
	        $(".modal-overlay").remove();
	    });
	 
	});
	 
	$(window).resize(function() {
	    $(".education_modal_box").css({
	        top: ($(window).height() - $(".education_modal_box").outerHeight()) / 2,
	        left: ($(window).width() - $(".education_modal_box").outerWidth()) / 2
	    });
	});
	$(window).resize(); 
});

/* Papers and Grades*/
$(function(){
	var appendthis =  ("<div class='modal_overlay_skill js-modal-close'></div>");

		$('a[data-modal-skill]').click(function(e) {
			e.preventDefault();
	    $("body").append(appendthis);
	    $(".modal_overlay_skill").fadeTo(500, 0.7);
	    //$(".js-modalbox").fadeIn(500);
			var modalBox = $(this).attr('data-modal-skill');
			$('#'+modalBox).fadeIn($(this).data());
		});  
	$(".js-modal-close-paper, .modal_overlay_skill").click(function() {
	    $(".papers_grades, .modal_overlay_skill").fadeOut(500, function() {
	        $(".modal_overlay_skill").remove();
	    });
	});	 
});

/* Refernce Folder light box*/
	$(function(){

	var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

		$('a[data-modal-id]').click(function(e) {
			e.preventDefault();
	    $("body").append(appendthis);
	    $(".modal-overlay").fadeTo(500, 0.7);
	    //$(".js-modalbox").fadeIn(500);
			var modalBox = $(this).attr('data-modal-id');
			$('#'+modalBox).fadeIn($(this).data());
		});  

	$(".js-modal-close, .modal-overlay").click(function() {
	    $(".reference_modal_box, .modal-overlay").fadeOut(500, function() {
	        $(".modal-overlay").remove();
	    });
	});

	$(window).resize(function() {
	    $(".reference_modal_box").css({
	        top: ($(window).height() - $(".reference_modal_box").outerHeight()) / 2,
	        left: ($(window).width() - $(".reference_modal_box").outerWidth()) / 2
	    });
	});
	 
	$(window).resize();
});


/* WordPress Folder light box*/
	$(function(){

	var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

		$('a[data-modal-id]').click(function(e) {
			e.preventDefault();
	    $("body").append(appendthis);
	    $(".modal-overlay").fadeTo(500, 0.7);
	    //$(".js-modalbox").fadeIn(500);
			var modalBox = $(this).attr('data-modal-id');
			$('#'+modalBox).fadeIn($(this).data());
		});  
	  
	  
	$(".js-modal-close, .modal-overlay").click(function() {
	    $(".wordPress_modal_box, .modal-overlay").fadeOut(500, function() {
	        $(".modal-overlay").remove();
	    });
	 
	});
	 
	$(window).resize(function() {
	    $(".wordPress_modal_box").css({
	        top: ($(window).height() - $(".wordPress_modal_box").outerHeight()) / 2,
	        left: ($(window).width() - $(".wordPress_modal_box").outerWidth()) / 2
	    });
	});
	 
	$(window).resize();
	 
	});

//About Slide toggle & location
$(document).ready(function(){
  $("#about_toggle").click(function(){
    $("#about_content").show(1000);
  });
  $("#about_close").click(function(){
    $("#about_content").hide(1000);
  });
});


$(function(){
	 
	$(window).resize(function() {
	    $(".about_content_bg").css({
	        top: ($(window).height() - $(".about_content_bg").outerHeight()) / 3.5,
	        left: ($(window).width() - $(".about_content_bg").outerWidth()) / 4.5
	    });
	});
	 
	$(window).resize();
	 
	});

//Draggable for About_folder
	$(document).ready(function(){
		$('div.about_content_bg').draggable({
			scroll:false			
		});
	});


//Reference content speech bubble
$(document).ready(function(){
    $("#speech_bubble").mouseover(function(){
        $("#speech_bubble_content").show(0);
    });
    $("#speech_bubble").mouseout(function(){
        $("#speech_bubble_content").hide(0)
    });
});

//Reference content Diana speech bubble
$(document).ready(function(){
    $("#diana_speech_bubble").mouseover(function(){
        $("#diana_speech_bubble_content").show(0);
    });
    $("#diana_speech_bubble").mouseout(function(){
        $("#diana_speech_bubble_content").hide(0)
    });
});

//Reference content Yiming speech bubble
$(document).ready(function(){
    $("#yiming_speech_bubble").mouseover(function(){
        $("#yiming_speech_bubble_content").show(0);
    });
    $("#yiming_speech_bubble").mouseout(function(){
        $("#yiming_speech_bubble_content").hide(0)
    });
});

//Reference content John speech bubble
$(document).ready(function(){
    $("#john_speech_bubble").mouseover(function(){
        $("#john_speech_bubble_content").show(0);
    });
    $("#john_speech_bubble").mouseout(function(){
        $("#john_speech_bubble_content").hide(0)
    });
});


//Reference content Tony speech bubble
$(document).ready(function(){
    $("#tony_speech_bubble").mouseover(function(){
        $("#tony_speech_bubble_content").show(0);
    });
    $("#tony_speech_bubble").mouseout(function(){
        $("#tony_speech_bubble_content").hide(0)
    });
});

