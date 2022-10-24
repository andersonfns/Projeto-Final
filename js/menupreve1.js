var center = { x: 325, y: 175 };
var serv_dist = 250;
var pointer_dist = 172;
var pointer_time = 2;
var icon_size = 42;
var circle_radius = 38;
var text_top_margin = 18;
var tspan_delta = 16;

// nome é usado como título para a bolha
//icon é o id do símbolo svg correspondente
var services_data = [{ name: "Menu 1", icon: "industries" }, { name: "Menu 2", icon: "validation" }, { name: "Menu 3", icon: "engineering" }, { name: "Menu 4", icon: "management" }, { name: "Menu 5", icon: "manufacturing" }, { name: "Menu 6", icon: "technical" }, { name: "Menu 7", icon: "process" }];

var services = document.getElementById("service-collection");
var nav_container = document.getElementById("circle-nav-services");
var symbol_copy = document.getElementById("circle-nav-copy");
var use_copy = document.querySelector("use.nav-copy");

//Mantém o código DRY evitando namespace para criação de elementos
function createSVGElement(el) {
  return document.createElementNS("http://www.w3.org/2000/svg", el);
}

//Configuração rápida para vários atributos
function setAttributes(el, options) {
  Object.keys(options).forEach(function (attr) {
    el.setAttribute(attr, options[attr]);
  });
}

//Bolhas de serviço são criadas dinamicamente
function addService(serv, index) {
  var group = createSVGElement("g");
  group.setAttribute("class", "service serv-" + index);

  /* Este grupo é necessário para aplicar animações em
    o ícone e seu fundo ao mesmo tempo */
  var icon_group = createSVGElement("g");
  icon_group.setAttribute("class", "icon-wrapper");

  var circle = createSVGElement("circle");
  setAttributes(circle, {
    r: circle_radius,
    cx: center.x,
    cy: center.y
  });
  var circle_shadow = circle.cloneNode();
  setAttributes(circle, {
    class: 'shadow'
  });
  icon_group.appendChild(circle_shadow);
  icon_group.appendChild(circle);

  var symbol = createSVGElement("use");
  setAttributes(symbol, {
    'x': center.x - icon_size / 2,
    'y': center.y - icon_size / 2,
    'width': icon_size,
    'height': icon_size
  });
  symbol.setAttributeNS("http://www.w3.org/1999/xlink", "xlink:href", "#" + serv.icon);
  icon_group.appendChild(symbol);

  group.appendChild(icon_group);

  var text = createSVGElement("text");
  setAttributes(text, {
    x: center.x,
    y: center.y + circle_radius + text_top_margin
  });

  var tspan = createSVGElement("tspan");
  if (serv.name.indexOf('\n') >= 0) {

    var tspan2 = tspan.cloneNode();
    var name = serv.name.split('\n');
    jQuery(tspan).text(name[0]);
    jQuery(tspan2).text(name[1]);

    setAttributes(tspan2, {
      x: center.x,
      dy: tspan_delta
    });

    text.appendChild(tspan);
    text.appendChild(tspan2);
  } else {
    jQuery(tspan).text(serv.name);
    text.appendChild(tspan);
  }

  group.appendChild(text);
  services.appendChild(group);

  var service_bubble = jQuery(".serv-" + index);

 // Usa interpolação para procurar a posição correta
  twn_pivot_path.seek(index);
  TweenLite.set(service_bubble, {
    x: pivot_path.x,
    y: pivot_path.y,
    transformOrigin: "center center"
  });

  service_bubble.click(serviceClick);
}

//Cria ponteiro
function createPointer() {
  var service_pointer = createSVGElement("circle");

  setAttributes(service_pointer, {
    cx: center.x - pointer_dist,
    cy: center.y,
    r: 12,
    class: "pointer"
  });

  nav_container.appendChild(service_pointer);

  service_pointer = document.querySelector("svg .pointer");

  var pointer_circle = [{ x: 0, y: 0 }, { x: pointer_dist, y: pointer_dist }, { x: pointer_dist * 2, y: 0 }, { x: pointer_dist, y: -pointer_dist }, { x: 0, y: 0 }];

  twn_pointer_path.to(service_pointer, pointer_time, {
    bezier: {
      values: pointer_circle,
      curviness: 1.5 },
    ease: Power0.easeNone,
    transformOrigin: "center center"
  });
}

//Define o comportamento das bolhas de serviço
function serviceClick(ev) {

  //Há sempre um serviço ativo
  jQuery(".service.active").removeClass("active");

  var current = jQuery(ev.currentTarget);
  current.addClass("active");

  //Existe uma classe "serv-*" para cada bolha
  var current_class = current.attr("class").split(" ")[1];
  var class_index = current_class.split('-')[1];

  //Oculta o texto atual da bolha principal
  jQuery(use_copy).addClass("changing");

 // Coloca o ponteiro na posição correta
  twn_pointer_path.tweenTo(class_index * (pointer_time / (2 * 6)));

 
//Depois de estar completamente oculto, o texto muda e fica visível
  setTimeout(function () {
    var viewBoxY = 300 * class_index;
    symbol_copy.setAttribute("viewBox", "0 " + viewBoxY + " 300 300");
    jQuery(use_copy).removeClass("changing");
  }, 250);
}

//Array descreve pontos para um círculo inteiro para obter
//a curva certa
var half_circle = [{ x: -serv_dist, y: 0 }, { x: 0, y: serv_dist }, { x: serv_dist, y: 0 }, { x: 0, y: -serv_dist }, { x: -serv_dist, y: 0 }];

//Um objeto simples é usado na interpolação para recuperar seus valores
var pivot_path = { x: half_circle[0].x, y: half_circle[0].y };

//O objeto é animado com uma duração baseada em quantas bolhas
//deveria ser colocado
var twn_pivot_path = TweenMax.to(pivot_path, 12, {
  bezier: {
    values: half_circle,
    curviness: 1.5
  },
  ease: Linear.easeNone
});

services_data.reduce(function (count, serv) {
  addService(serv, count);
  return ++count;
}, 0);

//A variável é modificada dentro da função
//mas também é usado posteriormente para alternar sua classe
var twn_pointer_path = new TimelineMax({ paused: true });
createPointer();

//Adicioná-lo imediatamente aciona um bug para a transformação
setTimeout(function () {
  return jQuery("#service-collection .serv-0").addClass("active");
}, 200);
//# sourceURL=pen.js



