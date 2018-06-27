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
5. composer.json der lokalen Installation auf die in das `[root]`-Verzeichnis des Zielservers ziehen
6. contao-manager.phar.php neu aufrufen und nachsehen ob es Fehler gibt.
7. `parameters.yml`hochladen und Datenbankinformationen des Zielservers anpassen
8. `localconfig.php`, `langconifig.php`, `dcaconfig.php`auf den Server übertragen
9. Evtl. Contao Erweiterungen 3.x Erweiterungen in das `[root]/system/modules` übertragen
10. `files`, `templates`-Verzeichnis auf den Server übertragen
11. `contao-manager.phar.php` aufrufen und Cache neu erstellen -> oder per ssh: `vendor/bin/contao-console cache:clear --no-warmup`
12. (Contao Backend Systemsteuerung -> Symlinks neu erstellen) -> falls hier ein Fehler auftritt -> `var/cache/*` per ssh löschen
13. Frische `composer.phar` per ssh herunterladen: `curl -sS https://getcomposer.org/installer | php`
14. `composer.lock` der lokalen Installation auf den Server ins `[root]`-Verzeichnis laden
15. per ssh auf Server verbinden `php composer.phar install`
16. falls Fehler auftritt: `php composer.phar install --ignore-platform-reqs`
17. ggf. Cache neu erstellen: `vendor/bin/contao-console cache:clear --no-warmup`
