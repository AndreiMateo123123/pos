@extends('layouts.app', ['pageSlug' => 'payment'])

@section('content')
<div class="container">
    <div class="row">
        payment
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
