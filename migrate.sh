#!/bin/bash

database="database/database.sqlite"

case "$1" in
    -v1)

        if [ -f "$database" ]; then
            rm -r "$database"
        fi
        php artisan migrate --path=database/migrations/v1
        php artisan db:seed --class=DatabaseV1Seeder
        ;;

    -v2)

        if [ -f "$database" ]; then
            rm -r "$database"
        fi
        php artisan migrate --path=database/migrations/v2
        php artisan db:seed --class=DatabaseV2Seeder
        ;;

    *)
        echo "Uso: $0 {-v1|-v2}"
        exit 1
        ;;
esac

