/* Waiting for the DOM to be loaded before executing the function. */
document.addEventListener('DOMContentLoaded', () =>{
    fetchData()
})
/**
 * It fetches the data from the JSON file and then logs it to the console.
 */
const fetchData = async() => {
    try {
        const res = await fetch('productos.json')
        const data = await res.json()
        console.log(data)
    } catch (error) {
        console.log(error)
    }
}