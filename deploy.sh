#!/bin/bash

# Install dependencies
apt update -y
apt install nginx unzip -y

# Prepare directory
mkdir -p /var/www/react-app

# Download the zip from Azure blob
wget "https://scriptsurbhipoc.blob.core.windows.net/privatescriptcontainer/react-app.zip?sp=r&st=2025-07-29T16:27:13Z&se=2025-08-31T00:42:13Z&sv=2024-11-04&sr=b&sig=O1OtaplYxPjkHup%2FE7jwUMbvyw%2FShIjMwAX2KW6Wf6E%3D" -O /tmp/react-app.zip

# Unzip to target directory
unzip -o /tmp/react-app.zip -d /var/www/react-app

# Update NGINX config
cat <<'EOF' > /etc/nginx/sites-available/default
server {
    listen 80 default_server;
    root /var/www/react-app;
    index index.html;
    server_name _;

    location / {
        try_files $uri /index.html;
    }
}
EOF

# Reload NGINX
nginx -t && systemctl reload nginx
