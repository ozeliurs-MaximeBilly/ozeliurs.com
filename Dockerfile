FROM ubuntu:20.04

COPY requirements.txt requirements.txt

RUN apt-get update -y
RUN apt-get install python -y
RUN apt-get install python3-pip -y
RUN pip install -r requirements.txt

COPY articles /home/articles
COPY static /home/static
COPY templates /home/templates
COPY main.py /home/main.py

EXPOSE 80

ENTRYPOINT FLASK_APP=/home/main.py flask run --host=0.0.0.0
