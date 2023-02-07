const toast=``;

const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')
if (toastTrigger) {
  toastTrigger.addEventListener('click', () => {
    const toast = new bootstrap.Toast(toastLiveExample)

    toast.show()
  })
}



$("form").on("submit", function(ev) {
    ev.preventDefault(); // Prevent browser default submit.
  
    var formData = new FormData(this);
      
    $.ajax({
      url: "upload.php",
      type: "POST",
      data: formData,
      success: function (msg) {
        console.log(msg),
        $(".toast").show()
        
      },
      cache: false,
      contentType: false,
      processData: false
    });
      
  });

$(".btn-close").on("click",function (ev) {
    $(".toast").hide();
})