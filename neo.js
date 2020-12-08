console.log('hello');
let today = new Date().toISOString().substr(0, 10);

let url = 'https://api.nasa.gov/neo/rest/v1/feed?start_date='+today+'&api_key=0CJ8z5h8A4broldhxPvZ5vQ0Rg0OKcRt9FnXtTzp'; 
function ajax(link){
    $.ajax({
        method : 'GET',
        url : link,
        success : function(data){
           console.log(data);
          $('#sp').hide();
        if(data.element_count != 0){
           $('#container').append(`
           <h1 class='text-justify p-4'>Total <span>${data.element_count}</span> astroids are founded near the erath between the given date. their details are given below</h1>
          <br/>
      `);
       for(const n in data.near_earth_objects){
    for(var i=0; i<data.near_earth_objects[n].length;i++ ){
            $('#container').append(`
            <div class='card mx-3'>
            <div class='card-header'>Date:${n}<br/>${i+1}out of ${data.near_earth_objects[n].length}</div>
          <div class='pl-4 py-2 text-left card-body'>
         <h5> Name: </h5>${data.near_earth_objects[n][i].name}<br/>
          <h5> Orbiting Boby : </h5>${data.near_earth_objects[n][i].close_approach_data[0].orbiting_body} <br/>
         <h5> Closest approaching moment: </h5>${data.near_earth_objects[n][i].close_approach_data[0].close_approach_date_full}<br/>
          <h5>Distance from earth :</h5> ${data.near_earth_objects[n][i].close_approach_data[0].miss_distance.kilometers} km. <br/>
          <h5>Speed : </h5>${data.near_earth_objects[n][i].close_approach_data[0].relative_velocity.kilometers_per_hour} km/hr.
          <br/>
          <h5>Estimated Diameter of the object:</h5>
          ${data.near_earth_objects[n][i].estimated_diameter.kilometers.estimated_diameter_max} km.
          </div>
          </div>
             <br/><br/>
          
            `)
    }
    }
       }else{
           $('#container').append(`
           <h1> Sorry no results found on the date ${$('input').val()}</h1> <br / >
           `);
       }
        },
      error: function(){
          alert('sorry');
      }
    }) //ending of $.ajax....
}// end of function ajax
$(document).ready(function(){
 document.querySelector("#date").value = today;
   ajax(url);
   $('form').submit(function(event){
       event.preventDefault();
       $('#container').empty();
       $('#sp').show();
       var date = $('#date').val();
       var add = `https:api.nasa.gov/neo/rest/v1/feed?start_date=${date}&api_key=0CJ8z5h8A4broldhxPvZ5vQ0Rg0OKcRt9FnXtTzp`; 
       ajax(add);
       
   })
   
  //fetch(url);
  //then(data => {
     // console.log(data);
      //$('body').html('ok');
 // });
    
})// end of opening documents