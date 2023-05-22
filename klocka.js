

setInterval(displayTime, 1000);

function displayTime(){
  var now = new Date();
  var hour = now.getHours();
  var minute = now.getMinutes();
  var second = now.getSeconds();

  document.getElementById("time").innerHTML = hour + ":" +minute+":"+second;

}
