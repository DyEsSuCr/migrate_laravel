## Requisitos

- PHP >= 8.3
- Composer
- Laravel 10.x
- SQLite (para entorno de desarrollo)

## Instalación

1. ## Clonar el repositorio desde GitHub
    Para clonar un repositorio desde GitHub, utiliza el siguiente comando:
    ```sh
    git clone https://github.com/DyEsSuCr/migrate_laravel
    ```



2. ## Instala las dependencias de Composer
    ```bash
    composer install
    ```



3. ## Crea el archivo `.env`:

    ```bash
    cp .env.example .env
    ```



3. ## Otorgar permisos de ejecución al archivo migrate.sh
    Para dar permisos de ejecución al archivo migrate.sh, utiliza el siguiente comando:
    ```sh
    chmod +x migrate.sh
    ```



4. ## Ejecutar la migración de la base de datos
    Para iniciar la migración de la base de datos, elija entre las versiones v1 y v2 mediante los comandos correspondientes:
    ```sh
    ./migrate.sh -v1  # Para migrar a la versión 1 de la base de datos
    ./migrate.sh -v2  # Para migrar a la versión 2 de la base de datos
    ```

    Una vez completada la migración, puede iniciar el servidor con el siguiente comando:
    ```sh
    php artisan serve
    ```

## Uso

### Rutas de API

El proyecto incluye un conjunto de rutas de API para manejar las operaciones CRUD para cada entidad. Puedes probar estas rutas utilizando herramientas como Postman o cURL.

#### Ejemplo de rutas:

- `GET /api/companies` - Obtener todas las compañías
- `GET /api/companies/{id}` - Obtener una compañía por ID
- `POST /api/companies` - Crear una nueva compañía
- `PUT /api/companies/{id}` - Actualizar una compañía
- `DELETE /api/companies/{id}` - Eliminar una compañía
