let today = new Date().toISOString().substr(0, 10);
document.querySelector("#date").value = today;
$('input').attr("max",today);
// or...

//document.querySelector("#today").
$(document).ready(function(){
//  alert('This site is created by Chidananda Ray Sarkar');
  var url = 'https://api.nasa.gov/planetary/apod?api_key=0CJ8z5h8A4broldhxPvZ5vQ0Rg0OKcRt9FnXtTzp' ;
//calling ajax for homepage apode     
 function data(link){
 $.ajax({
   method : 'GET',
   url : link,
   success : function(data){
      console.log(data); 
    
      $('#spin').hide();
    //$('.card-header').Show(500);
    $('#container').append(`
    <img src='${data.url}' class='card-img-top'>
    <div class='card-body'>
    <h1 class='card-title text-center'>${data.title}</h1>
    <h6 class='card-text text-justify'>${data.explanation}</h6>
    </div>
    <div class='card-footer text-right'><h6>-${data.copyright}</h6></div>
    `);
   },
   error:function(){
       alert('Sorry something went wrong!!');
   }
   
 })
 }// function close
  data(url);  
 $('form').submit(function(event){
  let date = $('#date').val();
  let add = url+'&date='+date;
   event.preventDefault();
   $('#container').empty ();
   $('#spin').show();
   data(add);
     
 })   
    
    
    
    
    
    
    
    
}) //closing of document.ready
