timberscores
===

Hi. I'm a starter theme called ~~`underscores`~~ `timberscores`. I'm a conversion of the underscores theme that's built for use with [Timber](https://github.com/jarednova/timber). I'm meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A just right amount of lean, well-commented, modern, HTML5 *twig* templates.
* A helpful 404 template.
* A sample custom header implementation in `inc/custom-header.php` that can be activated by uncommenting one line in functions.php and adding the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/extras.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample CSS layouts in `layouts` for a sidebar on either side of your content.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Licensed under GPLv2 or later. :) Use it to make something cool.

Getting Started
---------------

There's no generator currently like there is at [http://underscores.me](http://underscores.me), but you could customize the name of the theme fairly easily with a global find/replace of the word `timberscores`.

Or, you can snoop around manually.

1. Search for `'timberscores'` (inside single quotations) to capture the text domain.
2. Search for `timberscores_` to capture all the function names.
3. Search for `Text Domain: timberscores` in style.css.
4. Search for <code>&nbsp;timberscores</code> (with a space before it) to capture DocBlocks.
5. Search for `timberscores-` to capture prefixed handles.

Then, update the stylesheet header in style.css and the links in views/footer.twig with your own information. Then, update or delete this readme.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!