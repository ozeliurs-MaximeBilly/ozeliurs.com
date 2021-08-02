from flask import Flask, redirect, url_for, render_template, jsonify
from pathlib import Path
import datetime

app = Flask(__name__, static_url_path='')
w_dir = Path(__file__).parent
print(w_dir)

@app.route("/")
def index():
    return render_template("index.html")

@app.route("/projects/")
def projects():
    return render_template("projects.html")

@app.route("/articles/")
def articles():
    article_dir = w_dir/"articles"
    article_list = []

    for art in article_dir.glob("*.html"):
        with art.open('r', encoding='utf8') as f:
            text = "<hr>".join(f.read().split("<hr>")[:2])
            title = text.split("<h1>")[1].split("</h1>")[0]
            date = text.split("<code>")[1].split("</code>")[0]
            date_f = datetime.datetime.strptime(date, "%d/%m/%Y")
            fline = text.split("<h4>")[1].split("</h4>")[0]
            link = "/article/" + art.stem
            article_list.append([date_f, link, title, date, fline])

    article_list.sort(key=lambda x:x[0], reverse=True)

    print(article_list)
    #sorted([datetime.strptime(dt, "%Y-%m-%d %H:%M:%S") for dt in dateList])
    
    #article_list.sort(key=[0].split("<code>")[1].split("</code>")[0])

    return render_template("articles.html", articles=article_list)

@app.route("/article/<name>")
def article(name):
    article_path = w_dir/"articles"/(name+".html")
    with article_path.open('r', encoding='utf8') as f:
        html = f.read()
    return render_template("article.html", article=html)

if __name__ == "__main__":
    app.run(host='0.0.0.0', debug=True)