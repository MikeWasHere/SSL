from flask import Flask
from flask import url_for
from flask import render_template
from flask import request
from flask import session
import hashlib
import mysql.connector
from flask import redirect
import os

app = Flask(__name__)
app.config['UPLOAD_FOLDER'] = "uploads/"
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