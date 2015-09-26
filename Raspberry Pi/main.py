import urllib2
import serial
import time
while 1:
	response = urllib2.urlopen('http://192.168.2.149/rpi/led/readmode.php')
	html = response.read()
	ser = serial.Serial('/dev/ttyACM0', 9600)
	ser.write(html)
	print(html)
	time.sleep(1)