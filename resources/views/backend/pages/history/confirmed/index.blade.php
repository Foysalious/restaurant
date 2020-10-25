@extends('backend.template.layout')

@section('body-content')
<!-- main content start -->
<div class="main-content">
    <div class="container-fluid">
        
        <!-- page indicator start -->
        <section class="page-indicator">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li>
                            <i class="fas fa-check"></i>
                        </li>
                        <li>
                            Confirmed Order
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page indicator end -->

        <!-- dashbaord statistics seciton start -->
        <section class="statistics">

            <!-- flash message row start -->
            <div class="row">
                <div class="col-md-12">
                    @if( session()->has('delivered') )
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulation!</strong> {{ session()->get('delivered') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif  
                    @if( session()->has('cancelled') )
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulation!</strong> {{ session()->get('cancelled') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif              
                </div>
            </div>
            <!-- flash message row end -->


            <!-- manage row start -->
            
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <td>Invoice Id</td>
                                <td>name</td>
                                <td>email</td>
                                <td>phone</td>
                                <td>address</td>
                                
                                <td>Total</td>
                                <td>Status</td>
                                <td>action</td>
                            </tr>
                        </thead>
                        <tbody>
                         
                            @foreach($orders as $order)
                            <tr class="text-center">
                                <th>#{{ $order->id }}</th>
                                <td>
                                    {{ $order->name }}
                                </td>
                                <td>
                                    {{ $order->email }}
                                </td>
                                <td>
                                    {{ $order->phone }}
                                </td>

                                <td>
                                    {{ $order->address }}
                                 </td>

                                <td>
                                    {{ $order->total_price }} Taka
                                </td>

                                <td>
                                    @if( $order->order_status == 2 )
                                    <span class="badge badge-success">Delivered</span>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('delivered-order', $order->id) }}" class=" btn-primary">Delivered Order</a>
                                    <a href="{{ route('cancelled-order', $order->id) }}" class=" btn-primary">Cancelled Order</a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- manage row end -->

        </section>
        <!-- dashbaord statistics seciton end -->

    </div>
</div>
<!-- main content end -->
@endsection