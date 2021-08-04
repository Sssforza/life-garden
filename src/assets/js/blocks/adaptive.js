export function adaptive() {
  let windowInnerWidth = document.documentElement.clientWidth;
  let lg = 1400; //1024
  let xs = 541; //540 content=320

  let viewport = $('meta[name="viewport"]');

  if (window.screen.availWidth < lg) {
    if (device.tablet()) {
      viewport.attr("content", "width=1024");
    }
  }
  if (window.screen.availWidth < xs) {
    if (device.mobile()) {
      viewport.attr("content", "width=320");
    }
  }
}
