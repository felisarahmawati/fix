@extends("layouts_super.main")
@section("content")
<section class="home-section">

    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        <div class="details mt-3">
            <div class="setting">
                <div class="cardHeader1">
                    <h1>Pengaturan User</h1>

                </div>
                <div class="cardHeader1" style="margin-top: 50px;">
                    <h3>Notification from user</h3>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="note">
                    <span>Pemberitahuan notifikasi dari user</span>
                </div>

                <div class="cardHeader1" style="margin-top: 30px;">
                    <h3>Change Edit Data</h3>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="note">
                    <span>Ubah Edit Data</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
