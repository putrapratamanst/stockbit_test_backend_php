SELECT 
    a.id AS ID,
    a.username AS UserName,
    b.username AS ParentUserName
FROM
    user a
        LEFT JOIN
    user b ON a.parent = b.id;