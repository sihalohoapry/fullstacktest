@extends('home')
@section('title')
Order
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-subtitle">Order</h2>
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
                                                <th>Nama Customer</th>
                                                <th>Nama Agen</th>
                                                <th>qty</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($orders as $order )
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->order->name }}</td>
                                                <td>{{ $order->order->agent_name}}</td>
                                                <td>{{ $order->qty}}</td>
                                            </tr>
                                            @empty

                                            @endforelse

                                        </tbody>

                                    </table>
                                </div>
                                {{ $orders->links() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>


@endsection