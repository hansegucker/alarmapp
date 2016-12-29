import serial 
port = serial.Serial("COM7", 9600, timeout = None); 
port.open(); 

while true: 

    daten = port.readline(); 

    print (daten);
