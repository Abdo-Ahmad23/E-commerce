@auth
@extends('layouts.master')
<?php session_start(); ?>
@section('content')
    <h1 class="text-center text-danger my-5">Your Orders
    </h1>
    <div class="mx-auto my-5 w-75">
        <table class="table bg-light">
            <thead class="table-dark">
                <th> Id</th>
                <th>name</th>
                <th>phone</i></th>
                <th>address</th>
                <th>location (link)</th>
                <th>amount</th>
                <th>price</th>
                <th>Product name</th>
                <th> created_At</th>
                <th> Action</th>
            </thead>
            <tbody>

                <?php $i = 0; ?>

                @foreach ($orders as $order)
                    <?php $i++; ?>
                    <tr>
                        <td>{{ $i }}</td>

                        <td>{{ $order->name }}</td>

                        {{-- <td><a href="tel:{{$order->phone}}">{{$order->phone}}</a></td> --}}
                        <td>
                            <a href="whatsapp://send?phone={{ $order->phone }}&text=example">{{ $order->phone }}</a></p>

                        </td>

                        <td>{{ $order->address }}</td>

                        <td><a href="{{ $order->location }}">{{ $order->location }}</a></td>

                        <td>{{ $order->amount }}</td>

                        <td>{{ $order->price }}</td>

                        <td>{{$order->product_id}}</td>
                        <td>{{ $order->created_at->diffForHumans() }}</td>
                        <td style="display: flex;justify-content:space-between;align-item:center;"class="gap-3 ">
                            <a href="{{ route('order.edit', $order->id) }}" style="margin-left:1.5rem;"
                                class="btn btn-warning "><i class="fa fa-edit"></i></a>
                            <form action="{{ route('order.destroy', $order->id) }}" method="post">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure to delete {{ $order->name }}?')"><i
                                        class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection

@endauth
