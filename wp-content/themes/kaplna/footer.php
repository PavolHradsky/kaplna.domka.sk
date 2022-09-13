    </div>
</body>
<script>
    let hamburger = document.querySelector('.hamburger');
    let nav = document.querySelector('nav');
    hamburger.addEventListener('click', ()=>{
        if(nav.classList.contains('hidden')){
            nav.classList.remove('hidden');
        }else{
            nav.classList.add('hidden');
        }
    })
</script>
</html>