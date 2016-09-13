jQuery(document).ready(function(){
  
  jQuery('#contact-form').submit(ajaxSubmit);

  function ajaxSubmit(e) {
    
    e.preventDefault();
    
    jQuery.post(MyAjax.ajaxurl, {
      action: 'submit_contact_form',
      message_name: jQuery('#message_name').val(),
      message_email: jQuery('#message_email').val(),
      message_text: jQuery('#message_text').val(),
      message_human: jQuery('#message_human').val(),
    },
    function( response ) {
      // Hide contact form and display response.
      jQuery('#contact-form').addClass("hidden");
      var resDiv = jQuery('#contact-form-response');
      resDiv.removeClass('hidden')
      resDiv.append('<h4>' + response + '</h4>');
    });
  } 
});
