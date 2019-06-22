// Accer Id, class in jquery

// console.log($("p").html());
// console.log($("p:nth-child(2)").html());
// console.log($("#paraId").html());
// console.log($(".paraclass").html());

// $("#click").click(function()
// {
//     alert("clicked");
// });



// Form validation Using JQuery

$(document).ready(function () {
    $("form").submit(function (event) {
        console.log("Hi")
        event.preventDefault();
    });

    $("#pass").bind('blur', function () {
        let pass = $("#pass").val();
        if (pass == "") {
            $("#passErr").html("Empty");
            $("#passErr").css("color", "red");
            $("#passErr").css("text-decoration", "underline");
            $("#passErr").show();
        } else {
            $("#passErr").html("Correct");
            $("#passErr").css("color", "blue");
        }
    });

    $("#pass2").bind('blur', function () {
        let pass = $("#pass").val();
        let pass2 = $("#pass2").val();
        if (pass2 == "") {
            $("#pass2Err").html("Empty");
            $("#pass2Err").css("color", "red");
            $("#pass2Err").show();
        } else if (pass !== pass2) {
            $("#pass2Err").html("Not matching");
            $("#pass2Err").css("color", "red");
            $("#pass2Err").show();
        } else {
            $("#pass2Err").html("Correct");
            $("#pass2Err").css("color", "blue");
        }
    });
});