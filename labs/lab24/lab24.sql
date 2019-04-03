create table Clientes_Banca
(
	NoCuenta varchar(5) not null primary key, 
	Nombre varchar(30),
	Saldo numeric(10,2)
);

create table Tipos_Movimiento
(
	ClaveM varchar(2) not null primary key, 
	Descripcion varchar(30) 
);

create table Movimientos
(
	NoCuenta varchar(5) not null foreign key references Clientes_Banca(NoCuenta),
	ClaveM varchar(2) not null foreign key references Tipos_Movimiento(ClaveM),
	Fecha datetime, 
	Monto numeric(10,2) 
);

BEGIN TRANSACTION PRUEBA1 
INSERT INTO Clientes_Banca VALUES('001', 'Manuel Rios Maldonado', 9000); 
INSERT INTO Clientes_Banca VALUES('002', 'Pablo Perez Ortiz', 5000); 
INSERT INTO Clientes_Banca VALUES('003', 'Luis Flores Alvarado', 8000); 
COMMIT TRANSACTION PRUEBA1 

BEGIN TRANSACTION PRUEBA2 
INSERT INTO Clientes_Banca VALUES('004','Ricardo Rios Maldonado',19000); 
INSERT INTO Clientes_Banca VALUES('005','Pablo Ortiz Arana',15000); 
INSERT INTO Clientes_Banca VALUES('006','Luis Manuel Alvarado',18000); 
COMMIT TRANSACTION PRUEBA2

SELECT * FROM Clientes_Banca 

BEGIN TRANSACTION PRUEBA2 
INSERT INTO Clientes_Banca VALUES('004','Ricardo Rios Maldonado',19000); 
INSERT INTO Clientes_Banca VALUES('005','Pablo Ortiz Arana',15000); 
INSERT INTO Clientes_Banca VALUES('006','Luis Manuel Alvarado',18000); 

ROLLBACK TRANSACTION PRUEBA2

BEGIN TRANSACTION PRUEBA3 
INSERT INTO Tipos_Movimiento VALUES('A','Retiro Cajero Automatico'); 
INSERT INTO Tipos_Movimiento VALUES('B','Deposito Ventanilla'); 
COMMIT TRANSACTION PRUEBA3 

BEGIN TRANSACTION PRUEBA4 
INSERT INTO Movimientos VALUES('001','A',GETDATE(),500); 
UPDATE Clientes_Banca SET Saldo = Saldo -500 
WHERE NoCuenta='001' 
COMMIT TRANSACTION PRUEBA4 

Select * from Movimientos
Select * from Clientes_Banca
Select * from Movimientos

BEGIN TRANSACTION PRUEBA5 
INSERT INTO Clientes_Banca VALUES('005','Rosa Ruiz Maldonado',9000); 
INSERT INTO Clientes_Banca VALUES('006','Luis Camino Ortiz',5000); 
INSERT INTO Clientes_Banca VALUES('001','Oscar Perez Alvarado',8000); 

IF @@ERROR = 0 
COMMIT TRANSACTION PRUEBA5 
ELSE 
BEGIN 
PRINT 'A transaction needs to be rolled back' 
ROLLBACK TRANSACTION PRUEBA5 
END 

--stored procedures
--Una transacción que registre el retiro de una cajero. nombre del store procedure REGISTRAR_RETIRO_CAJERO que recibe 2 parámetros en NoCuenta y el monto a retirar. 
GO  
CREATE PROCEDURE REGISTRAR_RETIRO_CAJERO   
    @nocuenta varchar(5),   
    @monto numeric(10,2)  
AS   
	begin transaction retiro
	insert into Movimientos values (@nocuenta, 'A', GETDATE(), @monto);
	update Clientes_Banca set Saldo=Saldo-@monto where NoCuenta = @nocuenta; 
	commit transaction retiro
GO  
execute REGISTRAR_RETIRO_CAJERO  001, 400;

--Una transacción que registre el deposito en ventanilla. Nombre del store procedure REGISTRAR_DEPOSITO_VENTANILLA que recibe 2 parámetros en NoCuenta y el monto a depositar. 
GO  
CREATE PROCEDURE REGISTRAR_DEPOSITO_VENTANILLA   
    @nocuenta varchar(5),   
    @monto numeric(10,2)  
AS   
	begin transaction retiro
	insert into Movimientos values (@nocuenta, 'B', GETDATE(), @monto);
	update Clientes_Banca set Saldo=Saldo+@monto where NoCuenta = @nocuenta; 
	commit transaction retiro
GO 
execute REGISTRAR_DEPOSITO_VENTANILLA  001, 500;