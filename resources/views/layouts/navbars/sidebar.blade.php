<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Black Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'payment') class="active " @endif @if(Auth::user()->level != 2) hidden @endif>
                <a href="{{ route('payment') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('payment') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'cancelorder') class="active " @endif @if(Auth::user()->level != 2) hidden @endif>
                <a href="{{ route('cancelorder') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Cancel Order') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'product') class="active " @endif @if(Auth::user()->level != 2) hidden @endif>
                <a href="{{ route('product') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Manage Product') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'salesreport') class="active " @endif @if(Auth::user()->level != 2) hidden @endif>
                <a href="{{ route('salesreport') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Sales Report') }}</p>
                </a>
            </li>
      <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('User Management') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('User Profile') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('User Management') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
