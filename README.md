#Amuzé API

This is a demo API for the web app Amuze, a social media viewing and experiencing platform.
It is based on CakePHP 4.0, MySQL PHP 7.2

##About
The Amuzé application presents a UI for viewing and sharing movies, TV, games and books. This API backend is created to
behave as a full implementation would using mock data. It was created in CakePHP as by following the table name conventions,
it is possible to quickly build models and controllers along with all of the database associations .

The views in this case are just JSON serializations of the data returned by the ORM. This flexibility makes it easy to
rapidly iterate and experiment with API design.

#Endpoints
- All API requests should end with the .json extension
- The database data comes from config/schema/amuze_api_data.sql

##Retrieve User Info
This data is a object containing general user information (email, name, etc). Additionally it contains:
- "user_media" - A list of media items they have accessed, with their review and current progress through the media
- "discussions" - Discussions the user has partipated in

/users/1.json

```json
{
    "user": {
        "id": 1,
        "name_first": "Dorry",
        "name_last": "Nibley",
        "email": "dnibley0@people.com.cn",
        "created": "2020-03-30T00:00:00+00:00",
        "updated": "2020-04-29T00:00:00+00:00",
        "deleted": null,
        "user_media": [
            {
                "id": 36,
                "user_id": 1,
                "media_id": 36,
                "review": "Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.",
                "progress": 90.505045342,
                "created": "2002-02-04T00:00:00+00:00",
                "updated": "2005-06-27T00:00:00+00:00",
                "deleted": null
            },
            {
                "id": 87,
                "user_id": 1,
                "media_id": 75,
                "review": "Aliquam erat volutpat. In congue. Etiam justo. Etiam pretium iaculis justo. In hac habitasse platea dictumst.",
                "progress": 10.1457161,
                "created": "2018-04-05T00:00:00+00:00",
                "updated": "2006-08-03T00:00:00+00:00",
                "deleted": null
            }
        ],
        "discussions": [
            {
                "id": 237,
                "title": "Front-line dynamic contingency",
                "user_id": 1,
                "media_id": 103,
                "created": "2019-12-11T00:00:00+00:00",
                "updated": "2020-04-05T00:00:00+00:00",
                "deleted": null
            },
            {
                "id": 243,
                "title": "Public-key coherent forecast",
                "user_id": 1,
                "media_id": 89,
                "created": "2020-03-22T00:00:00+00:00",
                "updated": "2019-10-19T00:00:00+00:00",
                "deleted": null
            }
        ]
    }
}

```
##Get Recommendations
Request the media that will be displayed on the dashboard for the user that is currently viewing. This will be based
on their viewing habits and suggestions by friends

/recommend_media/user/1
```json
TBD
```

##Get Discussions
There can be discussions regarding media by users as part of the social aspect.
Get a discussion along with all comments.

/discussions/view/1

```json
{
    "discussion": {
        "id": 1,
        "title": "Devolved local productivity",
        "user_id": 38,
        "media_id": 97,
        "created": "2019-09-01T00:00:00+00:00",
        "updated": "2020-03-28T00:00:00+00:00",
        "deleted": null,
        "comments": [
            {
                "id": 161,
                "user_id": 29,
                "discussion_id": 1,
                "comment": "Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
                "created": "2020-04-07T00:00:00+00:00",
                "updated": "2019-11-06T00:00:00+00:00",
                "deleted": null
            },
            {
                "id": 186,
                "user_id": 13,
                "discussion_id": 1,
                "comment": "Mauris lacinia sapien quis libero. Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh. In quis justo.",
                "created": "2020-07-21T00:00:00+00:00",
                "updated": "2020-02-04T00:00:00+00:00",
                "deleted": null
            }
		]
    }
}

```

/recommend_media/user/1

#Install
In the root directory run:
```bash
    composer install
```
Install config/schema/amuze_api_data.sql into your MySQL/MariaDB database and configure your connection in app_local.php
You can serve it locally with

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.
