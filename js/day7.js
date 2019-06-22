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

$("form").submit(function(event)
{
    event.preventDefault();
});

$("#pass").bind('blur', function()
{
    let pass = $("#pass").val();
    let pass2 = $("#pass2").val();
    if(pass =="")
    {
        $("#passErr").html("Empty");
        $("#passErr").css("color", "red");
        $("#passErr").show();
    }

    else
    {
        $("#passErr").html("correct");
        $("#passErr").css("color","blue"); 
    }
});