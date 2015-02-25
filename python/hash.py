from flask import Flask
from flask import render_template
from flask import request
from flask import session
import hashlib
import mysql.connector
from flask import redirect
import os
from flask import jsonify
import json
import urllib

app = Flask(__name__)
app.config['UPLOAD_FOLDER'] = "uploads/"
app.secret_key = 'joe'


@app.route('/jsonOut')
def jsonOut():
	db = mysql.connector.connect(user='root', password='root', host='127.0.0.1', database='SSL', port='8889')
	cur = db.cursor()
	cur.execute('select id, username, password from users')
	data = cur.fetchall()
	#data = {"test":"Hello"}
	return jsonify({"users":data})									
	
	#return render_template("body.html",data=data)
	
	
	
@app.route('/getJson')
def getJson():
	url = "http://maps.googleapis.com/maps/api/geocode/json?address=orlando,%20FL"
	loadurl = urllib.urlopen(url)
	data = json.loads(loadurl.read().decode(loadurl.info().getparam('charset') or 'urf-8'))
	item = data["results"][0]["address_components"][1]["long_name"]
	return item


@app.route('/')
def index():
	db = mysql.connector.connect(user='root', password='root', host='127.0.0.1', database='SSL', port='8889')
	cur = db.cursor()
	cur.execute('select id, username, password from users')
	data = cur.fetchall()
	return render_template("body.html",data=data)
	
	
	
@app.route('/updateUser/<id>', methods=['GET','POST'])
def updateUser(id):
	id = id
	username = request.form["username"]
	print username
	db = mysql.connector.connect(user='root', password='root', host='127.0.0.1', database='SSL', port='8889')
	cur = db.cursor()
	cur.execute('update users set username = %s where id=%s',(username,id,))
	db.commit()
	return redirect('/')
	
	
	
@app.route('/editForm/<id>' , methods=['GET','POST'])
def editForm(id): 
	db = mysql.connector.connect(user='root', password='root', host='127.0.0.1', database='SSL', port='8889')
	cur = db.cursor()
	cur.execute('select id, username, password from users where id=%s',(id,))
	data = cur.fetchall()
	return render_template("editForm.html",data=data)	
	
	
		
@app.route('/loginForm')	
def loginForm():
	return render_template('/loginForm.html')
	
	
	
@app.route('/uploadForm')	
def uploadForm():
	return render_template('/uploadForm.html')
	
	
	
@app.route('/processForm/<userid>', methods=['GET','POST'])
def processForm(userid):
	db = mysql.connector.connect(user='root',password='root',host='127.0.0.1',database='ssl', port='8889')
	cur = db.cursor()
	cur.execute('select username, password from users where username = %s and password= %s',(username, password))
	data = cur.fetchall()
	
	# if user:
# 		data = {'username': username,
# 				'password': password
# 				}
# 				session["logged"] = True
# 				return render_template('rwsults.html',data=data)
# 				
# 	else:
# 		session["logged"] = False
# 		return redirect('/login')
# 	
	
	data = []
	sha1 = hashlib.sha1()
	sha1.update(request.form["firstname"])
	data.append(sha1.hexdigest())
	return render_template('body.html',data=data)
	
	data.append(userid)
	data.append(request.form["firstname"])
	return render_template("loginForm.html",data=data)
	
@app.route('/upload', methods=['GET','POST'])
def upload_file():
    if request.method == 'POST':
        f = request.files['los_files']
        f.save(os.path.join(app.config['UPLOAD_FOLDER']+f.filename))
        return render_template('/loginForm.html')
        
        
        
        
@app.route('/addForm')
def addForm():
	return "something"
	
        
@app.route('/addUser')
def addUser():
	db = mysql.connector.connect(user='root', password='root', host='127.0.0.1', database='SSL', port='8889')
	cur = db.cursor()
	cur.execute('insert id, username, password into users where id=%s',(id,))
	data = cur.fetchall()
	return render_template("editForm.html",data=data)	
		        
        
        
@app.route('/deleteUser/<id>')
def deleteUser(id):
	id = id
	db = mysql.connector.connect(user='root', password='root', host='127.0.0.1', database='SSL', port='8889')
	cur = db.cursor()
	cur.execute('delete from users where id=%s',(id,))
	db.commit()
	return redirect('/')
	
	
if __name__ == '__main__':
	app.run(debug=True)