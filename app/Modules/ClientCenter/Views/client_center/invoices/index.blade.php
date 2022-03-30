@extends('client_center.layouts.master')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="fs-3">@lang('bt.invoices')</div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        @include('layouts._alerts')
        <div class="row">
            <div class="col-12">
                <div class=" card card-light">
                    <div class="card-body">
                        @include('client_center.invoices._table')
                    </div>
                </div>
                <div class="float-end">
                    {!! $invoices->render() !!}
                </div>
            </div>
        </div>
    </div>

@stop
