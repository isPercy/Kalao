// Objeto con index
// Colecciones de datos ordenados por un valor de índice
let Ejcarrito = {
    1: { nombre: "item 1" },
    2: { nombre: "item 2" },
  };
  for (const key in Ejcarrito) {
    if (Ejcarrito.hasOwnProperty(key)) {
      const element = Ejcarrito[key];
      console.log(element);
    }
  }
  
  Object.values(Ejcarrito).forEach((item) => console.log(item));
  
  console.log(Ejcarrito[1]);
  // Nos sirve para contar elementos
  console.log(Object.keys(Ejcarrito));
  console.log(Object.keys(Ejcarrito).length);