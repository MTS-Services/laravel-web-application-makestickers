@extends('backend.admin.layouts.app', ['page_slug' => 'test'])

@section('content')
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>All Test</h3>

                </div>
                <div class="card-body">
                    <div class="table-responsive overflow-visible">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Order</th>
                                    <th>User</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Order Started At</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $order->order_number }}</td>
                                        <td>{{ $order->user->name }}</td>
                                        <td>{{ $order->amount }}</td>
                                        <td>
                                            <span
                                                class="badge badge-{{ $order->status_bg_color }}">{{ $order->status_text }}</span>
                                        </td>
                                        <td>{{ timeFormat($order->created_at) }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" type="button" id="dropdownMenuButton1"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="icon-settings fs-3 setting"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('order.show', encrypt($order->id)) }}">
                                                            {{ __('Details') }}
                                                        </a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="javascript:void(0)"
                                                            id="status" role="button" aria-expanded="false">
                                                            {{ __('Status') }}
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="status">

                                                            @foreach ($order->getStatusBtnText($order->status) as $status)
                                                            <li class="dropdown-item">
                                                                <a href="{{ route('order.status', [encrypt($order->id), encrypt(array_search($status['text'], $order->getStatus()))]) }}"
                                                                    class="text-{{ $status['class'] }}">
                                                                    {{ $status['text'] }}
                                                                </a>
                                                            </li>
                                                        @endforeach

                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
