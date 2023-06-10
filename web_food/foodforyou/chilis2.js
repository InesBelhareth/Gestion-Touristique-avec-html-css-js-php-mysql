let left=document.getElementsByClassName('fa-solid fa-caret-left')[0];
let right=document.getElementsByClassName('fa-solid fa-caret-right')[0];
let cards=document.getElementsByClassName('cards')[0];
left.addEventListener('click',() => {
	cards.scrollLeft -= 140;
	
});
right.addEventListener('click',() => {
	cards.scrollLeft += 140;
	
});
/let poster=document.getElementById('poster');
let title=document.getElementById('title');
let price-cont=document.getElementById('price-cont');
Array.from(document.getElementsByClassName('card')).forEach((ele,i) => {
//console.log(ele)
ele.addEventListener('click',() => {
	poster.src=ele.getElementsByTagName('img')[0].src
})
});
