@extends("layouts_user.main")
@section('container')

<section id="services" class="services section-bg" style="padding-top: 100px; padding-left:100px">
    <div class="container mt-4 mb-4 row-layanan">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @include("user.partials.p_customer")
            <div class="col" style="width: 730px">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <h5 class="card-title fw-bold">Ketentuan Layanan</h5>
                    <hr width="100%" color="#c0c0c0">
                    <p class="text-center fw-bold">KETENTUAN PENGGUNAAN APLIKASI TITIPSINI.COM</p>
                    <p class="text-center fw-bold" style="font-size: 15px">Mulai dari 5 November 2021</p>
                    <div class="p-4">
                        <p class="text-middle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit eget tortor facilisis
                            quisque vitae arcu massa. Mauris nunc velit donec porta sem ipsum tortor facilisis
                            mauris. Facilisis elit magna venenatis, enim, diam aenean luctus. Integer dictum
                            ullamcorper urna mollis augue rhoncus, ac.
                        </p>

                        <p class="text-middle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit eget tortor facilisis
                            quisque vitae arcu massa. Mauris nunc velit donec porta sem ipsum tortor facilisis
                            mauris. Facilisis elit magna venenatis, enim, diam aenean luctus. Integer dictum
                            ullamcorper urna mollis augue rhoncus, ac.
                        </p>

                        <p class="text-middle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit eget tortor facilisis
                            quisque vitae arcu massa. Mauris nunc velit donec porta sem ipsum tortor facilisis
                            mauris. Facilisis elit magna venenatis, enim, diam aenean luctus. Integer dictum
                            ullamcorper urna mollis augue rhoncus, ac.
                        </p>

                        <p class="text-middle">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit eget tortor facilisis
                            quisque vitae arcu massa. Mauris nunc velit donec porta sem ipsum tortor facilisis
                            mauris. Facilisis elit magna venenatis, enim, diam aenean luctus. Integer dictum
                            ullamcorper urna mollis augue rhoncus, ac.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
