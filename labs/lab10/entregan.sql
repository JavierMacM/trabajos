SET DATEFORMAT dmy
BULK INSERT a1703446.[Entregan]
   FROM 'e:\wwwroot\a1703446\entregan.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )