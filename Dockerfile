FROM ubuntu:20.04

RUN apt-get update -y
RUN apt-get install python -y
RUN apt-get install python-pip -y
RUN pip install -r requirements.txt

COPY articles /home/articles
COPY static /home/static
COPY templates /home/templates
COPY main.py /home/main.py

ENTRYPOINT FLASK_APP=/home/main.py flask run --host=0.0.0.0
