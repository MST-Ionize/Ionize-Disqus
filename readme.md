Disqus integration
***********
BY GIACOMO FURLAN

This Ionize module allows a web designer to easily integrate the Disqus comments system into the CMS.

LICENCE
*******
[Creative Commons Attribution-ShareAlike 4.0 International (CC BY-SA 4.0)](http://creativecommons.org/licenses/by-sa/4.0/deed.en "CC BY-SA 4.0")

HOW TO USE THIS MODULE
**********************

1. place the Disqus folder in the Ionize's modules one.
2. enable the module via the backend, the URI should be null (no frontend required).
3. enter the module's configuration panel and set the shortname (and uncheck the mobile view if you want)

Tags definition:

- `<ion:disqus:code>` to place the Disqus comments system.
- `<ion:disqus:comments_num_code />` put it somewhere before `</body>` if you want to have the comments count per each article (something like `<a href="<ion:article:url />#disqus_thread">0 Comments</a>`).
- `<ion:disqus:shortname>` displays the Disqus's shortname. Shouldn't be used normally.


TODO
****
Please feel free to fork this project in order to make it better.

1. create a better backend (little to no documentation about Ionize admin forms, it's a shame)
2. maybe integrate other Disqus options?