


$("#contactForm").submit(function(event){

    // cancels the form submission
    event.preventDefault();
    
    submitForm();
});


function submitForm(){
    // Initiate Variables With Form Content

    var email = $("#email").val();
    var password = $("#password").val();
 
    $.ajax({
        type: "POST",
        url: "php/form-process-login.php",
        data: "&email=" + email + "&password=" + password,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
            else alert("fail");
        }
    });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "d-none" );
    alert("success");
}


// Loading Modal
$(document).ready(function(){
    $(".login").click(function(){
        $("#myModal").modal('show');
    });
});