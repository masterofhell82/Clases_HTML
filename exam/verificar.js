function verificar() {
    if (window.confirm('Es mayor de edad?'))
        window.location = 'examen.html';
    else
        window.alert('Cuando sea mayor de edad podrá ingresar');
}
