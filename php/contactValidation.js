function validateContactForm() {
    var valid = true;

    $(".info").html("");
    $(".input-field").css('border', '#e0dfdf1px solid');
    var userName = $('#userName').val();
    var userEmail = $('userEmail').val();
    var subjet = $('subject').val();
    var content = $('content').val();

    if (userName == "") {
        $("#userName-info").html("Required.");
        $("#userName").css('border', '#e66262 1px solid');
        valid = false;
    }
    if (userEmail == "") {
        $("#userEmail_info").html("Required.");
        $("#userEmail").css('border', '#e66262 1px solid');
        valid = false;
    }
    if (subject == "") {
        $("#subject_info").html("Required.");
        $("#subject").css('border', '#e66262 1px solid');
        valid = false;
    }
    if (content == "") {
        $("#content_info").html("Required.");
        $("#content").css('border', '#e66262 1px solid');
        valid = false;
    }
    return valid;
}