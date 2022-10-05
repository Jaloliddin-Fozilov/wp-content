//  Lighbox
	jQuery(document).on('click', '[data-toggle="lightbox"]', function (event) {
		event.preventDefault();
		jQuery(this).ekkoLightbox({
			alwaysShowClose: true
		}, );
	});

window.onload=function(){
     
    jQuery('.document-slider').slick({
		// centerMode: true,
		centerPadding: '60px',
		slidesToShow: 5,
		autoplay: true,
  		autoplaySpeed: 2000,
		responsive: [
			{
			breakpoint: 768,
			settings: {
				arrows: true,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 3
			    }
			},
			
            {
			breakpoint: 480,
			settings: {
				arrows: true,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			    }
			}
		]
    });

}


function maind() {
    startdate = new Date();
    now(startdate.getYear(), startdate.getMonth(), startdate.getDate(), startdate.getHours(), startdate
        .getMinutes(), startdate.getSeconds());
    uzdate = new Date();
    uzbekistan(uzdate.getYear(), uzdate.getMonth(), uzdate.getDate(), uzdate.getHours(), uzdate.getMinutes(), uzdate.getSeconds());
}

function ChangeValue(number, pv) {
    numberstring = ""
    var j = 0
    var i = 0
    while (number > 1) {
        numberstring = (Math.round(number - 0.5) % 10) + numberstring
        number = number / 10
        j++
        if (number > 1 && j == 3) {
            numberstring = "," + numberstring
            j = 0
        }
        i++
    }

    numberstring = numberstring
    if (pv == 1 && document.getElementById("worldpop")) {
        document.getElementById("worldpop").innerHTML = numberstring
    }


}

function ChangeUzbekistan(number, pv) {
    numberstring = ""
    var j = 0
    var i = 0
    while (number > 1) {
        numberstring = (Math.round(number - 0.5) % 10) + numberstring
        number = number / 10
        j++
        if (number > 1 && j == 3) {
            numberstring = "," + numberstring
            j = 0
        }
        i++
    }

    numberstring = numberstring
    if (pv == 1 && document.getElementById("uzbekistan")) {
        document.getElementById("uzbekistan").innerHTML = numberstring
    }

}

function now(year, month, date, hours, minutes, seconds) {
    startdatum = new Date(year, month, date, hours, minutes, seconds)

    var now = 5600000000.0
    var now2 = 5690393850.0
    var groeipercentage = (now2 - now) / now * 100
    var groeiperseconde = (now * (groeipercentage / 100)) / 365.0 / 24.0 / 60.0 / 60.0
    nu = new Date()
    schuldstartdatum = new Date(96, 1, 1)
    secondenoppagina = (nu.getTime() - startdatum.getTime()) / 1000
    totaleschuld = (nu.getTime() - schuldstartdatum.getTime()) / 1000 * groeiperseconde + now
    ChangeValue(totaleschuld, 1);
    timerID = setTimeout(
        "now(startdatum.getYear(),startdatum.getMonth(),startdatum.getDate(),startdatum.getHours(),startdatum.getMinutes(),startdatum.getSeconds())",
        100)

}

function uzbekistan(year, month, date, hours, minutes, seconds) {
    startdatum = new Date(year, month, date, hours, minutes, seconds)
    var startdate = new Date(2022, 1, 1)
    var pearchild = 0.00002222
    var startcount = 35271276
    nu = new Date()
    all = startcount + ((nu.getTime() - startdate.getTime()) * pearchild)
    ChangeUzbekistan(all, 1);
    setTimeout(
        "uzbekistan(startdatum.getYear(),startdatum.getMonth(),startdatum.getDate(),startdatum.getHours(),startdatum.getMinutes(),startdatum.getSeconds())",
        1000);

}
window.onload = maind

