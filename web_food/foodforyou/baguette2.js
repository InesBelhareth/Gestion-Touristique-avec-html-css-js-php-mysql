let left=document.getElementsByClassName('fa-solid fa-caret-left')[0];
let right=document.getElementsByClassName('fa-solid fa-caret-right')[0];
let cards=document.getElementsByClassName('cards')[0];
left.addEventListener('click',() => {
	cards.scrollLeft -= 140;
	
});
right.addEventListener('click',() => {
	cards.scrollLeft += 140;
	
});