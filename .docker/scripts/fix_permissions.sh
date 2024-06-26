# run this after adding a file

# try getting uid from docker, if it fails, try 33 (should work)
WWW_DATA_UID=33
RESULT=$(docker-compose exec -u www-data wordpress id -u)
COMMAND_SUCCESS=$?
if [ $COMMAND_SUCCESS -eq 0 ];
then
  WWW_DATA_UID=$(echo $RESULT | tr -d '\r')
fi

sudo chown -Rfv $WWW_DATA_UID:$USER ./src
sudo find ./src -type d -exec chmod 775 {} \;
sudo find ./src -type f -exec chmod 664 {} \;