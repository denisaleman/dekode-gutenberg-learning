# Learning Gutenberg for Dekode

* This WP Plugin contains 2 Gutenberg blocks made just for sake of learning Gutenberg API.
* The Plugin structure based on [wp-strap](https://github.com/wp-strap/wordpress-plugin-boilerplate) boilerplate.

### Topics learnt
* Gutenberg API 
  - How to create, code and build a Gutenberg block with [@wordpress/scripts](https://www.npmjs.com/package/@wordpress/scripts);
  - How to register a Gutenberg Block ([register_block_type](https://developer.wordpress.org/reference/functions/register_block_type/));
  - How to enqueue Gutenberg .js and .css files using block metadata ([block.json](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/));
  - How to start coding Gutenberg blocks with React and ES6+ JavaScript;


## Requirements
- [Composer](https://getcomposer.org/doc/00-intro.md)
- [Node.js](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)
- [NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)

## File structure
You can add your own new class files by naming them correctly and putting the files in the most appropriate location,
see other files for examples. Composer's Autoloader and the Bootstrap class will auto include your file and instantiate
the class. The idea of this organisation is to be more conscious of structuring your code.

```bash
│ ## First level files
├──dekode-gutenberg-blocks.php   # Main entry file for the plugin
├──composer.json                 # Composer dependencies & scripts
├──phpcs.xml.dist                # PHPCodeSniffer configuration
├──package.json                  # (incl. when using webpack) Node.js dependencies & scripts (NPM functions)
│
│ ## Folders
├──blocks                        # Holds all Gutenberg block within corresponding folders
│   ├── hello-world              # Block 'hello-world'
│   │   ├── build                # Bundles
│   │   ├── src                  # Source files
│   │   └── block.json           # Block metadata JSON file
│   │
│   └── red-block
│       ├── build                # Bundles
│       ├── src                  # Source files
│       └── block.json           # Block metadata JSON file
│
├──src                           # Holds all the plugin php classes
│   ├── Bootstrap.php            # Bootstraps the plugin and auto-instantiate classes
│   ├── App                      # Holds the plugin application-specific functionality
│   │   └── General              # Hooks/functionality shared between the back-end and frontend
│   │       │
│   │       │
│   │       └── Blocks.php       # Register Gutenberg blocks
│   │
│   │
│   │
│   ├── Config                   # Plugin configuration code
│   │   ├── Classes.php          # Defines the folders and order of classes to init
│   │   ├── I18n.php             # Internationalization and localization definitions
│   │   ├── Plugin.php           # Plugin data which are used through the plugin
│   │   ├── Requirements.php     # Defines the requirements that are needed to run this plugin.
│   │   ├── Setup.php            # Plugin setup hooks (activation, deactivation, uninstall)
│   ├── Common                   # Utilities & helpers shared in the whole plugin 
│   │   ├── Abstracts            # Here you can add abstract classes to extend your php classes
│   │   │   ├── Base.php         # A base class which all classes extends to load in default methods, currently the plugin data is only being injected
│   │   ├── Traits               # Here you can add handy traits to extend your php classes
│   │   │   ├── Requester.php    # The requester trait to determine what we request; used to determine which classes we instantiate in the Bootstrap class
│   │   │   ├── Singleton.php    # The singleton skeleton trait to instantiate the class only once
│   │   ├── Utils                # Here you can add helper/utiliy functions, eg: array functions
│   │   │   ├── Errors.php       # Utility class for the prettified errors and to write debug logs as string or array
│   │   ├── Functions.php        # Main function class for external/global functions, eg: "plugin_name()->your_function"
└──languages                     # WordPress default language map in Plugins & Themes
    └── the-plugin-name.pot      # Boilerplate POT File that gets overwritten by WP-Pot 
```

### PHPCodeSniffer and Code Standards

- Run PHPCodeSniffer with  `composer phpcs` to validate code
- Configure PHPCodeSniffer in `phpcs.xm.dist`
- Documentation can be found here:
  - https://github.com/WordPress/WordPress-Coding-Standards
  - https://github.com/Dealerdirect/phpcodesniffer-composer-installer
  - https://github.com/Automattic/phpcs-neutron-ruleset
  - https://github.com/PHPCompatibility/PHPCompatibilityWP