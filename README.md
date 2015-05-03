# simple-statamic-regex
A simple variable modifier for Statamic to strip out certain characters using regex.

##Installation
Create a folder called `strip` in your `_add-ons` folder, and copy `mod.strip.php` into it.

##Usage

Strip out all "Mr" and "Ms" (case insensitive)

    {{ value|strip:/mr*/i|strip:/ms*/i }}
    

Strip out carriage returns (line breaks)

    {{ value|strip:NL }}


Strip out spaces

    {{ value|strip:SPACE }}


Strip out spaces and carriage returns (line breaks)

    {{ value|strip:SPACE|strip:NL }}
    

##NOTES
Some characters won't work with Statamic's variable modifier syntax, such as using brackets `() []`, backward slashes `\` and spaces.  

This is just a basic modifier so advanced use with these disallowed characters hasn't been implemented.  
However for regex groups you can just stack the modifier multiple times (see above), and for spaces and the special regex modifier for line breaks you can use `SPACE` and `NL` respectively.

