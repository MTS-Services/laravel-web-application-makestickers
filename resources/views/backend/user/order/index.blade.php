@extends('frontend.layouts.app', ['page_slug' => 'order'])
@section('title', 'User Order')
@section('content')

<div class="container mt-5">
<div class="relative overflow-x-auto py-2">
    <a href="{{route('user.order.show')}}" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-black text-font-14px font-semibold px-4 py-1 rounded">Order View</a>
    <a href="{{route('user.order.index')}}" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-black text-font-14px font-semibold px-4 py-1 rounded">Order Cancel</a>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                    Order
                </th>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                    Total Items
                </th>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                    Amount
                </th>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                   Taxt
                </th>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                    Discount
                </th>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                    Shipping  Total
                </th>
                <th scope="col" class="px-6 py-3 rounded-e-lg">
                    Note
                </th>

            </tr>
        </thead>
        <tbody>
            <tr class="bg-white dark:bg-gray-800">

                    <td class="px-6 py-4">
                        10
                    </td>
                    <td class="px-6 py-4">
                       10
                    </td>

                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>

            </tr>

        </tbody>

    </table>
    <button type="button" class="btn-secondary w-full mt-4 my-2">Checkout</button>
</div>
</div>

@endsection
