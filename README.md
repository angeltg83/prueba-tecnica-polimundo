## Instalación
- Ejecutar migracion con php artisan migrate
- Ejecutar el seeder php artisan db:seed
  
## Documentacion APIs 

En esta seccion se describe las apis creadas de pruebas

- GET http://localhost:8000/api/mascotas 
  - No recibe parametros y devuelve el listado de mascotas
- GET http://localhost:8000/api/mascotas/dueno/1
  - Recibe como parametro en id del dueño, y devuelve las mascotas del dueño
  
  ## Docker
Ir a la carpeta raiz del proyecto y ejecutar lo siguiente
- sudo docker-compose up
- Ejecutamos # sudo docker ps, y copiamos el nombre del contenedor que se ejecuto
- Ejecutamos # sudo docker exec -i <nombre_del_contenedor> psql -U postgres < db/base.sql, reemplazando el nombre del contenedor copiado
- ejecutamos # php artisan migrate
- ejecutamos # php artisan db:seed

Fin ...

:) 
