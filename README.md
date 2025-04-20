# 🔍 Búsqueda de Usuarios con Fuse.js + Bootstrap 5

Este proyecto demuestra cómo implementar un buscador tipo `<select>` personalizado con **Fuse.js** (búsqueda difusa) y **Bootstrap 5**. Utiliza Laravel 12, Vite.

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

4. Configura la base de datos en `.env` y ejecuta las migraciones + seeders:

```bash
php artisan migrate --seed
```

5. Compila los activos con Vite:

```bash
npm run dev
```

6. Inicia el servidor:

```bash
php artisan serve
```

---

## 📆 Versión

**v1.0.0** - Buscador tipo select con Fuse.js + Bootstrap 5

---

## 📆 Librerías Utilizadas

| Librería    | Uso                              |
|-------------|----------------------------------|
| [Fuse.js](https://fusejs.io) | Búsqueda difusa en el frontend |
| [Bootstrap 5](https://getbootstrap.com) | Estilos y estructura visual |
| [Faker](https://fakerphp.github.io/) | Generación de usuarios en los seeders |
| [Vite](https://vite.dev/) | Compilación de JS/CSS modernos |

---

## 💡 Características

- Buscador centrado con estilo `<select>`
- Resaltado inteligente con `<mark>`
- Coincidencia tolerante al orden y errores tipográficos
- Toggle (abrir/cerrar) al hacer clic en el input
- Selección y autocompletado del valor
- Completamente responsivo

---

## 🙌 Créditos

Desarrollado por [Oscar Castellanos](https://github.com/OscarCastellanos01)

---

## 🛡️ Licencia

Este proyecto está bajo la licencia MIT.

