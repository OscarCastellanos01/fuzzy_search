<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fuzzy Search</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div>
            <livewire:buscarUsuarios>
        </div>
    </body>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const input = document.getElementById('busqueda');
            const lista = document.getElementById('resultados');

            function resaltarCoincidencias(texto, indices) {
                let resultado = '';
                let cursor = 0;
                indices.forEach(([inicio, fin]) => {
                    resultado += texto.slice(cursor, inicio);
                    resultado += `<mark>${texto.slice(inicio, fin + 1)}</mark>`;
                    cursor = fin + 1;
                });
                resultado += texto.slice(cursor);
                return resultado;
            }

            const usuarios = Array.from(document.querySelectorAll('.usuario-item')).map(item => {
                const name = item.dataset.name;
                const email = item.dataset.email;
                return {
                    name,
                    email,
                    element: item
                };
            });

            const fuse = new Fuse(usuarios, {
                keys: ['name', 'email'],
                includeMatches: true,
                shouldSort: true,
                threshold: 0.4,
                distance: 100,
                ignoreLocation: true,
                minMatchCharLength: 2,
            });

            function mostrarTodos(limit = 50) {
                lista.style.display = 'block';
                usuarios.forEach(usuario => {
                    usuario.element.style.display = 'none';
                });
                usuarios.slice(0, limit).forEach(usuario => {
                    usuario.element.innerHTML = `${usuario.name} — <span class="text-muted">${usuario.email}</span>`;
                    usuario.element.style.display = 'list-item';
                });
            }

            function ocultarLista() {
                lista.style.display = 'none';
            }

            function renderizarBusqueda(query) {
                if (query === '') {
                    mostrarTodos();
                    return;
                }

                const resultados = fuse.search(query);

                usuarios.forEach(usuario => {
                    usuario.element.style.display = 'none';
                });

                resultados.forEach(({ item, matches }) => {
                    let nameHTML = item.name;
                    let emailHTML = item.email;

                    matches.forEach(match => {
                        if (match.key === 'name') {
                            nameHTML = resaltarCoincidencias(item.name, match.indices);
                        }
                        if (match.key === 'email') {
                            emailHTML = resaltarCoincidencias(item.email, match.indices);
                        }
                    });

                    item.element.innerHTML = `${nameHTML} — <span class="text-muted">${emailHTML}</span>`;
                    item.element.style.display = 'list-item';
                });

                lista.style.display = 'block';
            }

            input.addEventListener('input', () => {
                renderizarBusqueda(input.value.trim());
            });

            input.addEventListener('click', () => {
                if (lista.style.display === 'none' || lista.style.display === '') {
                    renderizarBusqueda(input.value.trim());
                } else {
                    ocultarLista();
                }
            });

            document.addEventListener('click', (e) => {
                const esClickDentro = input.contains(e.target) || lista.contains(e.target);
                if (!esClickDentro) {
                    ocultarLista();
                }
            });

            usuarios.forEach(usuario => {
                usuario.element.addEventListener('click', () => {
                    input.value = usuario.name;
                    ocultarLista();
                });
            });

            renderizarBusqueda('');
        });
    </script>
</html>
