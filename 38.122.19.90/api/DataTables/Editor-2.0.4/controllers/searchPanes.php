 {"fieldErrors":[],"error":"An SQL error occurred: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'worklistdb.users' doesn't exist","data":[],"ipOpts":[],"cancelled":[],"debug":[{"query":"SELECT  `users`.`id` as 'users.id', `users`.`first_name` as 'users.first_name', `users`.`last_name` as 'users.last_name', `users`.`phone` as 'users.phone', `users`.`site` as 'users.site', `sites`.`name` as 'sites.name' FROM  `users` LEFT JOIN `sites` ON `sites`.`id` = `users`.`site` ","bindings":[]}]}