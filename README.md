# **Neil Whitford**

The website of Toronto musician, guitarist, composer, producer and educator Neil Whitford.

For more information see [jaxx.io](https://neilwhitford.com).

## **SWUP**

This version of decentral.ca is essentially the same though uses [SWUP](https://github.com/gmrchk/swup) as a framework for AJAX page transitions and the addition of entrance/exit animation classes. Like smoothstate, this gives the site an app feel, as pages do not reload, view changes are fast, the initial page load is light, and it is easily extensible with simple (or complex) css animations.

Compared to smoothstate.js - the library used on decentral.ca first version - SWUP's implementation is much easier, uses less code, and is more flexible in terms of animation, onAfter reinitialization of js and plugins, with simple css animations that can be applied to any element. Smoothstate seemed to be more finnicky and got bogged down a bit in terms of performance when used with large numbers of images, and with animations other than relatively simple fading.

## **Layout and Frameworks**

The site uses Bootstrap 4.1. Layout uses native Bootstrap classes, flexbox, and functional css.

## **PHP**

PHP is used for reusable header and footer component.

## **CSS**

1. Functional [Atomic] css: the site employs the atomic css approach where small, single purpose classes are used based on visual function. Classes are referenced once in the CSS then used repeatedly in the HTML so as to avoid class repetition in the stylesheet.

## **JS**

**Multiple JS plugins are used on the site.**

1. swup: an ajax plugin that hijacks http requests, swapping page content out without page refresh. Significantly improves view change speed and performance in addition to allowing for entrance and exit animations.

2. AOS: animate on scroll. A simple css based animation library that activates a variety of css animations on scroll.

## **.htaccess**

1. Simple .htaccess rewrites are employed to remove `.php` extensions for pretty urls.