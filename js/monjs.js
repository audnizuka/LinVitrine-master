var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

function openNav() {
    sidenav.classList.add("active");
}

function closeNav() {
    sidenav.classList.remove("active");
}





//document.getElementById("MyID").className =
  //  document.getElementById("MyID").className.replace(/\bMyClass\b/,'');
















/*
var collapsible = document.getElementById("myCollapsible");

collapsible = collapseBtn;

function collapseBtn() {
    if (window.innerWidth < 800) {
        ('#myCollapsible').collapse()
    }
}

('#myCollapsible').collapse({
    toggle: true
})

var collapseElementList = [].slice.call(document.querySelectorAll('.collapse'))
var collapseList = collapseElementList.map(function (collapseEl) {
    if (window.innerWidth < 800) {
        return new bootstrap.Collapse(collapseEl)
    }
})
*/

