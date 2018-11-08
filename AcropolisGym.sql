--create database AcropolisGym
--Use AcropolisGym
/*
create table Clientes (
	NIP_Cliente int not null primary key,
	nombre_Cliente varchar (30),
	apellido_Paterno varchar(30),
	apellido_Materno varchar(30),
	edad_Cliente int,
	genero char,
	peso_Cliente float,
	problemas_Salud_Cliente varchar(50),
	nota_Cliente varchar(60)
)

create table Productos(
	id_Producto int not null primary key,
	descripcion_Producto varchar (50),
	precio float,
	existencia int
)

create table Visitas(
	id_Visita int not null identity(1,1) primary key,
	NIP_Cliente int not null,
	fecha varchar(10),
	foreign key(NIP_Cliente) references Clientes(NIP_Cliente)
)

create table Membresias(
	id_Membresia int not null identity(1,1) primary key,
	NIP_Cliente int not null,
	fecha_Inicio varchar(10),
	fecha_Fin varchar(10)
	foreign key (NIP_Cliente) references Clientes(NIP_Cliente)
)

create table Instructor(
	NIP_Instructor int not null primary key,
	nombre_Instructor varchar(30)
)

create table Venta(
	id_Venta int not null primary key,
	NIP_Cliente int,
	NIP_Instructor int,
	fecha varchar(10),
	foreign key (NIP_Cliente) references Clientes(NIP_Cliente),
	foreign key (NIP_Instructor) references Instructor(NIP_Instructor)
)

create table DetalleVenta(
	id_Venta int not null,
	id_Producto int not null,
	cantidad_Producto int,
	total_Producto float,
	foreign key (id_Producto) references Productos(id_Producto),
	foreign key(id_Venta) references Venta(id_Venta),
	primary key(id_Venta,id_Producto)
)

create table Notas(
	id_Nota int not null identity(1,1) primary key,
	titulo varchar(20),
	descripcion_Nota varchar(500),
	fechaRecordar varchar(10)
)

create Table Gastos(
	id_Gasto int not null identity(1,1) primary key,
	descripcion_Gasto varchar(50),
	monto float,
	fecha varchar(10)
)
*/

select * from Clientes