let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
});

let span = document.getElementsByTagName('span');
	let product = document.getElementsByClassName('product')
	let product_page = Math.ceil(product.length/4);
	let l = 0;
	let movePer = 25.34;
	let maxMove = 203;
	// mobile_view	
	let mob_view = window.matchMedia("(max-width: 768px)");
	if (mob_view.matches)
	 {
	 	movePer = 50.36;
	 	maxMove = 504;
	 }

	let right_mover = ()=>{
		l = l + movePer;
		if (product == 1){l = 0; }
		for(const i of product)
		{
			if (l > maxMove){l = l - movePer;}
			i.style.left = '-' + l + '%';
		}

	}
	let left_mover = ()=>{
		l = l - movePer;
		if (l<=0){l = 0;}
		for(const i of product){
			if (product_page>1){
				i.style.left = '-' + l + '%';
			}
		}
	}
	span[1].onclick = ()=>{right_mover();}
	span[0].onclick = ()=>{left_mover();}


	var start = document.getElementsByClassName('start');
	var note = document.getElementById('note');
	for(var i = 0; i< start.length; i++){
		start[i].addEventListener("click", (event)=>{
			for(var i = 0; i< start.length; i++){
					start[i].src = "http://127.0.0.1:8000/image/star-empty-icon.png";
			}
			var clickedImage = event.target;
			var currentSrc = clickedImage.src;
		
			if (currentSrc == "http://127.0.0.1:8000/image/star-empty-icon.png") {
				// console.log(clickedImage.dataset.value);
				let limite = clickedImage.dataset.value;

				for (var j = 0 ; j < limite; j++){
					start[j].src = '/image/start.png';
				}
				note.value = limite; 
			}
		})
	}