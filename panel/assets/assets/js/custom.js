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
  $(".m_settings").change(function () {
    let $data = $(this).prop("checked");
    let $data_url = $(this).data("url");

    if (typeof $data !== "undefined" && typeof $data_url !== "undefined") {
      $.post($data_url, { data: $data }, function (response) {})
    }
  })
})