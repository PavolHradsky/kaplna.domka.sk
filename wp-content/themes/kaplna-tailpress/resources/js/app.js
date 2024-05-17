// Navigation toggle
window.addEventListener('load', async function () {
    let hamburger = document.querySelector('.hamburger');
    let nav = document.querySelector('nav');
    hamburger.addEventListener('click', ()=>{
        if(nav.classList.contains('hidden')){
            nav.classList.remove('hidden');
        }else{
            nav.classList.add('hidden');
        }
    })


    let page = 1;
    let left = document.querySelector("#left");
    let right = document.querySelector("#right");
    let mobile = document.querySelector("#mobile");
    let moreButton = document.querySelector("#more");

    moreButton.addEventListener('click', async () => {
        page++;
        const response = await fetch("/wp-json/wp/v2/news?page=" + page);
        let data = await response.json();
        data = JSON.parse(data);
        left.innerHTML = left.innerHTML + data.left;
        right.innerHTML = right.innerHTML + data.right;
        mobile.innerHTML = mobile.innerHTML + data.mobile;
    });
    
});


