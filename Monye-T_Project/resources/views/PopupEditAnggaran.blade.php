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

<div class="modal fade" id="modalEditAnggaran" aria-hidden="true"  tabindex="1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content p-0" style="margin-top: -50px; border-radius: 35px; box-shadow: 0 4px 4px 0 #ffffff42;">
            <div class="d-flex justify-content-between align-items-center">
            <h1 class="modal-title fs-5 bg-yellow-header" style="padding: 15px 50px;" id="exampleModalToggleLabel">Edit Anggaran</h1>
            <button type="button" class="btn-close" style="margin-right: 30px;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex mt-3">
                <form action="{{ route('anggaran.edit') }}" class="w-100 d-flex flex-column w-100 align-items-center" method="POST">
                    @csrf
                    @method('PUT')
                <div class="" style="width: 90%;">
                    <label style="font-size: 18px;" for="NamaAnggaran" class="mb-3">Masukkan Nama Anggaran</label>
                    <input name="NamaAnggaran" type="text" class="w-100 px-3 py-2 border border-2" style="border-radius: 10px;">
                </div>
                <div class="" style="width: 90%;">
                    <label style="font-size: 18px;" for="NamaAnggaran" class="mb-3 mt-3">Masukkan saldo untuk anggaranmu</label>
                    <div class="d-flex">
                        <span class="input-group-append">
                            <span class="input-group-text Rupiah h-100 d-block">
                                Rp
                            </span>
                        </span>
                        <input class="w-100 px-3 py-2 inputNumber" type="number" name="saldo">
                    </div>
                </div>
                    @php
                        $budgets = App\Models\User::find(auth()->user()->user_id)->budgets;
                        $kategoris = App\Models\User::find(auth()->user()->user_id)->kategoris;
                    @endphp
                    <div class="element-specific-to-status-0" style="width: 90%; display:none;">
                        <label style="font-size: 18px;" for="NamaAnggaran" class="mb-3 mt-3" id="kategori-now"></label>
                        <select class="form-select px-3 py-2 border-dropdown" aria-label="Default select example" name="kategori">
                            <option selected value="">Pilih kategori - jika ingin mengubah</option>
                            @foreach ($kategoris as $kategori)
                                @php
                                    $cekKategori = 1;
                                @endphp
                                @foreach ($budgets as $budget)
                                    @if ($budget->kategoris_id == $kategori->kategori_id && $budget->status == 0)
                                        @php
                                            $cekKategori = 0;
                                        @endphp
                                    @endif
                                @endforeach
                                @if ($cekKategori == 1)
                                    @if ($kategori->nama_kategori != 'Pendapatan' && $kategori->nama_kategori != "Penyesuaian")
                                        <option value={{ $kategori->kategori_id }}>{{ $kategori->nama_kategori }}</option>
                                    @endif
                                @endif
                            @endforeach
                        </select>
                    </div>
                <div style="width: 90%;" class="mt-3 d-flex flex-column justify-content-between">
                    <label style="font-size: 18px;">Pilih Jangka waktu Anggaranmu!</label>
                    <div class="d-flex w-100 justify-content-between">
                        {{-- <div class="" style="width: 100%;">
                            <div class="d-flex flex-column w-100 justify-content-end">
                                <label for="" style="font-size: 15px;">Mulai</label>
                                <div class="d-flex">
                                    <input style="width: 85%;" class="px-3 py-2 input-tanggal" type="date" id="fromdate" placeholder={{ $budget->tanggal_pembuatan }}>
                                    <span class="input-group-append">
                                        <span class="calendar-logo input-group-text h-100 d-block">
                                        <i class="fa fa-calendar"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div> --}}
                        <div class="" style="width: 100%;">
                            <div class="d-flex flex-column w-100 justify-content-end">
                                <label for="" style="font-size: 15px;">Berakhir</label>
                                <div class="d-flex">
                                    <input style="width: 100%;" class="px-3 py-2 input-tanggal" type="date" id="todate" name="tanggal_berakhir">
                                    {{-- <span class="input-group-append"> --}}
                                        {{-- <span class="calendar-logo input-group-text h-100 d-block">
                                        <i class="fa fa-calendar"></i>
                                        </span> --}}
                                    {{-- </span> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="width: 90%; margin: 20px 0" class="d-flex flex-column align-items-center">
                        <input type="hidden" name="budget_id" id="budgetIdInput" value="">
                        <button type="submit" class="btn" style="padding: 15px 100px; background-color: #FEEE72; font-weight:600;">Ubah</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
        </div>
</div>


<script>
    document.querySelector('.buttonAddKategori').addEventListener('click', function() {
            console.log("tes");
    });
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
