Zleek v0.9
=====

Zleek - a clean, responsive theme for Anchor CMS. 
See it in action [here](http://joshkennedy.github.com/zleek).

*Zleek is now compatible with Anchor CMS 0.9!*

#### Why Zleek iz zo zexy:
- Shows your most recent post as your home page
- Massive featured images for each post with one gorgeous default image
- Archive page of all previous posts
- Automatic "Tweet This" button included

## Installation
1. Download the theme from Github
2. Copy the folder into your `themes` directory
3. Create page titled *Home*
4. Set **Zleek** as the `Current Theme:` on the **Extend > Site Metadata** menu in Anchor's admin
5. Set `Home Page:` to *Home*
6. **Boom!** [You're done](http://bukk.it/ham.gif).

## Setup
There are a few customizations I've made in order to get this bad boy up and running.

### Featured Images
This theme comes with one large featured image per post. Should you fail to upload one, it will automatically default back to a pretty photo of some wood (SFW).

1. Create a new Custom Field in the **Extend > Custom Fields** menu in Anchor's admin
2. Fill in the form with the following:
	- Extend: post
	- Type: file
	- Unique Key: featured-image
	- Label: Featured Image
	- File Types: [blank]
3. Upload featured images when editing a post
4. **Boom!** [You're done](http://bukk.it/algebraic.gif).

### Navigation
Since Anchor (for the moment) lacks any way to re-order menu items, some juggling is necessary to shift things around a bit. I prefer simple solutions, and just wanted the *Home* link to always be the left-most link in the nav. You'll find this function in your `functions.php` file. Anchor now has, by default, a "Show in Menu" option on all pages. Huzzah!

## The Future
The response to Zleek has been amazing - I hope you all are enjoying it! I'm still wanting to add back in the commenting functionality and the search feature... when I find time. If you have any tips or questions, please post them in the issues section or submit a pull request. Or fork that trash and make your own template.

Cheers.

[Come at me, bro](http://twitter.com/joshkennedy)