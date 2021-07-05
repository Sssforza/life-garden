// map
export function mapInit () {

    if(document.querySelector('#map')) {
        var myMap;
		var bigMap = false;
        var groups = [];

        $('.mapItem_js').each(function(item, i) {
            groups.push({
                id:item, center: [$(this).attr('data-coord1'), $(this).attr('data-coord2')]
            })
        });

		ymaps.ready(init);

		var center = [54.9924400, 73.3685900]; //омск
		var zoom = 12;

		function init () {
			$("#map").empty();
			myMap = null;
			var myMap = new ymaps.Map('map', {
					center: center,
					zoom: zoom,
					controls: []
				}, {
					searchControlProvider: 'yandex#search'
				}),
				objectManager = new ymaps.ObjectManager({
					clusterize: true,
					gridSize: 32,
					clusterDisableClickZoom: true,
					hasBalloon:false,
				});
				objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');
				var objects = [];
					objectManager.objects.options.set({
						iconLayout: 'default#image',
						iconImageHref: '/dist/img/mapIcon.png',
						iconImageSize: [40, 52],
					});
					var size = Object.keys(groups).length;
					size -1;
					for (var i = 0, l = size; i < l; i++) {
						let groupsId = groups[i].id;
						let centerGroups = groups[i].center;
						objects.push({
							type: 'Feature',
							id: groupsId,
							geometry: {
								type: 'Point',
								coordinates: centerGroups
							}
						});
					}
					objectManager.add(objects);
					myMap.geoObjects.add(objectManager);
					myMap.options.set('dragCursor', 'arrow');
		}

        $('.mapItem_js').on('click', function() {
            $('.map__aside .mapItem_js').not($(this)).removeClass('show');
            if($(this).hasClass('show')) {
                $(this).removeClass('show');
                groups = [];
                $('.mapItem_js').each(function(item, i) {
                    groups.push({
                        id:item, center: [$(this).attr('data-coord1'), $(this).attr('data-coord2')]
                    })
                });
                center = [54.9924400, 73.3685900]; //омск
                zoom = 12;
                var myMap;
                ymaps.ready(init);
            } else {
                $(this).addClass('show');
                groups = [{id: $(this).data("id"), center: [$(this).data("coord1"), $(this).data("coord2")]}];
                center = [$(this).data("coord1"), $(this).data("coord2")];
                zoom = 15;
                var myMap;
                ymaps.ready(init);
            }
        });
	}

}