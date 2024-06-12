import mysql.connector




try:

    conn = mysql.connector.connect(user='root', password='example', host='db', port='3306', database='personal')

    print("Connect to bd!")

except:

    print("Erorrs bd")




