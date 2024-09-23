@extends('admin-panel.master')
@section('title', 'Project Index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h1>Orders</h1>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (Session('successMsg'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ Session('successMsg') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Order</th>
                                    <th>Address</th>
                                    <th>Remark</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->remark }}</td>
                                        <td>
                                            @if ($order->status == '0')
                                                <span class="badge badge-warning">Pending</span>
                                            @elseif($order->status == '1')
                                                <span class="badge badge-success">Accepted</span>
                                            @elseif($order->status == '2')
                                                <span class="badge badge-error">Cancelled</span>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer">
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
