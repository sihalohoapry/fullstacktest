@extends('home')
@section('title')
Customer
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-subtitle">Customer</h2>
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
                                                <th>Alamat</th>
                                                <th>Provinsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($customers as $customer )
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $customer->id }}</td>
                                                <td>{{ $customer->address }}</td>
                                                <td>{{ $customer->provinsi }}</td>
                                            </tr>
                                            @empty

                                            @endforelse

                                        </tbody>

                                    </table>
                                </div>
                                {{ $customers->links() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>


@endsection