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

# Load the model from the file 
tsModel = joblib.load('humidityModel.pkl') 
# Use the loaded model to make predictions 
predictions = tsModel.predict("1996-11-01 22:00:00","1996-11-03 04:00:00")
#print(predictions)
predList = list(predictions)


import pymysql
db = pymysql.connect("localhost","root","","IICDC")

cursor = db.cursor()



sql = """INSERT INTO predictedhumidity (hour1,hour2,hour3,hour4,hour5,hour6,hour7,hour8,hour9,hour10,hour11,hour12,hour13,hour14,hour15,hour16,hour17,hour18,hour19,hour20,hour21,hour22,hour23,hour24)VALUES (predList[0],predList[1],predList[2],predList[3],predList[4],predList[5],predList[6],predList[7],predList[8],predList[9],predList[10],predList[11],predList[12],predList[13],predList[14],predList[15],predList[16],predList[17],predList[18],predList[19],predList[20],predList[21],predList[22],predList[23]);"""





print()
print(sql)
print()
#cursor.execute("SELECT VERSION()")
cursor.execute(sql)

# data = cursor.fetchone()
# print ("Database version : %s " % data)


db.close()



"""
predictionStr = str(predictions)

f = open("myfile.txt", "w")

f.write(predictionStr)
f.close()
"""