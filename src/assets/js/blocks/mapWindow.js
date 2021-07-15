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
        MyBalloonLayout = ymaps.templateLayoutFactory.createClass(
          '<div class="popover top">' +
            `<div class="close"><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.0607 3.06066C18.6464 2.47487 18.6464 1.52513 18.0607 0.93934C17.4749 0.353553 16.5251 0.353553 15.9393 0.93934L18.0607 3.06066ZM0.93934 15.9393C0.353553 16.5251 0.353553 17.4749 0.93934 18.0607C1.52513 18.6464 2.47487 18.6464 3.06066 18.0607L0.93934 15.9393ZM15.9393 18.0607C16.5251 18.6464 17.4749 18.6464 18.0607 18.0607C18.6464 17.4749 18.6464 16.5251 18.0607 15.9393L15.9393 18.0607ZM3.06066 0.93934C2.47487 0.353553 1.52513 0.353553 0.93934 0.93934C0.353553 1.52513 0.353553 2.47487 0.93934 3.06066L3.06066 0.93934ZM15.9393 0.93934L0.93934 15.9393L3.06066 18.0607L18.0607 3.06066L15.9393 0.93934ZM18.0607 15.9393L3.06066 0.93934L0.93934 3.06066L15.9393 18.0607L18.0607 15.9393Z" fill="#98A6B4"/>
            </svg></div>` +
            '<div class="arrow"></div>' +
            '<div class="popover-inner">' +
            "$[[options.contentLayout observeSize minWidth=235 maxWidth=255 maxHeight=350]]" +
            "</div>" +
            `<div class="map__btn map__btn_show btnWhite mapBtn_js">Выбрать</div>` +
            "</div>",
          {
            /**
             * Строит экземпляр макета на основе шаблона и добавляет его в родительский HTML-элемент.
             * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/layout.templateBased.Base.xml#build
             * @function
             * @name build
             */
            build: function () {
              this.constructor.superclass.build.call(this);

              this._$element = $(".popover", this.getParentElement());

              this.applyElementOffset();

              this._$element
                .find(".close")
                .on("click", $.proxy(this.onCloseClick, this));
            },

            /**
             * Удаляет содержимое макета из DOM.
             * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/layout.templateBased.Base.xml#clear
             * @function
             * @name clear
             */
            clear: function () {
              this._$element.find(".close").off("click");

              this.constructor.superclass.clear.call(this);
            },

            /**
             * Метод будет вызван системой шаблонов АПИ при изменении размеров вложенного макета.
             * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
             * @function
             * @name onSublayoutSizeChange
             */
            onSublayoutSizeChange: function () {
              MyBalloonLayout.superclass.onSublayoutSizeChange.apply(
                this,
                arguments
              );

              if (!this._isElement(this._$element)) {
                return;
              }

              this.applyElementOffset();

              this.events.fire("shapechange");
            },

            /**
             * Сдвигаем балун, чтобы "хвостик" указывал на точку привязки.
             * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
             * @function
             * @name applyElementOffset
             */
            applyElementOffset: function () {
              this._$element.css({
                left: -(this._$element[0].offsetWidth / 2),
                top: -(
                  this._$element[0].offsetHeight +
                  this._$element.find(".arrow")[0].offsetHeight
                ),
              });
            },

            /**
             * Закрывает балун при клике на крестик, кидая событие "userclose" на макете.
             * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
             * @function
             * @name onCloseClick
             */
            onCloseClick: function (e) {
              e.preventDefault();

              this.events.fire("userclose");
            },

            /**
             * Используется для автопозиционирования (balloonAutoPan).
             * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/ILayout.xml#getClientBounds
             * @function
             * @name getClientBounds
             * @returns {Number[][]} Координаты левого верхнего и правого нижнего углов шаблона относительно точки привязки.
             */
            getShape: function () {
              if (!this._isElement(this._$element)) {
                return MyBalloonLayout.superclass.getShape.call(this);
              }

              var position = this._$element.position();

              return new ymaps.shape.Rectangle(
                new ymaps.geometry.pixel.Rectangle([
                  [position.left, position.top],
                  [
                    position.left + this._$element[0].offsetWidth,
                    position.top +
                      this._$element[0].offsetHeight +
                      this._$element.find(".arrow")[0].offsetHeight,
                  ],
                ])
              );
            },

            /**
             * Проверяем наличие элемента (в ИЕ и Опере его еще может не быть).
             * @function
             * @private
             * @name _isElement
             * @param {jQuery} [element] Элемент.
             * @returns {Boolean} Флаг наличия.
             */
            _isElement: function (element) {
              return element && element[0] && element.find(".arrow")[0];
            },
          }
        ),
        MyBalloonContentLayout = ymaps.templateLayoutFactory.createClass(
          "<div class='map__baloonTitle'> $[properties.balloonHeader] </div>" +
            `<div class='map__baloonTel'>  $[properties.balloonBody] </div>` +
            `<div class='map__baloonTel'>  $[properties.balloonFooter] </div>`
        );

      const click = () => {
        $(".mapBtn_js").on("click", function () {
          $(".windowsMapWrapper__js").addClass("hidden");
          objectManager.objects.balloon.close();
          console.log(objectManager.objects);
        });
      };
      var objectManager = new ymaps.ObjectManager({
        clusterize: true,
        gridSize: 32,
        clusterDisableClickZoom: true,
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
          options: {
            balloonLayout: MyBalloonLayout,
            balloonContentLayout: MyBalloonContentLayout,
          },
          properties: {
            balloonHeader: address[i].address,
            balloonBody: address[i].tel,
            balloonFooter: address[i].clock,
          },
        });
      }
      objectManager.add(objects);
      myMap.geoObjects.add(objectManager);
      myMap.options.set("dragCursor", "arrow");
      objectManager.objects.events.add("balloonopen", () => {
        click();
      });
    }

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
        groups = [
          {
            id: $(this).data("id"),
            center: [$(this).data("coord1"), $(this).data("coord2")],
          },
        ];
        center = [$(this).data("coord1"), $(this).data("coord2")];
        zoom = 15;
        var myMap;
        ymaps.ready(init);
      }
    });
  }
}
