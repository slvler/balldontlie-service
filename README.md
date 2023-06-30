# slvler - covalenthq Service

[![tests](https://github.com/slvler/covalenthq-service/actions/workflows/tests.yml/badge.svg)](https://github.com/slvler/covalenthq-servicee/actions/workflows/tests.yml)
[![Latest Stable Version](http://poser.pugx.org/slvler/covalent/v)](https://packagist.org/packages/slvler/covalent)
[![Latest Unstable Version](http://poser.pugx.org/slvler/covalent/v/unstable)](https://packagist.org/packages/slvler/covalent)
[![License](http://poser.pugx.org/slvler/covalent/license)](https://packagist.org/packages/slvler/covalent)


This package provides a convenient wrapper to the [Balldontlie API](https://www.balldontlie.io/home.html#introduction)  for Laravel applications.

## Requirements

- PHP 8.0+
- Laravel 9.x

## Installation

To install this package tou can use composer:

```bash
    composer require slvler/balldontlie-laravel
```

## Usage

#### Find player
``` php
Balldontlie::players(237);
```
it returns an json with player:
```
{
  "data":[
    {
      "id":237,
      "first_name":"LeBron",
      "last_name":"James",
      "position":"F",
      "height_feet": 6,
      "height_inches": 8,
      "weight_pounds": 250,
      "team":{
        "id":14,
        "abbreviation":"LAL",
        "city":"Los Angeles",
        "conference":"West",
        "division":"Pacific",
        "full_name":"Los Angeles Lakers",
        "name":"Lakers"
      }
    }
    ...
 ],
 "meta": {
    "total_pages": 50,
    "current_page": 1,
    "next_page": 2,
    "per_page": 25,
    "total_count": 9999
  }
}   
```



#### Find team
``` php
Balldontlie::teams(14);
```
it returns an json with team:
```
{
  "data": [
    {
      "id":14,
      "abbreviation":"LAL",
      "city":"Los Angeles",
      "conference":"West",
      "division":"Pacific",
      "full_name":"Los Angeles Lakers",
      "name":"Lakers"
    },
    ...
  ],
  "meta": {
    "total_pages": 1,
    "current_page": 1,
    "next_page": null,
    "per_page": 30,
    "total_count": 30
  }
}
```



#### Find games
``` php
Balldontlie::games(1);
```
it returns an json with games:
```
{
  "data": [
    {
      "id":1,
      "date":"2018-10-16T00:00:00.000Z",
      "home_team_score":105,
      "visitor_team_score":87,
      "season":2018,
      "period": 4,
      "status": "Final",
      "time": " ",
      "postseason": false,
      "home_team":{
        "id":2,
        "abbreviation":"BOS",
        "city":"Boston",
        "conference":"East",
        "division":"Atlantic",
        "full_name":"Boston Celtics",
        "name":"Celtics"
      },
      "visitor_team":{
        "id":23,
        "abbreviation":"PHI",
        "city":"Philadelphia",
        "conference":"East",
        "division":"Atlantic",
        "full_name":"Philadelphia 76ers",
        "name":"76ers"
      },
    },
    ...
  ],
  "meta": {
    "total_pages": 1877,
    "current_page": 1,
    "next_page": 2,
    "per_page": 25,
    "total_count": 46911
  }
}
```




#### Find stats
``` php
Balldontlie::stats();
```
it returns an json with stats:
```
{
  "data": [
    {
      "id":29,
      "ast":2,
      "blk":2,
      "dreb":8,
      "fg3_pct":0.25,
      "fg3a":4,
      "fg3m":1,
      "fg_pct":0.429,
      "fga":21,
      "fgm":9,
      "ft_pct":0.8,
      "fta":5,
      "ftm":4,
      "game":{
        "id":1,
        "date":"2018-10-16T00:00:00.000Z",
        "home_team_id":2,
        "home_team_score":105,
        "season":2018,
        "visitor_team_id":23,
        "visitor_team_score":87
      },
      "min":"36:49",
      "oreb":2,
      "pf":3,
      "player":{
        "id":145,
        "first_name":"Joel",
        "last_name":"Embiid",
        "position":"F-C",
        "team_id":23
      },
      "pts":23,
      "reb":10,
      "stl":1,
      "team":{
        "id":23,
        "abbreviation":"PHI",
        "city":"Philadelphia",
        "conference":"East",
        "division":"Atlantic",
        "full_name":"Philadelphia 76ers",
        "name":"76ers"
      },
      "turnover":5
    },
    ...
  ],
  "meta": {
    "total_pages": 2042,
    "current_page": 1,
    "next_page": 2,
    "per_page": 25,
    "total_count": 51045
  }
}
```


## Testing

```bash
    composer test
```

## Credits

-   [slvler](https://github.com/slvler)

## License

The MIT License (MIT). Please see [License File](https://github.com/slvler/balldontlie-service/blob/main/LICENSE.md) for more information.

## Contributing
You're very welcome to contribute. 
Please see [CONTRIBUTING](https://github.com/slvler/balldontlie-service/blob/main/CONTRIBUTING.md) for details.
