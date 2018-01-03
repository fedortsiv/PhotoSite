


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

//images gallery

$(document).ready(function() {
        
   /* activate the carousel */
   $("#modal-carousel").carousel({interval:false});

   /* change modal title when slide changes */
   $("#modal-carousel").on("slid.bs.carousel", function () {
        $(".modal-title")
        .html($(this)
        .find(".active img")
        .attr("title"));
   });

   /* when clicking a thumbnail */
   $(".row .thumbnail").click(function(){
    var content = $(".carousel-inner");
    var title = $(".modal-title");
  
    content.empty();  
    title.empty();
  
     var id = this.id;  
     var repo = $("#img-repo .item");
     var repoCopy = repo.filter("#" + id).clone();
     var active = repoCopy.first();
  
    active.addClass("active");
    title.html(active.find("img").attr("title"));
    content.append(repoCopy);

    // show the modal
    $("#modal-gallery").modal("show");
  });

});