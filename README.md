# real-address-generator

a package for generating real addresses using https://openaddresses.io/ data

## Getting Started

Download any desired file from https://batch.openaddresses.io/data and save it
in the scope of your project.  

You can then pick a random address from the data set using the following code:

```php
$generator = new Generator('path/to/your/data-set.geojson.gz');
$address = $generator->address();
```

## Install Dependencies

```
nvm use
yarn
composer install
```

---

## Committing

After having made changes to your project you an add all changes and commit using the following commands:

```
git add .
yarn cm
```

And follow the commit prompts to create your structured commit message that will enable fully automatic semantic versioning releases.