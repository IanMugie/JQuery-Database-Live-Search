// search.js - add content to your JavaScript file

$(document).ready(function($){//$ parameter not necessary

//Get Hint Jquery Method
$("#enter").keyup(function(str){  
var b = $("#enter").val();

//  $('#test').html(a); uncomment this for troubleshooting purpose

$.ajax({
  url:"searchhint.php",
  type:"POST",
  async:true,
  data:{
    a:b 
    // a is the value captured and passed to php file 
    // b is the variable above from input box 
  },
  datatype:"text/html",
  global:false,
  cache:false,
  timeout:0,

  beforeSend:function(){
    /* enter any actions you want performed before
    ajax sends the request */
},

  success:function(data){
    $('#showHint').html(data)
   
    .click(function(data){
      $("#showHint").fadeOut()
    //  $('showHint').location
    })

    $("#enter").keyup(function(){
        $("#showHint").fadeIn()
      })

  }
})

.fail(function(){// to capture any fail errors
        console.log(errorThrown);
        console.log(status);
        console.dir(xhr);
  })

.always(function(){
  //add any actions to be performed everytime a user enters input
  })





})
})














































//For AJAX-PHP-JQuery-SQL visit ianmugie.online