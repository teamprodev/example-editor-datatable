{"data":[{"DT_RowId":"row_71","users":{"first_name":"","last_name":"","phone":"","site":"3"},"sites":{"name":"Paris"}},{"DT_RowId":"row_75","users":{"first_name":"Testing","last_name":"dddd","phone":"0123456789","site":"7"},"sites":{"name":"bucu"}},{"DT_RowId":"row_77","users":{"first_name":"TGasd","last_name":"tearaed","phone":"123213212","site":"3"},"sites":{"name":"Paris"}}],"options":{"users.site":[{"label":"London","value":"2"},{"label":"Los Angeles","value":"6"},{"label":"New York","value":"4"},{"label":"Paris","value":"3"},{"label":"Pohj","value":"8"},{"label":"Singapore","value":"5"},{"label":"bucu","value":"7"},{"label":"ddd","value":"13"},{"label":"erfewrw","value":"17"},{"label":"fd","value":"16"},{"label":"jefvil","value":"10"},{"label":"rrr","value":"12"}]},"files":[],"searchPanes":{"options":{"users.first_name":[{"label":"","total":"1","value":"","count":"1"},{"label":"TGasd","total":"1","value":"TGasd","count":"1"},{"label":"Testing","total":"1","value":"Testing","count":"1"}],"users.last_name":[{"label":"","total":"1","value":"","count":"1"},{"label":"dddd","total":"1","value":"dddd","count":"1"},{"label":"tearaed","total":"1","value":"tearaed","count":"1"}],"users.phone":[{"label":"","total":"1","value":"","count":"1"},{"label":"123213212","total":"1","value":"123213212","count":"1"},{"label":"0123456789","total":"1","value":"0123456789","count":"1"}],"sites.name":[{"label":"Paris","total":"2","value":"Paris","count":"2"},{"label":"bucu","total":"1","value":"bucu","count":"1"}]}},"debug":[{"query":"SELECT  `users`.`id` as 'users.id', `users`.`first_name` as 'users.first_name', `users`.`last_name` as 'users.last_name', `users`.`phone` as 'users.phone', `users`.`site` as 'users.site', `sites`.`name` as 'sites.name' FROM  `users` LEFT JOIN `sites` ON `sites`.`id` = `users`.`site` ","bindings":[]},{"query":"SELECT  `users`.`first_name` as 'value', COUNT(*) as count FROM  `users` LEFT JOIN `sites` ON `sites`.`id` = `users`.`site`  GROUP BY users.first_name","bindings":[]},{"query":"SELECT  `users`.`first_name` as 'label', `users`.`first_name` as 'value', COUNT(*) as total FROM  `users` LEFT JOIN `sites` ON `sites`.`id` = `users`.`site`  GROUP BY users.first_name","bindings":[]},{"query":"SELECT  `users`.`last_name` as 'value', COUNT(*) as count FROM  `users` LEFT JOIN `sites` ON `sites`.`id` = `users`.`site`  GROUP BY users.last_name","bindings":[]},{"query":"SELECT  `users`.`last_name` as 'label', `users`.`last_name` as 'value', COUNT(*) as total FROM  `users` LEFT JOIN `sites` ON `sites`.`id` = `users`.`site`  GROUP BY users.last_name","bindings":[]},{"query":"SELECT  `phone` as 'value', COUNT(*) as count FROM  `users` LEFT JOIN `sites` ON `sites`.`id` = `users`.`site`  GROUP BY phone","bindings":[]},{"query":"SELECT  `phone` as 'label', `phone` as 'value', COUNT(*) as total FROM  `users` LEFT JOIN `sites` ON `sites`.`id` = `users`.`site`  GROUP BY phone","bindings":[]},{"query":"SELECT DISTINCT  `id` as 'id', `name` as 'name' FROM  `sites` ","bindings":[]},{"query":"SELECT  `sites`.`name` as 'value', COUNT(*) as count FROM  `users` LEFT JOIN `sites` ON `sites`.`id` = `users`.`site`  GROUP BY sites.name","bindings":[]},{"query":"SELECT  `sites`.`name` as 'label', `sites`.`name` as 'value', COUNT(*) as total FROM  `users` LEFT JOIN `sites` ON `sites`.`id` = `users`.`site`  GROUP BY sites.name","bindings":[]}]}