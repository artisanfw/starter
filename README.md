# Artisan Starter
Any Artisan project from scratch starts here!

## Install
Remember: This project is currently in **alpha**.

### Using Artisan Cli
ArtisanFW strongly recommends install [Artisan Cli](https://github.com/artisanfw/cli)
```bash
artisan new project [your_project_folder] --dev
```
You can omit `your_project_folder` to install inside your current path.
`--dev` is mandatory because Artisan Starter is in pre-release version.

### Using Composer
```bash
composer create-project artisanfw/artisan my_project_dir dev-main --repository='{"type": "vcs", "url": "https://github.com/artisanfw/starter"}'
```
`dev-main --repository=...` is mandatory because Artisan Starter is in pre-release version.

## Setup

### .config.php
1. Rename the config_example to a final configuration name, like `.config.php`
```bash
mv config_example.php .config.php
```

### Bootstrap
Review the Bootstrap configuration if you need to modify anything.
You can find more details about bootstraps and other API-specific behaviors in the [artisanfw/api](https://github.com/artisanfw/api) repository.

### Configure your web server (Apache2, Nginx, etc).
A default `.htaccess` file is provided for convenience, but it is strongly recommended to review and properly configure your web server settings.
