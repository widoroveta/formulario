create database pruebas;
use pruebas;
create table usuarios(
				id int auto_increment,
                nombre varchar(50),
                apellido varchar(50),
              direccion varchar(50),
                	dni int,
									localidad varchar(50),
									nacionalidad varchar(50),
                primary key(id)
					);
