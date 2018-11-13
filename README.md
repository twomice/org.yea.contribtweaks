# YEA Contribution Tweaks

Custom modifications to native contribution functionality, for YEA.

## Installation (Web UI)

This extension has not yet been published for installation via the web UI. Probably never will be.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl org.yea.contribtweaks@https://github.com/twomice/org.yea.contribtweaks/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/twomice/org.yea.contribtweaks.git
cv en contribtweaks
```

## Functionality

* Requires a value for contribution Source field.
* Requires a value for contribution Status field, but adds and defaults to a blank value for new contributions.

