# Reed Wheels

Built on kirby-2.1.1

http://getkirby.com/docs

You need:
- Node
- Sass
- Compass
- PHP

For setting up a dev environment:
```
bundle install
npm install
gulp
```

To login go to `/panel/login`

Todo:
- Products/Cart
- GA + Events?
- Lightbox for imgs?
- assets/data.json should probably be data.php returning json from a POST with coupCode
- See if we want different font
- MailKimp

Product Notes:
Make option field one with various commas separated options, turn
into an array then loop over it. I'll need to do this per select.
