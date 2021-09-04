import random
import datetime
from pathlib import Path
from flask import Flask, render_template


app = Flask(__name__, static_url_path='')
w_dir = Path(__file__).parent
print(w_dir)

# Error Pages
@app.errorhandler(404)
def not_found():
    """Handle 404 errors."""
    err_msg = [
        "404",
        "4/04",
        "Are you lost ?",
        "You have reached the end of the internet.",
        "Congrats, you broke it ..."
    ]
    return render_template("404.html", message=random.choice(err_msg))

# Main Website
@app.route("/")
def index():
    """Handle Homepage"""
    return render_template("index.html")

@app.route("/projects/")
def projects():
    """Halndle Projects Page"""
    return render_template("projects.html")

@app.route("/articles/")
def articles():
    """Handle Articles Page"""
    article_dir = w_dir/"articles"
    article_list = []

    for art in article_dir.glob("*.html"):
        with art.open('r', encoding='utf8') as file:
            text = "<hr>".join(file.read().split("<hr>")[:2])
            title = text.split("<h1>")[1].split("</h1>")[0]
            date = text.split("<code>")[1].split("</code>")[0]
            date_f = datetime.datetime.strptime(date, "%d/%m/%Y")
            fline = text.split("<h4>")[1].split("</h4>")[0]
            link = "/article/" + art.stem
            article_list.append([date_f, link, title, date, fline])

    article_list.sort(key=lambda x:x[0], reverse=True)

    return render_template("articles.html", articles=article_list)

@app.route("/article/<name>")
def article(name):
    """Handle all article pages"""
    article_path = w_dir/"articles"/(name+".html")
    with article_path.open('r', encoding='utf8') as f:
        html = f.read()
    return render_template("article.html", article=html)

if __name__ == "__main__":
    app.run(host='0.0.0.0', debug=True)
