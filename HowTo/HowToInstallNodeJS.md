
 Step 1 — Update and Upgrade

sudo apt update
sudo apt -y upgrade

 
Step 2 — Installing Using a PPA (personal package archive)

cd ~

curl -sL https://deb.nodesource.com/setup_10.x -o nodesource_setup.sh


If you need to install another version, for example 12.x, just change setup_10.x with setup_12.x



Step 3 — inspect the contents of nodesource_setup.sh script

vim nodesource_setup.sh

 
Step 4 — Run the script under sudo

sudo bash nodesource_setup.sh

 
Step 5 — installing NodeJS

sudo apt install nodejs

 
Step 6 — check which version of Node.js

nodejs -v

 
Step 7 — check which version of npm

npm -v

