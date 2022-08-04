# LoginPHP

Proyecto de proceso simple de autenticación en página Web con PHP.

## LoginSSL

Se hace uso de funciones criptográficas para almacenar el hash de la contraseña (Hash+Salt) de forma segura.

```php
/*
Developed by wmfrancia | github.com/wmfrancia
Encryptor, is a simple class to securely and easily implement the crypt function. 
It allows for easy storing of salts and hash to your database all while keeping each completely unique to the user.
Currently Supports SHA256 and Blowfish 
*/
class Encryptor{
    
    public $hash;  //Completed Hash to store in DB for user
    public $salt; //Unique SALT to store in DB for user
```

Creditos de la clase Encryptor: @wmfrancia

## Loginunsec

Conexión simple y registro de usuarios sin emplear métodos criptográficos para almacenamiento de claves en claro (no recomendado).

## LoginPHP

Prueba de concepto final.
