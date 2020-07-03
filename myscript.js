
var city = "Banjul";


$.getJSON("http://api.openweathermap.org/data/2.5/weather?q=" + city + "&units=Metric&APPID=936f9a32cd5eb6b597c9843e5f64d9d6", function(data){

console.log(data);

var iconurl = "http://openweathermap.org/img/w/" + data.weather[0].icon + ".png";

$('.icon').attr('src',iconurl);

var weather = data.weather[0].main;

$('.weather').append(weather);

var location = data.name;


$('.location').append(location);


var temperature = data.main.temp;

$('.num').prepend(temperature);

});


$.getJSON("http://api.openweathermap.org/data/2.5/forecast?q=Banjul&units=Metric&appid=936f9a32cd5eb6b597c9843e5f64d9d6", function(mydata){

console.log(mydata);

//Get The Current Date

var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' '+time;

//console.log(dateTime);

//Get The First Date from The JSON File. 

var mydata_date = mydata.list[0].dt_txt;
var mydata_date = mydata_date.substring(0, 10);

//Get the days of the week

var d = new Date();

var weekday = new Array(7);
weekday[0] = "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";

weeknumber = d.getDay();
var n = weekday[d.getDay()];

//Prepend the Days

$('#day0').prepend(n);

for (index = 1; index < weekday.length; index++) { 

    weeknumber = (weeknumber + 1)%7;
    //console.log(weekday[weeknumber]); 
    $('#day' + index +'').prepend(weekday[weeknumber]);

} 



$('.date').prepend(date);





for (index = 1; index < 40; index++) { 

    if (mydata.list[index].dt_txt.substring(0, 10)  === mydata_date) {

       //console.log(mydata.list[index].dt_txt);

       var indexe = index + 1;
       //console.log(indexe);

      }
    
} 

var day1temperatures = new Array(8);
var day2temperatures = new Array(8);
var day3temperatures = new Array(8);
var day4temperatures = new Array(8);

for (index = 0 ; index < 8  ; index++) {

    day1temperatures[index] = parseInt(mydata.list[indexe].main.temp);
    indexe = indexe + 1;
    

}

indexe = indexe - 8;


var day1_max = Math.max(...day1temperatures);

for (index = 0 ; index < 8  ; index++) {

if( day1_max === parseInt(mydata.list[indexe].main.temp)){

    var iconurl1 = "http://openweathermap.org/img/w/" + mydata.list[indexe].weather[0].icon + ".png";

    var weather1 = mydata.list[indexe].weather[0].main;

    $('.iconurl1').attr('src',iconurl1);

    $('.weather1').append(weather1);

}

indexe = indexe + 1;
    

}



for (index = 0 ; index < 8  ; index++) {

    day2temperatures[index] = parseInt(mydata.list[indexe].main.temp);
    indexe = indexe + 1;
    

}

indexe = indexe - 8;

var day2_max = Math.max(...day2temperatures);

for (index = 0 ; index < 8  ; index++) {

if( day2_max === parseInt(mydata.list[indexe].main.temp)){

    var iconurl2 = "http://openweathermap.org/img/w/" + mydata.list[indexe].weather[0].icon + ".png";

    var weather2 = mydata.list[indexe].weather[0].main;

    $('.iconurl2').attr('src',iconurl2);

    $('.weather2').append(weather2);

}

indexe = indexe + 1;
    

}

for (index = 0 ; index < 8  ; index++) {

    day3temperatures[index] = parseInt(mydata.list[indexe].main.temp);
    indexe = indexe + 1;
    

}


indexe = indexe - 8;


var day3_max = Math.max(...day3temperatures);

for (index = 0 ; index < 8  ; index++) {

if( day3_max === parseInt(mydata.list[indexe].main.temp)){

    var iconurl3 = "http://openweathermap.org/img/w/" + mydata.list[indexe].weather[0].icon + ".png";

    var weather3 = mydata.list[indexe].weather[0].main;

    $('.iconurl3').attr('src',iconurl3);

    $('.weather3').append(weather3);

}

indexe = indexe + 1;
    

}


for (index = 0 ; index < 8  ; index++) {

    day4temperatures[index] = parseInt(mydata.list[indexe].main.temp);
    indexe = indexe + 1;
    

}


indexe = indexe - 8;


var day4_max = Math.max(...day4temperatures);

for (index = 0 ; index < 8  ; index++) {

if( day4_max === parseInt(mydata.list[indexe].main.temp)){

    var iconurl4 = "http://openweathermap.org/img/w/" + mydata.list[indexe].weather[0].icon + ".png";

    var weather4 = mydata.list[indexe].weather[0].main;

    $('.iconurl4').attr('src',iconurl4);

    $('.weather4').append(weather4);

}

indexe = indexe + 1;
    

}

//console.log(day1temperatures);
//console.log(Math.max(...day1temperatures));
//console.log(Math.min(...day1temperatures));




$('#day1-max').prepend(Math.max(...day1temperatures));
$('#day1-min').prepend(Math.min(...day1temperatures));



$('#day2-max').prepend(Math.max(...day2temperatures));
$('#day2-min').prepend(Math.min(...day2temperatures));

$('#day3-max').prepend(Math.max(...day3temperatures));
$('#day3-min').prepend(Math.min(...day3temperatures));

$('#day4-max').prepend(Math.max(...day4temperatures));
$('#day4-min').prepend(Math.min(...day4temperatures));





});