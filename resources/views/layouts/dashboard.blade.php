@include('components.layout.header')

<div class="drawer lg:drawer-open">
    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">

        @include('components.layout.navbar')

        <div class="p-4">
            @yield('contenido_base')
        </div>
    </div>

    @include('components.layout.sidebar')

</div>

@include('components.layout.footer')