# Francesca-2022

PDO

https://www.html.it/pag/64425/connessione-a-mysql-con-pdo/

## mysql primary key  con auto increment


[https://www.w3schools.com/sql/sql_autoincrement.asp](https://www.w3schools.com/sql/sql_autoincrement.asp)


select
https://www.w3schools.com/sql/sql_select.asp


-----

[https://www.w3schools.com/sql/default.asp](https://www.w3schools.com/sql/default.asp)

MYSQL --> SQL (linguaggio comune per interrogare i database di tipo relazionale)

MS-SQL
ORACLE

CLIENT ---> SERVER SQL

Cliente (Entity)
- nome (attributo)
- citta 
- regione

Clienti
marco   torino  piemonte
gianni  torino  piemonte
gianni  asti    piemonte
luigi   roma    lazio

Clienti
marco   1  piemonte
gianni  1  piemonte
gianni  2  piemonte
luigi   2    lazio

Negozio
- ragione_sociale
- citta
- regione
- coordinate
- popolazione
  
Negozio
da marco   torino  piemonte  T7 100000
da gianni  torino  piemonte  T7 100000
da gianni  asti    piemonte  A8 5000
da maria   asti    piemonte  A8 5000
da luigi   roma    lazio     R1 200000

Negozio
- ragione_sociale
- citta_id (chiave esterna)
<!-- - citta -->
<!-- - regione -->
<!-- - coordinate -->
<!-- - popolazione -->



Negozi     
ragione sociale citta_id regione_id
da marco        1        4
da gianni       1        4
da gianni       2        4
da maria        2        4
da luigi        3        7


Città
- id (chiave primaria univoca)
- nome
- coordinate

Città
id  nome     coord popolazione
1   Torino   T7    1000000
2   Asti     A8    5000
3   Roma     R1    200000


Regioni
- regione_id
- nome
- popolazione

Regioni
regione_id  nome      popolazione
4           piemonte  19349280 
7           lazio     59349280 
  

---

## filesystem



---


[w3 school articolo Array Associativi](https://www.w3schools.com/php/php_arrays_associative.asp)


## Metodi HTTP

- [HTTP/Methods](https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods) 

### Metodo GET

Query string

 - **?** inizio della query string 
 - **&** separa le coppie key=value
   
```php

?comune=torino&colore=rosso

array ( 
        "comune" => "torino" ,
        "colore" => "rosso" 
        )
```
## layout BS

[Esempi vari](https://getbootstrap.com/docs/5.0/examples/)
[Dashboard](https://getbootstrap.com/docs/5.0/examples/dashboard/)

Installazione bootstrap

[CDN](https://getbootstrap.com/docs/5.1/getting-started/download/#cdn-via-jsdelivr)

Form di esempio

[Form utente](https://getbootstrap.com/docs/5.0/forms/layout/#gutters)


### Per inviare i dati con un form 

- [ ] Compilare action
- [ ] Compilare metodo **method** (metodo predefinito è GET)
- [ ] assegnare un attributo **name** per ogni controllo (**input**,**textarea**,**select**)


Input HTML 5
- [controlli standard](https://www.w3schools.com/html/html_form_input_types.asp)

[JQueryUI](https://jqueryui.com/) o cercare datepicker bootsrap 

## Esercizi PHP

- [Esercizietti in php](https://www.learn-php.org/)


