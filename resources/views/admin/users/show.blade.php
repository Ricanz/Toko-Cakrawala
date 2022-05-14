<x-app-layout>
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>User Detail <h1>
            <p class="breadcrumbs"><span><a href="/">Dashboard</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>User
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>User Detail</h2>
                </div>
                <div class="card-body product-detail">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6">
                            <div class="row">
                                <div class="single-pro-img">
                                    <div class="single-product-scroll">
                                        <div class="single-product-cover">
                                            <img src="{{ asset('storage/user/'.$user->gambar) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="row product-overview">
                                <div class="col-12">
                                    <h5 class="product-title mb-3">{{$user->name}}</h5>
                                    <p class="product-sku">Email: {{$user->email}}</p>
                                    <p class="product-sku">Tanggal Pendaftaran: {{$user->created_at->format('Y-m-d')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

