/* ============================================================ */
/* slick */
/* ============================================================ */
$(function() {
	$('.slider01,.slider02').on('init', function(event, slick){
		console.log('.slider01 init,.slider02 init');
		AOS.init(); 
	});
	$('.slider01').slick({ 
			arrows: false,
			dots: true,
			slidesToShow: 2,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 3000,
			cssEase: 'linear',
			pauseOnFocus: false,
			pauseOnHover: false,
			pauseOnDotsHover: false,
			lazyLoad: 'progressive',
			responsive: [
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
				}
			}
			]
	});
	
	$('.slider02').slick({ 
			arrows: false,
			dots: true,
			slidesToShow: 2,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 3000,
			cssEase: 'linear',
			pauseOnFocus: false,
			pauseOnHover: false,
			pauseOnDotsHover: false,
			lazyLoad: 'progressive',
			responsive: [
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
				}
			}
			]
	});
});

/* ============================================================ */
/* visual */
/* ============================================================ */
function txtSplit(txtElemAry) {
  txtElemAry.forEach( item => {
    let txt = ''
    const textContentAry = item.textContent.split('')
    textContentAry.forEach( item2 => {
      txt += item2.replace(/(\S)/g, '<span class="txtInner">$&</span>')
    })
    item.innerHTML = txt
  })
}

function addCss(txtElemAry) {
  let aryNumner = 0
  const defaultTime = 0
  const animeTime = 0.08
  txtElemAry.forEach( item=> {
    [...item.children].forEach( item2 => {
      aryNumner++
      item2.style.animationDelay = `${defaultTime + aryNumner * animeTime}s`
    })
  })
}

window.addEventListener('load', () => {
  const txtElemAry = document.querySelectorAll('.recruit-visual__txt')
  txtSplit(txtElemAry)
  addCss(txtElemAry)
}, false)