// const buttons = document.querySelectorAll(".inner_block")
// const inner_contents = document.querySelectorAll(".inner_content")
// for(let j = 0; j < buttons.length; j++){
//     buttons[j].addEventListener('click', (e) => {
//         e.preventDefault()
//         if(e.target.className || !e.target.className){
//             if(inner_contents[e.target.dataset.id - 1].classList.contains('unvisible')){
//                 for(let j = 0; j < inner_contents.length; j++){
//                     if(!inner_contents[j].classList.contains('unvisible')){
//                         inner_contents[j].classList.add('unvisible')
//                     }
//                 }
//                 inner_contents[e.target.dataset.id - 1].classList.remove('unvisible')
//             }
//         }
//     })
// }

// const blocks = document.querySelectorAll(".block")
// const contents = document.querySelectorAll(".content_block")
// for(let i = 0; i < blocks.length; i++){
//     blocks[i].addEventListener('click', (e) => {
//         console.log(blocks[i]);
//         if(e.target.className || !e.target.className){

//             if(contents[e.target.dataset.uuid - 1].classList.contains('unvisible')){
//                 for(let j = 0; j < contents.length; j++){
//                     if(!contents[j].classList.contains('unvisible')){
//                         contents[j].classList.add('unvisible')
//                     }
//                 }
//                 contents[e.target.dataset.uuid - 1].classList.remove('unvisible')
//             }
//         }
//     })
// }




// var burgerMenu = document.getElementById('burger-menu');
// var overlay = document.getElementById('mobileMenu');
// burgerMenu.addEventListener('click',function(){
//   this.classList.toggle("close");
//   overlay.classList.toggle("_active");
//   document.body.classList.add('fixed');
// });




const isMobile = {
	Android: function () {
		return navigator.userAgent.match(/Android/i);
	},
	BlackBerry: function () {
		return navigator.userAgent.match(/BlackBerry/i);
	},
	iOS: function () {
		return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	},
	Opera: function () {
		return navigator.userAgent.match(/Opera Mini/i);
	},
	Windows: function () {
		return navigator.userAgent.match(/IEMobile/i);
	},
	any: function () {
		return (
			isMobile.Android() ||
			isMobile.BlackBerry() ||
			isMobile.iOS() ||
			isMobile.Opera() ||
			isMobile.Windows());
	}
};

if (isMobile.any()) {
	document.body.classList.add('_touch');

	let menuArrows = document.querySelectorAll('.menu__arrow');
	if (menuArrows.length > 0) {
		for (let index = 0; index < menuArrows.length; index++) {
			const menuArrow = menuArrows[index];
			menuArrow.addEventListener("click", function (e) {
				menuArrow.parentElement.classList.toggle('_active');
			});
		}
	}

} else {
	document.body.classList.add('_pc');
}

// Меню бургер
const iconMenu = document.querySelector('.menu__icon');
const menuBody = document.querySelector('.menu__body');
if (iconMenu) {
	iconMenu.addEventListener("click", function (e) {
		document.body.classList.toggle('_lock');
		iconMenu.classList.toggle('_active');
		menuBody.classList.toggle('_active');
	});
}


// Прокрутка при клике
const menuLinks = document.querySelectorAll('.menu__link[data-goto]');
if (menuLinks.length > 0) {
	menuLinks.forEach(menuLink => {
		menuLink.addEventListener("click", onMenuLinkClick);
	});

	function onMenuLinkClick(e) {
		const menuLink = e.target;
		if (menuLink.dataset.goto && document.querySelector(menuLink.dataset.goto)) {
			const gotoBlock = document.querySelector(menuLink.dataset.goto);
			const gotoBlockValue = gotoBlock.getBoundingClientRect().top + pageYOffset - document.querySelector('header').offsetHeight;

			if (iconMenu.classList.contains('_active')) {
				document.body.classList.remove('_lock');
				iconMenu.classList.remove('_active');
				menuBody.classList.remove('_active');
			}

			window.scrollTo({
				top: gotoBlockValue,
				behavior: "smooth"
			});
			e.preventDefault();
		}
	}
}