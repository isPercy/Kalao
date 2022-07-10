const items = document.getElementById('items')
const fragment = document.createDocumentFragment()
const cards = document.getElementById('cards')
const templateCard = document.getElementById('template-card').content

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
    data.forEach(item => {
        //console.log(item)
        templateCard.querySelector('h5').textContent = item.title
        templateCard.querySelector('p').textContent = item.precio
        templateCard.querySelector('img').setAttribute("src", item.thumbnailUrl)
        const clone = templateCard.cloneNode(true)
        fragment.appendChild(clone)
    })
    cards.appendChild(fragment)
}