//      CONSTANTES TEMPLATES CARDS
const fragment = document.createDocumentFragment()
const cards = document.getElementById('cards')
const templateCard = document.getElementById('template-card').content
//      CONSTANTE CARRITO
// const items = document.getElementById('items')
// const footer = document.getElementById('footer')
// const templateFooter = document.getElementById('template-footer').content
// const templateCarrito = document.getElementById('template-carrito').content
// let carrito = {}

document.addEventListener('DOMContentLoaded', () => {fetchData()});
// Traer productos
const fetchData = async () => {
    try {
        const res = await fetch('../api/productos.json');
        const data = await res.json()
        //console.log(data)
        pintarCards(data)
    }
    catch (error) {
        console.log(error)
    }
}

// Pintar productos
const pintarCards = data => {
    //console.log(data)
    data.forEach(producto => {
        //console.log(producto)
        templateCard.querySelector('h3').textContent = producto.title
        templateCard.querySelector('small').textContent = producto.precio
        templateCard.querySelector('img').setAttribute("src", producto.thumbnailUrl)
        templateCard.querySelector('.btn-outline-primary').dataset.id = producto.id
        const clone = templateCard.cloneNode(true)
        fragment.appendChild(clone)
    })
    cards.appendChild(fragment)
}
