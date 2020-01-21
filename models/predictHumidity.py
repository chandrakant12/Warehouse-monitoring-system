import sys

sys.path.append("/usr/lib/python37.zip")
sys.path.append("/usr/lib/python3.7")
sys.path.append("/usr/lib/python3.7/lib-dynload")
sys.path.append("/home/skystone/.local/lib/python3.7/site-packages")
sys.path.append("/usr/local/lib/python3.7/dist-packages")
sys.path.append("/usr/local/lib/python3.7/dist-packages/django_simple_forum-0.0.5-py3.7.egg")
sys.path.append("/usr/local/lib/python3.7/dist-packages/sorl_thumbnail-12.4a1-py3.7.egg")
sys.path.append("/usr/local/lib/python3.7/dist-packages/django_storages-1.7.1-py3.7.egg")
sys.path.append("/usr/local/lib/python3.7/dist-packages/django_simple_pagination-1.3-py3.7.egg")
sys.path.append("/usr/local/lib/python3.7/dist-packages/django_ses_gateway-0.1.1-py3.7.egg")
sys.path.append("/usr/local/lib/python3.7/dist-packages/boto-2.49.0-py3.7.egg")
sys.path.append("/usr/local/lib/python3.7/dist-packages/Django-1.9.13-py3.7.egg")
sys.path.append("/usr/local/lib/python3.7/dist-packages/python_http_client-3.1.0-py3.7.egg")
sys.path.append("/usr/lib/python3/dist-packages")

sys.stderr = sys.stdout
from sklearn.externals import joblib 

import random
import datetime
dates = ['1996-11-01 11:00:00', '1996-11-01 12:00:00',
               '1996-11-01 13:00:00', '1996-11-01 14:00:00',
               '1996-11-01 16:00:00', '1996-11-01 17:00:00',
               '1996-11-01 18:00:00', '1996-11-01 19:00:00',
               '1996-11-01 20:00:00', '1996-11-01 21:00:00',]
dateSelect = random.choice(dates) 

month = int(dateSelect[5:7]) 
date = int(dateSelect[8:10]) 
year = int(dateSelect[0:4]) 
hours = int(dateSelect[11:13])

currentTime = datetime.datetime(year, month, date, hours, 00,00)

nextTime = currentTime + datetime.timedelta(hours=24)

print(currentTime)
print(nextTime)


# Load the model from the file 
tsModel = joblib.load('/opt/lampp/htdocs/gitlab/warehouse-data-logging-website-sih/models/humidityModel.pkl') 
# Use the loaded model to make predictions 
predictions = tsModel.predict(currentTime)
#print(predictions)
predList = list(predictions)


import pymysql
db = pymysql.connect("localhost","root","","IICDC")

cursor = db.cursor()



sql = "INSERT INTO predictedhumidity("

for i in range(1,25):
	if (i==24):
		sql = sql + " hour" + str(i)
	else:
		sql = sql + " hour" + str(i) + ","

sql = sql + ") VALUES ("

for i in range(1,25):
	if (i==24):
		sql = sql + " '" + str(predList[i]) + "' "
	else:
		sql = sql + " '" + str(predList[i]) + "',"

sql = sql + ");"



print()
print(sql)
print()
#cursor.execute("SELECT VERSION()")
cursor.execute(sql)

# data = cursor.fetchone()
# print ("Database version : %s " % data)
db.commit()

db.close()



"""
predictionStr = str(predictions)

f = open("myfile.txt", "w")

f.write(predictionStr)
f.close()
"""