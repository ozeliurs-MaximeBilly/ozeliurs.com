#!/bin/sh

# Go to working directory
cd /root/

# Remove previous website
rm -r ozeliurs.com

# Download new website
git clone https://github.com/ozeliurs-MaximeBilly/ozeliurs.com.git

# Go in the downloaded folder
cd /root/ozeliurs.com/

# Build the docker container
docker build -t ozeliurs.com:latest .

# Stop the old website
docker stop ozeliurs.com-website

# Remove the old container
docker container rm ozeliurs.com-website

# Create and run the new container
docker run -d --name ozeliurs.com-website -p 8000:8000 ozeliurs.com:latest
