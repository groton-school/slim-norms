# groton-school/slim-norms

Define some normal interfaces and abstract classes for working with the Slim Framework

[![Latest Version](https://img.shields.io/packagist/v/groton-school/slim-norms.svg)](https://packagist.org/packages/groton-school/slim-norms)

## Install

```bash
composer require groton-school/slim-norms
```

## Use

When developing Slim Framework-related packages, use...

- Extend `AbstractAction` to easily create invokable actions.
- Implement `DependenciesInterface` to script injecting package-related dependencies;
- Implement `RouteBuilderInterface` to define package-related routes;

See [groton-school/slim-spa-oauth2-client](https://github.com/groton-school/slim-spa-oauth2-client) for sample usage.
