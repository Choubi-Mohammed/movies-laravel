# Movies Laravel

## Description

Le projet **Movies Laravel** est une application de gestion de films construite avec le framework Laravel. Il permet aux utilisateurs d'ajouter, de modifier, de supprimer et d'afficher des films, ainsi que de gérer les catégories, les notes et les images de couverture des films.

## Fonctionnalités

- **CRUD des films**: Ajouter, modifier, supprimer et afficher les films.
- **Télécharger des images de couverture** pour chaque film.
- **Filtrer par catégorie** pour afficher des films spécifiques.
- **Notation** des films sur une échelle de 0 à 10.
- Interface utilisateur simple avec formulaire de soumission pour les films.

## Prérequis

- PHP >= 7.4
- Composer
- Laravel >= 8.x
- MySQL ou tout autre SGBD compatible avec Laravel

## Installation

### 1. Clonez ce dépôt

Clonez ce projet sur votre machine locale en utilisant Git.

```bash
git clone https://github.com/Choubi-Mohammed/movies-laravel.git
```

### 2. Installez les dépendances

Accédez au dossier du projet et installez les dépendances via Composer.

```bash
cd movies-laravel
composer install
```

### 3. Configurez l'environnement

Copiez le fichier `.env.example` et renommez-le en `.env`. Configurez ensuite les variables d'environnement, notamment la connexion à votre base de données.

```bash
cp .env.example .env
```

### 4. Générez la clé d'application

Générez une clé d'application Laravel.

```bash
php artisan key:generate
```

### 5. Exécutez les migrations

Exécutez les migrations pour créer les tables nécessaires dans la base de données.

```bash
php artisan migrate
```

### 6. Créez un lien symbolique pour les images

Afin de rendre les images téléchargées accessibles, créez un lien symbolique vers le répertoire `storage`.

```bash
php artisan storage:link
```

### 7. Lancez le serveur

Lancez le serveur de développement intégré de Laravel.

```bash
php artisan serve
```

L'application sera accessible à l'adresse suivante : `http://127.0.0.1:8000`.

## Utilisation

Une fois l'application lancée, vous pouvez :
- Ajouter de nouveaux films.
- Modifier les films existants.
- Supprimer des films.
- Filtrer les films par catégorie.
- Noter les films.

## Technologies utilisées

- **Laravel 8.x**: Framework PHP
- **PHP 7.4 ou supérieur**
- **MySQL**: Base de données
- **Blade**: Moteur de templates Laravel
- **CSS**: Pour la mise en page de base (vous pouvez ajouter un framework comme Tailwind ou Bootstrap)

## Contribuer

Les contributions sont les bienvenues ! Si vous souhaitez contribuer, veuillez suivre ces étapes :

1. Fork ce dépôt.
2. Créez une branche pour votre fonctionnalité (`git checkout -b feature-nom`).
3. Commitez vos modifications (`git commit -am 'Add new feature'`).
4. Poussez votre branche (`git push origin feature-nom`).
5. Ouvrez une Pull Request.

## Auteurs

- **Mohammed Choubi** - [Choubi-Mohammed](https://github.com/Choubi-Mohammed)
