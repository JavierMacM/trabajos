DROP TABLE Entregan 
DROP TABLE Materiales 
DROP TABLE Proyectos 
DROP TABLE Proveedores 

CREATE TABLE Materiales(Clave numeric(5) NOT NULL,Descripcion varchar(50),Costo numeric(8,2))
CREATE TABLE Proveedores(RFC char(13) NOT NULL,RazonSocial varchar(50))
CREATE TABLE Proyectos(Numero numeric(5) NOT NULL,Denominacion varchar(50))
CREATE TABLE Entregan(Clave numeric(5) NOT NULL,RFC char(13) NOT NULL,Numero numeric(5) NOT NULL,Fecha datetime NOT NULL,Cantidad numeric(8,2))

BULK INSERT a1703446.[Proyectos]
   FROM 'e:\wwwroot\a1703446\proyectos.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

BULK INSERT a1703446.[Materiales]
   FROM 'e:\wwwroot\a1703446\materiales.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

BULK INSERT a1703446.[Proveedores]
   FROM 'e:\wwwroot\a1703446\proveedores.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

SET DATEFORMAT dmy
BULK INSERT a1703446.[Entregan]
   FROM 'e:\wwwroot\a1703446\entregan.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

INSERT INTO Materiales values(1000, 'xxx', 1000) 
DELETE FROM Materiales where Clave = 1000 and Costo = 1000 

ALTER TABLE Materiales add constraint llaveMateriales PRIMARY KEY (Clave) 
ALTER TABLE Proveedores add constraint llaveProveedores PRIMARY KEY (RFC) 
ALTER TABLE Proyectos add constraint llaveProyectos PRIMARY KEY (Numero) 
ALTER TABLE Entregan add constraint llaveEntregan PRIMARY KEY (Clave) 

sp_helpconstraint Materiales
sp_helpconstraint Proveedores
sp_helpconstraint Proyectos
sp_helpconstraint Entregan

INSERT INTO Entregan values (0, 'xxx', 0, '1-jan-02', 0) 

SELECT * FROM Materiales
SELECT * FROM Proveedores
SELECT * FROM Proyectos
SELECT * FROM Entregan

DELETE FROM Entregan where Clave = 0 

ALTER TABLE Entregan add constraint cfentreganclave foreign key (Clave) references Materiales(Clave)
ALTER TABLE Entregan add constraint rfcproveedoresclave foreign key (RFC) references Proveedores(RFC)
ALTER TABLE Entregan add constraint numproyectosclave foreign key (Numero) references Proyectos(Numero)
ALTER TABLE Entregan add constraint cantidad check (Cantidad > 0)

INSERT INTO Entregan values (1000, 'AAAA800101', 5000, GETDATE(), 0)

DELETE FROM Entregan where Clave = 1000 and Numero = 5000 
ALTER TABLE Entregan drop constraint cantidad