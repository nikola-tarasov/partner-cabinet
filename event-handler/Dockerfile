FROM python:3.8

WORKDIR /usr/src/app


RUN pip install mysql-connector-python

RUN pip install Flask

COPY . .

CMD ["python3", "-u", "app.py"]











