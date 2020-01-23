#include <ESP8266WiFi.h>
#include <WiFiClient.h> 
#include <SoftwareSerial.h>
SoftwareSerial n(D7,D8);//Rx y Tx
int i;
int tem,hum,cont;
String reci,mandar,uno,tem2,hum2;

//-------------------VARIABLES GLOBALES--------------------------
int contconexion = 0;

const char *ssid = "Proyecto";
const char *password = "123456789";

unsigned long previousMillis = 0;

char host[48];
String strhost = "192.168.0.106";
String strurl = "/p1/enviardatos.php";
String chipid = "";

//-------Función para Enviar Datos a la Base de Datos SQL--------

String enviardatos(String datos) {
  String linea = "error";
  WiFiClient client;
  strhost.toCharArray(host, 49);
  
  if (!client.connect(host, 80)) {
    Serial.println("Fallo de conexión…");
    return linea;
  }

  client.print(String("POST ") + strurl + " HTTP/1.1" + "\r\n" + 
               "Host: " + strhost + "\r\n" +
               "Accept: */*" + "*\r\n" +
               "Content-Length: " + datos.length() + "\r\n" +
               "Content-Type: application/x-www-form-urlencoded" + "\r\n" +
               "\r\n" + datos);           
  delay(10);             
  
  Serial.print("Enviando datos a SQL...");
  
  unsigned long timeout = millis();
  while (client.available() == 0) {
    if (millis() - timeout > 5000) {
      Serial.println("Cliente fuera de tiempo!");
      client.stop();
      return linea;
    }
  }
  // Lee todas las líneas que recibe del servidor y las imprime por el terminal serial
  while(client.available()){
    linea = client.readStringUntil('\r');
  }  
  Serial.println(linea);
  return linea;
}

//-------------------------------------------------------------------------

void setup() {

  // Inicia Serial
  n.begin(115200);
  Serial.begin(115200);
  Serial.println("");

  Serial.print("chipId: "); 
  chipid = String(ESP.getChipId());
  Serial.println(chipid); 

  // Conexión WIFI
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED and contconexion <50) { //Cuenta hasta 50 si no se puede conectar entonces cancela
    ++contconexion;
    delay(500);
    Serial.print(".");
  }
  if (contconexion <50) {
      //para usar con ip fija
      IPAddress ip(192,168,0,132); 
      IPAddress gateway(192,168,0,1); 
      IPAddress subnet(255,255,255,0); 
      WiFi.config(ip, gateway, subnet); 
      
      Serial.println("");
  }
  else { 
      Serial.println("");
      Serial.println("Error de conexion");
  }
}

//--------------------------LOOP--------------------------------
void loop() {

if (n.available()){
  delay(2000);
  reci =n.readStringUntil('\n');
  for(i=0;i<reci.length();i++){
   reci.charAt(i);//se guarda en un vector 
  
  Serial.print(reci.charAt(i)+"\n");
  if(reci.charAt(i)=='T'){
    tem=i;
  }else if(reci.charAt(i)=='H'){
    hum=i;
  }else if(reci.charAt(i)=='O'){
    cont=i;
  }
  }
  delay(2000);
  tem2=reci.substring(tem+1,hum);
  Serial.println("Temperatura:"+tem2);
  
  hum2=reci.substring(hum+1,cont);
  Serial.println("Humedad:"+hum2);
 
  
}
//mandar+=tem2;
//mandar+=hum2;
//mandar+='\n';
//Serial.println(mandar);
delay(2000);

 unsigned long currentMillis = millis();
  if (currentMillis - previousMillis >= 10000) { //envia la temperatura cada 10 segundos
    previousMillis = currentMillis;
    Serial.println(tem2);
    Serial.println(hum2);
    enviardatos("chipid=" + chipid + "&temperatura=" + tem2+ "&humedad=" + hum2);
    
  }


 
}
