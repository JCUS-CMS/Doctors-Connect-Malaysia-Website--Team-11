# Script to be run on Github Webhook Trigger

GREEN="\033[0;32m"
RED="\033[0;31m"
CYAN="\033[0;36m"
WHITE="\033[1;37m"
NO_COLOR="\033[0m"

timestamp=$(date +"%Y.%m.%d-%H.%M.%S"+"CST")



echo "${GREEN}"
echo "Pulling from Github Repository" >> log_$timestamp.txt
git fetch --all >> log_$timestamp.txt
git reset --hard origin/stagingsite >> log_$timestamp.txt
git pull origin stagingsite >> log_$timestamp.txt
echo "${CYAN}"
echo "IP: vishalm.sgedu.site" >> log_$timestamp.txt
echo "${NO_COLOR}"

#Importing Database alongisde the wp files
mysqldump -ha2team11-stagingdb.co3jt0kipxzh.ap-southeast-1.rds.amazonaws.com -uadmin -pmalaysia_boleh doctorsconnectdb > my-defaults/doctorsconnectdb.sql
echo "${RED}"
mysql -uvishalm4_wpstage -pvish117257 vishalm4_wp781 < my-defaults/doctorsconnect.sql
echo "${GREEN}"
echo "Database Import Complete" >> log_$timestamp.txt

echo "${GREEN}"
# Replacing wp-config file
rm wp-config.php
echo "WP Config File Deleted" >> log_$timestamp.txt
# Getting New file with the new database connection
cp my-defaults/wp-config-staging.php wp-config.php
echo "WP Config File for Staging Added" >> log_$timestamp.txt

echo "${NO_COLOR}"
#Replacing Site URL from local to Remote Site
wp search-replace "http://doctorsconnect.test" "https://a2team11.vishalm.sgedu.site/staging" --skip-columns=guid --verbose
echo "Complete..!! Refresh your browser" >> log_$timestamp.txt
#Process Completed
