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
       alert( response );
    });
  } 
});
