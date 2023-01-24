# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).


## [2.4.0](https://github.com/julienloizelet/ddev-php/releases/tag/v2.4.0)  - 2023-01-24
[Compare with previous release](https://github.com/julienloizelet/ddev-php/compare/v2.3.0...v2.4.0)
### Changed
- Change DDEV compatibility by using `1.21.4` ddev version

---

## [2.3.0](https://github.com/julienloizelet/ddev-php/releases/tag/v2.3.0)  - 2022-12-06
[Compare with previous release](https://github.com/julienloizelet/ddev-php/compare/v2.2.0...v2.3.0)
### Changed
- Change DDEV compatibility by using `1.21.3` ddev version
- Disable online API for `crowdsec` container

### Added
- Add a `crowdsec-create-bouncer` config file

---

## [2.2.0](https://github.com/julienloizelet/ddev-php/releases/tag/v2.2.0) - 2022-09-07
[Compare with previous release](https://github.com/julienloizelet/ddev-php/compare/v2.1.0...v2.2.0)
### Changed
- Change DDEV compatibility by using `1.21.1` ddev version

### Added
- Add `DDEV_EXPECTED_VERSION.txt` file with post-start hook to compare current and expected DDEV version
- Add `portainer` service docker-compose file
- Add `crowdsec` TLS authorization configuration files
---
## [2.1.0](https://github.com/julienloizelet/ddev-php/releases/tag/v2.1.0) - 2022-06-14

### Added
- Add `phpstan` and `psalm` commands
- Add `devilbox` recipes for old version of php 5.3,5.4 and 5.5

### Changed
- Build web container with memcached 3.2.0 for PHP 8.1 compatibility
- Modify `phpcs`, `phpcbf`, `phpmd` commands
---
## [2.0.0](https://github.com/julienloizelet/ddev-php/releases/tag/v2.0.0) - 2022-03-24

### Added
- Add `nextcloud` docker-compose yaml file to test on port 8888
- Add some crowdsec testing scripts

### Changed
- Change DDEV compatibility to version 1.19.1
- Change `nginx` and `find-ip` commands to work with 1.19.1
---
## [1.8.0](https://github.com/julienloizelet/ddev-php/releases/tag/v1.8.0) - 2022-03-17

### Added
- Add `nginx-config` command
- Add configuration for crowdsec bouncer auto-prepend-file directive
---
## [1.7.0](https://github.com/julienloizelet/ddev-php/releases/tag/v1.7.0) - 2022-03-16

### Added
- Add `phpinfo.php` file
---
## [1.6.3](https://github.com/julienloizelet/ddev-php/releases/tag/v1.6.3) - 2022-03-16

### Changed
- Changes CrowdSec files to match with version of `crowdsec/bouncer` lib greater than 0.17.0
---
## [1.6.2](https://github.com/julienloizelet/ddev-php/releases/tag/v1.6.2) - 2022-02-25

### Changed
- Changes CrowdSec settings and nginx specific file

---
## [1.6.1](https://github.com/julienloizelet/ddev-php/releases/tag/v1.6.1) - 2022-02-24

### Fixed
- Fix default for `maxmind-download` command
---
## [1.6.0](https://github.com/julienloizelet/ddev-php/releases/tag/v1.6.0) - 2022-02-21

### Changed
- Add a default option to download self-hosted MaxMind databases.

### Fixed
- Fix name of the sha256 checksum file
---
## [1.5.0](https://github.com/julienloizelet/ddev-php/releases/tag/v1.5.0) - 2022-02-21

### Added
- Add command to download MaxMind databases: `maxmind-download`
---
## [1.4.0](https://github.com/julienloizelet/ddev-php/releases/tag/v1.4.0) - 2022-02-17

### Added
- Add docker-compose for `playwright`
- Add settings file for CrowdSec PHP lib

---
## [1.3.0](https://github.com/julienloizelet/ddev-php/releases/tag/v1.3.0) - 2022-02-03

### Added
- Add command for coding standards : `phpcsfixer`
---
## [1.2.0](https://github.com/julienloizelet/ddev-php/releases/tag/v1.2.0) - 2022-02-03

### Added
- Add config for PHP 7.2
- Add command for coding standards : `phpcs`, `phpcbf`, `phpmd`

---
## [1.0.1](https://github.com/julienloizelet/ddev-php/releases/tag/v1.0.1) - 2021-12-16

### Added
- Add config for PHP 8.1
---
## [1.0.0](https://github.com/julienloizelet/ddev-php/releases/tag/v1.0.0) - 2021-11-05

### Added
- Initial release
