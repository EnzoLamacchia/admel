<p align="center"><img src="https://github.com/EnzoLamacchia/dedir/blob/main/devEL-logo.png?raw=true" width="100" alt="Logo"></p>

# AdmEL 
## Gestione Utenti

[![Platform](https://img.shields.io/static/v1?label=Platform&message=Docker&color=2496ED&style=for-the-badge&logo=Docker)](https://laravel.com)
[![Framework](https://img.shields.io/static/v1?label=Framework&message=Laravel%209.x&color=red&style=for-the-badge&logo=laravel)](https://laravel.com)
[![Framework](https://img.shields.io/static/v1?label=PHP%20Version&message=8.0&color=777BB4&style=for-the-badge&logo=php)](https://php.net)
[![MIT License](https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge)](https://choosealicense.com/licenses/mit/)  
AdmEL è un'App dockerizzata costruita su un framework Laravel v.9.0 e PHP 8.0, finalizzata essenzialmente alla gestione di utenti, ruoli e permessi.  
Consente inoltre di gestire vocabolari, messaggi e documenti da utilizzare in uno dei package costruiti ad hoc per esso, ad esempio:
- elamacchia/dedir


## Dipendenze
Oltre alle dipendenze di Laravel 9.x, AdmEL utilizza:

**barryvdh/laravel-dompdf: ^2.0**  
**laravel/jetstream: ^2.14**  
**maatwebsite/excel: ^3.1**  
**spatie/laravel-permission: ^5.7**

## Installazione
Clona il repository nella cartella **"code"** di Docker:
```sh
cd code
git clone https://github.com/EnzoLamacchia/admel.git newdir
```
(laddove **newdir** è il nome della directory che vogliamo assegnare al nostro progetto AdmEL)  
Entriamo nella cartella newdir ed copiamo il file **.env.admel** nel nuovo file **.env**:  

```sh
cd newdir
cp .env.admel .env
```
Aprire il file **.env** in modifica con un editor e settare/modificare i seguenti valori secondo le preferenze:
```sh
APP_NAME=NewApp --Change --
APP_URL=http://new.test --Change --

APP_PORT=58084 --Change --
FORWARD_DB_PORT=53714  --Change --
FORWARD_REDIS_PORT=58774  --Change --

DB_DATABASE=newdb  --Change --
DB_USERNAME=root --Change --
DB_PASSWORD=password --Change --
```
In caso di coesistenza dell'app AdmEL con altre app docker, verificare i conflitti nel file **docker-compose.yml**:
```sh
 - '${VITE_PORT:-5173}:${VITE_PORT:-5173}'  -- (riga 15) settare una porta libera--  
 
 adminer:
      ports:
            - 8085:8080 -- (riga 66) settare una porta libera 
                            p.es. 8084 opp. 8083 -- 
```
Tornati su newdir lanciare il container ed accedere in bash alla shell:
```sh
docker compose up -d
docker exec -it newdir-admel-1 bash 
```
Nella shell installare le dipendenze dell'applicazione:
```sh
> composer install
```
Terminata l'installazione delle dipendenze, il container del db potrebeb stopparsi.  
In tal caso occorre uscire dalla shell, riavviare il container e rientrare nella shell:
Rientrati nella shell eseguire alcuni comandi artisan, altri relativi al Node Package Manager ed altri ancora per settare i diritti di scrittura sualcune directory/file di Laravel:
```sh
> exit     --(dalla shell)--
docker compose down
docker compose up -d
docker exec -it newdir-admel-1 bash 
> php artisan migrate --seed
> php artisan key:generate
> php artisan storage:link
> npm install
> npm run build
> chmod -R ug+rwx storage bootstrap/cache
> chown 1000:sail storage/logs/laravel.log
```
Per finire, se esiste un proxy manager aprire le porte del nuovo sito nomeapp.test.  
E se si lavora con Docker Desktop su una macchina windows , settare il dns locale  
(C:\Windows\System32\drivers\etc\hosts)  
per il sito newapp.test sull'indirizzo 127.0.0.1  
Nel caso in cui nel browser digitando newapp.test si ottenesse un messaggio di errore 502-bad gateway, riavviare il container.

## Utilizzo  
L'accesso all'interfaccia di gestione, in fase iniziale, è possibile attraverso un utente preconfigurato con ruolo di super-administrator.
Le credenziali sono:
```sh
id: superadmin@example.com
pw: password
```
E' possibile crare nuovi utenti, ruoli e permessi.  
E' possibile assegnare a ciascun ruolo dei permessi.  
E' possibile assegnare a ciuascun utente ruoli, permessi singoli o permessi via ruolo.  

