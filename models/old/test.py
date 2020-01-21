import pymysql
db = pymysql.connect("localhost","root","","IICDC")

cursor = db.cursor()



sql = """INSERT INTO test (name,salary)VALUES ('akshay',3000000);"""

d9a8-sk8q-pfs0-2tq8



print()
print(sql)
print()
#cursor.execute("SELECT VERSION()")
cursor.execute(sql)
db.commit()
# data = cursor.fetchone()
# print ("Database version : %s " % data)


db.close()

