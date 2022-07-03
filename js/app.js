//const cards = document.getElementById('cards')
const items = document.getElementById('items')
const templateCard = document.getElementById('template-card')
//const fragment = document.createDocumentFragment()

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
}