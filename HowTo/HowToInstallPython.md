
Step 1 — Update and Upgrade

sudo apt update
sudo apt -y upgrade

 
Step 2 — Check Version of Python

python3 -V

 
Step 3 — Install pip

sudo apt install -y python3-pip

 
Step 4 — Install Additional Tools

sudo apt install build-essential libssl-dev libffi-dev python3-dev

 
Step 5 — Install venv

sudo apt install -y python3-venv

 
Step 6 — Create a Virtual Environment

python3 -m venv my_env

 
Step 7 — Activate Virtual Environment

source my_env/bin/activate

