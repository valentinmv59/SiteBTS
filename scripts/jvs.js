window.onload=function(){
	var windowWidth = window.innerWidth / 5;
	var windowHeight = window.innerHeight / 5;
	
	if(document.getElementById('presImg')){
		document.getElementById('presImg').addEventListener('mousemove', function (e) {
		var mouseX = e.clientX / windowWidth;
		var mouseY = e.clientY / windowHeight;
		
		document.getElementById('presImg').style.transform = 'rotate3d(' + mouseX + ','+ mouseY +', 0, -15deg)';
		});
	}
}

function mvScroll(x) {
	if(x.classList.contains('desc')){
		x.classList.replace('desc','asc');
		document.querySelector('.down').scrollIntoView({ 
		behavior: 'smooth'});
		x.style.transform = 'rotate(134deg)';
		x.style.top = '-130px';
	}else{
		x.classList.replace('asc','desc');
		window.scrollBy({ 
		  top: -9999,
		  left: 0, 
		  behavior: 'smooth' 
		});
		x.style.transform = 'rotate(-45deg)';
		x.style.top = '-130px';
	}
}