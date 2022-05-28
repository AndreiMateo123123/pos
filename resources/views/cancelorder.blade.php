@extends('layouts.app', ['pageSlug' => 'cancelorder'])

@section('content')
<div class="container">
    <div class="row">
        cancelorder
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