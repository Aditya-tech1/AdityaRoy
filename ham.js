let ham= document.getElementById('ham');
let crs= document.getElementById('crs');
ham.addEventListener('click',()=>{
    document.getElementById('nav').style.transform='translate(0%)';
    ham.style.display='none';
    crs.style.display='block';
})
crs.addEventListener('click',()=>{
    document.getElementById('nav').style.transform='translate(100%)';
    ham.style.display='block';
    crs.style.display='none';
})
