import datetime
import json
from flask import Flask, request
import mysql.connector


try:

    conn = mysql.connector.connect(user='root', password='example', host='db', port='3306', database='personal')

    print("Connect to bd!")

except:

    print("Erorrs bd")




# conn = mysql.connector.connect(user='root', password='example', host='db', port='3306', database='personal')
#
# cursor = conn.cursor()

# cursor.execute("SELECT * FROM leads WHERE id_lead = '18';")
#
# id_lead = cursor.fetchone()
#
# print(id_lead)

# cursor.close()
#
# conn.close()

# функция записывает данные вебхука
def any_saver1(data):
    with open('log.txt', 'a') as f:
        f.write(f"{str(data)}\r")

app = Flask(__name__)

@app.route("/leadupdate", methods=["POST"])
def process_lead_update():

#  получение данных от битрикса по post и преобразование в словарь и запись в файл в функции any_saver
#     data = request.form.to_dict()
#     any_saver(data)

    data = request.form

    lead_id = data["data[FIELDS][ID]"]

# записывает в файл id лида

#     with open('id.txt', 'w') as f:
#             f.write(lead_id)

#     cursor = conn.cursor()
#
#     res = cursor.execute(f"SELECT status FROM leads WHERE id_lead = '{lead_id}';")
#
#     row = res.fetchone()
#
#     any_saver(lead_id)

#     cursor.close()
#
#     conn.close()



    return "OK"




if __name__ == "__main__":
	app.run(host="0.0.0.0", port=5000, debug=True)

