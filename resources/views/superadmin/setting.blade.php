@extends("layouts_super.main")
@section('content')
<section class="home-section">
    <div class="main">
        <div class="topbar">
            <div class="home-content">
                <i class='bx bx-menu'></i>
            </div>
            <div class="search">
                <label>
                    <input type="text" placeholder="Cari Disini">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
        </div>
        <div class="details mt-4">
            <div class="setting">
                <div class="cardHeader1">
                    <h1>Setting</h1>
                </div>
                <div class="cardHeader1" style="margin-top: 30px;">
                    <h3>Message Notification</h3>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="note">
                    <span>Receive All Message Notification</span>
                </div>

                <div class="cardHeader1" style="margin-top: 30px;">
                    <h3>Manage Blocked Users</h3>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="note">
                    <span>View the list of users you have blocked</span>
                </div>

                <div class="cardHeader1" style="margin-top: 30px;">
                    <h3>Accept My Invite</h3>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="note">
                    <span>Someone Accept my incecation</span>
                </div>

                <div class="cardHeader1" style="margin-top: 30px;">
                    <h3>Private Messeges</h3>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="note">
                    <span>When users sands me private messages</span>
                </div>

                <div class="cardHeader1" style="margin-top: 30px;">
                    <h3>Delete Old Message</h3>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="note">
                    <span>When old message will delete otometically</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
