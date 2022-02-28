</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(".nav").click(function() {
        $("#mySidenav").css('width', '70px');
        $("#main").css('margin-left', '70px');
        $(".logo").css('visibility', 'hidden');
        $(".logo span").css('visibility', 'visible');
        $(".logo span").css('margin-left', '-10px');
        $(".icon-a").css('visibility', 'hidden');
        $(".icons").css('visibility', 'visible');
        $(".icons").css('margin-left', '-8px');
        $(".nav").css('display', 'none');
        $(".nav2").css('display', 'block');
    });

    // const nav = document.querySelector('.nav');
    // nav.addEventListener('click', () => {
    //     document.querySelector('#mySidenav').setAttribute('style', 'width: 70px');
    //     document.querySelector('#main').setAttribute('style', 'margin-left: 70px');
    //     document.querySelector('.logo').setAttribute('style', 'visibility: hidden');
    //     document.querySelector('.logo span').setAttribute('style', 'visibility: hidden');
    //     document.querySelector('.logo span').setAttribute('style', 'margin-left: -10px');
    //     document.querySelector('.icon-a').setAttribute('style', 'visibility: hidden');
    //     document.querySelector('.icons').setAttribute('style', 'visibility: visible');
    //     document.querySelector('.icons').setAttribute('style', 'margin-left: -8px');
    //     document.querySelector('.nav').setAttribute('style', 'display: none');
    //     document.querySelector('.nav2').setAttribute('style', 'display: block');
    // });

    $(".nav2").click(function() {
        $("#mySidenav").css('width', '300px');
        $("#main").css('margin-left', '300px');
        $(".logo").css('visibility', 'visible');
        $(".icon-a").css('visibility', 'visible');
        $(".icons").css('visibility', 'visible');
        $(".nav").css('display', 'block');
        $(".nav2").css('display', 'none');
    });

    // const nav2 = document.querySelector('.nav2');
    // nav2.addEventListener('click', () => {
    //     document.querySelector('#mySidenav').setAttribute('width: 300px');
    //     document.querySelector('#main').setAttribute('margin-left: 300px');
    //     document.querySelector('.logo').setAttribute('visibility: visible');
    //     document.querySelector('.icon-a').setAttribute('visibility: visible');
    //     document.querySelector('.icons').setAttribute('visibility: visible');
    //     document.querySelector('.nav').setAttribute('display: block');
    //     document.querySelector('.nav2').setAttribute('display: none');
    // });
</script>

<script>
    const angkatan = document.querySelector('#angkatan');
    const jumlah = document.querySelector('#jumlah');

    angkatan.addEventListener('change', (e) => {
        jumlah.setAttribute('value', e.target.value);
    })
</script>

</body>


</html>