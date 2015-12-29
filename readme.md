# Reed Wheels

Built on kirby-2.1.1

http://getkirby.com/docs

Run `php -S localhost:8000` in root dir.

To login go to `/panel/login`

Todo:
- Products/Cart
- GA + Events?
- Lightbox for imgs?
- Contact link
- assets/data.json should probably be data.php returning json from a POST with coupCode
- Need to rethink how to handle these product options so I'm not doing 15*2 if statements
- See if we want different font
- MailKimp

Product Notes:
Make option field one with various commas separated options, turn
into an array then loop over it. I'll need to do this per select.
