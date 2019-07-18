from flask import Flask,render_template,request,jsonify
import random
import string

app = Flask(__name__)

@app.route('/')
def root():
    return app.send_static_file("index.html")

@app.route('/upload')
def upload():
    f=request.files['file']
    chars=string.ascii_letters
    size=10
    filename=''.join(random.choice(chars) for x in range(size))
    fileType=f.content_type
    filename=filename+'.'+fileType
    f.save('/static/uploads'+filename)
    return "uploaded"    
    

@app.route('/predict')
def predict():
   n1=request.values['n1']
   n2=request.values['n2']
   data=dict()
   data['ans']=n1+n2
   return jsonify(data)
   
if __name__ == '__main__':
   app.run(debug = True)