@extends('home')
@section('title')
Agent
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-subtitle">Agen</h2>
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
                                                <th>Nama Store</th>
                                                <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($agents as $agent )
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $agent->id }}</td>
                                                <td>{{ $agent->store_name }}</td>
                                                <td>{{ $agent->address }}</td>
                                            </tr>
                                            @empty

                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{$agents->links() }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>


@endsection