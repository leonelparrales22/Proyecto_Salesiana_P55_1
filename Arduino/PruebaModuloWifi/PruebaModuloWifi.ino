#include <ESP8266WiFi.h>
#include <ESP8266WebServer.h>

ESP8266WebServer server(80);

const char* ssid="Claro_CHIMBA"; 
const char* password="5108138419655";

String Website;

void WebsiteContent(){
  Website="<html>Hello</html>";
  server.send(200,"text/html",Website);
}

void setup() {
  Serial.begin(9600);
  WiFi.begin(ssid,password);
  while(WiFi.status()!=WL_CONNECTED)delay(500);
  WiFi.mode(WIFI_STA);
  Serial.print(WiFi.localIP());
  Serial.print("Hola");
  server.on("/",WebsiteContent);
  server.begin();
}

void loop() {
  server.handleClient();
}
