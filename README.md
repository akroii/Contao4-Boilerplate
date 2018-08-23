# Contao4-Boilerplate
Sceleton for files and folders.

## What it does:
### improves mandatory form fields in template
By default form templates was beeing marked with a star. Now, only fields which are not mandatory beein marked. This improves UX. It is not recommended to mark every single form field with a star to inform users which field is necessary.


I will add more features in future...

# Anleitung Umzug / Migration einer Contao 4.x Installation

1. Datenbank exportieren
2. exportierte Datenbank auf Zielserver importieren
3. Frische `contao-manager.phar.php` herunterladen und in das `/web` - Verzeichnis des Servers legen
4. `contao-manager.phar.php` frisch herunterladen über contao.org im `/web` Verzeichnis aufrufen
5. `parameters.yml`, `localconfig.php`, `langconfig.php`, `dcaconfig.php`auf den Server übertragen bei `[root]/system/modules/config` hochladen und Datenbankinformationen des Zielservers anpassen
6. Evtl. Contao Erweiterungen 3.x Erweiterungen in das `[root]/system/modules` übertragen
7. `files`, `templates`-Verzeichnis auf den Server übertragen
8. Frische `composer.phar` per ssh herunterladen: `curl -sS https://getcomposer.org/installer | php`
9. `composer.lock`, `composer.json` der lokalen Installation auf den Server ins `[root]`-Verzeichnis laden
10. falls Fehler auftritt: `php composer.phar install --ignore-platform-reqs`
11. `rm -rf var/cache/*`
12. ggf. Cache neu erstellen: `vendor/bin/contao-console cache:clear --no-warmup`
