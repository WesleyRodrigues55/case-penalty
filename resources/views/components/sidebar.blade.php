<div id="sidebar-content" class="sidebar-content show-sidebar">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-secondary h-100">
        <a href="javascript:void(0)" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <img src="img/logo.webp" class="w-100" alt="">
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            @if (Auth::check())
                <li class="nav-item">
                    <a href="{{ route('/') }}" class="nav-link {{ request()->routeIs('/') ? 'active bg-dark' : 'text-white' }}" aria-current="page">
                        {{ __('Home') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('representatives.index') }}" class="nav-link {{ request()->routeIs('representatives.index') ? 'active bg-dark' : 'text-white' }}" aria-current="page">
                        {{ __('Representatives') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('customers.index') }}" class="nav-link {{ request()->routeIs('customers.index') ? 'active bg-dark' : 'text-white' }}">
                        {{ __('Customers') }}
                    </a>
                </li>

                <hr>
            @endif

            <li class="nav-item">
                <a href="{{ route('/project-requeriments') }}" aria-current="page" class="nav-link {{ request()->routeIs('/project-requeriments') ? 'active bg-dark' : 'text-white' }}">
                    {{ __('Project Requeriments') }}
                </a>
            </li>
        </ul>
    </div>
</div>
