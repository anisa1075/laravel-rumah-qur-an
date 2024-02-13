<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    @if (Auth::user()->role == 1)
        @include('template.Menu.menuAdmin')
    @elseif(Auth::user()->role == 2)
        @include('template.Menu.menuGuru')
    @elseif(Auth::user()->role == 3)
        @include('template.Menu.menuSantri')
    @endif
</ul>
