$(document).ready(function(){

    $("article").load('pages/home.html');

    $("#show").click(function(){
        $("#text").show();
      });
    $("#hide").click(function(){
        $("#text").hide();
      });

      $("#home").click(function(){
        $("article").load('pages/home.html');
      });

      $("#about").click(function(){
        $("article").load('pages/about.html');
      });

      $("#product").click(function(){
        $("article").load('pages/product.html');
      });

      $("#contact").click(function(){
        $("article").load('pages/contact.html');
      });
  
  });
