@extends('resource.index')
@php
$links['create'] = guard_url('sales/warehouse/create');
$links['search'] = guard_url('sales/warehouse');
@endphp

@section('icon') 
<i class="pe-7s-display2"></i>
@stop

@section('title') 
{!! __('sales::warehouse.title.main') !!}
@stop

@section('sub.title') 
{!! __('sales::warehouse.title.list') !!}
@stop

@section('breadcrumb') 
  <li><a href="{!!guard_url('/')!!}">{{ __('app.home') }}</a></li>
  <li><a href="{!!guard_url('sales/warehouse')!!}">{!! __('sales::warehouse.name') !!}</a></li>
  <li>{{ __('app.list') }}</li>
@stop

@section('entry') 
<div id="entry-form">

</div>
@stop

@section('list')
    @include('sales::warehouse.partial.list.' . $view, ['mode' => 'list'])
@stop

@section('pagination') 
    {!!$warehouses->links()!!}
@stop

@section('script')

@stop

@section('style')

@stop 
