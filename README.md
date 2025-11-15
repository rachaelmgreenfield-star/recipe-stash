# recipe-stash

## Local dev

* Make sure Docker Desktop or the daemon is running
* Build image with `docker compose build`
* Run container and watch with `docker compose up --watch`
* Navigate to http://localhost:9000/ to view local build

## Update prod

* Builds automatically via wasmer at https://recipe-stash.wasmer.app/

## Recipe template
```
# TITLE
Optional subheader

## info  
* About XXX minutes  
* XXX servings  

## ingredients
* 

## steps  
1. 

## notes  
* 

## based on  
* url to where the recipe came from
```

## Todo
* Fix docker watch issue
* Add recipe categories
* Allow more sections to be added via markdown