from flask import Flask
from flask import url_for
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
app.config['UPLOAD_FOLDER'] = "static/uploads/"

app.secret_key = 'joe'

@app.route('/')
def index():
	db = mysql.connector.connect(user='root', password='root', host='127.0.0.1', database='SSL', port='8889')
	cur = db.cursor()
	cur.execute('select id, username, password from users')
	data = cur.fetchall()
	print url_for('static',filename='bootstrap.min.css')
	print url_for('static',filename='style.css')
	print url_for('static',filename='bootstrap.js')
	print url_for('static',filename='jquery.js')
	print url_for('static',filename='main.js')
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
	

	
		
@app.route('/loggedIn')	
def success():
	if session["logged"]:
		render_template("body.html")
	else:
		render_template("results.html")


@app.route('/logout')	
def logout():
	session.pop("logged", None)
	return redirect("/")	
	
@app.route('/uploadForm')	
def uploadForm():
	return render_template('/uploadForm.html')
	
	
	
@app.route('/processForm', methods=['GET','POST'])
def processForm():
	db = mysql.connector.connect(user='root',password='root',host='127.0.0.1',database='ssl', port='8889')
	cur = db.cursor()
	username = request.form["username"]
	password = request.form["password"]
	cur.execute('select username, password from users where username = %s and password= md5(%s)',(username, password,))
	data = cur.fetchall()
	
	if data:
		data = {'username': username,
				'password': password
				}
		session["logged"] = True
		return render_template('results.html',data=data)
				
	else:
		session["logged"] = False
		return redirect('/')
	
	
	# data = []
# 	sha1 = hashlib.sha1()
# 	sha1.update(request.form["username"])
# 	data.append(sha1.hexdigest())
# 	return render_template('body.html',data=data)
# 	
# 	data.append(userid)
# 	data.append(request.form["username"])
# 	return render_template("loginForm.html",data=data)
	
	
@app.route('/upload', methods=['GET','POST'])
def upload_file():
	f = request.files['los_files']
	f.save(os.path.join(app.config['UPLOAD_FOLDER']+f.filename))
	return render_template('test.html')
	
	
	
# @app.route('/upload', methods=['GET','POST'])
# def upload_file():
#     if request.method == 'POST':
#         f = request.files['los_files']
#         f.save(os.path.join(app.config['UPLOAD_FOLDER']+f.filename))
#         db = mysql.connector.connect(user='root', password='root', host='127.0.0.1', database='SSL', port='8889')
#         cur = db.cursor()
#         cur.execute('update users set userimg = %s where id=%s',(f,id,))
#         db.commit()
#         return redirect('/processForm')
        
        
# @app.route('/addForm')
# def addForm():
# 	return "something"


# @app.route('/wresult/<item>')
# def results(item):
# 	item = item
# 	print item
# 	return render_template('results.html',item=data) #fucking Tuple problem


@app.route('/parseJSON')
def parseJSON():
	url = "http://api.wunderground.com/api/526d578ed66c1406/geolookup/conditions/q/FL/orlando.json"
	loadurl = urllib.urlopen(url)
	api = json.loads(loadurl.read().decode(loadurl.info().getparam('charset') or 'utf-8'))
	item = str(api["current_observation"]["temp_f"]),api["current_observation"]["icon_url"],api["current_observation"]["nowcast"]
	print item
	return redirect("/results",item)

 
@app.route('/results/<ids>/<item>')
def results(ids,item):
	db = mysql.connector.connect(user='root',password='root',host='127.0.0.1',database='ssl', port='8889')
	cur = db.cursor()
	cur.execute('select username, password, userimg from users where id = %s',(ids,))
	data = cur.fetchall()
	item = item
	print str(data)
	print item
	return render_template('results.html',data=data,item=data) #fucking Tuple problem
        
@app.route('/addUser', methods=['GET','POST'])
def addUser():
	username = request.form["username"]
	password = request.form["password"]
	db = mysql.connector.connect(user='root', password='root', host='127.0.0.1', database='SSL', port='8889')
	cur = db.cursor()
	cur.execute('insert into users (username,password) values(%s,%s) ',(username,password))
	ids = cur.lastrowid
	db.commit()
	if request.method == 'POST':
		f = request.files['los_files']
		filename = f.filename
		f.save(os.path.join(app.config['UPLOAD_FOLDER']+filename))
		cur = db.cursor()
		cur.execute('update users set userimg = %s where id= %s ',(filename,ids,))
		db.commit()
		return redirect('/results/'+str(ids))		        
        
        
        
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