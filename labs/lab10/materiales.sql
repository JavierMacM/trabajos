BULK INSERT a1703446.[Materiales]
   FROM 'e:\wwwroot\a1703446\materiales.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )