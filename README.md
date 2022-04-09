# Francesca-2022


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

#### Esercizi PHP

- [Esercizi online di php](https://www.learn-php.org/)


### Le RegEx

- [Breve Guida sulle espressioni regolari](https://www.marioconcina.it/blog/come-fare/guida-alle-espressioni-regolari-regex.html)


### Browsersync

- [Video](https://www.youtube.com/watch?v=cj29XdGzNt8) 
- [Come installare browser sync](https://browsersync.io/#install)

```bash
npm install -g browser-sync
```

```bash
browser-sync start --server --files "css/*.css"
browser-sync start --proxy "francesca.test" --files "*/*.php"
```