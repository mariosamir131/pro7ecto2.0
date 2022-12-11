/*BASE DE DATOS DEL PROYECTO*/

create database proyecto;

use proyecto;

create table agencia (codV varchar(5) primary key, nombreE varchar(30), fechaL date);

create table zona (codZ varchar(5) primary key, tipoZ varchar(40), descripcion text, codV varchar(5));

alter table zona add foreign key (codV) references agencia (codV);

/*Inserciones de datos en tabla agencia*/
    insert into agencia values ('T01', 'AGROLIBANO', '2022-12-15');
     insert into agencia values ('T02', 'ZOOLOGICO PICACHO', '2022-12-22');
      insert into agencia values ('T03', 'SARITAS', '2022-12-15');
       insert into agencia values ('T04', 'PROCED MADERA', '2022-12-24');
        insert into agencia values ('T05', 'COCO BALEADAS', '2022-12-12');
        
        
        /*inserciones en tabla zona*/
        insert into zona values ('z06', 'Madera', 'Este trabajo es para hacer cortar arboles y pagamos $ 160', 'T06');

        


