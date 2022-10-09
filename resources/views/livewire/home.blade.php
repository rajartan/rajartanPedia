<div>
    <div class="container">
        <div class="banner">
            <img src="{{ asset('assets/slider/slider1.png') }}" alt="" width="100%" class="rounded">
        </div>
    </div>

    {{-- section liga --}}
    <section id="liga">
        <div class="container mt-4">
            <h1><strong>Piih Liga</strong></h1>
            <div class="row mt-4">
                @foreach ($ligas as $liga)
                    <div class="col-md-3">
                        <div class="card border-0 shadow">
                            <div class="card-body text-center">
                                <img src="{{ asset('assets/liga/' . $liga->image) }}" alt="" height="150">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- section list product --}}
    <section id="liga">
        <div class="container mt-5">
            <div class="d-flex justify-content-between">
                <h3><strong>Best Products</strong></h3>
                <a href="{{ route('product') }}" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                    <path
                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                </svg> Lihat Semua</a>
            </div>
            <div class="row mt-4">
                @foreach ($products as $product)
                    <div class="col-md-3">
                        <div class="card border-0 shadow" style="height: 320px">
                            <div class="card-body text-center">
                                <img src="{{ asset('assets/jersey/' . $product->image) }}" alt=""
                                    height="150">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="mt-2"><strong>{{ $product->name }}</strong></h5>
                                        <h5>Rp. {{ number_format($product->price) }}</h5>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-end">
                                    <div class="col-md-12 d-grid">
                                        <a href="" class="btn btn-dark btn-blok"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                        </svg> Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</div>
