select * from Materiales

select *
from Materiales
where Clave = 1010

select Clave,RFC,Fecha from Entregan

select *
from Materiales,Entregan
where Materiales.Clave = Entregan.Clave

select *
from Entregan,Proyectos
where Entregan.Numero < = Proyectos.Numero

select * from Entregan where Clave=1450
union
(select * from Entregan where Clave=1300)

select Clave from entregan where numero=5001
intersect
(select Clave from entregan where numero=5018)

(select * from entregan)
except
(select * from entregan where clave=1000)

select * from entregan,materiales

select m.Descripcion
from Materiales m, Entregan e
where m.Clave = e.Clave and e.Fecha between 01/01/2000 and 31/12/2000


select p.Numero, p.Denominacion, e.Fecha, e.Cantidad
from Proyectos p, Entregan e
where p.Numero = e.Numero
group by p.Numero, p.Denominacion, e.Fecha, e.Cantidad
order by e.Fecha desc

SELECT * FROM Proyectos where Denominacion LIKE 're%'
SELECT RFC FROM Entregan WHERE RFC LIKE '[A-D]%'
SELECT RFC FROM Entregan WHERE RFC LIKE '[^A]%'
SELECT Numero FROM Entregan WHERE Numero LIKE '___6'

SELECT RFC,Cantidad, Fecha,Numero
FROM Entregan
WHERE Numero Between 5000 and 5010 AND
Exists (
	SELECT RFC
	FROM Proveedores
	WHERE RazonSocial LIKE 'La%' and Entregan.RFC = Proveedores.RFC
)

SELECT TOP 2 * FROM Proyectos
SELECT TOP Numero FROM Proyectos

ALTER TABLE materiales ADD PorcentajeImpuesto NUMERIC(6,2)
UPDATE materiales SET PorcentajeImpuesto = 2*clave/1000

select e.Clave, sum((m.Costo + m.PorcentajeImpuesto) * e.Cantidad) as 'Importe total'
from Entregan e, Materiales m
where e.Clave = m.Clave
group by e.Clave
order by [Importe total] desc

--vistas--
create view crf as
SELECT * FROM Proyectos where Denominacion LIKE 're%'

create view uniondeclave as
select * from Entregan where Clave=1450
union
(select * from Entregan where Clave=1300)

create view top2 as
SELECT TOP 2 * FROM Proyectos

create view  razonla as
SELECT RFC,Cantidad, Fecha,Numero
FROM Entregan
WHERE Numero Between 5000 and 5010 AND
Exists (
	SELECT RFC
	FROM Proveedores
	WHERE RazonSocial LIKE 'La%' and Entregan.RFC = Proveedores.RFC
)

create view numtermina6 as
SELECT Numero FROM Entregan WHERE Numero LIKE '___6'
--fin vistas--

--Los materiales (clave y descripci�n) entregados al proyecto "M�xico sin ti no estamos completos".
select m.Clave, m.Descripcion
from Materiales m, Entregan e, Proyectos p
where m.Clave = e.Clave and p.Numero = e.Numero
	  and p.Denominacion = 'Mexico sin ti no estamos completos'
group by m.Clave, m.Descripcion

--Los materiales (clave y descripci�n) que han sido proporcionados por el proveedor "Acme tools".
select m.Clave, m.Descripcion
from Materiales m, Entregan e, Proveedores p
where m.Clave = e.Clave and p.RFC = e.RFC
	  and p.RazonSocial = 'Oviedo'
group by m.Clave, m.Descripcion

--El RFC de los proveedores que durante el 2000 entregaron en promedio cuando menos 300 materiales.
select p.RFC
from Entregan e, Proveedores p
where p.RFC = e.RFC and e.Fecha between 01-01-2000 and 31-12-200
group by p.RFC
having sum(e.Cantidad) > 299

--El Total entregado por cada material en el a�o 2000.
select Clave, sum(Cantidad) as 'Total entregado'
from Entregan
where Fecha between 01-01-2000 and 31-12-2000
group by Clave

--La Clave del material m�s vendido durante el 2001. (se recomienda usar una vista intermedia para su soluci�n)
create view vendidos2001 as
select Clave, sum(Cantidad) as 'Ventas'
from Entregan
where Fecha between 01-01-2001 and 31-12-2001
group by Clave

select top 1 * from vendidos2001
order by Ventas desc

--Productos que contienen el patr�n 'ub' en su nombre.
select Descripcion from Materiales where Descripcion like '%ub%'

--Denominaci�n y suma del total a pagar para todos los proyectos.
select p.Denominacion, sum((m.Costo + m.PorcentajeImpuesto) * e.Cantidad) as 'Importe total'
from Entregan e, Materiales m, Proyectos p
where e.Clave = m.Clave and p.Numero = e.Numero
group by p.Denominacion

--Denominaci�n, RFC y RazonSocial de los proveedores que se suministran materiales al proyecto Televisa en acci�n que no se encuentran apoyando al proyecto Educando en Coahuila (Solo usando vistas).
create view proveedoresEducandoCoahuila as
select p.Denominacion, pr.RFC, pr.RazonSocial
from Proyectos p, Proveedores pr, Entregan e
where p.Numero = e.Numero and pr.RFC = e.RFC
			and p.Denominacion = 'Educando en Coahuila'
group by p.Denominacion, pr.RFC, pr.RazonSocial

create view proveedoresTelevisa as
select p.Denominacion, pr.RFC, pr.RazonSocial
from Proyectos p, Proveedores pr, Entregan e
where p.Numero = e.Numero and pr.RFC = e.RFC
			and p.Denominacion = 'Televisa en acción'
group by p.Denominacion, pr.RFC, pr.RazonSocial

create view tnc as
select RFC from proveedoresTelevisa
except
select RFC from proveedoresEducandoCoahuila

select pt.Denominacion, pt.RFC, pt.RazonSocial
from proveedoresTelevisa pt, tnc
where pt.RFC = tnc.RFC 
group by pt.Denominacion, pt.RFC, pt.RazonSocial


--Denominaci�n, RFC y RazonSocial de los proveedores que se suministran materiales al proyecto Televisa en acci�n que no se encuentran apoyando al proyecto Educando en Coahuila (Sin usar vistas, utiliza not in, in o exists).
select p.Denominacion, pr.RFC, pr.RazonSocial
from Proyectos p, Proveedores pr, Entregan e
where p.Numero = e.Numero and pr.RFC = e.RFC
			and p.Denominacion = 'Televisa en acción'
			and pr.RFC not in
			(
				select pr.RFC
				from Proyectos p, Proveedores pr, Entregan e
				where p.Numero = e.Numero and pr.RFC = e.RFC and p.Denominacion = 'Educando en Coahuila'
			)
group by p.Denominacion, pr.RFC, pr.RazonSocial

--Costo de los materiales y los Materiales que son entregados al proyecto Televisa en acci�n cuyos proveedores tambi�n suministran materiales al proyecto Educando en Coahuila.
create view CoahuilaYTelevisa as
select RFC from proveedoresEducandoCoahuila
intersect
select RFC from proveedoresTelevisa

select pt.Denominacion, m.Descripcion, sum(m.Costo + m.PorcentajeImpuesto) as 'Costo total'
from Materiales m, Entregan e, CoahuilaYTelevisa cyt, proveedoresTelevisa pt
where m.Clave = e.Clave and cyt.RFC = e.RFC
group by m.Descripcion, pt.Denominacion


select * from Entregan