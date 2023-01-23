let links = document.querySelectorAll(".sidebar ul li a");
links.foreach(link => {
    link.addEventListener('click', function() {
        links.foreach(lnk => lnk.classList.remove("active"));
        this.classList.add("active");
    });
});