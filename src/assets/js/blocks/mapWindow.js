// map
export function mapWindow() {
  if (document.querySelector("#mapWindow")) {
    var myMap;
    var bigMap = false;
    var groups = [];

    $(".mapItem_js").each(function (item, i) {
      groups.push({
        id: item,
        center: [$(this).attr("data-coord1"), $(this).attr("data-coord2")],
      });
    });

    ymaps.ready(init);

    var center = [54.99244, 73.36859]; //омск
    var zoom = 12;

    function init() {
      $("#mapWindow").empty();
      myMap = null;
      var myMap = new ymaps.Map(
          "mapWindow",
          {
            center: center,
            zoom: zoom,
            controls: [],
          },
          {
            searchControlProvider: "yandex#search",
          }
        ),
        objectManager = new ymaps.ObjectManager({
          clusterize: true,
          gridSize: 32,
          clusterDisableClickZoom: true,
          hideIconOnBalloonOpen: true,
        });
      objectManager.clusters.options.set("preset", "islands#greenClusterIcons");
      var objects = [];
      objectManager.objects.options.set({
        iconLayout: "default#image",
        iconImageHref: "/dist/img/mapIcon.png",
        iconImageSize: [40, 52],
      });
      var size = Object.keys(groups).length;
      size - 1;
      for (var i = 0, l = size; i < l; i++) {
        let address = [
          {
            address: "ул. Маяковского, 20",
            tel: "+7 (908) 310-48-07",
            clock: "Понедельник ­–­­ Пятница 9:00 ­–­­ 19:00",
          },
          {
            address: "ул. Сакена Сейфуллина, 27",
            tel: "+7 (908) 310-94-77",
            clock: "Понедельник ­–­­ Пятница 9:00 ­–­­ 19:00",
          },
          {
            address: "ул. пр. Мира, 64",
            tel: "+7 (908) 310-35-69",
            clock: "Понедельник ­–­­ Пятница 9:00 ­–­­ 19:00",
          },
          {
            address: "ул. 10 лет Октября, 113",
            tel: "+7 (908) 310-35-69",
            clock: "Понедельник ­–­­ Пятница 9:00 ­–­­ 19:00",
          },
          {
            address: "проспект Карла Маркса, 83",
            tel: "+7 (908) 310-92-55",
            clock: "Понедельник ­–­­ Пятница 9:00 ­–­­ 19:00",
          },
        ];
        let groupsId = groups[i].id;
        let centerGroups = groups[i].center;
        objects.push({
          type: "Feature",
          id: groupsId,
          geometry: {
            type: "Point",
            coordinates: centerGroups,
          },
          properties: {
            balloonContentHeader: `<div class='map__baloonTitle'> ${address[i].address} </div>`,
            balloonContentBody: `<div class='map__baloonTel'> ${address[i].tel} <br> ${address[i].clock} </div>`,
            balloonContentFooter: `<div class="map__btn btnWhite mapBtn_js">Выбрать</div>`,
          },
        });
      }
      objectManager.add(objects);
      myMap.geoObjects.add(objectManager);
      myMap.options.set("dragCursor", "arrow");
    }

    $(".mapBtn_js").on("click", function () {
      console.log("fddfa");
      ymaps.ready(init);
    });

    $(".mapItem_js").on("click", function () {
      $(".map__aside .mapItem_js").not($(this)).removeClass("show");
      if ($(this).hasClass("show")) {
        $(this).removeClass("show");
        groups = [];
        $(".mapItem_js").each(function (item, i) {
          groups.push({
            id: item,
            center: [$(this).attr("data-coord1"), $(this).attr("data-coord2")],
          });
        });
        center = [54.99244, 73.36859]; //омск
        zoom = 12;
        var myMap;
        ymaps.ready(init);
      } else {
        $(this).addClass("show");
        center = [$(this).data("coord1"), $(this).data("coord2")];
        zoom = 15;
        var myMap;
        ymaps.ready(init);
      }
    });
  }
}
