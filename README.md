# DDEV stack for PHP project

[![Version](https://img.shields.io/github/v/release/julienloizelet/ddev-php?include_prereleases)](https://github.com/julienloizelet/ddev-php/releases)

The purpose of this repo is to share my PHP [DDEV](https://ddev.readthedocs.io/en/stable/) stack.


<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**

- [Quick start](#quick-start)
  - [DDEV installation](#ddev-installation)
  - [Prepare DDEV environment](#prepare-ddev-environment)
- [License](#license)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

## Quick start

### DDEV installation


This project is fully compatible with DDEV 1.21.1, and it is recommended to use this specific version.
For the DDEV installation, please follow the [official instructions](https://ddev.readthedocs.io/en/stable/#installation). 
On a Linux distribution, you can run: 
```
sudo apt-get -qq update
sudo apt-get -qq -y install libnss3-tools
curl -LO https://raw.githubusercontent.com/drud/ddev/master/scripts/install_ddev.sh
bash install_ddev.sh v1.21.1
rm install_ddev.sh
```

### Prepare DDEV environment

The final structure of the project will look like below.

```
php-project-sources
│   
│ (your php project sources)    
│
└───.ddev
    │   
    │ (Cloned sources of this repo)
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
`

## License

[MIT](LICENSE)
