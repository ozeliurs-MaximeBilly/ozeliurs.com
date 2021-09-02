cd /root/
rm -r ozeliurs.com
git clone https://github.com/ozeliurs-MaximeBilly/ozeliurs.com.git
cd /root/ozeliurs.com/
docker build -t ozeliurs.com:latest .
docker stop ozeliurs.com-website
docker container rm ozeliurs.com-website
docker run -d --name ozeliurs.com-website -p 8000:8000 ozeliurs.com:latest
