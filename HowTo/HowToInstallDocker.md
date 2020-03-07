
Step 1 — Update and Upgrade

sudo apt update
sudo apt -y upgrade

 
Step 2 — install a few prerequisite packages

sudo apt install apt-transport-https ca-certificates curl software-properties-common

 
Step 3 — add the GPG key for the official Docker repository

curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -

 
Step 4 — Add the Docker repository to APT sources

sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu bionic stable"

 
Step 5 — update the package database with the Docker packages

sudo apt update

 
Step 6 — Make sure you are installing from the Docker repo

apt-cache policy docker-ce

 
Step 7 — install Docker

sudo apt install docker-ce

