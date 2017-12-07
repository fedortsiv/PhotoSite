


$("#contactForm").submit(function(event){

    // cancels the form submission
    event.preventDefault();
    
    submitForm();
});

function submitForm(){
    // Initiate Variables With Form Content

    var email = $("#InputEmail").val();
    var password = $("#InputPassword").val();
 
    $.ajax({
        type: "POST",
        url: "php/login.php",
        data: "&email=" + email + "&password=" + password,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
            else alert(text);
        }
    });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "d-none" );

    setTimeout(function(){
    $("#myModal").modal('hide');
    location.reload();
	}, 1000);

}


// Loading Modal
$(document).ready(function(){
    $(".login").click(function(){
        $("#myModal").modal('show');
    });
});

$(document).ready(function(){
$(".new_user").click(function(){
	sendForm();
});
});


function sendForm(){
    // Initiate Variables With Form Content

    var email = $("#InputEmail").val();
    var password = $("#InputPassword").val();
 
    $.ajax({
        type: "POST",
        url: "php/registration.php",
        data: "&email=" + email + "&password=" + password,
        success : function(text){
            if (text == "success"){
                alert(password);
            }
            else alert(text);
        }
    });
}
//$(#new_user).on
