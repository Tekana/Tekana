import time
import sys
import Adafruit_DHT
from gpiozero import CPUTemperature
while True:
    h, t = Adafruit_DHT.read_retry(11, 12)
    cpu = CPUTemperature()
    if h is not None and t is not None:
        f = open("../../var/www/html/temp.html", "w")
        f.write('<!DOCTYPE html><head><meta http-equiv="refresh" content="60"></head><html><body><font size="12"><h2 style="color:#1E90FF">Humidity = ')
        f.close()
        f = open("../../var/www/html/temp.html", "a")
        H = str(h)
        T = str(t)
        ct = str(cpu.temperature)
        f.write(H)
        f.write("% </h2>")
        if t<30: f.write('<h2 style="color:#1E90FF">')
        if t>=30 and t<35: f.write('<h2 style="color:orange">')
        if t>=35: f.write('<h2 style="color:Red">')
        f.write("Temp = ")
        f.write(T)
        f.write("&degC<br></h2>")
        if cpu.temperature >= 65: f.write('<h2 style="color:Red">')
        else: f.write('<h2 style="color:#1E90FF">')
        f.write("CPU temp = ")
        f.write(ct)
        f.write("&degC</h2></font></body></html>")
        f.close()
        time.sleep(60)
