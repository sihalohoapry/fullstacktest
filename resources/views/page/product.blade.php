@extends('home')
@section('title')
Product
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-subtitle">Product</h2>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                        <thead>
                                            <tr>
                                                <th>Nomer</th>
                                                <th>ID</th>
                                                <th>Nama Produk</th>
                                                <th>Categori</th>
                                                <th>Tipe</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($products as $product )
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->product_name }}</td>
                                                <td>{{ $product->category->name}}</td>
                                                <td>{{ $product->type}}</td>
                                            </tr>
                                            @empty

                                            @endforelse

                                        </tbody>

                                    </table>
                                </div>
                                {{ $products->links() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>


@endsection