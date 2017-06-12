# Images over the ChurchSuite API

[Home](https://github.com/ChurchSuite/churchsuite-api)

A number of our API endpoints provide a means of accessing the images related to a resource, e.g. contact, child or small group images. A sample response when requesting the JSON response for a small group may contain the following:

```json
{
  "id":"1",
  "reference":"1",
  "name":"West Bridgford",
  
  ...
  
  "images":{
      "thumb":{
        "px":128,
        "square":true,
        "transparent":false,
        "mtime":1497255946,
        "url":"https:\/\/d2a59nxql6nsk9.cloudfront.net\/demo\/smallgroups\/groups\/1_wtmeeecO_thumb.jpg"
      },
      "sm":{
        "px":256,
        "square":false,
        "transparent":false,
        "mtime":1497255946,
        "url":"https:\/\/d2a59nxql6nsk9.cloudfront.net\/demo\/smallgroups\/groups\/1_wtmeeecO_sm.jpg"
      },
      "md":{
        "px":512,
        "square":false,
        "transparent":false,
        "mtime":1497255946,
        "url":"https:\/\/d2a59nxql6nsk9.cloudfront.net\/demo\/smallgroups\/groups\/1_wtmeeecO_md.jpg"
      },
      "lg":{
        "px":1024,
        "square":false,
        "transparent":false,
        "mtime":1497255946,
        "url":"https:\/\/d2a59nxql6nsk9.cloudfront.net\/demo\/smallgroups\/groups\/1_wtmeeecO_lg.jpg"
      },
  },
  
  ...
  
}
```

The images are sized/proportioned as follows:
* `thumb` 128x128px square image. A square cropped version of image that was originally uploaded.
* `sm` 256px wide image. A width-resized version of the image that was originally uploaded.
* `md` 512px wide image. A width-resized version of the image that was originally uploaded.
* `lg` 1024px wide image. A width-resized version of the image that was originally uploaded.

## Deprecated image properties

For backwards compatibility, we also provide the following properties against the images object. Support for these image properties was deprecated in March 2017 and they should no longer be used.

```json
{
  "id":"1",
  "reference":"1",
  "name":"West Bridgford",
  
  ...
  
  "images":{
    "original_16":"https:\/\/d2a59nxql6nsk9.cloudfront.net\/demo\/smallgroups\/groups\/1_wtmeeecO_thumb.jpg",
    "original_100":"https:\/\/d2a59nxql6nsk9.cloudfront.net\/demo\/smallgroups\/groups\/1_wtmeeecO_sm.jpg",
    "original_500":"https:\/\/d2a59nxql6nsk9.cloudfront.net\/demo\/smallgroups\/groups\/1_wtmeeecO_md.jpg",
    "original_1000":"https:\/\/d2a59nxql6nsk9.cloudfront.net\/demo\/smallgroups\/groups\/1_wtmeeecO_lg.jpg",
    "square_16":"https:\/\/d2a59nxql6nsk9.cloudfront.net\/demo\/smallgroups\/groups\/1_wtmeeecO_thumb.jpg",
    "square_100":"https:\/\/d2a59nxql6nsk9.cloudfront.net\/demo\/smallgroups\/groups\/1_wtmeeecO_thumb.jpg"
  },
  
  ...
  
}
```
