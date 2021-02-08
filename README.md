# template-package-php 

a template for creating tested and self-versioning php packages

## Overview
This templates provides the developer with the following set of functionality:

- scaffolding for php package
- testing patterns for php package
- structured and linted commit messages
- test-release CI/CD pipeline (via CircleCI)

---

## Getting Started

To get started, setup your project from the template by following the official 
documentation: [Creating a repository from a template](
https://docs.github.com/en/free-pro-team@latest/github/creating-cloning-and-archiving-repositories/creating-a-repository-from-a-template)

After completing the initial steps, lets update your package manager files:

```
composer.json
package.json
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