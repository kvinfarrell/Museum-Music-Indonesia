<nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="/dashboard">My Admin | Museum Musik Indonesia</a>
        <div class="d-flex align-items-center">
            @auth
                <span class="text-white me-3" style="margin-right: 5px">Welcome, {{ Auth::user()->name }}</span>
                <div class="dropdown">
                    <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width:150px">
                        Account
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="width: 150px; margin-right: none; right:-5px; ">
                        <li>
                            <a class="dropdown-item" href="/change-password">Change Password</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth
        </div>
    </div>
</nav>

