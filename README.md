# Laravel Odometer Easy
Pacote para utilização do plugin js [Odometer](https://github.hubspot.com/odometer/) de forma easy.


### Instalação

> composer require gsferro/odometer-easy

> php artisan vendor:publish --provider="Gsferro\OdometerEasy\Providers\OdometerEasyServiceProvider"

### Uso

```php
<x-odometer-easy :value="$valor" />
```
```php
<x-odometer-easy
    value="1000"
    # key é opcional
    key=<id|opcional>
    # format default é money BR (1.000,00)
    format="<veja as opções na documentação oficial>" 
/>
```

### Exemplo Plugin Puro

> http://jsfiddle.net/adamschwartz/rx6BQ/

### Requisitos

> Jquery

### Link Docs Odometer:

> https://github.hubspot.com/odometer/

### Observações Gerais

1. Como default esta a animation count para poder utilizar tantas quantas vezes quiser na tela, sem ele, ocorria delay ao utilizar em +10 lugares na tela.  
1. Para aumentar a fonte, encapsule o componente e utilize classes para para aumentar a fonte 
1. Ainda não é possivel atualizar dinamicamente o valor após o loading do componente, caso queira atualizar na tela, será necessário executar manualmente a instancia:
```html
<span id="odo">0</span>
```
```js
var odo = new Odometer( $('#odo') );
value=100;
odo.update( value );
value+=100;
odo.update( value );
``` 

### TODO

1. Alterar dinamicamente o valor apos instancia do plugin
1. Criar outros componentes para usar o thema de texto
1. Criar formatação BRs (CPF / CNPJ / CEP)
```php 
<x-odometer-easy value="123.456.789-10" format="(.ddd)-dd" animation="false" />
```

### License

- MIT License