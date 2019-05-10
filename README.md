<p align="center"><a href="https://craftcms.com/" target="_blank"><img width="312" height="90" src="https://craftcms.com/craftcms.svg" alt="Craft CMS"></a></p>

## About Craft CMS

Craft is a content-first CMS that aims to make life enjoyable for developers and content managers alike. It is optimized for bespoke web and application development, offering developers a clean slate to build out exactly what they want, rather than wrestling with a theme. 

## How to Install

To install the Craft 3 Beta, follow the [installation instructions](https://github.com/craftcms/docs/blob/master/en/installation.md) outlined in the documentation.

## Resources

#### Official Resources
- [Craft 3 Documentation](https://github.com/craftcms/docs)
- [Craft 3 Plugins](https://github.com/craftcms/plugins)
- [Demo site](https://demo.craftcms.com/)
- [Craft Slack](https://craftcms.com/community#slack)
- [Craft CMS Stack Exchange](http://craftcms.stackexchange.com/)

#### Community Resources
- [Mijingo](https://mijingo.com/craft) – Video courses and other learning resources
- [Envato Tuts+](https://webdesign.tutsplus.com/categories/craft-cms/courses) – Video courses
- [Straight Up Craft](http://straightupcraft.com/) – Articles, tutorials, and more
- [pluginfactory.io](https://pluginfactory.io/) – Craft plugin scaffold generator

# Craft 3 Boilerplate

This is a boilerplate setup for craft 3. It comes with webpack for asset
pipelining, phpdotenv composer module for env variable management, and
capistrano ruby gem for deployment

### using webpack to compile assets

1. cd to project root

2. install all npm dependencies with `npm install`

3. run `npm run build` to start compiling scss and javascript

4. stylesheets are located in the `_src/styles` directory

5. javascript files are located in the `_src/scripts` directory

### using composer and phpdotenv to manage environment variables

1. cd to project root

2. install all php dependencies with `composer install`

3. make a copy of `.env.example` and rename it to `.env`

4. inside `.env`, fill in the database name, user, and password

5. start server

### using capistrano to deploy

1. cd to project root

2. install all ruby dependencies with `bundle install`

3. configure `config/deploy.rb` with the proper git repo and application name

4. configure each environment by modifying the corresponding file under
   `config/deploy/`

5. to deploy, make sure all changes are pushed to the corresponding remote
   branch, then run `bundle exec cap [environment] deploy`
