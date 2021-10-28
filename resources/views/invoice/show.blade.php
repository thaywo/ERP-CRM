@extends('layout.main')

@section('content')
<div class="card invoice_details">
  <div class="card-header bg-light">
    <div class="col-md-3">
      <button id="print-btn" type="button" class="btn btn-default btn-sm d-print-none"><i class="fa fa-print"></i> {{trans('file.Print')}}</button>
    </div>
  </div>

  <div class="card-body" id="invoice_details">
    <section class="border-bottom mb-3">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('public/logo/logo.png') }}" style="height: 50px; width: auto; max-width: 100%" />
          <h2>
            {{$company->company_name}}
            <!-- <small class="pull-right">{{trans('file.Date')}}-{{ date('d-m-Y') }}</small> -->
          </h2>
        </div>

        <div class="col-md-6">
          <h2>Payments made to</h2><br>
          Bank Name:<br>
          Payee Name:<br>
          Account Number:
        </div>
      </div>
    </section>

    <section class="border-bottom mb-3">
      <div class="row">
        <div class="col-sm-12 invoice-col">
          <b>{{trans('file.Invoice')}}
            # {{$invoice->invoice_number}}</b><br>
          <br>
          <b>{{trans('file.Date')}}: </b>{{$invoice->invoice_date}} <br>
          <b>{{__('Payment Due')}}: </b> {{$invoice->invoice_due_date}}<br />
          <!-- <span class="label label-danger">
            @if($invoice->status == 1)
            {{trans('file.Paid')}}

            @else
            {{trans('file.UnPaid')}}
            @endif
          </span> -->
        </div>
      </div>
    </section>

    <section class="border-bottom mb-3">
      <div class="row">
        <div class="col-sm-6 company-col"> {{trans('file.From')}}
          <address>
            <strong>{{$company->company_name}}</strong><br>
            {{$location->address1}}<br>
            {{$location->city}}, {{$location->zip}}<br>
            {{$location->country}}<br />
            Phone: {{$company->contact_no}}
          </address>
        </div>

        <div class="col-sm-6 client-col"> {{trans('file.To')}}
          <address>
            <strong>{{$client->name}}</strong><br>
            {{$client->company_name}}<br>
            {{$client->address1 ?? ''}} {{$client->address2 ?? ''}}<br>
            Phone: {{$client->contact_no}}<br>
          </address>
        </div>
        <!-- /.col -->
      </div>
    </section>

    <!-- /.row -->
    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive mb-3">
        <table class="table">
          <thead>
            <tr>
              <th class="py-3"> #</th>
              <th class="py-3"> {{__('Item')}} </th>
              <th class="py-3"> {{__('Qty')}} </th>
              <th class="py-3"> {{__('Unit Price')}} </th>
              <th class="py-3"> {{__('Tax Rate')}} </th>
              <th class="py-3"> {{__('Sub Total')}} </th>
            </tr>
          </thead>
          <tbody>
            @foreach($invoice_items as $key=>$invoice_item)
            <tr>

              <td class="py-3">
                <div class="font-weight-semibold">{{$key+1}}</div>
              </td>
              <td class="py-3">
                <div class="font-weight-semibold">{{$invoice_item->item_name}}</div>
              </td>
              <td class="py-3"><strong>{{$invoice_item->item_qty}}</strong></td>
              <td class="py-3"><strong>{{$invoice_item->item_unit_price}}</strong></td>
              <td class="py-3"><strong>{{$invoice_item->item_tax_rate}}</strong></td>
              <td class="py-3"><strong>{{$invoice_item->item_sub_total}}</strong></td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="d-none col-xs-12 table-responsive">
        &nbsp;
      </div>

      <!-- Sub Total -->
      <div class="col-md-5 offset-md-7">
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <th class="w-75">{{__('Sub Total')}}:</th>
                <td class="border">{{ $invoice->sub_total }}</td>
              </tr>
              <tr>
                <th>{{trans('file.Tax')}}</th>
                <td class="border">{{$invoice->total_tax}}</td>
              </tr>
              <tr>
                <th>{{trans('file.Discount')}}:</th>
                <td class="border">{{$invoice->total_discount}}</td>
              </tr>
              <tr>
                <th class="text-uppercase">{{trans('file.Total')}}:</th>
                <td class="border">{{$invoice->grand_total}}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- /.col -->

    </div>
    <!-- /.row -->
    <!-- /.row (main row) -->
  </div>
</div>

<script>
  (function($) {
    "use strict";
    $("#print-btn").on("click", function() {
      var divToPrint = document.getElementById('invoice_details');
      var newWin = window.open('', 'Print-Window');
      newWin.document.open();
      newWin.document.write('<link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap/css/bootstrap.min.css') ?>" type="text/css"><style type="text/css">@media print {.invoice_details { max-width:100%;} }</style><body onload="window.print()">' + divToPrint.innerHTML + '</body>');
      newWin.document.close();
      setTimeout(function() {
        newWin.close();
      }, 10);
    });


  })(jQuery);
</script>

@endsection