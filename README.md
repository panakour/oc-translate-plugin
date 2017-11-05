# Helper for Rainlab.Translate plugin

- [Overview](#introduction)
    - [Pre-requisites](#prerequisites)
- [Features](#features)
- [Usage](#usage)


<a name="introduction"></a>
## Introduction
This plugin let you manage static menus of multi language websites.

<a name="prerequisites"></a>
#### Pre-requisites:
 - Rainlab.Pages plugin
 - Rainlab.Translate plugin

<a name="features"></a>
## Features
* Create static menu in any language you want.

<a name="usage"></a>
## Usage
1. Navigate to settings > Manage languages. Create the languages you want. Keep in mind the code of each language, you will need it later:

![image](https://raw.githubusercontent.com/panakour/oc-translate-plugin/master/docs/images/manage-languages.png)

2. Navigate to rainlab pages plugin and in the Menus tab create all the menus you want for each language with a code suffix you already created.
Let's assume you have created english language with en as a code then the menu code you should be `menuName-en`:

![image](https://raw.githubusercontent.com/panakour/oc-translate-plugin/master/docs/images/pages-menus.png)

3. Within layout, partial or page add the multilingual static menu component and select from drop down which menu you want:

![image](https://raw.githubusercontent.com/panakour/oc-translate-plugin/master/docs/images/static-menu-component.png)

