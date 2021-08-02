from flask import Flask, redirect, url_for, render_template, jsonify
import markdown

app = Flask(__name__, static_url_path='')

@app.route("/")
def index():
    return render_template("index.html")

@app.route("/projects/")
def projects():
    return render_template("projects.html")

@app.route("/articles/")
def articles():
    return render_template("articles.html")

@app.route("/article/<name>")
def article(name):
    with open("articles/"+name+'.md', 'r') as f:
        html = markdown.markdown(f.read())
    return render_template("article.html", article=html)

if __name__ == "__main__":
    app.run(host='0.0.0.0', debug=True)