<div class="d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="mb-4 text-center">
        <h4 class="fw-bold mb-0">🔍 Búsqueda con <span class="text-primary">Fuse.js</span> + <span class="text-info">Bootstrap 5</span></h4>
        <small class="text-muted">Ejemplo de select personalizado con búsqueda difusa</small>
    </div>

    <div class="position-relative w-100" style="max-width: 500px;">
        <input
            type="text"
            id="busqueda"
            placeholder="Buscar usuario..."
            class="form-control"
            autocomplete="off"
        >

        <ul
            id="resultados"
            class="list-group position-absolute mt-1 shadow"
            style="display: none; max-height: 300px; overflow-y: auto; z-index: 1000; width: 100%;"
        >
            @foreach ($usuarios as $usuario)
                <li
                    class="list-group-item usuario-item text-start"
                    data-name="{{ $usuario->name }}"
                    data-email="{{ $usuario->email }}"
                    style="cursor: pointer;"
                >
                    {{ $usuario->name }} — <span class="text-muted">{{ $usuario->email }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</div>
