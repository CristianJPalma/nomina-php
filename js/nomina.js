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
            document.getElementById('resultadoSalario').textContent = `Salario: ${data.salario}`;
            document.getElementById('resultadoSalud').textContent = `Salud: ${data.salud}`;
            document.getElementById('resultadoSubTransporte').textContent = `Subsidio de Transporte: ${data.subTransporte}`;
            document.getElementById('resultadoPension').textContent = `Pension: ${data.pension}`;
            document.getElementById('resultadoArl').textContent = `Arl: ${data.arl}`;
            document.getElementById('resultadoRetencion').textContent = `Retencion: ${data.retencion}`;
            document.getElementById('resultadoDeducible').textContent = `Deducible: ${data.deducible}`;
            document.getElementById('resultadoSalarioTotal').textContent = `Salario Total: ${data.pagoTotal}`;
        }
    })
    .catch(error => console.error('Error: ', error));
}
document.addEventListener("DOMContentLoaded", function(){
    realizarTodasOperciones();
});