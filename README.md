timberscores
===

Hi! I'm a starter theme called ~~`underscores`~~ `timberscores`. I'm a conversion of the [underscores](http://underscores.me/) theme that's built for use with [Timber](https://github.com/jarednova/timber). I'm meant for hacking so don't use me as a Parent Theme. Instead turn me into the next, most awesome, most cleanly templated WordPress theme out there!

My ultra-minimal CSS means less stuff to get in your way when you're designing your awesome theme, and my Timber components mean clean templates, sane routing, and not getting tangled in WP's Loop.

Here are some other interesting things you'll find here:

* A just right amount of lean, well-commented, modern, HTML5 **twig** templates.
* A helpful 404 template.
* A sample custom header implementation in `inc/custom-header.php` that can be activated by uncommenting one line in functions.php and adding the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/extras.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample CSS layouts in `layouts` for a sidebar on either side of your content.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* A context wrapper for `Timber::get_context` that uses wp object caching to be fast. Add your global template variables here so they don't have to be added everywhere else!
* Licensed under GPLv2 or later. :) Use it to make something cool.


Getting Started
===

First, make sure that your copy of Wordpress has [Timber](http://jarednova.github.io/timber/) installed. **timberscores does not include a copy of timber**. This is so you can decide whether to use Timber as a plugin, or included directly as part of your theme.

There's (currently) no generator like there is at [http://underscores.me](http://underscores.me), but it's still easy to customize the name of the theme with a global find & replace of the word `timberscores`.

Since `timberscores` is a pretty unique string (unlike `_s`) it's possible to use a single command to replace all instance of `timberscores` with your own name.

Pop this in your terminal within the theme directory:

`grep -rl --exclude-dir .git 'timberscores' . | xargs sed -i 's/timberscores/your_name_here/ig'`

*If you're on OSX, you may want to `brew install gnu-sed` and use `gsed` instead of `sed` since the builtin OSX version of sed is sort of bad.*

Or, you can snoop around manually (though the above method is recommended)

1. Search for `'timberscores'` (inside single quotations) to capture the text domain.
2. Search for `timberscores_` to capture all the function names.
3. Search for `Text Domain: timberscores` in style.css.
4. Search for <code>&nbsp;timberscores</code> (with a space before it) to capture DocBlocks.
5. Search for `timberscores-` to capture prefixed handles.

Finally, update the stylesheet header in style.css and the links in views/footer.twig with your own information. Then, update or delete this readme!

Now you're ready to go! The next step is easy to say, but ~~harder to do~~ as hard as you choose to make it: create an awesome WordPress theme.

Rock on!