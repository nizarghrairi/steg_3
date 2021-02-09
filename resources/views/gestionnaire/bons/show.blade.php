@extends('layouts.print')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h2>#</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td>{{$bon->name}}</td>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <th>{{__('frontend/frontend.customer_mobile')}}</th>
                                <td>{{$invoice->customer_mobile}}</td>
                                <th>{{__('frontend/frontend.company_name')}}</th>
                                <td>{{$invoice->company_name}}</td>
                            </tr>
                            <tr>
                                <th>{{__('frontend/frontend.invoice_number')}}</th>
                                <td>{{$invoice->invoice_number}}</td>
                                <th>{{__('frontend/frontend.invoice_date')}}</th>
                                <td>{{$invoice->invoice_date}}</td>
                            </tr>
                        </table>

                        <h3>{{__('frontend/frontend.invoice_details')}}</h3>

                        <table class="table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>{{__('frontend/frontend.product_name')}}</th>
                                <th>{{__('frontend/frontend.unit')}}</th>
                                <th>{{__('frontend/frontend.quantity')}}</th>
                                <th>{{__('frontend/frontend.unit_price')}}</th>
                                <th>{{__('frontend/frontend.subtotal')}}</th>

                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($invoice->details as $item)
                                <tr>
                                    <td width = "5%" >{{$loop->iteration}}</td>
                                    <td width = "35%" >{{$item->product_name}}</td>
                                    <td width = "10%">{{$item->unitText()}}</td>
                                    <td width = "10%">{{$item->quantity}}</td>
                                    <td width = "10%">{{$item->unit_price}}</td>
                                    <td>{{$item->row_sub_total}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="3"></td>
                                <th colspan="2">{{__('frontend/frontend.sub_total')}}</th>
                                <td>{{$invoice->sub_total}}</td>
                            </tr>

                            <tr>
                                <td colspan="3"></td>
                                <th colspan="2">{{__('frontend/frontend.discount')}}</th>
                                <td>{{$invoice->discountResult()}}</td>
                            </tr>

                            <tr>
                                <td colspan="3"></td>
                                <th colspan="2">{{__('frontend/frontend.vat')}}</th>
                                <td>{{$invoice->vat_value}}</td>
                            </tr>

                            <tr>
                                <td colspan="3"></td>
                                <th colspan="2">{{__('frontend/frontend.shipping')}}</th>
                                <td>{{$invoice->shipping}}</td>
                            </tr>

                            <tr>
                                <td colspan="3"></td>
                                <th colspan="2">{{__('frontend/frontend.total_due')}}</th>
                                <td>{{$invoice->total_due}}</td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        window.print();
    </script>
@endsection
