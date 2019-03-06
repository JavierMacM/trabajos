BULK INSERT a1703446.[Proveedores]
   FROM 'e:\wwwroot\a1703446\proveedores.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )