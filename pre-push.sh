# Delete the SQL Dump
rm my-defaults/doctorsconnect.sql
# SQL dump from RDS into your project directory this needs to be run in public_html directory
mysqldump -ha2team11-stagingdb.co3jt0kipxzh.ap-southeast-1.rds.amazonaws.com -uadmin -pmalaysia_boleh doctorsconnectdb > my-defaults/doctorsconnect.sql

# GIT COMMANDS

# Stage the files
git add .

# Commiting the changes made
git commit -m "$1"

# Push branch that has been selected
git push
