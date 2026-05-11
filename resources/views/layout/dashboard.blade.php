@include('components.header')

<div class="drawer lg:drawer-open">
    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">

        @include('components.navbar')

        <div class="p-4">
            @yield('contenido_base')
        </div>
    </div>

    @include('components.sidebar')

</div>

@include('components.footer')