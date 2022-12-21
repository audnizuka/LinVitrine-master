//var sidenav = document.getElementById("mySidenav");

//function openNav() {
  //  $("#mySidenav").classList.add("active");
//}


//function closeNav() {
 //   sidenav.classList.remove("active");
//function closeNav() {
 //   sidenav.classList.remove("active");
//}


//$("#menu").load("ajax/menu.html");



$.ajax({
    method: "GET",
    url: "ajax/menu.html",
    dataType: "html"
})
    .done(function (data) {
        $("#menu").html(data);
        $("#openBtn").on("click", function() {
            $("mySidenav").classList.add("active");
        });
        $("#closeBtn").on("click", function() {
            console.log( $( this ).text("cvfcd") );
        });
    });






        //       var openBtn = document.getElementById("openBtn");
        //      var closeBtn = document.getElementById("closeBtn");

        //        $("#openBtn").on("click",openNav);
        //        $("#closeBtn").on("click", closeNav);


        //  closeBtn.onclick = closeNav;


        
//$.ajax({
  //  method: "GET",
    //url: "ajax/menu.html",
//    dataType: "html"
//})
//    .done(function (data) {
//        $("#menu").html(data);
//        $("openBtn").click(function (event) {
//            openNav(event);
//        });
//        $("closeBtn").click(function (event) {
//            closeNav(event);
//        });
//
//    });