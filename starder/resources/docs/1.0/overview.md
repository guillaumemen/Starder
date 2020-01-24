- *: Packages Laravel

# Starder

---

## Starder ?

Starder est un **site de rencontre** pour les fans de la sage de films **Star Wars**.

## Comment créer un projet similaire

### Prérequis

Pour faire un projet laravel il faut:

    - PHP 5.4 (ou supérieur)
    - Apache
    - Composer
    - Laravel
    - MariaDB / MySQL
    - Illuminate*
    - Intervention*
    
> *Très bien mais comment j'installe tout ça moi ?*

#### PHP - Apache

Debian/Ubuntu/Mint:
```bash
sudo apt-get install apache2 php php-libapache
```

RHE/CentOS/Fedora:
```bash
sudo yum install apache2 php php-libapache
```

Manjaro/Arch:
```bash
sudo pacman -S apache2 php php-libapache
```


#### Composer

```bash
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
```

#### Laravel

```bash
composer global require laravel/installer
```

#### Illuminate

```bash
composer require laravel/ui
```

#### Intervention
```bash
php composer require intervention/image
```

Vous l'aurez compris, composer permet d'installer beaucoup de choses comme des
packages laravel.

Une fois que tout cela est bon je vous conseille de lire la [documentation officielle de Laravel](https://laravel.com/docs/6.x)
