// Set the date we're counting down to
var countDownDate = new Date("Dec 30, 2023 22:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {
  let counter= document.querySelector("#countdown");
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  counter.innerHTML = days + " يوم " + hours + " ساعة "
  + minutes + " دقيقة " + seconds + " ثانية ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "لقد وصلت متأخرًا";
  }
}, 1000);


// زر اختيار الرابح

const win = document.querySelector("#winner");
const loader = document.querySelector(".loader-con");

var myModal = new bootstrap.Modal(document.getElementById('modal'), {
    keyboard: false
})
win.addEventListener('click', function(){
    loader.style.display = 'block';
    sim = setInterval(progressSim, 25);
    
})
