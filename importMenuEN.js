//var sidenav = document.getElementById("mySidenav");

$.ajax({
    method: "GET",
    url: "ajax/menuEN.html",
    dataType: "html"
})
    .done(function (data) {
        $("#menu").html(data);
        $("#openBtn").on("click", function() {
            $("#mySidenav").addClass("active");
        });
        $("#closeBtn").on("click", function() {
            $("#mySidenav").removeClass("active");
        });
    });















































//function openNav() {
  //  $("#mySidenav").classList.add("active");
//}


//function closeNav() {
 //   sidenav.classList.remove("active");
//function closeNav() {
 //   sidenav.classList.remove("active");
//}


//$("#menu").load("ajax/menu.html");




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