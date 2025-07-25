<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Instalación de un Proyecto en Laravel

Este documento proporciona una guía paso a paso para instalar un proyecto en Laravel.

## Requisitos Previos

Antes de comenzar, asegúrate de tener instalados los siguientes requisitos:

- **PHP** (versión 8.0 o superior)
- **Composer** (gestor de dependencias para PHP)
- **Node.js y NPM** (para manejar las dependencias de JavaScript)
- **Base de datos** (MySQL)

## Pasos para la Instalación

### 1. Clonar el Repositorio

Clona el repositorio:

```bash
git clone https://github.com/K4FK4-89P13/Blog.git
```

### 2. Navegar al Directorio del Proyecto

Accede al directorio del proyecto:

```bash
cd blog
```

### 3. Instalar Dependencias de PHP

Instala las dependencias del proyecto utilizando Composer:

```bash
composer install
```

### 4. Configurar el Archivo `.env`

Copia el archivo de ejemplo `.env.example` a `.env`:

```bash
cp .env.example .env
```

Luego, edita el archivo `.env` para configurar la conexión a la base de datos y otras variables de entorno.

### 5. Generar la Clave de Aplicación

Genera la clave de aplicación de Laravel:

```bash
php artisan key:generate
```

### 6. Ejecutar Migraciones

Ejecuta las migraciones y si es necesario, siembra la base de datos:

```bash
php artisan migrate --seed
```

### 7. Instalar Dependencias de Node.js

Instala las dependencias de Node.js necesarias para Livewire:

```bash
npm install
```

### 8. Compilar los Activos

Compila los activos utilizando Laravel Mix:

```bash
npm run dev
```

### 9. Iniciar el Servidor de Desarrollo

Inicia el servidor de desarrollo de Laravel:

```bash
php artisan serve
```

Ahora puedes acceder a la aplicación en `http://127.0.0.1:8000`.

### Notas Adicionales
- Asegúrate de tener Node.js y NPM instalados en tu sistema antes de ejecutar `npm install`.
- Si deseas compilar los activos para producción, puedes utilizar `npm run production`.
