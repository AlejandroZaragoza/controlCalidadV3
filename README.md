# Control de calidad
<p align="center">
  <img src="/public/img/SmartDotLogo.png" />
</p>


## Disclaimer
Este proyecto es creado con fines educativos y bajo ninguna circunstancia debe llevarse a un ambiente de producción.
> *This project is created for educational purposes and under no circumstances should it be taken into a production environment.*

------------
## Quote


 > *Cuando este proyecto nacio solo yo y dios sabiamos como funcionaba, ahora solo dios lo sabe...*
 

------------

## Prerequisites
Este proyecto esta construido a base de [Laravel Sail](https://laravel.com/docs/9.x/sail "Laravel Sail"), debido a que la intencion de este proyecto es educativa solo se muestran los pasos para construir el ambiente local.

### MacOs
-[PhP 8.1](https://formulae.brew.sh/formula/php "PhP 8.1")<!-- pagebreak -->
-[Composer](https://getcomposer.org/ "Composer")<!-- pagebreak -->
-[Docker Desktop](https://docs.docker.com/desktop/mac/install/ "Docker Desktop")<!-- pagebreak -->
-[Node](https://formulae.brew.sh/formula/node#default "Node")<!-- pagebreak -->

### Linux
-[PhP 8.1](https://www.php.net/downloads.php#gpg-8.0 "PhP 8.1")<!-- pagebreak -->
-[Composer](https://getcomposer.org/ "Composer")<!-- pagebreak -->
-[Docker Compose](https://docs.docker.com/compose/install/ "Docker Desktop")<!-- pagebreak -->
-[Node](https://snapcraft.io/node "Node")<!-- pagebreak -->

###Windows
-[Composer](https://getcomposer.org/ "Composer")<!-- pagebreak -->
-[Docker Desktop](https://www.docker.com/products/docker-desktop/ "Docker Desktop")<!-- pagebreak -->
-[WSL](https://docs.microsoft.com/en-us/windows/wsl/install "WSL")<!-- pagebreak -->
-[Windows Terminal](https://www.microsoft.com/en-us/p/windows-terminal/9n0dx20hk701?rtc=1&activetab=pivot:overviewtab "Windows Terminal")<!-- pagebreak -->
-[Node](https://nodejs.org/es/download/ "Node")<!-- pagebreak -->

##Instalacion

1.- Abrir el terminal y clonar el repositorio GitHub

```
$ git clone git@github.com:AlejandroZaragoza/controlCalidadV3.git
```
2.- Copiar el archivo de entorno .env.example a .env

```
$ cd controlCalidadV3/
$ cp .env.example .env
```
3.- Instalar dependencias, configurar librerias y generar llave de aplicacion

```
$ composer install
$ npm install
$ php artisan key:generate
```
3.1.- Usuarios de Windows y MacOs deben iniciar docker desktop antes del siguiente paso.

4.- Iniciar los servicios

```
$ ./vendor/bin/sail up
```

Una vez inicializados todos los contenedores Docker la aplicacion estara disponible en http://localhost.

Importar la base de datos y los usuarios por defecto.

```
$ ./vendor/bin/sail artisan migrate:fresh --seed
```

##Arquitectura

##Gato ninja

<p align="center">
  <img src="/public/img/ninjaCat.jpg" />
</p>

##Powered by 
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
