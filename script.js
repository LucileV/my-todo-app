
		var rajouter = document.getElementById('add');
		var contenu1 = document.getElementById('page1');
		var contenu2 = document.getElementById('page2');
		var x = true;
		rajouter.addEventListener('click',changeContenu);

		function changeContenu() {
				if(x == true) {
				contenu1.style.display = 'none';
					contenu2.style.display = 'block';
				contenu2.classList.add("fade-in");
			
				rajouter.style.transform = 'rotate(45deg)';
				x = false;
				
				} else {
				contenu1.style.display = 'block';
				contenu2.style.display = 'none';
				rajouter.style.transform = 'rotate(0deg)';
				x = true;
				}
		}



//alert("coucou");
/*
var angle = 0;

let addclick = document.getElementById('add');

	addclick.addEventListener('click',function () {
		angle += 45;
		let croix = document.getElementById('add');

		        croix.style.webkitTransform= 'rotate(' + angle + 'deg)';
		    }
	);

// Affiche toutes les taches
	document.getElementById("alltask").addEventListener("click", function( event ) {
    
   			document.body.classList.remove('thisClass');


  }, false);
*/ 

	var accordion = new Accordion('.accordion-container');	


	var accordion = new Accordion({
	    duration:   600,
	    closeOthers:  true,
	    showFirst:    false,
	    containerClass: 'ac-container',
	    elClass:    'ac',
	    qClass:     'ac-q',
	    aClass:     'ac-a'
});







