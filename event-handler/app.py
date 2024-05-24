import datetime
from flask import Flask, request
import mysql.connector


app = Flask(__name__)


@app.route("/leadupdate", methods=["POST", "GET"] )
def process_lead_update():

    data = request.form
    lead_id = data["data[FIELDS][ID]"]

    cnx = mysql.connector.connect(user='root', password='example', host='0.0.0.0', database='personal')

    cursor = cnx.cursor()

    query = f"select status from leads  WHERE id_lead  = '{lead_id}'"

    cursor.execute(query)

    result = cursor.fetchall()

    file = open("otus.txt", "w")

    file.write(result)

    file.close()

    cursor.close()

    cnx.close()

    return 'Hello World'




if __name__ == "__main__":
	app.run(host="0.0.0.0", port=5000, debug=True)

