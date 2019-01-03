RTLXL API Wrapper
=========================

Features
--------

* Get a full list of all available shows
* Get the seasons of a single show
* Get the episodes of a single season

Basic usage and what works
--------
```php
$wrapper = new \martysmartySE\RTLXLWrapper\RTLXLWrapper();

//Get all shows
$Shows = $wrapper->getShows();

//Get all seasons
$seasons = $wrapper->getShowSeasons(10821);

//Get all episodes
$episodes = $wrapper->getSeasonEpisodes(10821, 378858);
```

Notes
--------
I'm not a full time, professional coder. My code therefor won't be perfect or all that pretty. But it works for my own hobby projects. If you have improvements, please send in pull requests and I'll look at them.
