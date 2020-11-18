![Build Status](https://travis-ci.org/skyronic/laravel-file-generator.svg?branch=master)

# Estimtrack CRUD file generator 

Package de laravel per generar els CRUDs



## Quick Start

**Step 1**: Afegir el package al composer.json a l'apartat require


```bash
 "estimtrack-dev/laravel-file-generator": "dev-master",
```
**Step 2**: Afegir el repo al composer.json

```bash
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/estimtrack-dev/laravel-file-generator/"
        }
    ]

```

**Step 3**: Instalar el mòdul

```bash
$ php -d memory_limit=-1 $(which composer) update
```

**Step 4**: Publish the "boilerplates" - an included set of useful boilerplates like PHP Classes, Vue Components, etc.

```bash
$ php artisan vendor:publish --tag='boilerplates'
```

**Step 5**: You can list all the installed boilerplates

```bash
$ php artisan generate:list

+---------------+------------------------------+
| Type          | Name                         |
+---------------+------------------------------+
| css           | CSS File                     |
| js            | JavaScript File              |
| php:class     | PHP Class in 'app' Directory |
| php:trait     | PHP Trait in 'app' Directory |
| scope         | Eloquent Global Scope        |
| scss          | SCSS File                    |
| view          | Blade Template               |
| vue:component | Vue Component as a .vue file |
| vue:store     | Vuex Store                   |
+---------------+------------------------------+

Use `artisan generate <type>` to create a new file!
```
