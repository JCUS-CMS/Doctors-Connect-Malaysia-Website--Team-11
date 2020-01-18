# Obtain SQL Dump from the Amazon RDS (Local Sync)
rm my-defaults/doctorsconnect.sql
mysqldump -ha2team11-stagingdb.co3jt0kipxzh.ap-southeast-1.rds.amazonaws.com -uadmin -pmalaysia_boleh doctorsconnectdb > my-defaults/doctorsconnect.sql
# shift the .sql file to the database directory
git add .
git commit -m "$1"
# Run the git commands
git push
