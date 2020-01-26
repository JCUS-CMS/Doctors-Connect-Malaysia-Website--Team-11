timestamp=$(date +"%Y.%m.%d-%H.%M.%S"+"cst")
mysqldump -ha2team11-stagingdb.cf6bjvjqmim1.us-east-1.rds.amazonaws.com -uadmin -pmalaysia_boleh doctor_connect > doctor_connect+$timestamp.sql
