/*La suma de las Cantidades e importe total de todas las Entregas realizadas durante el 97. */
select m.Descripcion, sum(e.Cantidad) as 'Total Entregado', sum((m.Costo + m.PorcentajeImpuesto) * e.Cantidad) as 'Importe total'
from Entregan e, Materiales m
where e.Clave = m.Clave and 
	  e.fecha >= '1997-01-01' and e.Fecha < '1998-01-01'
group by m.Descripcion

/*Para cada Proveedor, obtener la razón social del Proveedor, número de Entregas e importe 
total de las Entregas realizadas.*/
select p.RazonSocial, count(p.RFC) as 'Total de Entregas', sum((m.Costo + m.PorcentajeImpuesto) * e.Cantidad) as 'Importe total'
from Proveedores p, Entregan e, Materiales m
where p.RFC = e.RFC and m.Clave = e.Clave
group by p.RazonSocial

/*Por cada Material obtener la Clave y Descripción del Material, la Cantidad total Entregada, 
la mínima Cantidad Entregada, la máxima Cantidad Entregada, el importe total de las Entregas 
de aquellos Materiales en los que la Cantidad promedio Entregada sea mayor a 400. */
select m.Clave, m.Descripcion,sum(e.Cantidad) as 'Total Entregado', 
	   min(e.Cantidad) as 'Minimo Entregado', max(e.Cantidad) as 'Maximo Entregado', 
	   sum((m.Costo + m.PorcentajeImpuesto) * e.Cantidad) as 'Importe total'
from Materiales m, Entregan e
where m.Clave = e.Clave
group by m.Clave, m.Descripcion, m.Costo
having avg(e.Cantidad) > 400

/*Para cada Proveedor, indicar su razón social y mostrar la Cantidad promedio de cada Material 
Entregado, detallando la Clave y Descripción del Material, excluyendo aquellos Proveedores para 
los que la Cantidad promedio sea menor a 500. */
select p.RazonSocial, avg(e.Cantidad) as 'promedio de entregas', m.Clave, m.Descripcion
from Proveedores p, Materiales m, Entregan e
where p.RFC = e.RFC and e.Clave = m.Clave
group by p.RazonSocial, m.Clave, m.Descripcion
having avg(e.Cantidad) >= 500

/*Mostrar en una solo consulta los mismos datos que en la consulta anterior pero para dos grupos 
de Proveedores: aquellos para los que la Cantidad promedio Entregada es menor a 370 y aquellos 
para los que la Cantidad promedio Entregada sea mayor a 450.*/
select p.RazonSocial, avg(e.Cantidad) as 'Cantidad promedio Entregada', m.Clave, m.Descripcion
from Proveedores p, Materiales m, Entregan e
where p.RFC = e.RFC and e.Clave = m.Clave
group by p.RazonSocial, m.Clave, m.Descripcion
having avg(e.Cantidad) < 370 or avg(e.Cantidad) > 450

/*inserta 5 Materiales*/
INSERT INTO Materiales VALUES (1440, 'Brocha .5 pulgadas', 21, 0.1), 
							  (1450, 'Espatula', 57, 1),
							  (1460, 'Cal', 430, 5.3),
							  (1470, 'Mezclera',123, 1.34),
							  (1480, 'Tarima', 30, 1.23)

/* Clave y Descripción de los Materiales que nunca han sido Entregados. */
SELECT Clave, Descripcion
FROM Materiales WHERE Clave not IN
	(SELECT Clave FROM Entregan)

/*Razón social de los Proveedores que han realizado Entregas 
tanto al proyecto 'Vamos México' como al proyecto 'Querétaro Limpio'*/
SELECT pr.RazonSocial
FROM Proveedores pr, Proyectos p, Entregan e
WHERE pr.RFC=e.RFC AND e.Numero=p.Numero
AND p.Denominacion LIKE 'Vamos México'
INTERSECT   
SELECT pr.RazonSocial
FROM Proveedores pr, Proyectos p, Entregan e
WHERE pr.RFC=e.RFC AND e.Numero=p.Numero
AND p.denominacion LIKE 'Querétaro Limpio'

/*Descripción de los Materiales que nunca han sido Entregados al proyecto 'CIT Yucatán'*/
select M.Descripcion
from Materiales M, Proyectos P, Entregan E
where M.Clave=E.Clave and E.Numero=P.Numero and M.Clave not in
	(select E.Clave
	from Entregan E, Proyectos P
	where E.Numero=P.Numero and P.Denominacion like 'CIT Yucatán')
group by M.Descripcion

/*Razón social y promedio de Cantidad Entregada de los Proveedores 
cuyo promedio de Cantidad Entregada es mayor al promedio de la Cantidad 
Entregada por el Proveedor con el RFC 'VAGO780901'. */
select P.RazonSocial, avg(E.Cantidad) as 'Promedio entregado'
from Proveedores P, Entregan E
where P.RFC = E.RFC
group by P.RazonSocial
having avg(E.Cantidad) >
	(select avg(E.Cantidad)
	from Proveedores P, Entregan E
	where P.RFC=E.RFC and E.RFC = 'VAGO780901')

/*RFC, razón social de los Proveedores que participaron en el 
proyecto 'Infonavit Durango' y cuyas Cantidades totales Entregadas en el 2000
fueron mayores a las Cantidades totales Entregadas en el 2001.*/
select distinct P.RFC, P.RazonSocial
from Proveedores P, Entregan E, Proyectos Pr
where P.RFC = E.RFC and Pr.Numero = E.Numero and Pr.Denominacion = 'Infonavit Durango' and P.RFC in
	(select P.RFC
	from Proveedores P, Entregan E
	where P.RFC=E.RFC and 
		  E.Fecha >= '2001-01-01' and E.Fecha < '2002-01-01'
	group by P.RFC
	having sum(E.Cantidad) >	
		(select sum(E.Cantidad)
		from Proveedores P, Entregan E
		where P.RFC = E.RFC and 
			  E.Fecha >= '2001-01-01' and E.Fecha < '2002-01-01')
	)