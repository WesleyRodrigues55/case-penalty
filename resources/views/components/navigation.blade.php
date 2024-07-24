<div class="bg-secondary py-2 px-4 d-flex justify-content-between align-items-center w-100">
    <div>
        <button class="btn btn-light" id="open-menu" title="close menu"><i class="bi bi-list"></i></button>
    </div>
    @if (Auth::check())
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">

                <strong>
                     {{ __('Hello, ') . Auth::user()->name }}!
                </strong>

            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" _msthidden="4">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <li><a class="dropdown-item" href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                </li>
            </ul>
        </div>
    @endif
</div>
