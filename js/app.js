const items = document.getElementById('items')
const templateCard = document.getElementById('template-card')
const fragment = document.createDocumentFragment()
const cards = document.getElementById('cards')

document.addEventListener('DOMContentLoaded', () => {
    fetchData()
})
// Traer productos
const fetchData = async () => {
    try {
        const response = await fetch('../api/productos.json')
        const data = await response.json()
        //console.log(data)
        pintarCards(data)
    }
    catch (error) {
        console.log(error)
    }
}

// Pintar productos
const pintarCards = data => {
    console.log(data)
    data.forEach(producto => {
        console.log(producto)
        templateCard.querySelector('h3').textContent = producto.title
        //templateCard.querySelector('p').textContent = producto.precio
        const clone = templateCard.cloneNode(true)
        fragment.appendChild(clone)
    })
    items.appendChild(fragment)
}