  #include <dht.h>
#include <SoftwareSerial.h>
SoftwareSerial BT1(19, 18);
dht DHT;
#define DHT11_PIN 8
int input;
const int sensorPin= A0;
char x;
String manda;

void setup(){
  Serial2.begin(115200);
   pinMode(10, OUTPUT);// Declaramos que utilizaremos el pin 13 como salia
   pinMode(11,OUTPUT);
   Serial.begin(9600);
  digitalWrite(10, HIGH);
  digitalWrite(11, HIGH);
  pinMode(sensorPin,OUTPUT);
}

void loop(){
DHT.read11(DHT11_PIN);
 byte value = analogRead(sensorPin);
  //temperatura
  Serial.print("Temperatura= ");
  Serial.print(DHT.temperature);
  Serial.println(" C");
  int temp=DHT.temperature;
  
  Serial.print("humedad= ");
  Serial.print(DHT.humidity);
  Serial.println(" %");
  delay(2000);
  int hume=DHT.humidity;
  String men;
  
  men+="T";
  men+=temp;
  men+="H";
  men+=hume;
  Serial2.print(String('T')+temp+String('H')+hume+String('O')+String('\n'));
  Serial.println(String('T')+temp+String('H')+hume+String('\n'));
  //Serial2.println(men);
 if(temp >= 21){
digitalWrite(10, HIGH); //Se apaga foco
    digitalWrite(11, HIGH);//se prende ventilador
  }
  
  if(temp <= 20){
digitalWrite(10, LOW); //Se prende foco
   digitalWrite(11, LOW); //se apaga ventilador
  }


}
