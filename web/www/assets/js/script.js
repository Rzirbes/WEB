$(document).ready(function(){

    $("article").load('pages/home.html')

    
    
    $("#about").click(function(){
        $("article").load('pages/about.html');
    });

    $("#home").click(function(){
        $("article").load('pages/home.html');
    });
  });