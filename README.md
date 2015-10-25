# Show Template Event Locations for Extension Development in phpBB 3.1

This extensions shows where all the [Template Events](https://wiki.phpbb.com/Event_List#Template_Events) occur within all php3.1.  

The extension, when enabled, will list all template events templates where they appear on a given webpage. This can be used to quickly determine
which template needs to be used to make changes.

## Installation
1. [Download the latest release](https://github.com/LotusJeff/showtemplate) and unzip it (or use git clone.)
2. Unzip the downloaded release and copy it to the `ext` directory of your phpBB board. The directory strcuture should be phpBB/ext/lotusjeff/showtemplate
3. Navigate in the ACP to `Customise -> Manage extensions`.
4. Look for `Show Template Event Locations` under the Disabled Extensions list, and click its `Enable` link.

## Usage
1. Enable extension when needing to locate a template event location.
2. Disable when not needed.

## Uninstallation
1. Navigate in the ACP to `Customise -> Manage extensions`.
2. Click the `Disable` link for Fancybox.
3. To permanently uninstall, click `Delete Data`, then delete the `showtemplate` folder from `phpBB/ext/lotusjeff/showtemplate`.

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)

© 2015 - Jeff Cocking (LotusJeff)
