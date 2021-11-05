# DDEV-Local stack for PHP project

The purpose of this repo is to share my PHP [DDEV-Local](https://ddev.readthedocs.io/en/stable/) stack.


<!-- START doctoc generated TOC please keep comment here to allow auto update -->

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

## Quick start

_We will suppose that you want to test on a WordPress 5.6.5 instance. Change the version number if you prefer another
release._

### DDEV-Local installation

Please follow the [official instructions](https://ddev.readthedocs.io/en/stable/#installation). On a Linux
distribution, this should be as simple as

    sudo apt-get install linuxbrew-wrapper
    brew tap drud/ddev && brew install ddev


### Prepare DDEV environment

The final structure of the project will look like below.

```
php-project-sources
│   
│ (your php project sources)    
│
└───.ddev
│   │   
│   │ (Cloned sources of this repo)
│   
└───my-own-modules (only if you want to test some of your module(s))
    │   
    │
    └───yourVendorName-yourModuleName
       │   
       │ (Sources of a module)
         
```

- Create an empty folder that will contain all necessary sources:
```
mkdir php-project-sources
```
- Create an empty `.ddev` folder for DDEV and clone our pre-configured DDEV repo:

```
mkdir php-project-sources/.ddev && cd php-project-sources/.ddev && git clone git@github.com:julienloizelet/ddev-php.
git ./
```
- Copy some configurations file:

```
cp .ddev/config_overrides/config.php74.yaml .ddev/config.php74.yaml
```
- Launch DDEV

```
cd .ddev && ddev start
```
This should take some times on the first launch as this will download all necessary docker images.


## Usage

### Test your own module

## License

[MIT](LICENSE)
