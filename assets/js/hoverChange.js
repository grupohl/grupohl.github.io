const hoverChange = document.querySelectorAll('.hoverChange')
console.log(hoverChange)
hoverChange.forEach(item =>{
	let img = item.parentNode.parentNode.parentNode.querySelector('.js-hoverChange-target')
	item.addEventListener('mouseenter', ()=>{
		img.classList.toggle('js-hoverChange-pseudo-hover')
	})
	item.addEventListener('mouseout', ()=>{
		img.classList.toggle('js-hoverChange-pseudo-hover')
	})
})