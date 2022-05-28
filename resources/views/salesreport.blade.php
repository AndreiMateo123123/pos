@extends('layouts.app', ['pageSlug' => 'salesreport'])

@section('content')
<div class="container">
    <div class="row">
    salesreport
    </div>
</div>
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
