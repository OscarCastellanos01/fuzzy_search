
# 🔍 Búsqueda con Fuse.js + Bootstrap 5 + Livewire

Este proyecto demuestra cómo implementar un buscador tipo `<select>` personalizado con **Fuse.js**, **Bootstrap 5** y soporte para **Livewire** en Laravel 12.

![Vista previa del componente](/public/src/img/preview.png)

---

## 🚧 Requisitos

- PHP 8.4+
- Laravel 12
- Node.js 22+
- NPM 10+
- Composer 2+

---

## ⚙️ Instalación

1. Clona el repositorio:

```bash
git clone https://github.com/OscarCastellanos01/fuzzy_search.git
cd fuzzy_search
```

2. Instala las dependencias:

```bash
composer install
npm install
```

3. Crea el archivo de entorno:

```bash
cp .env.example .env
php artisan key:generate
```

4. Configura la base de datos en `.env` y ejecuta migraciones y seeders:

```bash
php artisan migrate --seed
```

5. Compila los activos:

```bash
npm run dev
```

6. Inicia el servidor:

```bash
php artisan serve
```

---

## 🧩 Uso del Componente

Este proyecto incluye un componente Blade reutilizable:

```blade
<x-fuzzy-select
    label="Buscar usuario"
    input-id="busquedaUsuarios"
    list-id="resultadosUsuarios"
    item-selector="usuario-item"
    :items="$usuarios"
    :keys="['name', 'email']"
    placeholder="Buscar usuario..."
    :open="false"
/>
```

### 🔧 Parámetros disponibles:

| Parámetro       | Tipo                   | Descripción                                                                 |
|------------------|------------------------|------------------------------------------------------------------------------|
| `label`          | `string`               | Texto visible encima del input                                              |
| `input-id`       | `string`               | ID único para el `<input>`                                                  |
| `list-id`        | `string`               | ID único para el `<ul>` que contiene los resultados                         |
| `item-selector`  | `string`               | Clase que se asigna a cada `<li>` para búsqueda y selección                 |
| `:items`         | `array` ó `Collection` | Lista de objetos. Soporta colecciones Eloquent (`User::all()` o `->get()`) |
| `:keys`          | `array`                | Campos de los objetos a usar para buscar (ej: `['name', 'email']`)         |
| `placeholder`    | `string`               | Texto a mostrar dentro del input                                            |
| `:open`          | `bool`                 | Si el dropdown debe estar abierto por defecto (`true` o `false`)           |

---

## 💡 Características

- Componente Blade dinámico y reutilizable
- Búsqueda difusa con Fuse.js
- Bootstrap 5
- Toggle (abrir/cerrar) con clic
- Resaltado inteligente con `<mark>`
- Soporte para múltiples instancias en la misma vista
- Compatible con Livewire ⚡

---

## 🛠️ Librerías Utilizadas

| Librería    | Uso                              |
|-------------|----------------------------------|
| [Fuse.js](https://fusejs.io) | Búsqueda difusa en el frontend |
| [Bootstrap 5](https://getbootstrap.com) | Estilos y estructura visual |
| [Faker](https://fakerphp.github.io/) | Generación de datos en los seeders |
| [Vite](https://vitejs.dev/) | Compilación moderna de JS/CSS |
| [Livewire](https://livewire.laravel.com) | Interactividad reactiva opcional en Laravel |

---

## 📦 Versión

**v1.1.0** – Soporte para múltiples selects, labels personalizados y opción `:open`

---

## 🙌 Créditos

Desarrollado con 💜 por [Oscar Castellanos](https://github.com/OscarCastellanos01)

---

## 🛡️ Licencia

Este proyecto está bajo la licencia MIT.
