FROM alpine:3.14

COPY requirements.txt requirements.txt

RUN apk add --update --no-cache python3 && ln -sf python3 /usr/bin/python
RUN python3 -m ensurepip
RUN pip3 install -r requirements.txt

COPY articles /articles
COPY static /static
COPY templates /templates
COPY main.py /main.py

EXPOSE 8000

CMD ["gunicorn","main:app","--workers=5","--bind 0.0.0.0:8000"]
