$(document).ready(function () {

  // Api settings update button
  $(".update-btn").click(function () {
    event.preventDefault();
    Swal.fire({
      title: 'Veriler güncellenecek?',
      text: "Bunu geriye alamazsın!",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Güncelle!',
      cancelButtonText: 'İPTAL'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Veriler güncellendi!',
          showConfirmButton: false,
          timer: 750
        });
        $("#api_form").submit();
      }
      else {
        Swal.fire({
          position: 'center',
          icon: 'warning',
          title: 'İptal edildi!',
          showConfirmButton: false,
          timer: 1500
        });
        location.reload();
      }
    })
  })
  // Product list status change 

  $(".isActive").change(function () {
    let $data = $(this).prop("checked");
    let $data_url = $(this).data("url");

    if (typeof $data !== "undefined" && typeof $data_url !== "undefined") {
      $.post($data_url, { data: $data }, function (response) {
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Veriler güncellendi!',
          showConfirmButton: false,
          timer: 500
        });
      })
    }
  })

  // Mail settings status change
  $(".formIsActive").change(function () {
    let $data = $(this).prop("checked");
    let $data_url = $(this).data("url");

    if (typeof $data !== "undefined" && typeof $data_url !== "undefined") {
      $.post($data_url, { data: $data }, function (response) {})
    }
  })

  // Modules list status change
  $(".isActiveModule").change(function(){
    let $data = $(this).prop("checked");
    let $data_url = $(this).data("url");
    let $which_module = $(this).attr("name");

    if (typeof $data !== "undefined" && typeof $data_url !== "undefined"){
      $.post($data_url, {data : $data , which_module : $which_module}, function(response){
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Veriler güncellendi!',
          showConfirmButton: false,
          timer: 500
        });
      })
    }
  })

  // Language list status change
  $(".language_switch").change(function(){
    let $data = $(this).prop("checked");
    let $data_url = $(this).data("url");
    let $language_module_switch = $(this).attr("name");

    if (typeof $data !== "undefined" && typeof $data_url !== "undefined"){
      $.post($data_url, {data : $data , language_module_switch : $language_module_switch}, function(response){
        Swal.fire({
          position: 'center',
          icon: 'success',
          title: 'Veriler güncellendi!',
          showConfirmButton: false,
          timer: 500
        });
      })
    }
  })

  // Language keywords update  
  $('.language_value').on('change',function(){
    let $data_url = $(this).data("url");
    let $text_key = $(this).attr("name");
    let $text_value = $(this).attr("value");
    let $changed_text_value = this.value;
    $.post($data_url, {text_key : $text_key, changed_text_value : $changed_text_value, text_value : $text_value })
    $(this).attr("value", $changed_text_value);
  })

});