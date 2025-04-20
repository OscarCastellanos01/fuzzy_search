<div class="container py-5">

    <div class="mb-4 text-center">
        <h4 class="fw-bold mb-0">
            🔍 Búsqueda con 
            <span class="text-primary">Fuse.js</span> + 
            <span class="text-info">Bootstrap 5</span> + 
            <span style="color: #6f42c1;">Livewire</span>
        </h4>
        <small class="text-muted">Ejemplo de select personalizado con búsqueda difusa y soporte dinámico</small>
    </div>

    <div class="row justify-content-center gy-4 gx-4">
        <div class="col-md-6">
            <x-fuzzy-select
                label="Usuario"
                input-id="busquedaUsuarios"
                list-id="resultadosUsuarios"
                item-selector="usuario-item"
                :items="$usuarios"
                :keys="['name', 'email']"
                placeholder="Buscar usuario..."
                :open="false"
            />
        </div>

        <div class="col-md-6">
            <x-fuzzy-select
                label="Producto"
                input-id="buscarProducto"
                list-id="resultadoProducto"
                item-selector="producto-item"
                :items="$productos"
                :keys="['nombre', 'categoria']"
                placeholder="Buscar producto..."
                :open="true"
            />
        </div>
    </div>
</div>
