Repro repo of Inertia.js scroll position issue on Firefox.

## Usage

Clone the repo:

```bash
git clone git@github.com:benjivm/inertiajs-firefox-scroll-position.git \
&& cd inertiajs-firefox-scroll-position
```

Just use the example .env:

```bash
cp .env.example .env
```

Install composer dependencies (requires dev):

```bash
composer install
```

Install npm dependencies:

```bash
npm install
```

Run either build or dev, shouldn't make a difference:

```bash
npm run dev
```

Or:

```bash
npm run build
```

Open the site (either via `php artisan serve` or your own server, e.g., `http://inertiajs-firefox-scroll-position.test`) and scroll to the middle of the first page. Read the text/follow the link to see the problem.
