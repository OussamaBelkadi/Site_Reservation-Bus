var total = document.getElementById("total");
var prix = document.getElementById('prix');
var images = document.getElementsByClassName("chair");
var seats = document.getElementById("selected-seat");
let reserve=[];
for (var i = 0; i < images.length; i++) {
  images[i].addEventListener("click", (event)=>{
        var clickedImage = event.target;
        var currentSrc = clickedImage.src;
        console.log(currentSrc);
        let NumberSeat = clickedImage.dataset.seat;
        if (currentSrc == "http://127.0.0.1:8000/image/seat-available.png") {
            clickedImage.src = '/image/seat-selected.png';
           
            
            
            reserve.push(NumberSeat);
            console.log(reserve);
           
        }else{
            clickedImage.src = '/image/seat-available.png';
            reserve.splice(reserve.indexOf(NumberSeat), 1);
        }
        seats.value = JSON.stringify(reserve);
       
        let numberPlace = reserve.length;
        let p = Number(prix.value);
        let sum = numberPlace * p;
        total.innerHTML = sum + ' dh'
  });
}

