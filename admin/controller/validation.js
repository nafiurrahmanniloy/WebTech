document.getElementById('myForm').addEventListener('submit', function (event) {
    event.preventDefault();

    var address = document.getElementById('address').value;
    var age = document.getElementById('age').value;
    var zip = document.getElementById('zip').value;
    var gender = document.querySelector('input[name="gender"]:checked').value;

    if (address === '') {
        alert('Address is required');
    } 
    if (age < 18 || age > 100) {
        alert('Age must be between 18 and 100');
    }
    if (zip.length !== 5) {
        alert('Zip must be 5 digits long');
    }
     if (!gender) {
        alert('Gender is required');
    } 
    else {
        alert('Form is valid');
    }
});