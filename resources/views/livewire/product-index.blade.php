<div>
    <div class="container">
        <div class="row mb-2">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Jersey</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>List <strong>Jersey </strong></h2>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <input type="text" wire:model="search" class="form-control" placeholder="Search.." aria-label="Search"
                        aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-products" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></span>
                </div>
            </div>
        </div>

    </div>
    <section id="liga">
        <div class="container mt-5">
            <div class="row ">
                @foreach ($products as $product)
                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow" style="height: 320px">
                            <div class="card-body text-center">
                                <img src="{{ asset('assets/jersey/' . $product->image) }}" alt="" height="150">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="mt-2"><strong>{{ $product->name }}</strong></h5>
                                        <h5>Rp. {{ number_format($product->price) }}</h5>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-end">
                                    <div class="col-md-12 d-grid">
                                        <a href="" class="btn btn-dark btn-blok">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
        <div class="container">
            <div class="row justify-center">
                <div class="col">
                    {{ $products->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </section>
</div>
