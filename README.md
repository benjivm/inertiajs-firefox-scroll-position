Repro repo of [Inertia.js scroll position issue](https://github.com/inertiajs/inertia/issues/1698) on Firefox, resolved by v2.

### Setup:

```bash
git clone git@github.com:benjivm/inertiajs-firefox-scroll-position.git && \
cd inertiajs-firefox-scroll-position && \
cp .env.example .env && \
composer install && \
npm install && \
npx vite build
```
### Usage

- Open the site (either via `php artisan serve` or your own server, e.g., [http://inertiajs-firefox-scroll-position.test](http://inertiajs-firefox-scroll-position.test)) 
- Scroll to about the middle of the first page where the link is.
- Read the text/follow the link to see the problem.
- Before hitting the back button ensure you've scrolled any amount on the linked page.
