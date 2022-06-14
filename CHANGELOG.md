# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).


## [2.1.0] - 2022-06-14

### Added
- Add `phpstan` and `psalm` commands
- Add `devilbox` recipes for old version of php 5.3,5.4 and 5.5

### Changed
- Build web container with memcached 3.2.0 for PHP 8.1 compatibility
- Modify `phpcs`, `phpcbf`, `phpmd` commands

## [2.0.0] - 2022-03-24

### Added
- Add `nextcloud` docker-compose yaml file to test on port 8888
- Add some crowdsec testing scripts

### Changed
- Change DDEV compatibility to version 1.19.1
- Change `nginx` and `find-ip` commands to work with 1.19.1

## [1.8.0] - 2022-03-17

### Added
- Add `nginx-config` command
- Add configuration for crowdsec bouncer auto-prepend-file directive

## [1.7.0] - 2022-03-16

### Added
- Add `phpinfo.php` file

## [1.6.3] - 2022-03-16

### Changed
- Changes CrowdSec files to match with version of `crowdsec/bouncer` lib greater than 0.17.0

## [1.6.2] - 2022-02-25

### Changed
- Changes CrowdSec settings and nginx specific file


## [1.6.1] - 2022-02-24

### Fixed
- Fix default for `maxmind-download` command

## [1.6.0] - 2022-02-21

### Changed
- Add a default option to download self-hosted MaxMind databases.

### Fixed
- Fix name of the sha256 checksum file

## [1.5.0] - 2022-02-21

### Added
- Add command to download MaxMind databases: `maxmind-download`

## [1.4.0] - 2022-02-17

### Added
- Add docker-compose for `playwright`
- Add settings file for CrowdSec PHP lib


## [1.3.0] - 2022-02-03

### Added
- Add command for coding standards : `phpcsfixer`

## [1.2.0] - 2022-02-03

### Added
- Add config for PHP 7.2
- Add command for coding standards : `phpcs`, `phpcbf`, `phpmd`


## [1.0.1] - 2021-12-16

### Added
- Add config for PHP 8.1

## [1.0.0] - 2021-11-05

### Added
- Initial release
