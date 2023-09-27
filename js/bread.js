// Obtener la ruta de la página actual
var currentPagePath = window.location.pathname;

// Obtener todos los enlaces del breadcrumb
var breadcrumbLinks = document.querySelectorAll("#breadcrumb li a");

// Crear un array vacío para almacenar los enlaces del breadcrumb actualizado
var updatedBreadcrumbLinks = [];

// Iterar sobre los enlaces del breadcrumb
for (var i = 0; i < breadcrumbLinks.length; i++) {
  var link = breadcrumbLinks[i];

  // Agregar el enlace actual al array de enlaces del breadcrumb actualizado
  updatedBreadcrumbLinks.push(link);

  // Si la ruta del enlace coincide con la ruta de la página actual, detener el bucle
  if (link.getAttribute("href") === currentPagePath) {
    break;
  }
}

// Remover todos los enlaces del breadcrumb existentes
breadcrumbLinks.forEach(function (link) {
  link.parentNode.removeChild(link);
});

// Agregar los enlaces del breadcrumb actualizado al breadcrumb
updatedBreadcrumbLinks.forEach(function (link) {
  document.getElementById("breadcrumb").appendChild(link.parentNode);
});
