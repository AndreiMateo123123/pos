@extends('layouts.app', ['pageSlug' => 'payment'])

@section('content')
<div class="container">
    <div class="row">
12321
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
