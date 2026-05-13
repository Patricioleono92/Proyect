<div class="drawer-side is-drawer-close:overflow-visible">
    <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
    <div class="flex min-h-full flex-col items-start bg-base-200 is-drawer-close:w-14 is-drawer-open:w-64">

        <ul class="menu w-full grow">

            <x-layout.sidebar-link 
                onclick="id.showModal()"
                label="Crear Usuario"
                tip="Crear Nuevo usuario"
                icon="user-plus"
            />

            <x-layout.sidebar-link 
                label="Listado de Usuarios"
                tip="Listar Usuarios"
                icon="users"
            />

            <x-layout.sidebar-link 
                label="Ingresar Equipo"
                tip="Ingresar Nuevo Equipo"
                icon="wench"
            />
            

        </ul>
    </div>
</div>