## Clonar el repositorio desde GitHub
Para clonar un repositorio desde GitHub, utiliza el siguiente comando:
```sh
git clone https://github.com/DyEsSuCr/migrate_laravel
```

## Otorgar permisos de ejecución al archivo migrate.sh
Para dar permisos de ejecución al archivo migrate.sh, utiliza el siguiente comando:
```sh
chmod +x migrate.sh
```

## Ejecutar la migración de la base de datos
Para iniciar la migración de la base de datos, elija entre las versiones v1 y v2 mediante los comandos correspondientes:
```sh
./migrate.sh -v1  # Para migrar a la versión 1 de la base de datos
./migrate.sh -v2  # Para migrar a la versión 2 de la base de datos
```

Una vez completada la migración, puede iniciar el servidor con el siguiente comando:
```sh
php artisan serve
```
