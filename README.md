# Определение наличия мата (нецензурных слов) в тексте

## Getting Started
#### Requirements
1. PHP >= 5.3.0
2. Composer

#### Installation
`
composer require wmmax/php-ru-censorship
`

#### Usage
```php
require __DIR__ . '/vendor/autoload.php';

use TextCensor\Censor;

$censure = Censor::parse('Да пошел ты нахуй и в пи zdu hues os, ушлепок ебан_ый, ебать мой вялый хуй', '0');

// Да пошел ты ***и ***u ***s os, ушлепок ***ан_ый, ***ать мой вялый ***
```
