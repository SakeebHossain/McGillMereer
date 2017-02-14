from flask import Flask
from flask import render_template
app = Flask(__name__)


@app.route('/')
def hello_world():
    return "Hello!"


def factors(n):
    answer = []
    for i in range(1, n+1):
        if n%i == 0: answer.append(i)
    return answer


@app.route('/math/<n>')
def factors_display(n):
    factors_list = factors(int(n))
    html = "<body>the factors of " + n + " are:" + "\n" + "<ul>"
    for f in factors_list:
        html += "<li>" + str(f) + "</li>\n"
    html += "</ul></body>"
    return html


if __name__ == "__main__":
    app.run()
