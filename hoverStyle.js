$.name = 'button';
alert($.name)

$('.btn-outline-dark').on('click', function(){
    $(this).toggleClass("active");

});

var biographie = document.getElementById("bio");

function Hover (biographie) {
    this.biographie = biographie;
}

let monHover = new Hover ()