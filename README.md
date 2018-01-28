# Base module for Magento 2 extensions
Provides common functionality for the following magento 2 modules:
- [zshapetech/module-slider](https://github.com/zshapetech/module-slider)
- [zshapetech/module-best-sellers](https://github.com/zshapetech/module-best-sellers)
- [zshapetech/module-features](https://github.com/zshapetech/module-features)

## Getting started
The following instructions describe installation of extension.

### Prerequisites
Magento Open Source 2.x installed

### Getting the extension
- Using `Composer`

    If `Composer` is installed on your server add in command line the following command:

    `composer require zshapetech/module-core`

- Simply download repository as `.zip` file or clone with the following command:
    
    `git clone https://github.com/zshapetech/module-core.git`
    
    Create directory `app/code/ZShapeTech/Core` in Magento 2 installation and copy downloaded files.
    
### Installing
Run in command line the following commands:

  * `php bin/magento setup:upgrade`
  
  * `php bin/magento setup:di:compile`

## License
This magento 2 extension is licensed under the MIT license.

