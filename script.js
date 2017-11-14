


//alert("coucou");

var angle = 0;

let addclick = document.getElementById('add');

	addclick.addEventListener('click',function () {
		angle += 45;
		let croix = document.getElementById('add');

		        croix.style.webkitTransform= 'rotate(' + angle + 'deg)';
		    }
	);


/*


if (document.body.classList.contains('showme')){

		document.body.classList.add('showme');

}

document.body.classList.add('thisClass');

document.body.classList.remove('thisClass');

document.body.classList.toogle('thisClass');