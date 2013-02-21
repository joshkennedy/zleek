Zleek
=====

Zleek - a clean, responsive theme for Anchor CMS. 
See it in action [here](http://joshkennedy.github.com/zleek)

#### Why Zleek is zo zexy:
- Shows your most recent post as your home page
- Massive featured images for each post
- Has an archive page of all previous posts
- Automatic "Tweet This" button included, free of charge

## Installation
1. Download the theme from Github
2. Copy the folder into your `themes` directory
3. Create page titled *Home*
4. Set **Zleek** as the `Current Theme:` on the **Extend > Metadata** menu in Anchor's admin
5. Set `Home Page:` to *Home*
7. Fill out your twitter business.
8. **Boom!** [You're done](http://bukk.it/ham.gif).

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
Since Anchor (for the moment) lacks any way to re-order menu items, some juggling is necessary to shift things around a bit. I prefer simple solutions, and just wanted the *Home* link to always be the left-most link in the nav.

1. Create a new Custom Field in the **Extend > Custom Fields** menu in Anchor's admin
	- Extend: page
	- Type: text
	- Unique Key: show-in-menu
	- Label: Show link in nav menu?
2. Click **Update**
3. If you want to hide any subsequent pages from the nav, simply enter `false` into the aforementioned field and…
4. **Boom!** [You're done](http://bukk.it/mckayla.gif).

  
I am still working on making Zleek zleeker. I'd like to add/integrate comments and search in the future. When I find time. If you have any tips or questions, please post them in the issues section or submit a pull request. Or fork that trash and make your own template. 

Cheers. 