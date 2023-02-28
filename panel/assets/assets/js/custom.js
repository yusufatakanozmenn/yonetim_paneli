$(document).ready(function(){

    // Api settings update button
    $(".update-btn").click(function(){
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
            else{
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
})