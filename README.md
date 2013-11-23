# chi-workshop-php-microsite

Very simple PHP microsite for CHI workshops.

[Working example](http://chi2014sust.120cell.org).

## Using

chi-workshop-php-microsite should be easy to use for anyone with experience editing HTML and putting files on the web. No database is required.

1. Get the files onto your server in a place where the internet can see them.
2. Edit these files:
    * **head.php** The site header. Add your workshop title in two places.
    * **index.php** The home page.
    * **ext_abs.php** Your workshop's extended abstract.
    * **organizers.php** Organizer information.
    * **schedule.php** The workshop schedule.
    * **proceedings.php** Workshop attendee information, accepted position papers, etc.
    * **foot.php** The site footer. Includes a space for last-updated information and background image credits.
3. If you want to add a background image, create one and call it bg.png (or edit main.css acccordingly). The leftmost 600 pixels (or the value of body {max-width} in main.css, if you have changed it) should be empty space, or your background may interfere with the readability of your text.

## Unasked questions

**What is empty.php for?**

It is a convenience file. You can copy it if you want to make a new page.

