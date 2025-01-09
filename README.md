# Kirby Back to Top Plugin

Ein konfigurierbarer "Zurück nach oben" Button für Kirby CMS.

## Installation

### 1. Composer (empfohlen)
```bash
composer require flossomat/kirby-backtotop
```

### 2. Git Submodule

```bash
git submodule add https://github.com/flossomat/kirby-backtotop.git site/plugins/kirby-backtotop
```

### 3. Download

Lade das Plugin herunter und kopiere es in den `site/plugins` Ordner.

## Verwendung

Fügen Sie das Snippet in Ihr Template oder in die `footer.php` ein:

```php
<?php snippet('backtotop') ?>
```

## Konfiguration

Du kannst das Plugin in deiner `site/config/config.php` konfigurieren:

```php
return [
'dasformt.backtotop' => [
// Button aktivieren/deaktivieren
'enabled' => true,
// Scroll-Verhalten
'offset' => 300, // Ab wann erscheint der Button (px)
'offsetOpacity' => 1200, // Fade-Effekt Position (px)
'scrollDuration' => 700, // Scroll-Animation in ms
// Button-Styling
'button' => [
'size' => '60px', // Button-Größe
'radius' => '100px', // Border-Radius
'position' => [
'bottom' => '30px', // Abstand unten
'right' => '40px' // Abstand rechts
],
'colors' => [
'background' => 'var(--primary, #008ED9)', // Hintergrundfarbe
'hover' => 'var(--primary-dark, #007BC0)', // Hover-Farbe
'opacity' => 0.5, // Transparenz
'hoverOpacity' => 1 // Hover-Transparenz
],
'zIndex' => 1000
],
// Responsive Design
'responsive' => [
'tablet' => [
'bottom' => '40px',
'size' => '55px'
],
'desktop' => [
'bottom' => '50px',
'size' => '60px'
]
],
// Accessibility
'aria' => [
'label' => 'Zurück nach oben',
'hidden' => 'Zum Seitenanfang scrollen'
]
]
];
```

### Beispiele

#### Größeren Button erstellen

```php
'dasformt.backtotop' => [
'button' => [
'size' => '80px'
]
]
```

#### Farben anpassen
```php
'dasformt.backtotop' => [
    'button' => [
        'colors' => [
            'background' => '#FF0000',
            'hover' => '#CC0000'
        ]
    ]
]
```

## Anforderungen

- Kirby 3.x oder höher
- PHP 7.4+
- jQuery (wird von Bootstrap bereitgestellt)

## Lizenz

MIT

## Autor

- [dasformt](https://dasformt.de)
- <info@dasformt.de>

## Version

1.0.0

