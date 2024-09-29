function realizarTodasOperciones(){
    fetch('libreria/calcular.php',{
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            numero1: 24,
            numero2: 12
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            alert(data.error);
        } else {
            document.getElementById('resultadoSuma').textContent = `Suma: ${data.suma}`;
            document.getElementById('resultadoResta').textContent = `Resta: ${data.resta}`;
            document.getElementById('resultadoMultiplicacion').textContent = `Multiplicacion: ${data.multiplicacion}`;
            document.getElementById('resultadoDivision').textContent = `Division: ${data.division}`;
        }
    })
    .catch(error => console.error('Error: ', error));
}
document.addEventListener("DOMContentLoaded", function(){
    realizarTodasOperciones();
});