#include <Dhcp.h>
#include <Dns.h>
#include <Ethernet.h>
#include <EthernetClient.h>
#include <EthernetServer.h>
#include <EthernetUdp.h>
#include <SPI.h>
#include <RFID.h>

RFID rfid(6, 9); 

// Endereço MAC da Shield
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED }; 

// Roteador
IPAddress ip(192,168,0,102); 

// Servidor
byte servidor[] = {192, 168, 0, 101 };  

EthernetClient client;

//Variaveis
int serNum0;
int serNum1;
int serNum2;
int serNum3;
int serNum4;

void setup(){ 
  Serial.begin(9600);//Inicio da serial
  SPI.begin(); //Inicio da comunicação SPI
  rfid.init();
  Ethernet.begin(mac, ip);// Inicializa o Server com o IP e Mac atribuido acima
  pinMode(6,OUTPUT); //Saída
  pinMode(10,OUTPUT); //Saída
}
 
void loop(){ 
  
  digitalWrite(6,LOW);
  if (rfid.isCard()) {
    if (rfid.readCardSerial()) {
      if (rfid.serNum[0] != serNum0
          && rfid.serNum[1] != serNum1
          && rfid.serNum[2] != serNum2
          && rfid.serNum[3] != serNum3
          && rfid.serNum[4] != serNum4
         ) {
          /* Quando for reconhecido um novo cartao. */
          Serial.println(" ");
          Serial.println("Cartao reconhecido");
          serNum0 = rfid.serNum[0];
          serNum1 = rfid.serNum[1];
          serNum2 = rfid.serNum[2];
          serNum3 = rfid.serNum[3];
          serNum4 = rfid.serNum[4];
          
          Serial.print("Hexadecimal: ");
          Serial.print(rfid.serNum[0],HEX);
          Serial.print(", ");
          Serial.print(rfid.serNum[1],HEX);
          Serial.print(", ");
          Serial.print(rfid.serNum[2],HEX);
          Serial.print(", ");
          Serial.print(rfid.serNum[3],HEX);
          Serial.print(", ");
          Serial.print(rfid.serNum[4],HEX);
          Serial.println(" ");
       } else {
         /* Se o cartao possui o mesmo ID, imprime pontos na tela */
         Serial.print(".");
       }
       rfid.halt(); 
       digitalWrite(6,HIGH);
       digitalWrite(10,LOW);
       int setor = 0;
       char lixo[20];
       if(client.connect(servidor,80)){
       Serial.print("Conectado");
       client.print("GET /beam/salvardadoscadastro.php?");
      client.print("tag=");
       client.print(rfid.serNum[0], HEX);
      client.print("+");
      client.print(rfid.serNum[1], HEX);
      client.print("+");
      client.print(rfid.serNum[2], HEX);
      client.print("+");
      client.print(rfid.serNum[3], HEX);
      client.print("+");
      client.print(rfid.serNum[4], HEX);
      client.print("&setor=");
      client.print(setor);
      client.print("&setor1=");
      client.print(lixo);
      

    Serial.print(rfid.serNum[0] + rfid.serNum[1] + rfid.serNum[2] + rfid.serNum[3] + rfid.serNum[4], HEX);
    Serial.print(setor);    
       }
       
    client.println("Connection: close");
    client.println("");
// Espera um tempo para o navegador receber os dados    
    delay(3);
// Finaliza a conexão
    client.stop(); 
    digitalWrite(10,HIGH);
    } 
  } 
}


  

  


