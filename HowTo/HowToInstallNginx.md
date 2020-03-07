
Step 1 — Update and Upgrade

sudo apt update
sudo apt -y upgrade

 
Step 2 — Installing Nginx

sudo apt install nginx

 
Step 3 — Adjusting the Firewall

sudo ufw app list


Output
Available applications:
  Nginx Full
  Nginx HTTP
  Nginx HTTPS
  OpenSSH

  there are three profiles available for Nginx:

    Nginx Full: This profile opens both port 80 (normal, unencrypted web traffic) and port 443 (TLS/SSL encrypted traffic)
    Nginx HTTP: This profile opens only port 80 (normal, unencrypted web traffic)
    Nginx HTTPS: This profile opens only port 443 (TLS/SSL encrypted traffic)

 

sudo ufw allow 'Nginx HTTP'

sudo ufw status

 
Step 4 — Checking your Web Server

systemctl status nginx

