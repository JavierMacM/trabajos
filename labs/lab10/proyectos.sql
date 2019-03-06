BULK INSERT a1703446.[Proyectos]
   FROM 'e:\wwwroot\a1703446\proyectos.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )