
@extends('layouts_user.main')
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px;" data-aos-delay="50">
    <div class="container mt-4 mb-4">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="card-body mb-4" style="background: rgba(251, 244, 175, 0.45)">
                            <p class="mb-1" style="color: rgba(254, 171, 114, 1)"><b>Caution:</b></p>
                            <p class="mb-1" style="color: rgba(254, 171, 114, 1)">
                                Pastikan anda telah melengkapi seluruh informasi
                                sebelum upload bukti transfer. Titipsini.com akan memeriksa
                                bukti anda dalam 24 jam.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="col-5 text-end" style="padding-right: 5px;">
                            <p style="background: #ff8000; padding: 6px; border-radius: 10px; margin: 0;
                            text-align: center; color: #ffffff; font-size: 15px; width:60%">
                            Menunggu pembayaran</p>
                        </div>
                        <div class="estimasi mt-2" style="margin-left: 50px">
                            <p><b>5 jam 20 menit 20 detik</b></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="file-upload">
                            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload bukti pembayaran</button>

                            <div class="image-upload-wrap">
                              <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                              <div class="drag-text"><br>
                              <p>Tidak ada foto yang dipilih</p>
                              </div>
                            </div>
                            <div class="file-upload-content">
                              <img class="file-upload-image" src="#" alt="your image" />
                              <div class="image-title-wrap">
                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Nama pengirim</label>
                        <input type="nama" class="form-control" id="namaPengirim" placeholder="Alvi Nurbaetri">
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-2">
                        <p>
                            Transfer dari bank
                        </p>
                    </div>
                    <div class="col-8 mt-2">
                        <p type="button" class="btn btn-white text-end" data-bs-toggle="modal" data-bs-target="#konfirm" style="margin-left: 70%">Pilih bank<i class="bi bi-chevron-right"></i></p>
                        <div class="modal fade" id="konfirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header text-white bg-success">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Pilih bank</b></h5>
                                        <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                            Bank BCA
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                            Bank BRI
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                            Bank MANDIRI
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                            Bank BNI
                                            </label>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Pilih</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Nama penerima</label>
                        <input type="namapenerima" class="form-control" id="namaPengirim" placeholder="Angel silubun">
                    </div>
                </div>

                <div class="row">
                    <div class="col mt-2">
                        <p>Bank tujuan</p>
                    </div>

                    <div class="col-8 mt-2">
                        <p type="button" class="btn btn-white text-end" data-bs-toggle="modal" data-bs-target="#konfirmPembayaran" style="margin-left: 70%">Pilih bank<i class="bi bi-chevron-right"></i></p>
                        <div class="modal fade" id="konfirmPembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header text-white bg-success">
                                        <h5 class="modal-title" id="exampleModalLabel"><b>Pilih bank</b></h5>
                                        <button type="button" class="btn-close bg-white rounded" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Bank BCA
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Bank BRI
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Bank MANDIRI
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Bank BNI
                                            </label>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Pilih</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-2">
                        <label for="exampleFormControlInput1" class="form-label">No rekening anda</label>
                        <input type="norek" class="form-control" id="noRek" placeholder="1231241921">
                    </div>

                    <div class="col-12 mt-2">
                        <label for="exampleFormControlInput1" class="form-label">Jumlah yang ditransfer</label>
                        <input type="norek" class="form-control" id="noRek" placeholder="Rp 1.000.000">
                    </div>
                </div>

                <div class="row">
                    <div class="d-grid gap-2 col-6 mx-auto mt-3">
                        <a class="btn btn-outline-success" href="/user/pemesanan/struk" role="button">Kirimkan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
