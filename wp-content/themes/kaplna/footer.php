    </div>
    <footer class="absolute w-full bottom-0">
        <div class="upper-footer bg-[#FDD998] p-10 flex justify-center gap-10">
            <p>footer</p>
            <p>footer</p>
            <p>footer</p>
        </div>
        <div class="bottom-footer bg-[#85A392] flex justify-center gap-10 px-10 py-3">
            <p>footer</p>
            <p>footer</p>
            <p>footer</p>
        </div>
    </footer>
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