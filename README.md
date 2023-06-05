# Reposistorio de Trabajos Universitarios

### Instalación

1. Clona el repositorio en tu máquina local:

    ```
    git clone https://github.com/wdavidcalsin968/repositorio-de-trabajos-universitarios.git
    ```

2. Navega hasta el directorio del proyecto:

    ```
    cd repositorio-de-trabajos-universitarios
    ```

3. Instala las dependencias:

    ```
    composer install
    ```

    and

    ```
    npm install
    ```

4. Crea un nuevo archivo .env:

    ```
    cp .env.example .env
    ```

5. Genera una nueva clave de aplicación:

    ```
    php artisan key:generate
    ```

6. Crea una nueva base de datos y actualiza el archivo .env con las credenciales de tu base de datos:

    ```
    DB_DATABASE=repositorio-de-trabajos-universitarios
    DB_USERNAME=root
    DB_PASSWORD=
    ```

7. Ejecuta las migraciones de la base de datos:

    ```
    php artisan migrate:fresh --seed
    ```

8. Inicia el servidor de desarrollo:

    - Primer Terminal
        ```
        npm run dev
        ```
    - Segundo Terminal

        ```
        php artisan serve
        ```

### Usage

Una vez que el servidor de desarrollo esté funcionando, puedes acceder a la aplicación en http://localhost:8000.

### License

Este proyecto está bajo la licencia MIT.
