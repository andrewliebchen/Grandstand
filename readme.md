# Grandstand: Visualize your Sprints

[Sprint.ly](http://sprint.ly) is a great tool for Agile development, however it can be difficult to get a good sense of the size of your queue and how stories, tasks, and defects are distributed among your team. 

![Screenshot](http://f.cl.ly/items/0o2s1l0b382z2T3Q4743/screenshot_full.png)

Based on [Scrumly](https://github.com/simpleenergy/Scrumly) with interaction and visualization help from [Isotope](https://github.com/desandro/isotope), with Grandstand your Sprint.ly items are sized by their score, colored by their type, and arranged in a masonry grid.  You can filter your project's items by user, status, type, and score. 

Grandstand in action...

![Animated screenshot](http://f.cl.ly/items/0e3q151b00042H0a390d/granstand.gif)

## Setup

Getting started is simple, assuming you have a Sprint.ly account: 

1. Clone this repository recursively (`git clone --recursive git@github.com:andrewliebchen/Grandstand.git`). Without the `--recursive` flag, you won't get the necessary submodule.
1. Clone or download this repo.
2. Open `config.template.php`, fill in your Sprint.ly user, product, and API key information.
3. Save this file as `config.php`.
4. Setup the files on a webserver, or run locally with [MAMP](http://www.mamp.info/en/index.html).
5. Open `index.php` in your favorite browser.

## Heroku

Grandstand can easily be deployed to Heroku, but you probably don't want to put your Sprintly API key in source control. To allow you to deploy to Heroku securly, Grandstand will fall back to using environment variables for its configuration so you can use `heroku config` to set them.

1. Clone this repository recursively (`git clone --recursive git@github.com:andrewliebchen/Grandstand.git`). Without the `--recursive` flag, you won't get the necessary submodule.
2. Setup a new Heroku application and procure its git repository URL.
3. Add that repo as a remote for your local clone: `get remote add heroku git@heroku.com:your-app-url.git`
4. Make sure that you have the Heroku gem or toolbelt: `gem install heroku`
5. Set your Grandstand configuration on Heroku. See `config.template.php` for info on the required variables. Example: `heroku config:set api_username=josh.jordan@gmail.com api_key=asdfqwerty1234 product_id=5555 product_name=myproduct`
6. Deploy: `git push heroku master`
7. Visit the Heroku application in your favorite browser.

## Other deployed environments

You're mostly on your own. You can use environment variables to setup your Grandstand configuration. See `Heroku` above for more information.

## To do

This project goal is to experiment with new ways of visualizing and interacting with an Agile queue beyond the standard column layout. Grandstand should be improved to make better use of the more functionality offered by the Sprint.ly API. Additional features that would make Grandstand more useful: 

* Sort items by number, date added, activity, etc.
* Display item meta information beyond number and title.
* Build a configuration pane to allow users to input information for their own projects. With this feature, there could be a publically accessiable demo.
* Filter on multiple parameters within the same dimension.
* Figure out how to get around the 100 item API limit.
