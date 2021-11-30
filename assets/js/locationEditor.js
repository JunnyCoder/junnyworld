fetch('./assets/php/mapMaker.php')
    .then(res => res.json())
    .then(data => simplemaps_worldmap_mapdata["locations"] = {"0" : data[0]} )
    .catch(err => {
        console.log('Fetch Error', err);
    });