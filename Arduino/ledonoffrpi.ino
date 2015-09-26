int ledPin = 13;   // select the pin for the LED
int val = 0;       // variable to store the data from the serial port

void setup() {
 pinMode(ledPin,OUTPUT);    // declare the LED's pin as output
 Serial.begin(9600);        // connect to the serial port
}

void loop () {
 if(Serial.available())
 {
  val = Serial.read();      // read the serial port
Serial.println(val);
 // if the stored value is a single-digit number, blink the LED that number
 if (val == '0') {
    digitalWrite(ledPin, LOW);
   }
   else{
     digitalWrite(ledPin, HIGH);
   }
   //Serial.println();
}
}
