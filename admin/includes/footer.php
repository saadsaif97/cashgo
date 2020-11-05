<script>
    //menu bar script
    //        stops the scroll when the side bar is open
    function stopScroll() {
        if (document.querySelector("#side_bar").classList.contains("active")) {
            document.querySelector("body").style.overflowY = 'hidden';
        } else {
            document.querySelector("body").style.overflowY = 'scroll';
        }
    };
    document.querySelector(".fa-bars").addEventListener("click", () => {
        document.querySelector(".side_bar").classList.toggle("active");
        stopScroll();
    })

    let lis = document.querySelectorAll(".side_bar ul li");
    lis.forEach(li => {
        li.addEventListener("click", (e) => {
            console.log(e.target);
            e.target.firstElementChild.click();
        }, true)
    })
    document.querySelector("a.current").parentElement.style.backgroundColor = '#fff';

</script>
<script>
    tinymce.init({
        menubar: false,
        selector: 'textarea',
        plugins: '  casechange formatpainter linkchecker autolink lists  powerpaste  tinymcespellchecker autoresize',
        toolbar: 'undo redo bold italic superscript subscript outdent indent casechange code',
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
    });

</script>
<script>
    
    setTimeout(function() {
        let alert = document.querySelector(".alert");
            alert.remove();
    }, 3000);
    
</script>


</body>

</html>
