<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggaran Aktif</title>
   <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

   <!-- Bootstrap Icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css" rel="stylesheet">

   <!-- google font -->
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- font awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

   <!-- Bootstrap Date Picker -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css" integrity="sha512-34s5cpvaNG3BknEWSuOncX28vz97bRI59UnVtEEpFX536A7BtZSJHsDyFoCl8S7Dt2TPzcrCEoHBGeM4SUBDBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .bg-yellow-header{
        background-color: #FEEE72;
        border-radius: 31px 0px 0px 0px;
        color: #43362B;
    }
    .input-tanggal{
        font-weight: 600;
        border-radius:6px 0 0 6px;
        border: 0.3px solid #dee2e6;
        border-right: 0;
        width: 200px;
    }
    .input-tanggal::placeholder{
        color: #222222;
    }
    .calendar-logo{
        border-radius: 0 6px 6px 0;
        border: 2px solid #dee2e6;
        border-left: 0;
        background: white;
    }
    .Rupiah{
        font-weight: 600;
        border-radius:6px 0 0 6px;
        border: 2px solid #dee2e6;
        border-right: 0;
        background: white;
        width: 50px;
    }
    .inputNumber{
        font-weight: 600;
        border-radius:0 6px 6px 0;
        border: 2px solid #dee2e6;
        border-left: 0;
        width: 200px;
    }
    .border-dropdown{
        border: 2px solid #dee2e6;
        border-radius: 6px;
        background: white;
    }
    .border-dropdown:hover{
        border: 2px solid #222222;
    }
</style>
<body>
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content" style="border-radius: 35px; box-shadow: 0 4px 4px 0 #ffffff42;">
            <div class="d-flex justify-content-between align-items-center">
              <h1 class="modal-title fs-5 bg-yellow-header" style="padding: 15px 50px;" id="exampleModalToggleLabel">Tambah Anggaran</h1>
              <button type="button" class="btn-close" style="margin-right: 30px;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex mt-3">
                <form action="" class="w-100 d-flex flex-column w-100 align-items-center">
                <div class="" style="width: 90%;">
                    <label style="font-size: 18px;" for="NamaAnggaran" class="mb-3">Masukkan Nama Anggaran Barumu</label>
                    <input name="NamaAnggaran" type="text" class="w-100 px-3 py-2 border border-2" style="border-radius: 10px;" placeholder="Nama Anggaran Baru">
                </div>
                <div class="" style="width: 90%;">
                    <label style="font-size: 18px;" for="NamaAnggaran" class="mb-3 mt-3">Masukkan saldo untuk anggaranmu</label>
                    <div class="d-flex">
                        <span class="input-group-append">
                            <span class="input-group-text Rupiah h-100 d-block">
                                Rp
                            </span>
                        </span>
                        <input class="w-100 px-3 py-2 inputNumber" type="number">
                    </div>
                </div>
                <div class="" style="width: 90%;">
                    <label style="font-size: 18px;" for="NamaAnggaran" class="mb-3 mt-3">Pilih kategori untuk anggaran barumu!</label>
                    <select class="form-select px-3 py-2 border-dropdown" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>                      
                </div>
                <div style="width: 90%;" class="mt-3 d-flex flex-column justify-content-between">
                    <label style="font-size: 18px;">Pilih Jangka waktu Anggaranmu!</label>
                    <div class="d-flex w-100 justify-content-between">
                        <div class="" style="width: 100%;">
                            <div class="d-flex flex-column w-100 justify-content-end">
                                <label for="" style="font-size: 15px;">Mulai</label>
                                <div class="d-flex">
                                    <input placeholder="1 Jan 2024" style="width: 85%;" class="px-3 py-2 input-tanggal" type="text" id="fromdate">
                                    <span class="input-group-append">
                                        <span class="calendar-logo input-group-text h-100 d-block">
                                        <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="" style="width: 100%;">
                            <div class="d-flex flex-column w-100 justify-content-end">
                                <label for="" style="font-size: 15px;">Berakhir</label>
                                <div class="d-flex">
                                    <input placeholder="1 Jan 2024" style="width: 85%;" class="px-3 py-2 input-tanggal" type="text" id="todate">
                                    <span class="input-group-append">
                                        <span class="calendar-logo input-group-text h-100 d-block">
                                        <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="width: 90%; margin: 20px 0" class="d-flex flex-column align-items-center">
                        <div class="d-flex flex-row gap-2 mt-2 mb-3">
                            <div class="d-flex align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EC0D0D" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2"/>
                                </svg>
                            </div>
                            <div>
                                <p class="m-0" style="font-weight: 500; color: #EC0D0D;">Email/Username Anda Sudah Terdaftar!</p>
                            </div>
                        </div>
                        <button type="submit" class="btn" style="padding: 15px 100px; background-color: #FEEE72; font-weight:600;">Tambah</button>
                    </div>
                </div>
            </form>
            </div>
          </div>
        </div>
    </div>
    <button class="autoclick btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Open first modal</button>
</body>
<!-- Bootstrap JS and dependencies -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.2/font/bootstrap-icons.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<!-- Bootstrap Date Picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(".autoclick").click();
    $(".input-group-append").click(function(){
        $(this).prev().focus();
    });
    $.fn.datepicker.dates['in'] = {
        days: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
        daysShort: ["Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"],
        daysMin: ["S", "M", "T", "W", "T", "F", "S"],
        months: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
        monthsShort: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
        today: "Hari Ini",
        clear: "Bersihkan",
        format: "dd MM yyyy",
        titleFormat: "MM yyyy",
        weekStart: 0
    };

    $('#fromdate').datepicker({
        format: "dd MM yyyy",
        todayHighlight: true,
        autoclose: true,
        clearBtn: true,
        language: "in-IN",
    }).on('changeDate', function (selected) {
        var minDate = new Date(selected.date.valueOf());
        $('#todate').datepicker('setStartDate', minDate);
    });
    $('#todate').datepicker({
        format: "dd MM yyyy",
        todayHighlight: true,
        autoclose: true,
        clearBtn: true,
        language: "in-IN",
    }).on('changeDate', function (selected) {
        var maxDate = new Date(selected.date.valueOf());
        $('#fromdate').datepicker('setEndDate', maxDate);
    });

</script>
</html>